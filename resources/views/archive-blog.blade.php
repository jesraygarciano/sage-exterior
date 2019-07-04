@extends('layouts.app')


@section('content')

	<div class="container pt-5 mt-5">
		<div class="row">
			<div class="col-md-12">
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
		</div>

	</div>

@endsection