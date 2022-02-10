@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nuestrahistoria'
])
@section('title', trans_choice('navigation.nuestra-historia', 1) )
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ trans_choice('navigation.nuestra-historia', 1) }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="nuestrahistoria/create" class="btn btn-sm btn-primary">{{ trans_choice('sentences.nuestra-historia-agregar', 1) }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                @if ($NuestraHistoria->isEmpty())
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center font-weight-normal" width="100%" >{{ trans_choice('sentences.sin-resultados', 1) }}</th>
                                        </tr>
                                    </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th>{{ trans_choice('sentences.titulo', 1) }}</th>
                                            <th>{{ trans_choice('sentences.texto', 1) }}</th>
                                            <th>{{ trans_choice('sentences.imagen', 1) }}n</th>
                                            <th>{{ trans_choice('sentences.fecha-creacion', 1) }}</th>
                                            <th class="disabled-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($NuestraHistoria as $nuestrahistoria)
                                            <tr>
                                                <td> {{ $nuestrahistoria->titulo }}</td>
                                                <td>{{ $nuestrahistoria->texto }}</td>
                                                <td><img src="{{ url('uploads/'.$nuestrahistoria->imagen) }}" alt="{{ $nuestrahistoria->titulo }}" width="100"></td>
                                                <td>{{ $nuestrahistoria->created_at }}</td>
                                                <td><a href="{{ route('nuestrahistoria.edit', $nuestrahistoria->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{ trans_choice('sentences.editar', 1) }}">
                                                        <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>

                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Video</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($NuestraHistoriaVideo->isEmpty())
                                        <a href="nuestrahistoriavideo/create" class="btn btn-sm btn-primary">{{ trans_choice('sentences.agregar', 1) }} Video</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                @if ($NuestraHistoriaVideo->isEmpty())
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center font-weight-normal" width="100%" >{{ trans_choice('sentences.sin-resultados', 1) }}</th>
                                        </tr>
                                    </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Video</th>
                                            <th>{{ trans_choice('sentences.fecha-creacion', 1) }}</th>
                                            <th class="disabled-sorting"></th>
                                            <th class="disabled-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($NuestraHistoriaVideo as $nuestrahistoriavideo)
                                            <tr>
                                                <td>
                                                    <div class="video-container video-container-homenaje mb-4">
                                                        <iframe src="{{ $nuestrahistoriavideo->enlace }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </td>
                                                <td>{{ $nuestrahistoriavideo->created_at }}</td>
                                                <td><a href="{{ route('nuestrahistoriavideo.edit', $nuestrahistoriavideo->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{ trans_choice('sentences.editar', 1) }}">
                                                        <i class="fa fa-edit"></i></a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-fab btn-icon btn-round btn-delete" title="{{ trans_choice('sentences.eliminar', 1) }}" data-id="{{ $nuestrahistoriavideo->id }}" data-toggle="modal"  data-target="#modal-default" data-route="{{ route('nuestrahistoriavideo.destroy', $nuestrahistoriavideo->id) }}" data-title="{{ $nuestrahistoriavideo->titulo }}">
                                                        <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ trans_choice('sentences.eliminar', 1) }} Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ trans_choice('sentences.continuar-accion', 1) }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans_choice('sentences.cancelar', 1) }}</button>
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" name="button">{{ trans_choice('sentences.eliminar', 1) }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
