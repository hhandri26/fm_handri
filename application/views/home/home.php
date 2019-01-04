<!-- slideshow -->
<section class="rev_slider_wrapper">
 <div class="rev_slider materialize-slider">
  <ul>
  <?php foreach ($slideshow as $k) {?>
    <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo base_url('assets/img/promotion/'.$k->gambar);?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">
        <img src="<?php echo base_url('assets/img/promotion/'.$k->gambar);?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
        <div class="tp-caption NotGeneric-Title tp-resizeme"
            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-50','-50']" 
            data-fontsize="['60','60','50','55']"
            data-lineheight="['70','70','60','60']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="1000" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"
            style="z-index: 5; color: #373a3d; white-space: nowrap;"><?php echo $k->judul ;?>
        </div>

        <div class="tp-caption tp-resizeme rev-subheading blue-text"
            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
            data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','10']" 
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
 
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="1200" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"
            style="z-index: 6; color: #666; white-space: nowrap;"><?php echo $k->description ;?>
        </div>

        <div class="tp-caption tp-resizeme rev-btn  rs-parallaxlevel-0"
            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
            data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-style_hover="cursor:default;"

            data-transform_in="y:50px;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_out="x:inherit;y:inherit;" 
            data-start="1400" 
            data-splitin="none" 
            data-splitout="none"
            data-responsive_offset="on"
            style="z-index: 8; white-space: nowrap;">
            <a href="#" class="btn btn-lg  waves-effect waves-light">Contact</a>
        </div>

    </li>
<?php };?>
  </ul>             
 </div>
</section>

<!-- what we do -->
<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase">What We Do</h2>
          <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
      </div>

      <div class="seo-featured-carousel brand-dot">
          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-1.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Web Optimize</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-2.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Data Analysis</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-3.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Concept Development</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-4.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Content Marketing</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-5.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Big Data</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-6.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Mobile Marketing</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-7.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Data Organize</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->


          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="assets/img/seo/service-8.jpg" alt="">
              </div>
              <div class="desc">
                  <h2>Pay Per Click</h2>
                  <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets</p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->
      </div><!-- /.seo-featured -->

    </div><!-- /.container -->
</section>
