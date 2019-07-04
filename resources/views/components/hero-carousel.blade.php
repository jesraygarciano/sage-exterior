<div>
    {{-- <h1>{!! App::title() !!}</h1> --}}
     <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> <!--carousel-fade-->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img1_bkp-min.jpg)">
            <div class="slide-linearbg">
            </div>

            <div class="container">
              <div class="carousel-caption text-left">
                    <!--<h1 class="hero-head-text" id="hero-head-text1" style="margin-bottom: 1rem;">Smile in the Garden</h1> -->                
	             <img style="margin-bottom:1rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-title-smile.png" alt="Smile in the garden">  

				<picture>
				  {{-- <source media="(max-width: 768px)" srcset="https://satoyama-nippon.org/wp-content/themes/satoyamanippon/assets/images/home/home-banner_sp.png">
				  <img src="https://satoyama-nippon.org/wp-content/themes/satoyamanippon/assets/images/home/home-banner.png" alt="広島県の中山間地域を巡ろう!オオサンショウウオ・ソロツーリングラリー2019 10.27(sun)7:00 ~ 19:30"> --}}
				</picture>

                <p><a class="grn-btn7" id="btnContact" href="#front-contact-fm" role="button">お問い合わせ</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img2.jpg)">
            <div class="slide-linearbg">
            </div>

            <div class="container">
              <div class="carousel-caption text-left">
	             <img style="margin-bottom:1rem;" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-title.png" alt="Smile in the garden">  

                <p><a class="grn-btn7" id="btnContact" href="#front-contact-fm" role="button">お問い合わせ</a></p>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>