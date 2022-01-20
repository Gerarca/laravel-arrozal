@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'noticia'
])
@section('title', 'Donde Estamos')
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Donde Estamos</h3>
                                </div>
                                <div class="col-4 text-right">
                                    @if($DondeEstamos->isEmpty())
                                        <a href="dondeestamos/create" class="btn btn-sm btn-primary">Agregar Donde Estamos</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-12"></div>

                        <div class="table-responsive" style="overflow: hidden">
                            <table id="datatable" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>Donde Estamos</th>
                                    <th class="disabled-sorting"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($DondeEstamos as $dondeestamos)
                                        <tr>
                                            <td>{{ $dondeestamos->texto }}</td>
                                            <td><a href="{{ route('dondeestamos.edit', $dondeestamos->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="Editar">
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
