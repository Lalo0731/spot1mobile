@extends('layouts.index')
@section('content')
<section class="pricing bg-shape mt-0 circlu">
    <div class="container-fluid bg-secondary booking mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
        {{--  <div class="container pbRecarga">  --}}
            <div class="row gx-5">
                <div class="pt-5 mb-6 mt-7">
                    <h1 class="text-white mb-4 colorBlue col-6 text-center">¡Realiza tus Recargas desde tu casa!</h1>
                </div>
                <div class="col-lg-6">
                    <div class="color-recarga h-70 d-flex flex-column justify-content-center text-center p-4 wow zoomIn mt-8 border-radius" data-wow-delay="0.6s">
                        <h3 class="text-black mb-4 text-uppercase">Fácil y Rápido</h3>
                        <p class="mb-4 text-uppercase text-black">Ingresa tus datos y paga en línea, evita las molestas filas y hazlo todo desde la comidad de tu casa</p>
                        <form action="{{route('recharges')}}" method="POST" id="formPago">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Ingresa el número" min="10" max="10" style="height: 55px;" id="numeroTelefono" name="numeroTelefono">
                                </div>
                                <!-- <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div> -->
                                <input type="hidden" value="" id="tipoServicioInput" name="tipoServicioInput">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" id="tipoServicio">
                                        <option selected disabled value="0">Tipo de Servicio</option>
                                        <option value="MOVIL">Móvil</option>
                                        <option value="MIFI">MIFI</option>
                                    </select>
                                </div>

                                <input type="hidden" value="" id="montoRecargaInput" name="montoRecargaInput">
                                <div class="col-12 col-sm-12">
                                <select class="form-select border-0" style="height: 55px;" id="montoRecarga">
                                    <option selected disabled value="0">Monto a Recargar</option>
                                    <option value="Plan $300 (Internet ilimitado*  Llamadas y SMS ilimitados*  HOT SPOT**, 30D)">Plan $300 (Internet ilimitado*  Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                                    <option value="Plan $200 (Internet ilimitado*  Llamadas y SMS ilimitados*, 30D)">Plan $200 (Internet ilimitado*  Llamadas y SMS ilimitados*, 30D)</option>
                                    <option value="Plan $100 (5,000MB, Llamadas y SMS ilimitados*  HOT SPOT**, 30D)">Plan $100 (5,000MB, Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                                </select>
                                </div>
                                <!-- <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div> -->
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="button" id="formRecargar">Recargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 "><!--py-5-->
                    {{--  <div class="py-5 mt-7">  --}}
                    <div class="position-absolute z-index-2">
                        <img src="{{asset('images/person.png')}}" alt="" class="w-75 mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div>  {{--  class="container"  --}}
      <div class="row">
        <div class="col color-apart p-3">
          <h3 class="text-white mb-3 text-center p-3 style-text w400">¿Aún no eres parte de <spa class="style-text w800">SpotUno</spa>?</h3>
          <h5 class="text-white text-center style-text w400">¿Qué esperas? adquiérelo y disfruta de todos los beneficios</h5>
          <div class="col text-center p-3">
            <button type="button" class="btn btn-outline-secondary btn-border style-text w400">¡Solicítalo ya!</button>
          </div>
        </div>
        <div class="col color-paquet p-3">
          <h3 class="text-white mb-3 text-center p-3 style-text w400">Disfruta de todo <span class="style-text w800">nuestros paquetes</span></h3>
          <h5 class="text-white text-center style-text w400">Queremos ofrecerte solo lo mejor, seleccina, compra y disfruta</h5>
          <div class="col text-center p-3">
            <button type="button" class="btn btn-outline-secondary btn-border style-text w400">Ver paquetes</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-ctaRe mb-5">
    <div class="mt-4">
      {{--  <h2 class="text-white style-text w900 m-5">Recarga desde tu celular</h2>  --}}
    </div>
  </section>

  <section class="m-informacion">
    <div class="d-flex justify-content-lg-center">
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Aviso de privacidad/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Terminos y condiciones/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Cobertura/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Legales</a>
      </div>
    </div>
  </section>

<script>
    $('#numeroTelefono').inputmask("(999) 999-9999");
</script>

<script>
    $('#formRecargar').click(function() {

        var numeroTelefono = $('#numeroTelefono').val();
        var numeroSinParentesis = numeroTelefono.replace(/\((\w+)\)/g, "$1");
        var numeroSinGuion = numeroSinParentesis.replace("-", " ")
        var numeroSinEspacio = numeroSinGuion.replace(/\s+/g, '');

        var tipoServicio = $('#tipoServicio').val();
        var montoRecarga = $('#montoRecarga').val();
        
        if(numeroSinEspacio == ""){
            return Swal.fire({
                icon: 'error',
                title: 'El número de Teléfono es obligatorio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(tipoServicio == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Servicio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(montoRecarga == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Monto a Recargar.',
                showConfirmButton: false,
                timer: 2000
            });
        } else{
            $('#tipoServicioInput').val(tipoServicio);
            $('#montoRecargaInput').val(montoRecarga);

            Swal.fire({
                title: '¿La recarga seleccionada con número '+ numeroSinEspacio +' es correcto?',
                showCancelButton: true,
                confirmButtonText: 'SI, ES CORRECTO',
                confirmButtonColor: '#0a4f97',
                }).then((result) => {

                if (result.isConfirmed) {
                    $('#formPago').submit();
                } else{
                    Swal.fire({
                        icon: 'info',
                        title: 'Operación Cancelada',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

</script>

@endsection