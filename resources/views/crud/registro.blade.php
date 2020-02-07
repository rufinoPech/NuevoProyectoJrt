@extends('layouts.master')
@section('contenido')

<br>
<center>
	<h1>Para formar parte de nosotros registrate</h1>
</center>

<!-- incio de registro -->
<div id="registro">
  <div class="container">
  <div class="row">
    <div class="col-xs-2">
      
    </div>
        <div class="col-xs-8 ">
          <br>
          <br>
          <label>Usuario</label>
          <input type="text" name="nick" placeholder="Nombre de Usuario" class="form-control" v-model="nick">
          <br>
          <br>
          <label>Contraseña</label>
          <br>
          <input type="text" name="password" placeholder="ingrese una Contraseña" class="form-control" v-model="password"><br>
          <br>
          <label>Nombre</label>
          <input type="text" name="nombre" placeholder="ingrese su nombre" class="form-control" v-model="nombre"><br>
          <br>
          <label>Apellidos</label>
          <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos" class="form-control" v-model="apellidos"><br>
          <br>
          <label>Rol</label>
          <input type="text" name="id_rol" disabled="" placeholder="id_rol" class="form-control" v-model="id_rol"><br>
          <br>
          <label>Activo</label>
          <input type="text" name="active" disabled="" placeholder="Activo" class="form-control" v-model="active"><br>
          <br>
          <label>Curp</label>
          <input type="text" name="curp" placeholder="Ingrese su Curp" class="form-control" maxlength="18" v-model="curp"><br>
          <br>
          <label>Edad</label>
          <input type="text" name="edad" placeholder="Ingrese su edad" class="form-control" v-model="edad"><br>
          <br>
          <label>Codigo Postal</label>
          <input type="text" name="cpostal" placeholder="Ingreseel codigo postal de su localidad" class="form-control" maxlength="5" v-model="cpostal"><br>
          <br>
          <label>Correo</label>
          <input type="text" name="correo" placeholder="Ingrese su correo electronico" class="form-control" v-model="correo"><br>
          <br>
          <label>Celular</label>
          <input type="text" name="celular" placeholder="Ingrese su numero de telefono" class="form-control" maxlength="10" v-model="celular"><br>


        <div class="col-xs-2">
          <button type="button" class="btn btn-danger" v-on:click="limpiar()">CANCELAR</button>
          <br>
        <button type="button" class="btn btn-primary" v-on:click="agregarRegistro(nick)">Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin de registro -->






@endsection
@push('scripts')
	<script src="js/vue-resource.js"></script>
	<script src="js/crud/registro.js"></script>
@endpush

<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="adminlte/jquery/dist/jquery.min.js"></script>

<!-- ruta dinamica -->

<input type="hidden" name="route" value="{{url('/')}}">

<a href="{{url('login')}}" class="btn btn-danger"> Regresar</a>