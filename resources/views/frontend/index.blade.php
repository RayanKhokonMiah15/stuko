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
                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                    <li><a href="{{ route('frontend.work') }}">Work</a></li>
                    <li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <!-- Internal CSS -->
    <style>
        /* ====== MODERN HERO SECTION ====== */
        .hero-section {
            padding: 72px 0 48px 0;
            background: none;
            text-align: left;
        }
        .hero-container-redesign.hero-flex-row {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            gap: 48px;
            background: none;
            border-radius: 32px;
            box-shadow: none;
            padding: 48px 40px 40px 40px;
            border: none;
            max-width: 2500px; /* Lebarkan container */
            margin: 0 auto 24px 0;
        }
        .hero-text-col {
            flex: 2.2;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            text-align: left;
            max-width: 2000px; /* Lebarkan area teks */
        }
        .hero-logo-col {
            flex: 1.5;
            display: flex;
            justify-content: flex-end;
            align-items: right;
        }
        .hero-title-redesign {
            font-size: 3.5em; /* Perbesar font */
            font-weight: 900;
            margin-bottom: 16px;
            letter-spacing: -1.5px;
            color: #23272b;
            text-align: left;
            line-height: 1.08;
        }
        .highlight-text {
            color: #3182ce;
            background: linear-gradient(90deg,#3182ce 60%,#8ecae6 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-underline-redesign {
            width: 120px;
            height: 7px;
            background: linear-gradient(90deg,#3182ce 60%,#8ecae6 100%);
            border-radius: 3px;
            margin: 0 0 28px 0;
            opacity: 0.9;
            animation: underlineGrow 1s cubic-bezier(.4,2,.6,1) 0.1s;
        }
        .hero-desc-redesign {
            font-size: 1.40em; /* Perbesar font */
            color: #444;
            max-width: 1000px; /* Lebarkan area teks */
            margin: 0 0 28px 0;
            text-align: left;
            line-height: 1.5;
        }
        .hero-btn-redesign {
            padding: 18px 48px;
            font-size: 1.22em;
            border-radius: 32px;
            margin-top: 16px;
        }
        @media (max-width: 1200px) {
            .hero-container-redesign.hero-flex-row {
                max-width: 98vw;
                padding: 32px 8vw 32px 4vw;
            }
            .hero-text-col {
                max-width: 98vw;
            }
            .hero-desc-redesign {
                max-width: 98vw;
            }
        }
        @media (max-width: 900px) {
            .hero-container-redesign.hero-flex-row {
                flex-direction: column-reverse;
                gap: 24px;
                padding: 28px 8px 22px 8px;
                margin: 0 auto 24px auto;
                max-width: 100vw;
            }
            .hero-text-col, .hero-logo-col {
                align-items: center;
                justify-content: center;
                width: 100%;
                text-align: center;
                max-width: 100vw;
            }
            .hero-text-col {
                align-items: center;
                text-align: center;
            }
            .hero-title-redesign, .hero-underline-redesign, .hero-desc-redesign, .hero-btn-redesign {
                text-align: center;
                align-self: center;
            }
        }
        @keyframes underlineGrow {
            from { width: 0; opacity: 0.3; }
            to { width: 90px; opacity: 0.9; }
        }
        body.dark-mode .hero-section {
            background: none;
        }
        body.dark-mode .hero-container-redesign.hero-flex-row {
            background: none;
            border: none;
            box-shadow: none;
        }
        body.dark-mode .hero-title-redesign,
        body.dark-mode .hero-desc-redesign {
            color: #e0e0e0;
        }
        body.dark-mode .hero-underline-redesign {
            background: linear-gradient(90deg,#8ecae6 60%,#3182ce 100%);
        }
        body.dark-mode .hero-logo-circle {
            background: linear-gradient(135deg, #23272b 60%, #181a1b 100%);
        }
        /* ====== END MODERN HERO SECTION ====== */

        /* ====== MODERN GALLERY ====== */
        .fh5co-projects-feed {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 18px;
            padding: 32px 8px 8px 8px;
        }
        .fh5co-project {
            position: relative;
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(49,130,206,0.10);
            background: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .fh5co-project:hover {
            transform: translateY(-8px) scale(1.04);
            box-shadow: 0 8px 32px rgba(49,130,206,0.18);
        }
        .fh5co-project img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            border-radius: 18px 18px 0 0;
        }
        .caption-box {
            padding: 18px 14px 14px 14px;
            background: none;
            position: static;
            text-align: left;
        }
        .fh5co-project h2 {
            margin: 0 0 8px 0;
            font-size: 1.13em;
            font-weight: 700;
            color: #23272b;
        }
        .fh5co-project p {
            margin: 0;
            font-size: 1em;
            color: #666;
        }
        .genre-badge {
            background: #e0e7ef;
            color: #3182ce;
            padding: 5px 14px;
            border-radius: 14px;
            font-size: 0.92em;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(49,130,206,0.08);
            margin-top: 10px;
            display: inline-block;
        }
        body.dark-mode .fh5co-projects-feed {
            background: none;
        }
        body.dark-mode .fh5co-project {
            background: #23272b;
            box-shadow: 0 2px 16px rgba(49,130,206,0.22);
        }
        body.dark-mode .fh5co-project h2,
        body.dark-mode .fh5co-project p {
            color: #e0e0e0;
        }
        body.dark-mode .genre-badge {
            background: #181a1b;
            color: #8ecae6;
        }
        /* ====== END MODERN GALLERY ====== */

        /* ====== MODERN ABOUT SHORT ====== */
        .about-short {
            margin: 64px auto 0 auto;
            max-width: 900px;
            text-align: center;
            background: none;
            border-radius: 18px;
            padding: 0 12px 0 12px;
        }
        .about-short h3 {
            font-size: 1.35em;
            font-weight: 800;
            margin-bottom: 12px;
            color: #23272b;
        }
        .about-short p {
            font-size: 1.13em;
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }
        body.dark-mode .about-short h3,
        body.dark-mode .about-short p {
            color: #e0e0e0;
        }
        /* ====== END MODERN ABOUT SHORT ====== */

        /* ====== MODERN TESTIMONI SECTION ====== */
        .testimoni-section {
            margin: 56px auto 0 auto;
            max-width: 700px;
            text-align: center;
            background: none;
            border-radius: 18px;
            padding: 0 12px 0 12px;
        }
        .testimoni-section blockquote {
            font-size: 1.18em;
            color: #3182ce;
            font-style: italic;
            margin-bottom: 10px;
        }
        .testimoni-section div {
            color: #888;
            font-size: 1em;
        }
        body.dark-mode .testimoni-section blockquote {
            color: #8ecae6;
        }
        body.dark-mode .testimoni-section div {
            color: #bbb;
        }
        /* ====== END MODERN TESTIMONI SECTION ====== */

        /* ====== FOOTER ====== */
        #fh5co-footer {
            flex-shrink: 0;
            width: 100%;
            padding: 32px 0 16px 0;
            background: none;
            border-top: 2px solid #e0e7ef;
        }
        #fh5co-footer small, #fh5co-footer .copyright {
            display: block;
            width: 100%;
            text-align: center;
            color: #888;
            font-size: 1em;
        }
        body.dark-mode #fh5co-footer {
            background: none;
            border-top: 2px solid #23272b;
        }
        body.dark-mode #fh5co-footer small, body.dark-mode #fh5co-footer .copyright {
            color: #bbb;
        }
        /* ====== END FOOTER ====== */

        /* ====== GENERAL ====== */
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f8fafc;
        }
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
        /* ====== END GENERAL ====== */

        /* ====== DARK MODE TOGGLE ====== */
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
        /* ====== END DARK MODE TOGGLE ====== */

        /* ====== FLOATING SOCIAL MEDIA AND AI NAVBAR ====== */
        .floating-social {
            position: fixed;
            right: 92px; /* Geser ke kiri dari dark mode toggle */
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


        
    </style>

    <!-- Pindahkan floating social ke kiri dark mode toggle -->
    <div class="floating-social">
    <a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4" target="_blank" class="social-link instagram" title="Instagram">
        <img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" alt="Instagram" class="social-icon">
    </a>
</div>


    <!-- function buat mode hitam  -->
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

            // Smooth scroll for "Lihat Karya Pilihan"
            const karyaBtn = document.querySelector('a.btn.btn-primary[href="#highlighted-works"]');
            if (karyaBtn) {
                karyaBtn.addEventListener('click', function(e) {
                    const target = document.getElementById('highlighted-works');
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            }
        });
    </script>

    <!-- HERO SECTION -->
    <section class="hero-section">
    <div class="container hero-container-redesign hero-flex-row">
        <div class="hero-text-col">
            <h1 class="hero-title-redesign">
                Selamat Datang di <span class="highlight-text">RRStudio Gallery</span>
            </h1>
            <div class="hero-underline-redesign"></div>
            <p class="hero-desc-redesign">
                Temukan beragam karya visual terbaik yang dikurasi dengan penuh kreativitas, mulai dari fotografi artistik, desain grafis yang memukau, hingga berbagai inspirasi kreatif lainnya yang menggugah imajinasi. Jelajahi genre favoritmu dengan lebih mendalam, temukan karya yang sesuai dengan seleramu, dan jangan ragu untuk memberikan komentar, apresiasi, atau pendapatmu pada setiap karya yang menarik perhatianmu!
            </p>
            <a href="#highlighted-works" class="btn btn-primary hero-btn-redesign">Lihat Karya Pilihan</a>
        </div>
        <div class="hero-logo-col">
            <!-- Ganti image dengan text -->
            <div class="hero-logo-text">RRSTUDIO</div>
        </div>
    </div>
</section>


    <!-- HIGHLIGHTED WORKS / KARYA PILIHAN -->
    <section id="highlighted-works" style="margin:36px auto 0 auto;max-width:1100px;">
        <h2 style="font-size:2.0em;font-weight:700;margin-bottom:18px;text-align:center;">Karya Pilihan</h2>
        <div class="fh5co-projects-feed">
            @php $highlighted = $galleries->sortByDesc('id')->take(5); @endphp
            @if($highlighted->count())
                @foreach ($highlighted as $dept)
                    <div class="fh5co-project masonry-brick">
                        <a href="{{ route('frontend.single', $dept->id) }}" style="display:block; position:relative;">
                            <div class="photo-header">
                                @if(!empty($dept->nama_foto))
                                    <div class="photo-name">{{ $dept->nama_foto }}</div>
                                @endif
                            </div>
                            <img src="{{ asset('storage/' . $dept->foto) }}" alt="{{ $dept->caption }}">
                            <div class="caption-box">
                                <h2>{{ $dept->caption }}</h2>
                                @if(!empty($dept->deskripsi))
                                    <p>{{ $dept->deskripsi }}</p>
                                @endif
                                @if($dept->genre?->genre)
                                    <span class="genre-badge" style="margin-top:10px; display:inline-block;">{{ $dept->genre->genre }}</span>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div style="width:100%;text-align:center; color:#888; font-size:1.08em; padding:40px 0; display:flex; align-items:center; justify-content:center; min-height:120px;">Belum ada karya yang di-highlight.</div>
            @endif
        </div>
        <div style="text-align:center;margin-top:24px;">
            <a href="{{ route('frontend.work') }}" class="btn btn-outline-primary" style="padding:10px 28px;font-size:1em;border-radius:22px;border:2px solid #3182ce;color:#3182ce;font-weight:600;text-decoration:none;transition:background 0.2s, color 0.2s;">Lihat Semua Karya</a>
        </div>
    </section>

    <!-- ABOUT SHORT SECTION -->
    <section style="margin:56px auto 0 auto;max-width:900px;text-align:center;">
        <h3 style="font-size:2.0em;font-weight:700;margin-bottom:10px;">Tentang RRStudio</h3>
        <p style="font-size:1.08em;color:#555;max-width:600px;margin:0 auto;">RRStudio adalah sebuah ruang digital yang didedikasikan untuk menampilkan karya-karya visual inspiratif dari berbagai genre—mulai dari fotografi, desain grafis, ilustrasi digital, hingga bentuk ekspresi visual lainnya. Kami percaya bahwa di balik setiap karya terdapat cerita, emosi, dan pesan yang ingin disampaikan oleh sang kreator.

Platform ini tidak hanya menjadi etalase bagi para seniman dan desainer lokal untuk memperkenalkan karya mereka kepada publik yang lebih luas, tetapi juga sebagai tempat bertemu, berbagi, dan saling menginspirasi antar pencipta dan penikmat karya.

Terima kasih telah berkunjung dan menjadi bagian dari komunitas kreatif ini. Dukunganmu sangat berarti dalam membantu memperkuat semangat para kreator lokal untuk terus berkarya, tumbuh, dan mewarnai dunia dengan visual yang penuh makna.

</p>
    </section>
    
    

    <!-- TESTIMONI/QUOTE SECTION -->
    <section style="margin:48px auto 0 auto;max-width:700px;text-align:center;">
        <blockquote style="font-size:1.15em;color:#3182ce;font-style:italic;margin-bottom:8px;">“Situs galeri ini sangat inspiratif dan mudah digunakan. Karyanya keren-keren!”</blockquote>
        <div style="color:#888;font-size:0.98em;">— Pengunjung RRStudio</div>
    </section>

    <footer id="fh5co-footer" role="contentinfo">
        <div class="container-fluid">
            <div class="footer-content">
                <div class="copyright">
                    <small>&copy; {{ date('Y') }} Present. All Rights Reserved. <br>Designed by <a href="#">RRStudio</a></small>
                </div>
            </div>
        </div>
    </footer>
@endsection