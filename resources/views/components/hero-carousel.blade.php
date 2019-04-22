<div>
    {{-- <h1>{!! App::title() !!}</h1> --}}
     <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel"> <!--carousel-fade-->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img1.jpeg)">

            <div class="slide-linearbg">
                <!-- <img class="first-slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img1.jpeg" alt="First slide"> -->
            </div>

            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="display-2 hero-head-text" style="margin-bottom: 1rem;">Smile in the Garden</h1>
                <p><a class="grn-btn7" id="btnContact" href="#front-contact-fm" role="button">お問い合わせ</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img2.jpeg)">
            <div class="slide-linearbg">
                <!-- <img class="second-slide" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel_img2.jpeg" alt="Second slide"> -->
            </div>

            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="display-2 hero-head-text" style="margin-bottom: 1rem;">ソトリエde庭デザイン</h1>
                <p><a class="grn-btn7" id="btnContact" href="#front-contact-fm" role="button">お問い合わせ</a></p>
              </div>
            </div>
          </div>
          <!--<div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div> -->
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