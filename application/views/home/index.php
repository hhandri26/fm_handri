
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
    <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
    <!-- title -->
      <title>Magzone - Responsive Html Template</title>
      <!-- site icon -->
      <link rel="icon" href="<?= base_url();?>assets/img/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- site css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/style.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/color1.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/bootstrap-select.css" />
      <!-- menumaker css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/menumaker.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/responsive.css" />
      <!-- slider link -->
      <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/megazone/css/main_slider.css" />
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/owl.carousel.css">
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/owl.theme.default.min.css">
      <script src="<?= base_url();?>assets/megazone/js/modernizr.custom.79639.js"></script>
      <!-- custom css -->
      <link rel="stylesheet" href="<?= base_url();?>assets/megazone/css/custom.css" />

      <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100,700,400italic,900' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <style type="text/css">
      .headerbottom {
         width: 100%;
         background: url('<?= base_url();?>assets/img/menu_bg.png');
         min-height: auto;
         background-position: center center;
         background-size: inherit;
      }

      .post.p_style_1 .post_time {
         width: 115px;
         position: relative;
         margin: 0 20px;
         display: flex;
         align-items: center;
         background-image: url('<?= base_url();?>assets/img/dass_boreder.png');
         background-repeat: repeat-y;
         background-position: center center;
      }

      .tab_bar ul li a.active {
         background-color: #333;
         background-image: url('<?= base_url();?>assets/img/menu_bg.png');
         color: #fff !important;
         background-size: cover;
      }

       .heading.h_style_2 h3 {
         font-size: 25px;
         font-weight: 600;
         line-height: 28px;
         padding: 15px 20px;
         border-left: none;
         letter-spacing: -0.5px;
         background: url('<?= base_url();?>assets/img/menu_bg.png');
         background-size: auto auto;
         color: #fff;
         background-size: cover;
      }

      .social_icon ul li a:hover {
         border-radius: 45px;
      }

      .social_icon ul li a.social_bt.fb {
         background: url('<?= base_url();?>assets/img/button_fb.png');
      }

      .social_icon ul li a.social_bt.tw {
         background: url('<?= base_url();?>assets/img/button_tw.png');
      }

      .social_icon ul li a.social_bt.gl {
         background: url('<?= base_url();?>assets/img/button_gl.png');
      }

      .social_icon ul li a.social_bt.ln {
         background: url('<?= base_url();?>assets/img/button_link.png');
      }

      .social_icon ul li a.social_bt.pi {
         background: url('<?= base_url();?>assets/img/button_pi.png');
      }

      .social_icon ul li a.social_bt.yt {
         background: url('<?= base_url();?>assets/img/button_yt.png');
      }

      .social_icon ul li a.social_bt.rss {
         background: url('<?= base_url();?>assets/img/button_rss.png');
      }

   </style>
   <body class="home">
      <!-- loader -->
      <div class="bg_load">
         <img class="loader_animation" src="<?= base_url();?>assets/img/loader.png" alt="#">
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <div class="headtop">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="newsection float-left">
                        <div class="newinfo">
                           <h3>Breaking News</h3>
                        </div>
                        <!-- news slider -->
                        <div id="newsslider" class="carousel vert slide" data-ride="carousel" data-interval="900">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <p>At vero eos et accusamus et iusto odio dignissimos..</p>
                              </div>
                              <div class="carousel-item">
                                 <p>On the other hand, we denounce with righteous..</p>
                              </div>
                              <div class="carousel-item">
                                 <p>At vero eos et accusamus et iusto odio dignissimos..</p>
                              </div>
                              <div class="carousel-item">
                                 <p>On the other hand, we denounce with righteous..</p>
                              </div>
                           </div>
                        </div>
                        <div id="ticker-roll" class="ticker">
                           <ul>
                           </ul>
                        </div>
                     </div>
                     <div class="socialicon float-right">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="<?= base_url('login');?>"><i class="fa fa-lock"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="headermiddle">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="logo">
                           <a href="index.html"><img class="img-responsive" src="<?= base_url();?>assets/img/logo1.png" alt="#" /></a>
                        </div>
                        <div class="banner">
                           <img src="<?= base_url();?>assets/img/banner_head.png" alt="#" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="headerbottom">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="full">
                        <div class="main_menu">
                           <div id="cssmenu">
                              <ul>
                                 <li class="home active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                 <li><a href="technology.html">Technology</a></li>
                                 <li>
                                    <a href="#">Entertainment</a>
                                    <ul>
                                       <li><a href="#">Health</a></li>
                                       <li><a href="#">Lifestyle</a></li>
                                       <li><a href="#">Sports</a></li>
                                       <li><a href="#">Travel</a></li>
                                       <li><a href="#">Education</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                       <li><a href="#">Articles</a></li>
                                       <li><a href="#">Testimonials</a></li>
                                       <li><a href="#">404 Page Not Found</a></li>
                                       <li><a href="#">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="#">News & Events</a></li>
                                 <li><a href="#">Blog</a></li>
                                 <li><a href="#">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="searchform">
                        <div class="column">
                           <div id="sb-search" class="sb-search">
                              <form action="index.html">
                                 <input class="sb-search-input" placeholder="Search Your News" type="text" value="" name="search" id="search" />
                                 <button><i class="fa fa-search" aria-hidden="true"></i></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <?php $this->load->view($content);?>
      <!-- footer -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-3">
                  <div class="footer_inner_blog">
                     <div class="footer_heading">
                        <h3><i class="fa fa-info-circle"></i> Get in Touch</h3>
                     </div>
                     <div class="footer_info">
                        <div class="footer_logo">
                           <a href="index.html"><img src="<?= base_url();?>assets/img/logo1.png" alt="#" /></a>
                        </div>
                        <p><strong>Address:</strong><br>427 Schoen Circles Suite 124 Melbourne Australia</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-2">
                  <div class="footer_inner_blog">
                     <div class="footer_heading">
                        <h3>Menu</h3>
                     </div>
                     <div class="footer_info footer_menu">
                        <ul>
                           <li><a href="technology.html"><span>></span> Technology</a></li>
                           <li><a href="testimonial.html"><span>></span> Testimonials</a></li>
                           <li><a href="news_events.html"><span>></span> News & Events</a></li>
                           <li><a href="entertainment.html"><span>></span> Entertainment</a></li>
                           <li><a href="contact.html"><span>></span> Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="footer_inner_blog">
                     <div class="footer_heading">
                        <h3><i class="fa fa-twitter"></i> Latest Tweets</h3>
                     </div>
                     <div class="footer_info tweets">
                        <div class="tweet-blog">
                           <i class="fa fa-twitter"></i>
                           <div class="tweet-cont">If you use this site regularly and would like to help keep the site on the Internet<br><a href="#">Sed ut perspiciatis unde omnis iste natus..</a></div>
                        </div>
                        <div class="tweet-blog">
                           <i class="fa fa-twitter"></i>
                           <div class="tweet-cont">If you use this site regularly and would like to help keep the site on the Internet<br><a href="#">Sed ut perspiciatis unde omnis iste natus..</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="footer_inner_blog">
                     <div class="footer_heading">
                        <h3><i class="fa fa-envelope-o"></i> Contact</h3>
                     </div>
                     <div class="footer_info">
                        <ul>
                           <li>
                              <span class="left_icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                              <span><a href="tel:0987654321">0987 654 321</a><br><a href="tel:0123456789">0123 456 789</a></span>
                           </li>
                           <li>
                              <span class="left_icon"><i class="fa fa-envelope-o"></i></span>
                              <span><a href="mailto:demo@gmail.com">demo@gmail.com</a><br><a href="mailto:demo@gmail.com">demo@gmail.com</a></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_bottom">
                     <p>Designed and developed by <a href="#">html.design</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="<?= base_url();?>assets/megazone/js/jquery.min.js"></script> 
      <script src="<?= base_url();?>assets/megazone/js/popper.min.js"></script>
      <script src="<?= base_url();?>assets/megazone/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?= base_url();?>assets/megazone/js/animate.js"></script>
      <!-- select country -->
      <script src="<?= base_url();?>assets/megazone/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="<?= base_url();?>assets/megazone/js/owl.carousel.min.js"></script>
      <!-- menumaker -->
      <script src="<?= base_url();?>assets/megazone/js/menumaker.js"></script>
      <!-- slider file -->
      <script src="<?= base_url();?>assets/megazone/js/slider.js"></script>
      <!-- custom js -->
      <script src="<?= base_url();?>assets/megazone/js/custom.js"></script>
   </body>
</html>