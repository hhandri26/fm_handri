
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
      <!-- section -->
      <div class="section">
         <div id="main_slider_mobile" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
               <li data-target="#main_slider_mobile" data-slide-to="0" class=""></li>
               <li data-target="#main_slider_mobile" data-slide-to="1" class="active"></li>
               <li data-target="#main_slider_mobile" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
               <div class="carousel-item">
                  <img class="img-responsive" src="<?= base_url();?>assets/img/post1.png" alt="#">
               </div>
               <div class="carousel-item active">
                  <img class="img-responsive" src="<?= base_url();?>assets/img/post2.png" alt="#">
               </div>
               <div class="carousel-item">
                  <img class="img-responsive" src="<?= base_url();?>assets/img/post3.png" alt="#">
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      <!-- section -->
      <section id="ps-container" class="ps-container desk_slider">
         <div class="ps-contentwrapper">
            <div class="ps-content" style="background: url('<?= base_url();?>assets/img/post1.png')">
               <div class="slide_inforcnt">
                  <span>Culture News</span>
                  <h2>New post images and information..</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p class="post_date">- Friday June, 13 2018</p>
               </div>
            </div>
            <div class="ps-content" style="background: url('<?= base_url();?>assets/img/post2.png')">
               <div class="slide_inforcnt">
                  <span>Jungle News</span>
                  <h2>New post images and information..</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p class="post_date">- Friday June, 13 2018</p>
               </div>
            </div>
            <div class="ps-content" style="background: url('<?= base_url();?>assets/img/post3.png')">
               <div class="slide_inforcnt">
                  <span>Foods and market News</span>
                  <h2>New post images and information..</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p class="post_date">- Friday June, 13 2018</p>
               </div>
            </div>
         </div>
         <!-- /ps-contentwrapper -->
         <div class="ps-slidewrapper">
            <div class="ps-slides">
               <div style="background: url('<?= base_url();?>assets/img/s1.png')">
                  <div class="slide_head">
                     <h3>Culture News</h3>
                  </div>
               </div>
               <div style="background: url('<?= base_url();?>assets/img/s2.png')">
                  <div class="slide_head">
                     <h3>Jungle News</h3>
                  </div>
               </div>
               <div style="background: url('<?= base_url();?>assets/img/s3.png')">
                  <div class="slide_head">
                     <h3>Foods and market News</h3>
                  </div>
               </div>
            </div>
            <nav>
               <a href="#" class="ps-prev" ></a>
               <a href="#" class="ps-next" ></a>
            </nav>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_2_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-9">
                  <div class="full blog_post">
                     <div class="inner_post_blog">
                        <div class="heading">
                           <h3>Recently Added News</h3>
                        </div>
                        <!-- post -->
                        <div class="post p_style_1 post_inner_padding_15">
                           <div class="post_img">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/post3.png" alt="#" />
                           </div>
                           <div class="post_time">
                              <span>14 / june</span>
                           </div>
                           <div class="post_cont">
                              <h4>Food recipes & guide for cooking</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <ul class="blog_infor">
                                    <li><i class="fa fa-user"></i><span>htmldotdesign</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>22 June 2018</span></li>
                                  </ul>
                              <div class="readmore">
                                 <a href="#">Readmore ></a>
                              </div>
                           </div>
                        </div>
                        <!-- post end -->
                        <!-- post -->
                        <div class="post p_style_1 post_inner_padding_15">
                           <div class="post_img">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/post1.png" alt="#" />
                           </div>
                           <div class="post_time">
                              <span>14 / june</span>
                           </div>
                           <div class="post_cont">
                              <h4>History & Culture</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <ul class="blog_infor">
                                    <li><i class="fa fa-user"></i><span>htmldotdesign</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>22 June 2018</span></li>
                                  </ul>
                              <div class="readmore">
                                 <a href="#">Readmore ></a>
                              </div>
                           </div>
                        </div>
                        <!-- post end -->
                        <!-- post -->
                        <div class="post p_style_1 post_inner_padding_15">
                           <div class="post_img">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/post2.png" alt="#" />
                           </div>
                           <div class="post_time">
                              <span>14 / june</span>
                           </div>
                           <div class="post_cont">
                              <h4>Animals & Natural</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <ul class="blog_infor">
                                    <li><i class="fa fa-user"></i><span>htmldotdesign</span></li>
                                    <li><i class="fa fa-clock-o"></i><span>22 June 2018</span></li>
                                  </ul>
                              <div class="readmore">
                                 <a href="#">Readmore ></a>
                              </div>
                           </div>
                        </div>
                        <!-- post end -->
                        <div class="tab">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-3">
                  <div class="full">
                     <div class="sidebar_section">
                        <div class="side_blog">
                           <h3>Following us</h3>
                           <div class="social_icon">
                              <ul>
                                 <li><a class="social_bt fb" href="#"></a></li>
                                 <li><a class="social_bt tw" href="#"></a></li>
                                 <li><a class="social_bt ln" href="#"></a></li>
                                 <li><a class="social_bt pi" href="#"></a></li>
                                 <li><a class="social_bt yt" href="#"></a></li>
                                 <li><a class="social_bt rss" href="#"></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="side_blog">
                           <div class="banner_inner">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/banner_1.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="full blog_post">
                     <div class="inner_post_blog">
                        <div class="heading h_style_2">
                           <h3>You may read</h3>
                        </div>
                     </div>
                  </div>
                  <div class="full">
                     <div class="inner_section">
                        <div class="row">
                           <div class="col-lg-8">
                              <div class="full">
                                 <div id="business_section" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                       <li data-target="#business_section" data-slide-to="0" class="active"></li>
                                       <li data-target="#business_section" data-slide-to="1"></li>
                                       <li data-target="#business_section" data-slide-to="2"></li>
                                    </ul>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                       <div class="carousel-item active">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/s3.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date"><strong><i class="fa fa-user"></i> Mike Roy</strong><strong><i class="fa fa-clock-o"></i>July 24, 2018</strong></p>
                                          </div>
                                       </div>
                                       <div class="carousel-item">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/s4.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date"><strong><i class="fa fa-user"></i> Mike Roy</strong><strong><i class="fa fa-clock-o"></i>July 24, 2018</strong></p>
                                          </div>
                                       </div>
                                       <div class="carousel-item">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/s5.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date"><strong><i class="fa fa-user"></i> Mike Roy</strong><strong><i class="fa fa-clock-o"></i>July 24, 2018</strong></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="full">
                                 <div class="sidebar_section">
                                    <div class="side_blog margin_0">
                                       <div class="tab_bar">
                                          <ul id="Tab" class="nav nav-tabs" role="tablist">
                                             <li class="nav-item">
                                                <a id="popular" class="nav-link active" data-toggle="tab" href="#popular_post" role="tab" aria-selected="true">Popular Post</a>
                                             </li>
                                             <li class="nav-item">
                                                <a id="profile" class="nav-link" data-toggle="tab" href="#recend_post" role="tab" aria-selected="false">Recend Post</a>
                                             </li>
                                             <li class="nav-item">
                                                <a id="contact" class="nav-link" data-toggle="tab" href="#comment" role="tab" aria-selected="false">Comment</a>
                                             </li>
                                          </ul>
                                          <div id="TabContent" class="tab-content">
                                             <div class="tab-pane fade show active" id="popular_post" role="tabpanel" aria-labelledby="popular_post">
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Photography</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Education</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Nature of Culture</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="recend_post" role="tabpanel" aria-labelledby="recend_post">
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Photography</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Education</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Nature of Culture</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment">
                                               <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Photography</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Education</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Nature of Culture</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row margin_top_30">
                           <div class="col-md-6">
                              <div class="full banner_mar">
                                 <img class="img-responsive" src="<?= base_url();?>assets/img/b1.png" alt="#" />
                                 <div class="overlay_banner">
                                    <h3>Top of the week</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="full banner_mar">
                                 <img class="img-responsive" src="<?= base_url();?>assets/img/b2.png" alt="#" />
                                 <div class="overlay_banner">
                                    <h3>Top of the month</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 col-lg-12">
                  <div class="full blog_post">
                     <div class="inner_post_blog">
                        <div class="heading h_style_2">
                           <h3>Featured post</h3>
                        </div>
                     </div>
                  </div>
                  <div class="full">
                     <div class="inner_section post_slider">
                        <div class="owl-carousel owl-theme">
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                              <div class="post_head">
                                 <h4>Today News</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                              <div class="post_head">
                                 <h4>Latest Design</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                              <div class="post_head">
                                 <h4>Photography</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                              <div class="post_head">
                                 <h4>Construction</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                              <div class="post_head">
                                 <h4>Education</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                              <div class="post_head">
                                 <h4>Natural</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                              <div class="post_head">
                                 <h4>Today News</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                              <div class="post_head">
                                 <h4>Latest Design</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                              <div class="post_head">
                                 <h4>Photography</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                              <div class="post_head">
                                 <h4>Construction</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                              <div class="post_head">
                                 <h4>Education</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                              <div class="post_head">
                                 <h4>Natural</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section>
         <div class="container-fluid">
            <div class="row">
               <div class="banner_half left_bg">
                  <div class="full">
                     <img class="img-responsive" src="<?= base_url();?>assets/img/back1.png" alt="#" />
                     <div class="black_sed">
                        <h3>City Highlight</h3>
                        <ul>
                           <li><i class="fa fa-eye"></i> 100 View</li>
                           <li><i class="fa fa-comment" aria-hidden="true"></i> 85 Comment</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="banner_half right_bg white_fonts">
                  <div class="full">
                     <img class="img-responsive" src="<?= base_url();?>assets/img/back2.png" alt="#" />
                     <div class="black_sed">
                        <h3>Education Highlight News</h3>
                        <ul>
                           <li><i class="fa fa-eye"></i> 100 View</li>
                           <li><i class="fa fa-comment" aria-hidden="true"></i> 85 Comment</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_2_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full blog_post">
                     <div class="inner_post_blog">
                        <div class="heading h_style_2">
                           <h3>Business</h3>
                        </div>
                     </div>
                  </div>
                  <div class="full">
                     <div class="inner_section">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="full banner_mar">
                                 <img class="img-responsive" src="<?= base_url();?>assets/img/b3.png" alt="#" />
                                 <div class="overlay_banner">
                                    <h3>Market Value</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="full banner_mar">
                                 <img class="img-responsive" src="<?= base_url();?>assets/img/b4.png" alt="#" />
                                 <div class="overlay_banner">
                                    <h3>Strategy</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row  margin_top_30">
                           <div class="col-lg-8">
                              <div class="full">
                                 <div id="marketing_section" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                       <li data-target="#marketing_section" data-slide-to="0" class="active"></li>
                                       <li data-target="#marketing_section" data-slide-to="1"></li>
                                       <li data-target="#marketing_section" data-slide-to="2"></li>
                                    </ul>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                       <div class="carousel-item active">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/post1.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business Banner</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date">- Friday June, 13 2018</p>
                                          </div>
                                       </div>
                                       <div class="carousel-item">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/post2.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business Banner</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date">- Friday June, 13 2018</p>
                                          </div>
                                       </div>
                                       <div class="carousel-item">
                                          <img class="img-responsive" src="<?= base_url();?>assets/img/post3.png" alt="#" />
                                          <div class="slide_inforcnt">
                                             <span>Business Banner</span>
                                             <h2>New post images and information..</h2>
                                             <p class="post_date">- Friday June, 13 2018</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="full">
                                 <div class="sidebar_section">
                                    <div class="side_blog margin_0">
                                       <div class="tab_bar">
                                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                             <li class="nav-item">
                                                <a id="latest_news" class="nav-link active" data-toggle="tab" href="#latest_new" role="tab" aria-selected="true">Latest News</a>
                                             </li>
                                             <li class="nav-item">
                                                <a id="business" class="nav-link" data-toggle="tab" href="#busniess_new" role="tab" aria-selected="false">Business</a>
                                             </li>
                                             <li class="nav-item">
                                                <a id="comt" class="nav-link" data-toggle="tab" href="#comment_2" role="tab" aria-selected="false">Comment</a>
                                             </li>
                                          </ul>
                                          <div class="tab-content" id="myTabContent">
                                             <div class="tab-pane fade show active" id="latest_new" role="tabpanel" aria-labelledby="popular_post">
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="busniess_new" role="tabpanel" aria-labelledby="recend_post">
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="comment_2" role="tabpanel" aria-labelledby="comment">
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tab_inner">
                                                   <div class="tab_side_img">
                                                      <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                                                   </div>
                                                   <div class="tab_side_cont">
                                                      <div class="post_head">
                                                         <h4>Latest News</h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                         <div class="post_head_inner">
                                                            <ul>
                                                               <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                                               <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12 col-lg-12">
                  <div class="full blog_post">
                     <div class="inner_post_blog">
                        <div class="heading h_style_2">
                           <h3>Latest Post</h3>
                        </div>
                     </div>
                  </div>
                  <div class="full">
                     <div class="inner_section post_slider">
                        <div class="owl-carousel owl-theme">
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                              <div class="post_head">
                                 <h4>Today News</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                              <div class="post_head">
                                 <h4>Latest Design</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l3.png" alt="#" />
                              <div class="post_head">
                                 <h4>Photography</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l4.png" alt="#" />
                              <div class="post_head">
                                 <h4>Construction</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l5.png" alt="#" />
                              <div class="post_head">
                                 <h4>Education</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l6.png" alt="#" />
                              <div class="post_head">
                                 <h4>Natural</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l1.png" alt="#" />
                              <div class="post_head">
                                 <h4>Today News</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <img class="img-responsive" src="<?= base_url();?>assets/img/l2.png" alt="#" />
                              <div class="post_head">
                                 <h4>Latest Design</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                 <div class="post_head_inner">
                                    <ul>
                                       <li><i class="fa fa-calendar" aria-hidden="true"></i> 19 June 2018</li>
                                       <li><i class="fa fa-comment" aria-hidden="true"></i> 14 Comment</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section>
         <div class="container-fluid">
            <div class="row">
               <div class="banner_half left_bg">
                  <div class="full">
                     <img class="img-responsive" src="<?= base_url();?>assets/img/back3.png" alt="#" />
                     <div class="black_sed">
                        <h3>Today's Fashion</h3>
                        <ul>
                           <li><i class="fa fa-eye"></i> 100 View</li>
                           <li><i class="fa fa-comment" aria-hidden="true"></i> 85 Comment</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="banner_half right_bg white_fonts">
                  <div class="full">
                     <img class="img-responsive" src="<?= base_url();?>assets/img/back4.png" alt="#" />
                     <div class="black_sed">
                        <h3>Home News</h3>
                        <ul>
                           <li><i class="fa fa-eye"></i> 100 View</li>
                           <li><i class="fa fa-comment" aria-hidden="true"></i> 85 Comment</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="news_latter">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="signup">
                     <h4 class="left_cont">Sign-up for our Newsletter</h4>
                     <form action="index.html">
                        <fieldset>
                           <div class="field">
                              <input type="text" placeholder="Email Address" required />
                              <button>Submit</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
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