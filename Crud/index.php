<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<input type="email" v-model="email">

				<label>
					Password
				</label>
				<input type="password" v-model="password">

				<button @click="login">
					Acceder
				</button>
			</fieldset>
		</form>
		
	</div>
	
	<script src="https://unpkg.com/vue@3"></script>
	<script src="script.js"></script>
</body>
</html>