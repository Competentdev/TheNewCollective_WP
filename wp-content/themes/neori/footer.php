<footer class="footer">

  <div class="container">
	
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-padding" id="footer1">
			<div class="footer-title" style="height: 25px;">
				<div class="logo" style="background-image: url('https://newcoll.shinebloom.com/wp-content/uploads/2019/12/footer-logo.png'); width: 100%; height: 40px;">
				</div>
			</div>
			<div class="footer-content">
				Capacity building assistance to community based organizations engaged in HIV prevention across the United States and its affiliated territories. The C4H project is funded to provide CBA under Funding Opportunity Announcement 09-906 and this website is supported by Cooperative Agreement Number U65/PS001651 from The US Centers for Disease Control and Prevention.
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-padding" id="footer2">
			<div class="footer-title">
				MOST RECENT
			</div>
			
			
			<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

			<div class="footer-content">
				<div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
				<span class="avatar-name"><?php the_author(); ?> • </span>
				<span class="timeline"><?php the_time( get_option('date_format') ); ?></span>
			</div>

			<?php 
				endwhile;
				wp_reset_postdata();
			?>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-padding" id="footer3">
			<div class="footer-title">
				CONTACT US
			</div>
			<div class="footer-content">
				<table style="margin: 0px; border-collapse: separate;">
					<tr>
						<td style="padding: 0px;">
							<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						</td>
						<td style="padding: 0px;">
							<span class="content">Capacity for Health c/o APIAHF One Kaiser Plaza, Suite 850 Oakland, CA 94612</span>
						</td>
					</tr>
				</table>
			</div>
			<div class="footer-content">
				<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
				<span class="content">415-568-3308</span>
			</div>
			<div class="footer-content">
				<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
				<span class="content">name@email.com</span>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-padding" id="footer4">
			<div class="footer-title">
				FOLLOW US
			</div>
			<div class="footer-content">
				<div class="social-icons">
				  <a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-facebook icon"></i></a>
				  <a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-twitter icon"></i></a>
				  <a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-linkedin icon"></i></a>
				  <a href="https://newcoll.shinebloom.com/?customize_changeset_uuid=5becbce8-215a-42ef-b030-7c4df8fe6ffa&amp;customize_theme=neori&amp;customize_messenger_channel=preview-16&amp;customize_autosaved=on" target="_blank"><i class="fa fa-instagram icon"></i></a>
				</div><!-- /.social-icons -->
			</div>
		</div>
	</div>
    
	

    
	  <div class="copyright" id="footer5">
		  Privacy Policy | Web Development by Dayspring Technologies, Inc. ©2011-2105 The New Collective
	  </div>

  </div><!-- /.container -->

</footer>



<a href="#0" class="buttontop-top"><i class="fa fa-arrow-up"></i></a>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
