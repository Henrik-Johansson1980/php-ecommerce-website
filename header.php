<?php 

    namespace mobileshop;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobile Shop</title>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Owl Carousel CDN -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <?php 
            require_once './functions.php';
        ?>

    </head>

    <body>
        <!-- Header Start -->
        <header id="site-header">
            <div class="strip d-flex justify-content-between padding px-4 py-1 bg-light">
                <p class="font-raleway font-size-12 text-black-50 m-0">John Doe 430-958 Storgatan 1 Gothenburg.</p>
                <div class="font-raleway font-size-14">
                    <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                    <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
                </div>
            </div>
            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
                <a class="navbar-brand" href="#">Mobile Shop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">On Sale <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-raleway">
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </nav>
            <!-- Primary Navigation -->
        </header><!--  Header End-->

        <!-- Main start -->
        <main id="site-main">
