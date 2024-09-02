<?php

class emspayPendingModuleFrontController extends ModuleFrontController
{

    public function initContent() 
    {
        parent::initContent();
        $this->context->smarty->assign(array(
            'template' => _PS_THEME_DIR_ . 'templates/page.tpl',
            'checkout_url' => $this->context->link->getPagelink('order')
                )
        );
        $this->setTemplate('module:emspay/views/templates/front/pending.tpl');
    }

}
