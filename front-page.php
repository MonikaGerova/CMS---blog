<?php get_header(); ?>
	 <style type="text/css" scoped>
					
					.dynamic-content{
						max-height:275px;
						overflow:hidden;
						margin-bottom: 15px;
					}
					.dynamic-content p{
						min-height: 80px;
					}
					
					
					
				</style> 

			<h2>Recent Posts</h2>
        		<?php
			if(have_posts()):
			
				while(have_posts()):
				
					the_post();
		?>
				<article>
					
			  <h2><a href="<?php the_permalink();?>" title="<?php bloginfo('description'); ?>"><?php the_title();?></a></h2>
			  
			  <div class="dynamic-content"><?php the_content();?></div>
			  <p class="tags"><?php the_tags('Tagged with: ', ' &sdot;	' ); ?></p>
			  <a href="<?php the_permalink();?>" class="read-more" title="<?php bloginfo('description'); ?>">Read more...</a>
			  </article>
			  
			  
		<?php
				endwhile;
			endif;
		?>

<?php get_sidebar();?>		
<?php get_footer();?>