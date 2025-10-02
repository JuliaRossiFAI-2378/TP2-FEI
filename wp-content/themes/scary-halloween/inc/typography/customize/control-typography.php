<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Scary_Halloween_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'scary-halloween-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'scary-halloween' ),
				'family'      => esc_html__( 'Font Family', 'scary-halloween' ),
				'size'        => esc_html__( 'Font Size',   'scary-halloween' ),
				'weight'      => esc_html__( 'Font Weight', 'scary-halloween' ),
				'style'       => esc_html__( 'Font Style',  'scary-halloween' ),
				'line_height' => esc_html__( 'Line Height', 'scary-halloween' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'scary-halloween' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'scary-halloween-ctypo-customize-controls' );
		wp_enqueue_style(  'scary-halloween-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'scary-halloween' ),
        'Abril Fatface' => __( 'Abril Fatface', 'scary-halloween' ),
        'Acme' => __( 'Acme', 'scary-halloween' ),
        'Anton' => __( 'Anton', 'scary-halloween' ),
        'Architects Daughter' => __( 'Architects Daughter', 'scary-halloween' ),
        'Arimo' => __( 'Arimo', 'scary-halloween' ),
        'Arsenal' => __( 'Arsenal', 'scary-halloween' ),
        'Arvo' => __( 'Arvo', 'scary-halloween' ),
        'Alegreya' => __( 'Alegreya', 'scary-halloween' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'scary-halloween' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'scary-halloween' ),
        'Bangers' => __( 'Bangers', 'scary-halloween' ),
        'Boogaloo' => __( 'Boogaloo', 'scary-halloween' ),
        'Bad Script' => __( 'Bad Script', 'scary-halloween' ),
        'Bitter' => __( 'Bitter', 'scary-halloween' ),
        'Bree Serif' => __( 'Bree Serif', 'scary-halloween' ),
        'BenchNine' => __( 'BenchNine', 'scary-halloween' ),
        'Cabin' => __( 'Cabin', 'scary-halloween' ),
        'Cardo' => __( 'Cardo', 'scary-halloween' ),
        'Courgette' => __( 'Courgette', 'scary-halloween' ),
        'Cherry Swash' => __( 'Cherry Swash', 'scary-halloween' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'scary-halloween' ),
        'Crimson Text' => __( 'Crimson Text', 'scary-halloween' ),
        'Cuprum' => __( 'Cuprum', 'scary-halloween' ),
        'Cookie' => __( 'Cookie', 'scary-halloween' ),
        'Chewy' => __( 'Chewy', 'scary-halloween' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'scary-halloween' ),
			'100' => esc_html__( 'Thin',       'scary-halloween' ),
			'300' => esc_html__( 'Light',      'scary-halloween' ),
			'400' => esc_html__( 'Normal',     'scary-halloween' ),
			'500' => esc_html__( 'Medium',     'scary-halloween' ),
			'700' => esc_html__( 'Bold',       'scary-halloween' ),
			'900' => esc_html__( 'Ultra Bold', 'scary-halloween' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'scary-halloween' ),
			'normal'  => esc_html__( 'Normal', 'scary-halloween' ),
			'italic'  => esc_html__( 'Italic', 'scary-halloween' ),
			'oblique' => esc_html__( 'Oblique', 'scary-halloween' )
		);
	}
}
