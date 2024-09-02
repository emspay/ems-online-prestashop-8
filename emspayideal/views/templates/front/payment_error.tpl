{extends file=$template}

{block name='content'}

    <section id="content" class="page-content page-not-found">
        <h1>{l s='There was an error processing your order' mod='emspayideal'}</h1>

        <div class="error">
            <p><strong>{$error_message}</strong></p>
            <p>
                <a href="{$checkout_url}">
                    {l s='Please click here to choose another payment method.' mod='emspayideal'}
                </a>
            </p>
        </div>

        <a href="{$checkout_url}" title="{l s='Please click here to try again.' mod='emspayideal'}" class="button-exclusive btn btn-default">
            <i class="icon-chevron-left"></i>
            {l s='Go back to the checkout page' mod='emspayideal'}
        </a>

        <p>&nbsp;</p>
        
    </section>
{/block}
