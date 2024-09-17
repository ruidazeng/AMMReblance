<?php
namespace ccxt;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once PATH_TO_CCXT . '/test/exchange/base/test_shared_methods.php';

function test_leverage_tier($exchange, $skipped_properties, $method, $entry) {
    $format = array(
        'tier' => $exchange->parse_number('1'),
        'minNotional' => $exchange->parse_number('0'),
        'maxNotional' => $exchange->parse_number('5000'),
        'maintenanceMarginRate' => $exchange->parse_number('0.01'),
        'maxLeverage' => $exchange->parse_number('25'),
        'info' => array(),
    );
    $empty_allowed_for = ['maintenanceMarginRate'];
    assert_structure($exchange, $skipped_properties, $method, $entry, $format, $empty_allowed_for);
    //
    assert_greater_or_equal($exchange, $skipped_properties, $method, $entry, 'tier', '0');
    assert_greater_or_equal($exchange, $skipped_properties, $method, $entry, 'minNotional', '0');
    assert_greater_or_equal($exchange, $skipped_properties, $method, $entry, 'maxNotional', '0');
    assert_greater_or_equal($exchange, $skipped_properties, $method, $entry, 'maxLeverage', '1');
    assert_less_or_equal($exchange, $skipped_properties, $method, $entry, 'maintenanceMarginRate', '1');
}
