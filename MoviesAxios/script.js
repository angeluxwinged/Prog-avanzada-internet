		const { createApp } = Vue;


		const app = createApp({
			data(){
				return{
					user:'',
					password:'',
					info:null,
					valueRate:"",
					loged: localStorage.getItem('user')
			}
		},

		methods:{
			login(e){
				e.preventDefault();
				
				var user = this.user;
				var data = new FormData();
				data.append('username', this.user);
				data.append('password', this.password);
				data.append('request_token', '');

				var config = {
				  method: 'post',
				  url: 'https://api.themoviedb.org/3//authentication/token/validate_with_login?api_key=8ce397e64bbdbc85b79c527dd05aa41a',
				  headers: { 
				    // ...data.getHeaders()
				  },
				  data : data
				};

				axios(config)
				.then(function (response) {
				  if(response.data.success){
				  	localStorage.setItem('user', user);
				  	window.location.href="movies.php";
				  }
				})
				.catch(function (error) {
				  alert("Datos incorrectos")
				});
			},

			rate(m){
				var valueRate = this.valueRate;

				this.info.forEach(function(e){
				if(e.id == m){
				var id = e.id;
				var data = new FormData();
				data.append('session_id', '820d34880ee7c7980d23bdb08b9f036fe518a067');
				data.append('value', valueRate);

				var config = {
				  method: 'post',
				  url: 'https://api.themoviedb.org/3/movie/'+id+'/rating?api_key=8ce397e64bbdbc85b79c527dd05aa41a',
				  headers: { 
				    // ...data.getHeaders()
				  },
				  data : data
				};

				axios(config)
				.then(function (response) {
				  console.log(JSON.stringify(response.data));
				  alert("Tu calificacion se ha enviado")
				})
				.catch(function (error) {
				  console.log(error);
				  alert("Ingrese una calificacion valida")
				});

			}
			});
			},

			remove(m){

				this.info.forEach(function(e){
				if(e.id == m){
				var id = e.id;
				var data = new FormData();
				data.append('session_id', '820d34880ee7c7980d23bdb08b9f036fe518a067');

				var config = {
				  method: 'delete',
				  url: 'https://api.themoviedb.org/3/movie/'+id+'/rating?api_key=8ce397e64bbdbc85b79c527dd05aa41a',
				  headers: { 
				    // ...data.getHeaders()
				  },
				  data : data
				};

				axios(config)
				.then(function (response) {
				  console.log(JSON.stringify(response.data));
				  alert("Tu calificacion se ha eliminado")
				})
				.catch(function (error) {
				  console.log(error);
				  alert("Error al eliminar")
				});
				}

			});
			},

			logedOff(){
				localStorage.removeItem('user');
				window.location.href="index.php";
			}

			},



			created(){
			var config = {
			  method: 'get',
			  url: 'https://api.themoviedb.org/3/movie/popular/?api_key=8ce397e64bbdbc85b79c527dd05aa41a',
			  headers: { }
			};

			axios(config)
			.then(response => {(this.info = response.data.results)})
			
			}

		}).mount('#contenedor');


	