<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts/navbar')
        <!-- Header-->
        <!-- <header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <img src="{{ asset('build/assets/img/1.jpeg') }}" alt="Gambar Header Desa" class="img-fluid mb-4" style="max-height: 250px; border-radius: 8px;">

        <h1 class="fw-bolder">Selamat Datang di Desa Konoha!</h1>
        <p class="lead">Temukan keindahan alam, budaya yang kaya, dan informasi terkini seputar desa kami.</p>
        <p class="lead">Kami berkomitmen untuk membangun desa yang maju, sejahtera, dan transparan.</p>
        <a class="btn btn-lg btn-light" href="#profildesa">Jelajahi Lebih Lanjut!</a>
    </div>
</header> -->
@include('layouts/header')
        <!-- profil desa section-->
        <section id="profildesa" class="py-5">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">Profil Desa</h2>
                        <p class="lead">Desa Konoha adalah sebuah desa yang kaya akan tradisi dan keindahan alam. Terletak di kaki pegunungan, desa kami menawarkan pemandangan yang menakjubkan dan udara yang sejuk. Masyarakatnya yang ramah dan menjunjung tinggi nilai gotong royong menjadikan Konoha tempat yang nyaman untuk ditinggali.</p>
                        <p class="lead">Kami berkomitmen untuk terus mengembangkan potensi desa, baik dari sektor pertanian, pariwisata, maupun industri kreatif lokal. Visi kami adalah menciptakan Desa Konoha yang mandiri, sejahtera, dan lestari.</p>
                        <ul>
                            <li>Sejarah singkat desa</li>
                            <li>Visi dan Misi Desa</li>
                            <li>Struktur Pemerintahan Desa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- peta section-->
        <section class="bg-light py-5" id="petadesa">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">Peta Desa</h2>
                        <p class="lead">Temukan lokasi strategis dan batas wilayah Desa Konoha melalui peta interaktif kami. Peta ini juga akan menampilkan fasilitas umum, area pertanian, dan potensi wisata desa.</p>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.67890!2d106.816666!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQwJzM1LjkiTiAxMDbCsDQ5JzAwLjAiRQ!5e0!3m2!1sen!2sid!4v1678901234567!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <p class="mt-3 text-center">*(Contoh embed peta, ganti URL dengan lokasi desa Anda)</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- informasi publik section-->
        <section id="informasipublik" class="py-5">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">Informasi Publik</h2>
                        <p class="lead">Bagian ini menyediakan akses mudah ke berbagai informasi penting terkait pemerintahan dan pelayanan publik Desa Konoha. Anda dapat menemukan data anggaran, peraturan desa, serta informasi terkait kegiatan masyarakat.</p>
                        <ul>
                            <li>Laporan Keuangan Desa</li>
                            <li>Peraturan Desa</li>
                            <li>Agenda Kegiatan</li>
                            <li>Transparansi Dana Desa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- berita section -->
         <section class="bg-light py-5" id="berita">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">Berita Terbaru</h2>
                        <p class="lead">Ikuti perkembangan terbaru dan kejadian menarik di Desa Konoha. Kami akan terus memperbarui berita tentang pembangunan, acara desa, dan capaian-capaian penting.</p>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h4>Judul Berita 1</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Judul Berita 2</h4>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bumdes section -->
        <section id="bumdes" class="py-5">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">Badan Usaha Milik Desa (BUMDes)</h2>
                        <p class="lead">BUMDes kami didirikan untuk mengelola potensi ekonomi desa dan meningkatkan kesejahteraan masyarakat. Kami memiliki berbagai unit usaha, mulai dari pengelolaan pasar desa hingga unit simpan pinjam.</p>
                        <ul>
                            <li>Unit Usaha Unggulan</li>
                            <li>Laporan Kinerja BUMDes</li>
                            <li>Kerja Sama dan Kemitraan</li>
                        </ul>
                        <p class="text-center mt-4">Info lebih lanjut dapat menghubungi pengelola BUMDes.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        @include('layouts/footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('template/js/scripts.js')}}"></script>
    </body>
</html>
