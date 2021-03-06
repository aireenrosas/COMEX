@extends('app.app')
<?php
$ogdescription = 'ComexPerú es el gremio privado que agrupa a las principales empresas vinculadas al Comercio Exterior en el Perú.';
$ogimage = '';
$ogtitle = 'COMEX - Sociedad de Comercio Exterior del Perú - Inicio';
$ogurl = url('/');
?>
@section('style')
<!-- Aquí van las hojas de estilos que sean propias para nosotros.blade.php-->
<link href="<?php echo URL::asset('css/nosotros.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<!-- Aquí van los js propios para nosotros.blade-->
<script src="<?php echo URL::asset('js/listas.js'); ?>" type="text/javascript"></script>
@endsection

@section('content')
<div class="container-comex">
  <div class="nosotroscont">
      <div class="col-md-12 col-xs-12 leftcero rightcero">
        <div class="col-md-2 col-sm-2 hidden-xs"></div>
        <div class="col-md-8 col-sm-8 col-xs-12 leftcero rightcero ancho intro">
          <div class="texto30">
            <strong>ComexPerú</strong> {!!trans('contenido.nosotros_titulo')!!}<br>
        {!!trans('contenido.nosotros_titulo_')!!}
          </div>
          <div class="col-md-12 col-xs-12 section-nosotros leftcero rightcero">
            <div class="col-md-3 col-xs-12 anchonosotros nosotros">
              <h1 class="titulo25">{!!trans('contenido.nosotros')!!}</h1>
            </div>
            <div class="col-md-1 hidden-xs espacio"></div>
            <div class="col-md-8 col-xs-12 det-nosotros rightcero ancho2">
              <p class="top15">ComexPerú <strong>{!!trans('contenido.nosotros_titulo1')!!}</strong></p>
			    <div class="lista"><i class="fa fa-circle-thin ico-circle" aria-hidden="true"></i>{!!trans('contenido.nosotros_li1')!!}</div>
                <div class="lista"><i class="fa fa-circle-thin ico-circle" aria-hidden="true"></i>{!!trans('contenido.nosotros_li2')!!}</div>
                <div class="lista"><i class="fa fa-circle-thin ico-circle" aria-hidden="true"></i>{!!trans('contenido.nosotros_li3')!!}</div><br>
			  <p class="top15">{!!trans('contenido.nosotros_cconducta')!!}</p>
			  <p> <strong><a style="color:#ca0538" target="_blank" href="{{url('documentos/codigo_conducta.pdf')}}">{!!trans('contenido.normas_conducta')!!}</a></strong></p>
			  <p> <strong><a style="color:#ca0538" target="_blank" href="{{url('documentos/Politica_de_Seguridad_y_Salud_en_el_Trabajo.pdf')}}">{!!trans('contenido.politica_seguridad_salud')!!}</a></strong></p>
			  <p> <strong><a style="color:#ca0538" target="_blank" href="{{url('documentos/Politica_compliance.pdf')}}">{!!trans('contenido.politica_compliance')!!}</a></strong></p>
			  <p> <strong><a style="color:#ca0538" target="_blank" href="{{url('documentos/Politica_Anti_Corrupcion.pdf')}}">{!!trans('contenido.politica_anti_corrupcion')!!}</a></strong></p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-2 hidden-xs"></div>
      <div class="cont-bannerserv" style="padding: 0px">
        <div class="imagenservicios">
          <img src="{!!url('/images/banner_equipo.jpg')!!}" class="img-responsive img-serv" alt=""/>
        </div>
      </div>
      <!-- <div class="col-md-12 col-xs-12 container-rojo">
        <div class="col-md-2 col-xs-4">
          <p class="porcentaje">85%</p>
        </div>
        <div class="col-md-1 hidden-xs"></div>
        <div class="col-md-9 col-xs-8">
          <p class="texto-blanco30">{!!trans('contenido.nosotros_porcentajetexto')!!}</p>
        </div>
      </div> -->

      <!-- <div class="col-md-12 col-xs-12 cont-red-85">
        <div class="cont-elements">
          <div class="cont-85-number">
            <p class="porcentaje">85%</p>
          </div>
          <div class="cont-85-paragraph">
            <p class="texto-blanco30">{!!trans('contenido.nosotros_porcentajetexto')!!}</p>
          </div>
        </div>
      </div> -->
      <div class="col-md-2 col-xs-2"></div>
    </div>
  </div>
  {{-- <div class="col-md-12 col-xs-12  cont-red-85">
    <div class="cont-elements">
      <div class="cont-85-number">
        <p class="porcentaje">85%</p>
      </div>
      <div class="cont-85-paragraph">
        <p class="texto-blanco30">{!!trans('contenido.nosotros_porcentajetexto')!!}</p>
      </div>
    </div>
  </div> --}}

  <div class="nosotroscont">
    <div class="col-md-2 col-sm-2 hidden-xs"></div>
    <div class="col-md-8 col-sm-8 col-xs-12 leftcero rightcero ancho">
        <div class="col-md-12 col-xs-12 section-directorio leftcero rightcero">
          <div class="col-md-3 col-xs-12 nosotros anchonosotros">
            <h3 class="titulo25">{!!trans('contenido.nosotros_directorio')!!}</h3>
          </div>
          <div class="col-md-1 hidden-xs espacio"></div>
          <div class="col-md-8 col-xs-12 det-directorio ancho">
            <div class="direc-parte1">
                <div class="col-md-12 col-xs-12 direc-titulo">
                  <p class="titulo14">{!!trans('contenido.nosotros_directorio_titulo1')!!}</p>
                </div>

                <div class="">
                  <div class="col-md-12 col-xs-12 leftcero rightcero">
                    <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                      <img src="{{url('images/nosotros/presidente1.jpg')}}" class="foto-directorio" alt="">
                      <!--<div class="foto-directorio"></div>-->
                    </div>
                    <div class="col-md-10 col-xs-10 direc-pers">
                      <div class="col-md-5 col-xs-12">
                        <span class="nombre-directorio">Julia Torreblanca Marmanillo </span>
                      </div>
                      <div class="col-md-5 col-xs-12">
                        <span class="cargo"> {!!trans('contenido.nosotros_equipo_presidente')!!}</span>
                      </div>
                      <!-- <span class="nombre-directorio">Jose Luis Noriega Cooper </span><span class="cargo"> {!!trans('contenido.nosotros_equipo_presidente')!!}</span> -->
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="col-md-12 col-xs-12 leftcero rightcero">
                    <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                      <img src="{{url('images/nosotros/vice1.jpg')}}" class="foto-directorio" alt="">
                      <!--<div class="foto-directorio"></div>-->
                    </div>
                    <div class="col-md-10 col-xs-10 direc-pers">
                      <div class="col-md-5 col-xs-12">
                        <span class="nombre-directorio">Mariela García Figari de Fabbri </span>
                      </div>
                      <div class="col-md-5 col-xs-12">
                        <span class="cargo"> {!!trans('contenido.nosotros_equipo_vicepresidente1')!!}</span>
                      </div>
                      <!-- <span class="nombre-directorio">Alfonso Bustamante Canny </span><span class="cargo"> {!!trans('contenido.nosotros_equipo_vicepresidente1')!!}</span> -->
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="col-md-12 col-xs-12 leftcero rightcero">
                    <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                      <img src="{{url('images/nosotros/vice2.jpg')}}" class="foto-directorio" alt="">
                      <!--<div class="foto-directorio"></div>-->
                    </div>
                    <div class="col-md-10 col-xs-10 direc-pers-ult">
                      <div class="col-md-5 col-xs-12">
                        <span class="nombre-directorio">Alonso Rey Bustamante </span>
                      </div>
                      <div class="col-md-5 col-xs-12">
                        <span class="cargo"> {!!trans('contenido.nosotros_equipo_vicepresidente2')!!}</span>
                      </div>
                      <!-- <span class="nombre-directorio">Alonso Rey Bustamante </span><span class="cargo"> {!!trans('contenido.nosotros_equipo_vicepresidente2')!!}</span> -->
                    </div>
                  </div>
                </div>

              </div>

            <div class="direc-parte2">
                <div class="col-md-12 col-xs-12 contentdirectorio">
                    <ul class="list-directorio" id="list-directorio">
                      <li>
                        <div class="col-md-8 col-xs-7 bor-bottom2">
                          <span class="titulo14">{!!trans('contenido.nosotros_act_exportadora')!!}</span>
                        </div>
                        <div class="col-md-4 col-xs-5 contenidodirectorio text-right bor-bottom2">
                          <span class="btn-vermas">{!!trans('contenido.nosotros_vermas')!!}</span>
                          <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                        </div>
                        <ul class="list-subdirectorio" style="display: none">
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_exp_sec1')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Agustín de Aliaga Fernandini</li>
                                <hr>
                                <li>Diego José Ortega Meneses</li>
                                <hr>
                                <li>Guillermo Ferreyros Cannock </li>
                                <hr>
                                <li>Jimena Sologuren Arias</li>
                                <hr>
                                <li>Juan Igor Salazar Zanelli</li>
                                <hr>
                                <li>Julia Torreblanca Marmanillo</li>
                                <hr>
                                <li>Magaly Bardales Rojas</li>
                                <hr>
                                <li>Marilú Wiese Moreyra</li>
								<hr>
								<li>Oscar González Rocha</li>
                              </div>
                            </ul>
                          </li>
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_exp_sec2')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Enrique Gubbins Bovet</li>
                                <hr>
                                <li>Janine Belmont</li>
                                <hr>
                                <li>Raul Musso Vento</li>
                              </div>
                            </ul>
                          </li>
                          
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_exp_sec4')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Fernando Romero Belismelis</li>
                            </div>
                            </ul>
                          </li>
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_exp_sec3')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Alfonso Bustamante Canny </li>
                                <hr>
                                <li>Augusto Baertl Montori</li>
                                <hr>
                                <li>José Luis Noriega Cooper</li>
                                <hr>
                                <li>Miguel Nicolini de la Puente</li>
                            </div>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <!--REPETICION DE LI-->
                      <li>
                        <div class="col-md-8 col-xs-7 bor-bottom2 bor-botton-int">
                          <span class="titulo14">{!!trans('contenido.nosotros_act_importadora')!!}</span>
                        </div>
                        <div class="col-md-4 col-xs-5 contenidodirectorio text-right bor-bottom2 bor-botton-int">
                          <span class="btn-vermas">{!!trans('contenido.nosotros_vermas')!!}</span>
                          <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                        </div>
                        <ul class="list-subdirectorio" style="display: none">
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_impo_sec1')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                              <li>Ignacio Pro Villa</li>
                              <hr>
                              <li>Juan Carlos Vallejo Blanco</li>
                              <hr>
                              <li>Juan Fernando Correa Malachowski</li>
							  <hr>
                              <li>Sergio Andrés Rincón Rincón</li>
                            </div>
                            </ul>
                          </li>
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_impo_sec2')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">

                                <li>Andrés von Wedemeyer Knigge</li>
                                <hr>
                                <!-- <li>Darío Lareu</li> -->
                              </div>
                            </ul>
                          </li>
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_impo_sec3')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Carlos Chiappori Samengo</li>
                                <hr>
                                <li>Luis Felipe Carrillo Campodónico</li>
                                <hr>
                                <li>Mariela García de Fabbri</li>
                            </div>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div class="col-md-8 col-xs-7 bor-bottom2 bor-bottom2-resp bor-botton-int">
                          <span class="titulo14">{!!trans('contenido.nosotros_act_servicios')!!}</span>
                        </div>
                        <div class="col-md-4 col-xs-5 contenidodirectorio text-right bor-bottom2 bor-bottom2-resp bor-botton-int">
                          <span class="btn-vermas">{!!trans('contenido.nosotros_vermas')!!}</span>
                          <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                        </div>
                        <ul class="list-subdirectorio" style="display: none">
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_serv_sec1')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Fernando Zavala Lombardi</li>
                              </div>
                            </ul>
                          </li>
                          <li>
                            <div class="col-md-9 col-xs-9 bor-bottom">
                              <span class="texto-rojo14">{!!trans('contenido.nosotros_act_serv_sec2')!!}</span>
                            </div>
                            <div class="col-md-3 col-xs-3 contenidosubdirectorio text-right bor-bottom">
                              <i class="fa fa-plus fa-lg ico-vermas" aria-hidden="true"></i>
                            </div>
                            <ul class="list-subsubdirectorio" style="display: none">
                              <div class="col-md-offset-6 col-xs-12">
                                <li>Adriana Azopardo Aular</li>
                                <hr>
								<li>Alfonso García Miro Peschiera</li>
                                <hr>
                                <li>Alonso Rey Bustamante</li>
                                <hr>
                                <li>Cayetana Aljovín Gazzani</li>
                                <hr>
                                <li>Christian Northcote Sandoval</li>
                                <hr>
                                <li>Ernesto Raffo Paine</li>
                                <hr>
                                <li>Gianmarco Tagliarino Rondinelli</li>
                                <hr>
                                <li>Juan Stoessel Florez</li>
                                <hr>
                                <li>Juan Francisco Raffo Novelli </li>
                                <hr>
                                <li>Manuel Van Oordt Fernandez</li>
                                <hr>
                                <li>Oscar Caipo Ricci</li>
                                <hr>
                                <li>Oscar Humberto Chávez López</li>
                                <hr>
                                <li>Pedro Cortez Rojas</li>
                              </div>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <!--FINREPETICION DE LI-->
                    </ul>
                </div><!--END COL DIV DIRECTORIO-->
              </div><!-- END DIRECTORIO PARTE DOS-->
              
          </div>
        </div>


        <div class="col-md-12 col-xs-12 section-equipo leftcero rightcero">
          <div class="col-md-3 col-xs-12 nosotros anchonosotros">
            <h3 class="titulo25">{!!trans('contenido.nosotros_equipo')!!}</h3>
          </div>
          <div class="col-md-1 hidden-xs espacio"></div>
          <div class="col-md-8 col-xs-12 det-directorio ancho">
            <div class="">
              <div class="col-md-12 col-xs-12 direc-titulo2 ancho">
                <!-- <p class="titulo14">{!!trans('contenido.nosotros_directorio_titulo1')!!}</p> -->
              </div>
              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <!--<div class="foto-directorio"></div>-->
                    <img src="{{url('images/nosotros/nosotros1.jpg')}}" class="foto-directorio" alt="">
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Jessica Luna Cárdenas</span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_1')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Jessica Luna </span><span class="cargo">{!!trans('contenido.nosotros_equipo_1')!!}</span> -->
                  </div>
                </div>
              </div>
              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros2.jpg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Jaime Dupuy </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_2')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Jaime Dupuy </span><span class="cargo">{!!trans('contenido.nosotros_equipo_2')!!}</span> -->
                  </div>
                </div>
              </div>
              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros5.jpg')}}" class="foto-directorio" alt="">
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Rafael Zacnich </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_5')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Rafael Zacnich </span><span class="cargo">{!!trans('contenido.nosotros_equipo_5')!!}</span> -->
                  </div>
                </div>
              </div>
			    <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros9.jpg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Luciano Paredes </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_9')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Luciano Paredes </span><span class="cargo">{!!trans('contenido.nosotros_equipo_9')!!}</span> -->
                  </div>
                </div>
              </div>

               <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros8.jpeg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Luis Pareja</span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_10')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Christopher Orjeda </span><span class="cargo">{!!trans('contenido.nosotros_equipo_7')!!}</span> -->
                  </div>
                </div>
              </div>

              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros8.jpg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Xavier Montes </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_8')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Xavier Montes </span><span class="cargo">{!!trans('contenido.nosotros_equipo_8')!!}</span> -->
                  </div>
                </div>
              </div>

              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros11.jpeg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Brenda Sparrow</span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_11')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Christopher Orjeda </span><span class="cargo">{!!trans('contenido.nosotros_equipo_7')!!}</span> -->
                  </div>
                </div>
              </div>
             

              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros6.jpg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Eder Novaro </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_6')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Eder Novaro </span><span class="cargo">{!!trans('contenido.nosotros_equipo_6')!!}</span> -->
                  </div>
                </div>
              </div>
              <div class="">
                <div class="col-md-12 col-xs-12 leftcero rightcero">
                  <div class="col-md-2 col-xs-2 cont-fotodirec leftcero">
                    <img src="{{url('images/nosotros/nosotros7.jpg')}}" class="foto-directorio" alt="">
                    <!--<div class="foto-directorio"></div>-->
                  </div>
                  <div class="col-md-10 col-xs-10 direc-pers-ult">
                    <div class="col-md-5 col-xs-12">
                      <span class="nombre-directorio">Christopher Orjeda </span>
                    </div>
                    <div class="col-md-5 col-xs-12">
                      <span class="cargo">{!!trans('contenido.nosotros_equipo_7')!!}</span>
                    </div>
                    <!-- <span class="nombre-directorio">Christopher Orjeda </span><span class="cargo">{!!trans('contenido.nosotros_equipo_7')!!}</span> -->
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    <div class="col-md-2 col-sm-2 hidden-xs"></div>
  </div>
</div>
  <script type="text/javascript">
    var vermas= "{!!trans('contenido.nosotros_vermas')!!}";
    var vermenos= "{!!trans('contenido.nosotros_vermenos')!!}";
  </script>
@endsection
