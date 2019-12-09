<div class="more-author row">

  <div class="card-deck">

    <?php                    

      $author = get_the_author_meta('ID');                    

      $args = array(
        'type' => 'post',
        'post_status' => 'publish',
        'author'        =>  $author, 
        'posts_per_page' => '2',
        'ignore_sticky_posts' => 1,
        'offset' => '1'
      );

      $author_query = new WP_Query($args);

    ?>

    <?php if( $author_query->have_posts() ): while( $author_query->have_posts() ): $author_query->the_post(); ?>

      <div class="custom-card">

        <div class="card bg-black text-white">

          <?php the_post_thumbnail('full', array('class' => 'card-img')); ?>

          <a href="<?php echo get_permalink() ?>" class="card-link-overlay"></a>

          <div class="card-img-overlay">

            <div class="card-text">

              <h4 class="card-title"><a rel="external" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

            </div><!-- /.card-text -->

          </div><!-- /.card-img-overlay -->

        </div><!-- /.card -->

      </div><!-- /.custom-card -->

    <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div><!-- /.card-deck -->

  <p class="caption"><?php esc_html_e( 'More from this author', 'neori' ) ?></p>

</div><!-- /.more-author -->

