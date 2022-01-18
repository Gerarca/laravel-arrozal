@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nosotros'
])
@section('title')
    {{!isset($nosotros->id) ? 'Crear Nosotros' : 'Editar Nosotros'}}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                      action="{{$nosotros->id ? route('nosotros.update', $nosotros->id): route('nosotros.store') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($nosotros->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-tabs nav-pills-primary">
                            <h4 class="card-title m-2">
                                {!! $nosotros->id ? 'Editar Nosotros <b>'.$nosotros->titulo.'</b>' :
                                'Añadir Nosotros' !!}
                            </h4>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#banner" data-toggle="tab">Banner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#seccion_uno" data-toggle="tab">Sección 1</a>
                                        </li>
                                        {{--<li class="nav-item">--}}
                                            {{--<a class="nav-link" href="#seccion_dos" data-toggle="tab">Sección 2</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="banner">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    Titulo sobre el banner
                                                </label>
                                                <input class="form-control" id="banner_title" name="banner_title" type="text"
                                                       value="{{$nosotros->banner_title?$nosotros->banner_title:old('banner_title')}}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-label">
                                                <label for="banner">
                                                    Imágen Banner
                                                    <small>(Recomendamos 1920px X 1080px)</small>
                                                </label>
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{ $nosotros->banner ? url('/uploads/' . $nosotros->banner) : url('assets_template/img/image_placeholder.jpg') }}"
                                                                 alt="{{ $nosotros->banner_title ? $nosotros->banner_title : old('banner_title')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Subir imagen</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="banner" id="banner" accept="image/*">
                                                    </span>
                                                            <a href="" class="btn btn-danger btn-round fileinput-exists"
                                                               data-dismiss="fileinput">
                                                                <i class="fa fa-times"></i> Quitar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="seccion_uno">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group has-label">
                                                <label for="first_image">
                                                    Imágen Sección 1
                                                    <small>(Recomendamos 1920px X 1080px)</small>
                                                </label>
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{ $nosotros->first_image ? url('/uploads/' . $nosotros->first_image) : url('assets_template/img/image_placeholder.jpg') }}"
                                                                 alt="{{ $nosotros->first_title ? $nosotros->first_title : old('first_title')}}">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Subir imagen</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="first_image" id="first_image" accept="image/*">
                                                    </span>
                                                            <a href="" class="btn btn-danger btn-round fileinput-exists"
                                                               data-dismiss="fileinput">
                                                                <i class="fa fa-times"></i> Quitar
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-label">
                                                <label for="first_title">
                                                    Titulo Sección Uno
                                                </label>
                                                <input class="form-control" id="first_title" name="first_title" type="text"
                                                       value="{{$nosotros->first_title?$nosotros->first_title:old('first_title')}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="first_body">
                                                    Texto Seccion Uno
                                                </label>
                                                <textarea name="first_body" id="first_body" class="form-control">{{$nosotros->first_body ? $nosotros->first_body : old('first_body')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="tab-pane" id="seccion_dos">--}}
                                    {{--<div class="form-group has-label">--}}
                                        {{--<label for="second_title">--}}
                                            {{--Titulo Sección Dos--}}
                                        {{--</label>--}}
                                        {{--<input class="form-control" id="second_title" name="second_title" type="text"--}}
                                               {{--value="{{$nosotros->second_title?$nosotros->second_title:old('second_title')}}"/>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="card">--}}
                                            {{--<div class="card-header bg-light">--}}
                                                {{--<p style="line-height: 54px;">Tarjetas <button type="button" id="addDetalle" class="btn btn-primary float-right">Agregar</button></p>--}}
                                            {{--</div>--}}
                                            {{--<div class="card-body row"  id="bodyDetalles">--}}
                                                {{--<?php if(!empty($nosotros->cards)): ?>--}}
                                                {{--<?php--}}
                                                {{--$d = 0;--}}
                                                {{--foreach (json_decode($nosotros->cards) as $id_d => $detalle):--}}
                                                {{--$d = $id_d;--}}
                                                {{--?>--}}
                                                {{--<input type="hidden" class="detalle" value="{{ $id_d }}">--}}

                                                {{--<div class="col-lg-6" id="detalle-{{ $id_d }}">--}}
                                                    {{--<div class="card">--}}
                                                        {{--<div class="card-header bg-light">--}}
                                                            {{--<p style="line-height: 42px;">Detalles #{{ $id_d }} @if ($id_d > 0) <button type="button" class="btn btn-danger deleteDetalle float-right btn-sm">X</button> @endif</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="card-body "  data-detalle="{{ $id_d }}">--}}
                                                            {{--<div class="row fields">--}}
                                                                {{--@foreach($detalle as $key => $value)--}}
                                                                    {{--<div class="col-lg-12">--}}
                                                                        {{--<div class="form-group">--}}
                                                                            {{--@if($key === "icono")--}}
                                                                                    {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">--}}
                                                                                        {{--<div class="fileinput-new thumbnail">--}}
                                                                                            {{--<img src="{{isset($value) ?  url('/uploads/'.$value) : url('assets_template/img/image_placeholder.jpg') }}"--}}
                                                                                                 {{--alt="icono">--}}
                                                                                        {{--</div>--}}
                                                                                        {{--<div class="fileinput-preview fileinput-exists thumbnail"></div>--}}
                                                                                        {{--<div>--}}
                                                                                            {{--<span class="btn btn-rose btn-round btn-file">--}}
                                                                                                {{--<span class="fileinput-new">Subir Icono</span>--}}
                                                                                                {{--<span class="fileinput-exists">Cambiar</span>--}}
                                                                                                {{--<input type="file" name="cards[{{ $id_d }}][{{ $key }}]" id="cards[{{ $id_d }}][{{ $key }}]" accept="image/*" >--}}
                                                                                            {{--</span>--}}
                                                                                            {{--<a href="" class="btn btn-danger btn-round fileinput-exists"--}}
                                                                                               {{--data-dismiss="fileinput">--}}
                                                                                                {{--<i class="fa fa-times"></i> Quitar--}}
                                                                                            {{--</a>--}}
                                                                                        {{--</div>--}}
                                                                                    {{--</div>--}}
                                                                            {{--@elseif($key === "descripcion")--}}
                                                                                {{--<textarea required name="cards[{{ $id_d }}][{{ $key }}]" class="form-control" placeholder="Descripción" >{{ $value }}</textarea>--}}
                                                                            {{--@else--}}
                                                                                {{--<input required type="text" name="cards[{{ $id_d }}][{{ $key }}]" class="form-control" placeholder="Título" value="{{ $value }}">--}}
                                                                            {{--@endif--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--@endforeach--}}
                                                            {{--</div>--}}
                                                            {{--<hr>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<?php endforeach; ?>--}}

                                                {{--<?php else: ?>--}}
                                                {{--<input type="hidden" class="detalle" value="0">--}}
                                                {{--<div class="col-lg-6" id="detalle-0">--}}
                                                    {{--<div class="card">--}}
                                                        {{--<div class="card-header bg-light">--}}
                                                            {{--<p style="line-height: 42px;">Tarjeta #0</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="card-body "  data-detalle="0">--}}
                                                            {{--<div class="row fields">--}}
                                                                {{--<div class="col-lg-12">--}}
                                                                    {{--<div class="form-group">--}}
                                                                        {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">--}}
                                                                            {{--<div class="fileinput-new thumbnail">--}}


                                                                                {{--<img src="{{($nosotros->cards !== null) ?  url('/uploads/' . $nosotros->cards['icono']) : url('assets_template/img/image_placeholder.jpg') }}"--}}
                                                                                     {{--alt="icono">--}}
                                                                            {{--</div>--}}
                                                                            {{--<div class="fileinput-preview fileinput-exists thumbnail"></div>--}}
                                                                            {{--<div>--}}
                                                                                            {{--<span class="btn btn-rose btn-round btn-file">--}}
                                                                                                {{--<span class="fileinput-new">Subir Icono</span>--}}
                                                                                                {{--<span class="fileinput-exists">Cambiar</span>--}}
                                                                                                {{--<input type="file" name="cards[0][icono]" id="cards[0][icono]" accept="image/*">--}}
                                                                                            {{--</span>--}}
                                                                                {{--<a href="" class="btn btn-danger btn-round fileinput-exists"--}}
                                                                                   {{--data-dismiss="fileinput">--}}
                                                                                    {{--<i class="fa fa-times"></i> Quitar--}}
                                                                                {{--</a>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-lg-12">--}}
                                                                    {{--<div class="form-group">--}}
                                                                        {{--<input required type="text" name="cards[0][name]" class="form-control" placeholder="Título">--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-lg-12">--}}
                                                                    {{--<div class="form-group">--}}
                                                                        {{--<textarea required name="cards[0][descripcion]" class="form-control" id="" cols="30" rows="10" placeholder="Descripcion..."></textarea>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<hr>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<?php endif; ?>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"
                                    class="btn btn-primary">{{$nosotros->exists ? 'Guardar' : 'Crear '}}</button>
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
    <script src="{{ url('assets_template_extra/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('first_body');
    </script>

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
        });
    </script>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $.notify({
                    // options
                    message: '{{$error}}'
                }, {
                    // settings
                    type: 'danger'
                });
            </script>

        @endforeach
    @endif
    @if(session()->has('success'))
        <script>
            $.notify({
                message: "{{ session()->get('success') }}"
            }, {
                type: 'success'
            });
        </script>
    @endif

    {{-- Script para cards --}}
    <script>
        var detalle = ( parseInt($("input.detalle").last().val()) !== 0) ?  parseInt($("input.detalle").last().val()) : 0;
        $(document).on('click',"button#addDetalle", function(){
                detalle = detalle + 1;
                $("div#bodyDetalles").append(`
            <div class="col-lg-6" id="detalle-${detalle}">
                <div class="card">
                <div class="card-header bg-light">
                <p style="line-height: 42px;">Tarjeta #${detalle} <button type="button" class="btn btn-danger deleteDetalle float-right btn-sm">X</button></p>
                </div>
                <div class="card-body "  data-detalle="${detalle}">
                <div class="row fields">
                <div class="col-lg-12">
                <div class="form-group">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                <img src="{{ url('assets_template/img/image_placeholder.jpg') }}"
                alt="icono">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                <div>
                <span class="btn btn-rose btn-round btn-file">
                <span class="fileinput-new">Subir Icono</span>
                <span class="fileinput-exists">Cambiar</span>
                <input type="file" name="cards[${detalle}]['icono']" id="cards[${detalle}]['icono']" accept="image/*">
                </span>
                <a href="" class="btn btn-danger btn-round fileinput-exists"
                data-dismiss="fileinput">
                <i class="fa fa-times"></i> Quitar
                </a>
                </div>
                </div>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                <input type="text" name="cards[${detalle}][name]" class="form-control" placeholder="Título">
                </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                <textarea name="cards[${detalle}][descripcion]" class="form-control" id="" cols="30" rows="10" placeholder="Descripcion..."></textarea>
                </div>
                </div>
                </div>
                <hr>
                </div>
                </div>
                </div>
        `);

        });


        $(document).on("click", "button.deleteDetalle", function(e){
            detalle = detalle - 1;
            console.log(detalle);
            $(this).parent().parent().parent().parent().remove();
        });
    </script>

@endsection
