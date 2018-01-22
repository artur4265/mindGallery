<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>


<div class="container">
	<div class="row">

		<div id="primary" class="col-md-12 col-lg-12">
			<main id="main" class="site-main" role="main">



<?php
/* вывод списка рубрик */
$args = array(
	'parent'                   => 0,
	'hide_empty'               => 0,
	'exclude'                  => '21',
	'number'                   => '0',
	'taxonomy'                 => 'catfoto',
	'pad_counts'               => true );
 
$catlist = get_categories($args);
foreach ($catlist as $categories_item) {
	echo "<li><a href=\"/catfoto/$categories_item->slug\">" . $categories_item->cat_name . "</a><br><span class=\"small-text\">" . $categories_item->category_description . "</span></li>";
}


?>

				<?php if ( have_posts() ) : ?>

					<header>
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>

					<div class="mdl-grid">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							//get_template_part( 'content', get_post_format() );
						?>

<!-- img bacgroung url  -->
<?php 
$imgBackUrl = types_render_field('upload-foto', array("size"=>"thumbnail","url"=>"true"));

?>
<article class="mdl-cell --foto_size" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">		
		<div class="demo-card-image mdl-card mdl-shadow--2dp" 
			style=" background-image: url('<?=$imgBackUrl; ?>');">
			<div class="mdl-card__title mdl-card--expand">
			</div>
			<div class="mdl-card__actions">
				<?php the_title( sprintf( '<span class="demo-card-image__filename"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
			</div>
		</div>
	</div> <!-- .card -->
</article><!-- #post-## -->


					<?php endwhile; ?>

					</div>

					<?php materialwp_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php //get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
