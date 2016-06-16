</section> <!-- end of content -->

<aside id="sidebar1">
	<?php
	if(!dynamic_sidebar('sidebar1')):
 ?>
		
		<style type="text/css" scoped>
		@media only screen and(min-width: 483px){
			#main {
				background: #f5f5f5 url('<?php echo get_template_directory_uri();  ?>/images/page-colbg768px.png') repeat-y;
			}
			.dynamic-content{
				max-width:525px;
			}
			#content{
				width: 530px;
			}
			article{
				max-width:525px;
			}
			.read-more{
			left: 395px;
				
			}
			
		}
		
		@media only screen and (min-width: 770px  ){ 
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
			.read-more{
				background: #FFF;
				color: #333;
				font-style: italic;
				text-decoration: none;
				border: 1px solid #333;
				position: relative;
				left: 540px;
				border-radius: 5px;
				font-weight: bold;
			}
			.read-more:hover {
				background: #333;
				color: #FFF;
				padding: 0 2px 0px 6px;
				text-decoration: underline;
			} 
		}
			
		
			
		
		</style> 
 <?php
	endif
 ?>
</aside>
<aside id="sidebar2"> <!-- Sidebar 2 -->
<?php
	if(!dynamic_sidebar('sidebar2')):
 ?>
	<h3>Stuff</h3>
			<ul>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
			</ul>

		<h3>More Stuff</h3>
			<ul>
				<li><a href="#">Blah, blah and all blah</a></li>
				<li><a href="#">More blah</a></li>
			</ul>

		<h3>S'more Goodies</h3>
			<ul>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
			</ul>

		<h3>Did You Know?</h3>
			<ul>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
			</ul>

		<h3>FAQ</h3>
			<ul>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
				<li><a href="#">Curabitur sodales</a></li>
				<li><a href="#">Sed dignissim</a></li>
				<li><a href="#">Fusce nec</a></li>
				<li><a href="#">Nulla quis</a></li>
			</ul>
  <?php 
	endif;
  ?>

</aside>
			</section><!-- end of #main content and sidebar-->
		
		<?php pagination(); ?> 
		<nav class="bot-menu"><!-- top nav -->
		<?php wp_nav_menu(
			array(
				'theme_location' => 'bottom-site-menu',
				'container_class' => 'menu',
				'menu_id'        => 'ul1',
				'depth'           => 2
		));
		?>
		</nav><!-- end of top nav -->
		<footer>
		
		<section id="footer-area">
				<aside id="footer">
					<?php
						if(!dynamic_sidebar('footer')):
					 ?>
							<!--<div id="coppyRights"> Coppyright &copy; 2013  </div>
							<style type="text/css">
							#coppyRights{
								text-align: center;
								font-size: 20px;
								}
							</style> -->
							<img src="<?php header_image(); ?>" height="200" width="940" alt="" />
					 <?php
						endif;
					 ?>
				</aside>