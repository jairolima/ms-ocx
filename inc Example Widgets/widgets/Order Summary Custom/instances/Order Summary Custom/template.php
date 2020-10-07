<div id="orderSummary">
  <div class="ordersummary clearfix">
    <!-- Discount, shipping and sales tax -->
    <div id="CC-orderSummaryLoadingModal"> 
      <!-- ko if: cart().orderDiscount() != 0 --><!-- /ko -->

      <!-- ko if: includeShipping -->
        <!-- ko if: hasShippingInfo --><!-- /ko -->
        <!-- ko if: hasShippingInfo && cart().shippingDiscount() !== 0 --><!-- /ko -->
       <!-- /ko -->
       
       <!-- ko if: hasShippingInfo && cart().shippingSurcharge() !== 0 --><!-- /ko -->
       
       <!-- ko if: includeTax && cart().showTaxSummary --><!-- /ko -->
     </div>
     
     <!-- List of discount descriptions -->
     <div id="CC-orderSummary-discounts" class="clearfix discountContainer discountDescText" data-bind="foreach: cart().orderDiscountDescList()"></div>

     <!-- List of coupons used -->
     <div id="CC-orderSummary-coupons" class="clearfix discountDescText" data-bind="foreach: cart().claimedCouponMultiPromotions()"></div>

     <!-- Cart Total -->
     <div id="CC-orderSummary-orderTotal" role="alert" aria-live="polite" aria-atomic="true" class="ordertotal clearfix">
       <!-- ko if: (cart().isTaxIncluded && cart().showTaxSummary) --><!-- /ko -->
       <!-- ko ifnot: (cart().isTaxIncluded && cart().showTaxSummary) -->
         <!-- ko if: (cart().showSecondaryShippingData() || cart().showSecondaryTaxData()) --><!-- /ko -->
         <!-- ko ifnot: (cart().showSecondaryShippingData() || cart().showSecondaryTaxData()) -->
            <div class="clearfix">
                <span data-bind="widgetLocaleText:'orderTotalText'">Total: </span>
                <span class="ordersumprice pull-right" data-bind="currency: {price: cart().total(), currencyObj: $data.site().selectedPriceListGroup().currency}, css: $data.site().selectedPriceListGroup().currency.currencyCode == 'DOTZ' ? 'clr_orng1' : ''">R$5.937,80</span>
            </div>
           <!-- ko if: $data.site().selectedPriceListGroup().currency.currencyCode !== 'DOTZ' -->
              <div class="text-right" data-bind="visible: cart().total() > 0 ">
                  <span data-bind="text: $data.textInstallments()" class="tp_sm">Em até 6x de R$ 989,63 sem juros</span>
              </div>
            <!-- /ko -->
           <!-- /ko -->
       <!-- /ko -->
       <!-- ko if: $data.dotzAccumulation -->
        <div class="dotz-wrapper utl_flx-start">
          <div class="dtz-icon">
            <i class="icon-conta-dotz"></i>
          </div>
          <div class="dtz-content">
            <span class="prc-label" data-bind="widgetLocaleText: 'dotzAccumulation'">Ganhe</span>
            <span class="prc-main" data-bind="currency: {price: $data.dotzAccumulation(), currencyObj: $data.site().getCurrency('DOTZ')}">DZ 65.316</span>
            <span class="prc-xsmll">Nesta compra</span>
          </div>
      </div>
      <!-- /ko -->
     </div>
  </div>
  
  <div id="CC-orderSummary-checkout" class="checkout row">
    <a data-bind="widgetLocaleText : {value:'checkoutText', attr:'aria-label'},click: handleValidateCart, ccNavigation: 'prevent', disabled: {condition: cart().items().length == 0, link : 'checkout'}, inTabFlow: cart().items().length != 0" class="btn btn-success lg blck" aria-label="FINALIZAR COMPRA" href="/checkout" tabindex="0">
      <span data-bind="widgetLocaleText:'checkoutText'">FINALIZAR COMPRA</span>
    </a>
  </div>
  <!-- ko if : $data.payment().gateways.paypalGateway.enabled --><!-- /ko -->
  
  <div class="text-center">
    <a data-bind="ccLink:'home'" id="CC-shoppingCart-continueShopping" class="utl_link" href="/home">
      <span data-bind="widgetLocaleText : 'buttonContinueShopping'">Escolher mais produtos</span>
    </a>
  </div>

</div>