@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'users'
])

@section('content')
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">{{trans_choice('sentences.usuarios-lista', 1)}}</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="users/create" class="btn btn-sm btn-primary">{{trans_choice('sentences.usuario-agregar', 1)}}</a>
                    </div>
                </div>
              </div>
              <div class="col-12"></div>
              <div class="card-body">
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>

                <div class="table-responsive" style="overflow: hidden">
                    <table id="datatable" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th> {{ trans_choice('sentences.nombre', 1) }} </th>
                            <th> {{ trans_choice('sentences.email', 1) }} </th>
                            <th> {{ trans_choice('sentences.rol', 1) }} </th>
                            <th> {{ trans_choice('sentences.imagen', 1) }} </th>
                            <th> {{ trans_choice('sentences.fecha-creacion', 1) }}  </th>
                            <th class="disabled-sorting"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name  }}</td>
                                <td>{{ $user->email }}</td>
                                @if($user->roles->first())
                                    <td>{{ $user->roles->first()->name }}</td>
                                @else
                                    <td><em>Sin rol asignado</em></td>
                                @endif
                                <td class="text-center">
                                    @if ($user->imagen)
                                        <img src="{{ url('uploads/'.$user->imagen) }}" alt="{{ $user->name }}" width="100">
                                    @else
                                        <img src="{{ url('assets_template/img/default-avatar.png') }}" alt="" width="100">
                                    @endif
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td class="text-right">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-link btn-icon btn-sm edit "><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove btn-delete" data-id="{{ $user->id }}" data-toggle="modal"  data-target="#modal-default" data-route="{{ route('users.destroy', $user->id) }}" data-title="{{ $user->name }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
        <!-- end row -->
      </div>
@endsection


@section('especifico')

  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Eliminar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Esta acción es irreversible, está seguro que desa continuar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cancelar</button>
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
    $(document).on('click', '.btn-delete', function(){
      $('.modal form').attr('action', $(this).data('route'));
      $('#ModalLabel').text($(this).data('title'));
    })
  </script>
@endsection
