@extends('layouts.index')
@section('content')


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner mt5">
      <div class="carousel-item active position-relative d-inline-block" data-bs-interval="4000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="text-white col-4 style-text d-none d-sm-block pri-texto Morganite-BoldItalic w900 font90 text-uppercase d-sm-none d-md-block">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile">spot1mobile.</span></h1>
          <p class="mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto d-sm-none d-md-block">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>

          {{--  Responivo  --}}
          <h1 class="text-white font90 Morganite-BoldItalic w900 col-11 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block  mt-20 text-center">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile p-0">spot1mobile.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block ">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w700 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w700 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-principal.jpg')}}" class="d-block w-100 d-none d-sm-block d-sm-none d-md-block mt-6" alt="imagen1">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block " alt="imagen1">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="5000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="text-white col-4 style-text d-none d-sm-block pri-texto Morganite-BoldItalic w900 font90 text-uppercase d-sm-none d-md-block">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile">spot1mobile.</span></h1>
          <p class="mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto d-sm-none d-md-block">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>

          {{--  Responsivo  --}}
          <h1 class="text-white col-11 font90 Morganite-BoldItalic w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block  mt-20 text-center">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile p-0">spot1mobile.</h1>
            <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block ">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete1 w700 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete2 w700 style-text color-slogan2" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-secundario.jpg')}}" class="d-block w-100 d-none d-sm-block d-sm-none d-md-block mt-6" alt="imagen2">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon2.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block " alt="imagen2">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="4000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="text-white col-4 style-text d-none d-sm-block pri-texto Morganite-BoldItalic w900 font90 text-uppercase d-sm-none d-md-block">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile">spot1mobile.</span></h1>
          <p class="mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto d-sm-none d-md-block">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>

          {{--  Responsivo  --}}
          <h1 class="text-white col-11 font90 Morganite-BoldItalic w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block  mt-20 text-center">Cámbiate a lo de hoy cámbiate a <span class="texto-spot1mobile p-0">spot1mobile.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block ">Cámbiate y disfruta de los paquetes que tenemos para ti, disfruta de comunicarte, tus juegos y series favoritas, todo desde tu celular.</p>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w700 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w700 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>

        <img src="{{asset('images/Banner-terciario.jpg')}}" class="d-block w-100 d-none d-sm-block d-sm-none d-md-block mt-6" alt="imagen3">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon3.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block " alt="imagen3">
        {{--  Responsivo  --}}
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="pricing bg-shape color-barra-principal">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <div class="header-text mt-5">
              <h3 class="Morganite-Book display-3 color-conocenos font-conocenos">Conócenos</em></h3>
            </div>
            <div class="header-text mb-n3">
              <h2 class="Morganite-BoldItalic display-1 font-h4 text-uppercase">Descubre la nueva empresa de <em>telefonía en México</em></h2>
            </div>
          </div>
        </div>     
    </div>
  </section>
  
  <section class="pricing bg-shape">
    <div class="container">
      <div class="row">
        <div class="col-7 col-responsive">
          <div>
            <div class="d-flex flex-row">
              <h4 class="w600 color-slogan">Misión</h4>
              <img src="{{asset('images/icono-mision.svg')}}" class="img-mision" alt="Imagen Misión">
            </div>
            <div>
              <p class="style-text w400">
                Lograr ser un referente en el ambiente de las telecomunicaciones, brindando soluciones tecnológicas a nuestros clientes, buscando ofrecer
                La mejor conectividad y calidad  en el servicio.
              </p>
            </div>
          </div>
          <div class="mt-5">
            <div class="d-flex flex-row">
              <h4 class="w600 color-slogan">Visión</h4>
              <img src="{{asset('images/icono-vision.svg')}}" class="img-mision" alt="Imagen Visión">
            </div>
            <div>
              <p class="style-text w400">
                Situarnos como una empresa líder en el ramo de las telecomunicaciones, con el compromiso de ofrecer productos y servicios con las más alta calidad,
                buscando siempre como objetivo principal, la satisfacción de todos nuestros clientes.
              </p>
            </div>
          </div>
        </div>
        <div class="col-1 d-none d-sm-block">
          <hr class="hr">
        </div>
        <div class="col-sm mt-valores">
          <div>
            <h4 class="w600 color-slogan">Valores</h4>
            <ul class="list-group mt-2">
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Servicio</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Profesionalismo</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Orientación al cliente</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Trabajo en equipo</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Mejora continua</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Objetividad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Buen humor</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Integridad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Lealtad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Excelencia</li>
            </ul>
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
        <h5 class="text-white text-center w400 style-text">¿Qué esperas? adquiérelo y disfruta de todos los beneficios</h5>
        <div class="col text-center p-3">
          <button type="button" class="btn btn-outline-secondary btn-border w400 style-text">¡Solicítalo ya!</button>
        </div>
      </div>
      <div class="col color-paquet p-3">
        <h3 class="text-white mb-3 text-center p-3 style-text w400">Disfruta de todo <span class="style-text w800">nuestros paquetes</span></h3>
        <h5 class="text-white text-center w400 style-text">Queremos ofrecerte solo lo mejor, seleccina, compra y disfruta</h5>
        <div class="col text-center p-3">
            <a href="{!! URL::to('planes')!!}" class="btn btn-outline-secondary btn-border w400 style-text">Ver paquetes</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        
        <div class="burbujas">
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
        </div>

      </div>
    </div>
    <div class="row" style="background-color: #c6e4ff; ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <!-- <div class="rayo">
            <img src="{{asset('images/Rayo.png')}}" alt="Imagen4" class="img-rayo">
          </div> -->
          <div class="section-heading section-heading__text">
            <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2>
          </div>
          <div class="ml-5 bg-light w-25 b-rounded mt-3 h-4" >
            <div class="mt-3 text-center">
          <button type="button" class="btn btn-light color-tarje style-text w900 btn-hover text-capitalize">Promoción</button>
          <button type="button" class="btn btn-light color-tarje style-text w900 text-capitalize text-capitalize">Prepago</button>
          <button type="button" class="btn btn-light color-tarje style-text w900 text-capitalize text-capitalize">Pago Anticipado</button>
          </div>
            <!-- <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2> -->
          </div>
        </div>
      </div>
      
      <hr class="hr-line mt-n2">
      
      <div class="d-flex justify-content-center">
        <div class="col-lg-3 col-md-6 p-5">
          <div class="pricing-table text-center feature_item font-color box-shad">
            <div class="title">
              <!-- <h3 class="texto-principal style-text w500">Básico</h3> -->
              <img src="{{asset('images/Paquetes-03.png')}}" alt="Imagen4" class="img-precio1">
            </div>

            <div class="price  d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <!-- <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico"> -->
                  <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                  <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                </div>
                <!-- <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div>  -->
            </div>

            <hr class="hr-basico">

            <div class="action-button">
              <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">A TAN SOLO:</button>
            </div>

            <div class="mt-7">
              <img src="{{asset('images/Paquetes-06.png')}}" alt="Imagen4" class="img-precio1 w-75">
              <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compatición de datos*</p>
            </div>

            <!-- <ul class="feature-list">
              <li class="style-text w500">1 Mb Subida</li>
              <li class="style-text w500">5 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
              <hr class="hr-basico">
            </ul> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-5">
          <div class="pricing-table text-center feature_item font-color box-shad">
            <div class="title">
              <!-- <h3 class="texto-principal style-text w500">Básico</h3> -->
              <img src="{{asset('images/Paquetes-03.png')}}" alt="Imagen4" class="img-precio1">
            </div>

            <div class="price  d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <!-- <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico"> -->
                  <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                  <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                </div>
                <!-- <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div>  -->
            </div>

            <hr class="hr-basico">

            <div class="action-button">
              <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">A TAN SOLO:</button>
            </div>

            <div class="mt-7">
              <img src="{{asset('images/Paquetes-06.png')}}" alt="Imagen4" class="img-precio1 w-75">
              <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compatición de datos*</p>
            </div>

            <!-- <ul class="feature-list">
              <li class="style-text w500">1 Mb Subida</li>
              <li class="style-text w500">5 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
              <hr class="hr-basico">
            </ul> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
          <div class="pricing-table featured text-center font-color box-shad">
            <div class="title">
              <h3 class="texto-principal style-text w500">Ideal</h3>
            </div>

            <div class="price color-ideal d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li class="style-text w500">A2 Mb Subida</li>
              <li class="style-text w500">10 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
            </ul>
            <hr class="hr-ideal">
            <div class="action-button">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
          <div class="pricing-table text-center feature_item font-color box-shad">
            <div class="title">
              <h3 class="texto-principal style-text w500">Plus</h3>
            </div>

            <div class="price color-plus d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li class="style-text w500">5 Mb Subida</li>
              <li class="style-text w500">15 Mb Bajada</li>
              <li class="style-text w500">Instalación GRATIS</li>
              <li class="resticciones style-text w200">* aplican restricciones</li>
            </ul>
            <hr class="hr-plus">
            <div class="action-button">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

      </div> 
    <!-- 
      <div class="col-lg-12">
        <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Básico</h3>
              </div>

              <div class="price color-basico d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                  </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">1 Mb Subida</li>
                <li class="style-text w500">5 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
                <hr class="hr-basico">
              </ul>
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceB style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table featured text-center font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Ideal</h3>
              </div>

              <div class="price color-ideal d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">A2 Mb Subida</li>
                <li class="style-text w500">10 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
              </ul>
              <hr class="hr-ideal">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal style-text w500">Plus</h3>
              </div>

              <div class="price color-plus d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li class="style-text w500">5 Mb Subida</li>
                <li class="style-text w500">15 Mb Bajada</li>
                <li class="style-text w500">Instalación GRATIS</li>
                <li class="resticciones style-text w200">* aplican restricciones</li>
              </ul>
              <hr class="hr-plus">
              <div class="action-button">
                <a href="" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
              </div>
            </div>
          </div>

        </div>
      </div>  
    -->

      <!-- <div class="row ps-5" style="justify-content: center;">
        <div class="w-auto">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Basico</h3>
            </div>

            <div class="price color-basico d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
            </div>

            <ul class="feature-list">
              <li>1 Mb Subida</li>
              <li>5 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
              <hr class="hr-basico">
            </ul>
            <div class="action-button">
              <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceB">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="w-auto">
          <div class="pricing-table featured text-center font-color">
            <div class="title">
              <h3 class="texto-principal">Ideal</h3>
            </div>

            <div class="price color-ideal d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li>A2 Mb Subida</li>
              <li>10 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <hr class="hr-ideal">
            <div class="action-button">
              <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceI">Adquirir</a>
            </div>
          </div>
        </div>

        <div class="w-auto">
          <div class="pricing-table text-center feature_item font-color">
            <div class="title">
              <h3 class="texto-principal">Plus</h3>
            </div>

            <div class="price color-plus d-flex flex-row">
              <div class="col-sm tarjeta-paquete">
                <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
              </div>
              <div class="col-sm mes-paquete">
                <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
              </div> 
            </div>

            <ul class="feature-list">
              <li>5 Mb Subida</li>
              <li>15 Mb Bajada</li>
              <li>Instalación GRATIS</li>
              <li class="resticciones">* aplican restricciones</li>
            </ul>
            <hr class="hr-plus">
            <div class="action-button">
              <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceP">Adquirir</a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  <section class="simple-cta mb-5">
    <div class="mt-4 ml-2 ml-0">
      <h2 class="text-white style-text Morganite-BoldItalic font137 font50 w900 m-5 text-uppercase col-4 col-responsive7">Recarga desde tu celular</h2>
    </div>
    <div class="ml-5 mt-l3">
      <button class="btn btn-contratar mt-4 w-20 w-29 text-center w-34" type="button"><span class="span-contratar w800 style-text">Contratar</span> </button>
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

@endsection