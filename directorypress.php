<?php
/**
 * @package DirectoryPress
 * @author Mark Fail
 * @version 2.10
 */
/*
Plugin Name: DirectoryPress
Plugin URI: http://directorypress.net/
Description:  DirectoryPress is a fully featured directory theme for Wordpress that turns your standard wordpress blog into a powerful online link directory with advertising, payment options and more built in!
Author: PremiumPress
Version: 2.10
Author URI: http://www.premiumpress.com
*/

function directorypress_plugin_options() {

	add_menu_page(__('directorypress_plugin'), __('DirectoryPress','cp'), 8, basename(__FILE__), '', 'http://www.directorypress.net/favicon.ico');
 
	add_submenu_page(basename(__FILE__), __('directorypress_plugin','cp'), __('Getting Started','cp'), '10', basename(__FILE__), 'directorypress_plugin');	
	add_submenu_page(basename(__FILE__), __('directorypress_plugin','cp'), __('More Themes','cp'), '10', 'plugin_themes', 'directorypress_plugin_themes');	

}

function directorypress_plugin_logo(){

?>
<a href="http://www.premiumpress.com/?adminlink=directorypress" target="_blank">
<img src="http://www.premiumpress.com/inc/images/layout/logoSymbol-small.png" style="float:right; margin-top:10px;" />
</a>

<?php

}



function directorypress_plugin( ) { ?>

<div class="wrap"><?php echo directorypress_plugin_logo(); ?> 
<h2>Getting Started with DirectoryPress</h2>
<hr>
<p><b>NOTE: DirectoryPress plugin has now been redeveloped as a Wordpress theme.</b> </p>
<p>To use DirectoryPress please download the free Wordpress theme (below) and install it under the themes section of your Wordpress admin. </p>
<iframe src="http://premiumpress.com/downloads/?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }


function directorypress_plugin_themes( ) { ?>
<div class="wrap"><?php echo directorypress_plugin_logo(); ?> 
<h2>DirectoryPress Developed by PremiumPress</h2><hr>
<p>Take a look at some of our other premium wordpress themes at <a href="http://www.premiumpress.com" target="_blank">www.premiumpress.com</a></p>
<iframe src="http://premiumpress.com?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }

add_action('admin_menu', 'directorypress_plugin_options');
?>
