<?php 
  session_start();
?>
<?php if(empty($_COOKIE["ieUser"])){ ?>
        <script> location.replace("login.php"); </script>
        <?php } ?>
<!DOCTYPE html>
<html lang="FR">
        <?php include('header.php');   ?>
        <link rel="stylesheet" href="css/animation.scss" type="text/css" />
    <body>
        <?php include('topbar.php'); ?> 
        <?php include('navbar.php'); ?>
        
        <div class="home_animation">
            <h1>
                <span>I</span>
                <span>E</span>
                <span>L</span>
                <span>A</span>
                <span>B</span>
           </h1>
        </div>
    </body>
</html>