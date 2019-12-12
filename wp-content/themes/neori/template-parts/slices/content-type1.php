<div class="card">
	<?php if( get_the_title() != "Donate" ): ?>

	<article class="post-hover-effect" id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('medium_large', array('class' => 'card-img-top')); ?></a>
		
		<div class="card-body">
			
			<h3 class="card-title"><a class="post-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="card-text post-content">

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

		</div><!-- /.card-body -->


	</article>

	<?php else: ?>

	<div class="post-donate">
		<h1>Support the cause</h1>
		<h1>-</h1>
		<h2>ENJOYING YOUR EXPERIENCE, LEAVE US A TIP!</h2>
		<a href="/donate">
			<button><span>LEAVE TIP</span><i class="fa fa-arrow-right"></i></button>
		</a>
	</div>

	<?php endif; ?>    

</div><!-- /.card -->