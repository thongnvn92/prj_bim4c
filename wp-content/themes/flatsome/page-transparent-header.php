<?php
/*
Template name: Page - Full Width - Transparent header
*/
global $post;

get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<!-- Container element -->
<?php
$header_bg = flatsome_option('page_header_image');
if (!$header_bg) {
    $header_bg = get_the_post_thumbnail_url( $post->ID , "full" );
}
if (!$header_bg) {
    $header_bg = get_template_directory_uri().'/assets/img/header_bg.jpg';
}
if (!is_front_page()) {
    ?>
    <div class="parallax" style="background-image: url(<?php echo $header_bg; ?>);">
        <div class="parallax-wrapper">
            <div class="row" id="lux_page_header">
                <div class="col medium-12 small-12 large-12">
                    <h1><?php the_title(); ?></h1>
                    <span><?php get_flatsome_breadcrumbs(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>

    <?php do_action( 'flatsome_after_page' ); ?>

    <?php get_footer(); ?>
