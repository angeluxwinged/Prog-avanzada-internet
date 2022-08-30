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
		<h1 style="text-align: center;">
			{{ name }}
		</h1>
		<hr>

		<ol>
			<li v-for="item in chamacos">
				{{ item.name }} : <span>{{ item.role }}</span>
			</li>
		</ol>

		<h2>Lista de chamacos</h2>
		<input type="text" v-model="nombreChamaco" name="">
		<br><br>
		<input type="text" v-model="roleChamaco" name="">
		<br><br>
		<button @click="agregar">Agregar chamaco</button>	
		<hr>

		<h2>Suma</h2>
		<input type="text" v-model="num1" name="">
		<br><br>
		<input type="text" v-model="num2" name="">
		<br><br>
		<button @click="sumar">Sumar</button>
		Resultado: {{ result }}	
		<hr>
		
		
	</div>

	
	<script type="text/javascript">

		const { createApp } = Vue;

		const app = createApp({
			data(){
				return{
					name: 'Angel',
					chamacos: [
					{ name:'Iran', role:'backend' },
					{ name:'Duarte', role:'movil' }
					],
					nombreChamaco: '',
					roleChamaco: '',
					num1: "",
					num2: "",
					result: ""
			}
		},

		methods:{
				saludar(){
					alert('hola ' + this.name)
				},

				agregar(){
					this.chamacos.push({
							name: this.nombreChamaco, role: this.roleChamaco 
						})
				},

				sumar(){
					this.result = parseInt(this.num1) + parseInt(this.num2)
				}
			}
		}).mount('#contenedor');


	</script>

</body>
</html>