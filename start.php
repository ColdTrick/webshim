<?php
/**
* Webshim
*
* @package webshim
* @author ColdTrick IT Solutions
* @copyright Coldtrick IT Solutions 2009
* @link http://www.coldtrick.com/
*/

// register default Elgg events
elgg_register_event_handler("init", "system", "webshim_init");

/**
 * initialization of plugin
 *
 * @return void
 */
function webshim_init() {
	// register libraries
	elgg_register_js("modernizer", "mod/webshim/vendors/modernizer/custom2.8.3.js");
	elgg_load_js("modernizer");
	elgg_register_js("webshim", "mod/webshim/vendors/webshim-1.14.3/js-webshim/minified/polyfiller.js");	
	elgg_load_js("webshim");
	
	elgg_extend_view("page/elements/head", "webshim/head");
}
	