@extends('layout')
@section('content')





<table class="table table-striped">
    <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">NOMBRE COMPLETO</th>
          <th scope="col">CORREO ELECTRONICO</th>
          <th scope="col">FECHA DE CREACION</th>
        </tr>
      </thead>
<tbody>
    @foreach ($users as $user)
    <tr>

        <th >{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>



    





@endsection