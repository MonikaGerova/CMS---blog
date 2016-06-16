<?php get_header();?>
	 <style type="text/css" scoped>
	
	#content article h2{
		padding-left: 10px;
	}
	.dynamic-content{
		padding-left: 10px;
		margin-bottom: 15px;
		max-width: 448px;
		min-height: 128px;
		
	}

	
</style>
		
		<?php
			if(have_posts()):
			
				while(have_posts()):
				
					the_post();
		?>
				<article>
				<p class="tags"><?php the_tags('Tagged with: ', ' &sdot;	' ); ?></p>
			  <h2><a href="<?php get_permalink();?>" title="<?php bloginfo('description'); ?>" >  <?php the_title();?></a></h2>
				  <div class="dynamic-content"><?php the_content();?></div>
			  </article>
			 
		<?php
				endwhile;
			endif;
		?> 
<?php comments_template('', true); ?> 

<?php get_sidebar();?>		
<?php get_footer();?>

		<?php
	if(!dynamic_sidebar('sidebar1')):
 ?>
		
		<style type="text/css">
		
		@media only screen and(min-width: 483px){
			#main {
				background: #f5f5f5 url('<?php echo get_template_directory_uri();  ?>/images/page-colbg768px.png') repeat-y;
			}
			.dynamic-content{
				max-width:525px;
			}
			#content{
				max-width:530px;
				width: 530px;
			}
			article{
				max-width:525px;
			}
			.read-more{
			left: 395px;
				
			}
			article h2{
				max-width:500px;
				width:400px;
			}
			
		}
		
		@media only screen and (min-width:770px){
			#main {
				background: #f5f5f5 url('<?php echo get_template_directory_uri();  ?>/images/page-colbg.png') repeat-y;
			}
			#content {
				max-width: 670px;
				width:666px;
			}
			#content article{
				max-width: 650px;
			}
			#content article img {
				display: inline;
				float: left;
				margin-right: 10px;
			}
			.dynamic-content{
				max-width:650px;
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
			.dynamic-content{
				padding-left: 10px;
				margin-bottom: 15px;
				max-width: 640px;
				min-height: 128px;
			}
			
		}
		</style>
 <?php
	endif;
	?>
