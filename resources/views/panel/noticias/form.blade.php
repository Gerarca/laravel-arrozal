@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'noticia'
])
@section('title')
    {{!isset($noticia->id) ?  trans_choice('sentences.noticias-agregar', 1)  : trans_choice('sentences.noticias-editar', 1) }}
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
                            <h4 class="card-title">{!! $noticia->id ? trans_choice('sentences.noticias-editar', 1) .'<b>'.$noticia->name.'</b>' : trans_choice('sentences.noticias-agregar', 1) !!}</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-body">
                                <div class="form-group has-label">
                                    <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-es')}}</span></p>
                                </div>
                                <div class="form-group has-label">
                                    <label for="titulo">
                                        {{ trans_choice('sentences.titulo', 1) }} *
                                    </label>
                                    <input class="form-control" id="titulo" name="titulo" type="text" required value="{{$noticia->titulo?$noticia->titulo:old('titulo')}}"/>
                                </div>
                                <div class="form-group has-label">
                                    <label for="enlace">
                                        {{ trans_choice('sentences.enlace', 1) }} *
                                    </label>
                                    <input class="form-control" id="enlace" name="enlace" type="text" required  value="{{$noticia->enlace?$noticia->enlace:old('enlace')}}" url="true"/>
                                </div>
                                <div class="form-group has-label">
                                    <label for="imagen">
                                        {{ trans_choice('sentences.imagen', 1) }} *
                                        <small>({{ trans_choice('sentences.recomendamos', 1) }} 1920px X 1080px)</small>
                                    </label>

                                    <div class="form-group">

                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{$noticia->imagen ? url('uploads/'.$noticia->imagen):url('assets_template/img/image_placeholder.jpg') }}"
                                                    alt="{{$noticia->titulo?$noticia->titulo:old('titulo')}}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }}</span>
                                                <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }}</span>
                                                    <input type="file" name="imagen" id="imagen" {{ $noticia->id ? '' : 'required="true"' }} accept="image/*"  }}"   />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-label">
                                    <label for="titulo">
                                        {{ trans_choice('sentences.fuente', 1) }}
                                    </label>
                                    <input class="form-control" id="fuente" name="fuente" type="text" required
                                        value="{{$noticia->fuente?$noticia->fuente:old('fuente')}}"/>
                                </div>
                                <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }}</div><br>
                            </div>
                            <div class="card-body">
                                <div class="form-group has-label">
                                    <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-en')}}</span></p>
                                </div>
                                <div class="form-group has-label">
                                    <label for="titulo">
                                        {{ trans_choice('sentences.titulo', 1) }} *
                                    </label>
                                    <input class="form-control" id="titulo_en" name="titulo_en" type="text" required value="{{$noticia->titulo_en?$noticia->titulo_en:old('titulo_en')}}"/>
                                </div>
                                <div class="form-group has-label">
                                    <label for="enlace">
                                        {{ trans_choice('sentences.enlace', 1) }} *
                                    </label>
                                    <input class="form-control" id="enlace_en" name="enlace_en" type="text" required  value="{{$noticia->enlace_en?$noticia->enlace_en:old('enlace_en')}}" url="true"/>
                                </div>
                                <div class="form-group has-label">
                                    <label for="imagen">
                                        {{ trans_choice('sentences.imagen', 1) }} *
                                        <small>({{ trans_choice('sentences.recomendamos', 1) }} 1920px X 1080px)</small>
                                    </label>

                                    <div class="form-group">

                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{$noticia->imagen_en ? url('uploads/'.$noticia->imagen_en):url('assets_template/img/image_placeholder.jpg') }}"
                                                    alt="{{$noticia->titulo_en?$noticia->titulo_en:old('titulo_en')}}">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }}</span>
                                                <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }}</span>
                                                    <input type="file" name="imagen_en" id="imagen_en" {{ $noticia->id ? '' : 'required="true"' }} accept="image/*"  }}"   />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-label">
                                    <label for="titulo_en">
                                        {{ trans_choice('sentences.fuente', 1) }}
                                    </label>
                                    <input class="form-control" id="fuente_en" name="fuente_en" type="text" required
                                        value="{{$noticia->fuente_en?$noticia->fuente_en:old('fuente_en')}}"/>
                                </div>
                                <div class="form-group has-label">
                                    <label for="ano">
                                        {{ trans_choice('sentences.ano', 1) }} *
                                    </label>
                                    <input class="form-control" id="year" name="year" required  value="{{$noticia->year?$noticia->year:old('ano')}}" type="number" min="1900" max="2099" step="1"/>
                                </div>
                                <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }}</div><br>
                            </div>
                        </div>
                        <div class="card-footer text-right mt-5">
                            <button type="submit"
                                    class="btn btn-primary">{{$noticia->exists ? trans_choice('sentences.guardar', 1) : trans_choice('sentences.noticias-crear', 1)  }}</button>
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
