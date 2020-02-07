@extends('layouts.master')
@section('titulo','Error')
@section('contenido')

<center>
  <h1>ERROR</h1>
<h1>USUARIO O CONTRASEÑA INCORRECTO</h1>
</center>



@endsection

<a href="{{url('login')}}" class="btn btn-danger"> Regresar</a>