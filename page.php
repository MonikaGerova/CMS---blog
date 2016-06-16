<?php get_header(); ?>

					<?php
			if(have_posts()):
			
				while(have_posts()):
				
					the_post();
		?>
				<article>
				<p class="tags"><?php the_tags('Tagged with: ', ' &sdot;	' ); ?></p>
			  <h2><a href="<?php the_permalink();?>" title="<?php bloginfo('description'); ?>">  <?php the_title();?></a></h2>
				  <div class="dynamic-content"><?php the_content();?></div>
			  </article>
			 
		<?php
				endwhile;
			endif;
		?> 
 <?php comments_template('', true); ?> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>