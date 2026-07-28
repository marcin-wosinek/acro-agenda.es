<?php
/**
 * Title: Pie de página
 * Slug: acro-agenda/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Pie con frase de cierre, enlaces de regiones, «Publica tu evento» y crédito.
 */
?>
<!-- wp:group {"tagName":"footer","className":"aa-footer","align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"default"}} -->
<footer class="wp-block-group aa-footer alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--2-xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">

	<!-- wp:paragraph {"className":"aa-footer-line","fontSize":"2xl","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.025em","lineHeight":"1.1"}}} -->
	<p class="aa-footer-line has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.025em;line-height:1.1"><?php esc_html_e( 'Nos vemos volando.', 'acro-agenda' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"aa-footer-meta","style":{"spacing":{"blockGap":"var:preset|spacing|md"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group aa-footer-meta">

		<!-- wp:group {"tagName":"nav","className":"aa-footer-nav","ariaLabel":"<?php esc_attr_e( 'Pie de página', 'acro-agenda' ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<nav class="wp-block-group aa-footer-nav" aria-label="<?php esc_attr_e( 'Pie de página', 'acro-agenda' ); ?>">

			<!-- wp:paragraph {"className":"aa-footer-link"} -->
			<p class="aa-footer-link"><a href="<?php echo esc_url( home_url( '/valencia/' ) ); ?>"><?php esc_html_e( 'Valencia', 'acro-agenda' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"aa-footer-link"} -->
			<p class="aa-footer-link"><a href="<?php echo esc_url( home_url( '/cataluna/' ) ); ?>"><?php esc_html_e( 'Cataluña', 'acro-agenda' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"aa-footer-link"} -->
			<p class="aa-footer-link"><a href="<?php echo esc_url( home_url( '/comunidad-de-madrid/' ) ); ?>"><?php esc_html_e( 'Madrid', 'acro-agenda' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"aa-footer-link"} -->
			<p class="aa-footer-link"><a href="<?php echo esc_url( home_url( '/festivales/' ) ); ?>"><?php esc_html_e( 'Festivales', 'acro-agenda' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"aa-footer-link"} -->
			<p class="aa-footer-link"><a href="<?php echo esc_url( home_url( '/publica-tu-evento/' ) ); ?>"><?php esc_html_e( 'Publica tu evento', 'acro-agenda' ); ?></a></p>
			<!-- /wp:paragraph -->

		</nav>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"aa-footer-copy","fontSize":"sm"} -->
		<p class="aa-footer-copy has-sm-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
