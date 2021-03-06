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

		<div id="primary" class="col-md-8 col-lg-8">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header>
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->


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
		//echo "<li><a href=\"/catfoto/$categories_item->slug\">" . $categories_item->cat_name . "</a><br><span class=\"small-text\">" . $categories_item->category_description . "</span></li>";
		echo '<div class="
		mdl-cell 
		mdl-cell--3-col 
		mdl-cell--4-col-tablet">
		<div class="rw-card mdl-card rw-card--media-short mdl-shadow--2dp">
		  
		  <div class="rw-card__content">
			<h2 class="rw-card__title">
			  <a href="/guides/hiring-shape-the-candidate-experience/">
			  ' . $categories_item->cat_name . '
			  </a>
			</h2>
			<div class="rw-card__body">
			  <a href="/guides/hiring-shape-the-candidate-experience/">
				Creating a positive candidate experience can boost interview satisfaction and influence a candida...
			  </a>
			</div>
			<div class="rw-card__actions">
			  
				<span class="rw-card__meta">7 steps</span>
				<span class="rw-card__meta">1 tool</span>
				<a href="/guides/hiring-shape-the-candidate-experience/" class="rw-card__end mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
				  <i class="material-icons">arrow_forward</i>
				<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
			  
			</div>
		  </div>
		</div>
		</div>';
	}


?>



					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php materialwp_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
