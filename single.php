<?php get_header() ?>

<?php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

        ?><h3><?php the_title(); ?></h3>
        <p>Posted by <?php the_author(); ?></p>
        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" alt="image post">
        <?php
        the_content();
        comment_form();

    }
}

?>

<?php get_footer() ?>