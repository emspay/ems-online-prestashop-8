<?php
namespace Lib\components;

class GingerPSPConfig
{

    const GINGER_PSP_LABELS = [
        'emspay' => 'Library',
        'klarna-pay-later' => 'Klarna Pay Later',
        'klarna-pay-now' => 'Klarna Pay Now',
        'paynow' => 'Pay Now',
        'apple-pay' => 'Apple Pay',
        'ideal' => 'iDEAL',
        'afterpay' => 'Afterpay',
        'amex' => 'American Express',
        'bancontact' => 'Bancontact',
        'bank-transfer' => 'Bank Transfer',
        'credit-card' => 'Credit/debit card',
        'paypal' => 'PayPal',
        'payconiq' => 'Payconiq',
        'sofort' => 'SOFORT',
        'klarna-direct-debit' => 'Klarna Direct Debit',
        'google-pay' => 'Google Pay',
        'swish' => 'Swish',
        'mobilepay' => 'MobilePay',
        'giropay' => 'Giropay',
        'viacash' => 'Viacash'
    ];

    const PLUGIN_NAME = 'emspay-online-prestashop-8';
    const PSP_LABEL = 'EMS Online';
    const PSP_PREFIX = 'emspay';
    const GINGER_PSP_ENDPOINT = 'https://api.online.emspay.eu';
}

