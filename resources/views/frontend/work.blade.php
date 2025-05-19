@extends('frontend.layouts.app')

@section('content')
		<header id="fh5co-header" role="banner">
			<div class="container text-center">
				<div id="fh5co-logo">
					<a href="index.html"><img src="images/logo.png" alt="Present Free HTML5 Bootstrap Template"></a>
				</div>
				<nav>
					<ul>
						<li><a href="{{ route('frontend.about') }}">About</a></li>
						<li class="active"><a href="{{ route('frontend.work') }}">Work</a></li>
						<li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
						<li><a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4">Instagram</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- END #fh5co-header -->


		<div class="container-fluid pt70 pb70">
			<div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
				<div class="fh5co-project masonry-brick">
					<a href="single.html">
						<img src="images/wawa.jpg" alt="Free HTML5 by FreeHTML5.co">
						<h2>Your Project Title Here</h2>
					</a>
				</div>
				<div class="fh5co-project masonry-brick">
					<a href="single.html">
						<img src="images/lopili on X.jpg" alt="Free HTML5 by FreeHTML5.co">
						<h2>Your Project Title Here</h2>
					</a>
				</div>
			</div>
			<!--END .fh5co-projects-feed-->
		</div>
		<!-- END .container-fluid -->

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="footer-content">
					<div class="copyright"><small>&copy; 2025 Present. All Rights Reserved. <br>Designed by <a>RRStudio</a></small></div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
@endsection