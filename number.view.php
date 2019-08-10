<!DOCTYPE html>
<html>

	<head>
		<?php include('number.php') ?>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<br><br>
	</head>
	<body>
		<div class="container">
			<table class="table table-hover">
				<thead>
			    	<tr>
			      		<th scope="col" width="150"><img src="public/img/soviet.png" alt="Denislavia"></th>
			      		<th scope="col"><h2>¡Esto no es una democracia!</h2></th>
			    	</tr>
			  	</thead>
		  	</table>
			<br>
    		<div class="row justify-content-center">
        		<div class="col-md-8">
            		<div class="card">
                		<div class="card-header">Presupuesto de las Naciones</div>
               			<div class="card-body">
                        	<div class="alert alert-light" role="alert">El presupuesto total de las naciones soviéticas unidas es <?php echo $suma ?> rublos.</div>
                        	Exprópiese
                        </div>
                    </div>
                    <iframe src="public/audio/soviet.mp3" allow="autoplay" style="display:none" id="iframeAudio"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
	</body>
	<footer>
		

	</footer>

</html>







