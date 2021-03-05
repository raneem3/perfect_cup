<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact -The Prefect Cup</title>

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
 <!-- Bootstrap Core JavaScript -->
 <script src="js/bootstrap.min.js"></script>
 
<script type="text/javascript">
        $(document).ready(function () {

$("#contact").click(function () {

    firstName = $("#firstName").val();
    email = $("#email").val();
    message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "sendMessage.php",
        data: "firstName=" + firstName + "&email=" + email + "&message=" + message,
        success: function (html) {
            if (html == 'true') {

                $("#addMessage").html('<div class="alert alert-success"> \
                                     <strong>Message Sent!</strong> \ \
                                     </div>');

            } else if (html == 'firstName_long') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                     </div>');
            
            } else if (html == 'firstName_short') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>First Name</strong> must exceed 2 characters. \ \
                                     </div>');
                                     
            } else if (html == 'email_long') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Email</strong> must cannot exceed 50 characters. \ \
                                     </div>');
            
            } else if (html == 'email_short') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Email</strong> must exceed 2 characters. \ \
                                     </div>');
                                     
            } else if (html == 'eformat') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Email</strong> format incorrect. \ \
                                     </div>');
                                     
            } else if (html == 'message_long') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Message</strong> must cannot exceed 50 characters. \ \
                                     </div>');
            
            } else if (html == 'message_short') {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Message</strong> must exceed 2 characters. \ \
                                     </div>');


            } else {
                $("#addMessage").html('<div class="alert alert-danger"> \
                                     <strong>Error</strong> processing request. Please try again. \ \
                                     </div>');
            }
        },
        beforeSend: function () {
            $("#addMessage").html("loading...");
        }
    });
    return false;
});
});
    </script>

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
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Prefect Cup</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26436.088663479186!2d-118.34576462046616!3d34.08204545824017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2ssa!4v1612709000232!5m2!1sar!2ssa" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:info@ThePrefectCup.com">info@ThePrefectCup.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <div id="addMessage"></div>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input id="firstName" name="firstName" maxlength="25"
                                 type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input id="email" name="email" maxlength="25"
                                 type="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea id="message" name="message" maxlength="100"
                                 class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button id="contact" type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
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

</body>

</html>
