
    <footer class="footer">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2" id="footer-logo">
                {{-- <img src="/images/logo/kinki-logo.png" alt="Kinki logo"> --}}
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/sotorie-logo-white.png" alt="Sotorie Logo">
                </a>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p><a href="#">TOP</a></p>
                <p><a href="#">PRODUCTS</a></p>
                <p><a href="#">BLOG</a></p>
            </div>
            <div class="col-md-2">
                <p><a href="#">STAFFS</a></p>
                <p><a href="#">PRIVACY</a></p>
                <p><a href="#">FAQS</a></p>
            </div>
            <div class="col-md-4">
                <!-- <div class="circle">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="circle">
                    <i class="fab fa-twitter"></i>                        
                </div>
                <div class="circle">
                    <i class="fab fa-instagram"></i>                        
                </div>
                <div class="circle">
                    <i class="fab fa-linkedin-in"></i>                        
                </div>
                <div class="circle">
                    <i class="fab fa-youtube"></i>                        
                </div> -->
                <!-- <div class="row"> -->
                    <div class="v-line"></div>
                <!-- </div> -->
            </div>
            <div class="col-md-4">
                <p>運営会社情報</p>
                <p>株式会社 近畿エクステリア</p>
                <p>〒567-0834 大阪府茨木市学園南町12番12号</p>
                <p>TEL. 072-669-8210　FAX. 072-669-8211</p>
                <p>MAIL. info@ex-kinki.com　WEB. http://ex-kinki.com</p>
            </div>
        </div>
        @php dynamic_sidebar('sidebar-footer') @endphp

    </footer>
