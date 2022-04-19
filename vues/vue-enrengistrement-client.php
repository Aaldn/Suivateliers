<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>SB Ateliers</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="vue-connexion.php">SB Atelier</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4"></div>

			<div class="col-lg-4">
				<form action="../controleurs/ctrl-enregistrer-client.php" method="POST">

					<div class="mb-3 form-group">
					</div>
					<b>Inscriptions</b>
					<div class="mb-3 form-group">
					</div>
					<label class="col-form-label">Civilité</label>
					<div class="mb-3 form-group">
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" type="radio" name="civilite" id="inlineCheckbox1" value="monsieur" />
							<label class="form-check-label">Madame</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" type="radio" name="civilite" id="inlineCheckbox2" value="madame" />
							<label class="form-check-label">Monsieur</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" class="form-check-input" type="radio" name="civilite" id="inlineCheckbox3" value="autres" checked />
							<label class="form-check-label">Autres...</label>
						</div>
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Nom</label>
						<input type="text" class="form-control" name="nom" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Prenom</label>
						<input type="text" class="form-control" name="prenom" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Date de naissance</label>
						<input type="date" class="form-control" name="dateNaissance" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Adresse mail</label>
						<input type="text" class="form-control" name="adresseMail" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Mot de passe</label>
						<input type="password" class="form-control" name="mdp" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Confirmer mot de passe</label>
						<input type="password" class="form-control" name="mdp2" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Adresse postale</label>
						<input type="text" class="form-control" name="adressePostale" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Code postal</label>
						<input type="text" class="form-control" name="codePostale" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Ville</label>
						<input type="text" class="form-control" name="ville" />
					</div>

					<div class="mb-3 form-group">
						<label class="col-form-label">Numéro de mobile</label>
						<input type="tel" class="form-control" name="numeroTelephone" />
					</div>

					<div class="mb-3">
						<button class="btn btn-primary" type="submit">Valider</button>
					</div>

				</form>



				<?php if (isset($_GET['echec'])) { ?>
					<?php if ($_GET['echec'] == 1) { ?>
						<div class="alert alert-danger" role="alert">
							Identifiants incorrects.
						</div>
					<?php } elseif ($_GET['echec'] == 0) { ?>
						<div class="alert alert-danger" role="alert">
							Site momentanément indisponible.
						</div>
					<?php } ?>
				<?php } ?>


			</div>

			<div class="col-lg-4"></div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>