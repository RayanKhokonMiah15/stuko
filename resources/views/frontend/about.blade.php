@extends('frontend.layouts.app')

@section('content')

		<header id="fh5co-header" role="banner">
			<div class="container text-center">
				<div id="fh5co-logo">
					<a href="{{ route('frontend.index') }}">
						 <div class="hero-logo-col">
    <div class="hero-text-logo">RRSTUDIO</div>
</div>
					</a>
				</div>
				<nav>
					<ul>
						<li class="active"><a href="{{ route('frontend.about') }}">About</a></li>
						<li><a href="{{ route('frontend.work') }}">Work</a></li>
						<li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
						
					</ul>
				</nav>
			</div>
		</header>
		<!-- END #fh5co-header -->

		<div class="page-content">
			<style>
        .about-section {
            max-width: 700px;
            margin: 48px auto 0 auto;
            padding: 32px 24px 36px 24px;
            border-radius: 22px;
            background: none;
            box-shadow: none;
            text-align: center;
        }
        .about-section h1 {
            font-size: 2.1em;
            font-weight: 800;
            margin-bottom: 10px;
            color: #23272b;
        }
        .about-section .meta {
            color: #3182ce;
            font-size: 1em;
            margin-bottom: 16px;
        }
        .about-section p {
            font-size: 1.08em;
            color: #444;
            margin-bottom: 18px;
        }
        .about-section img {
            max-width: 100%;
            border-radius: 16px;
            margin: 18px 0;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
        }
        .about-section ul.square {
            text-align: left;
            display: inline-block;
            margin: 0 auto 0 auto;
            color: #555;
            font-size: 1em;
        }
        .about-section ul.square li {
            margin-bottom: 6px;
        }
        body.dark-mode .about-section {
            background: none;
            box-shadow: none;
        }
        body.dark-mode .about-section h1 {
            color: #e0e0e0;
        }
        body.dark-mode .about-section .meta {
            color: #8ecae6;
        }
        body.dark-mode .about-section p,
        body.dark-mode .about-section ul.square,
        body.dark-mode .about-section ul.square li {
            color: #bbb;
        }

		
    </style>
    <!-- Floating Instagram button (copy from home) -->
    <div class="floating-social">
        <a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4" target="_blank" class="social-link instagram" title="Instagram">
            <img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" alt="Instagram" class="social-icon">
        </a>
    </div>
    <!-- DARK MODE TOGGLE BUTTON & SCRIPT (copy from home) -->
    <button id="darkModeToggle" title="Toggle dark mode">🌙</button>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('darkModeToggle');
            const body = document.body;
            if (localStorage.getItem('darkMode') === 'enabled') {
                body.classList.add('dark-mode');
                toggle.textContent = '☀️';
            }
            toggle.addEventListener('click', function () {
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    localStorage.setItem('darkMode', 'enabled');
                    toggle.textContent = '☀️';
                } else {
                    localStorage.setItem('darkMode', 'disabled');
                    toggle.textContent = '🌙';
                }
            });
        });
    </script>
    <style>
        /* ====== DARK MODE FROM HOME ====== */
        body.dark-mode {
            background: #181a1b !important;
            color: #e0e0e0 !important;
        }
        a {
            color: #3182ce;
            text-decoration: none;
            transition: color 0.18s;
        }
        a:hover {
            color: #2563eb;
        }
        body.dark-mode a {
            color: #8ecae6;
        }
        body.dark-mode a:hover {
            color: #fff;
        }
        #darkModeToggle {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 1000;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            border: none;
            background: linear-gradient(135deg, #23272b 60%, #181a1b 100%);
            color: #fff;
            font-size: 1.7em;
            box-shadow: 0 2px 12px rgba(49,130,206,0.13);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        #darkModeToggle:hover {
            background: #3182ce;
            color: #fff;
        }
        body.dark-mode #darkModeToggle {
            background: linear-gradient(135deg, #e0e0e0 60%, #8ecae6 100%);
            color: #23272b;
        }
        .floating-social {
            position: fixed;
            right: 92px;
            bottom: 24px;
            z-index: 1000;
            display: flex;
            flex-direction: row;
            gap: 16px;
        }
        @media (max-width: 600px) {
            .floating-social {
                right: 80px;
                bottom: 20px;
                gap: 10px;
            }
        }
        .social-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .social-icon:hover {
            transform: scale(1.15) rotate(5deg);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        /* Tambahan dark mode untuk about-section */
        body.dark-mode .about-section {
            background: none;
            box-shadow: none;
        }
        body.dark-mode .about-section h1 {
            color: #e0e0e0;
        }
        body.dark-mode .about-section .meta {
            color: #8ecae6;
        }
        body.dark-mode .about-section p,
        body.dark-mode .about-section ul.square,
        body.dark-mode .about-section ul.square li {
            color: #bbb;
        }
    </style>
    <div class="about-section">
        <h1>About Us</h1>
        <div class="meta"><span>Fun project</span> <span> | experimental site | AI Spesialist</span></div>
        <p>Web gallery ini dibuat sebagai proyek kolaborasi kami yang memiliki minat besar dalam seni dan teknologi. Kami menciptakan ruang digital ini untuk menampilkan karya-karya visual yang inspiratif, mulai dari fotografi hingga desain grafis. Melalui web ini, kami berharap bisa berbagi keindahan, ide, dan kreativitas kepada siapa saja yang berkunjung. Terima kasih telah menjadi bagian dari perjalanan kami!</p>
        <img src="images/HD wallpaper_ Anime, Violet Evergarden, Violet Evergarden (Character), representation.jpg" alt="Free HTML5 by FreeHTML5.co">
        <p>Di web ini tidak banyak yang disajikan, hanya berisi hasil karya kami dalam bidang desain serta fotografi. Mungkin web ini cukup membosankan, maka dari itu tidak perlu berekspetasi tinggi soal fitur-fitur di web kami.<br>
        Ada beberapa alasan kenapa kami tidak membuat web kami sebagus mungkin (sealakadarnya) antara lain :</p>
        <ul class="square">
            <li>Malas membuat web dengan serius</li>
            <li>asal jadi saja</li>
            <li>yang penting dapat nilai</li>
        </ul>
    </div>
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

