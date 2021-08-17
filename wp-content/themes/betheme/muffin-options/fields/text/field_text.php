<?php
class MFN_Options_text extends Mfn_Options_field
{

	/**
	 * Render
	 */

	public function render($meta = false)
	{
		$class = false;
		$type = 'text';

		// class

		if ( ! empty( $this->field['class'] ) ) {
			$class = $this->field['class'];
		}

		// title

		if ( strpos( $this->field['id'], 'title' ) ) {
			$class .= ' mfn-item-title';
		}

		// type

		if ( ! empty( $this->field['param'] ) ){
			$type = $this->field['param'];
		}

		// output -----

		echo '<input type="'. esc_attr( $type ) .'" class="'. esc_attr( $class ) .'" '. $this->get_name( $meta ) .' value="'. esc_attr( $this->value ) .'" />';

		if (isset($this->field['desc'])) {
			echo '<span class="description">'. wp_kses($this->field['desc'], mfn_allowed_html('desc')) .'</span>';
		}

	}
}
