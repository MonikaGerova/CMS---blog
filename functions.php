<?php
	//Sidebars
	
	$sidebar2_args = array(
		'id' => 'sidebar2',
		'name' => 'sidebar2',
		'description'   => '',
        'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	); 
	
	register_sidebar($sidebar2_args);
	
	$sidebar1_args = array(
		'id' => 'sidebar1',
		'name' => 'sidebar1',
		'description' => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	);
	register_sidebar($sidebar1_args);
	
	//footer sidebar
	$footer_sidebar_args = array(
		'id' => 'footer',
		'name' => 'footer',
		'description'   => '',
        'class'         => '',
		'before_widget' => '<aside class="footer-segment">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	); 
	
	register_sidebar($footer_sidebar_args);

	//Register Menu 
	
	register_nav_menu('top-site-menu', "Top menu");
	register_nav_menu('bottom-site-menu', "Bottom menu");

	
	//Custom header IMAGE
	
	$args = array(
		'flex-width'    => true,
		'width'         => 940,
		'flex-height'    => true,
		'height'        => 200,
		'default-image' => get_template_directory_uri() . '/images/headerimg.jpg',
	);
	add_theme_support( 'custom-header', $args );
	

	//Custom header TEXT
	
	$defaults = array(
		'random-default'         => false,
		'width'                  => 600,
		'height'                 => 36,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '777',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );
	
	
	//Custom Background color/image
	
	$args = array(
		'default-color' => '555',
		/* 'default-image' => get_template_directory_uri() . '/images/background.jpg', */
	);
	add_theme_support( 'custom-background', $args );
	
	//ADMIN TOOLBAR ( the dark grey toolbar on the top of the site)
	
	function pjw_login_adminbar( $wp_admin_bar) {
		if ( !is_user_logged_in() )
		$wp_admin_bar->add_menu( array( 'title' => __( 'Log In' ), 'href' => wp_login_url() ) );
	}
	add_action( 'admin_bar_menu', 'pjw_login_adminbar' );
	add_filter( 'show_admin_bar', '__return_true' , 1000 );

	
	//PAGINATION******
	
	 function pagination() {
	 /*  if( is_singular() )
		  return global($wp_query);
	  /** Stop execution if there's only 1 page */
	/*
	  if( $max_num_pages == 0 )
		 return ;   */
		 
	  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	  $max   = intval( $max_num_pages );
	  
	  /** Add current page to the array */
	  if ( $paged >= 1 )
		  $links[] = $paged;
		  
	  /** Add the pages around the current page to the array */
	  if ( $paged >= 3 ) {
		  $links[] = $paged - 1;
		  $links[] = $paged - 2;
	  }

	  if ( ( $paged + 2 ) <= $max ) {
		  $links[] = $paged + 2;
		  $links[] = $paged + 1;
	  }
	  echo '<div class="navigation"><ul>' . "\n";

	  /** Previous Post Link */

	  if ( get_previous_posts_link() )

		  printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
		  
	  /** Link to first page, plus ellipses if necessary */

	  if ( ! in_array( 1, $links ) ) {
		  $class = 1 == $paged ? ' class="active"' : '';
		  printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		  if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	  }

	  /** Link to current page, plus 2 pages in either direction if necessary */

	  sort( $links );
	  foreach ( (array) $links as $link ) {
		  $class = $paged == $link ? ' class="active"' : '';
		  printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	  }

	  /** Link to last page, plus ellipses if necessary */

	  if ( ! in_array( $max, $links ) ) {
		  if ( ! in_array( $max - 1, $links ) )
			  echo '<li>…</li>' . "\n";
		  $class = $paged == $max ? ' class="active"' : '';
		  printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	  }
	  
	  /** Next Post Link */

	  if ( get_next_posts_link() )

		  printf( '<li>%s</li>' . "\n", get_next_posts_link() );
	  echo '</ul></div>' . "\n";
	}



	
?>


