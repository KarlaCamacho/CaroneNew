<?php get_header() ?>

			<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>Chevrolet</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Car One</a></li>
						<li><a href="#">Chevrolet</a></li>
					</ol><!-- /breadcrumbs -->

					

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">Todos</a></li>
							<li data-filter="Autos" class="filter"><a href="#">Autos</a></li>
							<li data-filter="SUVS" class="filter"><a href="#">SUVS</a></li>
							<li data-filter="Pickups" class="filter"><a href="#">Pickups</a></li>
						</ul>


						<div class="row mix-grid">

							

<?php 
		query_posts(array( 
			'post_type' => 'chevrolet_carone',
			'showposts' => 15

		) );  
	?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="col-md-3 col-sm-3 mix <?php the_field('category') ?>"><!-- item -->

	<div class="item-box">
	<a href="<?php the_permalink() ?>">
		
		<figure>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>	

		</figure>
	</a>

		<div class="  item-box-desc">
			<h3 class="text-center"><?php the_title() ?></h3>
			<ul class="text-center list-inline categories nomargin">
				<li><a href="#">Photography</a></li>
				<li><a href="#">Design</a></li>
			</ul>
		</div>

	</div>

</div><!-- /item -->
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


							


						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->




			
<?php get_footer() ?>