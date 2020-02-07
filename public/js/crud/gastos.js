// var urlgastos='http://localhost/NuevoProyectoJrt/public/apiGastos';


var route = document.querySelector("[name=route]").value;
var urlgastos = route + '/apiGastos';

new Vue({
	el:'#gastos',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getGastos();
	},

	data:{
		nombres:'hola mundo',
		gastos:[],
		id_gasto:0,
		concepto:'gasto',
		cantidad:'',
		tipo_pago:'',
		detalle:'',
		fecha:'',
		hora:''

	},

	methods:{

		getGastos:function(){
			this.$http.get(urlgastos)
			.then(function(json){
				this.gastos=json.data;

			});
		},

		eliminar:function(id){

			var resp=confirm("¿estas seguro de eliminar")
			if(resp==true)
			{
				this.$http.delete('http://localhost/NuevoProyectoJrt/public/apiGastos/' + id)
				.then(function(json){
				this.getGastos();
				});
			}

		},

		agregarGastos:function()
		{
			// construir un objeto que necesitamos por el api
			var gastos={id_gasto:this.id_gasto,
				concepto:this.concepto,
				cantidad:this.cantidad,
				tipo_pago:this.tipo_pago,
				detalle:this.detalle,
				fecha:this.fecha,
			    hora:this.hora}
				// para un metodo store se necesita un post
				this.$http.post(urlgastos,gastos)
				.then(function(json){
					this.getGastos();
					this.limpiar();
				});
		},

		showGastos:function(id){
			this.$http.get(urlgastos+ '/' + id)
			.then(function(json){
				this.id_gasto=json.data.id_gasto;
				this.concepto=json.data.concepto;
				this.cantidad=json.data.cantidad;
				this.tipo_pago=json.data.tipo_pago;
				this.detalle=json.data.detalle;
				this.fecha=json.data.fecha;
				this.hora=json.data.hora;


			});
		},

		updateGastos:function(id){
			//crear un json
			var gastos={concepto:this.concepto,
					cantidad:this.cantidad,
					tipo_pago:this.tipo_pago,
					detalle:this.detalle,
					fecha:this.fecha,
				    hora:this.hora,
				    id_gasto:this.id_gasto
				}

			this.$http.patch(urlgastos+ '/' + id,gastos)
				.then(function(json){
					this.getGastos();
					this.limpiar();
			});
		},


		limpiar:function(){
            this.id_gasto=0;
			this.concepto='gasto';
			this.cantidad='';
			this.tipo_pago='';
			this.detalle='';
			this.fecha='';
			this.hora='';
		}
	}

})
