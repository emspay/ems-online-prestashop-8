<?php

use Lib\components\GingerPlugin;
use Lib\interfaces\GingerIdentificationPay;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');

class emspaybanktransfer extends GingerPlugin implements GingerIdentificationPay
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'emspaybanktransfer';
	    $this->method_id = 'bank-transfer';
        parent::__construct();
    }
}
