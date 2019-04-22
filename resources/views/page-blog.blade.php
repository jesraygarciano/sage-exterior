@extends('layouts.app')

@section('content')

<div class="page-cover pb-5" style="border-bottom: 5px solid #b8b8b8; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png">
    <div class="container" style="padding-top: 50vh;">
        <div class="text-white font-weight-bold"> <i class="fas fa-play color-green mr-2"></i> Latest Post</div>
        <div class="text-white h2 mt-3">Flow of carport installation</div>
        <div class="pt-5 pb-5">
        </div>
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
                    <label class="custom-control-label" for="customRadio2">External structure</label>
                </div>
                <div class="custom-control custom-radio p-1 pl-4">
                    <input type="radio" id="customRadio3" name="category" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3">Stock yard</label>
                </div>
                <div class="custom-control custom-radio p-1 pl-4">
                    <input type="radio" id="customRadio4" name="category" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4">Terrace roof</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'posts_per_page'   => 2,
                'paged' => $paged,
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
            <div class="blog-panel text-center p-3 pb-5 mb-3">
                <div class="image img-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)"></div>
                <h4 class="font-weight-bold pt-3">
                
                    <a class="text-dark" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <div class="text-muted text-small"><small><?php echo get_the_date(); ?> / by <?php echo get_the_author(); ?></small></div>
                <div class="text-muted text-small"><?php echo get_the_category_list(', '); ?></small></div>

                <p class="pt-3">
                    <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                </p>
            </div>
            <?php }
                wp_reset_query(); 

            ?>
            <?php
                function pagination($pages = '', $range = 2)
                {
                    $showitems = ($range * 2)+1;
                
                    global $paged;
                    if(empty($paged)) $paged = 1;
                
                    if($pages == '')
                    {
                        global $wp_query;
                        $pages = $wp_query->max_num_pages;
                        if(!$pages)
                        {
                            $pages = 1;
                        }
                    }
                
                    if(1 != $pages)
                    {
                        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
                        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
                        
                        echo '<ul class="page-navigation text-center">';

                        for ($i=1; $i <= $pages; $i++)
                        {
                            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                            {
                                echo ($paged == $i)? "<li><span class=\"small-round-btn current\">".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class=\"small-round-btn\">".$i."</a></li>";
                            }
                        }
                
                        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
                        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
                        echo '</ul>';

                        echo '<div class="d-table w-100">';
                        if($paged != 1)
                        echo "<a style='width: initial; padding-right: 4px; border-radius:7px;' href='".get_pagenum_link($paged-1)."' class=\"small-round-btn float-left\">Previews</a>";

                        if($paged != $pages)
                        echo "<a style='width: initial; padding-right: 4px; border-radius:7px;' href='".get_pagenum_link($paged+1)."' class=\"small-round-btn float-right\">Next</a>";
                        echo '</div>';

                        echo "<br><br><br><div class=\"text-muted\"><span>Page ".$paged." of ".$pages."</span>";
                        echo "</div>\n";
                    }
                }
            ?>
            
            <br>
            <br>
            <br>
            <?php pagination($blogposts->max_num_pages); ?>

        </div>

        <div class="col-md-3">
            <div class="pt-5 font-weight-light border-bottom pb-2">
                    Recent Posts
            </div>
            <?php
            $args = array(
                'posts_per_page'   => 3,
                'offset' => 0,
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
            <div class="mt-4 mb-4 pl-5 position-relative" style="min-height: 50px;">
                <div class="small-round-image position-absolute" style="left: 0px; top: 0px; background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)"></div>
                <div class="d-inline-block pl-3">
                    <div>
                        <a class="text-dark" href="<?php the_permalink(); ?>">
                            <?php echo wp_trim_words(get_the_excerpt(), 1); ?>
                        </a>
                    </div>
                    <div class="text-super-muted"><small><?php echo get_the_date(); ?></small></div>
                </div>
            </div>
            <?php }
                wp_reset_query(); 

            ?>
            <!-- <div class="pt-5 font-weight-light border-bottom pb-2">
                Gallery
            </div>
            <div class="gallery p-2">
                <div class="row">
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                    <div class="col-4 p-1">
                        <div class="img-thumbnail unick-thumbnail-image" style="height: 80px; left: 0px; top: 0px; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/product1.png"></div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
    

@endsection
