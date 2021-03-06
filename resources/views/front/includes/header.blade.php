<div class="header container-fluid col-nopadding">
  <div class="row">
    <div class="col-md-12 col-xs-12 col-noppading">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <div class="navbar-left">
            <button type="button" id="menu-toggle" class="navbar-toggle navbar-left btn-menu toggle" title="menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="menu-label">{!!trans('contenido.menu')!!}</span>
              <span class="icon-bar bar-one"></span>
              <span class="icon-bar bar-two"></span>
              <span class="icon-bar bar-three"></span>
            </button>
            <div class="search-box">
              <div class="input-group-btn">
                <div class="input-group">
                  <input type="text" class="form-control home-input-search" placeholder="{!!trans('contenido.buscar_aqui')!!}" name="busqueda" id="input_busqueda">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-lupa-cont realizar-busqueda" type="button"><img src="{{url('images/icons/lupa.png')}}" alt="Lupa Icono"></button>
                  </span>
                </div>
              </div>
            </div>
          </div>


          <div class="navbar-right">
            <div class="form-login-cont hidden-xs">
            @if (Auth::guest())
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
                    <span data-toggle="" data-parent="#menu-group-8" href="#sub-item-12" class="menu-login" id="titulo">
                      {!!trans('contenido.entrar')!!}
                      <img src="{{url('images/usuario.png')}}" alt="Login Icono" class="img-login">
                    </span>
                    <ul class="collapse formulario list-unstyled dropdown-menu" id="sub-item-12">
                        <li class="">
                          <?php $var_login = '';?>
                          @if(\Session::has('login'))
                            <?php $var_login = 'has-error';?>
                          @endif

                          <div class="margen-input1 {{ $errors->has('login') ? 'has-error' : '' }} {{$var_login}}">
                            @if(\Session::has('login'))
                              <p style="font-weight:bold; color:#ca0538;">{!!trans('contenido.please_login')!!}</p>
                            @endif

                            <input type="text" id="login" name="login" value="{{ old('login') }}" class="login-input" placeholder="{!!trans('contenido.usuario')!!}">
                            @if ($errors->has('login') || $var_login!="")
                                <span class="help-block">
                                    <strong>{{ $errors->first('login') }}</strong>
                                </span>
                                <script  type="text/javascript">
                                $(document).ready(function() {
                                function abrirlogin(){
                                  var error= $('.login-input').parent().hasClass('has-error');
                                  var error_pass= $('.pass-input').parent().hasClass('has-error');
                                  if(error==true || error_pass==true)
                                  {
                                      $('.menu-login').trigger('click');
                                      $('.form-login-responsive').addClass('open');

                                  }
                                }
                                abrirlogin();
                                  });
                                </script>
                            @endif
                          </div>
                          <div class="margen-input3 {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="pass-input" id="password" name="password" placeholder="{!!trans('contenido.contra')!!}">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>

                            @endif
                          </div>
                          <div class="margen-input2 col-md-12">
                              <div class="col-md-12">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {!!trans('contenido.remember_me')!!}
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="cont-preguntar">
                            {{-- <a class="text-login" href="#" style="padding-right: 39px;">Olvid?? mi Clave</a>
                            <a class="text-login" href="#">Olvid?? mi Email</a> --}}
                            <div class="btn-ingresar-container">
                              <button type="submit" class="btn-ingresar">{!!trans('contenido.entrar')!!}</button>
                            </div>
                          </div>
                        </li>
                    </ul>
              </form>
            @else
              <div class="form-horizontal form-horizontal-admin">
                <span data-toggle="" data-parent="#menu-group-8" href="#sub-item-12" class="menu-login" id="titulo">
                  {!!trans('contenido.bienvenido')!!}, {{Auth::user()->name}}
                  <img src="{{url('images/usuario.png')}}" alt="Login Icono" class="img-login">
                </span>
                <ul class="collapse formulario list-unstyled dropdown-menu" id="sub-item-12">
                  @if(Auth::user()->rol_id==6)
                  <li class="btn-salir-container">
                    <a class="btn-salir" title="Panel control" href="{{ url('/admin/articulos') }}">
                      {!!trans('contenido.panel')!!}
                    </a>
                  </li>
                  @endif
                  <li class="btn-salir-container">
                    <a class="btn-salir" title="Cerrar Sesi??n" href="{{ url('/salir') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {!!trans('contenido.salir')!!}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            @endif
            </div>
            <div class="logo-container">
              <a class="link-logo" href="{{ url($ruta."/") }}"><img src="{!!url('../images/logo-nuevo.svg')!!}" alt="Comex Logo" class="img-responsive comex-logo-color"></a>
            </div>

          </div>
          {{-- <div class="col-md-2 col-sm-2 hidden-xs"></div> --}}
        </div>
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="sidebar-wrapper {{ $errors->has('login') ? 'display-block' : '' }}">
          <div class="sidebar-nav nav">
            <div class="contenido-menu">
              <!-- <div class="logo-container">
                <a class="link-logo" href="{{ url($ruta."/") }}"><img src="{!!url('/images/logo-nuevo.svg')!!}" alt="Comex Logo" class="img-responsive comex-logo-color"></a>
              </div> -->
              <ul class="nav navbar-nav navbar-links">
                <li><a class="lista-menu-links" href="{{ url($ruta."/nosotros") }}">{!!trans('contenido.nosotros')!!}</a></li>
                <li><a class="lista-menu-links" href="{{ url($ruta."/servicios") }}">{!!trans('contenido.servicios')!!}</a></li>
                <li><a class="lista-menu-links" href="{{ url($ruta."/articulos") }}">{!!trans('contenido.articulos')!!}</a></li>
                <li><a class="lista-menu-links" href="{{ url($ruta."/eventos") }}">{!!trans('contenido.eventos')!!}</a></li>
                <li><a class="lista-menu-links" href="{{ url($ruta."/foro") }}">{!!trans('contenido.presentaciones')!!}</a></li>
                <li><a class="lista-menu-links" href="https://www.comexperu.org.pe/pago30dias/">PAGO A 30 D??AS</a></li>
                <li><a id="btnContacto" data-toggle="modal" data-target="#ModalContacto" class="lista-menu-links menu-penultimo" href="#">{!!trans('contenido.contacto')!!}</a></li>
                <li><a class="lista-menu-links menu-ultimo" href="https://semanariocomexperu.wordpress.com/" target="_blank">{!!trans('contenido.blog')!!}</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-login">
                <!-- input buscador -->
                <li>
                      <div class="search-box form-menu-responsive">
                        <div class="input-group-btn">
                          <div class="input-group">
                            <input type="text" class="form-control home-input-search" placeholder="{!!trans('contenido.buscar_aqui')!!}" name="busqueda" id="input_busqueda_resp">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary btn-lupa-cont realizar-busqueda" type="button"><img src="{{url('images/icons/lupa.png')}}" alt="Lupa Icono"></button>
                            </span>
                          </div>
                        </div>
                      </div>
                </li>
                <!-- input suscripcion-->
                <li>
                  <div class="search-box form-menu-responsive">
                    <form role="form form-horizontal" method="POST" action="{{ route('subscription') }}">
                      {{ csrf_field() }}
                      <div class="input-group-btn">
                        <div class="input-group">
                          <input type="text" class="form-control home-input-search" placeholder="{!!trans('contenido.boletin_mail')!!}" name="email" required>
                          <span class="input-group-btn">
                            <button class="btn btn-secondary btn-lupa-cont" type="submit"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                          </span>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
              @if (Auth::guest())
              <ul class="nav navbar-nav navbar-login">
                <li class="link-login">
                  <a href="#collapseExample" type="button" id="login-toggle" class="form-horizontal-responsive" data-toggle="dropdown">
                    <span class="menu-login" id="titulo">
                      <img src="{!!url('/images/usuario-white.png')!!}" alt="Login Icono" class="img-login">
                      LOGIN
                    </span>
                  </a>
                </li>
              </ul>
              @endif
              @if (Auth::check())
              <ul class="nav navbar-nav navbar-links-socios">
                <li class="link-socios"><a href="{{url($ruta."/socios")}}" class="btn-socios">{!!trans('contenido.socios')!!} <i class="fa fa-plus hidden-xs" aria-hidden="true"></i></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-login">
                @if(Auth::user()->rol_id==6)
                <li class="link-panelcontrol">
                  <a class="btn-panelcontrol btn-salir form-horizontal-responsive" title="Panel control" href="{{ url('/admin/articulos') }}">
                    {!!trans('contenido.panel')!!}
                  </a>
                </li>
                @endif
                <li class="link-logout">
                  <a class="btn-salir form-horizontal-responsive" title="Cerrar Sesi??n" href="{{ url('/salir') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="menu-login" id="titulo">
                      <img src="{!!url('/images/icons/combined-shape.png')!!}" alt="Logout Icono" class="img-login">
                    {!!trans('contenido.salir')!!}
                    </span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                      {{ csrf_field() }}
                  </form>
                </li>
              </ul>
              @endif
              <ul class="nav navbar-nav navbar-languages">
                <li>
                  <p class="navbar-btn"><a class="btn-esp lang-selection active" data-lang="es">ES</a></p>
                </li>
                <li>
                  <p class="navbar-btn"><a class="btn-eng lang-selection" data-lang="en">EN</a></p>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-socialmedia">
                <li>
                  <p class="navbar-btn"><a class="btn-facebook" href="https://www.facebook.com/comexperu" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></p>
                </li>
                <li>
                  <p class="navbar-btn"><a class="btn-youtube" href="https://www.youtube.com/user/comexperutv" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></p>
                </li>
                <li>
                  <p class="navbar-btn"><a class="btn-facebook" href="https://www.linkedin.com/company/comexper%C3%BA" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></p>
                </li>
                <li>
                  <p class="navbar-btn"><a class="btn-facebook" href="https://www.instagram.com/comexperu/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
                </li>
                <li>
                  <p class="navbar-btn"><a class="btn-facebook" href="https://twitter.com/comexperu" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                </li>
                <li class="btn-linkedin-cont">
                  <p class="navbar-btn"><a class="btn-flickr" href="https://www.flickr.com/photos/comexperu/" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></p>
                </li>
              </ul>
            </div>
            @if (Auth::guest())
            <div class="formulario-container-responsive">
              <form class="hidden-sm hidden-lg hidden-md form-login-responsive" role="form" method="POST" action="{{ route('login') }}" id="collapseExample">
                {{ csrf_field() }}
                <ul class="collapse formulario list-unstyled dropdown-menu" id="sub-item-12">
                  <span class="menu-login menu-login-responsive" id="titulo">
                    <img src="{!!url('/images/usuario-white.png')!!}" alt="Login Icono" class="img-login">
                    LOGIN
                  </span>
                    <li class="">

                      <div class="margen-input1 {{ $errors->has('login') ? 'has-error' : '' }} {{$var_login}}">
                        @if(\Session::has('login'))
                          <p style="font-weight:bold; color:#ca0538;">{!!trans('contenido.please_login')!!}</p>
                        @endif
                        <input type="text" id="login" name="login" class="input-login-responsive" value="{{ old('login') }}" placeholder="USUARIO">

                        @if ($errors->has('login'))
                            <span class="help-block">
                                <strong>{{ $errors->first('login') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="margen-input1 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="" id="password" name="password" placeholder="CONTRASE??A">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>

                        @endif
                      </div>
                      <div class="margen-input1 col-md-12">
                          <div class="col-md-12">
                              <div class="checkbox checkbox-responsive">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {!!trans('contenido.remember_me')!!}
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="cont-preguntar">
                        {{-- <a class="text-login" href="#" style="padding-right: 39px;">Olvid?? mi Clave</a>
                        <a class="text-login" href="#">Olvid?? mi Email</a> --}}
                        <div class="btn-ingresar-container">
                          <button type="submit" class="btn-ingresar">{!!trans('contenido.entrar')!!}</button>
                        </div>
                        {{-- <p class="login-texto">* Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p> --}}
                      </div>
                    </li>
                </ul>
              </form>
            </div>
          @endif
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<script>
  $(document).on('click', '.realizar-busqueda', function(){
    var str = "{!!trans('contenido.ningun')!!}";
    console.log('esperando---dasdas');
    var busq=$('#input_busqueda').val();
    var ruta = '{{$ruta}}';
    var strruta ='';
    if(ruta=='en'){
      strruta = '/en';
    }
    if(busq !=""){
      location.href = url + strruta+'/busquedageneral?busqueda=' + $('#input_busqueda').val();
    }else{
      $('#input_busqueda').attr('placeholder',str);
    }
  });

  $('#input_busqueda').keypress(function(e){
        if(e.which == 13){
            $('.realizar-busqueda').click();
        }
    });
</script>
<script>
  $(document).on('click', '.realizar-busqueda', function(){
    var str = "{!!trans('contenido.ningun')!!}";

    var busq=$('#input_busqueda_resp').val();
    var ruta = '{{$ruta}}';

    var strruta ='';
    if(ruta=='en'){
      strruta = '/en';
    }
    if(busq !=""){
      location.href = url + strruta+'/busquedageneral?busqueda=' + $('#input_busqueda_resp').val();
    }else{
      $('#input_busqueda_resp').attr('placeholder',str);
    }

  });

  $('#input_busqueda_resp').keypress(function(e){
        if(e.which == 13){
            $('.realizar-busqueda').click();
        }
    });
</script>
@if($ruta=='en')
  <script>
    $('.lang-selection').removeClass('active');
    $('.btn-eng').addClass('active');
  </script>
@else
  <script>
    $('.lang-selection').removeClass('active');
    $('.btn-esp').addClass('active');
  </script>
@endif
