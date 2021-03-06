@extends('app.appadmin')
@section('style')
<link href="<?php echo URL::asset('css/home.css'); ?>" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
@section('content')

<div class="row">
  <div class="col-md-12 cont-tabla">
      <div class="portlet light ">
          <div class="portlet-title tabbable-line">
            <div class="caption caption-md">
              <h1 class="titulo-contenido">Publicaciones</h1>
            </div>
            <div class="cont-botonnuevo">
              <a class="btn btn-nuevo pull-right" href="{{url('admin/publicaciones/create')}}"><i class="glyphicon glyphicon-plus"></i> Nuevo</a>
            </div>
          </div>

          <div class="portlet-body">

              <div class="table-scrollable table-responsive">
                <br>
                  <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="titulo-tabla"> NOMBRE (ES)</th>
                            <th class="titulo-tabla"> NOMBRE (EN)</th>
                            <th class="titulo-tabla"> PRIVACIDAD</th>
                            <th class="titulo-tabla"> TIPO</th>
                            <th class="titulo-tabla"> ACCIONES </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($publications as $key)
                         <tr id="publi{{$key->id}}">
                             <td>{!! $key->name_es !!}</td>
                             <td>{!! $key->name_en !!}</td>
                             @if($key->privacity=='1')
                                <td>Privado</td>
                             @else
                                 <td>Público</td>
                             @endif
                             <td>{{$key->type}}</td>
                             <td>
                               <a href="{{url('admin/publicaciones/'.$key->id.'/edit')}}"><i class="fa fa-pencil ico-editar"></i></a>
                               <a href="#"><i class="fa fa-times ico-editar btn-eliminar" data-id="{{$key->id}}" aria-hidden="true" style="padding-left: 5px;"></i></a>
                             </td>
                         </tr>
                       @endforeach

                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('click', '.btn-eliminar', function(){
    var button = $(this);
    var val = $(button).attr('data-id');
    swal({
      title: "¿Desea desactivar este item?",
      text: "",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "SÍ",
      cancelButtonText: "CANCELAR",
      closeOnConfirm: true,
      closeOnCancel: true
    },
    function(isConfirm){
      if (isConfirm) {

        var data = {};
            data._token = $("meta[name='csrf-token']").attr('content');
            data.id = val;

        $.ajax({
            url: url + '/admin/publicaciones/deletepublication',
            data: data,
            type: 'POST',
            success: function(data) {
              if(data=='existe'){
                console.log('existe');
                swal({
                   title: "",
                   text: 'No se pudo eliminar. Existen artículos relacionados.',
                   html: true,
                   confirmButtonText: "CERRAR",
                   });
              }
              else {
                $('#publi'+val).remove();
                swal({
                   title: "",
                   text: 'No se pudo eliminar.',
                   html: true,
                   confirmButtonText: "CERRAR",
                   });
              }

            }
        });
      }
    });

  });
</script>
@endsection
