<?php

// Create the page content for the menu item
function custom_theme_options_page()
{

    if (isset($_POST['alouf_save'])) {
        foreach ($_POST as $key => $value) {

            update_option($key, $value);
        }
        echo '<div class="notice notice-success is-dismissible"><p>Theme options updated successfully!</p></div>';
    }


?>

    <!-- <div class="d-flex flex-1 gb-dark flex-column align-items-start justify-content-center"> -->
    <div class="container-fluid  padding-left-4">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12 bg-col12 mt-5">
                <!-- Top Navigation -->
                <header class="codrops-header">
                    <h1 class="text-center cl-title"><span>Theme Options</span></h1>
                </header>
            </div>
            <br />
            <div class="col-sm-3 col-md-3 col-lg-3 pl-0">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</a>
                    <a class="nav-link  " id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact Us </a>
                    <a class="nav-link  " id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</a>
                    <a class="nav-link  " id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Colors </a>
                    <a class="nav-link  " id="v-pills-fifthsection-tab" data-toggle="pill" href="#v-pills-fifthsection" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false">Footer </a>
                    <a class="nav-link  " id="v-pills-sixthsection-tab" data-toggle="pill" href="#v-pills-sixthsection" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">General </a>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 gray_back pl-0">
                <form class="form-horizontal" method="post" action="#">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                            <div class="form-group">
                                <label for="alouf_logo_img" class="col-sm-12   control-label   text-white">Logo</label>
                                <div class="col-sm-12  ">
                                    <input class="second_img_url alouf_half" type="text" name="alouf_logo_img" size="60" value="<?php echo get_option('alouf_logo_img'); ?>">
                                    <a href="#" class="second_img_upload btn btn-info">Choose </a>
                                    <img class="second_img rounded img-fluid" src="<?php echo get_option('alouf_logo_img'); ?>" height="auto" style="max-width:20%" />
                                </div>

                            </div>
                            <div class="form-group">

                                <label for="alouf_logo_sticky" class="col-sm-12   control-label   text-white">Logo Sticky</label>

                                <div class="col-sm-12  ">

                                    <input class="fourth_img_url alouf_half" type="text" name="alouf_logo_sticky" size="60" value="<?php echo get_option('alouf_logo_sticky'); ?>">

                                    <a href="#" class="fourth_img_upload btn btn-info">Choose </a>

                                    <img class="fourth_img rounded img-fluid" src="<?php echo get_option('alouf_logo_sticky'); ?>" height="auto" style="max-width:20%" />

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_website_logo" class="col-sm-12   control-label   text-white">Favicon</label>

                                <div class="col-sm-12  ">

                                    <input class="third_img_url alouf_half" type="text" name="alouf_favicon" size="60" value="<?php echo get_option('alouf_favicon'); ?>">

                                    <a href="#" class="third_img_upload btn btn-info">Choose </a>

                                    <img class="third_img rounded img-fluid" src="<?php echo get_option('alouf_favicon'); ?>" height="auto" style="max-width:20%" />

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">


                            <div class="form-group">

                                <label for="alouf_phone" class="col-sm-12   control-label   text-white">phone </label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_phone" name="alouf_phone" value="<?php echo get_option('alouf_phone'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_fax" class="col-sm-12   control-label   text-white">Fax </label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_fax" name="alouf_fax" value="<?php echo get_option('alouf_fax'); ?>">

                                </div>

                            </div>
                            <div class="form-group">

                                <label for="alouf_whatsapp" class="col-sm-12   control-label   text-white">Whatsapp</label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_whatsapp" name="alouf_whatsapp" value="<?php echo get_option('alouf_whatsapp'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_youtupe" class="col-sm-12   control-label   text-white">Youtupe</label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_youtupe" name="alouf_youtupe" value="<?php echo get_option('alouf_youtupe'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_email" class="col-sm-12   control-label   text-white">Email </label>

                                <div class="col-sm-12  ">

                                    <input type="email" class="form-control  " id="alouf_email" name="alouf_email" value="<?php echo get_option('alouf_email'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_second_email" class="col-sm-12   control-label   text-white">Second Email </label>

                                <div class="col-sm-12  ">

                                    <input type="email" class="form-control  " id="alouf_second_email" name="alouf_second_email" value="<?php echo get_option('alouf_second_email'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_location" class="col-sm-12   control-label   text-white">Address </label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_location" name="alouf_location" value="<?php echo get_option('alouf_location'); ?>">

                                </div>

                            </div>



                        </div>

                        <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">


                            <div class="form-group">

                                <label for="alouf_fb" class="col-sm-12   control-label   text-white">Facebook </label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_fb" name="alouf_fb" value="<?php echo get_option('alouf_fb'); ?>">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="alouf_insta" class="col-sm-12   control-label   text-white">Instagram</label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_insta" name="alouf_insta" value="<?php echo get_option('alouf_insta'); ?>">

                                </div>

                            </div>


                            <div class="form-group">

                                <label for="alouf_twitter" class="col-sm-12   control-label   text-white">Twitter</label>

                                <div class="col-sm-12">

                                    <input type="text" class="form-control  " id="alouf_twitter" name="alouf_twitter" value="<?php echo get_option('alouf_twitter'); ?>">

                                </div>

                            </div>


                            <div class="form-group">

                                <label for="alouf_linkedin" class="col-sm-12   control-label   text-white">LinkedIn </label>

                                <div class="col-sm-12  ">

                                    <input type="text" class="form-control  " id="alouf_linkedin" name="alouf_linkedin" value="<?php echo get_option('alouf_linkedin'); ?>">

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

                            <div class="form-group mt-4">

                                <label for="alouf_primaryColor" class="col-sm-12   control-label   text-white">Primary Color </label>

                                <div class="col-sm-12  ">

                                    <input style="width: 5%;" type="color" class="form-control" id="primaryColor" name="alouf_primaryColor" value="<?php echo get_option('alouf_primaryColor'); ?>">
                                    <span style="letter-spacing: 1.3px; text-transform: uppercase;" dir="ltr" class="text-white mr-2 mt-2"><?php echo get_option('alouf_primaryColor'); ?></span>

                                </div>

                            </div>
                            <div class="form-group mb-4">

                                <label for="alouf_secondaryColor" class="col-sm-12   control-label   text-white">Secondary Color </label>

                                <div class="col-sm-12  ">

                                    <input style="width: 5%;" type="color" class="form-control" id="secondaryColor" name="alouf_secondaryColor" value="<?php echo get_option('alouf_secondaryColor'); ?>">
                                    <span style="letter-spacing: 1.3px; text-transform: uppercase;" class="text-white mr-2 mt-2"><?php echo get_option('alouf_secondaryColor'); ?></span>

                                </div>

                            </div>


                        </div>


                        <div class="tab-pane fade" id="v-pills-fifthsection" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">

                            <div class="form-group">

                                <label for="alouf_footer_content" class="col-sm-12 control-label   text-white">First Column Text</label>

                                <div class="col-sm-12  ">

                                    <?php wp_editor(get_option('alouf_footer_content'), 'alouf_footer_content',  array('textarea_rows' => 5, 'textarea_name' => 'alouf_footer_content', 'drag_drop_upload' => true, 'wpautop' => false, 'media_buttons' => true, 'id' => 'alouf_footer_content', 'class' => 'form-control  ',));  ?>

                                </div>

                            </div>





                        </div>


                        <div class="tab-pane fade" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

                            <div class="form-group">

                                <label for="four_o_four_image" class="col-sm-12   control-label   text-white">404 Image</label>

                                <div class="col-sm-12  ">

                                    <input class="fifth_img_url alouf_half" type="text" name="four_o_four_image" size="60" value="<?php echo get_option('four_o_four_image'); ?>">

                                    <a href="#" class="fifth_img_upload btn btn-info">Choose </a>

                                    <img class="fifth_img rounded img-fluid" src="<?php echo get_option('four_o_four_image'); ?>" height="100" style="max-width:20%" />

                                </div>

                            </div>

                        </div>


                        <div class="form-group mt-4">

                            <div class="col-sm-12">

                                <input type="submit" class="btn btn-default btn-block btn-lg alouf_save_route" name="alouf_save" value="Save Setting ">

                            </div>

                        </div>

                </form>

            </div>

        </div>

    </div>

    <script>
        jQuery(document).ready(function($) {
            $('#select_image_button').click(function(e) {
                e.preventDefault();

                // Define the media library frame
                var frame = wp.media({
                    title: 'Select or Upload Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false // Set to true if you want to allow multiple image selection
                });

                // When an image is selected, run this function
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#image_url').val(attachment.url);
                });

                // Open the media library dialog
                frame.open();
            });
        });
    </script>
    <!-- </div> -->

<?php
}
