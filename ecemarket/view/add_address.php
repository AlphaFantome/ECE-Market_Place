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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>

<body>
<?php include "components/navbar.php" ?>

<div class="container mt-5 mb-5">
    <!-- URL Breadcrumb Starts -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent ml-n3">
            <li class="breadcrumb-item"><a href="<?= Navigation::your_account_page() ?>">Votre Compte</a></li>
            <li class="breadcrumb-item"><a href="<?= Navigation::your_addresses_page() ?>">Vos Adresses</a></li>
            <li class="breadcrumb-item active text-danger" aria-current="page">New Address</li>
        </ol>
    </nav> <!-- URL Breadcrumb Ends -->

    <h3 class="font-weight-bold">Ajouter une nouvelle adresse</h3>
    <br>
    <!-- New Address Form Starts -->
    <form class="mx-auto font-weight-bold needs-validation" autocomplete="off" method="post"
          action="<?= Navigation::add_address_handler() ?>">
        <div class="form-group">
            <label for="country">Pays</label>
            <select class="form-control" id="country" name="country" required>
                <option value="France">France</option>
                <option value="United-States">USA</option>
                <option value="England">Angleterre</option>
                <option value="Algeria">Algérie</option>
                <option value="Italia">Italie</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="username">Nom</label>
            <input type="text" class="form-control" id="username" name="owner_name" placeholder="owner's name" required>
        </div>
        <br>
        <div class="form-group">
            <label for="mobileNumber">Téléphone</label>
            <input type="text" class="form-control" id="mobileNumber" name="mobile_number"
                   placeholder="+33 7.xx.xx.xx.xx" required>
            <small>
                Peut être utilisé pour aider à la livraison</small>
        </div>
        <br>
        <div class="form-group">
            <label for="state">Région</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Ile-de-France" required>
        </div>
        <br>
        <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="ville" required>
        </div>
        <br>
        <div class="form-group">
            <label for="zip">Code postal</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="code postal" required>
        </div>
        <br>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address" placeholder='adresse complète' required>
        </div>
        <br>
        <button type="submit" class="btn btn-warning shadow rounded">Ajouter adresse</button>
    </form>

</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>