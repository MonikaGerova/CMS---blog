<?php get_header();?>
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
						left: 330px;
						position: relative;
						border-radius: 5px;
						font-weight: bold;
					}
					.read-more:hover {
						background: #333;
						color: #FFF;
						padding: 0 2px 0px 6px;
						text-decoration: underline;
					}
					.category{
						padding:0;
					}
					#content .category-title{
						margin:0;
						min-width:100px;
						color: #666;
						font-size: 10px;
						font-weight: 500;
						letter-spacing: 0.1em;
						line-height: 2.6em;
						text-transform: uppercase;
					}
				</style> 
				<header class="category">
					<h1 class="category-title"><?php
						printf( __( 'Category : %s' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>
				</header>

	<?php if ( have_posts() ) :  ?>
				
				<?php while(have_posts()):
				
					the_post();
				?>
				
				<article>
					
					<h2><a href="<?php the_permalink();?>" title="<?php bloginfo('description'); ?>">  <?php the_title();?></a></h2>
					<div class="dynamic-content"><?php the_content();?></div>
						<p class="tags"><?php the_tags('Taggs: ', ' &sdot;	' ); ?></p>
					<a href="<?php the_permalink();?>" class="read-more" title="<?php bloginfo('description'); ?>">Read more...</a>
				</article>	
					
				<?php endwhile; ?>
				
			<?php endif; ?>
<?php get_sidebar();?>		
<?php get_footer();?>
