<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class kraken extends \ccxt\Exchange {
    public function zendesk_get_360000292886($params = array()) {
        return $this->request('360000292886', 'zendesk', 'GET', $params, null, null, array());
    }
    public function zendesk_get_201893608($params = array()) {
        return $this->request('201893608', 'zendesk', 'GET', $params, null, null, array());
    }
    public function public_get_assets($params = array()) {
        return $this->request('Assets', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_assetpairs($params = array()) {
        return $this->request('AssetPairs', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_depth($params = array()) {
        return $this->request('Depth', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function public_get_ohlc($params = array()) {
        return $this->request('OHLC', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function public_get_spread($params = array()) {
        return $this->request('Spread', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_systemstatus($params = array()) {
        return $this->request('SystemStatus', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_ticker($params = array()) {
        return $this->request('Ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_time($params = array()) {
        return $this->request('Time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function public_get_trades($params = array()) {
        return $this->request('Trades', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function private_post_addorder($params = array()) {
        return $this->request('AddOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function private_post_addorderbatch($params = array()) {
        return $this->request('AddOrderBatch', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function private_post_addexport($params = array()) {
        return $this->request('AddExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_balance($params = array()) {
        return $this->request('Balance', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_cancelall($params = array()) {
        return $this->request('CancelAll', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_cancelallordersafter($params = array()) {
        return $this->request('CancelAllOrdersAfter', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_cancelorder($params = array()) {
        return $this->request('CancelOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function private_post_cancelorderbatch($params = array()) {
        return $this->request('CancelOrderBatch', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function private_post_closedorders($params = array()) {
        return $this->request('ClosedOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_depositaddresses($params = array()) {
        return $this->request('DepositAddresses', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_depositmethods($params = array()) {
        return $this->request('DepositMethods', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_depositstatus($params = array()) {
        return $this->request('DepositStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_editorder($params = array()) {
        return $this->request('EditOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function private_post_exportstatus($params = array()) {
        return $this->request('ExportStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_getwebsocketstoken($params = array()) {
        return $this->request('GetWebSocketsToken', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_ledgers($params = array()) {
        return $this->request('Ledgers', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function private_post_openorders($params = array()) {
        return $this->request('OpenOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_openpositions($params = array()) {
        return $this->request('OpenPositions', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_queryledgers($params = array()) {
        return $this->request('QueryLedgers', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_queryorders($params = array()) {
        return $this->request('QueryOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_querytrades($params = array()) {
        return $this->request('QueryTrades', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_retrieveexport($params = array()) {
        return $this->request('RetrieveExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_removeexport($params = array()) {
        return $this->request('RemoveExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_balanceex($params = array()) {
        return $this->request('BalanceEx', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_tradebalance($params = array()) {
        return $this->request('TradeBalance', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_tradeshistory($params = array()) {
        return $this->request('TradesHistory', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function private_post_tradevolume($params = array()) {
        return $this->request('TradeVolume', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdraw($params = array()) {
        return $this->request('Withdraw', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdrawcancel($params = array()) {
        return $this->request('WithdrawCancel', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdrawinfo($params = array()) {
        return $this->request('WithdrawInfo', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdrawmethods($params = array()) {
        return $this->request('WithdrawMethods', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdrawaddresses($params = array()) {
        return $this->request('WithdrawAddresses', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_withdrawstatus($params = array()) {
        return $this->request('WithdrawStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_wallettransfer($params = array()) {
        return $this->request('WalletTransfer', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_createsubaccount($params = array()) {
        return $this->request('CreateSubaccount', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_accounttransfer($params = array()) {
        return $this->request('AccountTransfer', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_allocate($params = array()) {
        return $this->request('Earn/Allocate', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_deallocate($params = array()) {
        return $this->request('Earn/Deallocate', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_allocatestatus($params = array()) {
        return $this->request('Earn/AllocateStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_deallocatestatus($params = array()) {
        return $this->request('Earn/DeallocateStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_strategies($params = array()) {
        return $this->request('Earn/Strategies', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function private_post_earn_allocations($params = array()) {
        return $this->request('Earn/Allocations', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function zendeskGet360000292886($params = array()) {
        return $this->request('360000292886', 'zendesk', 'GET', $params, null, null, array());
    }
    public function zendeskGet201893608($params = array()) {
        return $this->request('201893608', 'zendesk', 'GET', $params, null, null, array());
    }
    public function publicGetAssets($params = array()) {
        return $this->request('Assets', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetAssetPairs($params = array()) {
        return $this->request('AssetPairs', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetDepth($params = array()) {
        return $this->request('Depth', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function publicGetOHLC($params = array()) {
        return $this->request('OHLC', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function publicGetSpread($params = array()) {
        return $this->request('Spread', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetSystemStatus($params = array()) {
        return $this->request('SystemStatus', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetTicker($params = array()) {
        return $this->request('Ticker', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetTime($params = array()) {
        return $this->request('Time', 'public', 'GET', $params, null, null, array("cost" => 1));
    }
    public function publicGetTrades($params = array()) {
        return $this->request('Trades', 'public', 'GET', $params, null, null, array("cost" => 1.2));
    }
    public function privatePostAddOrder($params = array()) {
        return $this->request('AddOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function privatePostAddOrderBatch($params = array()) {
        return $this->request('AddOrderBatch', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function privatePostAddExport($params = array()) {
        return $this->request('AddExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostBalance($params = array()) {
        return $this->request('Balance', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostCancelAll($params = array()) {
        return $this->request('CancelAll', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostCancelAllOrdersAfter($params = array()) {
        return $this->request('CancelAllOrdersAfter', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostCancelOrder($params = array()) {
        return $this->request('CancelOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function privatePostCancelOrderBatch($params = array()) {
        return $this->request('CancelOrderBatch', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function privatePostClosedOrders($params = array()) {
        return $this->request('ClosedOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostDepositAddresses($params = array()) {
        return $this->request('DepositAddresses', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostDepositMethods($params = array()) {
        return $this->request('DepositMethods', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostDepositStatus($params = array()) {
        return $this->request('DepositStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEditOrder($params = array()) {
        return $this->request('EditOrder', 'private', 'POST', $params, null, null, array("cost" => 0));
    }
    public function privatePostExportStatus($params = array()) {
        return $this->request('ExportStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostGetWebSocketsToken($params = array()) {
        return $this->request('GetWebSocketsToken', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostLedgers($params = array()) {
        return $this->request('Ledgers', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function privatePostOpenOrders($params = array()) {
        return $this->request('OpenOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostOpenPositions($params = array()) {
        return $this->request('OpenPositions', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostQueryLedgers($params = array()) {
        return $this->request('QueryLedgers', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostQueryOrders($params = array()) {
        return $this->request('QueryOrders', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostQueryTrades($params = array()) {
        return $this->request('QueryTrades', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostRetrieveExport($params = array()) {
        return $this->request('RetrieveExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostRemoveExport($params = array()) {
        return $this->request('RemoveExport', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostBalanceEx($params = array()) {
        return $this->request('BalanceEx', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostTradeBalance($params = array()) {
        return $this->request('TradeBalance', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostTradesHistory($params = array()) {
        return $this->request('TradesHistory', 'private', 'POST', $params, null, null, array("cost" => 6));
    }
    public function privatePostTradeVolume($params = array()) {
        return $this->request('TradeVolume', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdraw($params = array()) {
        return $this->request('Withdraw', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdrawCancel($params = array()) {
        return $this->request('WithdrawCancel', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdrawInfo($params = array()) {
        return $this->request('WithdrawInfo', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdrawMethods($params = array()) {
        return $this->request('WithdrawMethods', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdrawAddresses($params = array()) {
        return $this->request('WithdrawAddresses', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWithdrawStatus($params = array()) {
        return $this->request('WithdrawStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostWalletTransfer($params = array()) {
        return $this->request('WalletTransfer', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostCreateSubaccount($params = array()) {
        return $this->request('CreateSubaccount', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostAccountTransfer($params = array()) {
        return $this->request('AccountTransfer', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnAllocate($params = array()) {
        return $this->request('Earn/Allocate', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnDeallocate($params = array()) {
        return $this->request('Earn/Deallocate', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnAllocateStatus($params = array()) {
        return $this->request('Earn/AllocateStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnDeallocateStatus($params = array()) {
        return $this->request('Earn/DeallocateStatus', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnStrategies($params = array()) {
        return $this->request('Earn/Strategies', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
    public function privatePostEarnAllocations($params = array()) {
        return $this->request('Earn/Allocations', 'private', 'POST', $params, null, null, array("cost" => 3));
    }
}
