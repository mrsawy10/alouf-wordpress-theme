<?php
get_header();

while (have_posts()) : the_post();



    $author_name = get_post_meta(get_the_ID(), 'author_name', true);
    $author_gender = get_post_meta(get_the_ID(), 'author_gender', true);
    $author_nationality = get_post_meta(get_the_ID(), 'author_nationality', true);
    $publishing_date = get_post_meta(get_the_ID(), 'publishing_date', true);



    if (has_post_thumbnail()) {
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
        if ($thumbnail) {
            $thumbnail_url = $thumbnail[0];
        }
    }


?>

    <div class="col d-flex flex-column justify-content-center align-items-center">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>


        <div class="card shadow-sm h-50">
        <?php
        if (has_post_thumbnail()) {
        ?>
                <div class="" style="min-height: 90px;     background-color:black;  overflow: hidden;">
                    <img height="500" width="500" src="<?= $thumbnail_url ?>" style=" width: 100%; display: block;" />
                </div>
            <?php } else { ?>


                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title><?= $title ?></title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= $title ?></text>
                </svg>
            <?php } ?>
            <div class="card-body">
                <p class="card-text"><?= the_content() ?></p>
                <?php if ($author_name) { ?>
                    <strong>Author name : </strong><span><?= $author_name ?></span>
                <?php } ?>
                <?php if ($author_gender) { ?>
                    <strong>Author gender : </strong><span><?= $author_gender ?></span>
                <?php } ?>
                <?php if ($author_nationality) { ?>
                    <strong>Author nationality : </strong><span><?= $author_nationality ?></span>
                <?php } ?>
                <?php if ($publishing_date) { ?>
                    <strong>publishing date : </strong><span><?= $publishing_date ?></span>
                <?php } ?>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <small class="text-body-secondary">9 mins</small>
                </div>


            </div>
            </div>
    </div>


<?php
endwhile;

get_footer();
