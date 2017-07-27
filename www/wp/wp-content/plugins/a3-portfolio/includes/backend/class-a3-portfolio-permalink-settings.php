<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'A3_Portfolio_Permalink_Settings' ) ) :

class A3_Portfolio_Permalink_Settings {

	public function __construct() {

		if ( is_admin() ) {
			$this->settings_init();
			$this->settings_save();
		}
	}

	/**
	 * Init our settings.
	 */
	public function settings_init() {
		// Add a section to the permalinks page
		add_settings_section( 'a3-portfolio-permalink', __( 'a3 Portfolio permalink base', 'a3_portfolios' ), array( $this, 'settings' ), 'permalink' );

		// Add our settings
		add_settings_field(
			'a3_portfolio_category_slug',            				// id
			__( 'a3 Portfolio category base', 'a3_portfolios' ),   	// setting title
			array( $this, 'portfolio_category_slug_input' ),		// display callback
			'permalink',                                    		// settings page
			'optional'                                      		// settings section
		);

		add_settings_field(
			'a3_portfolio_tag_slug',            					// id
			__( 'a3 Portfolio tag base', 'a3_portfolios' ),   		// setting title
			array( $this, 'portfolio_tag_slug_input' ),				// display callback
			'permalink',                                    		// settings page
			'optional'                                      		// settings section
		);
	}

	public function portfolio_category_slug_input() {
		$permalinks = get_option( 'a3_portfolio_permalinks' );
		?>
		<input name="a3_portfolio_category_slug" type="text" class="regular-text code" value="<?php if ( isset( $permalinks['category_base'] ) ) echo esc_attr( $permalinks['category_base'] ); ?>" placeholder="<?php echo _x('portfolio-category', 'slug', 'a3_portfolios') ?>" />
		<?php
	}

	public function portfolio_tag_slug_input() {
		$permalinks = get_option( 'a3_portfolio_permalinks' );
		?>
		<input name="a3_portfolio_tag_slug" type="text" class="regular-text code" value="<?php if ( isset( $permalinks['tag_base'] ) ) echo esc_attr( $permalinks['tag_base'] ); ?>" placeholder="<?php echo _x('portfolio-tag', 'slug', 'a3_portfolios') ?>" />
		<?php
	}

	/**
	 * Show the settings.
	 */
	public function settings() {
		echo wpautop( __( 'These settings control the permalinks used for a3 Portfolios. These settings only apply when <strong>not using "default" permalinks above</strong>.', 'a3_portfolios' ) );

		$permalinks = get_option( 'a3_portfolio_permalinks' );
		$portfolio_permalink = $permalinks['portfolio_base'];

		// Get main page
		global $portfolio_page_id;
		$base_slug      = urldecode( ( $portfolio_page_id > 0 && get_post( $portfolio_page_id ) ) ? get_page_uri( $portfolio_page_id ) : _x( 'portfolios', 'default-slug', 'a3_portfolios' ) );
		$portfolio_base = _x( 'a3-portfolio', 'default-slug', 'a3_portfolios' );

		$structures = array(
			0 => '',
			1 => '/' . trailingslashit( $portfolio_base ),
			2 => '/' . trailingslashit( $base_slug ),
			3 => '/' . trailingslashit( $base_slug ) . trailingslashit( '%portfolio_cat%' )
		);
		?>
		<table class="form-table">
			<tbody>
				<tr>
					<th><label><input name="portfolio_permalink" type="radio" value="<?php echo $structures[0]; ?>" class="a3_portfolio_permalink" <?php checked( $structures[0], $portfolio_permalink ); ?> /> <?php _e( 'Default', 'a3_portfolios' ); ?></label></th>
					<td><code><?php echo home_url(); ?>/?a3-portfolio=sample-portfolio</code></td>
				</tr>
				<tr>
					<th><label><input name="portfolio_permalink" type="radio" value="<?php echo $structures[1]; ?>" class="a3_portfolio_permalink" <?php checked( $structures[1], $portfolio_permalink ); ?> /> <?php _e( 'Portfolio', 'a3_portfolios' ); ?></label></th>
					<td><code><?php echo home_url(); ?>/<?php echo $portfolio_base; ?>/sample-portfolio/</code></td>
				</tr>
				<?php if ( $portfolio_page_id ) : ?>
					<tr>
						<th><label><input name="portfolio_permalink" type="radio" value="<?php echo $structures[2]; ?>" class="a3_portfolio_permalink" <?php checked( $structures[2], $portfolio_permalink ); ?> /> <?php _e( 'Main page base', 'a3_portfolios' ); ?></label></th>
						<td><code><?php echo home_url(); ?>/<?php echo $base_slug; ?>/sample-portfolio/</code></td>
					</tr>
					<tr>
						<th><label><input name="portfolio_permalink" type="radio" value="<?php echo $structures[3]; ?>" class="a3_portfolio_permalink" <?php checked( $structures[3], $portfolio_permalink ); ?> /> <?php _e( 'Main page base with category', 'a3_portfolios' ); ?></label></th>
						<td><code><?php echo home_url(); ?>/<?php echo $base_slug; ?>/portfolio-category/sample-portfolio/</code></td>
					</tr>
				<?php endif; ?>
				<tr>
					<th><label><input name="portfolio_permalink" id="a3_portfolio_custom_selection" type="radio" value="custom" class="tog" <?php checked( in_array( $portfolio_permalink, $structures ), false ); ?> />
						<?php _e( 'Custom Base', 'a3_portfolios' ); ?></label></th>
					<td>
						<input name="portfolio_permalink_structure" id="a3_portfolio_permalink_structure" type="text" value="<?php echo esc_attr( $portfolio_permalink ); ?>" class="regular-text code"> <span class="description"><?php _e( 'Enter a custom base to use. A base <strong>must</strong> be set or WordPress will use default instead.', 'a3_portfolios' ); ?></span>
					</td>
				</tr>
			</tbody>
		</table>
		<script type="text/javascript">
			jQuery( function() {
				jQuery('input.a3_portfolio_permalink').change(function() {
					jQuery('#a3_portfolio_permalink_structure').val( jQuery( this ).val() );
				});

				jQuery('#a3_portfolio_permalink_structure').focus( function(){
					jQuery('#a3_portfolio_custom_selection').click();
				} );
			} );
		</script>
		<?php
	}

	/**
	 * Save the settings.
	 */
	public function settings_save() {

		if ( ! is_admin() ) {
			return;
		}

		// We need to save the options ourselves; settings api does not trigger save for the permalinks page
		if ( isset( $_POST['permalink_structure'] ) || isset( $_POST['category_base'] ) && isset( $_POST['portfolio_permalink'] ) ) {
			// Cat and tag bases
			$a3_portfolio_category_slug = sanitize_text_field( $_POST['a3_portfolio_category_slug'] );
			$a3_portfolio_tag_slug      = sanitize_text_field( $_POST['a3_portfolio_tag_slug'] );

			$permalinks = get_option( 'a3_portfolio_permalinks' );

			if ( ! $permalinks ) {
				$permalinks = array();
			}

			$permalinks['category_base'] = untrailingslashit( $a3_portfolio_category_slug );
			$permalinks['tag_base']      = untrailingslashit( $a3_portfolio_tag_slug );

			// Portfolio base
			$portfolio_permalink = sanitize_text_field( $_POST['portfolio_permalink'] );

			if ( $portfolio_permalink == 'custom' ) {
				// Get permalink without slashes
				$portfolio_permalink = trim( sanitize_text_field( $_POST['portfolio_permalink_structure'] ), '/' );

				// This is an invalid base structure and breaks pages
				if ( '%portfolio_cat%' == $portfolio_permalink ) {
					$portfolio_permalink = _x( 'a3-portfolio', 'default-slug', 'a3_portfolios' ) . '/' . $portfolio_permalink;
				}

				// Prepending slash
				$portfolio_permalink = '/' . $portfolio_permalink;
			} elseif ( empty( $portfolio_permalink ) ) {
				$portfolio_permalink = false;
			}

			$permalinks['portfolio_base'] = untrailingslashit( $portfolio_permalink );

			// Main page base may require verbose page rules if nesting pages
			global $portfolio_page_id;
			$main_permalink = ( $portfolio_page_id > 0 && get_post( $portfolio_page_id ) ) ? get_page_uri( $portfolio_page_id ) : _x( 'portfolios', 'default-slug', 'a3_portfolios' );

			if ( $portfolio_page_id && trim( $permalinks['portfolio_base'], '/' ) === $main_permalink ) {
				$permalinks['use_verbose_page_rules'] = true;
			}

			update_option( 'a3_portfolio_permalinks', $permalinks );
		}
	}
}

endif;

global $a3_portfolio_permalink_settings;
$a3_portfolio_permalink_settings = new A3_Portfolio_Permalink_Settings();
