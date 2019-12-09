<!--

THUMBNAIL & TITLE

-->

<div class="single-thumbnail-background">

  <div class="single-splitted row">
   
    <div class="single-splitted-left-side col-12 col-lg-6">

      <?php if(has_post_thumbnail()) : ?>

        <?php the_post_thumbnail('full', array('class' => 'single-thumbnail-splitted-left-side ws')); ?>

      <?php endif; ?>

    </div><!-- /.single-splitted-left-side -->

    <div class="single-splitted-right-side col-12 col-lg-6">

      <div class="single-splitted-right-side-upper">

        <div class="category-n-time d-flex align-items-center">

          <span class="category"><?php the_category( ' ' ); ?></span>

          <span class="min-read"><?php if (class_exists('Reading_Time_WP')) { echo wp_kses_post(do_shortcode('[rt_reading_time]')); esc_html_e( 'min', 'neori' ); } ?></span>

        </div><!-- /.category-n-time -->

        <?php the_title( '<h1>', '</h1>' ); ?>
  
        <?php if(has_excerpt()) : ?>
          
          <span class="excerpt"><?php echo get_the_excerpt(); ?></span>

        <?php endif; ?> 

      </div><!-- /.single-splitted-right-side-upper -->

      <div class="single-splitted-right-side-lower">

        <div class="author-n-date">

          <?php echo get_avatar( get_the_author_meta('user_email'), '57', '' ); ?>

          <div class="author-n-date-right-side">

            <span class="author-name"><?php the_author_posts_link(); ?></span>

            <span class="date"><?php the_time('M j'); ?></span>

          </div><!-- /.author-n-date-right-side -->

        </div><!-- /.author-n-date -->

      </div><!-- /.single-splitted-right-side-lower -->

    </div><!-- /.single-splitted-right-side -->

  </div><!-- /.single-splitted -->
 
</div><!-- /.single-thumbnail-background -->




<!--

THE POST CONTENT

-->

<div class="container">

  <div class="row">

    <div class="content col-lg-10 mx-auto align-items-center">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">

          <h2 class="sr-only"><?php the_title(); ?></h2>

          <?php

            the_content( sprintf(

              wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'neori' ), array( 'span' => array( 'class' => array() ) ) ),

              the_title( '<span class="screen-reader-text">"', '"</span>', false ) )

            );

            ?>

            <?php

              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'neori' ),
                'after'  => '</div>',
              ) );

            ?>

            <?php the_tags( '<div class="tags">', '', '</div>' ); ?>

            <?php if(get_theme_mod( 'neori_show_single_post_posts_navi_setting' ) == true) : ?>
              <?php get_template_part( 'template-parts/posts-navi' ); ?>
            <?php endif; ?>



            <div class="single-bottom-area">

              <?php if (function_exists('add_neori_social_share_buttons_icons')) { echo wp_kses_post(do_shortcode('[neori-social-share-icons]')); } ?>

            </div><!-- /.single-bottom-area -->

          </div><!-- /.entry-content -->

      </article>



<!--

BELOW POST

-->

      <?php if(get_theme_mod( 'neori_show_single_post_author_bio_setting' ) == true) : ?>
        <?php get_template_part( 'template-parts/single-author-bio' ); ?>
      <?php endif; ?>

      <?php if(!get_theme_mod('neori_hide_single_post_related_posts_setting')) : ?>
        <?php get_template_part( 'template-parts/related-posts' ); ?>
      <?php endif; ?>



      <?php if ( comments_open() || get_comments_number() ) : comments_template(); ?>
      <?php endif; ?>



    </div><!-- /content -->

  </div><!-- /.row -->

</div><!-- /.container -->
