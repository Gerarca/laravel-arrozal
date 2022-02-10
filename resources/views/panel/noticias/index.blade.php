@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'noticia'
])
@section('title', trans_choice('navigation.noticias', 1) )
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0"> {{ trans_choice('sentences.noticias-listado', 1) }} </h3>
                                </div>
                                <div class="col-4 text-right">
                                    {{--@can('noticias.create')--}}
                                    <a href="noticias/create" class="btn btn-sm btn-primary"> {{ trans_choice('sentences.noticias-agregar', 1) }} </a>
                                    {{--@endcan--}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12"></div>

                        <div class="table-responsive" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th> {{ trans_choice('sentences.titulo', 1) }} </th>
                                    <th> {{ trans_choice('sentences.enlace', 1) }} </th>
                                    <th> {{ trans_choice('sentences.imagen', 1) }} </th>
                                    <th> {{ trans_choice('sentences.fuente', 1) }} </th>
                                    <th> {{ trans_choice('sentences.fecha-creacion', 1) }}  </th>
                                    <th class="disabled-sorting"></th>
                                    <th class="disabled-sorting"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($Noticias as $noticia)
                                        <tr>
                                            <td> {{ $noticia->titulo  === null ? "No posee título" : $noticia->titulo }}</td>
                                            <td>{!! $noticia->enlace ? '<a href="'.$noticia->enlace.'" target="_blank" class="btn btn-primary btn-round btn-icon"><i class="fa fa-chrome"></i></a>' : 'No posee enlace'  !!}</td>
                                            <td><img src="{{ url('uploads/'.$noticia->imagen) }}" alt="{{ $noticia->titulo }}" width="100"></td>
                                            <td>{{ $noticia->fuente }}</td>
                                            <td>{{ $noticia->created_at }}</td>
                                            <td><a href="{{ route('noticias.edit', $noticia->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{ trans_choice('sentences.editar', 1) }}">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-fab btn-icon btn-round btn-delete" title="{{ trans_choice('sentences.eliminar', 1) }}" data-id="{{ $noticia->id }}" data-toggle="modal"  data-target="#modal-default" data-route="{{ route('noticias.destroy', $noticia->id) }}" data-title="{{ $noticia->name }}">
                                                    <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

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
                    <h5 class="modal-title"> {{ trans_choice('sentences.eliminar', 1) }}  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> {{ trans_choice('sentences.continuar-accion', 1) }} </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans_choice('sentences.cancelar', 1)}}</button>
                    <form class="" action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger" name="button">{{trans_choice('sentences.eliminar', 1)}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "pagingType": "full_numbers",
                "order": [[ 6, "desc" ]],
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "Todos"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "{{trans_choice('sentences.buscar-registros', 1)}}",
                }

            });

            var table = $('#datatable').DataTable();
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
