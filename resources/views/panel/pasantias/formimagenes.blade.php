@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'pasantias'
])
@section('title')
    {{!isset($pasantiasImagen->id) ? trans_choice('sentences.imagen-agregar', 1) : trans_choice('sentences.imagen-editar', 1) }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                    action="{{$pasantiasImagen->id ? route('pasantiasimagenes.update', $pasantiasImagen->id): route('pasantiasimagenes.store') }}"
                    method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($pasantiasImagen->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-tabs nav-pills-primary">
                            <h4 class="card-title m-2">
                                {!! $pasantiasImagen->id ? trans_choice('sentences.imagen-editar', 1) : trans_choice('sentences.imagen-agregar', 1) !!}
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <label for="imagen">
                                    {{ trans_choice('sentences.imagen', 1) }} *
                                    <small>({{ trans_choice('sentences.recomendamos', 1) }} 1920px X 1080px)</small>
                                </label>
                                <div class="form-group">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{$pasantiasImagen->imagen ? url('uploads/'.$pasantiasImagen->imagen):url('assets_template/img/image_placeholder.jpg')}}"
                                                 alt="Imagen">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">{{ trans_choice('sentences.seleccionar-imagen', 1) }}</span>
                                            <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }}</span>
                                                <input type="file" name="imagen" id="imagen" {{ $pasantiasImagen->id ? '' : 'required="true"' }} accept="image/*"/></span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-label">
                            <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }}</div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit"
                                    class="btn btn-primary">{{$pasantiasImagen->exists ? trans_choice('sentences.guardar', 1) :  trans_choice('sentences.agregar', 1) }}</button>
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
