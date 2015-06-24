<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jesse
 */

get_header(); ?>

<!-- hero image -->
<img src="http://placehold.it/2000x1000?text=Hero+Image" alt="" />

<hr>

<!-- photo gallery -->
<section class="row">
	<section class="column">
		<h2>Photo Gallery</h2>
		<ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-6">
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
			<li><img src="http://placehold.it/400x400?text=Photo"></li>
		</ul>
	</section>
</section>

<section class="full-width">

	<section class="row">
		<h2>Section Callout</h2>
		<section class="medium-4 columns"><img src="http://placehold.it/600x600?text=Callout" class="circle"></section>
		<section class="medium-4 columns"><img src="http://placehold.it/600x600?text=Callout" class="circle"></section>
		<section class="medium-4 columns"><img src="http://placehold.it/600x600?text=Callout" class="circle"></section>
	</section>

</section>

<section class="row">
	<h2>Pagination</h2>
	<ul class="pagination">
		<li class="arrow unavailable"><a href="">&laquo;</a></li>
		<li class="current"><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
		<li><a href="">4</a></li>
		<li class="unavailable"><a href="">&hellip;</a></li>
		<li><a href="">12</a></li>
		<li><a href="">13</a></li>
		<li class="arrow"><a href="">&raquo;</a></li>
	</ul>
</section>

<div class="row"><!-- .row start -->

	<div class="column"><!-- .columns start -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .columns end -->

</div><!-- .row end -->

<?php get_footer(); ?>
