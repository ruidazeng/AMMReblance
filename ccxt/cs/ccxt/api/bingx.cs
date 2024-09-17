// -------------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -------------------------------------------------------------------------------

namespace ccxt;

public partial class bingx : Exchange
{
    public bingx (object args = null): base(args) {}

    public async Task<object> spotV1PublicGetServerTime (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetServerTime",parameters);
    }

    public async Task<object> spotV1PublicGetCommonSymbols (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetCommonSymbols",parameters);
    }

    public async Task<object> spotV1PublicGetMarketTrades (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetMarketTrades",parameters);
    }

    public async Task<object> spotV1PublicGetMarketDepth (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetMarketDepth",parameters);
    }

    public async Task<object> spotV1PublicGetMarketKline (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetMarketKline",parameters);
    }

    public async Task<object> spotV1PublicGetTicker24hr (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetTicker24hr",parameters);
    }

    public async Task<object> spotV1PublicGetTickerPrice (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetTickerPrice",parameters);
    }

    public async Task<object> spotV1PublicGetTickerBookTicker (object parameters = null)
    {
        return await this.callAsync ("spotV1PublicGetTickerBookTicker",parameters);
    }

    public async Task<object> spotV1PrivateGetTradeQuery (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetTradeQuery",parameters);
    }

    public async Task<object> spotV1PrivateGetTradeOpenOrders (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetTradeOpenOrders",parameters);
    }

    public async Task<object> spotV1PrivateGetTradeHistoryOrders (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetTradeHistoryOrders",parameters);
    }

    public async Task<object> spotV1PrivateGetTradeMyTrades (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetTradeMyTrades",parameters);
    }

    public async Task<object> spotV1PrivateGetUserCommissionRate (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetUserCommissionRate",parameters);
    }

    public async Task<object> spotV1PrivateGetAccountBalance (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivateGetAccountBalance",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeOrder (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeOrder",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeCancel (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeCancel",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeBatchOrders (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeBatchOrders",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeOrderCancelReplace (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeOrderCancelReplace",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeCancelOrders (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeCancelOrders",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeCancelOpenOrders (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeCancelOpenOrders",parameters);
    }

    public async Task<object> spotV1PrivatePostTradeCancelAllAfter (object parameters = null)
    {
        return await this.callAsync ("spotV1PrivatePostTradeCancelAllAfter",parameters);
    }

    public async Task<object> spotV2PublicGetMarketDepth (object parameters = null)
    {
        return await this.callAsync ("spotV2PublicGetMarketDepth",parameters);
    }

    public async Task<object> spotV2PublicGetMarketKline (object parameters = null)
    {
        return await this.callAsync ("spotV2PublicGetMarketKline",parameters);
    }

    public async Task<object> spotV3PrivateGetGetAssetTransfer (object parameters = null)
    {
        return await this.callAsync ("spotV3PrivateGetGetAssetTransfer",parameters);
    }

    public async Task<object> spotV3PrivateGetAssetTransfer (object parameters = null)
    {
        return await this.callAsync ("spotV3PrivateGetAssetTransfer",parameters);
    }

    public async Task<object> spotV3PrivateGetCapitalDepositHisrec (object parameters = null)
    {
        return await this.callAsync ("spotV3PrivateGetCapitalDepositHisrec",parameters);
    }

    public async Task<object> spotV3PrivateGetCapitalWithdrawHistory (object parameters = null)
    {
        return await this.callAsync ("spotV3PrivateGetCapitalWithdrawHistory",parameters);
    }

    public async Task<object> spotV3PrivatePostPostAssetTransfer (object parameters = null)
    {
        return await this.callAsync ("spotV3PrivatePostPostAssetTransfer",parameters);
    }

    public async Task<object> swapV1PublicGetTickerPrice (object parameters = null)
    {
        return await this.callAsync ("swapV1PublicGetTickerPrice",parameters);
    }

    public async Task<object> swapV1PublicGetMarketHistoricalTrades (object parameters = null)
    {
        return await this.callAsync ("swapV1PublicGetMarketHistoricalTrades",parameters);
    }

    public async Task<object> swapV1PrivateGetPositionSideDual (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivateGetPositionSideDual",parameters);
    }

    public async Task<object> swapV1PrivateGetMarketMarkPriceKlines (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivateGetMarketMarkPriceKlines",parameters);
    }

    public async Task<object> swapV1PrivateGetTradeBatchCancelReplace (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivateGetTradeBatchCancelReplace",parameters);
    }

    public async Task<object> swapV1PrivateGetTradeFullOrder (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivateGetTradeFullOrder",parameters);
    }

    public async Task<object> swapV1PrivatePostTradeCancelReplace (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivatePostTradeCancelReplace",parameters);
    }

    public async Task<object> swapV1PrivatePostPositionSideDual (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivatePostPositionSideDual",parameters);
    }

    public async Task<object> swapV1PrivatePostTradeClosePosition (object parameters = null)
    {
        return await this.callAsync ("swapV1PrivatePostTradeClosePosition",parameters);
    }

    public async Task<object> swapV2PublicGetServerTime (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetServerTime",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteContracts (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteContracts",parameters);
    }

    public async Task<object> swapV2PublicGetQuotePrice (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuotePrice",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteDepth (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteDepth",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteTrades (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteTrades",parameters);
    }

    public async Task<object> swapV2PublicGetQuotePremiumIndex (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuotePremiumIndex",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteFundingRate (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteFundingRate",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteKlines (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteKlines",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteOpenInterest (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteOpenInterest",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteTicker (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteTicker",parameters);
    }

    public async Task<object> swapV2PublicGetQuoteBookTicker (object parameters = null)
    {
        return await this.callAsync ("swapV2PublicGetQuoteBookTicker",parameters);
    }

    public async Task<object> swapV2PrivateGetUserBalance (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetUserBalance",parameters);
    }

    public async Task<object> swapV2PrivateGetUserPositions (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetUserPositions",parameters);
    }

    public async Task<object> swapV2PrivateGetUserIncome (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetUserIncome",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeOpenOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeOpenOrders",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeOpenOrder (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeOpenOrder",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeOrder (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeOrder",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeMarginType (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeMarginType",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeLeverage (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeLeverage",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeForceOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeForceOrders",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeAllOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeAllOrders",parameters);
    }

    public async Task<object> swapV2PrivateGetTradeAllFillOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetTradeAllFillOrders",parameters);
    }

    public async Task<object> swapV2PrivateGetUserIncomeExport (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetUserIncomeExport",parameters);
    }

    public async Task<object> swapV2PrivateGetUserCommissionRate (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetUserCommissionRate",parameters);
    }

    public async Task<object> swapV2PrivateGetQuoteBookTicker (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateGetQuoteBookTicker",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeOrder (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeOrder",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeBatchOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeBatchOrders",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeCloseAllPositions (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeCloseAllPositions",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeCancelAllAfter (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeCancelAllAfter",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeMarginType (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeMarginType",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeLeverage (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeLeverage",parameters);
    }

    public async Task<object> swapV2PrivatePostTradePositionMargin (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradePositionMargin",parameters);
    }

    public async Task<object> swapV2PrivatePostTradeOrderTest (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivatePostTradeOrderTest",parameters);
    }

    public async Task<object> swapV2PrivateDeleteTradeOrder (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateDeleteTradeOrder",parameters);
    }

    public async Task<object> swapV2PrivateDeleteTradeBatchOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateDeleteTradeBatchOrders",parameters);
    }

    public async Task<object> swapV2PrivateDeleteTradeAllOpenOrders (object parameters = null)
    {
        return await this.callAsync ("swapV2PrivateDeleteTradeAllOpenOrders",parameters);
    }

    public async Task<object> swapV3PublicGetQuoteKlines (object parameters = null)
    {
        return await this.callAsync ("swapV3PublicGetQuoteKlines",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketContracts (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketContracts",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketPremiumIndex (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketPremiumIndex",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketOpenInterest (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketOpenInterest",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketKlines (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketKlines",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketDepth (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketDepth",parameters);
    }

    public async Task<object> cswapV1PublicGetMarketTicker (object parameters = null)
    {
        return await this.callAsync ("cswapV1PublicGetMarketTicker",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeLeverage (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeLeverage",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeForceOrders (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeForceOrders",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeAllFillOrders (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeAllFillOrders",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeOpenOrders (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeOpenOrders",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeOrderDetail (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeOrderDetail",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeOrderHistory (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeOrderHistory",parameters);
    }

    public async Task<object> cswapV1PrivateGetTradeMarginType (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetTradeMarginType",parameters);
    }

    public async Task<object> cswapV1PrivateGetUserCommissionRate (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetUserCommissionRate",parameters);
    }

    public async Task<object> cswapV1PrivateGetUserPositions (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetUserPositions",parameters);
    }

    public async Task<object> cswapV1PrivateGetUserBalance (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateGetUserBalance",parameters);
    }

    public async Task<object> cswapV1PrivatePostTradeOrder (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivatePostTradeOrder",parameters);
    }

    public async Task<object> cswapV1PrivatePostTradeLeverage (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivatePostTradeLeverage",parameters);
    }

    public async Task<object> cswapV1PrivatePostTradeCloseAllPositions (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivatePostTradeCloseAllPositions",parameters);
    }

    public async Task<object> cswapV1PrivatePostTradeMarginType (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivatePostTradeMarginType",parameters);
    }

    public async Task<object> cswapV1PrivatePostTradePositionMargin (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivatePostTradePositionMargin",parameters);
    }

    public async Task<object> cswapV1PrivateDeleteTradeAllOpenOrders (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateDeleteTradeAllOpenOrders",parameters);
    }

    public async Task<object> cswapV1PrivateDeleteTradeCancelOrder (object parameters = null)
    {
        return await this.callAsync ("cswapV1PrivateDeleteTradeCancelOrder",parameters);
    }

    public async Task<object> contractV1PrivateGetAllPosition (object parameters = null)
    {
        return await this.callAsync ("contractV1PrivateGetAllPosition",parameters);
    }

    public async Task<object> contractV1PrivateGetAllOrders (object parameters = null)
    {
        return await this.callAsync ("contractV1PrivateGetAllOrders",parameters);
    }

    public async Task<object> contractV1PrivateGetBalance (object parameters = null)
    {
        return await this.callAsync ("contractV1PrivateGetBalance",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalConfigGetall (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalConfigGetall",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalDepositAddress (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalDepositAddress",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalInnerTransferRecords (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalInnerTransferRecords",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalSubAccountDepositAddress (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalSubAccountDepositAddress",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalDepositSubHisrec (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalDepositSubHisrec",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalSubAccountInnerTransferRecords (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalSubAccountInnerTransferRecords",parameters);
    }

    public async Task<object> walletsV1PrivateGetCapitalDepositRiskRecords (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivateGetCapitalDepositRiskRecords",parameters);
    }

    public async Task<object> walletsV1PrivatePostCapitalWithdrawApply (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivatePostCapitalWithdrawApply",parameters);
    }

    public async Task<object> walletsV1PrivatePostCapitalInnerTransferApply (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivatePostCapitalInnerTransferApply",parameters);
    }

    public async Task<object> walletsV1PrivatePostCapitalSubAccountInnerTransferApply (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivatePostCapitalSubAccountInnerTransferApply",parameters);
    }

    public async Task<object> walletsV1PrivatePostCapitalDepositCreateSubAddress (object parameters = null)
    {
        return await this.callAsync ("walletsV1PrivatePostCapitalDepositCreateSubAddress",parameters);
    }

    public async Task<object> subAccountV1PrivateGetList (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivateGetList",parameters);
    }

    public async Task<object> subAccountV1PrivateGetAssets (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivateGetAssets",parameters);
    }

    public async Task<object> subAccountV1PrivatePostCreate (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivatePostCreate",parameters);
    }

    public async Task<object> subAccountV1PrivatePostApiKeyCreate (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivatePostApiKeyCreate",parameters);
    }

    public async Task<object> subAccountV1PrivatePostApiKeyEdit (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivatePostApiKeyEdit",parameters);
    }

    public async Task<object> subAccountV1PrivatePostApiKeyDel (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivatePostApiKeyDel",parameters);
    }

    public async Task<object> subAccountV1PrivatePostUpdateStatus (object parameters = null)
    {
        return await this.callAsync ("subAccountV1PrivatePostUpdateStatus",parameters);
    }

    public async Task<object> accountV1PrivateGetUid (object parameters = null)
    {
        return await this.callAsync ("accountV1PrivateGetUid",parameters);
    }

    public async Task<object> accountV1PrivateGetApiKeyQuery (object parameters = null)
    {
        return await this.callAsync ("accountV1PrivateGetApiKeyQuery",parameters);
    }

    public async Task<object> accountV1PrivatePostInnerTransferAuthorizeSubAccount (object parameters = null)
    {
        return await this.callAsync ("accountV1PrivatePostInnerTransferAuthorizeSubAccount",parameters);
    }

    public async Task<object> userAuthPrivatePostUserDataStream (object parameters = null)
    {
        return await this.callAsync ("userAuthPrivatePostUserDataStream",parameters);
    }

    public async Task<object> userAuthPrivatePutUserDataStream (object parameters = null)
    {
        return await this.callAsync ("userAuthPrivatePutUserDataStream",parameters);
    }

    public async Task<object> userAuthPrivateDeleteUserDataStream (object parameters = null)
    {
        return await this.callAsync ("userAuthPrivateDeleteUserDataStream",parameters);
    }

    public async Task<object> copyTradingV1PrivateGetSwapTraceCurrentTrack (object parameters = null)
    {
        return await this.callAsync ("copyTradingV1PrivateGetSwapTraceCurrentTrack",parameters);
    }

    public async Task<object> copyTradingV1PrivatePostSwapTraceCloseTrackOrder (object parameters = null)
    {
        return await this.callAsync ("copyTradingV1PrivatePostSwapTraceCloseTrackOrder",parameters);
    }

    public async Task<object> copyTradingV1PrivatePostSwapTraceSetTPSL (object parameters = null)
    {
        return await this.callAsync ("copyTradingV1PrivatePostSwapTraceSetTPSL",parameters);
    }

    public async Task<object> copyTradingV1PrivatePostSpotTraderSellOrder (object parameters = null)
    {
        return await this.callAsync ("copyTradingV1PrivatePostSpotTraderSellOrder",parameters);
    }

    public async Task<object> apiV3PrivateGetAssetTransfer (object parameters = null)
    {
        return await this.callAsync ("apiV3PrivateGetAssetTransfer",parameters);
    }

    public async Task<object> apiV3PrivateGetCapitalDepositHisrec (object parameters = null)
    {
        return await this.callAsync ("apiV3PrivateGetCapitalDepositHisrec",parameters);
    }

    public async Task<object> apiV3PrivateGetCapitalWithdrawHistory (object parameters = null)
    {
        return await this.callAsync ("apiV3PrivateGetCapitalWithdrawHistory",parameters);
    }

    public async Task<object> apiV3PrivatePostPostAssetTransfer (object parameters = null)
    {
        return await this.callAsync ("apiV3PrivatePostPostAssetTransfer",parameters);
    }

}