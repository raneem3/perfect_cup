<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Prefect Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Prefect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>
<?php 
if(isset($_GET['logout'])){

    if($_GET['logout'] =="true"){ ?>
<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>You have been logged out of system.</strong></div>
<?php
    }
}

?>
<!--nav-->
<?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">The Prefect Cup</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Raneem</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

         

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">How To Make 
                        <strong>The Prefect Cup Of Coffee</strong>
                    </h2>
                    <hr>
                    <p>Making the perfect cup of coffee can be as complicated or as easy as you like. What you have to remember is it’s going to be perfect for your taste and your lifestyle.
                    That can mean elaborate equipment, grinders, and temperature controls. 
                    But tech junkie or coffee connoisseur, you can still make an amazing cup of coffee with a cone and filter if you just follow some simple guidelines.
    Use cold filtered water (if you don’t like drinking your home water, don’t make coffee with it)
    Measure your coffee- use 2 tablespoons of ground coffee for every 6 ounces of water (usually one cup on your brewer)
    Water temperature needs to be between 195 degrees –  205 degrees. If you boil water let it sit for 30 seconds before using it (water boils at 212 degrees which is a little too hot to brew coffee)
    Rinse your filter with hot water before brewing. Use a good quality oxygen bleached filter.
    Pour just enough water over the grounds (wet not saturated) to let them bloom (they get puffy). After 30-45 seconds continue the pour over. This will get the most flavor from your coffee.
    Drink your freshly brewed coffee within 30 minutes of brewing. Don’t let coffee sit in a brewer all day long. Make it as you need it.
</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Prefect Cup 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
