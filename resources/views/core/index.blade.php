@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <section class="px-4 flex flex-col-reverse md:flex-row mb-6 md:mb-0 md:py-10 md:gap-8">
      <div class="md:w-7/12 flex justify-center items-center">
        <div class="pt-4 md:pt-0 md:w-full md:flex md:flex-col md:justify-start md:gap-6 text-center">
          <span class="p-3 md:p-0 md:text-left md:w-full text-2xl font-bold block lg:text-4xl">Tingkatkan literasi dan
            keuangan Generasi Muda Indonesia bersama kami!</span>

          <a href="/service" class="md:text-left">
            <button
              class="bg-primary-100 text-white py-2 px-6 rounded-xl hover:bg-primary-100/80 active:bg-sky-700 focus:ring focus:ring-sky-300 md:w-fit md:mx-0 duration-300">Daftar
              Sekarang</button>
          </a>
        </div>
      </div>
      <div class="md:w-5/12 flex justify-center py-2">
        <img src="{{ asset('images/illustration-home.svg') }}" class="w-3/4 sm:w-1/2 md:w-full" alt="Illustration">
      </div>
    </section>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
      <section class="w-4/5 bg-white mx-auto rounded-3xl my-20">
        <div class="py-5 px-3 flex flex-col items-center">
          <span class="mb-3 md:mb-6 lg:mb-8 text-xl font-bold block md:text-2xl lg:text-3xl">Layanan Kami</span>
          <div class="flex flex-wrap gap-4 justify-evenly my-3 md:my-5 lg:my-6">
            @include('components.core.service-card-home', [
                'image' => 'images/illustration-card-1.png',
                'alt' => 'Illustration Card 1',
                'title' => 'Webinar Soko Financial',
                'link' => '/webinar',
            ])

            @include('components.core.service-card-home', [
                'image' => 'images/illustration-card-2.png',
                'alt' => 'Illustration Card 2',
                'title' => 'Kelas Umum',
                'link' => '/general-class',
            ])

            @include('components.core.service-card-home', [
                'image' => 'images/illustration-card-3.png',
                'alt' => 'Illustration Card 3',
                'title' => 'Konsultasi Keuangan',
                'link' => '/financial-consulting',
            ])

            @include('components.core.service-card-home', [
                'image' => 'images/illustration-card-4.png',
                'alt' => 'Illustration Card 4',
                'title' => 'Seminar & Talkshow',
                'link' => '/seminar-talkshow',
            ])
          </div>
        </div>
      </section>

      <section class="flex flex-col justify-center items-center my-20">
        <span class="mb-3 md:mb-6 lg:mb-8 text-xl font-bold block md:text-2xl lg:text-3xl text-white">Tentang Kami</span>
        <div class="text-center px-5">
          <p class="text-sm font-medium md:text-xl text-white mb-3">SOKO Financial adalah start
            up di bidang literasi dan edukasi keuangan untuk Generasi Muda Indonesia.</p>
          <p class="text-sm font-medium md:text-xl text-white">Dalam bahasa Jawa Kuno, SOKO berarti tiang atau pilar
            penyangga. Kata-kata
            inilah yang kemudian memberikan inspirasi kepada SOKO Financial untuk menjadi tiang atau pilar penyangga
            keuangan bagi generasi muda bangsa Indonesia.</p>
        </div>
      </section>

      <section class="my-20">
        <span class="mb-3 md:mb-6 lg:mb-8 text-xl font-bold block md:text-2xl lg:text-3xl text-white text-center">Klien
          Kami</span>
        @include('components.core.client-us-slide', ['id' => 'logos1', 'data' => $logos])
      </section>

      <section class="my-20">
        <span
          class="mb-3 md:mb-6 lg:mb-8 text-xl font-bold block md:text-2xl lg:text-3xl text-white text-center">FAQ</span>
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
          <div class="max-w-3xl mx-auto space-y-4">
            @include('components.core.faq-item', [
                'number' => 1,
                'question' => 'Apa itu literasi keuangan?',
                'answer' =>
                    'Literasi keuangan adalah kemampuan untuk memahami dan menggunakan pengetahuan keuangan dalam pengambilan keputusan yang cerdas terkait dengan pengelolaan uang, investasi, pinjaman, dan perencanaan keuangan pribadi.',
            ])

            @include('components.core.faq-item', [
                'number' => 2,
                'question' => 'Mengapa literasi keuangan penting?',
                'answer' =>
                    'Literasi keuangan penting karena membantu individu untuk membuat keputusan keuangan yang cerdas, mengelola uang dengan baik, mengurangi risiko keuangan, mengembangkan investasi yang menguntungkan, dan mencapai kestabilan keuangan dalam jangka panjang.',
            ])

            @include('components.core.faq-item', [
                'number' => 3,
                'question' => 'Apa saja aspek-aspek literasi keuangan?',
                'answer' =>
                    'Aspek-aspek literasi keuangan meliputi pemahaman tentang pengelolaan uang, investasi, pinjaman, perencanaan keuangan pribadi, pemahaman tentang risiko keuangan, dan kemampuan untuk membuat anggaran dan mengelola utang.',
            ])

            @include('components.core.faq-item', [
                'number' => 4,
                'question' => 'Bagaimana perusahaan ini dapat membantu meningkatkan literasi keuangan?',
                'answer' =>
                    'Perusahaan dapat membantu meningkatkan literasi keuangan dengan menyediakan program-program pelatihan, seminar, dan materi edukasi tentang pengelolaan uang, investasi, perencanaan keuangan, dan pemahaman tentang produk keuangan.',
            ])

            @include('components.core.faq-item', [
                'number' => 5,
                'question' => 'Siapa yang bisa mengikuti program literasi keuangan perusahaan?',
                'answer' =>
                    'Program literasi keuangan perusahaan dapat diikuti oleh semua orang yang ingin meningkatkan pemahaman dan keterampilan keuangan mereka, termasuk karyawan perusahaan, mitra bisnis, dan masyarakat umum.',
            ])
          </div>
        </div>

        <script>
          document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
            button.addEventListener('click', function() {
              var answer = document.getElementById('answer' + (index + 1));
              var arrow = document.getElementById('arrow' + (index + 1));

              document.querySelectorAll('[id^="answer"]').forEach(function(ans, idx) {
                if (idx !== index) {
                  ans.classList.add('hidden');
                  document.getElementById('arrow' + (idx + 1)).classList.remove('rotate-180');
                }
              });

              if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                arrow.classList.add('rotate-180');
              } else {
                answer.classList.add('hidden');
                arrow.classList.remove('rotate-180');
              }
            });
          });
        </script>
      </section>

      <section class="w-4/5 bg-white mx-auto rounded-3xl my-20">
        <div class="py-5 px-3 flex flex-col items-center">
          <div class="text-center px-5">
            <p class="text-base font-bold md:text-xl mb-3">SOKO Financial berdedikasi untuk membangun kaum muda yang
              berdaya dengan memberi bekal pengetahuan dan keterampilan keuangan yang dibutuhkan untuk sukses dalam hidup.
            </p>
            <p class="text-xs font-semibold md:text-sm mb-5">Bergabunglah dengan kami hari ini dan mulailah mengembangkan
              kebiasaan finansial yang baik yang akan bertahan seumur hidup.
            </p>
            <a href="/service">
              <button
                class="bg-primary-100 text-white py-2 px-6 rounded-xl hover:bg-primary-200 active:bg-sky-700 focus:ring focus:ring-sky-300 md:w-fit md:m-3 duration-300 text-sm md:text-base">Daftar
                Sekarang</button>
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>
@endsection
