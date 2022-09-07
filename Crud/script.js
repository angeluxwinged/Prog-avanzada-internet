
		const { createApp } = Vue;

		

		const app = createApp({
			data(){
				return{
					users: [],
					newUsers:[],
					email:'',
					password:'',
					loged: localStorage.getItem('Usuario'),
					formOn: false,
					tableOn: true,

					newNombre:'',
					newUser:'',
					newCorreo:'',
					newTelefono:'',
					newSitioWeb:''
			}
		},

		methods:{
			login(e){
				e.preventDefault();
				var email_user = this.email
				var passsword_user = this.password
				
				var access = this.users.map(function(u){
					if(email_user.toLowerCase() === u.email.toLowerCase()){
						if(passsword_user === u.password){
							window.location.href = 'tabla.php';
							localStorage.setItem('Usuario', email_user);
							
						}
					}
				})
				alert("Acceso denegado")
			},

			guardar(){
					this.users.push({
							name: this.newNombre, username: this.newUser, email: this.newCorreo, phone: this.newTelefono, website: this.newSitioWeb
						})
				this.formOn = false;
				this.tableOn = true;
			},

			agregar(){
				this.formOn = true;
				this.tableOn = false;
			},

			modificar(){
				this.formOn = true;
				this.tableOn = false;
			},

			eliminar(){

			}

			},

			mounted(){
				fetch('users.json')
				.then((res) => res.json())
				.then((json) => (this.users = json))
				.catch((err) => (console.log(err)))

				// if (localStorage.email) {
    //  			this.users = JSON.parse(localStorage.users);
    //  		}

			}

			// watch: {
	  //   		users(logUser) {
   //  	  			localStorage.users = JSON.stringify(logUser);
   //  			}
  	// 		}

		}).mount('#contenedor');


	