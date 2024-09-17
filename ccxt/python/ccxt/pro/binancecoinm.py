# -*- coding: utf-8 -*-

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

from ccxt.pro.binance import binance

import ccxt.async_support.binancecoinm as binancecoinmRest


class binancecoinm(binance):

    def describe(self):
        # eslint-disable-next-line new-cap
        restInstance = binancecoinmRest()
        restDescribe = restInstance.describe()
        extended = self.deep_extend(super(binancecoinm, self).describe(), restDescribe)
        return self.deep_extend(extended, {
            'id': 'binancecoinm',
            'name': 'Binance COIN-M',
            'urls': {
                'logo': 'https://user-images.githubusercontent.com/1294454/117738721-668c8d80-b205-11eb-8c49-3fad84c4a07f.jpg',
                'doc': 'https://developers.binance.com/en',
            },
            'options': {
                'fetchMarkets': ['inverse'],
                'defaultSubType': 'inverse',
            },
        })
