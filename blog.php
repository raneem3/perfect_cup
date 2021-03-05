<?php
session_start();
if(isset($_SESSION['login'])){
$firstName= $_SESSION['firstName'];
$lastName= $_SESSION['lastName'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog The Prefect Cup</title>

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

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center"><?php echo $firstName; echo " "; echo $lastName;  ?>-
                <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Prefect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Latte
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>As the most popular coffee drink out there, the latte is comprised of a shot of espresso and steamed milk with just a touch of foam. It can be ordered plain or with a flavor shot of anything from vanilla to pumpkin spice.</p>
                    <button type="button" class="btn-btn-info btn-lg" data-toggle="modal"
                     data-target="#myModal">Read More</button>                   
                     <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Americano
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>With a similar flavor to black coffee, the americano consists of an espresso shot diluted in hot water. Pro tip: if you’re making your own, pour the espresso first, then add the hot water.</p>
                    <button type="button" class="btn-btn-info btn-lg" data-toggle="modal"
                     data-target="#myModal2">Read More</button>   
                     <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Espresso
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>An espresso shot can be served solo or used as the foundation of most coffee drinks, like lattes and macchiatos.</p>
                    <button type="button" class="btn-btn-info btn-lg" data-toggle="modal"
                     data-target="#myModal3">Read More</button>   
                     <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

        <!--Latte modal -->
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Latte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Coffee and milk have been part of European cuisine since the 17th century. Caffè e latte,
         Milchkaffee, café au lait and café con leche are domestic terms of traditional ways of drinking coffee,
         usually as part of breakfast in the home</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
   <!-- Americano modal -->
   <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Americano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Americanos—particularly short, long-black-style Americanos—are 
         used within artisanal espresso preparation for beans that produce strong espresso.</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
   <!-- Espresso modal -->
   <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Espresso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Espresso has more caffeine per unit volume than most coffee beverages, but because the usual 
        serving size is much smaller, the total caffeine content is less than a mug of standard brewed coffee.</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Prefect Cup</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}
else{
header("location:login.php");
}
?>
