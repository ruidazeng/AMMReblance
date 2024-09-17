from typing import Dict, List, Optional, Tuple, TypedDict

from freqtrade.enums import CandleType


class FtHas(TypedDict, total=False):
    order_time_in_force: List[str]
    exchange_has_overrides: Dict[str, bool]
    marketOrderRequiresPrice: bool

    # Stoploss on exchange
    stoploss_on_exchange: bool
    stop_price_param: str
    stop_price_prop: str
    stop_price_type_field: str
    stop_price_type_value_mapping: Dict
    stoploss_order_types: Dict[str, str]
    # ohlcv
    ohlcv_params: Dict
    ohlcv_candle_limit: int
    ohlcv_has_history: bool
    ohlcv_partial_candle: bool
    ohlcv_require_since: bool
    ohlcv_volume_currency: str
    ohlcv_candle_limit_per_timeframe: Dict[str, int]
    # Tickers
    tickers_have_quoteVolume: bool
    tickers_have_percentage: bool
    tickers_have_bid_ask: bool
    tickers_have_price: bool
    # Trades
    trades_limit: int
    trades_pagination: str
    trades_pagination_arg: str
    trades_has_history: bool
    trades_pagination_overlap: bool
    # Orderbook
    l2_limit_range: Optional[List[int]]
    l2_limit_range_required: bool
    # Futures
    ccxt_futures_name: str  # usually swap
    mark_ohlcv_price: str
    mark_ohlcv_timeframe: str
    funding_fee_timeframe: str
    floor_leverage: bool
    needs_trading_fees: bool
    order_props_in_contracts: List[str]

    # Websocket control
    ws_enabled: bool


class Ticker(TypedDict):
    symbol: str
    ask: Optional[float]
    askVolume: Optional[float]
    bid: Optional[float]
    bidVolume: Optional[float]
    last: Optional[float]
    quoteVolume: Optional[float]
    baseVolume: Optional[float]
    percentage: Optional[float]
    # Several more - only listing required.


Tickers = Dict[str, Ticker]


class OrderBook(TypedDict):
    symbol: str
    bids: List[Tuple[float, float]]
    asks: List[Tuple[float, float]]
    timestamp: Optional[int]
    datetime: Optional[str]
    nonce: Optional[int]


class CcxtBalance(TypedDict):
    free: float
    used: float
    total: float


CcxtBalances = Dict[str, CcxtBalance]


class CcxtPosition(TypedDict):
    symbol: str
    side: str
    contracts: float
    leverage: float
    collateral: Optional[float]
    initialMargin: Optional[float]
    liquidationPrice: Optional[float]


# pair, timeframe, candleType, OHLCV, drop last?,
OHLCVResponse = Tuple[str, str, CandleType, List, bool]
