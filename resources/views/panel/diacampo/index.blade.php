@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'diadecampo'
])
@section('title', 'Dia de Campo')
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Dia de Campo</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($DiaCampoTextos->isEmpty())
                                        <a href="diacampo/create" class="btn btn-sm btn-primary">Agregar Texto</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                @if ($DiaCampoTextos->isEmpty())
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center font-weight-normal" width="100%" >Contenido Vacio</th>
                                    </tr>
                                </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="90%" >Texto</th>
                                            <th width="10%"  class="disabled-sorting"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($DiaCampoTextos as $diaCampoTexto)
                                            <tr>
                                                <td> {{ $diaCampoTexto->texto  }}</td>
                                                <td><a href="{{ route('diacampo.edit', $diaCampoTexto->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="Editar">
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
                                    <h3 class="mb-0">Imagenes</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="diacampoimagenes/create" class="btn btn-sm btn-primary">Agregar Imagen</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive px-2" style="overflow: hidden">
                            <table id="datatable2" class="table align-items-center table-flush">
                                @if ($DiaCampoImagenes->isEmpty())
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center font-weight-normal" width="100%" >Contenido Vacio</th>
                                        </tr>
                                    </thead>
                                @else
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Imagenes</th>
                                            <th>Fecha de creación</th>
                                            <th class="disabled-sorting" width="10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($DiaCampoImagenes as $diaCampoImagenes)
                                            <tr>
                                                <td><img src="{{ url('uploads/'.$diaCampoImagenes->imagen) }}" alt="{{ "Imagen-" . $diaCampoImagenes->id }}" width="100"></td>
                                                <td>{{ $diaCampoImagenes->created_at }}</td>
                                                <td><a href="{{ route('diacampoimagenes.edit', $diaCampoImagenes->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="Editar">
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
                    <h5 class="modal-title">Eliminar Imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Esta acción es irreversible. <br/> ¿Está seguro que desea continuar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" name="button">Sí, eliminar</button>
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
                searchPlaceholder: "Buscar registros",
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
