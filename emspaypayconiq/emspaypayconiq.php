<?php

use Lib\components\GingerInstallTrait;
use Lib\components\GingerPlugin;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');


class emspayPayconiq extends GingerPlugin
{
    use GingerInstallTrait;

    public function __construct()
    {
        $this->name = 'emspaypayconiq';
        $this->method_id = 'payconiq';
        parent::__construct();
    }
}
