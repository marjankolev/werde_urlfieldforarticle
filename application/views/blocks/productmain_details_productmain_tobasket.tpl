<div class="tobasketFunction clear">
    [{oxhasrights ident="TOBASKET"}]
        [{if !$oDetailsProduct->isNotBuyable()}]
            <div class="input-group">
                <input id="amountToBasket" type="text" name="am" value="1" autocomplete="off" class="form-control">
                <div class="input-group-tweak">
                    [{ if $oDetailsProduct->oxarticles__oxarticles_url->value }]
                        <a href="[{ $oDetailsProduct->oxarticles__oxarticles_url->value}]" class="btn btn-primary submitButton largeButton col-md-12">
                            <i class="fa fa-shopping-cart"></i>&nbsp;[{oxmultilang ident="TO_CART"}]
                        </a>
                    [{else}]
                        <button id="toBasket" type="submit" [{if !$blCanBuy}]disabled="disabled"[{/if}] class="btn btn-primary submitButton largeButton"><i class="fa fa-shopping-cart"></i> [{oxmultilang ident="TO_CART"}]</button>
                    [{/if}]
                </div>
            </div>
        [{/if}]
    [{/oxhasrights}]
</div>