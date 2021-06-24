<?php
    if(isset($_POST['pseudonyme']) && isset($_POST['motDePasse'])){
    setcookie('pseudonyme', $_POST['pseudonyme'], time() + 365*24*3600, null, null, false, true);
    setcookie('motDePasse', $_POST['motDePasse'], time() + 365*24*3600, null, null, false, true);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet07 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet07 Exercice05</h1>
            <h2 class="col-12 text-info text-center">Intialisez deux cookie : pseudo et login. 
            Créez deux champs afin de donner une valeur aux cookie. 
            Afficher ces cookie sur la même page.</h2>
        </div>
        <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" action="index.php">
                <p class="col-9 text-center text-light p-2 m-3">PSEUDO :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="pseudonyme" id="pseudonyme"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">MOT DE PASSE :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="password" name="motDePasse" id="motDePasse"/></p></p>
                <p class="text-center text-light p-2 m-3"><p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">ENVOYER LES DONNÉES !</button></p>
            </form>
            <div class="col-12 row justify-content-center bg-secondary rounded m-4">
             <?php 
                if(!empty($_POST['pseudonyme']) && !empty($_POST['pseudonyme']))
                    // echo 'Votre Pseudonyme est : '. $_POST['pseudonyme']. ' '. 'Votre mot de passe est : '. $_POST['motDePasse'];
                    // pour afficher les cookies avec la variable $_COOKIE il faut rafraîchir la page pour interroger le serveur
                    // sinon avec la méthode post les cookies seront visibles en console d'embléé
                    echo 'Votre Pseudonyme est : '. $_COOKIE['pseudonyme']. ' '. 'Votre mot de passe est : '. $_COOKIE['motDePasse'];
                else
                echo 'Veuillez  remplir les champs S.V.P. !';
            ?>
            </div>
        </div>
    </div>
</body>
</html>