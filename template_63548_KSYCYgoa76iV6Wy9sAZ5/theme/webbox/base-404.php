<?php get_header( webbox_template_base() ); ?>

	<?php webbox_site_breadcrumbs(); ?>

	<div <?php webbox_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php webbox_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include webbox_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer( webbox_template_base() ); ?>
