@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'pasantias'
])
@section('title', trans_choice('navigation.pasantias', 1) )
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ trans_choice('navigation.pasantias', 1) }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($PasantiasTextos->isEmpty())
                                        <a href="pasantias/create" class="btn btn-sm btn-primary">{{ trans_choice('sentences.agregar-texto', 1) }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                @if ($PasantiasTextos->isEmpty())
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center font-weight-normal" width="100%" >{{ trans_choice('sentences.sin-resultados', 1) }}</th>
                                    </tr>
                                </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="90%" >{{ trans_choice('sentences.texto', 1) }}</th>
                                            <th width="10%"  class="disabled-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($PasantiasTextos as $pasantiasTexto)
                                            <tr>
                                                <td> {{ $pasantiasTexto->texto  }}</td>
                                                <td><a href="{{ route('pasantias.edit', $pasantiasTexto->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{ trans_choice('sentences.editar', 1) }}">
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
                                    <h3 class="mb-0">{{ trans_choice('sentences.imagen-listado', 1) }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="pasantiasimagenes/create" class="btn btn-sm btn-primary">{{ trans_choice('sentences.imagen-agregar', 1) }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable2" class="table align-items-center table-flush">
                                @if ($PasantiasImagenes->isEmpty())
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center font-weight-normal" width="100%" >{{ trans_choice('sentences.sin-resultado', 1) }}</th>
                                        </tr>
                                    </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th>{{ trans_choice('sentences.imagen', 1) }}</th>
                                            <th>{{ trans_choice('sentences.fecha-creacion', 1) }}</th>
                                            <th class="disabled-sorting" width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($PasantiasImagenes as $pasantiasImagen)
                                            <tr>
                                                <td><img src="{{ url('uploads/'.$pasantiasImagen->imagen) }}" alt="{{ "Imagen-" . $pasantiasImagen->id }}" width="100"></td>
                                                <td>{{ $pasantiasImagen->created_at }}</td>
                                                <td><a href="{{ route('pasantiasimagenes.edit', $pasantiasImagen->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{ trans_choice('sentences.editar', 1) }}">
                                                        <i class="fa fa-edit"></i></a>
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
                    <h5 class="modal-title">{{ trans_choice('sentences.eliminar', 1) }}</h5>
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
        $('#datatable2').DataTable({
            "pagingType": "full_numbers",
            "order": [[ 6, "desc" ]],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "Todos"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "{{ trans_choice('sentences.buscar-registros', 1) }}",
            }

        });

        var table2 = $('#datatable2').DataTable();
        });

        $(document).on('click', '.btn-delete', function(){
            $('.modal form').attr('action', $(this).data('route'));
            $('#ModalLabel').text($(this).data('title'));
        })
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
