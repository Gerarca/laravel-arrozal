@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'banner'
])
@section('title')
    {{!isset($banner->id) ? trans_choice('sentences.banner-agregar', 1) : trans_choice('sentences.edit-banner', 1) }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                      action="{{$banner->id ? route('banner.update', $banner->id): route('banner.store') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($banner->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! $banner->id ? trans_choice('sentences.edit-banner', 1) .'<b>'.$banner->name.'</b>' : trans_choice('sentences.banner-agregar', 1) !!}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <label for="titulo">
                                    {{trans_choice('sentences.titulo', 1)}}
                                </label>
                                <input class="form-control" id="titulo" name="titulo" type="text"
                                       value="{{$banner->titulo?$banner->titulo:old('titulo')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="subtitulo">
                                    {{trans_choice('sentences.subtitulo', 1)}}
                                </label>
                                <input class="form-control" id="subtitulo" name="subtitulo" type="text"
                                       value="{{$banner->subtitulo?$banner->subtitulo:old('subtitulo')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="enlace">
                                    {{trans_choice('sentences.enlace', 1)}}
                                </label>
                                <input class="form-control" id="enlace" name="enlace" type="text"
                                       value="{{$banner->enlace?$banner->enlace:old('enlace')}}" url="true"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="boton">
                                    {{trans_choice('sentences.texto-boton', 1)}}
                                </label>
                                <input class="form-control" id="boton" name="boton" type="text"
                                       value="{{$banner->boton?$banner->boton:old('boton')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="imagen">
                                    {{trans_choice('sentences.imagen', 1)}} *
                                    <small>({{trans_choice('sentences.recomendamos', 1)}} 1920px X 1080px)</small>
                                </label>

                                <div class="form-group">

                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$banner->imagen ? url('uploads/'.$banner->imagen):url('assets_template/img/image_placeholder.jpg')}}"
                                                 alt="{{$banner->titulo?$banner->titulo:old('titulo')}}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">{{trans_choice('sentences.seleccionar-imagen', 1)}}</span>
                                            <span class="fileinput-exists">{{trans_choice('sentences.cambiar', 1)}}</span>
                                                <input type="file" name="imagen" id="imagen" {{ $banner->id ? '' : 'required="true"' }} accept="image/*"/></span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{trans_choice('sentences.quitar', 1)}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-label">
                                <label for="orden">
                                    {{trans_choice('sentences.orden', 1)}}
                                </label>
                                <select class="form-control" id="orden" name="orden">
                                    @for ($i=1; $i <= $orden_maximo; $i++)
                                        <option value="{{ $i }}" {{ $i==$banner->orden?'selected=""':''}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group has-label">
                                <label for="visible">
                                    Visible
                                </label>
                                <input class="bootstrap-switch" type="checkbox" data-toggle="switch"
                                       name="visible" {{$banner->visible==1?'checked':''}}
                                       data-on-label="<i class='nc-icon nc-check-2'></i>"
                                       data-off-label="<i class='nc-icon nc-simple-remove'></i>" data-on-color="success"
                                       data-off-color="success"/>
                            </div>
                            <div class="category form-category">* {{trans_choice('sentences.campos-requeridos', 1)}}</div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"
                                    class="btn btn-primary">{{$banner->exists ? trans_choice('sentences.guardar-banner', 1) : trans_choice('sentences.crear-banner', 1) }}</button>
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
