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
                    <li class="active"><a href="{{ route('frontend.testimoni') }}">Testimoni</a></li>
                    <li><a href="https://www.instagram.com/_yanmoon?igsh=em83dXBicTBpb2Y4">Instagram</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="testimoni-section" style="margin:48px auto 0 auto;max-width:900px;text-align:center;">
        <h2 style="font-size:2em;font-weight:700;margin-bottom:28px;">Testimoni Pengunjung</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:32px;justify-items:center;">
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Andi Pratama" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Andi Pratama</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Websitenya keren, galeri fotonya sangat inspiratif dan mudah digunakan! Suka banget sama fitur dark mode-nya."</div>
            </div>
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Siti Rahma" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Siti Rahma</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Tampilan modern dan responsif, sangat nyaman diakses dari HP. Komentar di setiap foto juga seru!"</div>
            </div>
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Budi Santoso" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Budi Santoso</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Fitur filter genre sangat membantu, dan proses upload foto di admin panel mudah sekali. Sukses terus!"</div>
            </div>
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dewi Lestari" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Dewi Lestari</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Suka sama animasi smooth di filter genre dan tampilan galeri yang minimalis. Websitenya beda dari yang lain!"</div>
            </div>
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/men/77.jpg" alt="Rizky Maulana" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Rizky Maulana</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Komentar dengan SweetAlert bikin interaksi makin asik. Websitenya juga cepat diakses!"</div>
            </div>
            <div style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,0.08);padding:32px 20px;max-width:340px;">
                <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Maya Putri" style="width:64px;height:64px;border-radius:50%;margin-bottom:12px;">
                <div style="font-weight:600;font-size:1.1em;">Maya Putri</div>
                <div style="color:#3182ce;font-size:1.1em;font-style:italic;margin:10px 0 0 0;">"Websitenya sangat inspiratif untuk para fotografer pemula. Fitur highlight karya pilihan sangat membantu!"</div>
            </div>
        </div>
    </section>
    <!-- OUR SERVICES SECTION -->
    <section class="our-services-section" style="margin:56px auto 0 auto;max-width:900px;text-align:center;">
        <h2 style="font-size:2em;font-weight:700;margin-bottom:28px;">Our Services</h2>
        <p style="font-size:1.08em;color:#555;max-width:600px;margin:0 auto 32px auto;">Tertarik menggunakan jasa kami? Pilih layanan di bawah ini dan isi formulir pemesanan di sidebar kanan!</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:28px;justify-items:center;">
            <!-- Jasa Fotografi -->
            <div style="background:#f8fafc;border-radius:16px;box-shadow:0 2px 10px rgba(0,0,0,0.06);padding:28px 18px;max-width:300px;">
                <img src="https://img.icons8.com/ios-filled/50/3182ce/camera.png" alt="Jasa Foto" style="width:44px;height:44px;margin-bottom:10px;">
                <div style="font-weight:600;font-size:1.08em;margin-bottom:6px;">Jasa Fotografi</div>
                <div style="color:#555;font-size:0.98em;">Pemotretan produk, event, portrait, dan kebutuhan visual lainnya.</div>
                <button class="btn-pesan" onclick="openSidebar('Jasa Fotografi')" style="margin-top:14px;padding:8px 22px;border-radius:22px;background:#3182ce;color:#fff;font-weight:600;border:none;cursor:pointer;transition:background 0.2s;display:inline-block;">Pesan Sekarang</button>
            </div>
            <!-- Jasa Desain Grafis -->
            <div style="background:#f8fafc;border-radius:16px;box-shadow:0 2px 10px rgba(0,0,0,0.06);padding:28px 18px;max-width:300px;">
                <img src="https://img.icons8.com/ios-filled/50/3182ce/design.png" alt="Jasa Desain" style="width:44px;height:44px;margin-bottom:10px;">
                <div style="font-weight:600;font-size:1.08em;margin-bottom:6px;">Jasa Desain Grafis</div>
                <div style="color:#555;font-size:0.98em;">Desain poster, logo, feed Instagram, banner, dan kebutuhan branding lainnya.</div>
                <button class="btn-pesan" onclick="openSidebar('Jasa Desain Grafis')" style="margin-top:14px;padding:8px 22px;border-radius:22px;background:#3182ce;color:#fff;font-weight:600;border:none;cursor:pointer;transition:background 0.2s;display:inline-block;">Pesan Sekarang</button>
            </div>
            <!-- Jasa Editing Video -->
            <div style="background:#f8fafc;border-radius:16px;box-shadow:0 2px 10px rgba(0,0,0,0.06);padding:28px 18px;max-width:300px;">
                <img src="https://img.icons8.com/ios-filled/50/3182ce/video-editing.png" alt="Jasa Editing Video" style="width:44px;height:44px;margin-bottom:10px;">
                <div style="font-weight:600;font-size:1.08em;margin-bottom:6px;">Jasa Editing Video</div>
                <div style="color:#555;font-size:0.98em;">Editing video promosi, dokumentasi, konten media sosial, dan lainnya.</div>
                <button class="btn-pesan" onclick="openSidebar('Jasa Editing Video')" style="margin-top:14px;padding:8px 22px;border-radius:22px;background:#3182ce;color:#fff;font-weight:600;border:none;cursor:pointer;transition:background 0.2s;display:inline-block;">Pesan Sekarang</button>
            </div>
        </div>
        <!-- SIDEBAR FORM -->
        <div id="sidebarForm" style="position:fixed;top:0;right:-420px;width:370px;max-width:95vw;height:100vh;background:#fff;box-shadow:-2px 0 16px rgba(0,0,0,0.13);z-index:9999;transition:right 0.35s cubic-bezier(.4,0,.2,1);padding:36px 28px 24px 28px;overflow-y:auto;">
            <button onclick="closeSidebar()" style="position:absolute;top:18px;right:18px;background:none;border:none;font-size:1.7em;color:#888;cursor:pointer;">&times;</button>
            <h3 id="sidebarTitle" style="font-size:1.25em;font-weight:700;margin-bottom:18px;color:#3182ce;">Form Pemesanan</h3>
            <form onsubmit="return sendToWhatsApp(event)">
                <div style="margin-bottom:14px;text-align:left;">
                    <label>Nama:</label>
                    <input type="text" id="waNama" class="form-control" style="width:100%;padding:7px 12px;border-radius:8px;border:1px solid #ccc;">
                </div>
                <div style="margin-bottom:14px;text-align:left;">
                    <label>Email/WA:</label>
                    <input type="text" id="waKontak" class="form-control" style="width:100%;padding:7px 12px;border-radius:8px;border:1px solid #ccc;">
                </div>
                <div style="margin-bottom:14px;text-align:left;">
                    <label>Jasa yang dipilih:</label>
                    <input type="text" id="sidebarService" class="form-control" style="width:100%;padding:7px 12px;border-radius:8px;border:1px solid #ccc;background:#f3f3f3;" readonly>
                </div>
                <div style="margin-bottom:14px;text-align:left;">
                    <label>Keterangan Pesanan:</label>
                    <textarea id="waKeterangan" class="form-control" style="width:100%;padding:7px 12px;border-radius:8px;border:1px solid #ccc;min-height:60px;"></textarea>
                </div>
                <button type="submit" style="background:#3182ce;color:#fff;padding:9px 28px;border-radius:8px;font-weight:600;border:none;width:100%;margin-top:8px;">Kirim</button>
            </form>
        </div>
        <div id="sidebarOverlay" onclick="closeSidebar()" style="display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.18);z-index:9998;"></div>
        <script>
        function openSidebar(service) {
            document.getElementById('sidebarForm').style.right = '0';
            document.getElementById('sidebarOverlay').style.display = 'block';
            document.getElementById('sidebarService').value = service;
            // Judul sesuai jasa
            let title = '';
            if (service === 'Jasa Fotografi') title = 'Fotografi';
            else if (service === 'Jasa Desain Grafis') title = 'Desain Grafis';
            else if (service === 'Jasa Editing Video') title = 'Editing Video';
            else title = service;
            document.getElementById('sidebarTitle').textContent = title;
        }
        function closeSidebar() {
            document.getElementById('sidebarForm').style.right = '-420px';
            document.getElementById('sidebarOverlay').style.display = 'none';
        }
        function sendToWhatsApp(e) {
            e.preventDefault();
            var nama = document.getElementById('waNama').value.trim();
            var kontak = document.getElementById('waKontak').value.trim();
            var jasa = document.getElementById('sidebarService').value.trim();
            var ket = document.getElementById('waKeterangan').value.trim();
            var pesan = `Halo saya ingin memesan ${jasa}, atas nama ${nama}, ${ket}`;
            var url = 'https://wa.me/6289619351355?text=' + encodeURIComponent(pesan);
            window.open(url, '_blank');
            closeSidebar();
            return false;
        }
        // Tutup sidebar jika ESC ditekan
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeSidebar();
        });
        </script>
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
