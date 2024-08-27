
<?php
$portfolio = get_query_var('featured_item_category');
$post_type = get_query_var('post_type');
if ($post_type == 'featured_item') {
    $page_portfolio = get_permalink( get_page_by_path('portfolio') );
    wp_redirect( $page_portfolio );
    exit();
}
?>

<?php get_header(); ?>

<div class="portfolio-page-wrapper portfolio-archive page-featured-item">
	<?php get_template_part('template-parts/portfolio/archive-portfolio', flatsome_option('portfolio_archive_layout')); ?>
</div>

<?php get_footer(); ?>
