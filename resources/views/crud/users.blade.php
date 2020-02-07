@extends('layouts.master')
@section('titulo','creando usuarios')

@section('contenido')
	

			
<center>
	<h1>Datos de Usuario |<small>Usted puede cambiar sus datos en este apartado</small><hr></h1>
</center>

<div id="usuario">
	<div class="container">
		<br>
		<br>
				
		<table class="table table-hover">
            <thead>
              <th class="warning">curp</th>
              <th class="warning">contraseña</th>
              <th class="warning">nombre</th>
              <th class="warning">Apellidos</center></th>
              <th class="warning">celular</th>
              <!-- <th class="warning">Dirección</th> -->
              <th class="warning">Edad</th>
              <th class="warning">Codigo Postal</th>
              <th class="warning">Editar</th>
              
             
            </thead>
            <tbody>
              <tr v-for="v in usuario">
                <td class="success">@{{v.nick}}</td>
                <td class="success">@{{v.password}}</td>
                <td class="success">@{{v.nombre}}</td>
                <td class="success">@{{v.apellidos}}</td>
                <td class="success">@{{v.celular}}</td>
             <!--    <td class="success">@{{v.direccion}}</td> -->
                <td class="success">@{{v.edad}}</td>
                <td class="success">@{{v.cpostal}}</td>
                <td class="success">
                  <span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarvendedor" v-on:click="showUsuario(v.nick)"></span>
                </td>
              </tr>
            </tbody>
        </table>

    <!-- Modal Editar -->
<div class="modal fade" id="editarvendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Usuario</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Usuario o Correo</label>
          <input type="text"  name="nombre" class="form-control" v-model="nombre" >
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="updateUsuario(nick)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de modal -->
        
    </div>
</div>
		

				

@endsection


@push('scripts')

	<script src="js/vue-resource.js"></script>
	<script src="js/crud/users.js"></script>

@endpush

<!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="adminlte/jquery/dist/jquery.min.js"></script>

<input type="hidden" name="route" value="{{url('/')}}">