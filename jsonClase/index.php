<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vue</title>
	<script src="https://unpkg.com/vue@3"></script>
</head>
<body>

	<div id="contenedor">
		<form>
			<fieldset>
				<legend>
					Acceso al panel
				</legend>

				<label>
					Correo electronico
				</label>
				<input type="email" v-model='email'>

				<label>
					Password
				</label>
				<input type="password" v-model='password'>

				<button @onclick='login'>
					Acceder
				</button>
			</fieldset>
		</form>
		
	</div>

	<script type="users.json">
		
	</script>

	
	<script type="text/javascript">

		const { createApp } = Vue;
		const data = null;
		const error = null;

		

		const app = createApp({
			data(){
				return{
					users:null,
					email:'',
					password:''
			}
		},

		methods:{
			login(e){
				e.preventDefault();

				var email_user = this.email
				var passsword_user = this.password

				var access = this.users.map(function(u){
					if(passsword_user === u.email.toLowerCase()){
						if(this.password === u.password){
							alert("Acceso correcto")
						}
					}
					alert("Acceso denegado")
				})

				console.log(access)
			}

			},

			mounted(){
				fetch('users.json')
				.then((res) => res.json())
				.then((json) => (this.users = json))
				.catch((err) => (console.log(err)))

			}

		}).mount('#contenedor');


	</script>

</body>
</html>