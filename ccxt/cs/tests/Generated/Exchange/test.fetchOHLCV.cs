using ccxt;
namespace Tests;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


public partial class testMainClass : BaseTest
{
    async static public Task testFetchOHLCV(Exchange exchange, object skippedProperties, object symbol)
    {
        object method = "fetchOHLCV";
        object timeframeKeys = new List<object>(((IDictionary<string,object>)exchange.timeframes).Keys);
        assert(getArrayLength(timeframeKeys), add(add(add(exchange.id, " "), method), " - no timeframes found"));
        // prefer 1m timeframe if available, otherwise return the first one
        object chosenTimeframeKey = "1m";
        if (!isTrue(exchange.inArray(chosenTimeframeKey, timeframeKeys)))
        {
            chosenTimeframeKey = getValue(timeframeKeys, 0);
        }
        object limit = 10;
        object duration = exchange.parseTimeframe(chosenTimeframeKey);
        object since = subtract(subtract(exchange.milliseconds(), multiply(multiply(duration, limit), 1000)), 1000);
        object ohlcvs = await exchange.fetchOHLCV(symbol, chosenTimeframeKey, since, limit);
        testSharedMethods.assertNonEmtpyArray(exchange, skippedProperties, method, ohlcvs, symbol);
        object now = exchange.milliseconds();
        for (object i = 0; isLessThan(i, getArrayLength(ohlcvs)); postFixIncrement(ref i))
        {
            testOHLCV(exchange, skippedProperties, method, getValue(ohlcvs, i), symbol, now);
        }
    }

}