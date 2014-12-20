<?php
/**
 * Use Simple Modal for a modal.
 *
 * @todo translate $this->size to demensions.
 *
 * http://www.ericmmartin.com/projects/simplemodal/
 *
 *
 * @package holotree\modal
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link      
 * @copyright 2014 Josh Pollock
 */

namespace holotree\modal;

/**
 * Class simple
 * @package holotree\modal
 */
class simple extends make implements base {

	/**
	 * Output JS & CSS
	 */
	function js_css() { ?>
		<script type="text/javascript">
			jQuery(function ($) {
				// Load dialog on click
				$( '#<?php echo $this->trigger_id; ?>' ).click( function ( e ) {
					$( '#<?php echo $this->content_id; ?>' ).modal();

					return false;
				} );
			});
		</script>
		<style type="text/css">
			#<?php echo $this->content_id; ?> {display:none;}

			/* Overlay */
			#simplemodal-overlay {background-color:#000;}

			/* Container */
			#simplemodal-container {height:<?php echo $this->height; ?>; width:<?php echo $this->width; ?>; background-color:#ffffff; border:4px solid #444; padding:12px;}
			#simplemodal-container .simplemodal-data {padding:8px;}
			#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; color:#bbb; display:block; font-size:12px; margin-bottom:12px; padding:4px 6px 6px;}

			#simplemodal-container a.modalCloseImg {background:url(<?php echo plugins_url( 'x.png', __FILE__ ); ?>) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}

		</style>
	<?php
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
