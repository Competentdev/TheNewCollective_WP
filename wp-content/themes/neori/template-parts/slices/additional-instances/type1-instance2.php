<div class="slice type1 instance2">

  <div class="category-title-description">

    <a href="./category/<?php echo esc_html( get_theme_mod ('neori_slice_type1_instance2_category_slug_setting', '')); ?>/"><h2 class="slice-title"><?php echo esc_html( get_theme_mod ('neori_slice_type1_instance2_category_name_setting', '')); ?></h2></a>

    <h4 class="slice-description"><?php echo esc_html( get_theme_mod ('neori_slice_type1_instance2_category_description_setting', '')); ?></h4>

  </div><!-- /.category-title-description -->

  <div class="card-deck">

    <?php

      $args = array(
        'type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => esc_html ( get_theme_mod ('neori_slice_type1_instance2_posts_number_setting', '')),
        'category_name' => esc_html ( get_theme_mod ('neori_slice_type1_instance2_category_slug_setting', '')),
        'ignore_sticky_posts' => 1,
        'offset' => esc_html ( get_theme_mod ('neori_slice_type1_instance2_offset_posts_setting', '')),
      );

      $slice_query = new WP_Query($args);

    ?>

    <?php if( $slice_query->have_posts() ): while( $slice_query->have_posts() ): $slice_query->the_post(); ?>

      <?php get_template_part('template-parts/slices/content', 'type1'); ?>

    <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div><!-- /.card-deck -->

</div><!-- /.slice type1 -->
