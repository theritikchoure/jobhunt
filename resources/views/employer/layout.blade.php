
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Hunt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	 @include('include.basiccss')
 
</head>
<body>

<div class="page-loading">
	<img src="/front_asset/images/loader.gif" alt="" />
	<span>Skip Loader</span>
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="{{route('home')}}" title=""><img src="/front_asset/images/resource/logo.png" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="/front_asset/images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="/front_asset/images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				@include('include.menu')
			</div>
		</div>
	</div>
	
	<header class="stick-top">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="{{route('home')}}" title=""><img src="/front_asset/images/resource/logo.png" alt="" /></a>
				</div><!-- Logo -->
				<div class="btns-profiles-sec">
					@section('menu_detail')
                        
                    @show
					@include('include.empsidebar')
				</div>
				<nav>
					@include('include.menu')
				</nav><!-- Menus -->
			</div>
		</div>
	</header>

	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(/front_asset/images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>Welcome @yield('employer_name')</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
				 	<aside class="col-lg-3 column border-right">
				 		<div class="widget">
				 			<div class="tree_widget-sec">
				 				@include('include.empsidebar')
				 			</div>
				 		</div>
				 	</aside>
				 	@section('section')
                         
                     @show
				 </div>
			</div>
		</div>
	</section>

	@include('include.footer')

</div>


@include('include.basicjs')
</body>
</html>

