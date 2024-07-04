@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Tentang Kami</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="my-10 md:my-20 w-full flex flex-col items-center">
      <div class="container w-full xl:max-w-screen-xl my-4 md:m-0 px-4">
        <section class="my-6 md:my-4 flex flex-col-reverse md:flex-row justify-center items-center">
          <div class="flex justify-center items-center">
            <div class="text-center md:text-left">
              <p class="text-sm font-semibold md:text-base lg:text-lg text-white mb-3">SOKO Financial adalah start up di
                bidang literasi
                dan edukasi keuangan untuk Generasi Muda Indonesia.
                Dalam bahasa Jawa Kuno, SOKO berarti tiang atau pilar penyangga. Kata-kata inilah yang kemudian
                memberikan
                inspirasi kepada SOKO Financial untuk menjadi tiang atau pilar penyangga keuangan bagi generasi muda
                bangsa Indonesia.
              </p>
              <p class="text-sm font-semibold md:text-base lg:text-lg text-white mb-3">
                Kami percaya bahwa pengelolaan keuangan yang baik adalah kunci kesuksesan hidup. Aspek inilah yang dapat
                mengubah hidup seseorang menjadi sejahtera baik di masa muda hingga nanti setelah bertambah usia.
                SOKO Financial yakin bahwa manajemen keuangan merupakan kemampuan yang seharusnya dibina sejak usia
                dini.
                Oleh karena itu, kami menyediakan edukasi dan literasi keuangan untuk generasi muda dan masyarakat luas
                sehingga setiap orang dapat membangun tiang/penyangga keuangan yang kuat.
              </p>
              <p class="text-sm font-semibold md:text-base lg:text-lg text-white mb-3">
                SOKO Financial hadir dengan program kelas keuangan untuk generasi muda. Kami menyediakan kelas tatap
                muka
                untuk generasi muda yang berdomisili di Yogyakarta dan kelas online yang bisa diikuti semua orang dari
                seluruh pelosok negeri.
              </p>
              <p class="text-sm font-semibold md:text-base lg:text-lg text-white">
                Tak hanya siswa SMA/K dan Mahasiswa yang dapat ikut serta dalam program edukasi dan literasi keuangan
                ini,
                siapa saja boleh ambil bagian.
              </p>
            </div>
          </div>
        </section>
        <section class="my-20">
          <span class="mb-3 md:mb-6 lg:mb-8 text-2xl font-extrabold block md:text-3xl text-white text-center">Tim
            Soko</span>

          <div class="flex flex-col items-center">
            <div class="flex flex-wrap gap-4 sm:gap-6 md:gap-8 justify-evenly">
              @include('components.core.team-member', [
                  'image' => 'images/photo-3.jpeg',
                  'name' => 'Debora Aprianita, SE, CFP, AWP',
                  'position' => 'Founder & CEO',
              ])

              @include('components.core.team-member', [
                  'image' => 'images/photo-4.jpeg',
                  'name' => 'Debora Setyaningputri, SKom',
                  'position' => 'CMO',
              ])

              @include('components.core.team-member', [
                  'image' => 'images/photo-5.jpeg',
                  'name' => 'Putri Wulan',
                  'position' => 'Business Development',
              ])

              @include('components.core.team-member', [
                  'image' => 'images/photo-6.jpg',
                  'name' => 'Siti Nurhazanah',
                  'position' => 'Business Development',
              ])
            </div>
          </div>
        </section>
        <section class="my-20">
          <span class="mb-3 md:mb-6 lg:mb-8 text-xl font-bold block md:text-2xl lg:text-3xl text-white text-center">Klien
            Kami</span>
          @include('components.core.client-us-slide', ['id' => 'logos1', 'data' => $logos])
        </section>
      </div>
    </div>
  </section>
@endsection
