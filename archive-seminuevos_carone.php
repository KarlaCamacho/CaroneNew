<?php get_header() ?>	
			<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>Seminuevos</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Car One</a></li>
						<li><a href="#">Portfolio</a></li>
					</ol><!-- /breadcrumbs -->

					<!-- page tabs -->
					
				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->


			<section>
				

<div id="portfolio" class="portfolio-nogutter">
<div class="row mix-grid">
	<?php 
		query_posts(array( 
			'post_type' => 'seminuevos_carone',
			'showposts' => 15

		) );  
	?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<?php $images = get_field('front_gallery'); if( $images ): ?>
										<!-- carousel -->
										<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<?php foreach( $images as $image ): ?>
										<div>
										<img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" width="600" height="399" alt="">
										</div>
										<?php endforeach; ?>
										</div>
										<!-- /carousel -->
										<?php endif; ?>

									</figure>

									<div class="item-box-desc">
										<h3 class="text-center"><?php the_title() ?></h3>
										<ul class="text-center list-inline categories nomargin">
											<li><a href="#">Precio</a></li>
											<li><a href="#">$120,000</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>				


						</div>


				</div>
			</section>
			<!-- / -->



<?php get_footer() ?>