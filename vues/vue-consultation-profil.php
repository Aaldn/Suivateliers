<?php session_start() ; ?>


<?php

	$clients = array() ;

	try {
		
		$bd = new PDO(
						'mysql:host=localhost;dbname=sbateliers' ,
						'sanayabio' ,
						'sb2021'
			) ;
			
		$sql = 'select *'
			 . 'from Clients ';
			 
		$st = $bd -> prepare( $sql ) ;
		
		$st -> execute();

		$clients = $st -> fetchall() ;
			
		unset( $bd ) ;
		
		
		
	}
	catch( PDOException $e ){
		
		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../vues/vue-connexion.php?echec=0' ) ;
	}


?>


<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Profil client</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	</head>

	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">SB Atelier</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="">Stock</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Nouveau</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Retrait</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Entrée</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Sortie</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid">
		
			<h4 class="alert alert-primary" role="alert">
				Ateliers
			</h4>
			
			<table class="table table-striped">
				<thead>
					<tr>
						<td>numero</td>
						<td>numeroResponsable</td>
						<td>dateEnregistrement</td>
                        <td>dateHeureProgramme</td>
                        <td>duree</td>
                        <td>nbPlace</td>
						<td>theme</td>

					</tr>
				</thead>
				<tbody>
					
					<?php foreach( $clients as $client ){ ?>
                        <?php foreach( $client as $clientInfo ){ ?>
						<tr>
							<td><?php echo $clientInfo ; ?></td>
						</tr>
                        <?php } ?>
					<?php } ?>
					
				</tbody>
				
			</table>
		
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	</body>

</html>
