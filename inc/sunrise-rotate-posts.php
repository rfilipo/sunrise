<?php
/**
 * Rotate posts with featured image
 */

class Sunrise_Rotate_Posts extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'sunrise_rotate_posts',
			'description' => 'Sunrise Rotate Posts creates a sliding area with featured images from posts',
		);
		parent::__construct( 'sunrise_rotate_posts', 'Sunrise Rotate Posts', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		require get_template_directory() . '/inc/rotate_posts.php';
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}
