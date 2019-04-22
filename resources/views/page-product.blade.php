@extends('layouts.app')

@section('content')

<div class="product-page-cover" style="border-bottom: 5px solid #b8b8b8; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png">
    <div class="container" style="padding-top: 40vh;">
        <div class="text-white font-weight-bold"> <i class="fas fa-play color-green mr-2"></i> See products</div>
        <div class="text-white h2 mt-3">商品一覧</div>
    </div>
</div>
<div class="container pt-5 mb-5">
    <div class="row">

        <div class="col-md-3">
            <div class="pt-5 font-weight-light border-bottom pb-2">
                    Sotorie Products
            </div>
            <?php
            $product = array(
                'posts_per_page'   => -1,
                'offset' => 0,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'my-custom-post-type',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );

            $products_post = new WP_Query($product);

            while($products_post->have_posts()) {
                $products_post->the_post();

            ?>
            <div class="mt-4 mb-4 pl-5 position-relative" style="min-height: 50px;">
                <div class="small-round-image position-absolute" style="left: 0px; top: 0px; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)"></div>
                <div class="d-inline-block pl-3">
                    <div class="text-muted">
                        <a class="font-weight-bold" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="text-super-muted">
                        <small>
                            <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                        </small>
                </div>
                </div>
            </div>
            <?php }
                wp_reset_query(); 

            ?>

        </div>

        <div class="col-md-9">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $product = array(
                'posts_per_page'   => -1,
                'paged' => $paged,
                'offset'           => 0,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'my-custom-post-type',
                'post_status'      => 'publish',
                'suppress_filters' => true
            );

        $products_post = new \WP_Query($product);

           while($products_post->have_posts()) {
                $products_post->the_post();

            ?>
            <div class="blog-panel p-3 pb-5 mb-3">
                <div class="image img-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)"></div>
                <h4 class="font-weight-bold pt-3">
                    <a class="font-weight-bold" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <div class="text-muted text-small"><?php echo get_the_category_list(', '); ?></small></div>

                <p class="pt-2">
                    <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                </p>
            </div>
            <?php }
                wp_reset_query(); 

            ?>

        </div>

            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
    </div>
</div>
    

@endsection
