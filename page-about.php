<?php

/**
 ** Template Name: About Us Template
 **/



get_header();
if (empty(pll_current_language()))
    $lang = '_' . pll_default_language();
else
    $lang = '_' . pll_current_language();


?>






<!-- Start About Area -->
<section class="chairman-area pt-50 pb-100">
    <div class="container">
        <div class="section-title underline black-title wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
            <?php $name = 'alouf_about_page_first_section_title' . $lang; ?>
            <h2><?= get_option($name) ?></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="chairman-content wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <?php $name = 'alouf_about_page_first_section_content' . $lang;  ?>
                    <p>
                        <?= get_option($name) ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-about-image text-center wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="video-image">
                        <img src="<?= get_option("alouf_about_page_first_section_photo")?>" class="img-responsive mt-2" />
                        <div class="video-play">
                            <a target="_blank" href="<?= get_option("alouf_about_page_first_section_video")?>" class="vpop" data-type="youtube" data-id="MFYqD7SgHGE" data-autoplay="true">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="chairman-signature wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <?php $name = 'alouf_about_page_first_section_signature' . $lang;?>
                    
                <p>Chairman & Managing Director : <span><?= get_option($name)?></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start About Area -->
<!-- <section class="who-we">
    <div class="container">
        <div class="section-title underline white-title wow slideInRight" data-wow-delay="0ms" data-wow-duration="2500ms">
            <h2>Who We Ara</h2>
        </div>
        <div class="who-we-content wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2500ms">
            <div class="row d-block d-md-flex align-items-center">
                <div class="col-md-5">
                    <div class="who-we-img">
                        <img src="assets/img/who-we.jpg" class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div>
                        <p>- Company Capital: 200 EGP million.</p>
                        <p>- In 1996, Alouf was established.</p>
                        <p>
                            - We entered into specialized tourism such as internal and external tourism,
                            religious tourism, Nile cruises, honeymoon trips, hotel booking, and ticketing to
                            raise the level of our services offered for all clients.
                        </p>
                        <p>
                            - In 2005, we provided specialized companies and customers with tourism services,
                            transportation services, ticketing, maintenance service, limousine, and logistics
                            warehousing to fulfill companies and individuals
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End About Area -->

<!-- Start About Area -->
<!-- <section class="mission-sec pt-70 pb-50">
    <div class="container">
        <div class="section-title underline black-title wow slideInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
            <h2>mission, vision & values</h2>
        </div>
        <div class="mission-content">
            <div class="row d-block d-md-flex align-items-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2500ms">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-5 col-md-8">
                    <div class="mission-box">
                        <img src="assets/img/mission01.png" />
                        <h3>Our mission :</h3>
                        <p>
                            Continious improvement and speciality in services, supporting our clients to
                            ensure their success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-block d-md-flex align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2500ms">
                <div class="col-lg-4 col-md-2"></div>
                <div class="col-lg-5 col-md-8">
                    <div class="mission-box">
                        <img src="assets/img/mission02.png" />
                        <h3>Our vision :</h3>
                        <p>To be one of the biggest companies worldwide in the field of tourism.</p>
                    </div>
                </div>
            </div>
            <div class="row d-block d-md-flex align-items-center wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2500ms">
                <div class="col-lg-6 col-md-2"></div>
                <div class="col-lg-5 col-md-8">
                    <div class="mission-box">
                        <img src="assets/img/mission03.png" />
                        <h3>core values :</h3>
                        <p>
                            Heritage, Credibility, Safety, Integrity, Punctuality, Excellence, Flexibility
                            24/7
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->





<?php










?>

<?php
?>