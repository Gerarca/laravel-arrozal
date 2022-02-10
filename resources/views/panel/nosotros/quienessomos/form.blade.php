@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nosotros'
])
@section('title')
    {{!isset($quienesSomos->id) ?  trans_choice('sentences.agregar', 1) : trans_choice('sentences.editar', 1)  }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                    action="{{$quienesSomos->id ? route('quienessomos.update', $quienesSomos->id): route('quienessomos.store') }}"
                    method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($quienesSomos->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-tabs nav-pills-primary">
                            <h4 class="card-title m-2">
                                {!! $quienesSomos->id ? trans_choice('sentences.quienes-somos-editar', 1) : trans_choice('sentences.quienes-somos-crear', 1) !!}
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="form-group has-label">
                                    <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-es')}}</span></p>
                                </div>
                                <div class="tab-pane active" id="banner">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                   {{ trans_choice('navigation.nosotros', 1) }}
                                                </label>
                                                <textarea class="form-control" id="descripcion" rows="6" name="descripcion" style="max-height: 8rem;" required>{{$quienesSomos->descripcion? $quienesSomos->descripcion : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="imagen">
                                                    {{ trans_choice('sentences.imagen', 1) }} *
                                                    <small>({{ trans_choice('sentences.recomendamos', 1) }}  1920px X 1080px)</small>
                                                </label>
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{$quienesSomos->imagen ? url('uploads/'.$quienesSomos->imagen):url('assets_template/img/image_placeholder.jpg')}}"
                                                                 alt="{{ trans_choice('navigation.quienes-somos', 1) }} " >
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }} </span>
                                                            <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }} </span>
                                                                <input type="file" name="imagen" id="imagen" {{ $quienesSomos->id ? '' : 'required="true"' }} accept="image/*" /></span>
                                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }} </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.mision', 1) }}
                                                </label>
                                                <textarea class="form-control" id="mision" name="mision" rows="3" required>{{$quienesSomos->mision? $quienesSomos->mision : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.vision', 1) }}
                                                </label>
                                                <textarea class="form-control" id="vision" name="vision" rows="3" required>{{$quienesSomos->vision? $quienesSomos->vision : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.valores', 1) }}
                                                </label>
                                                <textarea class="form-control" id="valores" name="valores" rows="10" required>{{$quienesSomos->valores? $quienesSomos->valores : "" }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="form-group has-label">
                                    <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-en')}}</span></p>
                                </div>
                                <div class="tab-pane active" id="banner">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title_en">
                                                   {{ trans_choice('navigation.nosotros', 1) }}
                                                </label>
                                                <textarea class="form-control" id="descripcion_en" rows="6" name="descripcion_en" style="max-height: 8rem;" required>{{$quienesSomos->descripcion_en? $quienesSomos->descripcion_en : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="imagen_en">
                                                    {{ trans_choice('sentences.imagen', 1) }} *
                                                    <small>({{ trans_choice('sentences.recomendamos', 1) }}  1920px X 1080px)</small>
                                                </label>
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{$quienesSomos->imagen_en ? url('uploads/'.$quienesSomos->imagen_en):url('assets_template/img/image_placeholder.jpg')}}"
                                                                 alt="{{ trans_choice('navigation.quienes-somos', 1) }} ">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                            <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }} </span>
                                                            <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }} </span>
                                                                <input type="file" name="imagen_en" id="imagen_en" {{ $quienesSomos->id ? '' : 'required="true"' }} accept="image/*" /></span>
                                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }} </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.mision', 1) }}
                                                </label>
                                                <textarea class="form-control" id="mision_en" name="mision_en" rows="3" required>{{$quienesSomos->mision_en? $quienesSomos->mision_en : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.vision', 1) }}
                                                </label>
                                                <textarea class="form-control" id="vision_en" name="vision_en" rows="3" required>{{$quienesSomos->vision_en? $quienesSomos->vision_en : "" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-label">
                                                <label for="banner_title">
                                                    {{ trans_choice('sentences.valores', 1) }}
                                                </label>
                                                <textarea class="form-control" id="valores_en" name="valores_en" rows="10" required>{{$quienesSomos->valores_en? $quienesSomos->valores_en : "" }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"
                                    class="btn btn-primary">{{$quienesSomos->exists ? trans_choice('sentences.guardar', 1)  : trans_choice('sentences.crear', 1)  }}</button>
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
