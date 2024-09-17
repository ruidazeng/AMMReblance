import os
import sys

root = os.path.dirname(os.path.dirname(os.path.dirname(os.path.dirname(os.path.dirname(os.path.abspath(__file__))))))
sys.path.append(root)

# ----------------------------------------------------------------------------

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

# ----------------------------------------------------------------------------
# -*- coding: utf-8 -*-

from ccxt.test.exchange.base import test_ledger_entry  # noqa E402
from ccxt.test.exchange.base import test_shared_methods  # noqa E402

def test_fetch_ledger_entry(exchange, skipped_properties, code):
    method = 'fetchLedgerEntry'
    items = exchange.fetch_ledger(code)
    length = len(items)
    test_shared_methods.assert_non_emtpy_array(exchange, skipped_properties, method, items, code)
    if length > 0:
        first_item = items[0]
        id = first_item['id']
        item = exchange.fetch_ledger_entry(id)
        now = exchange.milliseconds()
        test_ledger_entry(exchange, skipped_properties, method, item, code, now)
