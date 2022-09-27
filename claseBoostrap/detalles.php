<!DOCTYPE html>
<html>
<head>
	<?php include"templates/head.php"; ?>
</head>

<style type="text/css">
	aside{
		height: 100vh;
	}

	.cocas{
		width: 180px;
	}

</style>

<body>

	<!-- navBar -->
	<?php include"templates/navBar.php"; ?>


	<!-- main container -->
	<div class="container-fluid">

		<!-- sideBar -->
		<?php include"templates/sideBar.php"; ?>

			<!-- center -->
			<div class="col-lg-10 col-sm-12">
				<div class="border-buttom">
					<div class="row m-2">
						<div class="col">
							<h4>Productos</h4>
							
						</div>
						<div class="col">
							<button class="btn btn-info float-end" data-toggle="modal" data-target="createProductModal">Anadir produtos</button>
						</div>
					</div>
				</div>
				<!-- card -->
				<div class="row">
						
						<div class="col-md-6 col-sm-10 p-2" id="card">
							
							<div class="card mb-1 cocas" >
							  <img src="images/coca.png" class="card-img-top img-fluid" alt="...">
							  <div class="card-body">
							    <h5 class="card-title text-center">
							    	Cocas
							    </h5>
    							<h6 class="card-subtitle mb-2 text-muted text-center">
    								Coquitas
    							</h6>
							    <p class="card-text">
							    	Some quick example text to build on the card title and make up the bulk of the card's content
							    </p>
							    <div class="row">
							    	<a href="#" class="btn btn-success col-6">
								    	Editar
								    </a>
								    <a href="#" class="btn btn-danger col-6" onclick="this">
								    	Eliminar
								    </a>
							    </div>
							  </div>
							</div>


						</div>

					</div>



			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<!-- debe estar 6 veces -->
<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createProductModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	function remove(target){
		swal({
  title: 'Auto close alert!',
  text: 'I will close in 2 seconds.',
  timer: 2000,
  showCancelButton: false,
  showConfirmButton: false
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      //console.log('I was closed by the timer')
    }
  }
)
	}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>