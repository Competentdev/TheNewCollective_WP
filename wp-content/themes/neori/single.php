<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php if(get_theme_mod('neori_single_post_global_template_setting') == 'default_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'default_sidebar_left') : ?>

      <?php get_template_part( 'template-parts/single/content-single-default-sl', get_post_format() ); ?>
  
    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'default_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-default-ns', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'default_boxed_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single-default-boxed', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'default_boxed_sidebar_left') : ?>

      <?php get_template_part( 'template-parts/single/content-single-default-boxed-sl', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'default_boxed_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-default-boxed-ns', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_sidebar_left') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-sl', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-ns', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_boxed_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-boxed', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_boxed_sidebar_left') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-boxed-sl', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_boxed_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-boxed-ns', get_post_format() ); ?>  
      
    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_fullwidth_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-fullwidth', get_post_format() ); ?>

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_fullwidth_sidebar_left') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-fullwidth-sl', get_post_format() ); ?>  

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'classic_fullwidth_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-classic-fullwidth-ns', get_post_format() ); ?>  

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'splitted_sidebar_right') : ?>

      <?php get_template_part( 'template-parts/single/content-single-splitted', get_post_format() ); ?>  

    <?php elseif(get_theme_mod('neori_single_post_global_template_setting') == 'splitted_no_sidebar') : ?>

      <?php get_template_part( 'template-parts/single/content-single-splitted-ns', get_post_format() ); ?>  

    <?php else : ?>

      <?php get_template_part( 'template-parts/single/content-single', get_post_format() ); ?>

    <?php endif; ?>    

  <?php endwhile; ?>

<?php get_footer(); ?>