@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Kontak</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="my-10 md:my-20">
      <div
        class="container xl:max-w-screen-xl my-4 md:m-0 px-4 flex flex-col md:flex-row justify-center md:items-start gap-4">
        <section class="flex flex-col-reverse md:flex-row justify-center items-center">
          <div class="text-center md:text-left">
            <p class="text-xl font-bold md:text-2xl text-white mb-3 md:mb-5">SOKO Financial</p>
            <p class="text-sm font-semibold md:text-base text-white mb-3">
              Kami cukup berpengalaman dalam membangun literasi keuangan anda.
            </p>
            <p class="text-sm font-semibold md:text-base text-white mb-3">
              Jika kalian ada pertanyaan atau masih ragu bisa hubungi kami melalui di bawah ini.
            </p>
            <p class="text-sm font-semibold md:text-base text-white">
              financialsoko@gmail.com
            </p>
            <p class="text-sm font-semibold md:text-base text-white">
              CP : 081299139310 (Putri)
            </p>
          </div>
        </section>
        <div class="my-10 md:my-0 md:w-1/2">
          <form class="mx-auto">
            @include('components.core.text-input', [
                'type' => 'email',
                'id' => 'email',
                'name' => 'email',
                'placeholder' => 'Your email address',
            ])
            @include('components.core.text-input', [
                'type' => 'text',
                'id' => 'name',
                'name' => 'name',
                'placeholder' => 'Your name',
            ])
            @include('components.core.text-input', [
                'type' => 'number',
                'id' => 'notelp',
                'name' => 'notelp',
                'placeholder' => 'Your no. telp',
            ])
            @include('components.core.text-area', [
                'id' => 'message',
                'name' => 'message',
                'placeholder' => 'Enter your message',
            ])
            <div class="flex justify-center md:justify-start">
              @include('components.core.button', ['name' => 'Kirim'])
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
@endsection
