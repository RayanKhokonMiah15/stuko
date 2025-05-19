@extends('frontend.layouts.app')

@section('content')
    <header id="fh5co-header" role="banner">
        <div class="container text-center">
            <div id="fh5co-logo">
                <a href="{{ route('frontend.index') }}"><img src="{{ asset('images/logo.png') }}" alt="RRStudio"></a>
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

    <div class="container-fluid pt70 pb70">
        <div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
            <div class="fh5co-project masonry-brick">
                <a href="{{ route('frontend.single', 1) }}">
                    <img src="{{ asset('images/img_20.jpg') }}" alt="Free HTML5 by FreeHTML5.co">
                    <h2>Your Project Title Here</h2>
                </a>
            </div>
            <!-- Tambahkan lebih banyak item jika dibutuhkan -->
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