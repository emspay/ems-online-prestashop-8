<?php

use Lib\components\GingerPlugin;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');

class emspaypaypal extends GingerPlugin
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'emspaypaypal';
        $this->method_id = 'paypal';
        parent::__construct();
    }
}
