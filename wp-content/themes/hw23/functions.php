<?php
/**
 * hw23 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hw23
 */

//disable admin bar
show_admin_bar( false );

if ( ! function_exists( 'hw23_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hw23_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hw23, use a find and replace
		 * to change 'hw23' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hw23', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'hw23' ),
			'blog'    => esc_html__( 'Blog', 'hw23' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'hw23_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'hw23_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hw23_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hw23_content_width', 640 );
}

add_action( 'after_setup_theme', 'hw23_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hw23_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hw23' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'hw23_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hw23_scripts() {
	//Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'slick-slider', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'switcher', get_template_directory_uri() . '/css/theme-color/' .
	                              get_option( 'sample_theme_options' )["selectinput"] . '.css' );
	wp_enqueue_style( 'hw23-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hw23-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hw23-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
//	<!-- initialize jQuery Library -->
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '20151215', true );
//  <!-- Include all compiled plugins (below), or include individual files as needed -->
//  <!-- Bootstrap -->
	wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
//  <!-- Slick Slider -->
	wp_enqueue_script( 'slick_script', get_template_directory_uri() . '/js/slick.js', array(), '20151215', true );
//  <!-- Counter -->
	wp_enqueue_script( 'waypoints_script', get_template_directory_uri() . '/js/waypoints.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery.counterup_script', get_template_directory_uri() . '/js/jquery.counterup.js', array(), '20151215', true );
//  <!-- mixit slider -->
	wp_enqueue_script( 'jquery.mixitup_script', get_template_directory_uri() . '/js/jquery.mixitup.js', array(), '20151215', true );
//  <!-- Add fancyBox -->
	wp_enqueue_script( 'jquery.fancybox.pack_script', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '20151215', true );
//  <!-- Wow animation -->
	wp_enqueue_script( 'wow_script', get_template_directory_uri() . '/js/wow.js', array(), '20151215', true );
//  <!-- Custom js -->
	wp_enqueue_script( 'custom_script', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/form.js', array( 'jquery' ) );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'hw23_scripts' );
function load_fonts() {
//	Open Sans for body font
	wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans' );
	//Raleway for Title
	wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Raleway' );
	wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Pacifico' );

	wp_enqueue_style( 'googleFonts' );
}

add_action( 'wp_print_styles', 'load_fonts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/theme-options.php';
//form
add_filter( 'comment_form_default_fields', 'mytheme_remove_url' );
function mytheme_remove_url( $arg ) {
	$arg['url'] = '';

	return $arg;
}

;
add_filter( 'comment_form_fields', 'kama_reorder_comment_fields' );
function kama_reorder_comment_fields( $fields ) {
	// die(print_r( $fields )); // посмотрим какие поля есть
	$new_fields = array(); // сюда соберем поля в новом порядке
	$myorder    = array( 'author', 'email', 'url', 'comment' ); // нужный порядок
	foreach ( $myorder as $key ) {
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}
	// если остались еще какие-то поля добавим их в конец
	if ( $fields ) {
		foreach ( $fields as $key => $val ) {
			$new_fields[ $key ] = $val;
		}
	}

	return $new_fields;
}

///form

wp_enqueue_script( 'my_script', get_template_directory_uri() . '/js/form.js', array( 'jquery' ) );
wp_localize_script( 'my_script', 'ajax_object',
	array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('ajax_object-nonce')
	) );

// Same handler function...
add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );
function my_action_callback() {
	$nonce = $_POST['nonce'];
	$admin_mail = 'blackjoker993@gmail.com';
	$message    = "\n" . 'Сообщение от  :' . $_POST['name'] .
	              "\n" . 'E-mail отправителя: ' . $_POST['email'] .
	              "\n" . 'Содержание сообщения:' . $_POST['message'];
	if ( !wp_verify_nonce( $nonce, 'ajax_object-nonce' ) )
		die('Stop');
	if ( wp_mail( $admin_mail, 'Тема сообщения geekhub', $message ) ) {
		echo 'Тестовое сообщение успешно отправлено, проверьте свой почтовый ящик.';
	} else {
		echo 'Не удалось отправить письмо :(';
	};
	echo $message;
	wp_die();
	exit;
}
