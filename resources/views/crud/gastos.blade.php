@extends('layouts.master')
@section('contenido')
<br>
<center>
	<h1>Controla todos tus gastos</h1>
</center>


<div id="gastos">
	<div class="container">
		<br>
		<br>
    <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#agregar">Agregar</button>
    <br>
    <br>
		
		
		<table class="table table-hover">
            <thead>
              <th class="warning">Id</th>
              <th class="warning">concepto</th>
              <th class="warning">cantidad</th>
              <th class="warning"><center>ingrese un tipo de ingreso $</center></th>
              <th class="warning">detalles</th>
              <th class="warning">fecha</th>
              <th class="warning">hora</th>
              <th class="warning">Opciones</th>
             
            </thead>
            <tbody>
              <tr v-for="v in gastos">
                <td class="success">@{{v.id_gasto}}</td>
                <td class="success">@{{v.concepto}}</td>
                <td class="success">@{{v.cantidad}}</td>
                <td class="success"><center>@{{v.tipo_pago}}</td>
                <td class="success">@{{v.detalle}}</td>
                <td class="success">@{{v.fecha}}</td>
                <td class="success">@{{v.hora}}</td>
                <td class="success">
                  <span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarvendedor" v-on:click="showGastos(v.id_gasto)"></span>
                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminar(v.id_gasto)"></span>
                </td>
              </tr>
            </tbody>
          </table>



          
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Nuevo Concepto</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Concepto</label>
          <input type="text" name="concepto" placeholder="Gasto" disabled="" class="form-control" v-model="concepto">
          <br>
          <label>Catidad</label>
          <br>
          <input type="number" name="cantidad" placeholder="ingrese una catidad" class="form-control" v-model="cantidad"><br>
          <br>
          <label>Tipo de ingreso</label>
          <input type="text" name="tipo_pago" placeholder="ingrese un tipo de ingreso $" class="form-control" v-model="tipo_pago"><br>
          <label>Detalle</label>
          <input type="text" name="detalle" placeholder="ingrese un detalle sobre el concepto" class="form-control" v-model="detalle"><br>
          <br>
          <label>Fecha</label>
          <input type="date" name="fecha" placeholder="fecha" class="form-control" v-model="fecha"><br>
          br>
          <label>Hora</label>
          <input type="time" name="hora" placeholder="hora" class="form-control" v-model="hora"><br>


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarGastos(id_gasto)">Guardar cambios</button>
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
        <h5 class="modal-title" id="exampleModalLabel"><strong>Editar ingreso</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>id</label>
          <input type="text" disabled="" name="id_gasto" class="form-control" v-model="id_gasto" placeholder="id">
          <br>
          <label>Concepto</label>
          <input type="text" disabled="" name="concepto" class="form-control" v-model="concepto"><br>
          <br>
          <label>Tipo de ingreso</label>
          <input type="text" name="tipo_pago" placeholder="ingrese un tipo de ingreso $" class="form-control" v-model="tipo_pago"><br>
          <label>Detalle</label>
          <input type="text" name="detalle" placeholder="Ingrese un detalle sobre el concepto" class="form-control" v-model="detalle"><br>
          <label>Fecha</label>
          <input type="date" name="fecha" class="form-control" v-model="fecha"><br>
          <label>Hora</label>
          <input type="time" name="hora"  class="form-control" v-model="hora"><br>


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="updateGastos(id_gasto)">Guardar cambios</button>
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
	<script src="js/crud/gastos.js"></script>
@endpush

   <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="adminlte/jquery/dist/jquery.min.js"></script>

<input type="hidden" name="route" value="{{url('/')}}">
