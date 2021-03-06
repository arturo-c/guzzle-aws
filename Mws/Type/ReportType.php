<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Mws\Type;

/**
 * Report types
 *
 * @author Harold Asbridge <harold@shoebacca.com>
 * @codeCoverageIgnore
 */
class ReportType
{
    const OPEN_LISTINGS_REPORT = '_GET_FLAT_FILE_OPEN_LISTINGS_DATA_';
    const MERCHANT_LISTINGS_REPORT = '_GET_MERCHANT_LISTINGS_DATA_';
    const MERCHANT_LISTINGS_LITE_REPORT = '_GET_MERCHANT_LISTINGS_DATA_LITE_';
    const MERCHANT_LISTINGS_LITER_REPORT = '_GET_MERCHANT_LISTINGS_DATA_LITER_';
    const CANCELED_LISTINGS_REPORT = '_GET_MERCHANT_CANCELLED_LISTINGS_DATA_';

    const UNSHIPPED_ORDERS_REPORT = '_GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_';
    const SCHEDULED_XML_ORDER_REPORT = '_GET_ORDERS_DATA_';
    const SCHEDULED_FLATFILE_ORDER_REPORT = '_GET_FLAT_FILE_ORDER_REPORT_DATA_';
    const FLATFILE_ORDER_REPORT = '_GET_FLAT_FILE_ORDERS_DATA_';
    const FLATFILE_CONVERGED_ORDER_REPORT = '_GET_CONVERGED_FLAT_FILE_ORDER_REPORT_DATA_';

    const FLATFILE_SETTLEMENT_REPORT = '_GET_FLAT_FILE_PAYMENT_SETTLEMENT_DATA_';
    const XML_SETTLEMENT_REPORT = '_GET_PAYMENT_SETTLEMENT_DATA_';
    const FLATFILE_V2_SETTLEMENT_REPORT = '_GET_ALT_FLAT_FILE_PAYMENT_SETTLEMENT_DATA_';

    const FLATFILE_ALL_ORDERS_REPORT_BY_LAST_UPDATE = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const FLATFILE_ALL_ORDERS_REPORT_BY_ORDER_DATE = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const XML_ALL_ORDERS_REPORT_BY_LAST_UPDATE = '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const XML_ALL_ORDERS_REPORT_BY_ORDER_DATE = '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const FBA_INVENTORY_REPORT = '_GET_AFN_INVENTORY_DATA_';
    const FBA_FULFILLED_SHIPMENTS_REPORT = '_GET_AMAZON_FULFILLED_SHIPMENTS_DATA_';
    const FBA_RETURNS_REPORT = '_GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA_';
    const FBA_CUSTOMER_SHIPMENT_SALES_REPORT = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA_';
    const FBA_PROMOTIONS_REPORT = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA_';
    const FBA_DAILY_INVENTORY_HISTORY_REPORT = '_GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA_';
    const FBA_MONTHLY_INVENTORY_HISTORY_REPORT = '_GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA_';
    const FBA_RECEIVED_INVENTORY_REPORT = '_GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA_';
    const FBA_INVENTORY_EVENT_DETAIL_REPORT = '_GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA_';
    const FBA_INVENTORY_ADJUSTMENTS_REPORT = '_GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA_';
    const FBA_INVENTORY_AGE_REPORT = '_GET_FBA_FULFILLMENT_INVENTORY_AGE_DATA_';
    const FBA_REPLACEMENTS_REPORT = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA_';

    const PRODUCT_ADS_LISTINGS_REPORT = '_GET_NEMO_MERCHANT_LISTINGS_DATA_';
    const FLATFILE_PRODUCT_ADS_DAILY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_DAILY_DATA_TSV_';
    const XML_PRODUCT_ADS_DAILY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_DAILY_DATA_XML_';
    const FLATFILE_PRODUCT_ADS_WEEKLY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_WEEKLY_DATA_TSV_';
    const XML_PRODUCT_ADS_WEEKLY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_WEEKLY_DATA_XML_';
    const FLATFILE_PRODUCT_ADS_MONTHLY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_MONTHLY_DATA_TSV_';
    const XML_PRODUCT_ADS_MONTHLY_PERFORMANCE_BY_SKU = '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_MONTHLY_DATA_XML_';
}