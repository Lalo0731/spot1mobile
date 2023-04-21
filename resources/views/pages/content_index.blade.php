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
          <h1 class="color-slogan col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responivo  --}}
          <h1 class="color-slogan col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w400 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-principal.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen1">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen1">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="5000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="color-slogan col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 color-slogan2 h4 hmd col-5 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan2 h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responsivo  --}}
          <h1 class="color-slogan col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 color-slogan2 h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan2 h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete1 w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete2 w400 style-text color-slogan2" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>
        
        <img src="{{asset('images/Banner-secundario.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen2">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon2.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen2">
        {{--  Responsivo  --}}
      </div>

      <div class="carousel-item" data-bs-interval="4000">
        <div class="position-absolute mt-14 pl-8">
          <h1 class="color-slogan text-white col-6 w900 style-text d-none d-sm-block pri-texto">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="color-slogan mt-4 text-white h4 hmd col-6 w400 style-text d-none d-sm-block cont-texto">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="color-slogan text-white h3 hmds w600 style-text style-text d-none d-sm-block spt-texto">¡SpotUno te ofrece solo lo mejor!</span>

          {{--  Responsivo  --}}
          <h1 class="color-slogan text-white col-10 w900 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block mt-4 text-center">Contrata y disfruta de los paquetes que tenemos para ti.</h1>
          <p class="mt-4 text-white h6 text-center col-10 w400 style-text d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">Contrata y navega con los diferentes paquetes de internet que tenemos para ti, disfruta de tus series y películas favoritas.</p>
          <span class="text-white h3 w600 style-text text-center d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block">¡SpotUno te ofrece solo lo mejor!</span>
          {{--  Responsivo  --}}

          <div class="d-flex flex-row mt-n2">
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w400 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
            </div>
            <div class="mt-5 p-3 ">
              <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w400 style-text" role="button" aria-pressed="true">Ver paquetes</a>
            </div>
          </div>
        </div>

        <img src="{{asset('images/Banner-terciario.jpg')}}" class="d-block w-100 d-none d-sm-block" alt="imagen3">
        {{--  Responsivo  --}}
        <img src="{{asset('images/Banner-respon3.jpg')}}" class="d-block w-100 d-xl-none d-lg-none d-xl-block d-md-none d-lg-block d-sm-none d-md-block" alt="imagen3">
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
            <div class="header-text mt-5 mb-3">
              <h3 class="Morganite-Book display-3">Conócenos</em></h3>
            </div>
            <div class="header-text mb-n3">
              <h2 class="Morganite-BoldItalic display-1 font-h4">La empresa de <em>telefonía móvil</em> más social de México</h2>
            </div>
          </div>
        </div>     
    </div>
  </section>
  
  <section class="pricing bg-shape">
    <div class="container">
      <div class="row">
        <div class="col-7">
          <div>
            <div class="d-flex flex-row">
              <h4>Misión</h4>
              <img src="{{asset('images/icono-mision.svg')}}" class="img-mision" alt="Imagen Misión">
            </div>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam reprehenderit laudantium debitis consequuntur qui similique enim eius error vel</p>
            </div>
          </div>
          <div class="mt-5">
            <div class="d-flex flex-row">
              <h4>Visión</h4>
              <img src="{{asset('images/icono-vision.svg')}}" class="img-mision" alt="Imagen Visión">
            </div>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, et exercitationem molestias ducimus obcaecati cum magni nesciunt provident dolor? Molestiae velit ad, illo tenetur doloremque sint laboriosam enim fugit incidunt.</p>
            </div>
          </div>
        </div>
        <div class="col-1 ">
          <hr class="hr">
        </div>
        <div class="col-sm">
          <div>
            <h4>Valores</h4>
            <ul class="list-group mt-2">
              <li class="p-1"><i class="fa-solid fa-arrow-right p-1"></i>Cras justo odio</li>
              <li class="p-1"><i class="fa-solid fa-arrow-right p-1"></i>Dapibus ac facilisis in</li>
              <li class="p-1"><i class="fa-solid fa-arrow-right p-1"></i>Morbi leo risus</li>
              <li class="p-1"><i class="fa-solid fa-arrow-right p-1"></i>Porta ac consectetur ac</li>
              <li class="p-1"><i class="fa-solid fa-arrow-right p-1"></i>Vestibulum at eros</li>
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
          <div class="rayo">
            <img src="{{asset('images/Rayo.png')}}" alt="Imagen4" class="img-rayo">
          </div>
          <div class="section-heading section-heading__text">
            <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2>
          </div>
        </div>
      </div>
      
      <!-- <div class="d-flex justify-content-center">
        <div class="col-lg-3 col-md-6 p-3">
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
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
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
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 p-3">
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
              <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
            </div>
          </div>
        </div>

      </div> -->

      <!-- <div class="col-lg-12">
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
      </div> -->

      <div class="row ps-5" style="justify-content: center;">
        <div class="w-auto">
        {{--  <div class="col-lg-4  col-md-6">  --}}
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
        {{--  <div class="col-lg-4  col-md-6">  --}}
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
        {{--  <div class="col-lg-4  col-md-6">  --}}
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
      </div>
    </div>
  </section>

  <section class="simple-cta mb-5">
    <div class="mt-4">
      <h2 class="text-white style-text w900 m-5">Recarga desde tu celular</h2>
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