<div class="actions text-center">
    <div class="btn-group">
        [{if $blShowToBasket}]
            [{oxhasrights ident="TOBASKET"}]
                [{ if $product->oxarticles__oxarticles_url->value}]
                    <a href="https://google.com/" class="btn btn-default hasTooltip" data-placement="bottom" title="[{oxmultilang ident="TO_CART"}]">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                [{else}]
                    <button type="submit" class="btn btn-default hasTooltip" data-placement="bottom" title="[{oxmultilang ident="TO_CART"}]">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                [{/if}]
            [{/oxhasrights}]
            <a class="btn btn-primary" href="[{$_productLink}]" >[{oxmultilang ident="MORE_INFO"}]</a>
        [{else}]
            <a class="btn btn-primary" href="[{$_productLink}]" >[{oxmultilang ident="MORE_INFO"}]</a>
        [{/if}]
    </div>
</div>