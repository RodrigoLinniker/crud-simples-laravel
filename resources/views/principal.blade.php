@extends('layout/main')
<title>Home</title>
@section('principal')

<div class="container">
    <h1>Home</h1>

@if (session('sucessoMsg'))
<div class="alert alert-primary" role="alert">
    {{session('sucessoMsg')}}
  </div>
@endif

<table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($registros as $registro)

      <tr>
      <th scope="row">{{$registro -> id}}</th>
        <td>{{$registro -> nome}}</td>
        <td>{{$registro -> email}}</td>
        <td>{{$registro -> numero}}</td>
        <td>
        <a class = "btn btn-raised btn-primary btn-sm" href="{{route('edit',$registro -> id)}}"><i class="far fa-edit">Edit</i></a>
            <form method = "POST" id="delete-form-{{$registro->id}}" action="{{route('delete',$registro -> id)}}" style = "display: none">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            </form>

        <button onclick="if(confirm('Voçe tem certeza que quer deletar?')){
            event.preventDefault();
            document.querySelector('#delete-form-{{$registro->id}}').submit();
        }else{
            event.preventDefault();
        }"
        class = "btn btn-raised btn-danger btn-sm" href=""><i class="far fa-trash-alt">Delete</i>
        </button>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$registros->links()}}
</div>

@endsection
