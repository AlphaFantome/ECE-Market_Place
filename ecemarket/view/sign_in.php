<?php
require_once(__DIR__ . '/../controller/navigation.php');
Navigation::init_navigation();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Ece market</title>
    <link rel="stylesheet" href="static/style/site.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>

</head>

<body>
<?php include "components/navbar.php" ?>

<div class="container mb-5">
    <div class="card mx-auto mt-5 pb-3 shadow rounded" style="width: 25rem;">
        <div class="card-body">
            <h4 class="card-title">Login</h4> <br>
            <!-- Login Form Start -->
            <form method="post" action="<?= Navigation::login_handler() ?>">
                <div class="form-group">
                    <label for="userEmail">Email : </label>
                    <input type="email" name="email" class="form-control" placeholder="email@ecemarket.com"
                           id="userEmail" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted"><i class="fas text-primary fa-info"></i>
                        Ce champ restera privé et ne sera jamais partagé.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="userPassword">Mot de passe : </label>
                    <input type="password" class="form-control" placeholder="******" name="password" id="userPassword"
                           aria-describedby="passwordHelp" required minlength="6">
                    <small id="passwordHelp" class="form-text text-muted"><i class="fas text-primary fa-info"></i>
                        Le mot de passe doit contenir au moins de 6 caractères .</small>
                </div>
                <br>
                <button type="submit" class="btn btn-warning w-100 shadow btn-sm rounded">Se connecter</button>
            </form> <!-- Login Form Ends -->

            <div class="dropdown-divider mt-3"></div>


            <!-- Create account button -->
            <a href="<?= Navigation::register_page() ?>" class="btn btn-dark btn-sm w-100 mt-2">Créer un compte</a>
            <a href="#" class="btn btn-outline-success btn-sm w-100 mt-2">
                <i class="fab fa-google"></i> Se connecter avec Google
            </a>
            <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-2">
                <i class="fab fa-facebook-square"></i> Se connecter avec Facebook
            </a>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>