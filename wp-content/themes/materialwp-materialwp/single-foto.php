<?php
/**
 * The template for displaying all single posts.
 *
 * @package materialwp
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-md-12 col-lg-12">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'single' ); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<div class="card">
						<div class="entry-img">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
						</div>
				
						<div class="entry-container">
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
								<div class="entry-meta">
									<?php materialwp_posted_on(); ?>
								</div><!-- .entry-meta -->
							</header><!-- .entry-header -->
				
							<div class="entry-content">

							<?php 
								$imgUrl = types_render_field('upload-foto', array("size"=>"thumbnail","url"=>"true"));
							?>

							<!-- <div class="mdl-card mdl-shadow--2dp">
								<a href="<?=$imgUrl?>" data-lightbox="roadtrip">
								<?php //echo types_render_field('upload-foto', array());  ?>
								</a>
							</div>  -->
							<div class="mdl-grid">
								<!-- foto -->
								<div class="detali-foto mdl-cell mdl-cell--8-col">
									<a href="<?=$imgUrl?>" data-lightbox="roadtrip">
										<?php echo types_render_field('upload-foto', array());  ?>
									</a>
									<div class="detali-foto-name">
										<?php the_title( '<span class="demo-card-image__filename">', '</span>' ); ?>
									</div>
								</div>

								<!-- text -->
								<div class="detali-foto-text mdl-cell mdl-cell--4-col">
									<?php echo do_shortcode( '[contact-form-7 id="52" title="Contact form detali foto ru"]' ); ?>
									<?php the_content(); ?>
								</div>

								<!-- form -->

							</div>



								
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'materialwp' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->

		<link rel="stylesheet" href="/wp-content/themes/materialwp-materialwp/js/lightbox/css/lightbox.css">
		<script src="/wp-content/themes/materialwp-materialwp/js/lightbox/js/lightbox-2.6.min.js"></script>

							<footer class="entry-footer">
								<?php materialwp_entry_footer(); ?>
							</footer><!-- .entry-footer -->
						</div> <!-- .entry-container -->
					</div> <!-- .card -->
				</article><!-- #post-## -->




				<?php materialwp_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php //get_sidebar(); ?>

	</div> <!-- .row -->
</div> <!-- .container -->

<?php get_footer(); ?>
