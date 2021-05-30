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
    <h2>Bienvenue <span style="font-style:italic; color:orangered"><?= $account['name'] ?></span> - Compte Vendeur</h2>
    <br>
    <!-- Account Panel Starts -->
    <div class="row">
        <div class="col-md-4">
            <a href="<?= Navigation::your_account_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-door-open text-body"> &nbsp; Compte Acheteur</h5> <br>
                        <small class="text-muted">Retourner vers votre compte acheteur.</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="<?= Navigation::add_new_product_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-cart-plus text-body"> &nbsp; Vendre Un Produit</h5> <br>
                        <small class="text-muted">Ajouter un nouveau produit en vente.</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="<?= Navigation::product_list_page() ?>" class="w-100">
                <div class="card" style="box-shadow: 0 0 10px orangered;">
                    <div class="card-body">
                        <h5 class="card-title fas fa-2x fa-list-ol text-body"> &nbsp; Liste des Produits</h5> <br>
                        <small class="text-muted">Vos produits actuellement en vente.</small>
                    </div>
                </div>
            </a>
        </div>
    </div> <!-- Account Panel Starts -->
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>