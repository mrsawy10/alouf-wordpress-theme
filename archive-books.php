<?php

/**
 ** Template Name: Books Template
 **/
get_header();
?>

<?php

$args = array(
    'post_type' => 'book', // Replace 'book' with the name of your custom post type
    'posts_per_page' => -1, // Retrieve all posts of the 'book' type
);


?>


<h1>archive books custom page page</h1>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php


            $books = get_posts($args);
            if (count($books) > 0) {
                foreach ($books as $book) {
                    $title = $book->post_title;
                    $content = $book->post_content;

                    $author_name = get_post_meta($book->ID, 'author_name', true);
                    $author_gender = get_post_meta($book->ID, 'author_gender', true);
                    $author_nationality = get_post_meta($book->ID, 'author_nationality', true);
                    $publishing_date = get_post_meta($book->ID, 'publishing_date', true);

                    if (has_post_thumbnail($book->ID)) {
                        $thumbnail_id = get_post_thumbnail_id($book->ID);
                        $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
                        // echo $thumbnail;
                        if ($thumbnail) {
                            $thumbnail_url = $thumbnail[0];
                        }
                    }

            ?>
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <?php if (has_post_thumbnail($book->ID)) { ?>
                                <div class="" style="min-height: 90px;     background-color:black;  overflow: hidden;">
                                    <img height="500" width="500" src="<?= $thumbnail_url ?>" style="height:225px; width: 100%; display: block;" />
                                </div>
                            <?php } else { ?>
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title><?= $title ?></title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= $title ?></text>
                                </svg>
                            <?php } ?>
                            <div class="card-body">
                                <p class="card-text"><?= $content ?></p>
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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href = '<?php echo esc_url(get_permalink($book->ID)); ?>';">View</button>
                                    </div>
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
</div>


<?php get_footer() ?>