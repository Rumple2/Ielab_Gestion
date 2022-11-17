<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <LInk:favicon></LInk:favicon>

  <title>IELab System </title>
<?php
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

</head>
<style>
	body{
    width: 100%;
  }
  #center-panel{
    width: 80%;
    padding-top: 5%;
    margin-left: 20%;
  }
</style>

<body>
	<?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-body text-white">
      </div>
    </div>
    </div>
    <div id="center-panel">
  
      <?php 
      $page = 'home';
      if(empty($_COOKIE["ieUser"])){ ?>
       <script> location.replace("login.php"); </script>
      <?php 
       
      }
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }
        include("$page.php");
        
      ?>
      
    </div>
  
</body>
</html>