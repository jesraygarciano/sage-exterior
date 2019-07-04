<nav role="navigation" aria-label="main navigation">
    {{-- <div>
         <a href="{{ home_url('/') }}">
            {{ get_bloginfo('name', 'display') }}
        </a>
    </div> --}}
    <header>
<!--  -->
	<!-- <nav class="navbar navbar-expand-md navbar-light bg-faded"> -->
			<nav class="navbar navbar-expand-md navbar-light fixed-top text-uppercase" style="background-color: rgba(255, 255, 255, 0.5)!important;">
					<div class="container">

				        <a class="navbar-brand" href="<?php echo home_url(); ?>">
				        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/sotorie-logo-cl.png" alt="" width=120px;>
						</a>
						   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
						     <span class="navbar-toggler-icon"></span>
						   </button>
						   <?php
						   wp_nav_menu([
						     'menu'            => 'top',
						     'theme_location'  => 'top',
						     'container'       => 'div',
						     'container_id'    => 'bs4navbar',
						     'container_class' => 'collapse navbar-collapse',
						     'menu_id'         => false,
						     'menu_class'      => 'navbar-nav mr-auto ml-auto',
						     'depth'           => 2,
						     'fallback_cb'     => 'bs4navwalker::fallback',
						     'walker'          => new bs4navwalker()
						   ]);
						   ?>

							<form class="form-inline mt-2 mt-md-0 custom mb-3" id="bs4navbar">
								<a href="tel:0726698210">
									<button class="grn-btn3" type="button" style="transform: translateY(8px)">
										<i class="fa fa-phone"></i>
										 072-669-8210
									</button>
								</a>

								<a style="margin-left:.7rem;" href="<?php echo site_url('/#front-contact-fm'); ?>">
									<button class="grn-btn-sub" type="button" style="transform: translateY(8px)">
										<i class="fa fa-envelope"></i>
										お問い合わせ
									</button>
								</a>

							</form>
						</div>
			</nav>
    </header>


    {{-- @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
    @endif --}}

</nav>