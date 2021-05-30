<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once(__DIR__ . '/../controller/navigation.php');
Navigation::init_navigation();

$account = $_SESSION['account'];

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

<div class="container mt-5">
    <h2>Bienvenue <span style="font-style:italic; color:orangered"><?= $account['name'] ?></span></h2> <br>
    <!-- Account Panel Starts -->
    <div class="row">
        <div class="col-md-4">
            <a href="<?= Navigation::your_orders_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-shopping-bag text-body"> &nbsp; Vos commandes</h5> <br>
                        <small class="text-muted">
                            Suivre, retourner ou acheter à nouveau.</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="<?= Navigation::change_passowrd_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-key text-body"> &nbsp; Changement password</h5> <br>
                        <small class="text-muted">Changer votre mot de passe.</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="<?= Navigation::your_addresses_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-map-marked-alt text-body"> &nbsp; Vos adresses</h5> <br>
                        <small class="text-muted">Modifier les adresses pour vos commandes .</small>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- Account Panel Starts -->
    <br>
    <div class="row">
        <div class="col-md-4">
            <a href="<?= Navigation::your_account_seller_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-universal-access fa-2x text-body"> &nbsp; Compte vendeur</h5> <br>
                        <small class="text-muted">Vender vos produits.</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="<?= Navigation::log_off_handler() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-sign-out-alt fa-2x text-body"> &nbsp; Se deconnecter</h5> <br>
                        <small class="text-muted">Déconnectez-vous de votre compte .</small>
                    </div>
                </div>
            </a>
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>