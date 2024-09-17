<?php

namespace ccxt\async\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class coinbaseexchange extends \ccxt\async\Exchange {
    public function public_get_currencies($params = array()) {
        return $this->request('currencies', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products($params = array()) {
        return $this->request('products', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id($params = array()) {
        return $this->request('products/{id}', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id_book($params = array()) {
        return $this->request('products/{id}/book', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id_candles($params = array()) {
        return $this->request('products/{id}/candles', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id_stats($params = array()) {
        return $this->request('products/{id}/stats', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id_ticker($params = array()) {
        return $this->request('products/{id}/ticker', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_id_trades($params = array()) {
        return $this->request('products/{id}/trades', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_time($params = array()) {
        return $this->request('time', 'public', 'GET', $params, null, null, array());
    }
    public function public_get_products_spark_lines($params = array()) {
        return $this->request('products/spark-lines', 'public', 'GET', $params, null, null, array());
    }
    public function private_get_address_book($params = array()) {
        return $this->request('address-book', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts($params = array()) {
        return $this->request('accounts', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts_id($params = array()) {
        return $this->request('accounts/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts_id_holds($params = array()) {
        return $this->request('accounts/{id}/holds', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts_id_ledger($params = array()) {
        return $this->request('accounts/{id}/ledger', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_accounts_id_transfers($params = array()) {
        return $this->request('accounts/{id}/transfers', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_coinbase_accounts($params = array()) {
        return $this->request('coinbase-accounts', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_fills($params = array()) {
        return $this->request('fills', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_funding($params = array()) {
        return $this->request('funding', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_fees($params = array()) {
        return $this->request('fees', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_profile_information($params = array()) {
        return $this->request('margin/profile_information', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_buying_power($params = array()) {
        return $this->request('margin/buying_power', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_withdrawal_power($params = array()) {
        return $this->request('margin/withdrawal_power', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_withdrawal_power_all($params = array()) {
        return $this->request('margin/withdrawal_power_all', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_exit_plan($params = array()) {
        return $this->request('margin/exit_plan', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_liquidation_history($params = array()) {
        return $this->request('margin/liquidation_history', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_position_refresh_amounts($params = array()) {
        return $this->request('margin/position_refresh_amounts', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_margin_status($params = array()) {
        return $this->request('margin/status', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_oracle($params = array()) {
        return $this->request('oracle', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_orders($params = array()) {
        return $this->request('orders', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_orders_id($params = array()) {
        return $this->request('orders/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_orders_client_client_oid($params = array()) {
        return $this->request('orders/client:{client_oid}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_otc_orders($params = array()) {
        return $this->request('otc/orders', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_payment_methods($params = array()) {
        return $this->request('payment-methods', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_position($params = array()) {
        return $this->request('position', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_profiles($params = array()) {
        return $this->request('profiles', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_profiles_id($params = array()) {
        return $this->request('profiles/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_reports_report_id($params = array()) {
        return $this->request('reports/{report_id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_transfers($params = array()) {
        return $this->request('transfers', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_transfers_transfer_id($params = array()) {
        return $this->request('transfers/{transfer_id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_users_self_exchange_limits($params = array()) {
        return $this->request('users/self/exchange-limits', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_users_self_hold_balances($params = array()) {
        return $this->request('users/self/hold-balances', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_users_self_trailing_volume($params = array()) {
        return $this->request('users/self/trailing-volume', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_withdrawals_fee_estimate($params = array()) {
        return $this->request('withdrawals/fee-estimate', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_conversions_conversion_id($params = array()) {
        return $this->request('conversions/{conversion_id}', 'private', 'GET', $params, null, null, array());
    }
    public function private_get_conversions_fees($params = array()) {
        return $this->request('conversions/fees', 'private', 'GET', $params, null, null, array());
    }
    public function private_post_conversions($params = array()) {
        return $this->request('conversions', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_deposits_coinbase_account($params = array()) {
        return $this->request('deposits/coinbase-account', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_deposits_payment_method($params = array()) {
        return $this->request('deposits/payment-method', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_coinbase_accounts_id_addresses($params = array()) {
        return $this->request('coinbase-accounts/{id}/addresses', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_funding_repay($params = array()) {
        return $this->request('funding/repay', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_orders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_position_close($params = array()) {
        return $this->request('position/close', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_profiles_margin_transfer($params = array()) {
        return $this->request('profiles/margin-transfer', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_profiles_transfer($params = array()) {
        return $this->request('profiles/transfer', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_reports($params = array()) {
        return $this->request('reports', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_withdrawals_coinbase($params = array()) {
        return $this->request('withdrawals/coinbase', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_withdrawals_coinbase_account($params = array()) {
        return $this->request('withdrawals/coinbase-account', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_withdrawals_crypto($params = array()) {
        return $this->request('withdrawals/crypto', 'private', 'POST', $params, null, null, array());
    }
    public function private_post_withdrawals_payment_method($params = array()) {
        return $this->request('withdrawals/payment-method', 'private', 'POST', $params, null, null, array());
    }
    public function private_delete_orders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params, null, null, array());
    }
    public function private_delete_orders_client_client_oid($params = array()) {
        return $this->request('orders/client:{client_oid}', 'private', 'DELETE', $params, null, null, array());
    }
    public function private_delete_orders_id($params = array()) {
        return $this->request('orders/{id}', 'private', 'DELETE', $params, null, null, array());
    }
    public function publicGetCurrencies($params = array()) {
        return $this->request('currencies', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProducts($params = array()) {
        return $this->request('products', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsId($params = array()) {
        return $this->request('products/{id}', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsIdBook($params = array()) {
        return $this->request('products/{id}/book', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsIdCandles($params = array()) {
        return $this->request('products/{id}/candles', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsIdStats($params = array()) {
        return $this->request('products/{id}/stats', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsIdTicker($params = array()) {
        return $this->request('products/{id}/ticker', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsIdTrades($params = array()) {
        return $this->request('products/{id}/trades', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetTime($params = array()) {
        return $this->request('time', 'public', 'GET', $params, null, null, array());
    }
    public function publicGetProductsSparkLines($params = array()) {
        return $this->request('products/spark-lines', 'public', 'GET', $params, null, null, array());
    }
    public function privateGetAddressBook($params = array()) {
        return $this->request('address-book', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccounts($params = array()) {
        return $this->request('accounts', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccountsId($params = array()) {
        return $this->request('accounts/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccountsIdHolds($params = array()) {
        return $this->request('accounts/{id}/holds', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccountsIdLedger($params = array()) {
        return $this->request('accounts/{id}/ledger', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetAccountsIdTransfers($params = array()) {
        return $this->request('accounts/{id}/transfers', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetCoinbaseAccounts($params = array()) {
        return $this->request('coinbase-accounts', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetFills($params = array()) {
        return $this->request('fills', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetFunding($params = array()) {
        return $this->request('funding', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetFees($params = array()) {
        return $this->request('fees', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginProfileInformation($params = array()) {
        return $this->request('margin/profile_information', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginBuyingPower($params = array()) {
        return $this->request('margin/buying_power', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginWithdrawalPower($params = array()) {
        return $this->request('margin/withdrawal_power', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginWithdrawalPowerAll($params = array()) {
        return $this->request('margin/withdrawal_power_all', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginExitPlan($params = array()) {
        return $this->request('margin/exit_plan', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginLiquidationHistory($params = array()) {
        return $this->request('margin/liquidation_history', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginPositionRefreshAmounts($params = array()) {
        return $this->request('margin/position_refresh_amounts', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetMarginStatus($params = array()) {
        return $this->request('margin/status', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOracle($params = array()) {
        return $this->request('oracle', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOrders($params = array()) {
        return $this->request('orders', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOrdersId($params = array()) {
        return $this->request('orders/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOrdersClientClientOid($params = array()) {
        return $this->request('orders/client:{client_oid}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetOtcOrders($params = array()) {
        return $this->request('otc/orders', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetPaymentMethods($params = array()) {
        return $this->request('payment-methods', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetPosition($params = array()) {
        return $this->request('position', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetProfiles($params = array()) {
        return $this->request('profiles', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetProfilesId($params = array()) {
        return $this->request('profiles/{id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetReportsReportId($params = array()) {
        return $this->request('reports/{report_id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetTransfers($params = array()) {
        return $this->request('transfers', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetTransfersTransferId($params = array()) {
        return $this->request('transfers/{transfer_id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetUsersSelfExchangeLimits($params = array()) {
        return $this->request('users/self/exchange-limits', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetUsersSelfHoldBalances($params = array()) {
        return $this->request('users/self/hold-balances', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetUsersSelfTrailingVolume($params = array()) {
        return $this->request('users/self/trailing-volume', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetWithdrawalsFeeEstimate($params = array()) {
        return $this->request('withdrawals/fee-estimate', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetConversionsConversionId($params = array()) {
        return $this->request('conversions/{conversion_id}', 'private', 'GET', $params, null, null, array());
    }
    public function privateGetConversionsFees($params = array()) {
        return $this->request('conversions/fees', 'private', 'GET', $params, null, null, array());
    }
    public function privatePostConversions($params = array()) {
        return $this->request('conversions', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostDepositsCoinbaseAccount($params = array()) {
        return $this->request('deposits/coinbase-account', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostDepositsPaymentMethod($params = array()) {
        return $this->request('deposits/payment-method', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostCoinbaseAccountsIdAddresses($params = array()) {
        return $this->request('coinbase-accounts/{id}/addresses', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostFundingRepay($params = array()) {
        return $this->request('funding/repay', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostOrders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostPositionClose($params = array()) {
        return $this->request('position/close', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostProfilesMarginTransfer($params = array()) {
        return $this->request('profiles/margin-transfer', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostProfilesTransfer($params = array()) {
        return $this->request('profiles/transfer', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostReports($params = array()) {
        return $this->request('reports', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostWithdrawalsCoinbase($params = array()) {
        return $this->request('withdrawals/coinbase', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostWithdrawalsCoinbaseAccount($params = array()) {
        return $this->request('withdrawals/coinbase-account', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostWithdrawalsCrypto($params = array()) {
        return $this->request('withdrawals/crypto', 'private', 'POST', $params, null, null, array());
    }
    public function privatePostWithdrawalsPaymentMethod($params = array()) {
        return $this->request('withdrawals/payment-method', 'private', 'POST', $params, null, null, array());
    }
    public function privateDeleteOrders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params, null, null, array());
    }
    public function privateDeleteOrdersClientClientOid($params = array()) {
        return $this->request('orders/client:{client_oid}', 'private', 'DELETE', $params, null, null, array());
    }
    public function privateDeleteOrdersId($params = array()) {
        return $this->request('orders/{id}', 'private', 'DELETE', $params, null, null, array());
    }
}
