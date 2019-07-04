@extends('layouts.app')

@section('content')

<div class="product-page-cover" style="border-bottom: 5px solid #b8b8b8; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/reina2017-068.jpg">
    <div class="container" style="padding-top: 40vh;">
        <div class="text-white font-weight-bold"> <i class="fas fa-play color-green mr-2"></i> See products</div>
        <div class="text-white h2 mt-3">おすすめ商品一覧</div>
    </div>
</div>
<div class="container pt-5 mb-5">
    <div class="row">

        <div class="col-md-3">
            <div class="font-weight-light border-bottom pb-2">
                Categories
            </div>
             <div class="pt-3">
                <div class="custom-control custom-radio p-1 pl-4">
                    <input checked type="radio" id="customRadio1" name="category" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Carport</label>
                </div>
                <div class="custom-control custom-radio p-1 pl-4">
                    <input type="radio" id="customRadio2" name="category" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Fence</label>
                </div>
            </div>
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

            <div class="product-panel p-3 pb-5 mb-3">
                <div class="image img-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)"></div>
                <h4 class="product-title-h4 font-weight-bold pt-3 text-center">
                    <a class="product-title-h4 font-weight-bold" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <div class="product-line"></div>
                <div class="text-muted text-small"><?php echo get_the_category_list(', '); ?></small></div>
                <p class="pt-2 text-center">
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
