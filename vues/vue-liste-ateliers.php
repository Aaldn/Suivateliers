<?php session_start(); ?>


<?php

$ateliers = array();
$ateliers = $_POST['ateliers'];

try {

	$bd = new PDO(
		'mysql:host=localhost;dbname=sbateliers',
		'sanayabio',
		'sb2021'
	);

	$sql = 'select *'
		. 'from Atelier ';

	$st = $bd->prepare($sql);

	$st->execute();

	$ateliers = $st->fetchall();
	// var_dump($ateliers);

	unset($bd);
} catch (PDOException $e) {

	session_unset();
	session_destroy();

	header('Location: ../vues/vue-connexion.php?echec=0');
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Sb Ateliers - Listes Ateliers</title>
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
						<a class="nav-link" href="#"> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> </a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="#"><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../controleurs/ctrl-deconnecter.php">Se déconnecter...</a>
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
					<td>Numero</td>
					<td>dateHeureProgramme</td>
					<td>Theme</td>
					<td>Liste stagiaire</td>

				</tr>
			</thead>
			<tbody>

				<?php foreach ($ateliers as $atelier) { ?>
					<tr>
						<td><?php echo $atelier['numero']; ?></td>
						<td><?php echo $atelier['dateHeureProgramme']; ?></td>
						<td><?php echo $atelier['theme']; ?></td>
						<td><a class="btn btn-primary" href="<?php echo '../vues/vue-liste-stagiaires.php?atelier=' . $atelier['numero']; ?>"> Liste Stagiaire </a></td>
					</tr>
				<?php } ?>

			</tbody>

		</table>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>