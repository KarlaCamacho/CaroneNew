<?php get_header() ?>

			<section id="slider">

				<!-- OWL SLIDER -->
				<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
					<div>
						<img class="fullwidth" src="<?php bloginfo('template_url'); ?>/images/demo/panorama/spark1.jpg" alt="img" />
					</div>
					<div>
						<img class="fullwidth" src="<?php bloginfo('template_url'); ?>/images/demo/panorama/spark2.jpg" alt="img" />
					</div>
					<div>
						<img class="fullwidth" src="<?php bloginfo('template_url'); ?>/images/demo/panorama/spark3.jpg" alt="img" />
					</div>
				</div>
				<!-- /OWL SLIDER -->

				<!-- IMAGE -->
				<!--
				<figure>
					<img class="fullwidth" src="<?php bloginfo('template_url'); ?>/images/demo/panorama/1-min.jpg" alt="img" />
				</figure>
				-->
				<!-- /IMAGE -->

				<!-- VIDEO -->
				<!--
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
				</div>
				-->
				<!-- /VIDEO -->

		</section>




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- IMAGE -->
						<div class="col-lg-5 col-sm-4">
							
							<div class="thumbnail relative margin-bottom-3">

								<!-- 
									IMAGE ZOOM 
									
									data-mode="mouseover|grab|click|toggle"
								-->
								<figure id="zoom-primary" class="zoom" data-mode="mouseover">
									<!-- 
										zoom buttton
										
										positions available:
											.bottom-right
											.bottom-left
											.top-right
											.top-left
									-->
									<a class="lightbox bottom-right" href="<?php bloginfo('template_url'); ?>/images/demo/shop/products/1000x1500/p5.jpg" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

									<!-- 
										image 
										
										Extra: add .image-bw class to force black and white!
									-->
									<img class="img-responsive" src="<?php the_field('main_picture') ?>" width="1200" height="1500" alt="This is the product title" />
								</figure>

							</div>

							<!-- Thumbnails (required height:100px) -->

<?php $images = get_field('main_gallery'); if( $images ): ?>

		<div data-for="zoom-primary" class="zoom-more owl-carousel owl-padding-3 featured" data-plugin-options='{"singleItem": false, "autoPlay": false, "navigation": true, "pagination": false}'>
    <?php foreach( $images as $image ): ?>

			<a class="thumbnail active" href="<?php echo $image['sizes']['large']; ?>">
				<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" height="100" alt="" />
			</a>
			
    <?php endforeach; ?>
			
		</div>
		<!-- /Thumbnails -->
<?php endif; ?>


						</div> 
						<!-- /IMAGE -->

						<!-- ITEM DESC -->
						<div class="col-lg-4 col-sm-8">

							

							<!-- price -->
							<h2 class="size-30" style="margin-bottom: 11px;" ><?php the_title() ?></h2>
							<p class="size-18" style="margin-bottom: 11px;">Precio desde: <strong>$288,400</strong> </p>
							<p class="size-11" >Precio sujeto a cambio sin previo aviso *</p class="size-11">
							<!-- /price -->

							<hr />
							<!-- short description -->
							<p>Chevrolet Trax® te ofrece todas las ventajas de una SUV con la maniobrabilidad de un auto compacto. Llévatela a descubrir nuevos lugares, con la tecnología y el espacio perfecto para hacer de cada día una nueva aventura.</p>
							<!-- /short description -->

							<hr />


<a href="#" class="btn btn-featured btn-primary" data-toggle="modal" data-target="#myModal">
	<span class="" style="font-size: 21px;">Solicita una cotizacion</span>
	<i class="fa fa-paper-plane-o"></i>
</a>

							<!-- Bootstrap Modal >-->


<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Solicita una cotizacion</h4>
			</div>
<style type="text/css">
	#main-new-form input, #main-new-form textarea {
		width: 95%;
		margin: 0 auto;
	}


	#main-new-form #button-main-new-form {
		width: 95%;
		margin: 0 auto;
		display: block;
	}
</style>
			<!-- Modal Body -->
			<div class="modal-body">
			<div id="main-new-form">
				<!-- REVIEW FORM -->
							<form method="post" action="#" id="form">
								
								<div class="row margin-bottom-10">
									
									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Tel -->
										<input type="tel" name="tel" id="tel" class="form-control" placeholder="Teléfono *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>
									
									<div class="col-md-12">
										<!-- Email -->
										<input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100" required="">
									</div>



									
									
								</div>
								
								<!-- Comment -->
								<div class="margin-bottom-30">
									<textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="1000"></textarea>
								</div>

								

								<!-- Send Button -->
<button id="button-main-new-form" type="submit" class="btn btn-primary" ><i class="fa fa-check"></i> Enviar</button>								
							</form>
							<!-- /REVIEW FORM -->
			</div>
			</div>
				

			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>




						</div>
						<!-- /ITEM DESC -->
						<div class="col-sm-4 col-md-3">
							
			



						</div>

						<!-- INFO -->
						<div class="col-sm-12 col-md-12 col-lg-3">

							<!-- 
	controlls-over		= navigation buttons over the image 
	buttons-autohide 	= navigation buttons visible on mouse hover only
	
	data-plugin-options:
		"singleItem": true
		"autoPlay": true (or ms. eg: 4000)
		"navigation": true
		"pagination": true
		"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)
-->
<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"singleItem": true, "autoPlay": true, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
	<div>
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/banner-300-x-500.jpg" alt="">
	</div>
	<div>
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/banner-300-x-500.jpg" alt="">
	</div>
</div>
						</div>
						<!-- /INFO -->

					</div>
<div id="callout-single" class="callout-dark heading-title heading-arrow-bottom" style="border-radius: 6px;">
		<div class="container">

		<div class="text-center">
		<h3 class="size-30" style="
    background: #252525;
">Galeria de la Trax</h3>
		<p>Nuestra galeria de fotos</p>
		</div>

		</div>
	</div >
					<div class="masonry-gallery columns-5 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/24-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/24-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/25-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/25-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/26-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/26-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/27-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/27-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/28-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/28-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/29-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/29-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/30-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/30-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/31-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/31-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/32-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/32-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/33-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/33-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/34-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/34-min.jpg" alt="...">
	</a>

	<a class="image-hover" href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/35-min.jpg">
		<img src="<?php bloginfo('template_url'); ?>/images/demo/600x400/35-min.jpg" alt="...">
	</a>

</div>

<hr>
						<!-- Videos -->
	<div id="callout-single" class="callout-dark heading-title heading-arrow-bottom" style="border-radius: 6px;">
		<div class="container">

		<div class="text-center">
		<h3 class="size-30" style="
    background: #252525;
">Videos You Tube</h3>
		<p>Revisa nuestras videos en nuestro canal de youtube.</p>
		</div>

		</div>
	</div >
<div class="row">

	<div class="col-md-4">

		<div class="box-image text-center">
			<a class="image-hover lightbox" href="https://www.youtube.com/watch?v=vd2JqYPrmmk" href="" data-plugin-options='{"type":"iframe"}'>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/600x400/yt.jpg" alt="" />
			</a>

			<a class="box-image-title">
				<h2>Titulo Video</h2>
			</a>
			<p class="font-lato weight-300">Esta es una breve descripcion del video de youtube y un call to action</p>
		</div>

	</div>

	<div class="col-md-4">

		<div class="box-image text-center">
			<a class="image-hover lightbox" href="https://www.youtube.com/watch?v=vd2JqYPrmmk" href="" data-plugin-options='{"type":"iframe"}'>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/600x400/yt.jpg" alt="" />
			</a>

			<a class="box-image-title">
				<h2>Titulo Video</h2>
			</a>
			<p class="font-lato weight-300">Esta es una breve descripcion del video de youtube y un call to action</p>
		</div>

	</div>

	<div class="col-md-4">

		<div class="box-image text-center">
			<a class="image-hover lightbox" href="https://www.youtube.com/watch?v=vd2JqYPrmmk" href="" data-plugin-options='{"type":"iframe"}'>
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/600x400/yt.jpg" alt="" />
			</a>

			<a class="box-image-title">
				<h2>Titulo Video</h2>
			</a>
			<p class="font-lato weight-300">Esta es una breve descripcion del video de youtube y un call to action</p>
		</div>

	</div>

</div>
<!-- /Videos -->
<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses!2smx!4v1476374576051!6m8!1m7!1sefsUqo5UPUoAAAQo8TsQDg!2m2!1d25.76459348553298!2d-100.2943383545109!3f280.4159944886146!4f-11.953861137279574!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


					<ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
						<li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Versiones</a></li>
						<li role="presentation"><a href="#specs" role="tab" data-toggle="tab">Ficha Tecnica</a></li>
						<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">FAQS</a></li>
						<li role="presentation"><a href="#gallery" role="tab" data-toggle="tab">Galleria</a></li>
					</ul>


					<div class="tab-content padding-top-20">

						<!-- DESCRIPTION -->
						<div role="tabpanel" class="tab-pane fade in active" id="description">
							<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Version</th>
				<th>Caracteristica 1</th>
				<th>Caracteristica 2</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
			<tr>
				<td>Value 1</td>
				<td>Value 2</td>
				<td>Value 3</td>
			</tr>
		</tbody>
	</table>
</div>
						</div>
						
						<!-- SPECIFICATIONS -->
						<div role="tabpanel" class="tab-pane fade" id="specs">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Column name</th>
											<th>Column name</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Size</td>
											<td>2XL</td>
										</tr>
										<tr>
											<td>Color</td>
											<td>Red</td>
										</tr>
										<tr>
											<td>Weight</td>
											<td>132lbs</td>
										</tr>
										<tr>
											<td>Height</td>
											<td>74cm</td>
										</tr>
										<tr>
											<td>Bluetooth</td>
											<td><i class="fa fa-check text-success"></i> YES</td>
										</tr>
										<tr>
											<td>Wi-Fi</td>
											<td><i class="glyphicon glyphicon-remove text-danger"></i> NO</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<!-- REVIEWS -->
						<div role="tabpanel" class="tab-pane fade" id="reviews">
							
<!-- LEFT COLUMNS -->
						<div class="col-md-9">

							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Cum sociis natoque penatibus magnis.</p>

							<!-- TOGGLES -->
							<div class="toggle toggle-transparent toggle-bordered-full margin-top-60">

								<div class="toggle"><!-- toggle -->
									<label>1. Cuantos Kilometros rinde por litro la Trax 2016?</label>
									<div class="toggle-content">
										<p class="clearfix">
											<img class="hidden-sm pull-left img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/girl_looking-min_thumb.jpg" alt="Careers" />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle"><!-- toggle -->
									<label>2. Que motor tiene la Trax 2016?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle"><!-- toggle -->
									<label>3. Cual es el equipamiento tiene la version básica?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/10-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/451x300/10-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="http://www.youtube.com/watch?v=s0MDY9fl-IA" class="item-image lightbox" data-plugin-options='{"type":"iframe"}'>
														<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/451x300/11-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="<?php bloginfo('template_url'); ?>/images/demo/1200x800/25-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/451x300/25-min.jpg" alt="" />
													</a>
												</div>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle"><!-- toggle -->
									<label>4. Cual es la seguridad que me ofrece la Trax 2016?</label>
									<div class="toggle-content">
										<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->
							</div>
							<!-- /TOGGLES -->
						</div>


						<!-- /LEFT COLUMNS -->

						<!-- RIGHT COLUMNS -->
						<div class="col-md-3">

							<!-- POPULAR QUESTIONS -->
							<h4><strong>Popular</strong> Topics</h4>
							<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet.</em></p>

							<hr />

							<ul class="list-unstyled"><!-- block 1 -->
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Consectetur adipiscing elit</a></li>
								<li><a href="#">Quisque rutrum pellentesque</a></li>
							</ul><!-- /block 1 -->

							<ul class="list-unstyled"><!-- block 2 -->
								<li><a href="#">Nulla lacinia iaculis nulla</a></li>
								<li><a href="#">Cum sociis natoque penatibus</a></li>
								<li><a href="#">Magnis dis parturient montes</a></li>
							</ul><!-- /block 2 -->

							<ul class="list-unstyled"><!-- block 3 -->
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Consectetur adipiscing elit</a></li>
								<li><a href="#">Quisque rutrum pellentesque</a></li>
								<li><a href="#">Nulla lacinia iaculis nulla</a></li>
								<li><a href="#">Cum sociis natoque penatibus</a></li>
								<li><a href="#">Magnis dis parturient montes</a></li>
							</ul><!-- /block 3 -->


							

						</div>
						<!-- /RIGHT COLUMNS -->

							


							
						</div>
					</div>


					<hr class="margin-top-80 margin-bottom-80" />


					
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

					

				</div>
			</section>
			<!-- / -->

<!-- s
	MODAL ON LOAD 
	
	data-autoload="true" 			- load modal on page load
	data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)
	
	Please note, an unique ID is required.
	localstorage use the ID to hide the modal, if used checked "Don't show this popup again"
-->
<div id="news-modal" class="modal fade" data-autoload="true" data-autoload-delay="4000">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div><!-- /Modal Header -->

			<!-- body modal -->
			<div class="modal-body clearfix">

				<form method="post" action="#" id="form">
								
								<div class="row margin-bottom-10">
									
									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Tel -->
										<input type="tel" name="tel" id="tel" class="form-control" placeholder="Teléfono *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>

									<div class="col-md-12 margin-bottom-10">
										<!-- Name -->
										<input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required="">
									</div>
									
									<div class="col-md-12">
										<!-- Email -->
										<input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100" required="">
									</div>



									
									
								</div>
								
								<!-- Comment -->
								<div class="margin-bottom-30">
									<textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="1000"></textarea>
								</div>

								

								<!-- Send Button -->
								<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review</button>
								
							</form>
							<!-- /REVIEW FORM -->

				<!-- Don't show this popup again -->
				<div class="size-11 text-left">
					<label class="checkbox pull-left">
						<input class="loadModalHide" type="checkbox" />
						<i></i> <span class="weight-300">Don't show this popup again</span>
					</label>

				</div>
				<!-- /Don't show this popup again -->

			</div>

		</div>
	</div>
</div>
<!-- /MODAL ON LOAD -->

<!--<div class="container">		
	<div class="row">
	controlls-over		= navigation buttons over the image 
	buttons-autohide 	= navigation buttons visible on mouse hover only
	
	data-plugin-options:
		"singleItem": true
		"autoPlay": true (or ms. eg: 4000)
		"navigation": true
		"pagination": true
		"items": "4"

	owl-carousel item paddings
		.owl-padding-0
		.owl-padding-3
		.owl-padding-6
		.owl-padding-10
		.owl-padding-15
		.owl-padding-20
-->
<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
	<div class="img-hover">
		<a href="blog-single-default.html">
			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/spark-2016.png" alt="">
		</a>

		<h4 class="text-center margin-top-20"><a href="spark-2016.png">Spark 2016</a></h4>
	</div>
	<div class="img-hover">
		<a href="blog-single-default.html">
			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/equinox-20171.png" alt="">
		</a>

		<h4 class="text-center margin-top-20"><a href="equinox-20171.png">Equinox 2017</a></h4>
	</div>
	<div class="img-hover">
		<a href="blog-single-default.html">
			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/cruze-2016.png" alt="">
		</a>

		<h4 class="text-center margin-top-20"><a href="cruze-2016.png">Cruze 2016</a></h4>
	</div>
	<div class="img-hover">
		<a href="blog-single-default.html">
			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/malibu-2016.png" alt="">
		</a>

		<h4 class="text-center margin-top-20"><a href="malibu-2016.png">Malibu 2016</a></h4>
	</div>
	<div class="img-hover">
		<a href="blog-single-default.html">
			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/demo/spark-2017.png" alt="">
		</a>
		<h4 class="text-center margin-top-20"><a href="spark-2017.png">Spark Classic 2017</a></h4>
	</div>
</div>
	</div>
</div>


			
<?php get_footer() ?>