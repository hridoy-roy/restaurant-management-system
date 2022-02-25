<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Blank Page | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/admin/css/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/admin/css/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets/admin/vendor/modernizr/modernizr.js') }}"></script>

		@stack('style')

	</head>
	<body>
		<section class="body">

@include('layouts.admin.partials.header')

			<div class="inner-wrapper">
@include('layouts.admin.partials.sidebar-left')

@yield('main_content')
			</div>

@include('layouts.admin.partials.sidebar-right')
		</section>

		<!-- Vendor -->
		<script src="{{ asset('assets/admin/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/common/common.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/admin/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

		<!-- Specific Page Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/admin/js/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('assets/admin/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/admin/js/theme.init.js') }}"></script>

		@stack('script')

	</body>
</html>