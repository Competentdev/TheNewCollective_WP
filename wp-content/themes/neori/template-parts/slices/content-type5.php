<div class="card">

  <article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

    <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('medium_large', array('class' => 'card-img')); ?></a>

    <div class="card-img-overlay">

      <h3 class="card-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

      <p class="card-meta">

        <?php echo get_avatar( get_the_author_meta('user_email'), '20', '' ); ?>
        <span class="author"><?php the_author_posts_link(); ?></span>
        <span class="date"><?php the_time( get_option('date_format') ); ?></span>
        <span class="min-read"><?php if (class_exists('Reading_Time_WP')) { echo wp_kses_post(do_shortcode('[rt_reading_time]')); esc_html_e( 'min', 'neori' ); } ?></span> 

      </p><!-- /.card-meta -->

    </div><!-- /.card-img-overlay -->

  </article>

</div><!-- /.card -->
