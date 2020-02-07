@extends('layouts.master')
@section('contenido')


<center>
	<h1>Bienvenido a el mejor control de gastos JRT </h1>
	<h1>Ingrese un valor de inicio</h1>
</center>
<br>
<br>
<div id="inicio">
    <div class="container">
	    <div class="row">
		    <div class="col-xs-12 col-md-12" >
		    <h3>
		    <label>Ingrese una cantidad de inicio</label>
		    </h3>
			<input type="number" placeholder="Ingrese una cantidad de inicio" class="form-control" name="cantidad" v-model="cantidad">
			<br>
 
			<!-- botones de agregar y cancelar -->
			<button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click=" limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click=" agregarInicio(id_inicio)">Guardar</button>	

           
            <!-- fin botones de agregar y cancelar -->
		     </div>
	    </div>
    </div>

    <br>
    <br>
        <div class="container">
	        <div class="row">
		        <div class="col-xs-10 col-md-10" >
                    <table class="table table-hover">
            <thead>
              <th class="warning">Id</th>
              <th class="warning">Cantidad</th>
              <th class="warning">Concepto</th>
              <th class="warning">Opciones</th>
             
            </thead>
            <tbody>
              <tr v-for="v in inicio">
                <td class="success">@{{v.id_inicio}}</td>
                <td class="success">@{{v.cantidad}}</td>
                <th class="success">Ingreso</th>
                <td class="success" > 
                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminar(v.id_inicio)"></span>
                </td>
              </tr>
            </tbody>
          </table>
			        <br>
		        </div>

		    </div>
        <h3>
          <p>Usted cuenta por el momento con: </p>
        </h3>

        <div class="col-xs-12 col-xs-6">
      <table class="table table-bordered">
        <tr>
          <th width="25%" style="background: #ffffcc">Total</th>
          <button class="btn btn-primary" v-on:click="total()">Resultado</button>
          <td><h1> $@{{total}}  </h1></td>
        </tr>
      </table>
        
	    </div>
    </div>
	


</div>




@endsection
@push('scripts')
	<script src="js/vue-resource.js"></script>
	<script src="js/crud/inicio.js"></script>
@endpush


   <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="adminlte/jquery/dist/jquery.min.js"></script>

<input type="hidden" name="route" value="{{url('/')}}">