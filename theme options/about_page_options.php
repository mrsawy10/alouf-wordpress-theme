<?php
function about_page_content_callback()
{
    if (empty(pll_current_language()))
        $lang = '_' . pll_default_language();
    else
        $lang = '_' . pll_current_language();

    $wp_editor_settings = array(
        'quicktags' => array('buttons' => 'strong,em,del,ul,ol,li,close'),
        'textarea_rows' => 5,
        'drag_drop_upload' => true,
        'wpautop' => false,
        'media_buttons' => true,
        'class' => 'form-control'
    );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') :
        foreach ($_POST as $key => $value) :

            if (in_array($key, [
                'hero_title' . $lang,
                'about_content' . $lang
            ]))
                $value = stripcslashes($value);

            update_option($key, $value);
        endforeach;
        if (!isset($_POST['hero_hide' . $lang])) delete_option('hero_hide' . $lang);
        if (!isset($_POST['about_hide' . $lang])) delete_option('about_hide' . $lang);
        if (!isset($_POST['services_hide' . $lang])) delete_option('services_hide' . $lang);
        if (!isset($_POST['products_hide' . $lang])) delete_option('products_hide' . $lang);
        if (!isset($_POST['partners_hide' . $lang])) delete_option('partners_hide' . $lang);
    endif;
?>




    <div class="container-fluid  padding-left-4 d-flex flex-column">

        <div class="row ">

            <div class="col-sm-12 col-md-12 col-lg-12 bg-col12 mt-5">
                <!-- Top Navigation -->
                <header class="codrops-header">
                    <h1 class="text-center cl-title"><span>About Page Options</span></h1>
                </header>
            </div>
            <br />
            <div class="col-sm-3 col-md-3 col-lg-3 pl-0">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('First Section', 'alouf') ?></a>

                    <a class="nav-link  " id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('Second Section', 'alouf') ?></a>

                    <a class="nav-link  " id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Third Section', 'alouf') ?></a>
                    <!-- 
                    <a class="nav-link  " id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false"><?php _e('Featured Section', 'alouf') ?> </a>

                    <a class="nav-link  " id="v-pills-fifthsection-tab" data-toggle="pill" href="#v-pills-fifthsection" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false"><?php _e('Brand Section', 'alouf') ?> </a>

                    <a class="nav-link  " id="v-pills-sixthsection-tab" data-toggle="pill" href="#v-pills-sixthsection" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false"><?php _e('Awards Section', 'alouf') ?> </a> -->

                </div>



            </div>

            <div class="col-sm-9 col-md-9 col-lg-9 gray_back pl-0 d-flex flex-column ">

                <form class="form-horizontal d-flex flex-column flex-grow-1" method="post" action="#">

                    <div class="tab-content h-100 d-flex flex-column justify-content-between" id="v-pills-tabContent">


                        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

                            <div class="form-group text-start p-3">
                                <?php $name = 'alouf_about_page_first_section_title' . $lang; ?>

                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Section title', 'alouf') ?>
                                </label>
                                <div class="inline-block w-100">
                                    <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value=" <?= get_option($name) ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12   control-label   text-white">section Photo</label>
                                <div class="col-sm-12  ">
                                    <input class="alouf_about_page_first_section_photo_input alouf_half" type="text" name="alouf_about_page_first_section_photo" size="60" value="<?php echo get_option('alouf_about_page_first_section_photo'); ?>">
                                    <a href="#" class="alouf_about_page_first_section_photo btn btn-info">Choose </a>
                                    <img class="alouf_about_page_first_section_photo_img rounded img-fluid" src="<?php echo get_option('alouf_about_page_first_section_photo'); ?>" height="auto" style="max-width:20%" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alouf_about_page_first_section_video" class="col-sm-12 control-label text-white">Section Video</label>
                                <div class="col-sm-12 d-flex flex-row flex-nowrap">
                                    <input type="text" name="alouf_about_page_first_section_video" id="alouf_about_page_first_section_video" class="alouf_about_page_first_section_video_input alouf_half " size="60" value="<?php echo esc_url(get_option('alouf_about_page_first_section_video')); ?>">
                                    <a href="#" class="alouf_about_page_first_section_video btn btn-info media-upload-button" style="width:120px; margin-left:5px;">Choose Video</a>
                                    <div class="video-preview">
                                        <?php
                                        $video_url = get_option('alouf_about_page_first_section_video');
                                        if ($video_url) {
                                            echo '<video controls width="320" height="240">';
                                            echo '<source src="' . esc_url($video_url) . '" type="video/mp4">';
                                            echo 'Your browser does not support the video tag.';
                                            echo '</video>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group text-start">
                                <?php
                                $name = 'alouf_about_page_first_section_content' . $lang;
                                ?>
                                <label for="<?= $name ?>" class="control-label text-white">
                                    <?php _e('Section Content', 'coolers') ?>
                                </label>
                                <div class="col-sm-12">
                                    <?php wp_editor(get_option($name), $name,  $wp_editor_settings);  ?>
                                </div>
                            </div>

                            <div class="form-group text-start">

                                <?php
                                $name = 'alouf_about_page_first_section_signature' . $lang;
                                ?>
                                <label for="<?= $name ?>" class="control-label text-white">
                                    <?php _e('Section Signature', 'coolers') ?>
                                </label>
                                <div class="text-start">
                                    <input class="w-100" type="text" name="<?= $name ?>" value="<?php echo get_option($name); ?>">
                                </div>
                            </div>



                        </div>

                        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">


                            <div class="form-group text-start p-3">
                                <?php $name = 'alouf_about_page_second_section_title' . $lang; ?>

                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Section title', 'alouf') ?>
                                </label>
                                <div class="inline-block w-100">
                                    <input class="w-100" type="number" id="<?= $name ?>" name="<?= $name ?>" value=" <?= get_option($name) ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="second_section_photo" class="col-sm-12   control-label   text-white">section Photo</label>
                                <div class="col-sm-12  ">
                                    <input class="alouf_about_page_second_section_photo_input alouf_half" type="text" name="alouf_about_page_second_section_photo" size="60" value="<?php echo get_option('alouf_about_page_second_section_photo'); ?>">
                                    <a href="#" class="alouf_about_page_second_section_photo btn btn-info">Choose </a>
                                    <img class="alouf_about_page_second_section_photo_img rounded img-fluid" src="<?php echo get_option('alouf_about_page_second_section_photo'); ?>" height="auto" style="max-width:20%" />
                                </div>
                            </div>

                            <div class="form-group text-start">
                                <?php
                                $name = 'alouf_about_page_second_section_content' . $lang;
                                ?>
                                <label for="<?= $name ?>" class="control-label text-white">
                                    <?php _e('Section Content', 'coolers') ?>
                                </label>
                                <div class="col-sm-12">
                                    <?php wp_editor(get_option($name), $name,  $wp_editor_settings);  ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                            <div class="form-group text-start p-3">
                                <?php $name = 'alouf_about_page_third_section_title' . $lang; ?>
                                <label for="<?= $name ?>" class="text-white">
                                    <?php _e('Section title', 'alouf') ?>
                                </label>
                                <div class="inline-block w-100">
                                    <input class="w-100" type="number" id="<?= $name ?>" name="<?= $name ?>" value=" <?= get_option($name) ?>">
                                </div>
                            </div>

                            <div class="form-group text-start d-flex flex-row flex-wrap">

                                <div class="flex-grow-1  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                    <p style="color: white;font-size:17px"><?php _e('First block', 'alouf') ?></p>
                                    <?php $name = 'alouf_about_page_third_section_block_one_title' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                    <?php $name = 'alouf_about_page_third_section_block_one_subtitle' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('subtitle', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>

                                <div class=" flex-grow-1 rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                    <p style="color: white;font-size:17px"><?php _e('Second block', 'alouf') ?></p>
                                    <?php $name = 'alouf_about_page_third_section_block_two_title' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                    <?php $name = 'alouf_about_page_third_section_block_two_subtitle' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('subtitle', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>

                                <div class="flex-grow-1  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                    <p style="color: white;font-size:17px"><?php _e('Third block', 'alouf') ?></p>
                                    <?php $name = 'alouf_about_page_third_section_block_three_title' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('btitle', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                    <?php $name = 'alouf_about_page_third_section_block_three_subtitle' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e(' subtitle', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input class="w-100" type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="third_section_photo" class="col-sm-12   control-label   text-white">section Background</label>
                                <div class="col-sm-12  ">
                                    <input class="alouf_about_page_third_section_photo_input alouf_half" type="text" name="alouf_about_page_third_section_photo" size="60" value="<?php echo get_option('alouf_about_page_third_section_photo'); ?>">
                                    <a href="#" class="alouf_about_page_third_section_photo btn btn-info">Choose </a>
                                    <img class="alouf_about_page_third_section_photo_img rounded img-fluid" src="<?php echo get_option('alouf_about_page_third_section_photo'); ?>" height="auto" style="max-width:20%" />
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
        // let devisions = [...document.getElementsByClassName(`homePage_division`)];
        // [...document.getElementsByClassName(`homePage_selectionBtns`)].forEach((element, i, arr) => {
        //     element.addEventListener(`click`, (event) => {
        //         arr.forEach(e => e.classList.remove(`active`));
        //         devisions.forEach(e => e.classList.remove(`active`));
        //         event.target.classList.add(`active`)
        //         document.querySelector(`div[aria-labelledby="${event.target.id}"]`)
        //             .classList.add(`active`)

        //     })
        // })





        jQuery(document).ready(function($) {
            $('.alouf_about_page_first_section_photo').click(function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select or Upload Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false // Set to true if you want to allow multiple image selection
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('.alouf_about_page_first_section_photo_input').val(attachment.url);
                    $('.alouf_about_page_first_section_photo_img').attr('src', attachment.url);

                });
                frame.open();
            });
            $('.alouf_about_page_second_section_photo').click(function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select or Upload Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false // Set to true if you want to allow multiple image selection
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('.alouf_about_page_second_section_photo_input').val(attachment.url);
                    $('.alouf_about_page_second_section_photo_img').attr('src', attachment.url);

                });
                frame.open();
            });
            $('.alouf_about_page_third_section_photo').click(function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select or Upload Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false // Set to true if you want to allow multiple image selection
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('.alouf_about_page_third_section_photo_input').val(attachment.url);
                    $('.alouf_about_page_third_section_photo_img').attr('src', attachment.url);

                });
                frame.open();
            });



           

            document.querySelectorAll(`.form-group.text-start`).forEach(e => e.classList.add(`p-3`))

            jQuery(document).ready(function($) {
                // WordPress media uploader
                var mediaUploader;
                $('.media-upload-button').click(function(e) {
                    e.preventDefault();
                    // If the media uploader exists, open it.
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    // Create a new media uploader instance
                    mediaUploader = wp.media.frames.file_frame = wp.media({
                        title: 'Select a Video',
                        button: {
                            text: 'Choose Video'
                        },
                        multiple: false
                    });
                    // When a video is selected, set its URL in the input field and display a preview.
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#alouf_about_page_first_section_video').val(attachment.url);
                        $('.video-preview').html('<video controls width="320" height="240"><source src="' + attachment.url + '" type="video/mp4">Your browser does not support the video tag.</video>');
                    });
                    // Open the media uploader.
                    mediaUploader.open();
                });
            });


        });
    </script>
<?php
}
