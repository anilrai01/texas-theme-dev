<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Buziness
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function buziness_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class for global layout.
	$sidebar_layout = buziness_get_option('layout_options'); 
	$classes[] = esc_attr( $sidebar_layout );

	return $classes;
}
add_filter( 'body_class', 'buziness_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function buziness_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'buziness_pingback_header' );

/**
 * Function to get Sections 
 */
function buziness_get_sections() {
    $sections = array( 'featured-slider', 'additional-info', 'featured-courses', 'cta', 'gallery', 'testimonial', 'featured-plans', 'blog' );
    $enabled_section = array();
    foreach ( $sections as $section ){
    	
        if (false == buziness_get_option('disable_'.$section.'_section')){
            $enabled_section[] = array(
                'id' => $section,
                'menu_text' => esc_html( buziness_get_option('' . $section . '_menu_title','') ),
            );
        }
    }
    return $enabled_section;
}

if ( ! function_exists( 'buziness_the_excerpt' ) ) :

	/**
	 * Generate excerpt.
	 *
	 * @since 1.0.0
	 *
	 * @param int     $length Excerpt length in words.
	 * @param WP_Post $post_obj WP_Post instance (Optional).
	 * @return string Excerpt.
	 */
	function buziness_the_excerpt( $length = 0, $post_obj = null ) {

		global $post;

		if ( is_null( $post_obj ) ) {
			$post_obj = $post;
		}

		$length = absint( $length );

		if ( 0 === $length ) {
			return;
		}

		$source_content = $post_obj->post_content;

		if ( ! empty( $post_obj->post_excerpt ) ) {
			$source_content = $post_obj->post_excerpt;
		}

		$source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
		$trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
		return $trimmed_content;

	}

endif;

//  Customizer Control
if (class_exists('WP_Customize_Control') && ! class_exists( 'buziness_Image_Radio_Control' ) ) {
	/**
 	* Customize sidebar layout control.
 	*/
	class buziness_Image_Radio_Control extends WP_Customize_Control {

		public function render_content() {

			if (empty($this->choices))
				return;

			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<ul class="controls" id='buziness-img-container'>
				<?php
				foreach ($this->choices as $value => $label) :
					$class = ($this->value() == $value) ? 'buziness-radio-img-selected buziness-radio-img-img' : 'buziness-radio-img-img';
					?>
					<li style="display: inline;">
						<label>
							<input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
								$this->link();
								checked($this->value(), $value);
								?> />
							<img src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
						</label>
					</li>
					<?php
				endforeach;
				?>
			</ul>
			<?php
		}

	}
}	