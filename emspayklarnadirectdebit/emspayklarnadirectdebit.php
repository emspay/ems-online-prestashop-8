<?php

use Lib\components\GingerPlugin;
use Lib\interfaces\GingerCapturable;
use Lib\components\GingerInstallTrait;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(\_PS_MODULE_DIR_ . 'emspay/ginger/vendor/autoload.php');


class emspayKlarnaDirectDebit extends GingerPlugin implements GingerCapturable
{
    use GingerInstallTrait;
    public function __construct()
    {
        $this->name = 'emspayklarnadirectdebit';
	    $this->method_id = 'klarna-direct-debit';
        $this->useDemoApiKey = true;
        parent::__construct();
    }
}
