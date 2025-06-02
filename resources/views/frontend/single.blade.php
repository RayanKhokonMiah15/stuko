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
                    <li class="active"><a href="{{ route('frontend.work') }}">Work</a></li>
                    <li><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
                    <li><a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4">Instagram</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        .single-photo-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            max-width: 700px;
            margin: 32px auto 0 auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.10);
            overflow: hidden;
            padding: 0;
        }
        body.dark-mode .single-photo-flex {
            background: #23272b;
            box-shadow: 0 2px 16px rgba(0,0,0,0.30);
        }
        .single-photo-img {
            width: 260px;
            min-width: 180px;
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 14px 0 0 14px;
            object-fit: cover;
        }
        .single-caption-box {
            flex: 1 1 0;
            padding: 24px 24px 18px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .single-caption-box h2 {
            margin: 0 0 10px 0;
            font-size: 1.25em;
            font-weight: 700;
        }
        .single-caption-box p {
            margin: 0 0 10px 0;
            font-size: 1em;
            color: #666;
        }
        body.dark-mode .single-caption-box p {
            color: #bbb;
        }
        .single-genre-badge {
            margin-top: 10px;
            display: inline-block;
            background: #f0f0f0;
            color: #333;
            padding: 4px 14px;
            border-radius: 12px;
            font-size: 0.95em;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }
        body.dark-mode .single-genre-badge {
            background: #23272b;
            color: #e0e0e0;
        }
        .single-comment-section {
            max-width: 700px;
            margin: 28px auto 0 auto;
            background: #fafbfc;
            border-radius: 10px;
            box-shadow: 0 1px 6px rgba(0,0,0,0.06);
            padding: 18px 18px 10px 18px;
        }
        body.dark-mode .single-comment-section {
            background: #23272b;
            box-shadow: 0 1px 6px rgba(0,0,0,0.18);
        }
        .single-comment-section h4 {
            margin: 0 0 10px 0;
            font-size: 1.08em;
            font-weight: 700;
        }
        .single-comment-add-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #3182ce;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 7px 16px;
            font-size: 1em;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 18px;
            transition: background 0.2s;
        }
        .single-comment-add-btn:hover {
            background: #22577a;
        }
        .single-comment-add-btn i {
            font-size: 1.2em;
        }
        .single-comment-list {
            margin-top: 8px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .single-comment-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: none;
            border-radius: 0;
            padding: 0;
            font-size: 1em;
            border-bottom: 1px solid #ececec;
            padding-bottom: 8px;
        }
        .single-comment-item:last-child {
            border-bottom: none;
        }
        .single-comment-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #555;
            font-size: 1.1em;
            flex-shrink: 0;
        }
        body.dark-mode .single-comment-avatar {
            background: #23272b;
            color: #e0e0e0;
        }
        .single-comment-content {
            flex: 1;
        }
        .single-comment-author {
            font-weight: 600;
            font-size: 0.88em;
            margin-bottom: 2px;
            color: #222;
            opacity: 0.85;
        }
        body.dark-mode .single-comment-author {
            color: #e0e0e0;
        }
        .single-comment-text {
            font-size: 0.97em;
            color: #444;
            line-height: 1.5;
        }
        body.dark-mode .single-comment-text {
            color: #bbb;
        }
        @media (max-width: 700px) {
            .single-photo-flex {
                flex-direction: column;
                align-items: center;
                padding: 0 0 18px 0;
            }
            .single-photo-img {
                border-radius: 14px 14px 0 0;
                width: 100%;
                max-width: 100%;
            }
            .single-caption-box {
                padding: 18px 18px 8px 18px;
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

    <div class="single-photo-flex">
        <img src="{{ asset('storage/' . $gallery->foto) }}" alt="{{ $gallery->caption }}" class="single-photo-img">
        <div class="single-caption-box" style="position:relative;">
            @if($gallery->genre?->genre)
                <span class="single-genre-badge" style="position:absolute; left:0; top:12px; margin:0; z-index:2;">{{ $gallery->genre->genre }}</span>
            @endif
            <h2 style="margin-top:38px;">{{ $gallery->caption }}</h2>
            @if(!empty($gallery->deskripsi))
                <p style="color:#888; font-size:0.97em; line-height:1.5; margin:0 0 6px 0; max-width:320px; white-space:pre-line; overflow:hidden; text-overflow:ellipsis;">{{ Str::limit(strip_tags($gallery->deskripsi), 120) }}</p>
            @endif
        </div>
    </div>
    <div class="single-comment-section">
        <h4 style="display:flex;align-items:center;justify-content:space-between;gap:10px;">
            Komentar
            <a href="{{ route('frontend.comment.form', $gallery->id) }}" class="single-comment-add-btn">
                <i class="fa fa-comment"></i> Tambah Komentar
            </a>
        </h4>
        @if(isset($gallery->comments) && $gallery->comments->count())
            <div class="single-comment-list">
                @foreach($gallery->comments as $comment)
                    <div class="single-comment-item">
                        <div class="single-comment-avatar">
                            {{ strtoupper(substr($comment->nama,0,1)) }}
                        </div>
                        <div class="single-comment-content">
                            <div class="single-comment-author">{{ $comment->nama }}</div>
                            <div class="single-comment-text">{{ $comment->isi }}</div>
                        </div>
                        <form action="{{ route('frontend.comment.delete', $comment->id) }}" method="POST" style="margin-left:10px;" class="form-delete-comment">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="padding:4px 10px;font-size:0.93em; border-radius:6px; margin-top:2px;">Hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <div class="single-no-comment">Belum ada komentar.</div>
        @endif
    </div>

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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // SweetAlert untuk hapus komentar
        document.querySelectorAll('.form-delete-comment').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Hapus komentar?',
                    text: 'Komentar akan dihapus secara permanen.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        // SweetAlert untuk sukses tambah komentar
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 1800,
                showConfirmButton: false
            });
        @endif
    });
    </script>
@endsection