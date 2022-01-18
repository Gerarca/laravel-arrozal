@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'nosotros'
])
@section('title', 'Nosotros')
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Nosotros</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($nosotros->isEmpty())
                                        <a href="nosotros/create" class="btn btn-sm btn-primary">Agregar nosotros</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12"></div>
                        <div class="table-responsive" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>Titulo</th>
                                    <th>banner</th>
                                    <th>Fecha de creación</th>
                                    <th>Fecha de edición</th>
                                    <th class="disabled-sorting"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($nosotros as $about)
                                    <tr>
                                        <td>{{ $about->banner_title }}</td>
                                        <td><img src="{{url('uploads/'.$about->banner)}}" alt="{{$about->banner_title}}" width="100"></td>
                                        <td>{{ $about->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $about->updated_at->format('d-m-Y') }}</td>
                                        <td><a href="{{route('nosotros.edit', $about->id)}}" class="btn btn-primary btn-fab btn-icon btn-round" title="editar">
                                                <i class="fa fa-edit"></i></a>
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
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "pagingType": "full_numbers",
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