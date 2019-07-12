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
        <!-- <div class="navbar-fixed"> -->
            <!-- main nav -->
            <nav class="transparent z-depth-0 pushpin-demo-nav">
                <div class="nav-wrapper">
                    <div class="row">
                        <div class="col s12">
                            <div class="nav-container">
                                <a href="#" class="brand-logo">We-Chef</a>
                                <a href="#" data-target="mobile-view" class="sidenav-trigger rounded w-12 show-on-large right tooltipped shadow-2xl" data-position="left" data-tooltip="Click me">
                                    <i class="large material-icons">menu</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end of main nav -->
            <!-- banner section -->
            <div id="banner">
                <div class="title md:items-center lg:items-start">
                    <h2>JUICY & HOT BURGERS</h2>
                    <span class="byline">And a true gastronomic experience!</span>
                </div> 
                <a class="min-w-0 rounded-bl-full rounded-tr-full btn-large shadow-2xl">BOOK A TABLE</a>
            </div> 
            <!-- end of banner section
            <!-- sidenav -->
            <ul class="sidenav" id="mobile-view">
                <li> <a href="#">Home</a></li>
                <li> <a href="#">Menu</a></li>
                <li> <a href="#">Book A Table</a></li>
                <li> <a href="#">About Us</a></li>
                <li> <a href="#">Contact Us</a></li>
            </ul>
            <!-- end of sidenav -->
        <!-- </div> -->
    </div>

    <div id="blue" class="block blue">
        <nav class="pushpin-demo-nav" data-target="blue">
            <div class="nav-wrapper light-blue">
            <div class="container">
                <a href="#" class="brand-logo">Blue</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#!">Blue Link 1</a></li>
                <li><a href="#!">Blue Link 2</a></li>
                <li><a href="#!">Blue Link 3</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    <div id="red" class="block red lighten-1">
        <nav class="pushpin-demo-nav" data-target="red">
            <div class="nav-wrapper red">
            <div class="container">
                <a href="#" class="brand-logo">Red</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#!">Red Link 1</a></li>
                <li><a href="#!">Red Link 2</a></li>
                <li><a href="#!">Red Link 3</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

    <div id="green" class="block green lighten-1">
        <nav class="pushpin-demo-nav" data-target="green">
            <div class="nav-wrapper green">
            <div class="container">
                <a href="#" class="brand-logo">Green</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#!">Green Link 1</a></li>
                <li><a href="#!">Green Link 2</a></li>
                <li><a href="#!">Green Link 3</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    <!-- banner section -->
    <!-- <div id="banner">
        <div class="title">
            <h2>Welcome to Ishmera Restaurant</h2>
            <span class="byline">Come and get a delicious and tasty meal.</span>
        </div> 
    </div> -->
    <!-- end of banner section -->
 
    <!-- <div class='box'>
    <div class='wave -one'></div>
    <div class='wave -two'></div>
    <div class='wave -three'></div>
    <div class='title'>Capacities</div>
    </div> -->

    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
</body>

    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>