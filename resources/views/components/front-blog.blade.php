<div class="container">
        <div class="front-blog-container">
        <div class="row">
            <div id="front-blog-title" class="col-md-6" style="text-align: left;padding:1rem;">
                <div class="line"></div>
                <h3>BLOG</h3>
            </div>
            <div class="col-md-6" style="text-align: right;">

            <a href="<?php echo site_url('/blog'); ?>">

                <p><a class="btn btn-primary btn-lg" style="background-color:rgb(70, 170, 70); border: none;" href="#"
                    role="button">ALL BLOGS</a></p>
            </a>

            </div>
        </div>

        <div class="row">

                <?php

                    $args = array(
                        'posts_per_page'   => 4,
                        'offset'           => 0,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'post_type'        => 'post',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
                    );

                    $blogposts = new WP_Query($args);

                    while($blogposts->have_posts()) {
                        $blogposts->the_post();
                    
                ?>

            <div class="col-lg-3 col-md-3 d-flex align-items-stretch" id="blogs">
                    <div class="card blog" style="">
                        <div class="thumb-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
                            <div class="square">
                                <p>
                                    <?php echo get_the_time('F j'); ?> 
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="info">
                                <small class="date">
                                        <?php echo get_the_time('F j'); ?> 
                                </small>
                                <small style="color: #48AA48;">
                                        <?php echo get_the_category_list(', '); ?>
                                </small>
                            </div>
                            <br>

                            <h6 class="card-title">
                                <a class="font-weight-bold" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h6>
                            <p class="card-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>

                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink(); ?>">
                                <button class="grn-btn8">READ BLOG</button>
                            </a>

                        </div>
                </div>
            </div>

            <?php }
                wp_reset_query(); 

            ?>
        </div>
        <br>                     
    </div>
</div>