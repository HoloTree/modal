<?php
/**
 * Create a modal using Foundation
 *
 * @package   holotree\modal
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link
 * @copyright 2014 Josh Pollock
 */

namespace holotree\modal;

/**
 * Class make
 * @package holotree\modal
 */
abstract class make {
	/**
	 * @var string ID for trigger link.
	 */
	public $trigger_id;

	/**
	 * @var string ID for content itself.
	 */
	public $content_id;

	/**
	 * @var string Content for modal
	 */
	public $content;

	/**
	 * @var string The size of the modal
	 */
	public $size;

	/**
	 * @var string What library to use for the modal.
	 */
	public $library;

	/**
	 * @param string $trigger_id ID for trigger link.
	 * @param string $content_id ID for content itself.
	 * @param string $content Content for modal
	 * @param string $public The size of the modal tiny|small|medium|large|xlarge|full.
	 * @param string $library What library to use for the modal. Options: foundation|simple_modal
	 */
	function __construct( $trigger_id, $content_id, $content, $size = 'medium', $library = 'foundation' ) {
		$this->trigger_id = $trigger_id;
		$this->content_id = $content_id;
		$this->content = $content;
		$this->size = $size;

		//@todo support other libraries
		$this->library = 'foundation';


		if ( ! is_null( $this->js_css() ) ) {
			add_action( 'wp_footer', array( $this, 'js_css' ), 25 );
		}

		add_action( 'wp_footer', array( $this, 'content' ), 50 );

	}


	/**
	 * Output model content
	 */
	function content() {
		$out[] = '<div id="'.$this->content_id.'" class="model-content">';
		$out[] = $this->content;
		$out[] = '</div>';

		echo implode( '', $out );
	}

}
