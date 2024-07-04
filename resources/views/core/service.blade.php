@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Layanan</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="my-10 md:my-20">
      <div class="container xl:max-w-screen-xl my-4 md:m-0 px-4">
        <section class="my-6 md:my-4 flex flex-col-reverse md:flex-row justify-center items-center">
          <div class="flex justify-center items-center">
            <div class="text-center md:text-left">
              <p class="text-xl font-bold md:text-2xl text-white mb-3 md:mb-5">SOKO Financial</p>
              <p class="text-sm font-bold md:text-base lg:text-lg text-white">
                Dengan Jasa Kelas Keuangan SOKO Financial, pelanggan kami merasakan pelayanan eksklusif yang membimbing
                mereka menuju keberlanjutan finansial. Sementara Kelas Umum SOKO menjadi wadah inklusif untuk pemahaman
                bersama tentang keuangan. Tambahkan ke itu, konsultasi keuangan kami menjadi pilar utama dalam memandu
                langkah-langkah bijak untuk meraih kesuksesan finansial.
              </p>
            </div>
          </div>
        </section>
        <section class="my-20">
          <div class="flex flex-wrap gap-4 sm:gap-6 md:gap-8 justify-evenly my-3 md:my-5 lg:my-6">
            @include('components.core.service-card', [
                'image' => 'images/illustration-card-1.png',
                'alt' => 'Illustration Card 1',
                'title' => 'Webinar Soko Financial',
                'link' => '/webinar',
                'buttonText' => 'Daftar Sekarang',
            ])

            @include('components.core.service-card', [
                'image' => 'images/illustration-card-2.png',
                'alt' => 'Illustration Card 2',
                'title' => 'Kelas Umum',
                'link' => '/general-class',
                'buttonText' => 'Daftar Sekarang',
            ])

            @include('components.core.service-card', [
                'image' => 'images/illustration-card-3.png',
                'alt' => 'Illustration Card 3',
                'title' => 'Konsultasi Keuangan',
                'link' => '/financial-consulting',
                'buttonText' => 'Daftar Sekarang',
            ])

            @include('components.core.service-card', [
                'image' => 'images/illustration-card-4.png',
                'alt' => 'Illustration Card 4',
                'title' => 'Seminar & Talkshow',
                'link' => '/seminar-talkshow',
                'buttonText' => 'Daftar Sekarang',
            ])
          </div>
        </section>
      </div>
    </div>
  </section>
@endsection
