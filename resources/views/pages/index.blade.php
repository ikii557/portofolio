@extends('layouts.app')

@section('content')




  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/first_bg.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="text-white">Rifki Hadid Anwar</h2>
            <div id="typing-container" style="font-size: 20px; font-weight: bold;"></div>

<script>
    const paragraphs = [
        "I'm a professional Laravel developer",
        "I'm a professional web design developer",
        "I'm a fullstack developer"
    ];

    let paragraphIndex = 0;
    let charIndex = 0;
    const container = document.getElementById("typing-container");
    

    function typeParagraph() {
        if (charIndex < paragraphs[paragraphIndex].length) {
            container.innerHTML += paragraphs[paragraphIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeParagraph, 50); // kecepatan ketik
        } else {
            // Setelah selesai, tunggu sebentar, lalu hapus dan ketik berikutnya
            setTimeout(() => {
                charIndex = 0;
                paragraphIndex = (paragraphIndex + 1) % paragraphs.length;
                container.innerHTML = "";
                typeParagraph();
            }, 1500); // jeda sebelum pindah ke paragraf selanjutnya
        }
    }

    typeParagraph();
</script>

            <a href="about.html" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  @endsection