	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li><img src="<?php echo ASSETS; ?>/images/bnr-1.jpg" alt=""/></li>
				<li><img src="<?php echo ASSETS; ?>/images/bnr-2.jpg" alt=""/></li>
				<li><img src="<?php echo ASSETS; ?>/images/bnr-3.jpg" alt=""/></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="about">
		<div class="container">
			<div class="about-top grid-1 row">
				<?php if ( $brands ) :  ?>
					<?php foreach( $brands as $brand ) : ?>
					<div class="col-md-4 col-sm-4 about-left">
						<figure class="effect-bubba">
							<img class="img-responsive" src="<?php echo ASSETS . '/images/' . $brand->img; ?>" alt="<?php echo $brand->title; ?>"/>
							<figcaption>
								<h2><?php echo $brand->title; ?></h2>
								<p><?php echo $brand->description; ?></p>
							</figcaption>
						</figure>
					</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php if ( $hits ) : ?>
		<div class="product">
			<div class="container">
				<div class="product-top">
					<div class="product-one row">
						<?php foreach ( $hits as $hit ) : ?>
							<div class="col-md-3 col-sm-3 product-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="product/<?php echo $hit->alias; ?>" class="mask"><img class="img-responsive zoom-img" src="<?php echo ASSETS . '/images/' . $hit->img; ?>" alt="<?php echo $hit->title; ?>" /></a>
									<div class="product-bottom">
										<h3><a href="product/<?php echo $hit->alias; ?>"><?php echo $hit->title; ?></a></h3>
										<p>Explore Now</p>
										<h4>
											<a class="add-to-cart-link" href="cart/add?id=<?php echo $hit->id; ?>"><i></i></a>
											<span class=" item_price">$ <?php echo $hit->price; ?></span>
											<?php if ( $hit->old_price ) : ?>
												<small><del>$ <?php echo $hit->old_price; ?></del></small>
											<?php endif; ?>
										</h4>
									</div>
									<div class="srch">
										<span>-50%</span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>