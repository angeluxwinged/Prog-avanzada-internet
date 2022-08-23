<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Canvas
	</title>
</head>


<body>
	<canvas id="myCanvas" width="500" height="500">
		Error de navegador
	</canvas>

	<!-- <img id="imagen" src="images/imagen.jpg" style="display: none;"> -->

	<script type="text/javascript">
		
		var cv = null;
		var ctx = null;

		var fig = 'arc';
		var color = 'red';
		var press = false;
		var superX = 0, superY = 0;

		function run(){
			cv = document.getElementById('myCanvas');
			ctx = cv.getContext('2d');

			paint();
		}

		function generateRandomColor() {
   			var o = Math.round, r = Math.random, s = 255;
   			return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
		}
		


		//gradiantes
		// var gdr = ctx.createLinearGradient(0,0,300,0);
		// gdr.addColorStop(0,"red");
		// gdr.addColorStop(0.5,"white");
		// gdr.addColorStop(1,"blue");

		// ctx.fillStyle = gdr;
		// ctx.fillRect(50,50,200,80);


		//lineas
		// ctx.moveTo(20,20);//coloca un punto inicial
		// ctx.lineTo(200,200);//mover el lapiz al punto
		// ctx.stroke();// dibuja el contorno


		//figura con lineas
		// ctx.moveTo(200, 20);
		// ctx.lineTo(250, 60);
		// ctx.lineTo(150, 60);
		// ctx.lineTo(200, 20);

		// ctx.fillStyle = 'red';
		// ctx.strokeStyle = 'blue';
		// ctx.stroke();
		// ctx.fill();


		//pintar imagen
		// var image = document.getElementById('imagen');
		// ctx.drawImage(image,20,20,300,300);


		//pintar figuras con clicks
		//console.log(e);
		// cv.addEventListener("click", function(e){
		// 	ctx.beginPath();
		// 	ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
		// 	ctx.stroke();
		// 	ctx.fill();

		// });

		// cv.addEventListener("mouseover", function(e){
		// 	ctx.fillStyle = generateRandomColor();

		// });


		//OTRA CLASE
		//mouseout pintar de circulo a cuadro
		// cv.addEventListener("mouseout", function(e){
		// 	fig = (fig=='arc')?'rec':'arc';
			
		// });

		// cv.addEventListener("mouseover", function(e){
		// 	color = generateRandomColor();
			
		// });

		// cv.addEventListener("click", function(e){
		// 	ctx.fillStyle = color;

		// 	if(fig=='arc'){
		// 		ctx.beginPath();
		// 		ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
		// 		ctx.stroke();
		// 		ctx.fill();
		// 	}else{
				
		// 		ctx.fillRect(e.offsetX-15, e.offsetY-15, 50, 50);
		// 		ctx.strokeRect(e.offsetX-15, e.offsetY-15, 50, 50);
		// 	}
			
		// });


		//mousemove mover y pintar
		// cv.addEventListener("mousemove", function(e){
		// 	ctx.fillStyle = 'black';
		// 	ctx.fillRect(e.offsetX-15, e.offsetY-15, 5, 5);

		// });


		//dibujar al precionar el mouse
		// cv.addEventListener("mousemove", function(e){
		// 	if(press){
		// 		ctx.fillStyle = 'black';
		// 		ctx.fillRect(e.offsetX-5, e.offsetY-5, 10, 10);
		// 	}
			
		// });

		// cv.addEventListener("mousedown", function(e){
		// 	press = true;
			
		// });

		// cv.addEventListener("mouseup", function(e){
		// 	press = false;
			
		// });


		//Dibujar con las flechas
		// cv.addEventListener("click", function(e){
		// 	ctx.fillStyle = generateRandomColor();
			

		// fig = (fig='arc')?'rec':'arc';

		// 	if(fig=='arc'){
		// 		ctx.beginPath();
		// 	ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
		// 	ctx.stroke();
		// 	ctx.fill();
		// 	}else{
		// 		ctx.fillRect(e.offsetX-15,e.offsetY-15,30,30);
		// 		ctx.strokeRect(e.offsetX-15,e.offsetY-15,30,30);
		// 	}

		// });

		// cv.addEventListener('mouseout',function(e){
		// 	fig = (fig=='arc')?'rec':'arc';

		// 	});

		// cv.addEventListener("mousemove", function(e){
		// 	console.log(e);
			
		// 	if(press){
		// 		ctx.fillStyle = "black";
		// 		ctx.fillRect(e.offsetX-5,e.offsetY-5,5,5);
		// 	}

		// });
		

		//Dibujar o mover cuadro con  las fechitas del teclado
		// document.addEventListener('keydown', function(e){

		// 	//arriba
		// 	if(e.keyCode == 87 || e.keyCode == 38){
		// 		superY -= 5;
		// 	}
			
		// 	//abajo
		// 	if(e.keyCode == 83 || e.keyCode == 40){
		// 		superY += 5;
		// 	}

		// 	//izquierda
		// 	if(e.keyCode == 65 || e.keyCode == 37){
		// 		superX -= 5;
		// 	}

		// 	//derecha
		// 	if(e.keyCode == 68 || e.keyCode == 39){
		// 		superX += 5;
		// 	}
		// });

		window.addEventListener('load',run,false);

		

		function paint(){
			window.requestAnimationFrame(paint);

			ctx.fillStyle = "black";
			ctx.fillRect(0,0,500,500);

			ctx.fillStyle = "blue";
			ctx.fillRect(superX,superY,20,20);
			ctx.strokeRect(superX,superY,20,20);

			superX+=5;
			if(superX>=500){
				superX=0;
			}
		};

		window.requestAnimationFrame = (function () {
    		return window.requestAnimationFrame ||
        	window.webkitRequestAnimationFrame ||
        	window.mozRequestAnimationFrame ||
        	function (callback) {
            window.setTimeout(callback, 17);
        };
		}());



	</script>
</body>
</html>