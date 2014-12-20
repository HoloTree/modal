<?php
/**
 * @TODO What this does.
 *
 * @package   @TODO
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link      
 * @copyright 2014 Josh Pollock
 */

namespace holotree\modal;


interface base {

	/**
	 * Output JS & CSS
	 */
	function js_css();

	/**
	 * Output model content
	 */
	function content();

} 
