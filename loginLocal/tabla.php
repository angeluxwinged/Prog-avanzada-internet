<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de usuarios</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="contenedor">
		<h1>Bienvenido {{ loged }}</h1>

		<div class="tabla">
			<h1>Tabla de usuarios</h1>
			<table>
			<tr>
				<th scope="col">Nombre</td>
				<th scope="col">Nombre de usuario</td>
				<th scope="col">Correo</td>
				<th scope="col">Direccion</td>
				<th scope="col">Ciudad</td>
			</tr>
	
			<tr v-for = "user in users">
				<td>{{ user.name }}</td>
				<td>{{ user.username }}</td>
				<td>{{ user.email }}</td>
				<td>{{ user.address.street }}</td>
				<td>{{ user.address.city }}</td>
			</tr>

		</table>
		</div>
		
		
	</div>

	<script src="https://unpkg.com/vue@3"></script>
	<script src="script.js"></script>
</body>
</html>