@extends('layouts.master')
@section('titulo','VENDEDOR')
@section('contenido')

<div id="vendedoress">
	<div class="container">
		<br>
		<br>
		<button class="btn btn-block btn-success" data-toggle="modal" data-target="#agregar">Agregar</button>
		<br><br>
		
		<table class="table table-hover">
            <thead>
              <th class="warning">Id</th>
              <th class="warning">Nombres</th>
              <th class="warning">Apellido paterno</th>
              <th class="warning">Apellido materno</th>
              <th class="warning">Correo</th>
              <th class="warning">Celular</th>
              <th class="warning">Opciones</th>
             
            </thead>
            <tbody>
              <tr v-for="v in vendedores">
                <td class="success">@{{v.id_vendedor}}</td>
                <td class="success">@{{v.nombre}}</td>
                <td class="success">@{{v.appaterno}}</td>
                <td class="success">@{{v.apmaterno}}</td>
                <td class="success">@{{v.correo}}</td>
                <td class="success">@{{v.celular}}</td>
                <td class="success">
                  <span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarvendedor" v-on:click="showVendedor(v.id_vendedor)"></span>
                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminar(v.id_vendedor)"></span>
                </td>
              </tr>
            </tbody>
          </table>



          <!-- Modal Agregar -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Vendedores</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Nombres</label>
          <input type="text" name="nombre" class="form-control" v-model="nombre"><br>
          <label>Apellidos</label>
          <input type="text" name="appaterno" placeholder="Apellido peterno" v-model="appaterno" class="form-control">
          <br>
          <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br>
          <br>
          <label>Correo</label>
          <input type="text" name="correo" placeholder="Correo" class="form-control" v-model="correo"><br>
          <label>Celular</label>
          <input type="number" name="celular" placeholder="Celular" class="form-control" v-model="celular"><br>


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarVendedor(id_vendedor)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de modal -->

<!-- Modal Editar -->
<div class="modal fade" id="editarvendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Vendedor</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>id</label>
          <input type="text" disabled="" name="id_vendedor" class="form-control" v-model="id_vendedor" placeholder="id">
          <br>
          <label>Nombres</label>
          <input type="text" name="nombre" class="form-control" v-model="nombre"><br>
          <label>Apellidos</label>
          <input type="text" name="appaterno" placeholder="Apellido peterno" v-model="appaterno" class="form-control">
          <br>
          <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br>
          <br>
          <label>Correo</label>
          <input type="text" name="correo" placeholder="Correo" class="form-control" v-model="correo"><br>
          <label>Celular</label>
          <input type="number" name="celular" placeholder="Celular" class="form-control" v-model="celular"><br>


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="updateVendedor(id_vendedor)">Guardar cambios</button>
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
	<script src="js/crud/crudc.js"></script>
	
@endpush

<input type="hidden" name="route" value="{{url('/')}}">