<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Login</title>

        <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
    <!-- end of favicon -->
    
    <!-- css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/css/elephant.min.css">
    <link rel="stylesheet" href="assets/css/application.min.css">
    <link rel="stylesheet" href="assets/css/demo.min.css">

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/lineicons/style.css">    

    <!-- Custom styles for this template -->
    <link href="assets/css/styleLogin.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

   
</head>
<body>
    <div id="login-page">
        <div class="container">

            <div class="form-login" >
                
                <h2 class="form-login-heading">
                    <img src="assets/img/login/logo_ugm.png" class="img-circle" align="right" width="20%" height="10%">
                    <left> Login Laboratorium Bioantropologi & Paleoantropologi</left>
                </h2>

                <CENTER style="">
                    <?php
                    error_reporting(0);
                    if($_GET['action']=='gagal'){
                        echo "<h2 style='color:red'>Login Gagal</h2>";
                    }
                    ?>
            <!--        Gagal -->
                </CENTER>

            <!-- Begin of Form -->


                <h4 class="form-login-heading"></h4>


                <div class="login-wrap">
                    
                    <form method="post" action="login_check.php">
                    <input type="text" class="form-control" id="username" name="frm_username" placeholder="type username"></br> 
                    <input type="password" class="form-control" id="password" name="frm_password" placeholder="type password">

                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="#myModal" data-target="#myModal"> Lupa Password?</a>

                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>

                    <div class="registration">
                        Anda belum memiliki akun member ? silahkan klik
                        <a href="#">
                            Daftar Member sekarang
                        </a>untuk bergabung bersama kami 
                    </div>

                    <div class="clearfix"></div>
                    </form>
                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Enter your e-mail address below to reset your password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-theme" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

            
            <!-- End of Form -->
            
            </div>      

        </div>
    </div>
      <!-- js placed at the end of the document so the pages load faster -->


  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/js/elephant.min.js"></script>
  <script src="assets/js/application.min.js"></script>
  <script src="assets/js/demo.min.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-83990101-1', 'auto');
    ga('send', 'pageview');
  </script>
  
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--BACKSTRETCH-->
  <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  <script>
  $.backstretch("assets/img/login/login-bg3.jpg", {speed: 500});
  </script>
  <!-- end of backstretch -->


</body>
</html>