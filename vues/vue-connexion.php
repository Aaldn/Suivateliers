<?php
    if (isset($_POST[ 'login' ])) {
        $login = $_POST[ 'login' ] ;
    } else {
        $login = '' ;
    }
?>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>

            <div class="col-lg-4">
                <form action="../controleurs/ctrl-connecter.php" method="POST">

                    <div class="mb-3 form-group">
                        <label class="col-form-label">Adresse mail</label>
                        <input type="email" class="form-control" name="adresseMail" value="<?php echo $login ; ?>" />

                    </div>

                    <div class="mb-3 form-group">
                        <label class="col-form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp" />
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
					
                    <p>
                        Pas encore membre ? <a href="vue-enrengistrement-client.php">S'enregistrer</a>
                    </p>

                </form>

                <?php if (isset($_GET[ 'echec' ])) { ?>
                <?php if ($_GET[ 'echec' ] == 1) { ?>
                <div class="alert alert-danger" role="alert">
                    Identifiants incorrects.
                </div>
                <?php } elseif ($_GET[ 'echec' ] == 0) { ?>
                <div class="alert alert-danger" role="alert">
                    Site momentanément indisponible.
                </div>
                <?php } ?>
                <?php } else { ?>

                <?php } ?>

                <?php  ?>
            </div>

            <div class="col-lg-4"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>