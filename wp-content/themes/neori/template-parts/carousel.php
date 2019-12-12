<div id="carousel" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">

		<?php

		$carousel_query = new WP_Query(array(
			'type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'Featured',
			'posts_per_page' => 1,
			'ignore_sticky_posts' => 1,
		));

		while ( $carousel_query->have_posts() ) :

		$carousel_query->the_post();

		?>

		<div class="carousel-item active">

			<?php the_post_thumbnail('post-thumbnail',  array('class' => 'd-block w-100 carousel-image', 'title' => 'First slide'));?>

			<div class="bottom-gradient">

				<div class="carousel-caption d-block">

					<div class="hover-effect">

						<h3><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>

						<?php if(!get_theme_mod('neori_carousel_custom_excerpt_setting')) : ?>

						<p class="d-sm-block d-md-none"><a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></a></p>

						<p class="d-none d-md-block"><a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></a></p>
						
					</div>

					<?php
					$user = wp_get_current_user();
					if ( $user ) :
					?>
					<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" style="width: 30px; border-radius: 30px;"/>
					<?php endif; ?>
					<span class="avatar-name"> <?php echo get_the_author() . ' • '; ?> </span>
					<span class="timeline"><?php the_time( get_option('date_format') ); ?></span>

					<?php else: ?>   

					<p><a href="<?php echo get_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p> 

					<?php endif; ?>   

				</div><!-- /.carousel-caption -->

			</div>

		</div><!-- /.carousel-item -->

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>



		<?php

		$carousel_query = new WP_Query(array(
			'type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'Featured',
			'posts_per_page' => esc_html (get_theme_mod ('neori_carousel_posts_number_setting', '')),
			'offset' => 1,
			'ignore_sticky_posts' => 1,
		));

		while ( $carousel_query->have_posts() ) :

		$carousel_query->the_post();

		?>

		<div class="carousel-item">

			<?php the_post_thumbnail('post-thumbnail',  array('class' => 'd-block w-100 carousel-image', 'title' => 'Second Slide'));?>

			<div class="bottom-gradient">

				<div class="carousel-caption d-block">

					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>

					<?php if(!get_theme_mod('neori_carousel_custom_excerpt_setting')) : ?>

					<p class="d-sm-block d-md-none"><a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></a></p>

					<p class="d-none d-md-block"><a href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></a></p>

					<?php
					$user = wp_get_current_user();
					if ( $user ) :
					?>
					<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" style="width: 30px; border-radius: 30px;"/>
					<?php endif; ?>
					<span class="avatar-name"> <?php echo get_the_author() . ' • '; ?> </span>
					<span class="timeline"><?php the_time( get_option('date_format') ); ?></span>

					<?php else: ?>   

					<p><a href="<?php echo get_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p> 

					<?php endif; ?> 

				</div><!-- /.carousel-caption -->
				
			</div>

		</div><!-- /.carousel-item -->

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	</div><!-- /.carousel-inner -->

	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">

		<span class="carousel-control-next-icon" aria-hidden="true"></span>

	</a>

</div><!-- /.carousel -->
