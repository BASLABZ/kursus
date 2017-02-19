<?php
session_start();
require_once('inc-db.php');
error_reporting(0);
if(empty($_SESSION['username'])){
  header('location: index.php');  
}else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>biodata</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!-- asli -->
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
    <!-- asli end -->

    <!-- Validasi start -->
    <link rel="stylesheet" href="plugin_validator/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="plugin_validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="plugin_validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugin_validator/js/bootstrapValidator.js"></script>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>  
    <!-- validasi end --> 

  </head>

  <body class="layout layout-header-fixed layout-sidebar-fixed">
    
    <!-- header -->
    <?php 
    include("header.php");
    ?>
    <!-- end of header -->
    <div class="layout-main">
      <!-- tempat sidebar -->
    <?php
    include("menu.php");
            if(isset($_GET['page']) && strlen($_GET['page']) > 0){
            $page=str_replace(".","/",$_GET['page']).".php";
                  }else {
            $page="modul/biodata/display.php";    
            }
            if(file_exists("modul/".$page)){
                  include("modul/".$page);    
            }else{
                  include("modul/biodata/display.php");   
    }
    ?>     
<!-- footer -->

  <div class="layout-footer">
    <div class="layout-footer-body">
      <small class="version">Version 1.0</small>
      <small class="copyright">2017 &copy; Dita By <a href="#">UTY</a></small>
    </div>
  </div>
  </div> 
<!--   <script src="assets/js/vendor.min.js"></script> 
  <script src="assets/js/elephant.min.js"></script> 
  <script src="assets/js/application.min.js"></script>
  <script src="assets/js/demo.min.js"></script>  
  <script src="assets/js/jquery-1.12.4.min"></script>
  <script src="assets/js/jquery.media.js"></script>  
 -->
 </body>
</html>
<?php
}
?>