@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Kelas Umum</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="container xl:max-w-screen-xl my-4 md:m-0 px-4 flex flex-col justify-center gap-2 md:gap-4 lg:gap-8">
      <p class="text-white font-bold"><a href="service" class="hover:underline">Layanan</a> > <a href="general-class"
          class="hover:underline">Kelas Umum</a>
      </p>
      @include('components.core.product-card', ['name' => 'Kelas Keuangan Umum'])
      @include('components.core.benefit-card')
      @include('components.core.excess-card')
      @include('components.core.testimony-card')
      @include('components.core.invitation')
    </div>
  </section>
@endsection
