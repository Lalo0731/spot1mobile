@extends('layouts.index')
@section('content')
<section class="our-team mb-5">
  <div class="container">
    <div class="row">
        
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2 class="numero-cliente">Legales</h2>
            <div class="border border-secondary p-3">
                    <a target="_blank" href="{{asset('legales/Colaboracion con la justicia.pdf')}}" class="mt-2 style-text w600 color-text-planes h5">Colaboración Con la Justicia</a>
                <!-- <h5 class="mt-1 style-text w600">SPOT Uno SA de CV</h5>
                <h5 class="mt-1 style-text w600">BBVA 0017 8030 0366 1376</h5>
                <h5 class="mt-1 style-text w600">Clabe: 01215000 1123820321</h5>
                <h5 class="mt-1 style-text w600 mt-3">Con código PAYNET (Registro automático) ¡Solicítalo!</h5>  -->
            </div>
        </div>
      </div>

      <!-- <div class="col-lg-10 offset-lg-1">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu">
                  <div class="active referenceSpotOxxo">
                    <img src="{{asset('images/oxxo.png')}}" alt="Oxxo">
                    <h4>OXXO</h4>
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/walmart.png')}}" alt="walmart">
                    <h4>WALMART</h4>
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/sams-club.jpg')}}" alt="sams-club">
                    <h4>SAMS CLUB</h4>
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/farmacia-ahorro.png')}}" alt="Farmacia del Ahorro">
                    <h4>FARMACIA DEL AHORRO</h4>
                  </div>
                  <div class="stripeCard">
                    <img src="{{asset('images/tarjeta-debito.jpg')}}" alt="">
                    <h4>TAJETA DE CRÉDITO O DÉBITO</h4>
                  </div>
                </div>
                <input type="hidden" name="" id="amount" value="30">
                <input type="hidden" name="" id="description" value="Recarga 30 Dias">
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>

    <!-- Modal Stripe -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-header p-4 formulario_pagar">
          <div class="modal-body col-8 text-center">
            <h5 class="text-star">Total a pagar</h5>
            <h5 class="text-star p-1 pt-2 fw-bold">$300.00</h5>
            <hr>
            <h5 class="text-star p-1 pt-2">Número de Referencia</h5>
            <h5 class="text-star fw-bold" id="referencePago"></h5>
            <hr>
            <h5 class="text-star p-1 pt-2">Código de Barra</h5>
            <img src="" alt="" id="codeBarraPago">
          </div>
          <div class="modal-body border-start">
            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-shop colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">1. Visita una de las tiendas afiliadas.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-cash-register colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">2. Indica en caja que quieres realizar un pago de: OxxoPay.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-barcode colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">3. Muestra la referencia de pago o el código de barras para pagar en caja.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-hand-holding-dollar colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">4. Confirma el monto a pagar.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-check-double colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">5. Completa tu pago y recibe tu recarga inmediatamente.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-file-invoice colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">6. El cajer@ te entregará un comprobante impreso. Consérvalo en caso qué requieras ayuda.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-1">
                <i class="fa-solid fa-comment-sms colorFont padR"></i>
              </div>
              <div class="col-sm-11 pl-0">
                <p class="text-justify h6 color-reference">7. Recibirás un SMS confirmando tu recarga.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-11 pl-0">
                <p class="text-center fw-bold fs-5 mt-3 color-reference">Tomar captura por cualquier duda o aclaración </p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          {{--  <button type="button" class="btn btn-primary">Pagar</button>  --}}
        </div>
      </div>
    </div>
  </div> -->
    <!-- Modal Stripe -->

  {{--  Modal Conekta  --}}
  <!-- <div class="modal fade" tabindex="-1" role="dialog" id="stub">
    <div class="modal-dialog modal-conekta" role="document"> {{--  modal-lg --}}
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Referencia de Pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="opps">
            <div class="opps-header">
              <div class="opps-reminder">Ficha digital. No es necesario imprimir.</div>
              <div class="opps-info">
                <div class="opps-brand"><img src="{{asset('images/oxxopay_brand.png')}}" alt="OXXOPay"></div>
                <div class="opps-ammount">
                  <h3 class="text-h3">Monto a pagar</h3>
                  <h2>$ <span id="stub_price"></span> <sup id="stub_currency"></sup></h2>
                  <p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
                </div>
              </div>
              <div class="opps-reference">
                <h3 class="text-h3 text-center">Referencia</h3>
                <h1 class="text-h1" id="stub_reference"></h1>
              </div>
              <div class="opps-reference mt-4">
                <h3 class="text-h3 text-center">Codigo de Barra</h3>
                <img src="" alt="" id="codeBarra" class="w-50 mx-auto d-block">
              </div>
            </div>
            <div class="opps-instructions">
              <h3 class="text-h3">Instrucciones</h3>
              <ol class="ol">
                <li class="li">Acude a la tienda OXXO más cercana. <a class="a" href="https://www.google.com.mx/maps/search/oxxo/" target="_blank">Encuéntrala aquí</a>.</li>
                <li class="li">Indica en caja que quieres realizar un pago de servicio<strong></strong>.</li>
                <li class="li">Dicta al cajero el número de referencia en esta ficha para que tecleé directamete en la pantalla de venta.</li>
                <li class="li">Realiza el pago correspondiente con dinero en efectivo.</li>
                <li class="li">Al confirmar tu pago, el cajero te entregará un comprobante impreso. <strong>En el podrás verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>
              </ol>
              <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div>
            </div>
          </div>	

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div> -->

</section>


<!-- <div class="modal fade" id="stripePayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Pago con Tarjeta Vía Stripe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class='col-md-12'>
            <form action="{{url('paymentStripe')}}" method="post" id="payment-form">
                @csrf
                <div >
                    <label for="card-element">
                        Tarjeta de Crédito o Débito
                    </label>
                    <div id="card-element">
                    </div>
                    <div id="card-errors" class="alert alert-danger mt-3 mb-3 d-none" role="alert"></div>
                </div>

                <input type="hidden" name="amount" id="STRIPE_amount" value="200">
                {{-- <input type="hidden" name="offer_id" id="STRIPE_offer_id">
                <input type="hidden" name="offerAltan" id="STRIPE_offerAltan">
                <input type="hidden" name="rate_id" id="STRIPE_rate_id">
                <input type="hidden" name="referencestype" id="STRIPE_referencestype">
                <input type="hidden" name="number_id" id="STRIPE_number_id">
                <input type="hidden" name="client_id" id="STRIPE_client_id">
                <input type="hidden" name="pay_id" id="STRIPE_pay_id" value="0">
                <input type="hidden" name="exists" id="STRIPE_exists">
                <input type="hidden" name="pack_id" id="STRIPE_pack_id">
                <input type="hidden" name="rate_name" id="STRIPE_data_rate_name">
                <input type="hidden" name="number" id="STRIPE_number_to_recharge"> --}}

                <button class="btn btn-success mt-3" id="stripePagar">PAGAR</button>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

@endsection