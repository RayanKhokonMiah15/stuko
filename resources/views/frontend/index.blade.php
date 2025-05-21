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
            <!-- Remove dark mode button from header -->
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
        /* Style for gallery */
        .fh5co-projects-feed {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 4px;
            padding: 20px;
        }

        /* Badge for genre */
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

        /* Simplified frame */
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
            height: 220px;
            object-fit: cover;
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

        /* New style for photo name */
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

        /* Dark mode styles */
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
        /* Dark mode toggle button bottom right */
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
    </style>

    <!-- Dark mode toggle button (bottom right) -->
    <button id="darkModeToggle" title="Toggle dark mode">🌙</button>
    <script>
        // Dark mode toggle logic
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('darkModeToggle');
            const body = document.body;
            // Set initial mode
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

    <div class="container-fluid pt70 pb70">
        <div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
            @foreach ($galleries as $dept)
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
        </div>
    </div>

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