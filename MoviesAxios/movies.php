<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peliculas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="contenedor" class="contenedor">
		<h3>Bienvenido {{ loged }}</h3>
		<button @click="logedOff">Cerrar sesion</button><br><br>
		<div v-for = "i in info" class="tarjeta">Titulo: {{ i.title }}<br>
												Idioma: {{ i.original_language }}<br>
												Fecha de lanzamiento: {{ i.release_date }}<br><br>
												Trama: {{ i.overview }}<br><br>
												Deja una calificacion
												<input type="text" v-model="valueRate">
												<button @click="rate(i.id)">Calificar</button><br><br>
												<button @click="remove(i.id)">Eliminar mi calificacion</button>
												</div>
		
		
	</div>

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/vue@3"></script>
	<script src="script.js"></script>
</body>
</html>