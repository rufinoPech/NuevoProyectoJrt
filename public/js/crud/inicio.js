// var urlinicio='http://localhost/NuevoProyectoJrt/public/apiInicio';

var route = document.querySelector("[name=route]").value;
var urlinicio = route + '/apiInicio';


new Vue({
	el:'#inicio',

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getInicio();
	},

	data:{
		nombres:'hola mundo',
		inicio:[],
		id_inicio:0,
		cantidad:0,	

		tot:0,
		cantidades:[],
	},

	methods:{

		getInicio:function(){
			this.$http.get(urlinicio)
			.then(function(json){
				this.inicio=json.data;

			});
		},

		eliminar:function(id){

			var resp=confirm("¿estas seguro de eliminar")
			if(resp==true)
			{
				this.$http.delete('http://localhost/NuevoProyectoJrt/public/apiInicio/' + id)
				.then(function(json){
				this.getInicio();
				});
			}

		},

		agregarInicio:function()
		{
			
			// construir un objeto que necesitamos por el api
			var inicio={id_inicio:this.id_inicio,
				cantidad:this.cantidad
			    }
				// para un metodo store se necesita un post
				this.$http.post(urlinicio,inicio)
				.then(function(json){
					this.getInicio();
					this.limpiar();
				});
		},

		showInicio:function(id){
			this.$http.get(urlinicio+ '/' + id)
			.then(function(json){
				this.id_inicio=json.data.id_inicio;
				this.cantidad=json.data.cantidad;


			});
		},

		updateInicio:function(id){
			//crear un json
			var inicio={cantidad:this.cantidad,
				    id_inicio:this.id_inicio
				}

			this.$http.patch(urlinicio+ '/' + id,inicio)
				.then(function(json){
					this.getInicio();
					this.limpiar();
			});
		},


		limpiar:function(){
            this.id_inicio=0;
			this.cantidad='';
		}
	},

	computed:{
		// total:function(){
		// 	var suma=0;
		// 	for (var i =0;i<this.cantidad.length;i++){
		// 		suma=suma + (this.cantidad[i]+this.cantidad[i].cantidad);
		// 	}
		// 	this.tot=suma;
		// 	return suma;

		// }

	}


})
