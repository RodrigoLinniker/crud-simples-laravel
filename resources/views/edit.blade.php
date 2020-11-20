@extends('layout/main')
<title>Editar</title>
@section('registro')

<!-- Card -->
<div class="card" style="width:30%; margin:10px; margin-left : auto;margin-right : auto">

    <!-- Card body -->
    <div class="card-body">
        @if($errors->any())
        @foreach ($errors->all() as $error)

        <div class="alert alert-danger" role="alert">
            {{ $error }}
          </div>
        @endforeach
        @endif

      <!-- Material form register -->
    <form action="{{route('update',$registros->id)}}" method="POST">
        {{ csrf_field() }}
        <p class="h4 text-center py-4">Editar</p>

        <!-- Material input text -->
        <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="materialFormCardNameEx" value = "{{$registros->nome}}" class="form-control" name = 'nome'>
          <label for="materialFormCardNameEx" class="font-weight-light">Nome</label>
        </div>

        <!-- Material input email -->
        <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="materialFormCardEmailEx" value = "{{$registros->email}}" class="form-control" name = 'email'>
          <label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
        </div>

        <!-- Material input number -->
        <div class="md-form">
          <i class="fas fa-phone-square-alt prefix grey-text"></i>
          <input type="text" id="materialFormCardConfirmEx" value = "{{$registros->numero}}" class="form-control" name = 'telefone'>
          <label for="materialFormCardConfirmEx" class="font-weight-light">Telefone</label>
        </div>

        <!-- Material input password -->
        <div class="md-form">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" id="materialFormCardPasswordEx" value = "{{$registros->senha}}" class="form-control" name = 'senha'>
          <label for="materialFormCardPasswordEx" class="font-weight-light">Senha</label>
        </div>

        <div class="text-center py-4 mt-3">
          <button class="btn btn-cyan container" type="submit">Editar</button>
        </div>
      </form>
      <!-- Material form register -->

    </div>
    <!-- Card body -->

  </div>
  <!-- Card -->
@endsection
