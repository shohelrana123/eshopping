<?php

    require './classes/application.php';
    $obj_app= new Application();
    
    require_once 'classes/checkout.php';
    $obj_checkout = new Checkout();
    
?>




<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Relax Shopping</title>
        <!--css-->
        <link href="assets/front_end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="assets/front_end/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/front_end/css/font-awesome.css" rel="stylesheet">
        <!--css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="assets/front_end/js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--search jQuery-->
        <script src="assets/front_end/js/main.js"></script>
        <!--search jQuery-->
        <script src="assets/front_end/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!--mycart-->
        <script type="text/javascript" src="assets/front_end/js/bootstrap-3.1.1.min.js"></script>
        <!-- cart -->
        <script src="assets/front_end/js/simpleCart.min.js"></script>
        <!-- cart -->
        <!--start-rate-->
        <script src="assets/front_end/js/jstarbox.js"></script>
        <link rel="stylesheet" href="assets/front_end/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.starbox').each(function () {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function (event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
        <!--//End-rate-->
    </head>
    <body>
        <!--header-->
        <?php include './includes/header.php'; ?>
        <!--header-->
        <!--banner-->
        <?php
        if (isset($pages)) {
            if ($pages == 'mail_content') {
                include './pages/mail_content.php';
            } else if ($pages == 'login_content') {
                include './pages/login_content.php';
            } else if ($pages == 'registration_content') {
                include './pages/registration_content.php';
            } else if ($pages == 'checkout_content') {
                include './pages/checkout_content.php';
            } else if ($pages == 'category_content') {
                include './pages/category_content.php';
            
            } else if ($pages == 'product') {
                include './pages/product_content.php';
            
            } else if ($pages == 'product_details') {
                include './pages/product_details_content.php';
            
            } else if ($pages == 'cart') {
                include './pages/cart_content.php';
            
            } else if ($pages == 'shipping') {
                include './pages/shipping_content.php';
            }
        } else {
            include './pages/home_content.php';
        }
        ?>
        <!--content-->
        <!---footer--->
        <?php include './includes/footer.php'; ?>

    </body>
</html>