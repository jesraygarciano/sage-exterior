<article @php post_class() @endphp>
    <div class="page-cover pb-5" style="border-bottom: 5px solid #b8b8b8; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
        <div class="container" style="padding-top: 60vh;">
            <div class="text-white h2 mt-3 text-center"> <i class="fas fa-play color-green mr-2"></i> <span style="text-shadow: 2px 2px 4px #000000;">{{ get_the_title() }}</span></div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3">
                <unick-card picture_src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" name="{{ get_the_author() }}"/>
            </div>
            <div class="col-md-9">
                <h1 class="entry-title font-weight-bold">{{ get_the_title() }}</h1>
                <div class="entry-content">
                    @php the_content() @endphp
                </div>
                <br>
                <br>
                <unick-card2 header="Blogs">
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
                    <div class="col-md-3">
                        <br>
                        <h3>
                            <a class="text-secondary" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <br>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    </div>
                    <?php
                    }
                    wp_reset_query(); 
                    ?>
                </div>
                </unick-card2>
                <br>
                <br>
                <div class="blog-container">
                    <div class="row">
                        <?php
                            $args = array(
                                'posts_per_page'   => 4,
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
                        <div class="col-lg-3 blog-image">
                            <div class="bg-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
                                <div class="card-overlay"></div>
                            </div>
                            
                            <h5><?php the_title(); ?></h5>
                            <a href="<?php the_permalink(); ?>" class="btn btn-transparent">See Details</a>
                            <span><i class="fas fa-signal"></i></span>
                        </div>
                        <?php
                            }
                            wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</article>