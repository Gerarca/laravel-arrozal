@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'noticia'
])
@section('title')
    {{!isset($noticia->id) ? 'Crear Noticia' : 'Editar Noticia'}}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                      action="{{$noticia->id ? route('noticias.update', $noticia->id): route('noticias.store') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($noticia->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! $noticia->id ? 'Editar Noticia <b>'.$noticia->name.'</b>' : 'Añadir
                                Noticia' !!}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <label for="titulo">
                                    Titulo
                                </label>
                                <input class="form-control" id="titulo" name="titulo" type="text"
                                       value="{{$noticia->titulo?$noticia->titulo:old('titulo')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="enlace">
                                    Enlace
                                </label>
                                <input class="form-control" id="enlace" name="enlace" type="text"
                                       value="{{$noticia->enlace?$noticia->enlace:old('enlace')}}" url="true"/>
                            </div>

                            <div class="form-group has-label">
                                <label for="imagen">
                                    Imagen *
                                    <small>(Recomendamos 1920px X 1080px)</small>
                                </label>

                                <div class="form-group">

                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$noticia->imagen ? url('uploads/'.$noticia->imagen):url('assets_template/img/image_placeholder.jpg')}}"
                                                 alt="{{$noticia->titulo?$noticia->titulo:old('titulo')}}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Seleccionar Imagen</span>
                                            <span class="fileinput-exists">Cambiar</span>
                                                <input type="file" name="imagen" id="imagen" {{ $noticia->id ? '' : 'required="true"' }} accept="image/*"/></span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> Quitar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category form-category">* Campos requeridos</div><br>
                        </div>
                        <div class="card-footer text-right mt-5">
                            <button type="submit"
                                    class="btn btn-primary">{{$noticia->exists ? 'Guardar Noticia' : 'Crear nueva Noticia'}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('especifico')
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script>
        function setFormValidation(id) {
            $(id).validate({
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                    $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
                },
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
                },
                errorPlacement: function (error, element) {
                    $(element).closest('.form-group').append(error);
                },
            });
        }

        $(document).ready(function () {
            demo.initDateTimePicker();
            setFormValidation('#RegisterValidation');
            setFormValidation('#TypeValidation');
            setFormValidation('#LoginValidation');
            setFormValidation('#RangeValidation');


            @if($errors->any())
            @foreach ($errors->all() as $error)
            $.notify({
                // options
                message: '{{$error}}'
            }, {
                // settings
                type: 'danger'
            });
            @endforeach
          @endif
          @if(session()->has('mensaje'))
            $.notify({
                // options
                message: '{{ session()->get('mensaje') }}'
            }, {
                // settings
                type: 'success'
            });

            @endif

        });
    </script>

@endsection
