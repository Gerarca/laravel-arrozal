@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nosotros'
])
@section('title')
    {{!isset($DondeEstamos->id) ?  trans_choice('sentences.agregar', 1)  :  trans_choice('sentences.editar', 1) }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form id="RegisterValidation"
                      action="{{$DondeEstamos->id ? route('dondeestamos.update', $DondeEstamos->id): route('dondeestamos.store') }}"
                      method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($DondeEstamos->id)
                        {{ method_field('PATCH') }}
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{!! $DondeEstamos->id ? trans_choice('sentences.donde-estamos-editar', 1) : trans_choice('sentences.donde-estamos-agregar', 1) !!}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group has-label">
                                <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-es')}}</span></p>
                            </div>
                            <div class="form-group has-label">
                                <label for="titulo">
                                    {{ trans_choice('navigation.donde-estamos', 1) }}
                                </label>
                                <textarea class="form-control" id="texto" rows="10" required name="texto" style="max-height: 8rem;">{{$DondeEstamos->texto? $DondeEstamos->texto : old('texto') }}</textarea>
                            </div>
                            <div class="form-group has-label">
                                <p class="border-bottom border-danger text-danger"><span>{{trans('navigation.languages-en')}}</span></p>
                            </div>
                            <div class="form-group has-label">
                                <label for="titulo_en">
                                    {{ trans_choice('navigation.donde-estamos', 1) }}
                                </label>
                                <textarea class="form-control" id="texto_en" rows="10" required name="texto_en" style="max-height: 8rem;">{{$DondeEstamos->texto_en? $DondeEstamos->texto_en : old('texto_en') }}</textarea>
                            </div>
                        </div>

                            <div class="category form-category">*  {{ trans_choice('sentences.campos-requeridos', 1) }}</div><br>
                        </div>
                        <div class="card-footer text-right mt-5">
                            <button type="submit"
                                    class="btn btn-primary">{{$DondeEstamos->exists ?  trans_choice('sentences.guardar', 1) : trans_choice('sentences.agregar', 1) }}</button>
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
