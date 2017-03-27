<?php

function salenepal_theme_opts_page(){
?>
<div class="wrap">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php _e('Sale Nepal Theme Settings', 'salenepal' ); ?></h3>
        </div>
    <div class="panel-body">
        <form method="post" action="admin-post.php">
            <input type="hidden" name="action" value="salenepal_save_options">
            <?php wp_nonce_field('salenepal_options_verify'); ?>
            <h4><?php _e('Social Icons', 'salenepal'); ?></h4>
            <div class="form-group">
                <label><?php _e('Twitter', 'salenepal'); ?></label>
                <input type="text" class="form-control" name="salenepal_inputTwitter">
            </div>
            <div class="form-group">
                <label><?php _e('Facebook', 'salenepal'); ?></label>
                <input type="text" class="form-control" name="salenepal_inputFacebook">
            </div>
            <div class="form-group">
                <label><?php _e('Youtube', 'salenepal'); ?></label>
                <input type="text" class="form-control" name="salenepal_inputYoutube">
            </div>
            <h4><?php _e('Logo', 'salenepal'); ?></h4>
            <div class="form-group">
                <label><?php _e('Logo Type', 'salenepal'); ?></label>
                <select class="form-control" name="salenepal_inputLogoType">
                    <option value="1"><?php _e('Site Name','salenepal'); ?></option>
                    <option value="2"><?php _e('Image','salenepal'); ?></option>
                </select>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Logo Image" name="salenepal_inputLogoImg">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button" id="salenepal_uploadLogoImgBtn"><?php _e('Upload', 'salenepal'); ?></button>
                </span>
            </div>
            <h4><?php _e('Footer', 'salenepal'); ?></h4>'
             <div class="form-group">
                <label><?php _e('Footer', 'salenepal'); ?></label>
                <input type="text" class="form-control" name="salenepal_inputFooter">
            </div>
            <div class="form-group">'
        
        </form>
        
    </div>

    </div>

<?php
}



