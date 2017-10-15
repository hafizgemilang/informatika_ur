<?php
include "link.php";
 ?>
<body>
    <!-- Bagian Header -->
    <?php
    include "header.php";
    ?>
    <!-- Bagian Header -->

  
  <!-- Main Slider -->


  <!-- About Section-->

  <section id="services" class="services text-center">
      <div class="container">
        <div class="row">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
          <img src="images/icon/orna.png">
         <h2 class="section-title">Rumah Beasiswa</h2> <img src="images/icon/orna.png">

          </div><!-- /.section-top -->

          <div class="section-details">
            <div class="service-details">
              <div class="col-md-3 col-sm-6">
                <div class="item wow animated fadeInLeft" data-wow-delay=".5s">
                  <div class="item-icon">
                    <i class="fa "><img src="images/icon/1.png"></i>
                  </div><!-- /.item-icon -->
                  <div class="item-details">
                    <h4 class="item-title">Informasi Beasiswa</h4><!-- /.item-title -->
                    <p class="item-description">
                     Berbagai macam beasiswa ditawarkan mulai dari S1, S2, S3 dan beasiswa luar negeri.
                    </p><!-- /.item-description -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="item wow animated fadeInLeft" data-wow-delay=".35s">
                  <div class="item-icon">
                    <i class="fa"><img src="images/icon/2.png"></i>
                  </div><!-- /.item-icon -->
                  <div class="item-details">
                    <h4 class="item-title">Berita</h4><!-- /.item-title -->
                    <p class="item-description">
                      Berita seputar beasiswa, tips dan trik mendapatkan beasiswa, Pengalaman dari Penerima Beasiswa
                    </p><!-- /.item-description -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="item wow animated fadeInRight" data-wow-delay=".35s">
                  <div class="item-icon">
                    <i class="fa"><img src="images/icon/3.png"></i>
                  </div><!-- /.item-icon -->
                  <div class="item-details">
                    <h4 class="item-title">Kolom Diskusi</h4><!-- /.item-title -->
                    <p class="item-description">
                      Berdiskusi, memberi kritik dan saran, sharing pengalaman beasiswa, memberi pertanyaan terkait beasiswa
                    </p><!-- /.item-description -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="item wow animated fadeInRight" data-wow-delay=".5s">
                  <div class="item-icon">
                    <i class="fa"><img src="images/icon/4.png"></i>
                  </div><!-- /.item-icon -->
                  <div class="item-details">
                    <h4 class="item-title">Register</h4><!-- /.item-title -->
                    <p class="item-description">
                      Mendaftar untuk berlangganan info beasiswa. Kami akan memberikan informasi terbaru mengenai beasiswa
                    </p><!-- /.item-description -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->
              </div>

            </div><!-- /.service-details -->
          </div><!-- /.section-details -->
        </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /#services -->

  <!-- Service Section-->
  <div class="clearfix"></div><!-- /.clearfix -->
  <div> &nbsp;</div>
   <div>&nbsp;  </div>
    <div>&nbsp; </div>
<section id="subscribe-section" class="subscribe-section text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
  <div class="section-pattern">
      <div class="section-padding">
        <div class="container">
          <div class="wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title">Temukan Informasi Beasiswa Disini!</h2><!-- /.section-title -->
            <p class="section-description">
             Lakukan pencarian informasi terhadap beasiswa yang diinginkan.
            </p><!-- /.section-description -->

            <form class="subscribe" method="post">
              <p class="alert-success"></p>
              <p class="alert-warning"></p>

              <div class="subscribe-hide">
                <input class="subscribe-email" type="email" id="subscribe-email" name="subscribe-email" required>
                <button  type="submit" id="subscribe-submit" class="btn">Cari Sekarang</button>
                <span id="subscribe-loading" class="btn"> <i class="fa fa-refresh fa-spin"></i> </span>
                <div class="subscribe-error"></div>
              </div><!-- /.subscribe-hide -->
              <div class="subscribe-message"></div>
            </form><!-- /.subscribe -->
          </div>
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.bg-overlay -->
  </section>

  <!-- Testimonials Section -->

  <section id="testimonial" class="testimonial text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="pattern-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h1 class="section-title">Quote</h1><!-- /.section-title -->
             <img src="images/icon/orna.png">
          </div><!-- /.section-top -->
          <div class="section-details wow animated fadeInUp" data-wow-delay=".5s">
            <div id="testimonial-slider" class="testimonial-slider carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-slider" data-slide-to="1"></li>
                <li data-target="#testimonial-slider" data-slide-to="2"></li>
                <li data-target="#testimonial-slider" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <blockquote class="client-quote">
                    <img src="images/quote_mark.png" >
                  Hiduplah Seakan-Akan Kamu Akan Mati Besok. Belajarlah Seakan-Akan Kamu Akan Hidup Selamanya. ~Mahatma Gandhi <img src="images/quote_mark2.png" >
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                   <img src="images/quote_mark.png" >
                    Pengetahuan Adalah Senjata Yang Paling Hebat Untuk Mengubah Dunia. ~Nelson Mandela <img src="images/quote_mark2.png" >
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                   <img src="images/quote_mark.png" >
                  Saya tidak Pernah Gagal. Saya Hanya Menemukan 10.000 Cara Yang Tidak Tepat. ~Thomas A. Edison <img src="images/quote_mark2.png" >
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                   <img src="images/quote_mark.png" >
                   Hal Paling Indah Di Dunia Tidak Dapat Dilihat Atau Disentuh. Hal Tersebut Hanya Bisa Dirasakan Dengan Hati. ~Helen Keller <img src="images/quote_mark2.png" >
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
              </div>
            </div><!-- /#testimonial-slider -->
          </div><!-- /.section-details -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.pattern-overlay -->
  </section><!-- /#testimonial -->

  <!-- Testimonials Section -->

  <!-- Footer Section -->

  <footer id="colophon" class="footer site-footer" role="contentinfo">
       <div class="footer-bottom">
      <div class="container">
        <div class="footer-menu pull-left">
          <div class="widget widget_menu">

          </div><!-- /.widget -->
        </div><!-- /.footer-menu -->



      </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
  </footer><!-- /#colophon -->

  <!-- Footer Section -->



  <div id="scroll-to-top" class="scroll-to-top">
    <span>
      <i class="fa fa-chevron-up"></i>
    </span>
  </div><!-- /#scroll-to-top -->




  <!-- Include jQuery Js -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include jQuery Js -->
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.2.min.js"><\/script>')</script>
  <!-- Include WOW Min Js -->
  <script src="assets/js/wow.min.js"></script>
  <!-- Google Maps Script -->
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <!-- Gmap3.js For Static Maps -->
  <script src="assets/js/gmap3.js"></script>
  <!-- Include Waypoint Js -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Include Ajax MailChimp Js -->
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Include Custom Js </-->
  <script src="assets/js/custom.min.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63948535-1', 'auto');
  ga('send', 'pageview');

</script>


  <script>

    $(".bxslider").bxSlider({auto:!0,preloadImages:"all",mode:"horizontal",captions:!1,controls:!0,pause:4000,speed:1200,onSliderLoad:function(){$(".bxslider>li .slide-inner").eq(1).addClass("active-slide"),$(".slide-inner.active-slide .slider-title").addClass("wow animated bounceInDown"),$(".slide-inner.active-slide .slide-description").addClass("wow animated bounceInRight"),$(".slide-inner.active-slide .btn").addClass("wow animated zoomInUp")},onSlideAfter:function(e,i,n){console.log(n),$(".active-slide").removeClass("active-slide"),$(".bxslider>li .slide-inner").eq(n+1).addClass("active-slide"),$(".slide-inner.active-slide").addClass("wow animated bounceInRight")},onSlideBefore:function(){$(".slide-inner.active-slide").removeClass("wow animated bounceInRight"),$(".one.slide-inner.active-slide").removeAttr("style")}}),$(document).ready(function(){function e(){return"ontouchstart"in document.documentElement}function i(){if("undefined"!=typeof google){var i={center:[-37.817331,144.955652],zoom:15,mapTypeControl:!0,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU},navigationControl:!0,scrollwheel:!1,streetViewControl:!0};e()&&(i.draggable=!1),$("#googleMaps").gmap3({map:{options:i},marker:{latLng:[23.709921,90.407143],options:{icon:"images/mapicon.png"}}})}}$("#masthead #main-menu").onePageNav(),i()}),$("#contactform").on("submit",function(e){e.preventDefault(),$this=$(this),$.ajax({type:"POST",url:$this.attr("action"),data:$this.serialize(),success:function(){alert("Message Sent Successfully")}})});

  </script>
</body>
</html>
