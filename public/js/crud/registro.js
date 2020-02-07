var route = document.querySelector("[name=route]").value;
var urlregistro = route + '/apiRegistro';


new Vue({
	

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getRegistro();
	},


    el:'#registro',
	data:{
		hola:'hola mundo',
		registro:[],
		nick:'',
		password:'',	
		nombre:'',
		apellidos:'',
		id_rol:'1',
		active:'1',
		curp:'',
		curp:'',
		edad:'',
		cpostal:'',
		correo:'',
		celular:''
	},

	methods:{

		getRegistro:function(){
			this.$http.get(urlregistro)
			.then(function(json){
				this.registro=json.data;

			});
		},

		// eliminar:function(id){

		// 	var resp=confirm("¿estas seguro de eliminar")
		// 	if(resp==true)
		// 	{
		// 		this.$http.delete('http://localhost/NuevoProyectoJrt/public/apiInicio/' + id)
		// 		.then(function(json){
		// 		this.getInicio();
		// 		});
		// 	}

		// },

		agregarRegistro:function()
		{
			
			// construir un objeto que necesitamos por el api
			var registro={nick:this.nick,
				password:this.password,
				nombre:this.nombre,
				apellidos:this.apellidos,
				id_rol:this.id_rol,
				active:this.active,
				curp:this.curp,
				edad:this.edad,
				cpostal:this.cpostal,
				correo:this.correo,
				celular:this.celular
			    }
				// para un metodo store se necesita un post
				this.$http.post(urlregistro,registro)
				.then(function(json){
					this.getRegistro();
					this.limpiar();
				});
		},

		showInicio:function(id){
			this.$http.get(urlregistro+ '/' + id)
			.then(function(json){
				this.nick=json.data.nick;
				this.password=json.data.password;
				this.nombre=json.data.nombre;
				this.apellidos=json.data.apellidos;
				this.id_rol=json.data.id_rol;
				this.active=json.data.active;
				this.curp=json.data.curp;
				this.edad=json.data.edad;
				this.cpostal=json.data.cpostal;
				this.correo=json.data.correo;
				this.celular=json.data.celular;
			});
		},

		updateRegistro:function(id){
			//crear un json
			var registro={
				nick:this.nick,
				password:this.password,
				nombre:this.nombre,
				apellidos:this.apellidos,
				id_rol:this.id_rol,
				active:this.active,
				curp:this.curp,
				edad:this.edad,
				cpostal:this.cpostal,
				correo:this.correo,
				celular:this.celular
				}

			this.$http.patch(urlregistro+ '/' + id,registro)
				.then(function(json){
					this.getRegistro();
					this.limpiar();
			});
		},


		limpiar:function(){
            this.nick='';
			this.password='';
			this.nombre='';
			this.apellidos='';
			this.id_rol='1';
			this.active='1';
			this.curp='';
			this.edad='';
			this.cpostal='';
			this.correo='';
			this.celular='';
		}
	},


})
