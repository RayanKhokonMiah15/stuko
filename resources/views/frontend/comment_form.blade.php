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
                </ul>
            </nav>
        </div>
    </header>
    <div class="container" style="max-width:400px;margin:40px auto 0 auto;">
        <div class="comment-form-modern-simple">
            <h3 class="comment-form-title-simple">Komentar untuk <span>{{ $gallery->nama_foto }}</span></h3>
            <form action="{{ route('frontend.comment', $gallery->id) }}" method="POST" class="comment-form-fields-simple">
                @csrf
                <input type="text" name="nama" placeholder="Nama" required class="comment-form-input-simple">
                <textarea name="isi" placeholder="Tulis komentar..." required rows="3" class="comment-form-textarea-simple"></textarea>
                <button type="submit" class="comment-form-btn-simple">Kirim</button>
            </form>
            <a href="{{ route('frontend.single', $gallery->id) }}" class="comment-form-back-simple">&larr; Kembali</a>
        </div>
    </div>

    <style>
    .comment-form-modern-simple {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 12px rgba(49,130,206,0.07), 0 1.5px 8px rgba(0,0,0,0.04);
        padding: 22px 18px 18px 18px;
        margin: 0 auto;
        max-width: 400px;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 0.5em;
    }
    .comment-form-title-simple {
        margin-bottom: 12px;
        font-size: 1.05em;
        font-weight: 600;
        color: #222;
        text-align: left;
        letter-spacing: 0.01em;
    }
    .comment-form-title-simple span {
        color: #3182ce;
        font-weight: 700;
    }
    .comment-form-fields-simple {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .comment-form-input-simple, .comment-form-textarea-simple {
        padding: 9px 13px;
        border-radius: 7px;
        border: 1.2px solid #d1d5db;
        font-size: 1em;
        background: #f8fafc;
        color: #222;
        outline: none;
        transition: border 0.16s, box-shadow 0.16s;
        box-shadow: 0 1px 2px rgba(49,130,206,0.03);
    }
    .comment-form-input-simple:focus, .comment-form-textarea-simple:focus {
        border: 1.2px solid #3182ce;
        background: #fff;
    }
    .comment-form-btn-simple {
        margin-top: 4px;
        padding: 9px 0;
        border-radius: 7px;
        border: none;
        background: #3182ce;
        color: #fff;
        font-size: 1em;
        font-weight: 600;
        box-shadow: 0 1px 4px rgba(49,130,206,0.08);
        cursor: pointer;
        transition: background 0.16s, box-shadow 0.16s;
    }
    .comment-form-btn-simple:hover, .comment-form-btn-simple:focus {
        background: #2563eb;
        box-shadow: 0 2px 8px rgba(49,130,206,0.13);
    }
    .comment-form-back-simple {
        display: inline-block;
        margin-top: 16px;
        color: #3182ce;
        font-size: 0.97em;
        text-decoration: none;
        transition: color 0.16s;
    }
    .comment-form-back-simple:hover {
        color: #2563eb;
        text-decoration: underline;
    }
    body.dark-mode .comment-form-modern-simple {
        background: #23272b;
        box-shadow: 0 2px 12px rgba(49,130,206,0.13), 0 1.5px 8px rgba(0,0,0,0.13);
    }
    body.dark-mode .comment-form-title-simple {
        color: #e0e0e0;
    }
    body.dark-mode .comment-form-input-simple, body.dark-mode .comment-form-textarea-simple {
        background: #23272b;
        color: #e0e0e0;
        border: 1.2px solid #444;
    }
    body.dark-mode .comment-form-input-simple:focus, body.dark-mode .comment-form-textarea-simple:focus {
        background: #181a1b;
        border: 1.2px solid #8ecae6;
    }
    body.dark-mode .comment-form-btn-simple {
        background: #8ecae6;
        color: #23272b;
    }
    body.dark-mode .comment-form-btn-simple:hover, body.dark-mode .comment-form-btn-simple:focus {
        background: #48bfe3;
        color: #fff;
    }
    body.dark-mode .comment-form-back-simple {
        color: #8ecae6;
    }
    body.dark-mode .comment-form-back-simple:hover {
        color: #fff;
    }
    @media (max-width: 600px) {
        .comment-form-modern-simple {
            padding: 12px 3vw 12px 3vw;
        }
        .comment-form-title-simple {
            font-size: 0.98em;
        }
        .comment-form-btn-simple {
            font-size: 0.97em;
        }
    }

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

    </style>
    <!-- DARK MODE TOGGLE BUTTON & SCRIPT (copy from home, tanpa Instagram) -->
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
@endsection
