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

	<img id="imagen" src="imagen.jpg" style="display: none;">

	<script type="text/javascript">
		
		var cv = document.getElementById('canvas');
		var ctx = cv.getContext('2d');
		


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


		//Pintar figuras
		cv.addEventListener("click", function(e){
			ctx.beginPath();
			ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
			ctx.stroke();
			ctx.fill();
		});

		cv.addEventListener("mouseover", function(e){
			console.log(e);
			ctx.fillStyle = generateRandomColor();
			
		});

			function generateRandomColor() {
 		var letters = '0123456789ABCDEF';
  		var color = '#';
  		for (var i = 0; i < 6; i++) {
    	color += letters[Math.floor(Math.random() * 16)];
  		}
  		return color;
		}

		






	</script>
</body>
</html>