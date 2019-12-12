<div class="card">

  <article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

    <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('medium_large', array('class' => 'card-img')); ?></a>

    <div class="card-img-overlay">

      	<h3 class="card-title"><a class="post-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="card-text post-content" style="color: rgba(255, 255, 255, 0.8) !important; font-weight: 100;">
			<?php if(!get_theme_mod('neori_slice_type1_custom_excerpt_setting')) : ?>
				<?php echo wp_trim_words( get_the_content(), 17, '...' ); ?>
			<?php else: ?>   
				<?php echo get_the_excerpt(); ?> 
			<?php endif; ?>
		</p>

      <p class="card-meta">

        <?php echo get_avatar( get_the_author_meta('user_email'), '30', '' ); ?>
        <span class="avatar-name"> <?php echo get_the_author() . ' • '; ?> </span>
		<span class="timeline"><?php the_time( get_option('date_format') ); ?></span>

      </p><!-- /.card-meta -->

    </div><!-- /.card-img-overlay -->

  </article>

</div><!-- /.card -->
