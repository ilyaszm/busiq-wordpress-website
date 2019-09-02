<?php get_header() ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" class="index-page-img-post" alt="image post">
                <h3><?php the_title(); ?></h3>
            </a>
            <p>posted on <?php the_time( 'l, F jS, Y' ); ?>, by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></p>
            <?php the_excerpt(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <h4><?php __('No Posts Found') ?></h4>
<?php endif; ?>

<?php get_footer() ?>

<?php /*get_header() ?>

<?php

# Creating a customize query to display the custom post type Services posts
$query_args = array('post_type' => 'service' );
$servicesPosts = new WP_Query($query_args);

if ( $servicesPosts -> have_posts() ) {
    while ( $servicesPosts -> have_posts() ) {
        $servicesPosts -> the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" class="index-page-img-post" alt="image post">
            <h3><?php the_title(); ?></h3>
        </a>
        <?php the_excerpt(); ?>
<?php
    }
}

?>

<?php get_footer() */?>