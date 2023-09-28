<?php


function alouf_add_extra_data_metabox()
{
    add_meta_box("slider_extra_data", "Slide Data", "alouf_slider_data_callback", array('slide'), "normal");
    add_meta_box("vehicle_extra_data", "vehicle Data", "alouf_vehicle_data_callback", array('vehicle'), "normal");
    add_meta_box("vehicle_features", "vehicle features", "alouf_vehicle_features_callback", array('vehicle'), "normal");
}
add_action('add_meta_boxes', 'alouf_add_extra_data_metabox');

function alouf_slider_data_callback($post)
{

    $alouf_slider_small_title    = esc_attr(get_post_meta($post->ID, 'alouf_slider_small_title', true));
    $alouf_slider_large_title    = esc_attr(get_post_meta($post->ID, 'alouf_slider_large_title', true));
    $alouf_slider_button_text    = esc_attr(get_post_meta($post->ID, 'alouf_slider_button_text', true));
    $alouf_slider_button_url     = esc_attr(get_post_meta($post->ID, 'alouf_slider_button_url', true));
    $alouf_slider_features       = esc_attr(get_post_meta($post->ID, 'alouf_slider_features', true));


?>
    <link href="<?= alouf_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="alouf_slider_small_title"><?php _e('Small Title: ', 'alouf'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text" name="alouf_slider_small_title" class="form-control w-100" value="<?php echo $alouf_slider_small_title; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="alouf_slider_large_title"><?php _e('Large Title: ', 'alouf'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text" name="alouf_slider_large_title" class="form-control w-100" value="<?php echo $alouf_slider_large_title; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="alouf_slider_button_text"><?php _e('button text: ', 'alouf'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text" name="alouf_slider_button_text" class="form-control w-100" value="<?php echo $alouf_slider_button_text; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="alouf_slider_button_url"><?php _e('button url: ', 'alouf'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text" name="alouf_slider_button_url" class="form-control w-100" value="<?php echo $alouf_slider_button_url; ?>"><br>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="alouf_slider_features"><?php _e('Features : ', 'alouf'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text" name="alouf_slider_features" class="form-control w-100" value="<?php echo $alouf_slider_features; ?>"><br>
                </div>
            </div>
        </div>
    </div>
<?php

}



function alouf_vehicle_data_callback($post)
{
    $alouf_vehicle_date   = esc_attr(get_post_meta($post->ID, 'alouf_vehicle_date', true));
    $alouf_vehicle_is_featured   = esc_attr(get_post_meta($post->ID, 'alouf_vehicle_is_featured', true));

    if ($alouf_vehicle_is_featured) {
        $alouf_vehicle_is_featured = 'checked';
    } else {
        $alouf_vehicle_is_featured = '';
    }
?>
    <link href="<?= alouf_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <form>
        <div class="form-group">
            <label for="alouf_vehicle_date">Date</label>
            <input type="date" class="form-control" name="alouf_vehicle_date" value="<?= $alouf_vehicle_date ?>">
            <small class="form-text text-muted">publish date of the vehicle.</small>
        </div>

        <!-- <div class="form-group form-check"> -->
        <div class="d-flex flex-row align-items-center ">
            <!-- value="<?= $alouf_vehicle_is_featured ?>" -->
            <input <?= $alouf_vehicle_is_featured ?> name="alouf_vehicle_is_featured" type="checkbox" class="form-put" id="exampleCheck1">
            <label class="mt-1" for="exampleCheck1">Is featured</label>
        </div>
        <!-- </div> -->
    </form>

<?php
}







function alouf_vehicle_features_callback($post)
{
    $features = get_post_meta($post->ID, 'features', true);
    // wp_nonce_field('repeatable_amenities_meta_box_nonce', 'repeatable_amenities_meta_box_nonce');
    // wp_nonce_field('repeatable_amenities_meta_box_nonce', 'repeatable_amenities_meta_box_nonce');
?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#add-row').on('click', function() {
                var repetable_item = '<tr class="repetable_tr"><td><input type="text" class="widefat answer_value" name="features[]" /></td><td><a class="button remove-row" href="#">Remove</a></td></tr>';
                $('#repeatable-fieldset-one tbody').append(repetable_item);
                return false;
            });
            $(document).on('click', '.remove-row', function() {
                $(this).parents('tr').remove();
                return false;
            });
        });
    </script>
    <table id="repeatable-fieldset-one" width="100%">
        <thead>
            <tr>
                <th width="70%">Features</th>
                <th width="30%">Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($features) :
                foreach ($features as $feature) {
            ?>
                    <tr class="repetable_tr">
                        <td>
                            <input type="text" class="widefat answer_value" name="features[]" value="<?php if ($feature != '') echo esc_attr($feature); ?>" />
                        </td>
                        <td><a class="button remove-row" href="#">Remove</a></td>
                    </tr>
                <?php
                }
            else :
                // show a blank one
                ?>
                <tr class="repetable_tr">
                    <td>
                        <input type="text" class="widefat answer_value" name="features[]" />
                    </td>
                    <td><a class="button remove-row" href="#">Remove</a></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <p><a id="add-row" class="button" href="#">Add another</a></p>
<?php
}




add_action('save_post', 'alouf_save_custom_meta', 10, 2);

function alouf_save_custom_meta($post_id)
{
    if (isset($_POST['alouf_slider_small_title'])) {
        update_post_meta($post_id, 'alouf_slider_small_title', $_POST['alouf_slider_small_title']);
    } else
        delete_post_meta($post_id, 'alouf_slider_small_title');

    if (isset($_POST['alouf_slider_large_title'])) {
        update_post_meta($post_id, 'alouf_slider_large_title', $_POST['alouf_slider_large_title']);
    } else
        delete_post_meta($post_id, 'alouf_slider_large_title');

    if (isset($_POST['alouf_slider_button_text'])) {
        update_post_meta($post_id, 'alouf_slider_button_text', $_POST['alouf_slider_button_text']);
    } else
        delete_post_meta($post_id, 'alouf_slider_button_text');

    if (isset($_POST['alouf_slider_button_url'])) {
        update_post_meta($post_id, 'alouf_slider_button_url', $_POST['alouf_slider_button_url']);
    } else
        delete_post_meta($post_id, 'alouf_slider_button_url');
    if (isset($_POST['alouf_slider_features'])) {
        update_post_meta($post_id, 'alouf_slider_features', $_POST['alouf_slider_features']);
    } else
        delete_post_meta($post_id, 'alouf_slider_features');

    if (isset($_POST['alouf_vehicle_date'])) {
        update_post_meta($post_id, 'alouf_vehicle_date', $_POST['alouf_vehicle_date']);
    } else
        delete_post_meta($post_id, 'alouf_vehicle_date');

    if (isset($_POST['alouf_vehicle_is_featured'])) {
        update_post_meta($post_id, 'alouf_vehicle_is_featured', $_POST['alouf_vehicle_is_featured']);
    } else
        delete_post_meta($post_id, 'alouf_vehicle_is_featured');

    if (isset($_POST['features'])) {
        update_post_meta($post_id, 'features', $_POST['features']);
    } else
        delete_post_meta($post_id, 'features');
}
