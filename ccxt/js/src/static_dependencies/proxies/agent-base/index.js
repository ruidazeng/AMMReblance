// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code
// EDIT THE CORRESPONDENT .ts FILE INSTEAD

import * as http from 'http';
export * from './helpers.js';
function isSecureEndpoint() {
    const { stack } = new Error();
    if (typeof stack !== 'string')
        return false;
    return stack
        .split('\n')
        .some((l) => l.indexOf('(https.js:') !== -1 ||
        l.indexOf('node:https:') !== -1);
}
const INTERNAL = Symbol('AgentBaseInternalState');
export class Agent extends http.Agent {
    constructor(opts) {
        super(opts);
        this[INTERNAL] = {};
    }
    createSocket(req, options, cb) {
        // Need to determine whether this is an `http` or `https` request.
        // First check the `secureEndpoint` property explicitly, since this
        // means that a parent `Agent` is "passing through" to this instance.
        let secureEndpoint = typeof options.secureEndpoint === 'boolean'
            ? options.secureEndpoint
            : undefined;
        // If no explicit `secure` endpoint, check if `protocol` property is
        // set. This will usually be the case since using a full string URL
        // or `URL` instance should be the most common case.
        if (typeof secureEndpoint === 'undefined' &&
            typeof options.protocol === 'string') {
            secureEndpoint = options.protocol === 'https:';
        }
        // Finally, if no `protocol` property was set, then fall back to
        // checking the stack trace of the current call stack, and try to
        // detect the "https" module.
        if (typeof secureEndpoint === 'undefined') {
            secureEndpoint = isSecureEndpoint();
        }
        const connectOpts = { ...options, secureEndpoint };
        Promise.resolve()
            .then(() => this.connect(req, connectOpts))
            .then((socket) => {
            if (socket instanceof http.Agent) {
                // @ts-expect-error `addRequest()` isn't defined in `@types/node`
                return socket.addRequest(req, connectOpts);
            }
            this[INTERNAL].currentSocket = socket;
            // @ts-expect-error `createSocket()` isn't defined in `@types/node`
            super.createSocket(req, options, cb);
        }, cb);
    }
    createConnection() {
        const socket = this[INTERNAL].currentSocket;
        this[INTERNAL].currentSocket = undefined;
        if (!socket) {
            throw new Error('No socket was returned in the `connect()` function');
        }
        return socket;
    }
    get defaultPort() {
        return (this[INTERNAL].defaultPort ??
            (this.protocol === 'https:' ? 443 : 80));
    }
    set defaultPort(v) {
        if (this[INTERNAL]) {
            this[INTERNAL].defaultPort = v;
        }
    }
    get protocol() {
        return (this[INTERNAL].protocol ?? (isSecureEndpoint() ? 'https:' : 'http:'));
    }
    set protocol(v) {
        if (this[INTERNAL]) {
            this[INTERNAL].protocol = v;
        }
    }
}
