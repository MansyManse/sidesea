<?php

function h5bs_about_options() {

    if ( count($_POST) > 0 && isset($_POST['h5bs_about_settings']) ) {
        $options = array (  'name', 'roles', 'roles_2', 'country', 'quote' );

        foreach ( $options as $opt ) {
            delete_option ( 'about_'.$opt, $_POST[$opt] );
            add_option ( 'about_'.$opt, $_POST[$opt] );
        }
    }
    add_menu_page( 'About Settings', 'About Options', 'manage_options', 'h5bs_about_settings', 'h5bs_about_settings' );
}

add_action( 'admin_menu', 'h5bs_about_options' );


function h5bs_about_settings() { ?>
    <div class="wrap">
        <?php screen_icon('themes'); ?> <h2>About Options</h2>

        <form method="post" action="">

            <h3>Contact Information</h3>
            <table class="form-table">
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="name" id="name" value="<?php echo get_option( 'about_name' ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="roles">Roles</label></th>
                    <td><input type="text" name="roles" id="roles" value="<?php echo get_option( 'about_roles' ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="roles_2">Roles 2</label></th>
                    <td><input type="text" name="roles_2" id="roles_2" value="<?php echo get_option( 'about_roles_2' ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="country">Country</label></th>
                    <td><input type="text" name="country" id="country" value="<?php echo get_option( 'about_country' ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="quote">Quote</label></th>
                    <td><input type="text" name="quote" id="quote" value="<?php echo get_option( 'about_quote' ); ?>" class="regular-text" /></td>
                </tr>
                
            </table>
            <p class="submit">
                <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
                <input type="hidden" name="h5bs_about_settings" value="save" style="display:none;" />
            </p>
        </form>
    </div><!-- end wrap -->
    <?php
}
