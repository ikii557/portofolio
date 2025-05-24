@extends('layouts.app')

@section('content')
  <main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Rifki Hadid Anwar</h4>
              <p><em>Saya adalah seorang Desain Grafis Web yang inovatif dan terbiasa bekerja dengan tenggat waktu. Saya memiliki pengalaman lebih dari 3 tahun dalam mengerjakan berbagai proyek, terutama dalam pembuatan desain digital dan cetak yang berfokus pada pengguna. Selain itu, saya juga sering membuat proyek menggunakan Laravel dan saat ini fokus sebagai Backend Developer.</em></p>
              <ul>
                <li>MJGP+9X5, Unnamed Road, Cukangawi, Madura, Kec. Wanareja, Kabupaten Cilacap, Jawa Tengah 53265</li>
                <li>(+62)831-3400-0194</li>
                <li>rifkihadidamwar@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Programer Web Developer  &amp; Graphic Design</h4>
              <h5>2022- 2025</h5>
              <p><em>SMK NEGERI 3 BANJAR</em></p>
              <p>Saya telah menempuh pendidikan selama 3 tahun di SMKN 3 Banjar dengan fokus pada bidang Programming dan Desain Grafis. Selama masa tersebut, saya aktif dalam mengembangkan berbagai proyek berbasis web, mulai dari perancangan tampilan (UI/UX) hingga pengembangan backend menggunakan berbagai bahasa pemrograman dan framework seperti Laravel.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Freelancer &amp; Graphic Design</h4>
              <h5>2025 - sekarang</h5>
              {{-- <p><em>Rochester Institute of Technology, Rochester, NY</em></p> --}}
              <p>Saya bekerja sebagai freelancer di bidang Desain Grafis sejak lulus dari SMKN 3 Banjar hingga sekarang. Selama menjadi freelancer, saya telah menangani berbagai proyek desain untuk kebutuhan digital maupun cetak, termasuk pembuatan logo, poster, konten media sosial, dan desain branding sesuai permintaan klien. Saya terbiasa bekerja secara mandiri, mengatur waktu, serta menyelesaikan proyek dengan hasil yang profesional.</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Junior Backend Developer (Laravel)</h4>
              <h5>Juli 2024 - November 2024</h5>
              <p><em>CV Mekarjaya Sentosa Abadi, JMJF+HX5, Cintaratu, Kec. Lakbok, Kabupaten Ciamis, Jawa Barat 46385</em></p>
              <ul>
                <li>Melakukan pengembangan dan pengelolaan sistem backend menggunakan Laravel untuk berbagai kebutuhan internal perusahaan.</li>
                <li>Memimpin tim dalam pembuatan proyek aplikasi, termasuk pembagian tugas, pengawasan progres, dan integrasi sistem backend.</li>
                <li>Berkoordinasi dengan tim frontend untuk memastikan integrasi API berjalan lancar dan sesuai kebutuhan sistem.</li>
                <li>Melakukan testing dan debugging untuk memastikan sistem berjalan stabil dan bebas dari error sebelum deployment.</li>
              </ul>
            </div>
            

            <div class="resume-item">
              <h4>Senior Desain Grafis (Figma)</h4>
              <h5>2023 - 2024</h5>
              <p><em>Freelance / Remote</em></p>
              <ul>
                <li>Merancang desain antarmuka (UI) untuk aplikasi mobile dan web menggunakan Figma secara profesional dan responsif.</li>
                <li>Berpengalaman dalam membuat user flow, wireframe, prototype, dan tampilan akhir untuk kebutuhan klien.</li>
                <li>Berkoordinasi dengan tim developer untuk memastikan desain dapat diimplementasikan sesuai kebutuhan teknis.</li>
                <li>Telah menyelesaikan berbagai proyek desain aplikasi, mulai dari sistem kasir, dashboard admin, hingga aplikasi layanan publik.</li>
              </ul>
            </div>
            

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

 @endsection