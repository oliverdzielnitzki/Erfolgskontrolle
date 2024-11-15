<?php require_once('layout/header.php'); ?>

<section id="hero" class="hero section dark-background">

  <img src="assets/img/wasgeht.jpg" alt="" data-aos="fade-in">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-start">
      <div class="col-lg-6">
        <h2>Sub Zero Project</h2>
        <p>The real Kings of Hardstyle</p>
        <a href="about.php" class="btn-get-started">Let´s Go</a>
      </div>
    </div>
  </div>
</section>
<section id="clients" class="clients section light-background">

  <div class="container">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/clients/iah.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/sticker.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/defqon.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/box.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/dirty.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/head.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/biohazard.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/brennan.png" class="img-fluid" alt=""></div>
      </div>
    </div>



    <?php require_once('layout/footer.php'); ?>