<?php
function home_page_content_callback()
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


    <!-- <link href="<?= alouf_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->

    <div <?php if (ICL_LANGUAGE_CODE == 'ar') {
                echo 'dir="rtl"';
            } ?> class="container-fluid text-start padding-right-4">


        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-gray mt-3 mb-3 rounded">
                <!-- Top Navigation -->
                <header class="codrops-header">
                    <h1 class="text-center site-title"><span><?php _e('Home Page Settings', 'alouf'); ?></span></h1>
                </header>
            </div>
            <br />
            <div class="d-flex align-items-start p-0 m-0 w-100">
                <div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3 rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true"><?php _e('Slides Section', 'alouf') ?></button>
                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link " id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false"><?php _e('About Section', 'alouf') ?></button>
                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Services Section', 'alouf') ?></button>
                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false"><?php _e('Featured Section', 'alouf') ?></button>
                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link" id="v-pills-fifthsection-tab" type="button" role="tab"><?php _e('Brand Section', 'alouf') ?></button>
                    <button style="cursor: pointer;" class=" homePage_selectionBtns nav-link" id="v-pills-sixthsection-tab" type="button" role="tab"><?php _e('Awards Section', 'alouf') ?></button>
                    <!-- <button class=" homePage_selectionBtns nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false"><?php _e('Products Section', 'alouf') ?></button>
                    <button class=" homePage_selectionBtns nav-link" id="v-pills-fifthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fifthsection" type="button" role="tab" aria-controls="v-pills-fifthsection" aria-selected="false"><?php _e('Partners Section', 'alouf') ?></button> -->

                </div>

                <div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent" style="min-height: 100%;">
                    <form method="POST" class="form-horizontal form_back p-5 rounded">
                        <div class="tab-content w-100" id="v-pills-tabContent">

                            <div class="homePage_division tab-pane fade show active w-100" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_sides_number' . $lang; ?>

                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Slides numbers', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="number" id="<?= $name ?>" name="<?= $name ?>" value=" <?= get_option($name) ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="homePage_division tab-pane fade show " id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_second_section_title' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Second Section Title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>

                                <div class="form-group text-start d-flex flex-row flex-wrap">

                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('First block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_second_section_block_one_first_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('first coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_second_section_block_one_second_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('second coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>
                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('Second block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_second_section_block_two_first_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('first coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_second_section_block_two_second_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('second coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>
                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('Third block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_second_section_block_three_first_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e(' first coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_second_section_block_three_second_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e(' second coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>
                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('Fourth block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_second_section_block_four_first_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e(' first coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_second_section_block_four_second_coin' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e(' second coin', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="second_section_photo" class="col-sm-12   control-label   text-white">section Photo</label>
                                        <div class="col-sm-12  ">
                                            <input class="alouf_home_page_second_section_photo_input alouf_half" type="text" name="alouf_home_page_second_section_photo" size="60" value="<?php echo get_option('alouf_home_page_second_section_photo'); ?>">
                                            <a href="#" class="alouf_home_page_second_section_photo btn btn-info">Choose </a>
                                            <img class="alouf_home_page_second_section_photo_img rounded img-fluid" src="<?php echo get_option('alouf_home_page_second_section_photo'); ?>" height="auto" style="max-width:20%" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alouf_home_page_second_section_background" class="col-sm-12   control-label   text-white">Second section background</label>
                                        <div class="col-sm-12  ">
                                            <input class="alouf_home_page_second_section_background_input alouf_half" type="text" name="alouf_home_page_second_section_background" size="60" value="<?php echo get_option('alouf_home_page_second_section_background'); ?>">
                                            <a href="#" class="alouf_home_page_second_section_background btn btn-info">Choose </a>
                                            <img class="alouf_home_page_second_section_background_img rounded img-fluid" src="<?php echo get_option('alouf_home_page_second_section_background'); ?>" height="auto" style="max-width:20%" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="homePage_division tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_third_section_title_' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Section Title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="text" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_third_section_count_' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Slides count', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="number" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="homePage_division tab-pane fade show" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_fourth_section_title_' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Section Title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="text" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="homePage_division tab-pane fade show" role="tabpanel" aria-labelledby="v-pills-fifthsection-tab">

                                <div class="form-group text-start d-flex flex-row flex-wrap">

                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('First block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_fifth_section_block_one_title' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('title', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_fifth_section_block_one_subtitle' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('subtitle', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>

                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('Second block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_fifth_section_block_two_title' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('title', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_fifth_section_block_two_subtitle' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('subtitle', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>

                                    <div class="  rounded rounded-lg rounded-xl rounded-2xl   p-3">
                                        <p style="color: white;font-size:17px"><?php _e('Third block', 'alouf') ?></p>
                                        <?php $name = 'alouf_home_page_fifth_section_block_three_title' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e('btitle', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                        <?php $name = 'alouf_home_page_fifth_section_block_three_subtitle' . $lang; ?>
                                        <label for="<?= $name ?>" class="text-white">
                                            <?php _e(' subtitle', 'alouf') ?>
                                        </label>
                                        <div class="inline-block">
                                            <input type="text" id="<?= $name ?>" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alouf_home_page_fifth_section_background" class="col-sm-12   control-label   text-white">Fifth section background</label>
                                    <div class="col-sm-12  ">
                                        <input class="alouf_home_page_fifth_section_background_input alouf_half" type="text" name="alouf_home_page_fifth_section_background" size="60" value="<?php echo get_option('alouf_home_page_fifth_section_background'); ?>">
                                        <a href="#" class="alouf_home_page_fifth_section_background btn btn-info select_image_button">Choose </a>
                                        <img class="alouf_home_page_fifth_section_background_img rounded img-fluid" src="<?php echo get_option('alouf_home_page_fifth_section_background'); ?>" height="auto" style="max-width:20%" />
                                    </div>
                                </div>
                            </div>

                            <div class="homePage_division tab-pane fade show" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">
                                <div class="form-group text-start">
                                    <?php $name = 'alouf_home_page_sixth_section_title_' . $lang; ?>
                                    <label for="<?= $name ?>" class="text-white">
                                        <?php _e('Section Title', 'alouf') ?>
                                    </label>
                                    <div class="inline-block">
                                        <input type="text" name="<?= $name ?>" value="<?= get_option($name) ?>">
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-default btn-block btn-lg m-auto w-25 mt-3 site_save_route" name="albargasy_save_<?= $lang ?>" value="<?php _e('Save Settings', 'alouf') ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /container -->

    <script>
        let devisions = [...document.getElementsByClassName(`homePage_division`)];
        [...document.getElementsByClassName(`homePage_selectionBtns`)].forEach((element, i, arr) => {
            element.addEventListener(`click`, (event) => {
                arr.forEach(e => e.classList.remove(`active`));
                devisions.forEach(e => e.classList.remove(`active`));
                event.target.classList.add(`active`)
                document.querySelector(`div[aria-labelledby="${event.target.id}"]`)
                    .classList.add(`active`)

            })
        })





        jQuery(document).ready(function($) {
            $('.alouf_home_page_second_section_photo').click(function(e) {
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
                    $('.alouf_home_page_second_section_photo_input').val(attachment.url);
                    $('.alouf_home_page_second_section_photo_img').attr('src', attachment.url);

                });
                frame.open();
            });
            $('.alouf_home_page_second_section_background').click(function(e) {
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
                    $('.alouf_home_page_second_section_background_input').val(attachment.url);
                    $('.alouf_home_page_second_section_background_img').attr('src', attachment.url);

                });
                frame.open();
            });
            $('.alouf_home_page_fifth_section_background').click(function(e) {
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
                    $('.alouf_home_page_fifth_section_background_input').val(attachment.url);
                    $('.alouf_home_page_fifth_section_background_img').attr('src', attachment.url);

                });
                frame.open();
            });





        });
    </script>
<?php
}
