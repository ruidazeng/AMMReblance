// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code
// EDIT THE CORRESPONDENT .ts FILE INSTEAD

"use strict";
// run with `node test_timeout_hang`
// TODO: integrate with CI tests somehow...
/* eslint-disable */
const { timeout } = require('../base/functions');
(async function () {
    await timeout(10000, Promise.resolve('foo'));
    console.log('Look ma, no hangs!'); // should terminate the process immediately..
}());
