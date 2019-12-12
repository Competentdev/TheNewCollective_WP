<div class="single-author-bio">

	<?php echo get_avatar( get_the_author_meta('user_email'), '125', '' ); ?>

	<div class="single-author-bio-text">

		<h3><?php the_author_posts_link(); ?></h3>

		<div><?php esc_textarea(the_author_meta('description'));  ?></div>


		<div class="single-bottom-area">

			<div class="social-icons">
				<a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-instagram"></i></a>
			</div><!-- /.social-icons -->

		</div><!-- /.single-bottom-area -->

	</div><!-- /.single-author-bio-text -->

</div><!-- /.single-author-bio row -->
