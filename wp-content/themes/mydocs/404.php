<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mydocs
 */

get_header();
?>
		<section class="error-404 not-found">
			<div class="container">
<div class="row mtli-row-clearfix">
<div class="col-sm-12">
	<main id="primary" class="site-main">


			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mydocs' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mydocs' ); ?></p>

			</div><!-- .page-content -->

	</main><!-- #main -->
</div>
</div>
</div>
		</section><!-- .error-404 -->

<?php
get_footer();
