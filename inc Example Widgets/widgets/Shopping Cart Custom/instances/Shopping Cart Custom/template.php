<div id="cc-cartSummary">
    <!-- ko if: items().length === 0 --><!-- /ko -->
    <!-- ko if: allItems().length > 0 -->
      <h2 class="tp_hdln2" data-bind="widgetLocaleText: 'cartHeader'">Carrinho de compras</h2>
      <div class="cart-inner">
        <section id="cart-info-details" data-bind="widgetLocaleText:{value:'cartHeader',attr:'summary'}" summary="Carrinho de compras">
          <div class="clearfix thead">
            <div class="col-xs-2 image col-sm-5" data-bind="widgetLocaleText : 'itemHeaderItem', css:{'col-sm-4 ' : $parent.isStorePickupEnabled(), 'col-sm-5 ' : !$parent.isStorePickupEnabled()}">Item</div>
            <!-- ko if: ($parent.isStorePickupEnabled()) --><!-- /ko -->
            <div class="quantity hidden-xs text-center col-sm-3" data-bind="widgetLocaleText: 'itemHeaderQuantity', css:{'col-sm-3 ' : $parent.isStorePickupEnabled(), 'col-sm-3 ' : !$parent.isStorePickupEnabled()}">Quantidade</div>
            <div class="quantity col-sm-2 hidden-xs" data-bind="widgetLocaleText: 'itemHeaderItemPrice'">Preço</div>
            <div class="col-sm-2 hidden-xs text-right" data-bind="widgetLocaleText : 'itemHeaderItemTotal'">Total do item</div>
          </div>

          <!-- ko foreach: allItems -->
            <!-- ko ifnot: ($data.isPlaceHolderItem) -->
                <!-- ko foreach: shippingGroupRelationships -->
                   <!-- ko setContextVariable:{name:'ShippingGroupIdVariable',value:shippingGroupId} -->
                    <div class="item">
                    <div class="clearfix">
                        <!-- ko with: $parent.productData -->
                            <div class="image col-xs-4 col-sm-2 col-md-1">
                                <a data-bind="ccLink : $data" href="/p/smart-tv-crystal-uhd-4k-led-50-samsung-un50tu8000gxzd-wi-fi-bluetooth-hdr-3-hdmi-2-usb/p100025969">
                                  
                                  <!-- ko if: $parents[3].showInternalImage($parents[1].productData())--><!-- /ko -->

                                 <!-- ko ifnot: $parents[3].showInternalImage($parents[1].productData())-->
                                    <img class="img-responsive" data-bind="
                                        attr:{id: 'CC-checkoutCartSummary-itemImage-'+id+$parent.catRefId,
                                        alt: displayName,
                                        errorSrc: $parents[3].getNoImage(),
                                        errorAlt: 'Missing Product Image',
                                        src: $parents[3].getExternalImage($parents[1].productData())}" id="CC-checkoutCartSummary-itemImage-p100025969mag225605700" alt="Smart TV Crystal UHD 4K LED 50&quot; Samsung UN50TU8000GXZD Wi-Fi Bluetooth HDR 3 HDMI 2 USB" errorsrc="/file/v650211410379191077/general/no-image-pb.png" erroralt="Missing Product Image" src="https://i.mlcdn.com.br/210x210/225605700.jpg">
                                    
                                  <!-- /ko -->
                                  
                                </a>
                            </div>
                            <div data-bind="css:{'col-xs-6 col-sm-2 col-md-2 col-lg-2' : $parents[3].isStorePickupEnabled(), 'col-xs-8 col-sm-4' : !$parents[3].isStorePickupEnabled()}" class="col-xs-8 col-sm-4">
                                <a class="tp_prgrph bold" data-bind="ccLink : $data, attr: { id: 'CC-shoppingCart-productName-' + $parents[1].productId + $parents[1].catRefId + ($parents[1].commerceItemId ? $parents[1].commerceItemId: '') + $index()}" href="/p/smart-tv-crystal-uhd-4k-led-50-samsung-un50tu8000gxzd-wi-fi-bluetooth-hdr-3-hdmi-2-usb/p100025969" id="CC-shoppingCart-productName-p100025969mag225605700ci103894978495710">Smart TV Crystal UHD 4K LED 50" Samsung UN50TU8000GXZD Wi-Fi Bluetooth HDR 3 HDMI 2 USB</a>
                                <!-- ko if: $parents[1].actionCode --><!-- /ko -->
                                <div class="hidden-phone variables" data-bind="attr: { id: 'CC-shoppingCart-productVariant-' + $parents[1].productId + $parents[1].catRefId + ($parents[1].commerceItemId ? $parents[1].commerceItemId: '') + $index()}" id="CC-shoppingCart-productVariant-p100025969mag225605700ci103894978495710">
                                    <!-- ko foreach: $parents[1].selectedOptions -->
                                        <div>
                                            <small>
                                            <!-- ko if: $data.optionValue -->
                                                <span data-bind="widgetLocaleText : {value:'option', attr:'innerText', params: {optionName: $data.optionName,
                                                optionValue: $data.optionValue}},
                                                attr: { id: 'CC-shoppingCart-productOptions-'+ $parents[2].productId + $parents[2].catRefId  + ($parents[2].commerceItemId ? $parents[2].commerceItemId: '') + $parents[2].removeSpaces($data.optionValue)}" id="CC-shoppingCart-productOptions-p100025969mag225605700ci10389497849571Magalu">Entregue por: Magalu</span>
                                            <!-- /ko -->
                                            </small>
                                        </div>
                                    
                                        <div>
                                            <small>
                                            <!-- ko if: $data.optionValue --><!-- /ko -->
                                            </small>
                                        </div>
                                    
                                        <div>
                                            <small>
                                            <!-- ko if: $data.optionValue --><!-- /ko -->
                                            </small>
                                        </div>
                                    
                                        <div>
                                            <small>
                                            <!-- ko if: $data.optionValue --><!-- /ko -->
                                            </small>
                                        </div>
                                    
                                        <div>
                                            <small>
                                            <!-- ko if: $data.optionValue --><!-- /ko -->
                                            </small>
                                        </div>
                                    <!-- /ko -->
                                    <!-- ko foreach: $parents[1].externalData --><!-- /ko -->
                                </div>
                                <!-- ko if: ((configurable && $parents[1].configuratorId) || ($parents[1].childItems && $parents[1].childItems.length > 0)) --><!-- /ko -->
                                <!-- ko if: $parent.stockStatus() -->
                                    <!-- ko if: $parent.stockState() == 'IN_STOCK' && ($parent.orderableQuantityMessage() == null || $parent.orderableQuantityMessage() == '') -->
                                        <!-- <div class="instock" data-bind="widgetLocaleText : 'instockText',
                                        attr: { id: 'CC-shoppingCart-productStockStatus-' + $parent.productId + $parent.catRefId + ($parents[1].commerceItemId ? $parents[1].commerceItemId: '') + $index()}">
                                        </div> -->
                                    <!-- /ko -->
                                    <!-- <div class="instock" data-bind="widgetLocaleText : $parent.orderableQuantityMessage(),
                                    attr: { id: 'CC-shoppingCart-productStockState-' + $parent.productId + $parent.catRefId + ($parents[1].commerceItemId ? $parents[1].commerceItemId: '') + $index()}">
                                    </div> -->
                                    <!-- ko if: $parent.availabilityDate() != null && $parent.stockState() != 'IN_STOCK'--><!-- /ko -->
                                <!-- /ko -->

                                <!-- label de esgotado abaixo do nome do produto-->
                                <!-- ko ifnot: $parent.stockStatus() --><!-- /ko -->
                                
                                <!-- ko with: $parents[1].discountInfo -->
                                    <!-- ko foreach: $data --><!-- /ko -->
                                <!-- /ko -->
                                <!-- ko if: $parents[1].productData().shippingSurcharge --><!-- /ko -->
                                <!-- ko ifnot: $parents[1].assetId  -->
                                    <div data-bind="if: (configurable &amp;&amp; $parents[1].configuratorId &amp;&amp; $parents[3].site().extensionSiteSettings &amp;&amp; $parents[3].site().extensionSiteSettings.CPQConfigurationSettings &amp;&amp; $parents[3].site().extensionSiteSettings.CPQConfigurationSettings.enabled)"></div>
                                <!-- /ko -->
                                <div class="padding-top" data-bind="if: $parents[1].isGWPChoicesAvaliable()"></div>
                                <!-- ko if: $parents[3].isStorePickupEnabled() --><!-- /ko -->
                            </div>
                        <!-- /ko -->
                        <!-- ko if: $parents[2].isStorePickupEnabled() --><!-- /ko -->
                        <div class="form-group text-center hidden-xs col-sm-3" data-bind="css:{'col-sm-3 col-md-3 col-lg-3' : $parents[2].isStorePickupEnabled(), 'col-sm-3' : !$parents[2].isStorePickupEnabled()}">
                              <input data-bind="textInput: updatableQuantity,  widgetLocaleText : {value:'itemHeaderQuantity', attr:'aria-label'}, attr:{id:'CC-shoppingCart-productQuantity-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index() },
                              event:{ 
                                blur: function(data, event){ return $parents[2].updateQuantity($parent, event, 'CC-shoppingCart-updateQuantity-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '')+ $index(), $data);}
                              }" type="text" name="qty2" class="input-qty utl_input" inputmode="numeric" maxlength="3" pattern="[0-9]|[0-9]|[0-9]" aria-label="Quantidade" id="CC-shoppingCart-productQuantity-p100025969mag225605700ci103894978495710">

                        </div>
                        <div class="price col-sm-2 hidden-xs">
                            <ul class="list-unstyled" data-bind="foreach: detailedItemPriceInfo">
                                <li data-bind="css: currencyCode == 'DOTZ' ? 'clr_orng1' : ''">
                                    <!-- ko if: amount && amount > 0-->
                                    <span data-bind="text: quantity">2</span>
                                    <span data-bind="widgetLocaleText: 'atTheRateText'">x</span>
                                    <span data-bind="currency: { price: detailedUnitPrice, currencyObj: $parents[2].currency}">R$2.968,90</span>
                                    <!-- /ko -->
                                    <!-- ko if: !amount && amount <= 0--><!-- /ko -->
                                  </li>
                            </ul>
                        </div>
                        <div class="col-sm-2 hidden-xs">
                            <ul class="list-unstyled" data-bind="foreach: detailedItemPriceInfo">
                                <!-- ko if: amount && amount > 0-->
                                <li class="price text-right">
                                    <span data-bind="currency: { price: amount, currencyObj: $parents[2].currency}, css: currencyCode == 'DOTZ' ? 'clr_orng1' : '', attr:{id:'CC-shoppingCart-itemTotal-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()">R$5.937,80</span>
                                </li>
                                <!-- ko if: $parents[3].site().selectedPriceListGroup().repositoryId === "priceGroupBRLdefault" -->
                                <li class="price-dotz text-right">
                                    <span data-bind="widgetLocaleText: 'dotzAccumulation'">Ganhe</span>
                                    <b data-bind="currency: {price: $parents[3].getDotzAccumulation($parents[1]), currencyObj: $parents[3].site().getCurrency('DOTZ')}">DZ 65.316</b>
                                </li>
                                <!-- /ko -->
                                <!-- /ko -->
                                <!-- ko if: !amount && amount <= 0--><!-- /ko -->
                            </ul>
                            
                        </div>
                        <div class="col-sm-12">
                          <!-- notificação de erro-->
                          <div class="cartItemValidationMessage notify hidden-xs">
                            <!--notificação de estoque-->
                            <span class="text-danger" role="alert" aria-live="assertive" data-bind="validationMessage: updatableQuantity, attr:{id:'CC-shoppingCart-itemError-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemError-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <!-- ./notificação de estoque-->

                            <span class="text-info" role="alert" aria-live="polite" data-bind="triggerMessage: updatableQuantity, attr:{id:'CC-shoppingCart-itemInfo-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemInfo-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <span class="text-info" role="alert" aria-live="polite" data-bind="triggerMessage: $parent.productPriceChanged, attr:{id:'CC-shoppingCart-itemInfo-priceChanged-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemInfo-priceChanged-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <span class="text-danger" role="alert" aria-live="assertive" data-bind="visible: $parent.isUnpricedError, text: $parent.unpricedErrorMessage, attr:{id:'CC-shoppingCart-itemError-externalPrice-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index() }" id="CC-shoppingCart-itemError-externalPrice-p100025969mag225605700ci103894978495710" style="display: none;">Este item não é mais válido. Remova-o do carrinho.</span>
                        </div>
                        </div>
                    </div>
                    <div class="row visible-xs item-buybox">
                        <!-- <div class="col-xs-4 bold quantity" data-bind="widgetLocaleText: 'itemHeaderQuantity'"></div> -->
                        <div class="col-xs-4 quantity">
                            <!-- ko with: $parent.productData -->
                                <label class="label-hidden" data-bind="widgetLocaleText : {value:'itemQuantity', attr:'innerText',
                                params: {productName: displayName +'-'+ $parents[1].catRefId}},
                                attr: { for: 'CC-shoppingCart-mobile-productQuantity-label' + $parents[1].productId + $parents[1].catRefId + $parents[1].catRefId + ($parents[1].commerceItemId ? $parents[1].commerceItemId: '') }" for="CC-shoppingCart-mobile-productQuantity-labelp100025969mag225605700mag225605700ci10389497849571">Smart TV Crystal UHD 4K LED 50" Samsung UN50TU8000GXZD Wi-Fi Bluetooth HDR 3 HDMI 2 USB-mag225605700 Quantidade</label>
                            <!-- /ko -->
                            <input data-bind="textInput: updatableQuantity, attr:{id:'CC-shoppingCart-mobile-productQuantity-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()},
                                event:{blur: function(data, event){ return $parents[2].updateQuantity($parent, event, 'CC-shoppingCart-updateQuantity-' + $parent.productId + $parent.catRefId  + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index(), $data);}}" type="text" name="qty2" class="input-qty utl_input" inputmode="numeric" maxlength="3" pattern="[0-9]|[0-9]|[0-9]" id="CC-shoppingCart-mobile-productQuantity-p100025969mag225605700ci103894978495710">
                            <a href="#" class="removeShippingGroupRelationShipEvent" data-bind="click: $parent.removeShippingGroupRelationShip.bind($parent, $data), attr: { id: 'removeShippingGroupRelationShipEvent', 'data-productid': productId, 'data-productname': $parent.productData().displayName, 'data-brand': $parent.productData().brand, 'data-price': price, 'data-quantity': quantity}" id="removeShippingGroupRelationShipEvent" data-productid="p100025969" data-productname="Smart TV Crystal UHD 4K LED 50&quot; Samsung UN50TU8000GXZD Wi-Fi Bluetooth HDR 3 HDMI 2 USB" data-brand="Samsung" data-price="5937.8" data-quantity="2">
                                <img data-bind="widgetLocaleText : {value:'handleRemoveFromCart', attr:'alt'}, attr:{
                                id:'CC-shoppingCart-mobile-removeItem-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" src="/img/remove.png" alt="handleRemoveFromCart" id="CC-shoppingCart-mobile-removeItem-p100025969mag225605700ci103894978495710">
                            </a>
                        </div>
                        <div class="col-xs-8 text-right">
                            <ul class="list-unstyled" data-bind="foreach: detailedItemPriceInfo">
                                 <!-- ko if: amount && amount > 0-->
                                 <li class="price text-right">
                                  <span data-bind="currency: { price: amount, currencyObj: $parents[2].currency}, css: currencyCode == 'DOTZ' ? 'clr_orng1' : '', attr:{id:'CC-shoppingCart-itemTotal-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()">R$5.937,80</span>
                                  </li>
                                  <!-- ko if: $parents[3].site().selectedPriceListGroup().repositoryId === "priceGroupBRLdefault" -->
                                  <li class="price-dotz text-right">
                                      <span data-bind="widgetLocaleText: 'dotzAccumulation'">Ganhe</span>
                                      <b data-bind="currency: {price: $parents[3].getDotzAccumulation($parents[1]), currencyObj: $parents[3].site().getCurrency('DOTZ')}">DZ 65.316</b>
                                  </li>
                                  <!-- /ko -->
                                  <!-- /ko -->
                                  <!-- ko if: !amount && amount <= 0--><!-- /ko -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <!-- notificação de erro-->
                        <div class="cartItemValidationMessage notify visible-xs">
                            <!--notificação de estoque-->
                            <span class="text-danger" role="alert" aria-live="assertive" data-bind="validationMessage: updatableQuantity, attr:{id:'CC-shoppingCart-itemError-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemError-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <!-- ./notificação de estoque-->

                            <span class="text-info" role="alert" aria-live="polite" data-bind="triggerMessage: updatableQuantity, attr:{id:'CC-shoppingCart-itemInfo-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemInfo-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <span class="text-info" role="alert" aria-live="polite" data-bind="triggerMessage: $parent.productPriceChanged, attr:{id:'CC-shoppingCart-itemInfo-priceChanged-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index()}" id="CC-shoppingCart-itemInfo-priceChanged-p100025969mag225605700ci103894978495710" style="display: none;"></span>
                            <span class="text-danger" role="alert" aria-live="assertive" data-bind="visible: $parent.isUnpricedError, text: $parent.unpricedErrorMessage, attr:{id:'CC-shoppingCart-itemError-externalPrice-' + $parent.productId + $parent.catRefId + ($parent.commerceItemId ? $parent.commerceItemId: '') + $index() }" id="CC-shoppingCart-itemError-externalPrice-p100025969mag225605700ci103894978495710" style="display: none;">Este item não é mais válido. Remova-o do carrinho.</span>
                        </div>
                    </div>

                    </div>

                <!-- /ko -->
                <!-- /ko -->
            <!-- /ko -->

            <!-- Place holder items -->
            <!-- ko if: ($data.isPlaceHolderItem) --><!-- /ko -->
          <!-- /ko -->
        </section>

        <section id="total-cart">
          <div class="clearfix" data-bind="widgetLocaleText:{value:'totalTableSummary',attr:'summary'}" summary="Totais do carrinho de compras.">
            <div class="col-md-7 col-sm-12 col-xs-7 text-right no-padding-left">
              <div class="bold padding-right text-left" data-bind="widgetLocaleText : 'totalTableSubTotal'">Subtotal:</div>
                <!-- ko if: (isTaxIncluded && showTaxSummary) --><!-- /ko -->
            </div>
            <div class="col-md-5 col-sm-12 col-xs-5 text-right no-padding-right">
              <span id="CC-shoppingCart-subTotal" class="bold padding-zero" data-bind="currency: {price: subTotal(), currencyObj: currency}">R$5.937,80</span>
            </div>
          </div>
        </section>
      </div>
    <!-- /ko -->
    
    <!-- CPQ Reconfiguration Modal -->
    <div class="modal fade" id="cc-re-cpqmodalpane" tabindex="-1" role="dialog">
      <div class="modal-dialog cc-config-modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <iframe class="configFrame" id="cc-cpqReconfiguration-frame" data-bind="attr: { src : $parent.absoluteUrl('/templates/cpq-reconfig.html') }" src="https://ccadmin-stage-zeva.oracleoutsourcing.com/file/v8246111310810215725/widget/shoppingCartCustom_v1/templates/cpq-reconfig.html"></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Store Pickup Modal Dialogue :: START -->
    <div id="storePickUpModal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" data-bind="click: $parent.handleStorePickupClose.bind($parent)">×</button>
                    <h4 class="modal-title"><span data-bind="widgetLocaleText: 'storePickerModalHeadingText'">Encontrar a Localização de uma Loja</span></h4>
                </div>
                <div class="modal-body">
                    <div class="row item">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <span data-bind="widgetLocaleText: 'searchStoreLabelText'">Insira sua cidade ou CEP para verificar lojas</span>
                        </div>
                    </div>
                    <div class="row hidden-xs">
                        <label class="control-label hidden" for="CC-storeSelect"><span data-bind="widgetLocaleText: 'storeSearchPlaceholderText'">Insira sua Cidade/CEP/Nome</span>:</label>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <input type="text" class="col-md-12 form-control" name="storeSearchQueryInModal" id="CC-storeSelect" aria-required="true" data-bind="value: $parent.storeSearchText, valueUpdate: 'afterkeydown', widgetLocaleText : {value:'storeSearchPlaceholderText', attr:'placeholder'}, event: { keydown : function(data, event) {return $parent.handleKeyPress($parent, event)} }" placeholder="Insira sua Cidade/CEP/Nome">
                        </div>
                        <span class="input-group-btn cell-padding">
                            <button type="button" class="cc-button-primary button-text-nowrap" data-bind="click: $parent.displayStoreSelector.bind($parent, $parent.selectedShippingGroup, $parent.cartItem, $parent.selectedShpgrpElement), disable: !$parent.storeSearchText.isValid()">
                                <span data-bind="widgetLocaleText:'findStoresButtonText'">Encontrar Lojas</span>
                            </button>
                        </span>
                    </div>
                    <div class="row visible-xs">
                        <label class="control-label hidden" for="CC-storeSelect-mobile"><span data-bind="widgetLocaleText: 'storeSearchPlaceholderText'">Insira sua Cidade/CEP/Nome</span>:</label>
                        <div class="row-item col-xs-12 col-sm-12 col-md-12">
                            <input type="text" class="col-md-12 form-control" name="storeSearchQueryInModal" id="CC-storeSelect-mobile" aria-required="true" data-bind="value: $parent.storeSearchText, valueUpdate: 'afterkeydown', widgetLocaleText : {value:'storeSearchPlaceholderText', attr:'placeholder'}" placeholder="Insira sua Cidade/CEP/Nome">
                        </div>
                        <span class="row-item input-group-btn cell-padding">
                            <button type="button" class="cc-button-primary button-text-nowrap" data-bind="click: $parent.displayStoreSelector.bind($parent, $parent.selectedShippingGroup, $parent.cartItem, $parent.selectedShpgrpElement), disable: !$parent.storeSearchText.isValid()">
                                <span data-bind="widgetLocaleText:'findStoresButtonText'">Encontrar Lojas</span>
                            </button>
                        </span>
                    </div>
                    <div class="row-item">
                        <span id="CC-storeSelect-itemError" class="text-danger" role="alert" aria-live="assertive" data-bind="validationMessage: $parent.storeSearchText" style="display: none;"></span>
                    </div>
                </div>
                <!-- ko if: $parent.stores().length === 0 -->
                    <div class="empty-stores">
                        <!-- ko if: $parent.storeLookupStatus() === -1 --><!-- /ko -->
                        <!-- ko if: $parent.stores().length === 0 && $parent.storeLookupStatus() == -2 --><!-- /ko -->
                    </div>
                <!-- /ko -->
                <!-- ko if: $parent.stores().length > 0 --><!-- /ko -->

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Store Pickup Modal Dialogue :: END -->

    <!-- MODAL dialouge for making a gift selection -->
    <div class="modal fade" id="CC-giftSelectionpane" tabindex="-1" role="dialog">
      <div class="modal-dialog cc-modal-dialog">
        <div class="modal-content">
          <div class="modal-header CC-header-modal-heading">
            <h6 data-bind="widgetLocaleText:'giftChoiceText'">Você foi qualificado para um brinde. Selecione suas opções abaixo.</h6>
          </div>
          <!-- ko if: $parent.currentGiftChoice() --><!-- /ko -->
          <div class="modal-footer CC-header-modal-footer">
            <button type="button" id="CC-giftSelected-button" class="cc-button-primary disabled" data-bind="disabled: { condition: !($parent.allOptionsSelected() &amp;&amp; $parent.currentGiftChoice().giftChoice.inStock()),
                click: $parent.handleGiftAddToCart.bind($parent)}">
              <span data-bind="widgetLocaleText: 'okText'">OK</span>
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>