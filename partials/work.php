<div class="margin-top-30"></div>

<!-- WORK -->

<style>
	
	#carone-brands 
	{
		background: white ;
	}
</style>
			<section id="carone-brands" class="nopadding">
<div class="margin-top-30"></div>
			
				<div id="portfolio" class="portfolio-nogutter">
					<div class="row mix-grid">

						<?php 
	query_posts(array( 
		'post_type' => 'carone_brands',
		'showposts' => 15
		
	) );  
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- item -->
							<div class="col-md-3 col-sm-3 mix development">

								<div class="item-box">
									<figure>
										<a href="">
											

										<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>
										</a>
									</figure>

									<div class="item-box-desc">
										<h3 class="text-center"><?php the_field('name') ?></h3>
										
									</div>

								</div>

							</div>
						<!-- /item -->
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
					</div>

				</div>
			</section>
			<!-- /WORK -->