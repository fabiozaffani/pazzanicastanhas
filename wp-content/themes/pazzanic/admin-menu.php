<?php
// create custom plugin settings menu
add_action('admin_menu', 'omr_create_menu');

function omr_create_menu() {

	//create new top-level menu
	add_menu_page('Build Internet Settings', 'Build Internet', 'administrator', __FILE__, 'buildinternet_settings_page', 'favicon.ico');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
	//register our settings
	register_setting( 'omr-settings-group', 'omr_tracking_code');
	register_setting( 'omr-settings-group', 'omr_adsense' );
	register_setting( 'omr-settings-group', 'omr_adsense_sidebar');
}

function buildinternet_settings_page() {
?>
<div class="wrap">
<h2>Build Internet Options</h2>

<form method="post" action="options.php">
        
    <?php settings_fields('omr-settings-group'); ?>
    <table class="form-table">
        
        <tr valign="top">
        <th scope="row">Analytics Code</th>
        <td><textarea cols="50" rows="7" name="omr_tracking_code"><?php echo get_option('omr_tracking_code'); ?></textarea></td>
        </tr>
		<tr valign="top">
        <th scope="row">Adsense</th>
        <td><textarea cols="50" rows="7" name="omr_adsense"><?php echo get_option('omr_adsense'); ?></textarea></td>
        </tr>
        <tr valign="top">
        <th scope="row">Adsense Sidebar</th>
        <td><textarea cols="50" rows="7" name="omr_adsense_sidebar"><?php echo get_option('omr_adsense_sidebar');?></textarea></td>
        </tr>
        
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Salvar') ?>" />
    </p>

</form>
</div>
<?php } ?>