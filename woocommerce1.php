<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');


?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part('part/structure/footer');

