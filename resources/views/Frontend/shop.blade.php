<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Market - eCommerce Mobile Template Shop and Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="home">

	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			<div class="panel-control-left">
				<a href="#" data-activates="slide-out-left" class="sidenav-control-left"><i class="fa fa-bars"></i></a>
			</div>
			<div class="site-title">
				<a href="/shop" class="logo"><h1>MARKET</h1></a>
			</div>
			<div class="panel-control-right">
				<a href="#" data-activates="slide-out-right" class="sidenav-control-right"><i class="fa fa-shopping-bag"></i><span>2</span></a>
			</div>
		</div>
	</div>
	<!-- end navbar -->

	<!-- panel control left -->
	<div class="panel-control-left">
		<ul id="slide-out-left" class="side-nav collapsible"  data-collapsible="accordion">
			<li>
				<a href="index.html"><i class="fa fa-home"></i>Home</a>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-indent"></i>Categories <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="categories-in collapsible"  data-collapsible="accordion">
						<li><a href="categories.html">Categories Page</a></li>
						<li>
							<div class="collapsible-header">Mobile & Tablet <span><i class="fa fa-chevron-right"></i></span></div>
							<div class="collapsible-body">
								<ul class="side-nav-panel">
									<li><a href="">Smartphone</a></li>
									<li><a href="">Tablet</a></li>
									<li><a href="">Charger</a></li>
									<li><a href="">Powerbank</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Laptop & Computer <span><i class="fa fa-chevron-right"></i></span></div>
							<div class="collapsible-body">
								<ul class="side-nav-panel">
									<li><a href="">Laptop</a></li>
									<li><a href="">Computer</a></li>
									<li><a href="">PC Gaming</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Fashion <span><i class="fa fa-chevron-right"></i></span></div>
							<div class="collapsible-body">
								<ul class="side-nav-panel">
									<li><a href="">Clothing</a></li>
									<li><a href="">Bags</a></li>
									<li><a href="">Shoes</a></li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Sport <span><i class="fa fa-chevron-right"></i></span></div>
							<div class="collapsible-body">
								<ul class="side-nav-panel">
									<li><a href="">Clothing</a></li>
									<li><a href="">Boxing</a></li>
									<li><a href="">Shoes</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="product-details.html"><i class="fa fa-shopping-basket"></i>Product Details</a>
			</li>
			<li>
				<a href="wishlist.html"><i class="fa fa-list-alt"></i>Wishlist</a>
			</li>
			<li>
				<a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i>Shopping Cart</a>
			</li>
			<li>
				<a href="checkout.html"><i class="fa fa-shopping-bag"></i>Checkout</a>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-rss"></i>Blog <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-file-powerpoint-o"></i>Pages <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="faq.html">Faq</a></li>
						<li><a href="testimonial.html">Testimonial</a></li>
						<li><a href="404.html">404 Page</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="contact.html"><i class="fa fa-envelope"></i>Contact Us</a>
			</li>
			<li>
				<a href="login.html"><i class="fa fa-sign-in"></i>Login</a>
			</li>
			<li>
				<a href="register.html"><i class="fa fa-user-plus"></i>Register</a>
			</li>
		</ul>
	</div>
	<!-- end panel control left -->

	<!-- panel control right -->
	<div class="panel-control-right">
		<div id="slide-out-right" class="side-nav">
			<div class="row entry">
				<div class="col s4">
					<img src="img/product2.png" alt="">
				</div>
				<div class="col s6">
					<div class="desc">
						<h6>Fashion Style</h6>
						<div class="rating">
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
						</div>
						<h6><span>$18.00</span></h6>
					</div>
				</div>
				<div class="col s2">
					<div class="action">
						<i class="fa fa-remove"></i>
					</div>
				</div>
			</div>
			<div class="row entry">
				<div class="col s4">
					<img src="img/product1.png" alt="">
				</div>
				<div class="col s6">
					<div class="desc">
						<h6>Men's Fashion</h6>
						<div class="rating">
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
						</div>
						<h6><span>$20.00</span></h6>
					</div>
				</div>
				<div class="col s2">
					<div class="action">
						<i class="fa fa-remove"></i>
					</div>
				</div>
			</div>
			<div class="row price">
				<div class="col s8">
					<h6>Total</h6>
				</div>
				<div class="col s4">
					<h6>$38.00</h6>
				</div>
			</div>
			<ul>
				<li>
					<button class="button">Checkout</button>
				</li>
				<li>
					<button class="button">View Cart</button>
				</li>
			</ul>
		</div>
	</div>
	<!-- end panel control right -->
	

<!-- product new-->
<div class="product app-section-home">
    <div class="container">
        <div class="app-title">
            <h4>New Product</h4>
        </div>
        
			<div class="main">
				<div class="heading">
					<h2>{{$shop->shopName}}</h2>
				</div>
				<div class="shop">
					<ul class="categories">
						@foreach ($categories as $category)
						<a href="#{{$category->categoryName}}"><li class="category">{{$category->categoryName}}</li></a>
						@endforeach
					</ul>
				</div>
				
					@foreach ($productsByCategory as $key=>$productCategory)
					<hr>
					<div class="grid"  id="{{$categories[$key]->categoryName}}" > 
						@foreach ($productCategory as $item)
						
							<div class="col s6">
								<div class="entry">
									<div class="image" ><img src="{{$item->productImage}}" alt=""></div>
									<h6><a href="">{{$item->productName}}</a></h6>
									<div class="rating">
										<span class="active"><i class="fa fa-star"></i></span>
										<span class="active"><i class="fa fa-star"></i></span>
										<span class="active"><i class="fa fa-star"></i></span>
										<span class="active"><i class="fa fa-star"></i></span>
										<span class=""><i class="fa fa-star"></i></span>
									</div>
									<div class="price">
										<h5>{{$item->productPrice}} TL</h5>
									</div>
									<button class="product-btn"><i class="fa-solid fa-cart-shopping"></i> <span>ADD TO CART</span></button>
								</div>
							</div>
						
						@endforeach
					</div>
					@endforeach
				
			</div>
       
        
    </div>
</div>
<!-- product new-->



	
	<!-- footer -->
	<footer>
		<div class="container">
			<h6>Find & follow us</h6>
			<ul class="icon-social">
				<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
				<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
				<li class="google"><a href=""><i class="fa fa-google"></i></a></li>
				<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
				<li class="rss"><a href=""><i class="fa fa-rss"></i></a></li>
			</ul>
			<div class="tel-fax-mail">
				<ul>
					<li><span>Tel:</span> 900000o02</li>
					<li><span>Fax:</span> 0400000o98</li>
					<li><span>Email:</span> info@youremail.com</li>
				</ul>
			</div>
			<div class="ft-bottom">
				<span>Copyright © 2016 All Rights Reserved </span>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	
	<!-- script -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/materialize.min.js')}}"></script>
	<script src="{{ asset('js/slick.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/custom.js')}}"></script>

</body>
</html>