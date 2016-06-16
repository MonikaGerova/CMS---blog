<?php get_header(); ?>
	 <style type="text/css" >
					
					.dynamic-content{
						max-height:275px;
						overflow:hidden;
						margin-bottom: 15px;
					}
					.dynamic-content p{
						min-height: 80px;
					}
					.read-more{
						background: #FFF;
						color: #333;
						font-style: italic;
						text-decoration: none;
						border: 1px solid #333;
						position: relative;
						left: 330px;
						border-radius: 5px;
						font-weight: bold;
					}
					.read-more:hover {
						background: #333;
						color: #FFF;
						padding: 0 2px 0px 6px;
						text-decoration: underline;
					}
				</style>

			
        		<?php
			if(have_posts()):
			?>
				<h2>Results: </h2>
			<?php	while(have_posts()):
				
					the_post();
		?>
				<article>
					
			  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			  
			  <div class="dynamic-content" title="<?php bloginfo('description'); ?>"><?php the_content();?></div>
			  <p class="tags"><?php the_tags('Tagged with: ', ' &sdot;	' ); ?></p>
			  <a href="<?php the_permalink();?>" class="read-more" title="<?php bloginfo('description'); ?>">Read more...</a>
			  </article>
			  
			  
		<?php
				endwhile;
			else:
		?>
			<h2>Nothing found</h2>
			<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
		<?php endif; ?>

<?php get_sidebar();?>		
<?php get_footer();?>

	<?php
	if(!dynamic_sidebar('sidebar1')):
 ?>
		
		<style type="text/css">
			#main {
				background: #f5f5f5 url('<?php echo get_template_directory_uri();  ?>/images/page-colbg.png') repeat-y;
			}
			#content {
				width: 650px;
			}
			#content article img {
				display: inline;
				float: left;
				margin-right: 10px;
			}
			#content article .size-full{
				max-height: 468px;
				max-width: 626px;
			}
			
		</style>
 <?php
	endif;
	?>