{include file="$tpl_dir/errors.tpl"}

<h1>{l s='There was an error processing your order' mod='emspayamex'}</h1>

<div class="error">
    <p><strong>{$error_message}</strong></p>
    <p>
        <a href="{$checkout_url}">
            {l s='Please click here to choose another payment method.' mod='emspayamex'}
        </a>
    </p>
</div>

<a href="{$checkout_url}" title="{l s='Please click here to try again.' mod='emspayamex'}" class="button-exclusive btn btn-default">
    <i class="icon-chevron-left"></i>
    {l s='Go back to the checkout page' mod='emspayamex'}
</a>
