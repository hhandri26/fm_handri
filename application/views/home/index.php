<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>Template Framework Handri</title>
        <link rel="shortcut icon" href="assets/img/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
        <link rel="apple-touch-icon-precomposed" href="">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>assets/home/fonts/iconfont/material-icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/flexSlider/flexslider.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/materialize/css/materialize.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/css/shortcodes/shortcodes.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/css/skins/seo.css" rel="stylesheet">
         <link href="<?php echo base_url();?>assets/home/css/animate.min.css" rel="stylesheet">
        <!-- owl carusael -->
        <link href="<?php echo base_url();?>assets/home/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/home/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">

         <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/revolution/css/navigation.css">
    </head>

    <body id="top" class="has-header-search">
        <div class="top-bar dark-bg lighten-2 visible-md visible-lg">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>

              <div class="col-md-5 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>Handrisaeputra@gmail.com</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i> 0818 0878 4785</a>
                  </li>
                </ul>
              </div>
               <div class="col-md-2 text-right">
                <ul class="topbar-cta no-margin">
                  <li>
                    <a href="<?= base_url('login')?>">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <header id="header" class="tt-nav">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div class="search-wrapper">
                        <div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>

                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form action="#" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="search" id="search">
                                    <label for="search" class="">Search Here...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>
                                
                            </form>
                        </div>
                    </div>
                    <div id="materialize-menu" class="menuzord">
                        <a href="index.html" class="logo-brand">
                            <img src="assets/img/seo/logo.png" alt="" >
                        </a>
                        
                        <ul class="menuzord-menu pull-right">
                            <li class="active"><a href="seo-index.html">Home</a></li>
                            <li><a href="seo-about-us.html">About Us</a></li>
                            <li><a href="seo-services.html">Services</a></li>
                            <li><a href="seo-casestudies.html">Case Studies</a></li>
                            <li><a href="seo-contact.html">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </header>
        
       <?php $this->load->view($content); ?>


        <section class="section-padding">
          
          <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">Hubungi Kami</h2>
              </div>

            <div class="row">
                <div class="col-md-8">
                    <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="name" class="validate" id="name">
                            <label for="name">Name</label>
                          </div>

                        </div>

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">Phone Number</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="website" type="text" name="website" class="validate" >
                            <label for="website">Your Website</label>
                          </div>
                        </div>
                      </div>

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                      </div>

                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
                    </form>
                </div>

                <div class="col-md-4 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103

                        <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                        United States of America.</p>
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Fax: (123) 456-7890<br>
                        Phone: (123) 456-7890</p>
                      </div>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">first.last@example.com</a><br>
                        <a href="#">www.yourdomain.com</a></p>
                      </div>
                    </address>

                </div>
            </div>
          </div>
        </section>
       


        <!--footer 4 start -->
        <footer class="footer footer-four">
            <div class="primary-footer brand-bg text-center">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                  <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>

                  <hr class="mt-15">

                  <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                           <img src="assets/img/logo-white.png" alt="">
                        </div>

                         <span class="copy-text">Copyright &copy; 2018 
                            <a href="#">Handri</a> &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp;  Designed By 
                            <a href="#">Handri</a>
                        </span>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->
        </footer>
        <!--footer 4 end-->

        
        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="<?php echo base_url();?>assets/home/img/logo-colored.png" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/home/js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/materialize/js/materialize.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/menuzord.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.sticky.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/smoothscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.stellar.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/imagesloaded.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.inview.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/jquery.shuffle.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/flexSlider/jquery.flexslider-min.js"></script>
        <script src="<?php echo base_url();?>assets/home/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/js/scripts.js"></script>
         <script src="<?php echo base_url();?>assets/home/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url();?>assets/home/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- RS5.0 Init  -->
         <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullwidth",
                    delay:9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "gyges",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,768,480],
                    gridwidth:[1170,1024,768,480],
                    gridheight:[700,600,500,500],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }
                });
            });
        </script>

       


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/home/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script  type="text/javascript" src="<?php echo base_url();?>assets/home/js/wow.min.js"></script>
         <script>
            new WOW({
                mobile:  false
            }).init();
        </script>
    </body>
  
</html>