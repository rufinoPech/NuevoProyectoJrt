// var urlingresos='http://localhost/NuevoProyectoJrt/public/apiIngresos';

var route = document.querySelector("[name=route]").value;
var urlingresos = route + '/apiIngresos';


new Vue({
	el:'#rufino',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getIngreso();
	},

	data:{
		nombres:'hola mundo',
		ingresos:[],
		id_ingresos:0,
		concepto:'ingreso',
		cantidad:'',
		tipo_pago:'',
		detalle:'',
		fecha:'',
		hora:''

	},

	methods:{

		getIngreso:function(){
			this.$http.get(urlingresos)
			.then(function(json){
				this.ingresos=json.data;

			});
		},

		eliminar:function(id){

			var resp=confirm("¿estas seguro de eliminar")
			if(resp==true)
			{
				this.$http.delete('http://localhost/NuevoProyectoJrt/public/apiIngresos/' + id)
				.then(function(json){
				this.getIngreso();
				});
			}

		},

		agregarIngreso:function()
		{
			
			// construir un objeto que necesitamos por el api
			var ingresos={id_ingresos:this.id_ingresos,
				concepto:this.concepto,
				cantidad:this.cantidad,
				tipo_pago:this.tipo_pago,
				detalle:this.detalle,
				fecha:this.fecha,
			    hora:this.hora}
				// para un metodo store se necesita un post
				this.$http.post(urlingresos,ingresos)
				.then(function(json){
					this.getIngreso();
					this.limpiar();
				});
		},

		showIngreso:function(id){
			this.$http.get(urlingresos+ '/' + id)
			.then(function(json){
				this.id_ingresos=json.data.id_ingresos;
				this.concepto=json.data.concepto;
				this.cantidad=json.data.cantidad;
				this.tipo_pago=json.data.tipo_pago;
				this.detalle=json.data.detalle;
				this.fecha=json.data.fecha;
				this.hora=json.data.hora;


			});
		},

		updateIngreso:function(id){
			//crear un json
			var ingresos={concepto:this.concepto,
					cantidad:this.cantidad,
					tipo_pago:this.tipo_pago,
					detalle:this.detalle,
					fecha:this.fecha,
				    hora:this.hora,
				    id_ingresos:this.id_ingresos
				}

			this.$http.patch(urlingresos+ '/' + id,ingresos)
				.then(function(json){
					this.getIngreso();
					this.limpiar();
			});
		},


		limpiar:function(){
            this.id_ingresos=0;
			this.concepto='ingreso';
			this.cantidad='';
			this.tipo_pago='';
			this.detalle='';
			this.fecha='';
			this.hora='';
		}
	}

})
