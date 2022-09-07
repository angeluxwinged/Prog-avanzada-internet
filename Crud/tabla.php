<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de usuarios</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="contenedor" class="contenedor">
		<h1>Bienvenido {{ loged }}</h1>

		<div>
			<button @click='agregar'>Agregar</button>
		</div>

		<div class="tabla" v-show='tableOn'>
			<h1>Tabla de usuarios</h1>
			<table>
			<tr>
				<th scope="col">Nombre</td>
				<th scope="col">Nombre de usuario</td>
				<th scope="col">Correo</td>
				<th scope="col">Telefono</td>
				<th scope="col">Sitio Web</td>
			</tr>
	
			<tr v-for = "user in users">
				<td>{{ user.name }}</td>
				<td>{{ user.username }}</td>
				<td>{{ user.email }}</td>
				<td>{{ user.phone }}</td>
				<td>{{ user.website }}</td>
				<td><button @click='modificar'>Modificar</button><button @click='eliminar'>Eliminar</button></td>
			</tr>
		</table>
		</div>

		<div v-show='formOn'>
		<br><br>
		<p>Nombre</p>
		<input type="text" v-model="newNombre" name="">
		<br><br>
		<p>Usuario</p>
		<input type="text" v-model="newUser" name="">
		<br><br>
		<p>Correo</p>
		<input type="text" v-model="newCorreo" name="">
		<br><br>
		<p>Telefono</p>
		<input type="text" v-model="newTelefono" name="">
		<br><br>
		<p>Sitio Web</p>
		<input type="text" v-model="newSitioWeb" name="">
		<br><br>
		<button @click="guardar">Guardar</button>	
		</div>
		
		
	</div>

	<script src="https://unpkg.com/vue@3"></script>
	<script src="script.js"></script>
</body>
</html>