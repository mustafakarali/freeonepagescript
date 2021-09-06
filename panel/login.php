<?php require "../config.php"?>
<?php
    $loginCheck = true;
    if (isset($_POST["login"])){

        $username = clean("username","post");
        $password = md5(clean("password","post"));

        $query = $db->prepare("SELECT * FROM admin WHERE username = :username AND password = :password");
        $query->execute([
            "username" => $username,
            "password" => $password
        ]);

        if ($query->rowCount() > 0){
            $fetch = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION["login"] = true;
            $_SESSION["username"] = $fetch["username"];

            header("Location: index");
        }else{
            $loginCheck = false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="<?=ADMIN_ASSETS?>img/favicon.png" rel="icon">
  <link href="<?=ADMIN_ASSETS?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?=ADMIN_ASSETS?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?=ADMIN_ASSETS?>lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?=ADMIN_ASSETS?>css/style.css" rel="stylesheet">
  <link href="<?=ADMIN_ASSETS?>css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="Username" >
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password">

          <hr>
          <button class="btn btn-theme form-control btn-block mt-2" name="login" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?=ADMIN_ASSETS?>lib/jquery/jquery.min.js"></script>
  <script src="<?=ADMIN_ASSETS?>lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php if ($loginCheck == false){ ?>
      <script>
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Kullanıcı Adı veya Şifre Yanlış!!'
          })
      </script>
  <?php } ?>
  <script type="text/javascript" src="<?=ADMIN_ASSETS?>lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
