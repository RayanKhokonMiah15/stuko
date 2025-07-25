@extends('frontend.layouts.app')

@section('content')
    <header id="fh5co-header" role="banner">
        <div class="container text-center" style="position:relative;">
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
                    <li class="active"><a href="{{ route('frontend.work') }}">Work</a></li>
                    <li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
                  
                </ul>
            </nav>
        </div>
    </header>

    <!-- FILTER GENRE BUTTON: Modern dropbar, responsive, rapi -->
    <div class="container-fluid" style="position:relative; margin-top: 18px; margin-bottom: 8px;">
        <div id="genreDropbarContainer" style="display:flex; justify-content:flex-end;">
            <div style="position:relative;">
                <button type="button" id="genreDropbarToggle" class="dropbar-toggle-btn">
                    <span class="dropbar-icon">&#128269;</span> Filter Genre
                </button>
                <div id="genreDropbar" class="dropbar-genre-list">
                    <form method="GET" action="" id="genreDropbarForm" style="margin:0;">
                        <div class="dropbar-scroll" style="display:flex; flex-direction:column; gap:6px; max-height:260px; overflow-y:auto;">
                            <button type="submit" name="genre" value="" class="dropbar-pill{{ !request('genre') ? ' active' : '' }}">Semua Genre</button>
                            @foreach($genres as $genre)
                                <button type="submit" name="genre" value="{{ $genre->id }}" class="dropbar-pill{{ request('genre') == $genre->id ? ' active' : '' }}">{{ $genre->genre }}</button>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Copy style dari index agar konsisten */
        .fh5co-projects-feed {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); /* Responsive, naik ke atas jika cukup ruang */
            gap: 16px;
            padding: 16px;
        }
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
            box-shadow: 0 4px 6px rgba(0,0,0,0.4);
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
        .caption-box {
            padding: 16px 12px 12px 12px;
            background: none;
            position: static;
            text-align: left;
        }
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
        .genre-bar-wrapper {
            width: 100%;
            max-width: 100vw;
            margin-bottom: 18px;
            background: transparent;
            padding: 0;
        }
        .genre-bar-scroll {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding: 0 0 4px 0;
            scrollbar-width: thin;
            scrollbar-color: #bfc9d1 #f5f5f5;
        }
        .genre-bar-scroll::-webkit-scrollbar {
            height: 6px;
        }
        .genre-bar-scroll::-webkit-scrollbar-thumb {
            background: #bfc9d1;
            border-radius: 4px;
        }
        .genre-pill {
            border: none;
            background: #fff;
            color: #333;
            padding: 7px 18px;
            border-radius: 999px;
            font-size: 0.98em;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0,0,0,0.07);
            cursor: pointer;
            transition: background 0.18s, color 0.18s, box-shadow 0.18s;
            outline: none;
            margin-bottom: 2px;
            white-space: nowrap;
            opacity: 0.93;
        }
        .genre-pill.active, .genre-pill:focus {
            background: #3182ce;
            color: #fff;
            box-shadow: 0 4px 12px rgba(49,130,206,0.13);
            opacity: 1;
        }
        .genre-pill:hover:not(.active) {
            background: #f0f4fa;
            color: #222;
        }
        body.dark-mode .genre-bar-scroll {
            scrollbar-color: #444 #23272b;
        }
        body.dark-mode .genre-pill {
            background: #23272b;
            color: #e0e0e0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.22);
        }
        body.dark-mode .genre-pill.active, body.dark-mode .genre-pill:focus {
            background: #8ecae6;
            color: #23272b;
            box-shadow: 0 4px 12px rgba(142,202,230,0.18);
        }
        body.dark-mode .genre-pill:hover:not(.active) {
            background: #2d3237;
            color: #fff;
        }
        body.dark-mode {
            background-color: #181a1b !important;
            color: #e0e0e0 !important;
        }
        body.dark-mode .container,
        body.dark-mode .container-fluid {
            background: transparent !important;
            color: #e0e0e0 !important;
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
        @media (max-width: 600px) {
            .genre-bar-wrapper { left: 8px; right: 8px; }
            .genre-bar-scroll { gap: 5px; }
            .genre-pill { padding: 7px 12px; font-size: 0.93em; }
        }

        /* DROP BAR MODERN */
        .dropbar-toggle-btn {
            display: flex;
            align-items: center;
            padding: 14px 28px; /* Perbesar tombol */
            font-size: 1.08em; /* Perbesar font */
            font-weight: 600;
            color: #333;
            background: #fff;
            border: none;
            border-radius: 999px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .dropbar-toggle-btn .dropbar-icon {
            font-size: 1.25em;
            margin-right: 8px;
        }
        .dropbar-toggle-btn:hover {
            background: #f0f4fa;
        }
        body.dark-mode .dropbar-toggle-btn {
            background: #23272b;
            color: #e0e0e0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.22);
        }
        body.dark-mode .dropbar-toggle-btn:hover {
            background: #2d3237;
        }
        .dropbar-genre-list {
            display: block;
            position: absolute;
            top: 60px;
            right: 0;
            z-index: 100;
            min-width: 220px;
            max-width: 320px;
            width: max-content;
            background: linear-gradient(120deg,#f8fafc 70%,#e0e7ef 100%);
            border: 1.5px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            overflow: hidden;
            opacity: 0;
            transform: translateY(-18px) scale(0.98);
            max-height: 0;
            pointer-events: none;
            transition: opacity 0.35s cubic-bezier(.4,0,.2,1), transform 0.35s cubic-bezier(.4,0,.2,1), max-height 0.35s cubic-bezier(.4,0,.2,1);
            padding: 12px 0 10px 0;
        }
        .dropbar-genre-list.open {
            opacity: 1;
            max-height: 400px;
            pointer-events: auto;
            transform: translateY(0) scale(1);
        }
        .dropbar-scroll {
            display: flex;
            flex-direction: column;
            gap: 6px;
            max-height: 260px;
            overflow-y: auto;
            padding: 0 12px 0 12px;
        }
        .dropbar-pill {
            border: none;
            background: #fff;
            color: #333;
            padding: 9px 18px;
            border-radius: 999px;
            font-size: 1em;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0,0,0,0.07);
            cursor: pointer;
            transition: background 0.18s, color 0.18s, box-shadow 0.18s;
            outline: none;
            margin-bottom: 2px;
            white-space: nowrap;
            opacity: 0.93;
            text-align: left;
        }
        .dropbar-pill.active, .dropbar-pill:focus {
            background: #3182ce;
            color: #fff;
            box-shadow: 0 4px 12px rgba(49,130,206,0.13);
            opacity: 1;
        }
        .dropbar-pill:hover:not(.active) {
            background: #f0f4fa;
            color: #222;
        }
        body.dark-mode .dropbar-genre-list {
            background: linear-gradient(120deg,#23272b 70%,#181a1b 100%);
            border: 1.5px solid #444;
        }
        body.dark-mode .dropbar-pill {
            background: #23272b;
            color: #e0e0e0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.22);
        }
        body.dark-mode .dropbar-pill.active, body.dark-mode .dropbar-pill:focus {
            background: #8ecae6;
            color: #23272b;
            box-shadow: 0 4px 12px rgba(142,202,230,0.18);
        }
        body.dark-mode .dropbar-pill:hover:not(.active) {
            background: #2d3237;
            color: #fff;
        }
        @media (max-width: 600px) {
            #genreDropbarContainer { width: 100%; padding-right: 4px; }
            .dropbar-genre-list { min-width: 140px; max-width: 98vw; width: 98vw; right: 0; left: auto; }
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
            // Toggle genre dropbar
            const dropbarToggle = document.getElementById('genreDropbarToggle');
            const dropbar = document.getElementById('genreDropbar');
            document.addEventListener('click', function(e) {
                if (dropbarToggle && dropbar) {
                    if (dropbarToggle.contains(e.target)) {
                        dropbar.classList.toggle('open');
                    } else if (!dropbar.contains(e.target)) {
                        dropbar.classList.remove('open');
                    }
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
    </style>

    <div class="container-fluid pt70 pb70" style="position:relative;">
        <div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
            @php
                $filtered = request('genre') ? $galleries->where('genre_id', request('genre')) : $galleries;
            @endphp
            @if($filtered->count())
                @foreach ($filtered as $dept)
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
                <div style="width:100%;text-align:center; color:#888; font-size:1.08em; padding:40px 0; display:flex; align-items:center; justify-content:center; min-height:120px;">Belum ada foto di genre ini.</div>
            @endif
        </div>
    </div>

    {{-- Footer agar selalu di bawah --}}
    <footer id="fh5co-footer" role="contentinfo" style="position:fixed; left:0; bottom:0; width:100%; z-index:1030; background:#fff; box-shadow:0 -2px 8px rgba(0,0,0,0.03);">
        <div class="container-fluid">
            <div class="footer-content">
                <div class="copyright">
                    <small>&copy; {{ date('Y') }} Present. All Rights Reserved. <br>Designed by <a href="#">RRStudio</a></small>
                </div>
            </div>
        </div>
    </footer>
@endsection