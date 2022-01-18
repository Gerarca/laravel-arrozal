@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'banner'
])
@section('title', 'Banner')
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Listado de banners</h3>
                                </div>
                                <div class="col-4 text-right">
                                    {{--@can('banners.create')--}}
                                    <a href="banner/create" class="btn btn-sm btn-primary">Agregar banner</a>
                                    {{--@endcan--}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12"></div>

                        <div class="table-responsive" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>Titulo</th>
                                    <th>Subtitulo</th>
                                    <th>Enlace</th>
                                    <th>Imagen</th>
                                    <th>Fecha de creación</th>
                                    <th>Orden</th>
                                    <th>Visible</th>
                                    <th class="disabled-sorting"></th>
                                    <th class="disabled-sorting"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td> {{ $banner->titulo  === null ? "No posee título" : $banner->titulo }}</td>
                                            <td> {{ $banner->subtitulo  === null ? "No posee subtítulo" : $banner->titulo }}</td>
                                            {{-- <td>{{ ($banner->tipo_banner==1)?'Principal':'Secundario' }}</td>--}}
                                            <td>{!! $banner->enlace ? '<a href="'.$banner->enlace.'" target="_blank" class="btn btn-primary btn-round btn-icon"><i class="fa fa-chrome"></i></a>' : 'No posee enlace'  !!}</td>
                                            <td><img src="{{ url('uploads/'.$banner->imagen) }}" alt="{{ $banner->titulo }}" width="100"></td>
                                            <td>{{ $banner->created_at }}</td>
                                            <td>{{ $banner->orden }}</td>
                                            <td>{{ $banner->visible==1?'Si':'No' }}</td>
                                            <td><a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="editar">
                                                    <i class="fa fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-fab btn-icon btn-round btn-delete" title="eliminar" data-id="{{ $banner->id }}" data-toggle="modal"  data-target="#modal-default" data-route="{{ route('banner.destroy', $banner->id) }}" data-title="{{ $banner->name }}">
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
                    <h5 class="modal-title">Eliminar banner</h5>
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
                    searchPlaceholder: "Buscar registros",
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