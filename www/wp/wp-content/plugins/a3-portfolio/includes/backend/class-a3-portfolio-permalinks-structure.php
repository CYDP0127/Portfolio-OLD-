<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'A3_Portfolio_Permalinks_Structure' ) ) :

class A3_Portfolio_Permalinks_Structure {

	public function __construct() {

		add_action( 'current_screen', array( $this, 'conditonal_includes' ) );
		add_action( 'init', array( $this, 'fix_rewrite_rules' ) );
		add_filter( 'rewrite_rules_array', array( $this, 'update_rewrite_rules_array' ) );
		add_filter( 'post_type_link', array( $this, 'post_type_link' ), 10, 2 );

	}

	public function conditonal_includes() {
		$screen = get_current_screen();

		switch ( $screen->id ) {
			case 'options-permalink' :
				include( 'class-a3-portfolio-permalink-settings.php' );
			break;
		}
	}

	public function fix_rewrite_rules() {
		$permalinks = get_option( 'a3_portfolio_permalinks' );

		if ( ! empty( $permalinks['use_verbose_page_rules'] ) ) {
			$GLOBALS['wp_rewrite']->use_verbose_page_rules = true;
		}
	}

	public function update_rewrite_rules_array( $rules ) {
		global $wp_rewrite;

		$permalinks          = get_option( 'a3_portfolio_permalinks' );
		$portfolio_permalink = empty( $permalinks['portfolio_base'] ) ? _x( 'a3-portfolio', 'default-slug', 'a3_portfolios' ) : $permalinks['portfolio_base'];

		// Fix the rewrite rules when the portfolio permalink have %portfolio_cat% flag
		if ( preg_match( '`/(.+)(/%portfolio_cat%)`' , $portfolio_permalink, $matches ) ) {
			foreach ( $rules as $rule => $rewrite ) {

				if ( preg_match( '`^' . preg_quote( $matches[1], '`' ) . '/\(`', $rule ) && preg_match( '/^(index\.php\?portfolio_cat)(?!(.*a3-portfolio))/', $rewrite ) ) {
					unset( $rules[ $rule ] );
				}
			}
		}

		// If the main page is used as the base, we need to enable verbose rewrite rules or sub pages will 404
		if ( ! empty( $permalinks['use_verbose_page_rules'] ) ) {
			$page_rewrite_rules = $wp_rewrite->page_rewrite_rules();
			$rules              = array_merge( $page_rewrite_rules, $rules );
		}

		return $rules;
	}

	/**
	 * Filter to allow portfolio_category in the permalinks for portfolio.
	 *
	 * @access public
	 * @param string $permalink The existing permalink URL.
	 * @param WP_Post $post
	 * @return string
	 */
	public function post_type_link( $permalink, $post ) {
		// Abort if post is not a portfolio
		if ( $post->post_type !== 'a3-portfolio' )
			return $permalink;

		// Abort early if the placeholder rewrite tag isn't in the generated URL
		if ( false === strpos( $permalink, '%' ) )
			return $permalink;

		// Get the custom taxonomy terms in use by this post
		$terms = get_the_terms( $post->ID, 'portfolio_cat' );

		if ( empty( $terms ) ) {
			// If no terms are assigned to this post, use a string instead (can't leave the placeholder there)
			$portfolio_category = _x( 'uncategorized', 'slug', 'a3_portfolios' );
		} else {
			// Replace the placeholder rewrite tag with the first term's slug
			$first_term = array_shift( $terms );
			$portfolio_category = $first_term->slug;
		}

		$find = array(
			'%year%',
			'%monthnum%',
			'%day%',
			'%hour%',
			'%minute%',
			'%second%',
			'%post_id%',
			'%category%',
			'%portfolio_cat%'
		);

		$replace = array(
			date_i18n( 'Y', strtotime( $post->post_date ) ),
			date_i18n( 'm', strtotime( $post->post_date ) ),
			date_i18n( 'd', strtotime( $post->post_date ) ),
			date_i18n( 'H', strtotime( $post->post_date ) ),
			date_i18n( 'i', strtotime( $post->post_date ) ),
			date_i18n( 's', strtotime( $post->post_date ) ),
			$post->ID,
			$portfolio_category,
			$portfolio_category
		);

		$replace = array_map( 'sanitize_title', $replace );

		$permalink = str_replace( $find, $replace, $permalink );

		return $permalink;
	}
}

endif;

global $a3_portfolio_permalinks_structure;
$a3_portfolio_permalinks_structure = new A3_Portfolio_Permalinks_Structure();
