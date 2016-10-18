<?php require_once('wp_bootstrap_navwalker.php'); ?>
<?php 

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));
	add_theme_support( 'post-thumbnails' );
	add_image_size('blog-img',1024, 615, true);
	add_image_size('slider-img',1440, 500, true);
	

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
		'after_widget' => '</section">',
		'before_title' => '<h2">',
		'after_title' => '</div">',
		));




add_action( 'init', 'create_post_type' );
function create_post_type() {
  
   register_post_type( 'carone_brands',
    array(
      'labels' => array(
        'name' => __( 'Brands' ),
        'singular_name' => __( 'Brand' )
      ),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
    )
  );
   
   register_post_type( 'seminuevos_carone',
    array(
      'labels' => array(
        'name' => __( 'Seminuevos' ),
        'singular_name' => __( 'Seminuevo' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'seminuevos'),
    )
  );




register_post_type( 'kia_carone',
    array(
      'labels' => array(
        'name' => __( 'KIA' ),
        'singular_name' => __( 'KIA' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'kia'),
    )
  );

register_post_type( 'vw_carone',
    array(
      'labels' => array(
        'name' => __( 'VW' ),
        'singular_name' => __( 'VW' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'vw'),
    )
  );

register_post_type( 'chevrolet_carone',
    array(
      'labels' => array(
        'name' => __( 'Chevrolet' ),
        'singular_name' => __( 'Chevrolet' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'chevrolet'),
    )
  );

register_post_type( 'dodge_carone',
    array(
      'labels' => array(
        'name' => __( 'Dodge' ),
        'singular_name' => __( 'Dodge' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'dodge'),
    )
  );

register_post_type( 'jeep_carone',
    array(
      'labels' => array(
        'name' => __( 'Jeep' ),
        'singular_name' => __( 'Jeep' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'jeep'),
    )
  );

register_post_type( 'chrysler_carone',
    array(
      'labels' => array(
        'name' => __( 'Chrysler' ),
        'singular_name' => __( 'Chrysler' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'chrysler'),
    )
  );

register_post_type( 'seat_carone',
    array(
      'labels' => array(
        'name' => __( 'Seat' ),
        'singular_name' => __( 'Seat' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'seat'),
    )
  );


register_post_type( 'ford_carone',
    array(
      'labels' => array(
        'name' => __( 'Ford' ),
        'singular_name' => __( 'Ford' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'ford'),
    )
  );

register_post_type( 'ram_carone',
    array(
      'labels' => array(
        'name' => __( 'Ram' ),
        'singular_name' => __( 'Ram' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'ram'),
    )
  );

register_post_type( 'fiat_carone',
    array(
      'labels' => array(
        'name' => __( 'Fiat' ),
        'singular_name' => __( 'Fiat' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'fiat'),
    )
  );

register_post_type( 'mitsubishi_carone',
    array(
      'labels' => array(
        'name' => __( 'Mitsubishi' ),
        'singular_name' => __( 'Mitsubishi' )
      ),
      'taxonomies' => array('category'),
      'supports' => array('title','editor','thumbnail', 'author', 'comments','excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'mitsubishi'),
    )
  );


   
}


?>