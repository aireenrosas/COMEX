<div class="row columnas-contenido">
  <div class="col-md-12 col-xs-12 cont-socios leftcero rightcero hidden-xs">
    <div class="col-md-1 hidden-sm"></div>
    <div class="col-md-10 col-xs-12 col-nopadding col-cajas">
      <!-- <div class="col-md-4 col-xs-4 col-nopadding display-flex"> -->
      <div class="col-md-4 col-xs-4 col-nopadding display-flex">
        <div class="inner-container first-inner-col">
          <a href="{{ url($ruta."/servicioabtc") }}">
            <img src="images/credit-card.png" class="img-responsive img-socios" alt=""/>
            <p class="text-socios24">{!!trans('contenido.tarjeta_abtc')!!}</p>
            <p class="parrafo-socios14">{!!trans('contenido.tarjeta_abtc_texto')!!}</p>
          </a>
        </div>
      </div>
      <!-- <div class="col-md-4 col-xs-4 col-nopadding middle-col-socios display-flex"> -->
      <div class="col-md-4 col-xs-4 col-nopadding middle-col-socios display-flex">
        <div class="inner-container">
          <a href="https://www.datasur.com/" target="_blank">
            <img src="images/bell.png" class="img-responsive img-socios" alt=""/>
            <p class="text-socios24">DATASUR</p>
            <p class="parrafo-socios14">{!!trans('contenido.datasur_texto')!!}</p>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 col-nopadding display-flex">
      <!-- <div class="col-md-4 col-xs-4 col-nopadding display-flex"> -->
        <div class="inner-container">
          <a href="https://www.comexperu.org.pe/comexresearch/index.html">
            <img src="images/search.png" class="img-responsive img-socios" alt=""/>
            <p class="text-socios24">COMEX <br> RESEARCH</p>
            <p class="parrafo-socios14">{!!trans('contenido.comex_research_texto')!!}</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-1 hidden-sm"></div>
  </div>
</div>
<div class="row hidden-xl hidden-lg hidden-md hidden-sm">
  <div class="columnas-contenido slide-container slider-loggedin">
    <div class="slider">
      <div class="cont-socios">
        <div class="inner-container {{$ruta}} loggin">
          <img src="images/credit-card.png" class="img-responsive img-socios" alt=""/>
          <p class="text-socios24">{!!trans('contenido.tarjeta_abtc')!!}</p>
          <p class="parrafo-socios14">{!!trans('contenido.tarjeta_abtc_texto')!!}</p>
          <p><a class="home-button" href="{{ url($ruta."/servicioabtc") }}" >{!!trans('contenido.mas')!!}</a></p>
        </div>
      </div>
      <div class="cont-socios">
        <div class="inner-container {{$ruta}} loggin">
          <img src="images/bell.png" class="img-responsive img-socios" alt=""/>
          <p class="text-socios24">DATASUR</p>
          <p class="parrafo-socios14">{!!trans('contenido.datasur_texto')!!}</p>
          <p><a class="home-button" href="https://plataforma.datasur.com/" target="_blank">{!!trans('contenido.mas')!!}</a></p>
        </div>
      </div>
      <div class="cont-socios">
        <div class="inner-container {{$ruta}} loggin">
          <img src="images/search.png" class="img-responsive img-socios" alt=""/>
          <p class="text-socios24">COMEXRESEARCH</p>
          <p class="parrafo-socios14">{!!trans('contenido.comex_research_texto')!!}</p>
          <p><a class="home-button" href="#">{!!trans('contenido.mas')!!}</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
