<?php
/**
 * Custom template tags for this theme
 */

/**
 * Custom buttons for sections
 **/
if ( ! function_exists( 'custom_button' ) ) :
	function custom_button( $links = array( 'custom_link', 'dropdown_link', 'button_text' ) ) {
		$custom_link   = get_theme_mod( $links['custom_link'] );
		$dropdown_link = get_page_link( intval( get_theme_mod( $links['dropdown_link'] ) ) );
		$button_text   = get_theme_mod( $links['button_text'] );
		if ( $custom_link ) :
			printf( '<a href="' . $custom_link . '" class="main-button">' . $button_text . '</a>' );
		else :
			printf( '<a href="' . $dropdown_link . '" class="main-button">' . $button_text . '</a>' );
		endif;
	}
endif;