from ccxt.base.types import Entry


class ImplicitAPI:
    public_get_system_time = publicGetSystemTime = Entry('system/time', 'public', 'GET', {'cost': 3})
    public_get_system_service = publicGetSystemService = Entry('system/service', 'public', 'GET', {'cost': 3})
    public_get_spot_v1_currencies = publicGetSpotV1Currencies = Entry('spot/v1/currencies', 'public', 'GET', {'cost': 7.5})
    public_get_spot_v1_symbols = publicGetSpotV1Symbols = Entry('spot/v1/symbols', 'public', 'GET', {'cost': 7.5})
    public_get_spot_v1_symbols_details = publicGetSpotV1SymbolsDetails = Entry('spot/v1/symbols/details', 'public', 'GET', {'cost': 5})
    public_get_spot_quotation_v3_tickers = publicGetSpotQuotationV3Tickers = Entry('spot/quotation/v3/tickers', 'public', 'GET', {'cost': 6})
    public_get_spot_quotation_v3_ticker = publicGetSpotQuotationV3Ticker = Entry('spot/quotation/v3/ticker', 'public', 'GET', {'cost': 4})
    public_get_spot_quotation_v3_lite_klines = publicGetSpotQuotationV3LiteKlines = Entry('spot/quotation/v3/lite-klines', 'public', 'GET', {'cost': 5})
    public_get_spot_quotation_v3_klines = publicGetSpotQuotationV3Klines = Entry('spot/quotation/v3/klines', 'public', 'GET', {'cost': 7})
    public_get_spot_quotation_v3_books = publicGetSpotQuotationV3Books = Entry('spot/quotation/v3/books', 'public', 'GET', {'cost': 4})
    public_get_spot_quotation_v3_trades = publicGetSpotQuotationV3Trades = Entry('spot/quotation/v3/trades', 'public', 'GET', {'cost': 4})
    public_get_spot_v1_ticker = publicGetSpotV1Ticker = Entry('spot/v1/ticker', 'public', 'GET', {'cost': 5})
    public_get_spot_v2_ticker = publicGetSpotV2Ticker = Entry('spot/v2/ticker', 'public', 'GET', {'cost': 30})
    public_get_spot_v1_ticker_detail = publicGetSpotV1TickerDetail = Entry('spot/v1/ticker_detail', 'public', 'GET', {'cost': 5})
    public_get_spot_v1_steps = publicGetSpotV1Steps = Entry('spot/v1/steps', 'public', 'GET', {'cost': 30})
    public_get_spot_v1_symbols_kline = publicGetSpotV1SymbolsKline = Entry('spot/v1/symbols/kline', 'public', 'GET', {'cost': 6})
    public_get_spot_v1_symbols_book = publicGetSpotV1SymbolsBook = Entry('spot/v1/symbols/book', 'public', 'GET', {'cost': 5})
    public_get_spot_v1_symbols_trades = publicGetSpotV1SymbolsTrades = Entry('spot/v1/symbols/trades', 'public', 'GET', {'cost': 5})
    public_get_contract_v1_tickers = publicGetContractV1Tickers = Entry('contract/v1/tickers', 'public', 'GET', {'cost': 15})
    public_get_contract_public_details = publicGetContractPublicDetails = Entry('contract/public/details', 'public', 'GET', {'cost': 5})
    public_get_contract_public_depth = publicGetContractPublicDepth = Entry('contract/public/depth', 'public', 'GET', {'cost': 5})
    public_get_contract_public_open_interest = publicGetContractPublicOpenInterest = Entry('contract/public/open-interest', 'public', 'GET', {'cost': 30})
    public_get_contract_public_funding_rate = publicGetContractPublicFundingRate = Entry('contract/public/funding-rate', 'public', 'GET', {'cost': 30})
    public_get_contract_public_kline = publicGetContractPublicKline = Entry('contract/public/kline', 'public', 'GET', {'cost': 6})
    public_get_account_v1_currencies = publicGetAccountV1Currencies = Entry('account/v1/currencies', 'public', 'GET', {'cost': 30})
    private_get_account_sub_account_v1_transfer_list = privateGetAccountSubAccountV1TransferList = Entry('account/sub-account/v1/transfer-list', 'private', 'GET', {'cost': 7.5})
    private_get_account_sub_account_v1_transfer_history = privateGetAccountSubAccountV1TransferHistory = Entry('account/sub-account/v1/transfer-history', 'private', 'GET', {'cost': 7.5})
    private_get_account_sub_account_main_v1_wallet = privateGetAccountSubAccountMainV1Wallet = Entry('account/sub-account/main/v1/wallet', 'private', 'GET', {'cost': 5})
    private_get_account_sub_account_main_v1_subaccount_list = privateGetAccountSubAccountMainV1SubaccountList = Entry('account/sub-account/main/v1/subaccount-list', 'private', 'GET', {'cost': 7.5})
    private_get_account_contract_sub_account_main_v1_wallet = privateGetAccountContractSubAccountMainV1Wallet = Entry('account/contract/sub-account/main/v1/wallet', 'private', 'GET', {'cost': 5})
    private_get_account_contract_sub_account_main_v1_transfer_list = privateGetAccountContractSubAccountMainV1TransferList = Entry('account/contract/sub-account/main/v1/transfer-list', 'private', 'GET', {'cost': 7.5})
    private_get_account_contract_sub_account_v1_transfer_history = privateGetAccountContractSubAccountV1TransferHistory = Entry('account/contract/sub-account/v1/transfer-history', 'private', 'GET', {'cost': 7.5})
    private_get_account_v1_wallet = privateGetAccountV1Wallet = Entry('account/v1/wallet', 'private', 'GET', {'cost': 5})
    private_get_account_v1_currencies = privateGetAccountV1Currencies = Entry('account/v1/currencies', 'private', 'GET', {'cost': 30})
    private_get_spot_v1_wallet = privateGetSpotV1Wallet = Entry('spot/v1/wallet', 'private', 'GET', {'cost': 5})
    private_get_account_v1_deposit_address = privateGetAccountV1DepositAddress = Entry('account/v1/deposit/address', 'private', 'GET', {'cost': 30})
    private_get_account_v1_withdraw_charge = privateGetAccountV1WithdrawCharge = Entry('account/v1/withdraw/charge', 'private', 'GET', {'cost': 32})
    private_get_account_v2_deposit_withdraw_history = privateGetAccountV2DepositWithdrawHistory = Entry('account/v2/deposit-withdraw/history', 'private', 'GET', {'cost': 7.5})
    private_get_account_v1_deposit_withdraw_detail = privateGetAccountV1DepositWithdrawDetail = Entry('account/v1/deposit-withdraw/detail', 'private', 'GET', {'cost': 7.5})
    private_get_spot_v1_order_detail = privateGetSpotV1OrderDetail = Entry('spot/v1/order_detail', 'private', 'GET', {'cost': 1})
    private_get_spot_v2_orders = privateGetSpotV2Orders = Entry('spot/v2/orders', 'private', 'GET', {'cost': 5})
    private_get_spot_v1_trades = privateGetSpotV1Trades = Entry('spot/v1/trades', 'private', 'GET', {'cost': 5})
    private_get_spot_v2_trades = privateGetSpotV2Trades = Entry('spot/v2/trades', 'private', 'GET', {'cost': 4})
    private_get_spot_v3_orders = privateGetSpotV3Orders = Entry('spot/v3/orders', 'private', 'GET', {'cost': 5})
    private_get_spot_v2_order_detail = privateGetSpotV2OrderDetail = Entry('spot/v2/order_detail', 'private', 'GET', {'cost': 1})
    private_get_spot_v1_margin_isolated_borrow_record = privateGetSpotV1MarginIsolatedBorrowRecord = Entry('spot/v1/margin/isolated/borrow_record', 'private', 'GET', {'cost': 1})
    private_get_spot_v1_margin_isolated_repay_record = privateGetSpotV1MarginIsolatedRepayRecord = Entry('spot/v1/margin/isolated/repay_record', 'private', 'GET', {'cost': 1})
    private_get_spot_v1_margin_isolated_pairs = privateGetSpotV1MarginIsolatedPairs = Entry('spot/v1/margin/isolated/pairs', 'private', 'GET', {'cost': 30})
    private_get_spot_v1_margin_isolated_account = privateGetSpotV1MarginIsolatedAccount = Entry('spot/v1/margin/isolated/account', 'private', 'GET', {'cost': 5})
    private_get_spot_v1_trade_fee = privateGetSpotV1TradeFee = Entry('spot/v1/trade_fee', 'private', 'GET', {'cost': 30})
    private_get_spot_v1_user_fee = privateGetSpotV1UserFee = Entry('spot/v1/user_fee', 'private', 'GET', {'cost': 30})
    private_get_spot_v1_broker_rebate = privateGetSpotV1BrokerRebate = Entry('spot/v1/broker/rebate', 'private', 'GET', {'cost': 1})
    private_get_contract_private_assets_detail = privateGetContractPrivateAssetsDetail = Entry('contract/private/assets-detail', 'private', 'GET', {'cost': 5})
    private_get_contract_private_order = privateGetContractPrivateOrder = Entry('contract/private/order', 'private', 'GET', {'cost': 1.2})
    private_get_contract_private_order_history = privateGetContractPrivateOrderHistory = Entry('contract/private/order-history', 'private', 'GET', {'cost': 10})
    private_get_contract_private_position = privateGetContractPrivatePosition = Entry('contract/private/position', 'private', 'GET', {'cost': 10})
    private_get_contract_private_get_open_orders = privateGetContractPrivateGetOpenOrders = Entry('contract/private/get-open-orders', 'private', 'GET', {'cost': 1.2})
    private_get_contract_private_current_plan_order = privateGetContractPrivateCurrentPlanOrder = Entry('contract/private/current-plan-order', 'private', 'GET', {'cost': 1.2})
    private_get_contract_private_trades = privateGetContractPrivateTrades = Entry('contract/private/trades', 'private', 'GET', {'cost': 10})
    private_get_contract_private_position_risk = privateGetContractPrivatePositionRisk = Entry('contract/private/position-risk', 'private', 'GET', {'cost': 10})
    private_get_contract_private_affilate_rebate_list = privateGetContractPrivateAffilateRebateList = Entry('contract/private/affilate/rebate-list', 'private', 'GET', {'cost': 10})
    private_get_contract_private_affilate_trade_list = privateGetContractPrivateAffilateTradeList = Entry('contract/private/affilate/trade-list', 'private', 'GET', {'cost': 10})
    private_post_account_sub_account_main_v1_sub_to_main = privatePostAccountSubAccountMainV1SubToMain = Entry('account/sub-account/main/v1/sub-to-main', 'private', 'POST', {'cost': 30})
    private_post_account_sub_account_sub_v1_sub_to_main = privatePostAccountSubAccountSubV1SubToMain = Entry('account/sub-account/sub/v1/sub-to-main', 'private', 'POST', {'cost': 30})
    private_post_account_sub_account_main_v1_main_to_sub = privatePostAccountSubAccountMainV1MainToSub = Entry('account/sub-account/main/v1/main-to-sub', 'private', 'POST', {'cost': 30})
    private_post_account_sub_account_sub_v1_sub_to_sub = privatePostAccountSubAccountSubV1SubToSub = Entry('account/sub-account/sub/v1/sub-to-sub', 'private', 'POST', {'cost': 30})
    private_post_account_sub_account_main_v1_sub_to_sub = privatePostAccountSubAccountMainV1SubToSub = Entry('account/sub-account/main/v1/sub-to-sub', 'private', 'POST', {'cost': 30})
    private_post_account_contract_sub_account_main_v1_sub_to_main = privatePostAccountContractSubAccountMainV1SubToMain = Entry('account/contract/sub-account/main/v1/sub-to-main', 'private', 'POST', {'cost': 7.5})
    private_post_account_contract_sub_account_main_v1_main_to_sub = privatePostAccountContractSubAccountMainV1MainToSub = Entry('account/contract/sub-account/main/v1/main-to-sub', 'private', 'POST', {'cost': 7.5})
    private_post_account_contract_sub_account_sub_v1_sub_to_main = privatePostAccountContractSubAccountSubV1SubToMain = Entry('account/contract/sub-account/sub/v1/sub-to-main', 'private', 'POST', {'cost': 7.5})
    private_post_account_v1_withdraw_apply = privatePostAccountV1WithdrawApply = Entry('account/v1/withdraw/apply', 'private', 'POST', {'cost': 7.5})
    private_post_spot_v1_submit_order = privatePostSpotV1SubmitOrder = Entry('spot/v1/submit_order', 'private', 'POST', {'cost': 1})
    private_post_spot_v1_batch_orders = privatePostSpotV1BatchOrders = Entry('spot/v1/batch_orders', 'private', 'POST', {'cost': 1})
    private_post_spot_v2_cancel_order = privatePostSpotV2CancelOrder = Entry('spot/v2/cancel_order', 'private', 'POST', {'cost': 1})
    private_post_spot_v1_cancel_orders = privatePostSpotV1CancelOrders = Entry('spot/v1/cancel_orders', 'private', 'POST', {'cost': 15})
    private_post_spot_v4_query_order = privatePostSpotV4QueryOrder = Entry('spot/v4/query/order', 'private', 'POST', {'cost': 1})
    private_post_spot_v4_query_client_order = privatePostSpotV4QueryClientOrder = Entry('spot/v4/query/client-order', 'private', 'POST', {'cost': 1})
    private_post_spot_v4_query_open_orders = privatePostSpotV4QueryOpenOrders = Entry('spot/v4/query/open-orders', 'private', 'POST', {'cost': 5})
    private_post_spot_v4_query_history_orders = privatePostSpotV4QueryHistoryOrders = Entry('spot/v4/query/history-orders', 'private', 'POST', {'cost': 5})
    private_post_spot_v4_query_trades = privatePostSpotV4QueryTrades = Entry('spot/v4/query/trades', 'private', 'POST', {'cost': 5})
    private_post_spot_v4_query_order_trades = privatePostSpotV4QueryOrderTrades = Entry('spot/v4/query/order-trades', 'private', 'POST', {'cost': 5})
    private_post_spot_v4_cancel_orders = privatePostSpotV4CancelOrders = Entry('spot/v4/cancel_orders', 'private', 'POST', {'cost': 3})
    private_post_spot_v4_cancel_all = privatePostSpotV4CancelAll = Entry('spot/v4/cancel_all', 'private', 'POST', {'cost': 90})
    private_post_spot_v4_batch_orders = privatePostSpotV4BatchOrders = Entry('spot/v4/batch_orders', 'private', 'POST', {'cost': 3})
    private_post_spot_v3_cancel_order = privatePostSpotV3CancelOrder = Entry('spot/v3/cancel_order', 'private', 'POST', {'cost': 1})
    private_post_spot_v2_batch_orders = privatePostSpotV2BatchOrders = Entry('spot/v2/batch_orders', 'private', 'POST', {'cost': 1})
    private_post_spot_v2_submit_order = privatePostSpotV2SubmitOrder = Entry('spot/v2/submit_order', 'private', 'POST', {'cost': 1})
    private_post_spot_v1_margin_submit_order = privatePostSpotV1MarginSubmitOrder = Entry('spot/v1/margin/submit_order', 'private', 'POST', {'cost': 1})
    private_post_spot_v1_margin_isolated_borrow = privatePostSpotV1MarginIsolatedBorrow = Entry('spot/v1/margin/isolated/borrow', 'private', 'POST', {'cost': 30})
    private_post_spot_v1_margin_isolated_repay = privatePostSpotV1MarginIsolatedRepay = Entry('spot/v1/margin/isolated/repay', 'private', 'POST', {'cost': 30})
    private_post_spot_v1_margin_isolated_transfer = privatePostSpotV1MarginIsolatedTransfer = Entry('spot/v1/margin/isolated/transfer', 'private', 'POST', {'cost': 30})
    private_post_account_v1_transfer_contract_list = privatePostAccountV1TransferContractList = Entry('account/v1/transfer-contract-list', 'private', 'POST', {'cost': 60})
    private_post_account_v1_transfer_contract = privatePostAccountV1TransferContract = Entry('account/v1/transfer-contract', 'private', 'POST', {'cost': 60})
    private_post_contract_private_submit_order = privatePostContractPrivateSubmitOrder = Entry('contract/private/submit-order', 'private', 'POST', {'cost': 2.5})
    private_post_contract_private_cancel_order = privatePostContractPrivateCancelOrder = Entry('contract/private/cancel-order', 'private', 'POST', {'cost': 1.5})
    private_post_contract_private_cancel_orders = privatePostContractPrivateCancelOrders = Entry('contract/private/cancel-orders', 'private', 'POST', {'cost': 30})
    private_post_contract_private_submit_plan_order = privatePostContractPrivateSubmitPlanOrder = Entry('contract/private/submit-plan-order', 'private', 'POST', {'cost': 2.5})
    private_post_contract_private_cancel_plan_order = privatePostContractPrivateCancelPlanOrder = Entry('contract/private/cancel-plan-order', 'private', 'POST', {'cost': 1.5})
    private_post_contract_private_submit_leverage = privatePostContractPrivateSubmitLeverage = Entry('contract/private/submit-leverage', 'private', 'POST', {'cost': 2.5})
