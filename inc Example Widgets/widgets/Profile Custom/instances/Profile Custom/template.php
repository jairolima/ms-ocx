<div id="CC-customerProfile" data-bind="onRender: addEventHandlersForAnchorClick" class="col-xs-12">
  
  <!-- ko with: user -->
  <div id="CC-myaccount-header">
    <h3 class="tp_hdln3 hidden-xs">Minha Conta</h3>
    <h2 class="tp_hdln1" data-bind="widgetLocaleText:'userDetailsText'">Detalhes da Conta</h2>
  </div>
  <fieldset id="CC-customerProfile-userdetail-edit-fields" class="hide">
    <div id="CC-customerProfile-details-edit">
      <!--  Edit begin -->
      <div id="CC-customerProfile-details-edit-region">

        <div class="row" id="CC-customerProfile-details-edit-header">
          <p data-bind="widgetLocaleText: 'userDetailsHeader'" class="no-outline col-xs-12" aria-required="true" id="CC-customerProfile-details-edit-headerText">Para alterar o nome, clique nos campos apropriados.</p>
        </div>
        <br>
        <div class="row first-row">
          <div class="col-md-8">
            <label id="CC-customerProfile-edit-details-firstnameLabel" class="control-label inline" for="CC-customerProfile-edit-details-firstname" data-bind="widgetLocaleText:'firstNameText'">Nome</label>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <label id="CC-customerProfile-edit-details-emailAddressLabel" class="control-label inline" for="CC-customerProfile-edit-details-emailAddress" data-bind="text: dynamicProperties()[0].label">Número do documento (CPF / CNPJ)</label>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <div class="control">
              <input type="text" id="cpf-cnpj" class="form-control" name="dotz_documentId" placeholder="Número do documento (CPF / CNPJ)" required="required" data-bind="validatableValue: $parent.dotz_documentId">
            </div>
          </div>
          <div class="col-md-4 hidden-xs">
            <p class="text-danger" id="CC-customerProfile-edit-details-emailAddress-error" data-bind="validationMessage: $parent.dotz_documentId" role="alert" style="display: none;"></p>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <span class="text-danger visible-xs" id="CC-customerProfile-edit-details-firstname-phone-error" data-bind="validationMessage: firstName" role="alert" style="display: none;"></span>
            <div class="control">
              <input aria-required="true" type="text" class="col-md-12 form-control" name="sFirstName" id="CC-customerProfile-edit-details-firstname" data-bind="validatableValue: firstName, widgetLocaleText : {value:'firstNameText', attr:'placeholder'}, event: {focus: $parent.inputFieldFocused.bind($parent)}" required="required" placeholder="Nome">
            </div>
          </div>
          <div class="col-md-4 hidden-xs">
            <p class="text-danger" id="CC-customerProfile-edit-details-firstname-error" data-bind="validationMessage: firstName" role="alert" style="display: none;"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <label id="CC-customerProfile-edit-details-lastnameLabel" class="control-label inline" for="CC-customerProfile-edit-details-lastname" data-bind="widgetLocaleText:'lastNameText'">Sobrenome</label>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <span class="text-danger visible-xs" id="CC-customerProfile-edit-details-lastname-phone-error" data-bind="validationMessage: firstName" role="alert" style="display: none;"></span>
            <div class="control">
              <input aria-required="true" type="text" class="col-md-12 form-control" name="sLastName" id="CC-customerProfile-edit-details-lastname" data-bind="validatableValue: lastName, widgetLocaleText : {value:'lastNameText', attr:'placeholder'}, event: {focus: $parent.inputFieldFocused.bind($parent)}" required="required" placeholder="Sobrenome">
            </div>
          </div>
          <div class="col-md-4 hidden-xs">
            <p class="text-danger" id="CC-customerProfile-edit-details-lastname-error" data-bind="validationMessage: lastName" role="alert" style="display: none;"></p>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-8">
            <div class="control">
              <input aria-required="true" type="text" class="form-control" name="dateOfBirth" id="CC-customerProfile-edit-details-dateOfBirth" placeholder="Data de nascimento" data-bind="validatableValue: $parent.dateOfBirth, inputmask: {mask: '99/99/9999'}, event: {focus: $parent.inputFieldFocused.bind($parent)}" required="required">
            </div>
          </div>
          <div class="col-md-4">
            <p class="text-danger" data-bind="validationMessage: $parent.dateOfBirth" role="alert" style="display: none;"></p>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-8">
            <div class="control">
              <select aria-required="true" class="form-control" data-bind="value: $parent.gender">
                <option value="" style="display: none;" selected="" disabled="">Gênero</option>
                <option value="male">Masculino</option>
                <option value="female">Feminino</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <p class="text-danger" data-bind="validationMessage: $parent.gender" role="alert" style="display: none;"></p>
          </div>
        </div>

        <div data-bind="visible: supportedLocales.length > 1" style="display: none;">
          <div class="row">
            <div class="col-md-8">
              <span data-bind="widgetLocaleText: 'localeText'">Idioma preferido:</span>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8">
              <div class="control">
                <select class="col-md-12 form-control" name="profileLocale" id="CC-customerProfile-locales" aria-required="true" data-bind="options: supportedLocales, 
                            optionsText: function(item) {
                              return $parent.getFormattedProfileLocaleDisplayName(item)},
                            optionsValue: function(item) {
                              return item.name },
                            value: $parent.user().locale,
                            validatableTarget: locale, validationElement: locale, event: {focus: $parent.inputFieldFocused.bind($parent)}, widgetLocaleText : {value:'preferredLanguageText', attr:'aria-label'}" aria-label="Selecione seu idioma preferido."><option value="pt_BR">PT_BR - Português (Brasil)</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- ko if: isB2BUser() --><!-- /ko -->
        <!-- ko if: !isB2BUser() -->
        <div class="row">
          <div class="col-md-8">
            <label id="CC-customerProfile-edit-details-emailAddressLabel" class="control-label inline" for="CC-customerProfile-edit-details-emailAddress" data-bind="widgetLocaleText:'emailAddressText'">Endereço de E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-8">
            <span class="text-danger visible-xs" id="CC-customerProfile-edit-details-emailAddress-phone-error" data-bind="validationMessage: emailAddress" role="alert" style="display: none;"></span>
            <div class="control">
              <input type="text" class="col-md-12 form-control" name="sEmailAddress" id="CC-customerProfile-edit-details-emailAddress" data-bind="validatableValue: emailAddress, widgetLocaleText : {value:'emailAddressText', attr:'placeholder'}" required="required" placeholder="Endereço de E-mail">
            </div>
          </div>
          <div class="col-md-4 hidden-xs">
            <p class="text-danger" id="CC-customerProfile-edit-details-emailAddress-error" data-bind="validationMessage: emailAddress" role="alert" style="display: none;"></p>
          </div>
        </div>
        <!-- /ko -->
        <div class="row">
          <div id="CC-customerProfile-marketingMail" class="form-group col-xs-12">
            <p data-bind="widgetLocaleText: 'emailPreferences'" id="CC-customerProfile-marketingMail-Header">Preferências de e-mail</p>
          </div>
        </div>
        <div class="row col-md-12">
          <div class="form group">
            <div class="checkbox" id="CC-customerProfile-edit-marketingMail-checkbox">
              <label for="CC-customerProfile-edit-marketingMails">
                <input type="checkbox" name="marketing-mail" data-bind="checked: emailMarketingMails, event: {focus: $parent.inputFieldFocused.bind($parent)}" id="CC-customerProfile-edit-marketingMails">
                <span data-bind="widgetLocaleText: 'marketingMailsText'" id="CC-customerProfile-edit-marketingMail-text">Quero receber atualizações por e-mail.</span>
              </label>
            </div>
          </div>
        </div>
        <div class="row col-md-12" data-bind="visible:$parent.site().requireGDPRP13nConsent" style="display: none;">
          <div class="form group">
            <div class="checkbox" id="CC-customerProfile-edit-personalizationConsent-checkbox">
              <label for="CC-customerProfile-edit-personalizationConsent">
                <input type="checkbox" name="personalization-Consent" data-bind="checked: GDPRProfileP13nConsentGranted" id="CC-customerProfile-edit-personalizationConsent">
                <span data-bind="widgetLocaleText: 'personalizationConsentText'" id="CC-customerProfile-edit-personalizationConsent-text">Mostrar conteúdo relevante e promoções do site durante a navegação.</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <!--  Edit ends -->
    </div>
  </fieldset>
  <!-- /ko -->
  

  <div class="prfl-box">
    <div class="utl_flx-between utl_mbl-collumn">
      <div class="prfl-button-wrapper">
        <button type="button" class="btn btn-primary lg blck" id="data-profile-button" data-bind="click: openSecurityMdl">
          <i class="icon icon-profile"></i>
          Dados Pessoais
        </button>
      </div>
      <div class="prfl-button-wrapper">
        <button type="button" class="btn btn-primary lg blck" id="email-profile-button" data-bind="click: openSecurityMdlEmail">
          <i class="icon icon-material-mail-outline"></i>
          E-mail
        </button>
      </div>
    </div>
    <div class="utl_flx-between utl_mbl-collumn">
      <div class="prfl-button-wrapper">
        <button type="button" class="btn btn-primary lg blck" id="phone-profile-button" data-bind="click: openSecurityMdlPhone">
          <i class="icon icon-smartphone"></i>
          Telefone
        </button>
      </div>
      <div class="prfl-button-wrapper">
        <button type="button" class="btn btn-primary lg blck" id="password-profile-button" data-bind="click: openSecurityMdl">
          <i class="icon icon-padlock"></i>
          Senha
        </button>
      </div>
    </div>
  </div>

  <div id="CC-customerProfile-save-cancel-control" class="row cc-customer-profile-save-cancel hide">
    <button class="cc-button-primary col-sm-2 col-xs-12 pull-right cc-customer-profile-button" id="CC-customerProfile-save" data-bind="click: handleUpdateProfileForShopperDetails, event: { mousedown: handleMouseDown, mouseup: handleMouseUp }">
      <span data-bind="widgetLocaleText: 'buttonSave'">Salvar</span>
    </button>
    <button class="cc-button-secondary col-sm-2 col-xs-12 pull-right cc-customer-profile-button" id="CC-customerProfile-cancel" data-bind="click: handleCancelUpdateForShopperDetails, event: { mousedown: handleMouseDown, mouseup: handleMouseUp}">
      <span data-bind="widgetLocaleText: 'buttonCancel'">Cancelar</span>
    </button>
  </div>

  <div class="temp-buttons hide">
    <div class="utl_flx-betweeen">
        <button type="button" class="btn btn-success lg" id="btn-save-phone"> <i class="icon-material-mail-outline"></i> Salvar telefone</button>
        <button type="button" class="btn btn-success lg" id="btn-save-email"> <i class="icon-smartphone"></i> Salvar Email</button>
    </div>
  </div>

  <!-- modal envio de token -->
  <div class="modal fade" id="security-modal" tabindex="-1" role="alert">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- mdl header -->
        <div class="modal-header text-center">          
          <button type="button" class="mdlhdr-close" data-dismiss="modal" aria-hidden="true">
            <i class="icon-ionic-ios-close"></i>
          </button>
          
          <h4 class="mdlhdr-title">Segurança - Token</h4>
          
          <div class="mdlhdr-icon">
            <i class="icon-padlock"></i>
          </div>

        </div>
        
        <div class="modal-body cc-profile-body-modal">
          
          <p class="mdl-desc text-center"></p>

          <ul class="cntct-lst">
            
            <!-- ko if : tokenToPhone -->
            <li class="cntct-itm utl_radio">
              <input type="radio" id="inpt-cntct-email" name="cntct-security" checked="">
              <label for="inpt-cntct-email">
                <i class="cntct-icn icon-mail"></i>
                <span class="cntct-txt">luxxxxxxxxxxxxxxbr</span>
              </label>
            </li>
            <!-- /ko -->

            <!-- ko if : tokenToEmail -->
            <li class="cntct-itm utl_radio">
              <input type="radio" id="inpt-cntct-phone" name="cntct-security" data-bind="attr : { checked: tokenToPhone() == false } ">
              <label for="inpt-cntct-phone">
                <i class="cntct-icn icon-smartphone"></i>
                <span class="cntct-txt">549xxxxxxxxxx78</span>
              </label>
            </li>
            <!-- /ko -->
          </ul>

          <div class="text-center">
            <button type="button" id="send-token-button" class="btn btn-primary lg cnctc-button" data-bind="click: openTokenMdl">ENVIAR TOKEN</button>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="utl_link" data-dismiss="modal" aria-hidden="true">cancelar</button>
        </div>

      </div>
    </div>
  </div>
  
  <!-- modal informa token -->
  <div class="modal fade" id="security-modal-token" tabindex="-1" role="alert">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- mdl header -->
        <div class="modal-header text-center">          
          <button type="button" class="mdlhdr-close" data-dismiss="modal" aria-hidden="true">
            <i class="icon-ionic-ios-close"></i>
          </button>
          
          <h4 class="mdlhdr-title">Segurança - Token</h4>
          
          <div class="mdlhdr-icon">
            <i class="icon-padlock"></i>
          </div>

        </div>
        
        <div class="modal-body cc-profile-body-modal">
          
          <p class="mdl-desc text-center">
            Para Concluir sua ação, digite o <br> token que você recebeu
          </p>
          <div class="text-center clr_bl2 tp_sm">
              <span class="mdl-receiver"></span>
          </div>

          <input type="text" id="input-token" class="tkn-inpt" inputmode="numeric" maxlength="6">
          <div class="tkn-slash-wrapper">
            <span class="tkn-slash"></span>
            <span class="tkn-slash"></span>
            <span class="tkn-slash"></span>
            <span class="tkn-slash"></span>
            <span class="tkn-slash"></span>
            <span class="tkn-slash"></span>
          </div>

          <div class="text-center">
            <button type="button" id="confirm-token-button" class="btn btn-primary lg cnctc-button">ENVIAR TOKEN</button>
            <button type="button" id="confirm-token-successs-button" class="btn btn-primary lg cnctc-button">ENVIAR TOKEN</button>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="utl_link" data-dismiss="modal" aria-hidden="true">Não recebi o código</button>
        </div>

      </div>
    </div>
  </div>
  
  <!-- modal informa success -->
  <div class="modal fade" id="security-modal-success" tabindex="-1" role="alert">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- mdl header -->
        <div class="modal-header text-center">          
          <button type="button" class="mdlhdr-close" data-dismiss="modal" aria-hidden="true">
            <i class="icon-ionic-ios-close"></i>
          </button>
        </div>
        
        <div class="modal-body">
                              
          <div class="text-center">
            <span class="icon-correct"><span class="path1"></span><span class="path2"></span></span>
          </div>
          
          <p class="clr_bl2 tp_hdln3 mdl-text-success text-center">
            E-mail alterado com sucesso!                      
          </p>

        </div>

        <div class="modal-footer">
          <button type="button" class="utl_link" data-dismiss="modal" aria-hidden="true">Fechar</button>
        </div>

      </div>
    </div>
  </div>

  <!-- CC-customerProfileModalPane -->
  <div class="modal fade" id="CC-customerProfile-modal-1" tabindex="-1" role="alert" data-bind="modalTabbingContraint">
    <div class="modal-dialog" id="CC-customerProfile-modal-dialog-1">
      <div class="modal-content" id="CC-customerProfileModalContent-1">
        <div class="modal-header cc-profile-modal-heading cc-profile-confirm-icon" id="CC-customerProfile-modal-header-1">
          <button type="button" class="close" data-dismiss="modal" id="CC-customerProfile-modal-headerClose-1" aria-hidden="true">×</button>
          <h4 data-bind="widgetLocaleText:'updateCacelModalTitle'" id="CC-customerProfile-modal-headerText-1">Alterações Não Salvas</h4>
        </div>
        <div class="modal-body cc-profile-body-modal" id="CC-customerProfile-modal-modalBody-1">
          <p data-bind="widgetLocaleText:'updateCancelModalMessage'" align="center" id="CC-customerProfile-modal-bodyText-1">Você tem alterações não salvas. Deseja salvá-las?</p>
        </div>
        <div class="modal-footer cc-profile-modal-footer" id="CC-customerProfile-modal-footer-1">
          <button class="btn cc-button-secondary" id="CC-customerProfile-modal-cancel-1" data-bind="click: handleModalCancelUpdateDiscard">
            <span id="CC-customerProfile-modal-discard-1" data-bind="widgetLocaleText:'updateCancelModalClose'">Descartar</span>
          </button>
          <button class="btn cc-button-primary" id="CC-customerProfile-modal-submit-1" data-bind="click: handleModalUpdateProfile">
            <span id="CC-customerProfile-modal-save-1" data-bind="widgetLocaleText:'updateCancelModalSave'">Salvar</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>