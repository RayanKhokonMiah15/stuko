@extends('frontend.layouts.app')

@section('content')
    <header id="fh5co-header" role="banner">
        <div class="container text-center">
            <div id="fh5co-logo">
                <a href="{{ route('frontend.index') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="RRStudio">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                    <li><a href="{{ route('frontend.work') }}">Work</a></li>
                    <li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
                    <li><a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4 ">Instagram</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Internal CSS -->
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container-fluid.pt70.pb70 {
            flex: 1 0 auto;
        }
        #fh5co-footer {
            flex-shrink: 0;
            width: 100%;
            padding: 24px 0 12px 0;
        }
        #fh5co-footer small {
            display: block;
            width: 100%;
            text-align: center;
        }

        /* style buat gallery nih */
        .fh5co-projects-feed {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 4px;
            padding: 20px;
        }

        /* Badge buat genre */
        .genre-badge {
            position: static;
            background: #fff;
            color: #333;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.85em;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            opacity: 0.92;
            transition: background 0.2s;
            margin-left: 0;
        }
        body.dark-mode .genre-badge {
            background: #23272b;
            color: #e0e0e0;
        }

        /* framenya atur disini lee */
        .fh5co-project {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.10);
            background: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        body.dark-mode .fh5co-project {
            background: #23272b;
            box-shadow: 0 2px 12px rgba(0,0,0,0.30);
        }
        .fh5co-project:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 8px 24px rgba(0,0,0,0.18);
        }
        .fh5co-project img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 12px 12px 0 0;
        }
        .fh5co-project .caption-box {
            padding: 16px 12px 12px 12px;
            background: none;
            position: static;
            text-align: left;
        }
        .fh5co-project h2 {
            margin: 0 0 6px 0;
            font-size: 1.1em;
            font-weight: 700;
            background: none;
            padding: 0;
            color: inherit;
            position: static;
            text-align: left;
        }
        .fh5co-project p {
            margin: 0;
            font-size: 0.97em;
            background: none;
            padding: 0;
            color: #666;
        }
        body.dark-mode .fh5co-project p {
            color: #bbb;
        }

        /* nih style buat nama foto */
        .photo-header {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 12px;
            margin-bottom: 6px;
        }
        .photo-name {
            font-weight: 600;
            font-size: 1em;
            color: #222;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        body.dark-mode .photo-name {
            color: #e0e0e0;
        }

        /* buat mode hitam */
        body.dark-mode {
            background-color: #181a1b !important;
            color: #e0e0e0 !important;
        }
        body.dark-mode .container,
        body.dark-mode .container-fluid {
            background: transparent !important;
            color: #e0e0e0 !important;
        }
        body.dark-mode .fh5co-project {
            background: #23272b;
            box-shadow: 0 4px 6px rgba(0,0,0,0.4);
        }
        body.dark-mode .fh5co-project h2,
        body.dark-mode .fh5co-project p {
            background-color: rgba(30, 30, 30, 0.85);
            color: #e0e0e0;
        }
        body.dark-mode header,
        body.dark-mode nav,
        body.dark-mode #fh5co-footer {
            background: #23272b !important;
        }
        body.dark-mode a {
            color: #8ecae6;
        }
        /* tombol mode hitamnya */
        #darkModeToggle {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 1000;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: none;
            background: #23272b;
            color: #fff;
            font-size: 1.5em;
            box-shadow: 0 2px 8px rgba(0,0,0,0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        #darkModeToggle:hover {
            background: #444950;
        }
        body.dark-mode #darkModeToggle {
            background: #e0e0e0;
            color: #23272b;
        }

        .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80px;
            text-align: center;
        }

        .custom-select-wrapper {
            position: relative;
            width: 100%;
        }
        .custom-select-genre {
            width: 100%;
            padding: 9px 36px 9px 14px;
            border-radius: 8px;
            border: 1.5px solid #bfc9d1;
            font-size: 1em;
            background: #fff;
            appearance: none;
            outline: none;
            box-shadow: 0 1px 6px rgba(0,0,0,0.06);
            transition: border 0.2s, box-shadow 0.2s;
            color: #222;
        }
        .custom-select-genre:focus {
            border: 1.5px solid #3182ce;
            box-shadow: 0 2px 8px rgba(49,130,206,0.08);
        }
        .custom-select-arrow {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            font-size: 1.2em;
            color: #bfc9d1;
        }
        body.dark-mode .custom-select-genre {
            background: #23272b;
            color: #e0e0e0;
            border: 1.5px solid #444;
        }
        body.dark-mode .custom-select-arrow {
            color: #888;
        }

        .dropbar-toggle-btn {
            background: #fff;
            color: #222;
            border: 1.5px solid #bfc9d1;
            border-radius: 24px;
            padding: 8px 22px 8px 16px;
            font-size: 1em;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: border 0.2s, box-shadow 0.2s, background 0.2s;
            position: relative;
            z-index: 21;
        }
        .dropbar-toggle-btn:hover, .dropbar-toggle-btn:focus {
            border: 1.5px solid #3182ce;
            background: #f7fafc;
        }
        .dropbar-icon {
            font-size: 1.2em;
            margin-right: 2px;
        }
        .dropbar-genre-list {
            display: none;
            position: absolute;
            top: 44px;
            right: 0;
            min-width: 260px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            padding: 14px 18px 12px 18px;
            animation: dropbarFadeIn 0.22s;
            border: 1.5px solid #e2e8f0;
            z-index: 22;
        }
        .dropbar-genre-list.open {
            display: block;
            animation: dropbarFadeIn 0.22s;
        }
        @keyframes dropbarFadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .dropbar-scroll {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 2px;
            scrollbar-width: thin;
        }
        .dropbar-pill {
            background: #f1f5f9;
            color: #222;
            border: none;
            border-radius: 16px;
            padding: 7px 18px;
            font-size: 0.98em;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.18s, color 0.18s;
            outline: none;
            margin-bottom: 2px;
            white-space: nowrap;
        }
        .dropbar-pill.active, .dropbar-pill:hover, .dropbar-pill:focus {
            background: #3182ce;
            color: #fff;
        }
        body.dark-mode .dropbar-toggle-btn {
            background: #23272b;
            color: #e0e0e0;
            border: 1.5px solid #444;
        }
        body.dark-mode .dropbar-genre-list {
            background: #23272b;
            color: #e0e0e0;
            border: 1.5px solid #444;
            box-shadow: 0 8px 32px rgba(0,0,0,0.33);
        }
        body.dark-mode .dropbar-pill {
            background: #23272b;
            color: #e0e0e0;
        }
        body.dark-mode .dropbar-pill.active, body.dark-mode .dropbar-pill:hover, body.dark-mode .dropbar-pill:focus {
            background: #3182ce;
            color: #fff;
        }
        /* Hide old select */
        form[method='GET'][action=''] .custom-select-wrapper { display: none !important; }

        /* HERO SECTION */
        .hero-section {
            padding: 64px 0 36px 0;
            background: linear-gradient(120deg,#f8fafc 60%,#e0e7ef 100%);
            text-align: center;
        }
        .hero-section h1 {
            font-size: 2.5em;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }
        .hero-section p {
            font-size: 1.18em;
            color: #444;
            max-width: 520px;
            margin: 0 auto 18px auto;
        }
        .hero-section .btn {
            padding: 12px 32px;
            font-size: 1.1em;
            border-radius: 24px;
            background: #3182ce;
            color: #fff;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(49,130,206,0.10);
            text-decoration: none;
            transition: background 0.2s;
        }

        /* SECTION TITLE */
        .section-title {
            font-size: 1.6em;
            font-weight: 700;
            margin-bottom: 18px;
            text-align: center;
        }

        /* ABOUT SHORT SECTION */
        .about-short {
            margin: 56px auto 0 auto;
            max-width: 900px;
            text-align: center;
        }
        .about-short h3 {
            font-size: 1.3em;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .about-short p {
            font-size: 1.08em;
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }

        /* TESTIMONI/QUOTE SECTION */
        .testimoni-section {
            margin: 48px auto 0 auto;
            max-width: 700px;
            text-align: center;
        }
        .testimoni-section blockquote {
            font-size: 1.15em;
            color: #3182ce;
            font-style: italic;
            margin-bottom: 8px;
        }
        .testimoni-section div {
            color: #888;
            font-size: 0.98em;
        }
    </style>

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
        <div class="container" style="max-width:700px;margin:0 auto;">
            <img src="{{ asset('images/logo.png') }}" alt="RRStudio" style="width:90px;height:90px;border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.10);margin-bottom:18px;">
            <h1 style="font-size:2.5em;font-weight:800;margin-bottom:10px;letter-spacing:-1px;">Selamat Datang di RRStudio Gallery</h1>
            <p style="font-size:1.18em;color:#444;max-width:520px;margin:0 auto 18px auto;">Temukan karya visual terbaik, mulai dari fotografi, desain, hingga inspirasi kreatif lainnya. Jelajahi genre favoritmu dan beri komentar pada karya yang kamu suka!</p>
            <a href="#highlighted-works" class="btn btn-primary" style="padding:12px 32px;font-size:1.1em;border-radius:24px;background:#3182ce;color:#fff;font-weight:600;box-shadow:0 2px 8px rgba(49,130,206,0.10);text-decoration:none;transition:background 0.2s;">Lihat Karya Pilihan</a>
        </div>
    </section>

    <!-- HIGHLIGHTED WORKS / KARYA PILIHAN -->
    <section id="highlighted-works" style="margin:36px auto 0 auto;max-width:1100px;">
        <h2 style="font-size:1.6em;font-weight:700;margin-bottom:18px;text-align:center;">Karya Pilihan</h2>
        <div class="fh5co-projects-feed">
            @php $highlighted = $galleries->sortByDesc('id')->take(6); @endphp
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
        <h3 style="font-size:1.3em;font-weight:700;margin-bottom:10px;">Tentang RRStudio</h3>
        <p style="font-size:1.08em;color:#555;max-width:600px;margin:0 auto;">RRStudio adalah ruang digital untuk menampilkan karya visual inspiratif dari berbagai genre. Kami percaya bahwa setiap karya punya cerita dan makna. Terima kasih telah berkunjung dan mendukung kreator lokal!</p>
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