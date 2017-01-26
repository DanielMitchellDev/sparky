<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-meta">
				<div class="row picture-row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1">
						<img src="<?php echo get_theme_mod('sidebar_photo', get_bloginfo('template_url') . '/inc/img/selfy.jpg'); ?>" class="img-responsive img-circle center-block">
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12 text-center">
						<h3><?php echo get_theme_mod('sidebar_name', 'John Doe'); ?></h3>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12 text-center">
						<a href="<?php echo get_theme_mod('sidebar_social_link_1', 'facebook.com'); ?>">
							<img src="<?php echo get_theme_mod('sidebar_social_icon_1', get_bloginfo('template_url') . '/inc/img/facebook.png'); ?>" class="social-icon">
						</a>
						<a href="<?php echo get_theme_mod('sidebar_social_link_2', 'instagram.com'); ?>">					
							<img src="<?php echo get_theme_mod('sidebar_social_icon_2', get_bloginfo('template_url') . '/inc/img/instagram.png'); ?>" class="social-icon">
						</a>	
						<a href="<?php echo get_theme_mod('sidebar_social_link_3', 'twitter.com'); ?>">				
							<img src="<?php echo get_theme_mod('sidebar_social_icon_3', get_bloginfo('template_url') . '/inc/img/twitter.png'); ?>" class="social-icon">
						</a>	
					</div>
				</div>
			

				<?php if(is_active_sidebar('slot1')) : ?>	
				<div class="row">
					<div class="col-xs-12 text-center">
						<?php dynamic_sidebar('slot1'); ?>
					</div>
				</div>
				<?php endif; ?>


				<?php if(is_active_sidebar('slot2')) : ?>	
				<div class="row">
					<div class="col-xs-12 text-center">
						<?php dynamic_sidebar('slot2'); ?>
					</div>
				</div>
				<?php endif; ?>


				<?php if(is_active_sidebar('slot3')) : ?>	
				<div class="row">
					<div class="col-xs-12 text-center">
						<?php dynamic_sidebar('slot3'); ?>
					</div>
				</div>
				<?php endif; ?>
					


			</div><!-- /.col-meta -->





			<!-- 
			====================
				STANDARD POST
			====================
			-->

			<div class="col-md-8 col-md-offset-1 col-blog">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row blog-plate">
				 	<div class="col-xs-12">
				 		<div class="row">
				 		 	<div class="col-xs-12 blog-picture-plate">
				 		 		<?php the_post_thumbnail(); ?>
				 		 	</div>
				 		 	<div class="col-xs-12 text-center blog-title-plate">
				 		 		<h3><?php the_title(); ?></h3>
				 		 	</div>
				 		 	<div class="col-xs-12 text-center blog-author-plate">
				 		 		<h5><?php the_author(); ?></h5>
				 		 	</div>
				 		 	<div class="col-xs-12 text-center blog-date-plate">
				 		 		<h5><?php the_time('F j, Y'); ?></h5>
				 		 	</div>
				 		 	<div class="col-xs-12 text-center blog-comment-plate">
				 		 		<h5><?php comments_number(); ?></h5>
				 		 	</div>	
				 		</div>
				 	</div>
				 	<div class="col-xs-12">
				 		<div class="row">
				 			<div class="col-xs-12">
				 				<p class="blog-excerpt"><?php echo get_the_content(); ?><a href="<?php the_permalink(); ?>">READ MORE</a></p>
				 			</div>
				 		</div>
				 	</div>
				 	<div class="col-xs-12 blog-footer">
				 		<div class="row footer-divider">
				 			<div class="col-xs-6 col-xs-offset-3 footer-divider-line"></div>
				 		</div>
				 		<div class="row category-row">
				 			<div class="col-xs-12 text-center">
				 				<?php the_category(); ?>
				 			</div>
				 		</div>
				 		<div class="row tag-row">
				 			<div class="col-xs-12 text-center tag-plate">
				 				<?php the_tags('<ul><li>', '</li><li>', '</li></ul>' ); ?>
				 			</div>
				 		</div>
				 		<div class="col-xs-12">
							<?php comments_template(); ?>
						</div>
				 	</div>
				</div>							      
		<?php endwhile; endif; ?>

			</div>





		</div><!-- /.row end of main row -->
	</div><!-- /.container  end of Main -->



<?php get_footer(); ?>