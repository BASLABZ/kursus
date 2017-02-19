<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elearning Antropologi Forensik - Kursus antropologi forensik online">
    <meta name="keywords" content="antropologi, antropologi forensik, laboratorium antropologi forensik, antropologi learning">
    <meta name="author" content="@praditysaa">
    <title>Antropologi Forensik</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
  </head>
  <body id="home">

   <?php
	   error_reporting(0);
    include("header.php");
    if(isset($_GET['page']) && strlen($_GET['page']) > 0){
            $page=str_replace(".","/",$_GET['page']).".php";
           }else {
            $page="home.php";    
            }
            if(file_exists($page)){
            include($page);    
            }else{
            include("home.php");   
    }
    include("footer.php");
    ?>
    <!-- begin:copyright -->
    <section id="copyright" class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 copy-left">
            <p>Copyright &copy; 2016 <a href="#"><strong>Antropologi Learning</strong></a>. All Right Reserved.</p>
          </div><!-- .col-sm-6 -->
          <div class="col-sm-6 copy-right">
            <a href="#home" class="btn btn-theme link-to-top btn-rounded"><span class="pe-7s-angle-up"></span></a>
          </div><!-- .col-sm-6 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #copyright -->
    <!-- begin:copyright -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/parallax.min.js"></script>
    <script src="assets/js/navigation.js"></script>
    <script src="assets/plugins/jquery.easing.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>