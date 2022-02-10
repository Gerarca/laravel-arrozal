@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'servicios'
])
@section('title')
    {{!isset($servicio->id) ? trans_choice('sentences.servicios-agregar', 1) : trans_choice('sentences.servicios-editar', 1) }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                      action="{{$servicio->id ? route('servicios.update', $servicio->id): route('servicios.store') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($servicio->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! $servicio->id ? trans_choice('sentences.servicios-editar', 1) .'<b>'.$servicio->title.'</b>' : trans_choice('sentences.servicios-agregar', 1) !!}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-es')}}</span></p>
                            </div>
                            <div class="form-group has-label">
                                <label for="titulo">
                                    {{ trans_choice('sentences.titulo', 1) }} *
                                </label>
                                <input class="form-control" id="titulo" name="titulo" type="text" required
                                       value="{{$servicio->titulo?$servicio->titulo:old('titulo')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="subtitulo">
                                    {{ trans_choice('sentences.texto', 1) }} *
                                </label>    {{--}}
                                <input class="form-control" id="texto" name="texto" type="text" required
                                       value="{{$servicio->texto?$servicio->texto:old('texto')}}"/> --}}
                                <textarea class="form-control ckeditor" name="texto" id="texto" cols="30" rows="10" style="max-height: 10rem;" required>{{ $servicio->texto?$servicio->texto : '' }}</textarea>
                            </div>
                            <div class="form-group has-label">
                                <label for="imagen">
                                    {{ trans_choice('sentences.imagen', 1) }} *
                                    <small>({{ trans_choice('sentences.recomendamos', 1) }} 1920px X 1080px)</small>
                                </label>

                                <div class="form-group">

                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$servicio->imagen ? url('uploads/'.$servicio->imagen):url('assets_template/img/image_placeholder.jpg')}}"
                                                 alt="{{$servicio->titulo?$servicio->titulo:old('titulo')}}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }}</span>
                                            <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }}</span>
                                                <input type="file" name="imagen" id="imagen" {{ $servicio->id ? '' : 'required="true"' }} accept="image/*"/></span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }}</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-en')}}</span></p>
                            </div>
                            <div class="form-group has-label">
                                <label for="titulo">
                                    {{ trans_choice('sentences.titulo', 1) }} *
                                </label>
                                <input class="form-control" id="titulo_en" name="titulo_en" type="text" required
                                       value="{{$servicio->titulo_en?$servicio->titulo_en:old('titulo_en')}}"/>
                            </div>
                            <div class="form-group has-label">
                                <label for="subtitulo">
                                    {{ trans_choice('sentences.texto', 1) }} *
                                </label>
                                <textarea class="form-control ckeditor" name="texto_en" id="texto_en" cols="30" rows="10" style="max-height: 10rem;" required>{{ $servicio->texto_en?$servicio->texto_en : '' }}</textarea>
                            </div>
                            <div class="form-group has-label">
                                <label for="imagen">
                                    {{ trans_choice('sentences.imagen', 1) }} *
                                    <small>({{ trans_choice('sentences.recomendamos', 1) }} 1920px X 1080px)</small>
                                </label>

                                <div class="form-group">

                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$servicio->imagen_en ? url('uploads/'.$servicio->imagen_en):url('assets_template/img/image_placeholder.jpg')}}"
                                                 alt="{{$servicio->titulo_en?$servicio->titulo_en:old('titulo_en')}}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }}</span>
                                            <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }}</span>
                                                <input type="file" name="imagen_en" id="imagen_en" {{ $servicio->id ? '' : 'required="true"' }} accept="image/*"/></span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }}</div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"
                                    class="btn btn-primary">{{$servicio->exists ? trans_choice('sentences.guardar', 1) : trans_choice('sentences.servicios-agregar', 1) }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('especifico')
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js') }}"></script>
@endsection
