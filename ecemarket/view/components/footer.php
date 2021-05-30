<?php
require_once(__DIR__ . '/../../controller/navigation.php');
Navigation::init_navigation();
?>

<footer class="page-footer font-small elegant-color bg-dark">
    <div class="color-primary">
        <div class="container">
            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Connectez-vous avec nous sur les réseaux sociaux !</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">
        <!-- Grid row -->
        <div class="row mt-1 mt-md-0 mb-4 mb-md-0">
            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">
                <!-- Links -->
                <h5>About us</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60"/>

                <p class="foot-desc mb-0">Groupe : Mattéo - Amaury - Arnaud</p>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none"/>

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">
                <!-- Links -->
                <h5>Bibliographie</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60"/>

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="#!">Bootstrap</a>
                    </li>
                    <br>
                    <li class="mb-2">
                        <a href="#!">JQuery</a>
                    </li>
                    <br>
                    <li class="mb-2">
                        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql">Openclassrooms</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none"/>

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">
                <!-- Links -->
                <h5>Useful links</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60"/>

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="<?= Navigation::sign_in_page() ?>">Votre compte</a>
                    </li>
                    <br>
                    <li class="mb-2">
                        <a href="#">Devenir Vendeur</a>
                    </li>
                    <br>
                    <li class="mb-2">
                        <a href="#">Aide</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none"/>

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">
                <!-- Links -->
                <h5>Contacts</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60"/>

                <ul class="fa-ul foot-desc ml-4">
                    <li class="mb-2">
                        <span class="fa-li"><i class="far fa-map"></i></span>37 Quai de Grenelle, 75015 Paris
                    </li>
                    <li class="mb-2">
                        <span class="fa-li"><i class="fas fa-phone-alt"></i></span> 01 44 39 06 00
                    </li>
                    <li class="mb-2">
                        <span class="fa-li"><i class="far fa-envelope"></i></span>EceParis@inseec.com
                    </li>
                    <li>
                        <span class="fa-li"><i class="far fa-clock"></i></span>Lundi - Vendredi: 8h00-17h00
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright: EceMarket.com</div>
    <!-- Copyright -->
</footer>