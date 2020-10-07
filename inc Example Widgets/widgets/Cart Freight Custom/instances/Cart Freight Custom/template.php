<div id="cart-freight-simulation">
  
  <div class="crtfrght-simulator utl_flx-between utl_mbl-collumn hide">
      <div class="tp_prgrph">
          Simular prazo e valor do frete
      </div>
      <div class="utl_flx-between">
        <div>
          <input type="text" class="utl_input" placeholder="00000-000">
        </div>
        <div>
          <button type="button" class="btn btn-secondary md">Ok</button>
        </div>

      </div>
  </div>

  <div class="crtfrght-simulator-result">

    <div class="crtfrght-zip-info">
      <div class="crtfrght-zipcode">
        <i class="icon-location"></i>
        <a href="#">CEP: 04543-011</a>
      </div>  

      <div class="crtfrght-address">
        <p class="tp_sm">
          <span>Presidente Juscelino Kubischek - Vila Nova</span>
          <br>
          <span>Conceição - São Paulo / SP</span>
        </p>
      </div>
    </div>

    <div class="crtfrght-result">
      
      <ul class="rslt-lst">
        <li class="rslt-itm utl_radio">
          <input type="radio" id="frete_01" name="frete" checked>
          <label for="frete_01" class="utl_flx-between">
            <span>
              <b>Padrão</b> <br>
              <span>Em até 10 dias úteis</span>
            </span>
            <span>
              <b>Frete Grátis</b>
            </span>
          </label>
        </li>
        <li class="rslt-itm utl_radio">
          <input type="radio" id="frete_02" name="frete">
          <label for="frete_02" class="utl_flx-between">
            <span>
              <b>Expressa</b> <br>
              <span>Em até 3 dias úteis</span>
            </span>
            <span>
              <b>R$32,00</b>
            </span>
          </label>
        </li>
      </ul>
      <p class="tp_sm">O resultado da entrega inicia-se no 1º dia útil após a confirmação do pagamento</p>
      
    </div>

    
  </div>
</div>