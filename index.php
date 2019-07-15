<?php
?>

<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>
    
    <title>Homepage</title>
</head>
<body>

    <div class="header">
        <!-- main nav -->
        <?php require 'includes/templates/main_nav.php'; ?>
        <!-- end of main nav -->
        <!-- banner section -->
        <div id="banner">
            <div class="title md:items-center lg:items-start">
                <h2>JUICY & HOT BURGERS</h2>
                <span class="byline">And a true gastronomic experience!</span>
            </div> 
            <a class="min-w-0 rounded-bl-full rounded-tr-full btn-large shadow-2xl wow rubberBand" data-wow-delay="4s">BOOK A TABLE</a>
        </div> 
        <!-- end of banner section -->
        <!-- sidenav -->
        <?php require 'includes/templates/side_nav.php'; ?>
        <!-- end of sidenav -->
    </div>

    <!-- menu show case section -->
    <div id="menu_showcase" class="block">
        <div class="pushpin-demo-nav" data-target="menu_showcase">
            <div class="row">
                <div class="container">
                    <!-- image chunks -->
                    <div class="col s12 m6 sm:invisible">
                        <div class="row">
                            <div class="img_column m-5">
                                <div class="img_container items-center mx-56">
                                    <img class="wow fadeInDown" data-wow-delay="0.5s" src="public_files/images/dish1.png" alt="dish1">
                                    <img class="wow fadeInDown" data-wow-delay="1s" src="public_files/images/dish2.png" alt="dish2">
                                    <img class="wow fadeInDown" data-wow-delay="1.5s" src="public_files/images/dish3.png" alt="dish3">
                                    <img class="wow fadeInDown" data-wow-delay="2s" src="public_files/images/dish4.png" alt="dish4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tip section -->
                    <div class="col s12 m6">
                        <div class="tip-section mt-32 md:mr-48 lg:mr-48 ">
                            <div class="col s12 title">
                                <h2 class="col s12 text-left mb-4">EAT WHAT 
                                    <br/>TASTES RIGHT</h2>
                                <span class="text-left text-white text-2xl mt-4 wow bounceIn" data-wow-delay="1s">Pick our delicious burgers and we will bring  them to you! Yes, we deliver  24/7. </span>
                            </div> 
                            <a class="min-w-0 rounded-bl-full rounded-tr-full btn-large shadow-2xl wow rubberBand" data-wow-delay="5s" data-wow-delay="3s">OUR MENU</a>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div>
        </div>
    </div>
    <!-- end of menu showcase section -->

    <!-- trend section -->
    <div id="trend" class="block">
        <div class="pushpin-demo-nav" data-target="trend">
            <div class="row">
                <div class="col s12 m4 trend_one h-full cursor-pointer">
                    <h4 class="text-center text-3xl text-white pt-64">Classic Jollof</h4>
                </div>
                <div class="col s12 m4 trend_two h-full cursor-pointer">
                    <h4 class="text-center text-3xl text-white mt-64">Shawama</h4>
                </div>
                <div class="col s12 m4 trend_three h-full cursor-pointer">
                    <h4 class="text-center text-3xl text-white mt-64">Roasted Chickens</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end of trend section -->

    <div class="parallax-container h-full">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row">
                    <!-- banner section -->
                    <div id="banner">
                        <div class="title md:items-center lg:items-start">
                            <h4 class="text-3xl mb-4 text-white">FORGET ABOUT THE MYTHS AROUND FAST FOOD</h4>
                            <span class="text-2xl text-white">
                                We serve high quality burgers with no artificial ingredients. 
                                So next time you crave for some guilty indulgence, 
                                you know where to find a healthy alternative!
                            </span>
                        </div> 
                        <a class="min-w-0 rounded-bl-full rounded-tr-full btn-large shadow-2xl wow rubberBand" data-wow-delay="4s">About Us</a>
                    </div> 
                    <!-- end of banner section -->
                </div>
            </div>
        </div>
        <div class="parallax"><img src="public_files/images/beef-bread-bun.jpg"></div>
    </div>
    <!-- end of parallex image section -->    

    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
</body>

    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>