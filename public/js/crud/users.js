// var route='http://localhost/NuevoProyectoJrt/public/';
// var urlUser=route+'apiUsuarios';

var route = document.querySelector("[name=route]").value;
var urlUser = route + '/apiUsuarios';



new Vue({

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	created:function(){
		this.getUsuario();
	},


	el:'#usuario',
	data:{
		saludo:'hola mundo',
		usuario:[],
		nick:'',
		password:'',
		nombre:'',
		apellidos:'',
		foto:'',
		preview:'',
		curp:'',
		edad:'',
		cpostal:'',
		correo:'',
		celular:''
		
	},

	methods:{

		getUsuario:function(){
			this.$http.get(urlUser)
			.then(function(json){
				this.usuario=json.data;

			});
		},

		eliminar:function(id){

			var resp=confirm("¿estas seguro de eliminar")
			if(resp==true)
			{
				this.$http.delete('http://localhost/NuevoProyectoJrt/public/apiUsuarios' + id)
				.then(function(json){
				this.getUsuario();
				});
			}

		},

		agregarUsuario:function()
		{
			// construir un objeto que necesitamos por el api
			var usuario={nick:this.nick,
				password:this.password,
				nombre:this.nombre,
				apellidos:this.apellidos,
				curp:this.curp,
				edad:this.edad,
			    cpostal:this.cpostal,
			    correo:this.correo,
			    celular:this.celular
			}
				// para un metodo store se necesita un post
				this.$http.post(urlUser,nick)
				.then(function(json){
					this.getUsuario();
					this.limpiar();
				});
		},

		showUsuario:function(id){
			this.$http.get(urlUser+ '/' + id)
			.then(function(json){
				this.nick=json.data.nick;
				this.password=json.data.password;
				this.nombre=json.data.nombre;
				this.apellidos=json.data.apellidos;
				this.curp=json.data.curp;
				this.direccion=json.data.direccion;
				this.edad=json.data.edad;
				this.cpostal=json.data.cpostal;
				this.correo=json.data.correo;
				this.celular=json.data.celular;


			});
		},

		updateUsuario:function(id){
			//crear un json
			var usuario={nick:this.nick,
					password:this.password,
					nombre:this.nombre,
					apellidos:this.apellidos,
					curp:this.curp,
					direccion:this.direccion,
				    edad:this.edad,
				    cpostal:this.cpostal,
				    correo:this.correo,
				    celular:this.celular
				}

			this.$http.patch(urlUser+ '/' + id,usuario)
				.then(function(json){
					this.getUsuario();
					this.limpiar();
			});
		},


		limpiar:function(){
            this.nick='';
			this.password='';
			this.nombre='';
			this.apellidos='';
			this.curp='';
			this.edad='';
			this.cpostal='';
			this.correo='';
			this.celular='';
		}
	}
	

});