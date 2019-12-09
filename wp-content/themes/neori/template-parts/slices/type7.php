<div class="slice type7">

  <a href="./category/<?php echo esc_html( get_theme_mod ('neori_slice_type7_category_slug_setting', '')); ?>/"><h2 class="slice-title"><?php echo esc_html( get_theme_mod ('neori_slice_type7_category_name_setting', '')); ?></h2></a>

  <?php if(get_theme_mod('neori_slice_type7_category_description_setting')) : ?>

    <h4 class="slice-description"><?php echo esc_html( get_theme_mod ('neori_slice_type7_category_description_setting', '')); ?></h4>

  <?php endif; ?>  


  <!-- If numbered pagination is not enabled, this Query will run -->

  <?php if(!get_theme_mod('neori_slice_type7_enable_numbered_pagination_setting')) : ?>

    <div class="card-deck more-posts-deck">

      <?php

        $args = array(
          'type' => 'post',
          'post_status' => 'publish',
          'ignore_sticky_posts' => 1,
          'category_name' => esc_html ( get_theme_mod ('neori_slice_type7_category_slug_setting', '')),
          'offset' => esc_html ( get_theme_mod ('neori_slice_type7_offset_posts_setting', '')),
        );

        $slice_query = new WP_Query($args);

      ?>

      <?php if( $slice_query->have_posts() ): while( $slice_query->have_posts() ): $slice_query->the_post();  ?>

        <?php get_template_part('template-parts/content', 'blog'); ?>

      <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </div><!-- /.card-deck -->

    <div class="load-more-posts-container">

      <a class="btn-load-more-posts" data-page="1" data-url="<?php echo admin_url('admin-ajax.php') ?>">

        <span class="icon1"><i class="fa fa-angle-double-down"></i></span>

        <span class="icon2"><i class="fa fa-refresh"></i></span>

        <span class="text"><?php esc_html_e( 'More Posts', 'neori' ); ?></span>

      </a>

    </div><!-- /.load-more-posts-container -->


  <!-- If numbered pagination IS enabled, a modified Query will run, in order to make things possible -->

  <?php else : ?>

    <div class="card-deck">

      <?php
	  
        $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1; 

        $args = array(
          'type' => 'post',
          'post_status' => 'publish',
          'ignore_sticky_posts' => 1,
          'category_name' => esc_html ( get_theme_mod ('neori_slice_type7_category_slug_setting', '')),
          'offset' => esc_html ( get_theme_mod ('neori_slice_type7_offset_posts_setting', '')),
          'paged' => $paged
        );

        $slice_query = new WP_Query($args, $paged);

        //Basically the only possible way to have numbered pages in a custom Query in WordPress
        $temp_query = $wp_query;
        $wp_query   = NULL;
        $wp_query   = $slice_query;

      ?>

      <?php if( $slice_query->have_posts() ): while( $slice_query->have_posts() ): $slice_query->the_post();  ?>

        <?php get_template_part('template-parts/content', 'blog'); ?>

      <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

      </div><!-- /.card-deck -->

      <?php 
        
        the_posts_pagination(); 
        
        //Back to normal
        $wp_query = NULL;
        $wp_query = $temp_query; 
        
      ?>

    
  <?php endif; ?>

</div><!-- /.slice type7 -->
