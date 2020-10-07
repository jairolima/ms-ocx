<div id="profileNavigation">
  <!-- Desktop / tablet etc. viewport -->
  <!-- ko ifnot: $data.isMobile() -->

  <!--  ko if:$data.displayOptions() === "horizontal" --><!--/ko -->
  <!-- ko ifnot: $data.displayOptions() === "horizontal"  -->
  <div class="prflnvgtn-wrapper">
    <ul class="nav" data-bind="attr: { id: 'secondaryNavigation-'+id()+'-tabs'}" id="secondaryNavigation-wi900083-tabs">

      <!-- ko foreach: keyValuePair -->
      <li class="prflnvgtn-item active" data-toggle="tab" data-bind="css: {active: $data.route === $parent.currentTab()}, attr: { id: 'secondaryNavigation-'+$parent.id()+'-tab-'+$index() }" id="secondaryNavigation-wi900083-tab-0">
        <a class="prflnvgtn-link" data-bind="ccLink: $data, widgetLocaleText : displayName" href="/profile">Minha Conta</a>
      </li>
      
      <li class="prflnvgtn-item" data-toggle="tab" data-bind="css: {active: $data.route === $parent.currentTab()}, attr: { id: 'secondaryNavigation-'+$parent.id()+'-tab-'+$index() }" id="secondaryNavigation-wi900083-tab-1">
        <a class="prflnvgtn-link" data-bind="ccLink: $data, widgetLocaleText : displayName" href="/addressBook">Meus Endereços</a>
      </li>
      
      <li class="prflnvgtn-item" data-toggle="tab" data-bind="css: {active: $data.route === $parent.currentTab()}, attr: { id: 'secondaryNavigation-'+$parent.id()+'-tab-'+$index() }" id="secondaryNavigation-wi900083-tab-2">
        <a class="prflnvgtn-link" data-bind="ccLink: $data, widgetLocaleText : displayName" href="/orderHistory">Meus Pedidos</a>
      </li>
      <!-- /ko -->
    </ul>
  </div>
  <!-- /ko -->
  <!-- /ko -->

  <!-- End Desktop / tablet etc. viewport -->

  <!-- Mobile ViewPort -->
  <!-- ko if: $data.isMobile() --><!-- /ko -->
</div>