@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contacto'
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form id="RegisterValidation" action="{{$contacto->id ? route('contacto.update', $contacto->id): route('contacto.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                {{ csrf_field() }}
                @if ($contacto->id)
                    {{ method_field('PATCH') }}
                @endif
                <div class="card mt-5">
                    <div class="card-header ">
                        <h4 class="card-title">{!! $contacto->id ? trans_choice('sentences.edit', 1)  : trans_choice('sentences.agregar', 1) !!}</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group has-label">
                            <label for="email">
                            {{trans_choice('sentences.email', 1)}} *
                            </label>
                            <input class="form-control" id="email" name="email" type="email" required="true" value="{{$contacto->email?$contacto->email:old('email')}}" autocomplete="off"/>
                        </div>
                        <div class="form-group has-label">
                            <label for="telefono">
                                {{trans_choice('sentences.telefono', 1)}} *
                            </label>
                            <input class="form-control" id="telefono" name="telefono" type="text" required="true" value="{{$contacto->telefono?$contacto->telefono:old('telefono')}}" autocomplete="off"/>
                        </div>
                        <div class="form-group has-label">
                            <label for="instagram">
                                Instagram *
                            </label>
                            <input class="form-control" id="instagram" name="instagram" type="text" required="true" value="{{$contacto->instagram?$contacto->instagram:old('instagram')}}" autocomplete="off"/>
                        </div>
                        <div class="form-group has-label">
                            <label for="facebook">
                                Facebook *
                            </label>
                            <input class="form-control" id="facebook" name="facebook" type="text" required="true" value="{{$contacto->facebook?$contacto->facebook:old('facebook')}}" autocomplete="off"/>
                        </div>
                        <div class="form-group has-label">
                            <label for="linkedin">
                                Linkedin *
                            </label>
                            <input class="form-control" id="linkedin" name="linkedin" type="text" required="true" value="{{$contacto->linkedin?$contacto->linkedin:old('linkedin')}}" autocomplete="off"/>
                        </div>
                        <div class="form-group has-label">
                            <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-es')}}</span></p>
                        </div>
                        <div class="form-group has-label">
                            <label for="direccion">
                            {{trans_choice('sentences.direccion-titulo', 1)}} *
                            </label>
                            <input class="form-control" id="direccion" name="direccion" type="text" required="true" value="{{$contacto->direccion?$contacto->direccion:old('direccion')}}" />
                        </div>
                        <div class="form-group has-label">
                            <label for="horario">
                                {{trans_choice('sentences.horarios-atencion', 1)}} *
                            </label>
                            <textarea class="form-control ckeditor" name="horario" id="horario" cols="15" rows="5" style="max-height: 10rem;" required>{{ $contacto->horario?$contacto->horario : '' }}</textarea>
                        </div>
                        <div class="form-group has-label">
                            <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-en')}}</span></p>
                        </div>
                        <div class="form-group has-label">
                            <label for="direccion_en">
                            {{trans_choice('sentences.direccion-titulo', 1)}} *
                            </label>
                            <input class="form-control" id="direccion_en" name="direccion_en" type="text" required="true" value="{{$contacto->direccion_en?$contacto->direccion_en:old('direccion_en')}}" />
                        </div>
                        <div class="form-group has-label">
                            <label for="horario_en">
                                {{trans_choice('sentences.horarios-atencion', 1)}} *
                            </label>
                            <textarea class="form-control ckeditor" name="horario_en" id="horario_en" cols="15" rows="5" style="max-height: 10rem;" required>{{ $contacto->horario_en?$contacto->horario_en : '' }}</textarea>
                        </div>
                        <div class="category form-category">* {{trans_choice('sentences.campos-requeridos', 1)}}</div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">{{$contacto->exists ? trans_choice('sentences.guardar', 1) : trans_choice('sentences.agregar', 1) }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('especifico')
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script>
        function setFormValidation(id) {
        $(id).validate({
            highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
            },
        });
        }

        $(document).ready(function() {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');

        @if($errors->any())
            @foreach ($errors->all() as $error)
            $.notify({
                // options
                message: '{{$error}}'
            },{
                // settings
                type: 'danger'
            });
            @endforeach
        @endif
        @if(session()->has('mensaje'))
        $.notify({
            // options
            message: '{{ session()->get('mensaje') }}'
        },{
            // settings
            type: 'success'
        });

        @endif
        });
    </script>

@endsection
