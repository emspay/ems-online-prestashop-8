<?php

use Lib\components\GingerPlugin;
use Lib\components\GingerConfigurableTrait;
use Lib\interfaces\GingerCapturable;
use Lib\interfaces\GingerIPValidation;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');


class emspayKlarnaPayLater extends GingerPlugin implements GingerCapturable, GingerIPValidation
{
    use GingerConfigurableTrait, GingerInstallTrait;
    public function __construct()
    {
        $this->name = 'emspayklarnapaylater';
	    $this->method_id = 'klarna-pay-later';
        $this->useDemoApiKey = true;
        parent::__construct();
    }
}
