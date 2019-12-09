<?php get_header(); ?>

<div class="container">

  <main class="belowheader">

    <div class="archive-description">

      <h1><?php single_term_title(''); ?></h1>

      <?php the_archive_description(''); ?>

    </div><!-- /.archive-description -->

    <div class="row">

      <div class="content col-lg-9 mx-auto align-items-center">

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content-blog'); ?>

          <?php endwhile; ?>

            <?php if(!get_theme_mod('neori_enable_numbered_pagination_setting')) : ?>

              <?php neori_classic_pagination(); ?>

            <?php else : ?>

              <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>  

            <?php endif; ?>    

        <?php else : ?>

          <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

      </div><!-- /.content -->

      <aside class="sidebar col-12 col-sm-6 col-md-6 col-lg-3 mx-auto align-items-center widget-area" id="secondary">

        <?php get_sidebar(); ?>

      </aside>

    </div><!-- /.row -->

  </main><!-- #main -->

 </div><!--- /.container -->

<?php get_footer(); ?>
