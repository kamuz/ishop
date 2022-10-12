<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<?php echo $this->getMeta(); ?>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<link href="<?php echo ASSETS; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo ASSETS; ?>/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo ASSETS; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo ASSETS; ?>/js/jquery.js"></script>
	<script src="<?php echo ASSETS; ?>/js/responsiveslides.js"></script>
	<script src="<?php echo ASSETS; ?>/js/simplecart.js"> </script>
	<script src="<?php echo ASSETS; ?>/js/memenu.js"></script>
	<script src="<?php echo ASSETS; ?>/js/easydropdown.js"></script>
	<script src="<?php echo ASSETS; ?>/js/main.js"></script>
</head>
<body>
	<div class="top-header">
		<div class="container">
			<div class="top-header-main row">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Euro</option>
							</select>
						</div>
						<div class="box1">
							<select tabindex="4" class="dropdown">
								<option value="" class="label">English :</option>
								<option value="1">English</option>
								<option value="2">French</option>
								<option value="3">German</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="checkout.php">
							<div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="<?php echo ASSETS; ?>/images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="logo">
		<a href="index.php"><h1>Luxury Watches</h1></a>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="header row">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
						<li class="grid"><a href="#">Men</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.php">New Arrivals</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Swem Wear</a></li>
											<li><a href="products.php">Accessories</a></li>
											<li><a href="products.php">Handbags</a></li>
											<li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Watches</a></li>
											<li><a href="products.php">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Watches</a></li>
											<li><a href="products.php">Brands</a></li>
											<li><a href="products.php">Coats</a></li>
											<li><a href="products.php">Accessories</a></li>
											<li><a href="products.php">Trousers</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.php">499 Store</a></li>
											<li><a href="products.php">Fastrack</a></li>
											<li><a href="products.php">Casio</a></li>
											<li><a href="products.php">Fossil</a></li>
											<li><a href="products.php">Maxima</a></li>
											<li><a href="products.php">Timex</a></li>
											<li><a href="products.php">TomTom</a></li>
											<li><a href="products.php">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Women</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.php">New Arrivals</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Swem Wear</a></li>
											<li><a href="products.php">Accessories</a></li>
											<li><a href="products.php">Handbags</a></li>
											<li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Watches</a></li>
											<li><a href="products.php">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Watches</a></li>
											<li><a href="products.php">Brands</a></li>
											<li><a href="products.php">Coats</a></li>
											<li><a href="products.php">Accessories</a></li>
											<li><a href="products.php">Trousers</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.php">499 Store</a></li>
											<li><a href="products.php">Fastrack</a></li>
											<li><a href="products.php">Casio</a></li>
											<li><a href="products.php">Fossil</a></li>
											<li><a href="products.php">Maxima</a></li>
											<li><a href="products.php">Timex</a></li>
											<li><a href="products.php">TomTom</a></li>
											<li><a href="products.php">Titan</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo.php">Blog</a></li>
						<li class="grid"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right">
				<div class="search-bar">
					<input type="text" placeholder="Search">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php echo $content; ?>
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="row">
					<div class="col-sm-3">
						<h3>Follow Us</h3>
						<ul>
							<li><a href="#"><p>Facebook</p></a></li>
							<li><a href="#"><p>Twitter</p></a></li>
							<li><a href="#"><p>Google+</p></a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h3>Information</h3>
						<ul>
							<li><a href="#"><p>Specials</p></a></li>
							<li><a href="#"><p>New Products</p></a></li>
							<li><a href="#"><p>Our Stores</p></a></li>
							<li><a href="contact.php"><p>Contact Us</p></a></li>
							<li><a href="#"><p>Top Sellers</p></a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h3>My Account</h3>
						<ul>
							<li><a href="account.php"><p>My Account</p></a></li>
							<li><a href="#"><p>My Credit slips</p></a></li>
							<li><a href="#"><p>My Merchandise returns</p></a></li>
							<li><a href="#"><p>My Personal info</p></a></li>
							<li><a href="#"><p>My Addresses</p></a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h3>Store Information</h3>
						<p>The company name, <span>Lorem ipsum dolor,</span> Glasglow Dr 40 Fe 72.</p>
						<p>+955 123 4567</p>
						<p><a href="mailto:example@email.com">contact@example.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" placeholder="Enter Your Email">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">
					<p>© <?php echo date( 'Y' ); ?> Luxury Watches. All Rights Reserved</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
</html>