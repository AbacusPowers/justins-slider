<?php
/**
 * Plugin Name: J Slider
 * Plugin URI: http://360zen.com
 * Description: A Slider for Custom Post Types. Uses SlidesJS.
 * Version: 0.5
 * Author: Justin Maurer
 * Author URI: http://360zen.com
 * License: DON'T USE THIS. IT'S NOT READY.
 */
include( plugin_dir_path( __FILE__ ) . 'options.php');
// include( get_stylesheet_directory_uri() . 'jslider/jstyle.css');

/**
*ENQUEUE SCRIPT
**/
function load_slides_js() {
	wp_enqueue_script(
		'slides_js',
		plugins_url( '/js/jquery.slides.js', __FILE__ ),
		array( 'jquery' ),
		false
	);
}
add_action( 'wp_enqueue_scripts', 'load_slides_js' );

/**
*LOAD SLIDER PARAMETERS
**/
function load_fire_js() {
	wp_enqueue_script( 'fire-slide', plugins_url( '/js/fire.js', __FILE__ ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_fire_js' );

/**
*LOAD STYLES
**/
function load_jslider_style() {
	wp_register_style( 'jslider-style', plugins_url( 'jslider-style.css', __FILE__ ));
	wp_enqueue_style('jslider-style');
}
add_action( 'wp_enqueue_scripts', 'load_jslider_style' );


/**
*CREATE TEMPLATE TAG
**/
function home_slider_go() {  
	echo '<div id="jslider">';
	/**THE CUSTOM POST TYPE**/
    
	$options = get_option('post_kind');
	$args = array( 'post_type' => 'slides', 'orderby' => 'rand' );
	$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();
				$post = $loop->post;
				$featured = get_post_meta($post->ID, '_cmb2_slider_checkbox', true);
				if ( $featured ) {
					//error_log('All set!!!');

					echo '<div class="slide">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image');
						$link = get_post_meta(get_the_ID(),'_cmb2_slider_link',true);
						echo '<div class="slideImg" style="background-image: url('.$image[0].');"><a href="'.$link.'">';
						the_post_thumbnail('large');
						echo '</a></div>';
					}
		?>
					<a href="<?php echo $link; ?>"><div class="slideInfoContainer">
					<div class="slideContent">
					<h2><?php the_title();?></h2>

					<?php
					echo '</div></div></a></div>';
				}
			endwhile; 
			else: echo 'Sorry. No posts matched your criteria'; 
		endif;
		echo '<a href="#" title="Previous" class="slidesjs-previous slidesjs-navigation"><img src="'.plugins_url( '/images/prev-arrow.png', __FILE__ ).'"/></a>
		<a href="#" title="Next" class="slidesjs-next slidesjs-navigation"><img src="'.plugins_url( '/images/next-arrow.png', __FILE__ ).'"/></a></div>';
}


function amf_home_slider_go() {  
	echo '<div id="jslider">';
	/**THE CUSTOM POST TYPE**/
    
	$options = get_option('post_kind');
	$args = array( 'post_type' => 'slides', 'orderby' => 'rand' );
	$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();
				$post = $loop->post;
				$featured = get_post_meta($post->ID, '_cmb2_slider_checkbox4', true);
				if ( $featured ) {
					//error_log('All set!!!');

					echo '<div class="slide">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image');
						$link = get_post_meta(get_the_ID(),'_cmb2_slider_link',true);
						echo '<div class="slideImg" style="background-image: url('.$image[0].');"><a href="'.$link.'">';
						the_post_thumbnail('large');
						echo '</a></div>';
					}
		?>
					<a href="<?php echo $link; ?>"><div class="slideInfoContainer">
					<div class="slideContent">
					<h2><?php the_title();?></h2>

					<?php
					echo '</div></div></a></div>';
				}
			endwhile; 
			else: echo 'Sorry. No posts matched your criteria'; 
		endif;
		echo '<a href="#" title="Previous" class="slidesjs-previous slidesjs-navigation"><img src="'.plugins_url( '/images/prev-arrow.png', __FILE__ ).'"/></a>
		<a href="#" title="Next" class="slidesjs-next slidesjs-navigation"><img src="'.plugins_url( '/images/next-arrow.png', __FILE__ ).'"/></a></div>';
}
function ca_slider_go() {  
	echo '<div id="jslider">';
	/**THE CUSTOM POST TYPE**/
    
	$options = get_option('post_kind');
	$args = array( 'post_type' => 'slides', 'orderby' => 'rand' );
	$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();
				$post = $loop->post;
				$featured = get_post_meta($post->ID, '_cmb2_slider_checkbox2', true);

				if ( $featured ) {
					//error_log('All set!!!');

					echo '<div class="slide">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image');
						echo '<div class="slideImg" style="background-image: url('.$image[0].');"><a href="'.get_permalink().'">';
						the_post_thumbnail('large');
						echo '</a></div>';
					}
		?>
					<a href="<?php echo get_permalink(); ?>"><div class="slideInfoContainer">
					<div class="slideContent">
					<h2><?php the_title();?></h2>

					<?php
					echo '</div></div></a></div>';
				}
			endwhile; 
			else: echo 'Sorry. No posts matched your criteria'; 
		endif;
		echo '<a href="#" title="Previous" class="slidesjs-previous slidesjs-navigation"><img src="'.plugins_url( '/images/prev-arrow.png', __FILE__ ).'"/></a>
		<a href="#" title="Next" class="slidesjs-next slidesjs-navigation"><img src="'.plugins_url( '/images/next-arrow.png', __FILE__ ).'"/></a></div>';
}
function tsf_slider_go() {  
	echo '<div id="jslider">';
	/**THE CUSTOM POST TYPE**/
    
	$options = get_option('post_kind');
	$args = array( 'post_type' => 'slides', 'orderby' => 'rand' );
	$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();
				$post = $loop->post;
				$featured = get_post_meta($post->ID, '_cmb2_slider_checkbox3', true);
				if ( $featured ) {
					//error_log('All set!!!');

					echo '<div class="slide">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image');
						echo '<div class="slideImg" style="background-image: url('.$image[0].');"><a href="'.get_permalink().'">';
						the_post_thumbnail('large');
						echo '</a></div>';
					}
		?>
					<a href="<?php echo get_permalink(); ?>"><div class="slideInfoContainer">
					<div class="slideContent">
					<h2><?php the_title();?></h2>

					<?php
					echo '</div></div></a></div>';
				}
			endwhile; 
			else: echo 'Sorry. No posts matched your criteria'; 
		endif;
		echo '<a href="#" title="Previous" class="slidesjs-previous slidesjs-navigation"><img src="'.plugins_url( '/images/prev-arrow.png', __FILE__ ).'"/></a>
		<a href="#" title="Next" class="slidesjs-next slidesjs-navigation"><img src="'.plugins_url( '/images/next-arrow.png', __FILE__ ).'"/></a></div>';
}

function generic_slider_go($sliderID) {  
	echo '<div id="jslider">';
	/**THE CUSTOM POST TYPE**/
    
	$options = get_option('post_kind');
	$args = array( 'post_type' => 'slides', 'orderby' => 'rand' );
	$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();
				$post = $loop->post;
				$featured = get_post_meta($post->ID, '_cmb2_slider_checkbox'.$sliderID, true);
				$showtitle = get_post_meta($post->ID, '_cmb2_show_title', true);
				if ( $featured ) {

					echo '<div class="slide">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-image');
						$link = get_post_meta(get_the_ID(),'_cmb2_slider_link',true);
						echo '<div class="slideImg" style="background-image: url('.$image[0].');"><a href="'.$link.'">';
						the_post_thumbnail('large');
						echo '</a></div>';
					}
		?>
					<a href="<?php echo $link; ?>"><div class="slideInfoContainer">
					<div class="slideContent">
					<?php if ($showtitle) { ?><h2><?php the_title();?></h2><?php } ?>

					<?php
					echo '</div></div></a></div>';
				}
			endwhile; 
			else: echo 'Sorry. No posts matched your criteria'; 
		endif;
		// echo '<a href="#" title="Previous" class="slidesjs-previous slidesjs-navigation"><img src="'.plugins_url( '/images/prev-arrow.png', __FILE__ ).'"/></a>
		// <a href="#" title="Next" class="slidesjs-next slidesjs-navigation"><img src="'.plugins_url( '/images/next-arrow.png', __FILE__ ).'"/></a></div>';
}

/**
*ADD ADMIN PAGE
**/
// add_action('admin_menu', 'jslider_admin_add_page');
function jslider_admin_add_page() {
	add_options_page('JSlider Settings', 'JSlider Menu', 'manage_options', 'jslider', 'jslider_options_page');
}