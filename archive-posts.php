<?php

/**
 ** Template Name: posts Template
 **/
get_header();
?>

<?php

$args = array(
    'post_type' => 'post', // Replace 'post' with the name of your custom post type
    'posts_per_page' => -1, // Retrieve all posts of the 'post' type
);

?>

<h1>archive posts custom page page</h1>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php


            $posts = get_posts($args);
            if (count($posts) > 0) {
                foreach ($posts as $post) {
                    $title = $post->post_title;
                    $content = $post->post_content;

                    if (has_post_thumbnail($post->ID)) {
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'thumbnail');
                        // echo $thumbnail;
                        if ($thumbnail) {
                            $thumbnail_url = $thumbnail[0];
                        }
                    }


            ?>
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <?php if (has_post_thumbnail($post->ID)) { ?>
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

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href = '<?php echo esc_url(get_permalink($post->ID)); ?>';">View</button>
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