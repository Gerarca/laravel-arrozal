@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nosotros'
])
@section('title', 'Quienes Somos')
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Quienes Somos</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($QuienesSomos->isEmpty())
                                        <a href="quienessomos/create" class="btn btn-sm btn-primary">Crear Quienes Somos</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                @if ($QuienesSomos->isEmpty())
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center font-weight-normal" width="100%" >Contenido Vacio</th>
                                        </tr>
                                    </thead>
                                @else
                                    @foreach($QuienesSomos as $about)
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Quienes Somos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $about->descripcion }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Imagen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{url('uploads/'.$about->imagen)}}" alt="{{$about->descripcion}}" width="100"></td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Mision</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $about->mision }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Vision</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $about->vision }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Valores</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $about->valores }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="disabled-sorting">Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="mx-auto">
                                                    <a href="{{route('quienessomos.edit', $about->id)}}" class="btn btn-primary btn-fab btn-icon btn-round" title="editar">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('especifico')
    <script>
        $(document).ready(function() {


            $(document).on('click', '.btn-delete', function(){
                $('.modal form').attr('action', $(this).data('route'));
                $('#ModalLabel').text($(this).data('title'));
            })
        });
    </script>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $.notify({
                    // options
                    message: '{{$error}}'
                },{
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
@endsection
