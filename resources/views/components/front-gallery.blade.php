    <div class="g-container container mt-5">
        <h3 class="text-center" style="color: #48aa48;">GALLERY</h3>
        <div class="g-line" style="background: #212529;"></div>
    <gallery>
        <div class="col-md-6" style="margin-top:3rem;">
            <h4 ref="product_name">Mao kini and mga Galeri</h4>
            <p ref="product_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae consectetur minus corrupti quas, nostrum laudantium magnam tempore nam sit, eius, dolorum nihil similique porro a voluptates fugiat tempora adipisci. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eos magni vero nihil rem, laboriosam veritatis laudantium provident laborum officia ducimus iure quidem neque tempora, illo modi. Corporis, similique eligendi!</p>
            <a href="<?php echo site_url('/product'); ?>" class="grn-btn7 mt-5">VIEW ALL GALLERY</a>
            <div class="row right-img">
                <?php
                    $args = array(
                        'posts_per_page'   => 6,
                        'offset'           => 0,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'post_type'        => 'my-custom-post-type',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
                    );

                    $products = new WP_Query($args);
                    
                    while($products->have_posts()) {
                        $products->the_post();
                ?>
                <div class="col-md-4 col-6 mt-5">
                    <photo-container class="cursor-pointer" @click.native="showImage('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>', '<?php the_title(); ?>', '<?php echo wp_trim_words(get_the_excerpt(), 30); ?>')" name="<?php the_title(); ?>" description="<?php echo wp_trim_words(get_the_excerpt(), 30); ?>" source="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"/>
                </div>
                    <?php
                    }
                    wp_reset_query();
                ?>
            </div>
        </div>
    </gallery>


    </div>
