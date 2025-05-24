@extends('frontend.layouts.app')

@section('content')

		<header id="fh5co-header" role="banner">
			<div class="container text-center">
				<div id="fh5co-logo">
					<a href="{{ route('frontend.index') }}"><img src="images/logo.png" alt="RRStudio"></a>
				</div>
				<nav>
					<ul>
						<li class="active"><a href="{{ route('frontend.about') }}">About</a></li>
						<li><a href="{{ route('frontend.work') }}">Work</a></li>
						<li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
						<li><a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4">Instagram</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- END #fh5co-header -->

		<div class="page-content">
			<h1 class="mb0">About Us</h1>
			<div class="meta"><span>Fun project</span><span> experimental site | AI Spesialist</span></div>
			<p>Web gallery ini dibuat sebagai proyek kolaborasi kami yang memiliki minat besar dalam seni dan teknologi. Kami menciptakan ruang digital ini untuk menampilkan karya-karya visual yang inspiratif, mulai dari fotografi hingga desain grafis. Melalui web ini, kami berharap bisa berbagi keindahan, ide, dan kreativitas kepada siapa saja yang berkunjung. Terima kasih telah menjadi bagian dari perjalanan kami!</p>
			<p class="text-center"><img src="images/HD wallpaper_ Anime, Violet Evergarden, Violet Evergarden (Character), representation.jpg" alt="Free HTML5 by FreeHTML5.co"></p>
			<p>Di web ini tidak banyak yang disajikan, hanya berisi hasil karya kami dalam bidang desain serta fotografi. Mungkin web ini cukup membosankan, maka dari itu tidak perlu berekspetasi tinggi soal fitur-fitur di web kami.
			
			Ada beberapa alasan kenapa kami tidak membuat web kami sebagus mungkin (sealakadarnya) antara lain :
			</p>
			<ul class="square">
				<li>Malas membuat web dengan serius</li>
				<li>asal jadi saja</li>
				<li>yang penting dapat nilai</li>
			</ul>
		</div>

		
		<!-- END .container-fluid -->

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container-fluid">
				<div class="footer-content">
					<div class="copyright">&copy; 2025 Present. All Rights Reserved. <br>Designed by <a>RRStudio</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- END #fh5co-footer -->
@endsection

