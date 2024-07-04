@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Blog</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="my-10 md:my-20 mx-4">
      <div
        class="container xl:max-w-screen-xl my-4 md:m-0 flex flex-col md:flex-row justify-center gap-4 md:gap-8 lg:gap-16">
        <div class="md:w-2/3">
          <div class="flex flex-col gap-4">
            <span class="text-white text-2xl font-bold">Baru dapat Gaji Pertama, Apa
              yang
              Harus Dilakukan?</span>
            <div class="flex gap-4 mb-2">
              <img src="{{ asset('images/money.svg') }}" alt="Money Icon">
              <div class="flex flex-col">
                <p class="text-white text-sm font-bold"><a href="#" class="hover:underline">Diana Putri</a></p>
                <div class="flex gap-2">
                  <p class="text-white text-xs">09/16/2023</p>
                  <p class="text-white text-xs">2 min read</p>
                </div>
              </div>
            </div>
          </div>
          <img src=" {{ asset('images/photo-2.jpg') }}" class="mb-4 w-full rounded-xl shadow-lg" alt="Photo">
          <div class="flex flex-col items-start text-justify">
            {!! $data !!}
          </div>
        </div>
        <section class="my-10 md:my-0 md:w-1/3">
          <div class="mb-6 md:mb-8">
            <span class="text-2xl font-extrabold block md:text-3xl text-center md:text-left text-white">Recent
              Post</span>
          </div>
          @include('components.core.recent-post')
          <div class="sm:flex sm:gap-4 md:block">
            <div class="mb-6 md:mb-8 w-full sm:w-1/2 md:w-full">
              <span class="text-2xl font-extrabold block md:text-3xl text-center md:text-left text-white mt-8 mb-4">Post
                Populer</span>
              @include('components.core.most-populer')
            </div>
            <div class="mb-6 md:mb-8 w-full sm:w-1/2 md:w-full">
              <span
                class="text-2xl font-extrabold block md:text-3xl text-center md:text-left text-white mt-8 mb-4">Kategori</span>
              @include('components.core.category')
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
@endsection
