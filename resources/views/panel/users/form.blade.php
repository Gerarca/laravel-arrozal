@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'users'
])

@section('content')
  <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form id="RegisterValidation" action="{{$user->id ? route('users.update', $user->id): route('users.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            @if ($user->id)
              {{ method_field('PATCH') }}
            @endif
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">{!! $user->id ? 'Editar usuario <b>'.$user->name.'</b>' : 'Añadir usuario' !!}</h4>
              </div>
              <div class="card-body ">
                <div class="form-group has-label">
                  <label for="nombre">
                    {{ trans_choice('sentences.nombre', 1) }}  *
                  </label>
                  <input class="form-control" id="nombre" name="name" type="text" required="true" value="{{$user->name?$user->name:old('name')}}" />
                </div>
                <div class="form-group has-label">
                  <label for="email">
                    {{ trans_choice('sentences.email', 1) }}  *
                  </label>
                  <input class="form-control" id="email" name="email" type="email" required="true" value="{{$user->email?$user->email:old('email')}}" autocomplete="off"/>
                </div>
                <div class="form-group has-label">
                  <label for="rol">
                    {{ trans_choice('sentences.rol', 1) }}  *
                  </label>
                  <select class="form-control" id="rol" name="rol" required="true">
                    @foreach ($roles as $rol)
                      <option value="{{$rol->id}}" {{$user->rol==$rol->id?'selected=""':''}}>{{$rol->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group has-label">

                  <div class="col-md-3 col-sm-4">
                    <label for="avatar">
                        {{ trans_choice('sentences.imagen', 1) }}  *
                    </label>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-circle">
                        <img src="{{$user->image?url('uploads/'.$user->image):url('assets_template/img/placeholder.jpg')}}" alt="avatar">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                      <div>
                        <span class="btn btn-round btn-rose btn-file">
                          <span class="fileinput-new">{{ trans_choice('sentences.agregar-imagen', 1) }} </span>
                          <span class="fileinput-exists">{{ trans_choice('sentences.cambiar', 1) }} </span>
                          <input type="file" name="image" id="avatar" {{ $user->id ? '' : 'required="true"' }} accept="image/*"/>
                        </span>
                        <br />
                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> {{ trans_choice('sentences.quitar', 1) }} </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group has-label">
                  <label for="password">
                    {{ trans_choice('sentences.password', 1) }}  *
                  </label>
                  <input class="form-control" name="password" id="password" type="password" {{ $user->id ? '' : 'required="true"' }}  />
                </div>
                <div class="form-group has-label">
                  <label for="password_confirmation">
                    {{ trans_choice('sentences.confirmar-password', 1) }}  *
                  </label>
                  <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" {{ $user->id ? '' : 'required="true"' }} equalTo="#password" />
                </div>
                <div class="category form-category">* {{ trans_choice('sentences.campos-requeridos', 1) }} </div>
              </div>
              <div class="card-footer text-right">

                <button type="submit" class="btn btn-primary">{{$user->exists ? 'Guardar usuario' : 'Crear nuevo usuario'}}</button>
              </div>
            </div>
          </form>
        </div>



      </div>
    </div>
@endsection

@section('especifico')
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ url('assets_template/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script>
        function setFormValidation(id) {
        $(id).validate({
            highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
            },
        });
        }

        $(document).ready(function() {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');

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
    </script>

@endsection
