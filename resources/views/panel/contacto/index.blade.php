@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contacto'
])

@section('content')
  <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">{{trans_choice('sentences.contacto-info', 1)}}</h3>
                    </div>
                    <div class="col-4 text-right">
                        @if ($contacto->isEmpty())
                            <a href="contacto/create" class="btn btn-sm btn-primary">{{trans_choice('sentences.contacto-agregar', 1)}}</a>
                        @endif
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
                        @if ($contacto->isEmpty())
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center font-weight-normal" width="100%" > {{ trans_choice('sentences.sin-resultados', 1)  }} </th>
                                </tr>
                            </thead>
                        @else
                            @foreach ($contacto as $contact)
                                <thead class="thead-light">
                                    <tr>
                                        <th> {{ trans_choice('sentences.direccion-titulo', 1) }}  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->direccion  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> {{ trans_choice('sentences.horarios-atencion', 1) }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->horario  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> {{ trans_choice('sentences.telefono', 1) }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->telefono  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> {{ trans_choice('sentences.email', 1) }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->email  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> Instagram </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->instagram  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> Facebook </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->facebook  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> Linkedin} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $contact->linkedin  }}
                                        </td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th> {{ trans_choice('sentences.accion', 1) }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{ route('contacto.edit', $contact->id) }}" class="btn btn-primary btn-fab btn-icon btn-round" title="{{trans_choice('sentences.editar', 1)}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        @endif
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
    <script>

    </script>
@endsection
