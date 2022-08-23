<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>JotStock | Add Order</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">

			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<img src="https://www.jotform.com/resources/assets/icon/min/jotform-icon-transparent-400x400.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>


				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>


			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active ">
                    <a href="dashboard">
                        <span class="title">Dashboard</span>
                        {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                    </a>
                </li>
                <li class="has sub">
                    <a href="">Stocks</a>
                    <ul class="visible">
                        <li >
                            <a href="checkbarcode">
                                <span class="title">Add Stock</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li><li>
                            <a href="dashboard">
                                <span class="title">List Stocks</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li>
                    </ul>
                </li>
				<li class="has sub">
                    <a href="">Orders</a>
                    <ul class="visible">
                        <li >
                            <a href="checkbarcode?add=order">
                                <span class="title">Add Order</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li><li>
                            <a href="listorders">
                                <span class="title">List Orders</span>
                                {{-- <span class="badge badge-success badge-roundless">v2.0</span> --}}
                            </a>
                        </li>
                    </ul>
                </li>
			</ul>

		</div>

	</div>

	<div class="main-content">

		<div class="row">

			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">

				<ul class="user-info pull-left pull-none-xsm">

					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/jotform-icon-dark.svg" alt="" class="img-circle" width="44" />
							{{$user->shopName}}
						</a>

						<ul class="dropdown-menu">

							<!-- Reverse Caret -->
							<li class="caret"></li>

							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>

							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>

							<li>
								<a href="extra-calendar.html">
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>

							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>

				</ul>



			</div>


			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">

				<ul class="list-inline links-list pull-right">


					<li>
						<a href="{{route('logout')}}">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<hr />

					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>

									<a href="forms-main.html">Stocks</a>
							</li>
						<li class="active">

									<strong>Add Stocks</strong>
							</li>
							</ol>

		<h2>Add New Stock</h2>
		<br />


		<div class="row">
			<div class="col-md-12">

				<div class="panel panel-primary" data-collapsed="0">

					<div class="panel-heading">
						<div class="panel-title">
							Add New Stock Form
						</div>

					</div>

					<div class="panel-body">

						<form role="form" method="POST" class="form-horizontal form-groups-bordered">
                            @csrf
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Product Name</label>
								<div class="col-sm-5">
									<input type="text" name="name" class="form-control" value="{{$barcode->data[0]->urunAdi}}" id="field-1" placeholder="Product Name" readonly>
								</div>
							</div>
                            <div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Barcode</label>

								<div class="col-sm-5">
									<input type="text" name="barcode" class="form-control" value="{{$barcode->data[0]->barcode}}" id="field-1" placeholder="Barcode Number" readonly>
								</div>
							</div>
                            <div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Price</label>

								<div class="col-sm-5">
									<input type="text" name="price" class="form-control" value="{{$barcode->data[0]->fiyat}}" id="field-1" placeholder="Price" readonly>
								</div>
							</div>
                            <div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Stock Amount</label>

								<div class="col-sm-5">
									<input type="text" name="stock" class="form-control" id="field-1" placeholder="Stock Amount">
								</div>
							</div>
                            <div class="col-sm-offset-3 col-sm-5">

								<input type="submit" name="add" class="btn btn-default" value="Add Stock" />
							</div>
						</form>

					</div>



			</div>
		</div>


		<!-- Footer -->
		<footer class="main">

			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

		</footer>
	</div>







</div>




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>
