<?php require "config.php"?>
<?php
    if (isset($_POST["send"])){
        $firstName = clean("name","post");
        $surname = clean("surname","post");
        $email = clean("email","post");
        $message = clean("message","post");
        $date = date("d.m.Y");

        $app = $db->prepare("INSERT INTO contacts SET first_name = :first,last_name = :last,email = :email,message = :message,date = :date");
        $on  = $app->execute([
            "first"  => $firstName,
            "last"   => $surname,
            "email"  => $email,
            "message"=> $message,
            "date"   => $date
        ]);

        if ($on){
            echo "<script>alert('İletişim Formu Gönderildi');</script>";
        }else{
            echo "<script>alert('İletişim Formu Gönderilirken Bir Hata Oluştu');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Space Dynamic - SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=FRONT_ASSETS?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?=FRONT_ASSETS?>assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="<?=FRONT_ASSETS?>assets/css/animated.css">
    <link rel="stylesheet" href="<?=FRONT_ASSETS?>assets/css/owl.css">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body style="background-color: #152e4d">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s"  >
    <div class="container" >
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index" class="logo">
              <h4><span><?=getValue('site_title')?></span></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" style="color:white">Home</a></li>
              <li class="scroll-to-section"><a href="#about" style="color:white">Hakkımızda</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">İletişim</a></div></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h2><em><?=getValue('top_title')?></em></h2>
                <p style="color: white"><?=getValue('top_article')?></p>
                  <div class="main-red-button"><a href="#contact"><?=getValue('button_text')?></a></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?=FRONT_ASSETS . getValue('top_image')?>" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?=FRONT_ASSETS . getValue('about_image')?>" alt="image">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="<?=FRONT_ASSETS?>assets/images/service-icon-02.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4><?=getValue('about_title_1')?></h4>
                    <p><?=getValue('about_article_1')?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="<?=FRONT_ASSETS?>assets/images/service-icon-02.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4><?=getValue('about_title_2')?></h4>
                      <p><?=getValue('about_article_2')?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="<?=FRONT_ASSETS?>assets/images/service-icon-02.png" alt="">
                  </div>
                    <div class="right-text">
                        <h4><?=getValue('about_title_3')?></h4>
                        <p><?=getValue('about_article_3')?></p>
                    </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="<?=FRONT_ASSETS?>assets/images/service-icon-02.png" alt="">
                  </div>
                    <div class="right-text">
                        <h4><?=getValue('about_title_4')?></h4>
                        <p><?=getValue('about_article_4')?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2><?=getValue('footer_title')?></h2>
            <p><?=getValue('footer_article')?></p>
            <div class="phone-info">
              <h4><?=getValue('contact_title_2')?><span><i class="fa fa-phone"></i> <a href="#"><?=getValue('contact_telephone')?></a></span></h4>
              <h4><?=getValue('contact_title_1')?><span><i class="fa fa-mail-forward"></i> <a href="#"><?=getValue('contact_mail')?></a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="İsim" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="surname" id="surname" placeholder="Soyisim" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-posta" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="send" id="form-submit" class="main-button ">Mesajı Gönder</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="<?=FRONT_ASSETS?>assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
            <p><?=getValue('copyright')?></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=FRONT_ASSETS?>assets/js/owl-carousel.js"></script>
  <script src="<?=FRONT_ASSETS?>assets/js/animation.js"></script>
  <script src="<?=FRONT_ASSETS?>assets/js/imagesloaded.js"></script>
  <script src="<?=FRONT_ASSETS?>assets/js/templatemo-custom.js"></script>

</body>
</html>