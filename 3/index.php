<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Canvas
	</title>

	<style type="text/css">
		canvas{
		}

	</style>
</head>


<body>
	<canvas id="canvas" width="500" height="500">
		Error de navegador
	</canvas>

	<!-- <img id="imagen" src="imagen.jpg" style="display: none;"> -->

	<script type="text/javascript">
		
		var cv = document.getElementById('canvas');
		var ctx = cv.getContext('2d');
		var fig = "arc";
		var press = false;
		var superX = 0;
		var superY = 0;
		


		//gradiantes
		// let = gdr = ctx.createLinearGradient(0,0,230,0);
		// gdr.addColorStop(0,"red");
		// gdr.addColorStop(1,"blue");

		// ctx.fillStyle = gdr;
		// ctx.fillRect(50,50,160,80);

		//
		// let = gdr = ctx.createRadialGradient(85,70,8,90,60,250);
		// gdr.addColorStop(0,"purple");
		// gdr.addColorStop(0.7,"green");
		// gdr.addColorStop(1,"blue");

		// ctx.fillStyle = gdr;
		// ctx.fillRect(0,0,200,200);

		// var image = document.getElementById('imagen');
		// ctx.drawImage(image,10,10);


		// Pintar figuras
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



		// cv.addEventListener("mousedown", function(e){
		// 	press = true;
			
		// });

		// cv.addEventListener("mouseup", function(e){
		// 	press = false;
			
		// });

		document.addEventListener("keydown", function(e){

			//arriba
			if(e.keyCode == 87 || e.keyCode == 38){
				superY += 5;
			}
			
			//abajo
			if(e.keyCode == 83 || e.keyCode == 40){
				superY -= 5;
			}

			//izquierda
			if(e.keyCode == 65 || e.keyCode == 37){
				superX += 5;
			}

			//derecha
			if(e.keyCode == 68 || e.keyCode == 39){
				superX -= 5;
			}
			paint();
		});

		function paint(){
			ctx.fillStyle = "blue";
			ctx.fillRect(superX,superY,20,20);
		}






		// 	function generateRandomColor() {
 	// 	var letters = '0123456789ABCDEF';
  // 		var color = '#';
  // 		for (var i = 0; i < 6; i++) {
  //   	color += letters[Math.floor(Math.random() * 16)];
  // 		}
  // 		return color;
		// }

		






	</script>
</body>
</html>