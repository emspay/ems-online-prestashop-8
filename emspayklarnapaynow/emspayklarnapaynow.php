<?php

use Lib\components\GingerPlugin;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');

class emspayklarnapaynow extends GingerPlugin
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'emspayklarnapaynow';
	    $this->method_id = 'klarna-pay-now';
        parent::__construct();
    }

}
