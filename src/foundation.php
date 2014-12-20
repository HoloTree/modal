<?php
/**
 * Use Foundation Reveal for modal.
 *
 * http://foundation.zurb.com/docs/components/reveal.html
 *
 * @package holotree\modal
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link      
 * @copyright 2014 Josh Pollock
 */

namespace holotree\modal;

/**
 * Class foundation
 * @package holotree\modal
 */
class foundation extends make implements base {
	/**
	 * The modal content
	 *
	 * @return string
	 */
	function content() {

		$class = 'foundation-modal-'.$this->content_id.'reveal-modal '.$this->size;
		$class = esc_attr( $class );


		$modal[] = "<div id=\"{$this->content_id}\" class=\"{$class}\">";
		$modal[] = $this->content;
		$modal[] = '</div>';

		return implode( '', $modal );
	}

	/**
	 * Prevent extra CSS/JS hook from running
	 *
	 * @return null
	 */
	function js_css() {
		return null;
	}

} 
