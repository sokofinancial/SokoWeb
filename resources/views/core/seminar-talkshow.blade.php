@extends('components.core.layout')
@section('content')
  <section class="container xl:max-w-screen-xl m-4 md:m-0 md:py-4">
    <div class="px-4">
      <span class="mt-3 md:mt-6 lg:mt-8 text-2xl font-extrabold block md:text-3xl lg:text-4xl">Seminar & Talkshow</span>
    </div>
  </section>

  <section class="main-content bg-primary-100 w-full flex flex-col items-center">
    <svg class="w-full" viewBox="0 5 1280 127" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M944.64 126.209L1280 8.46808V0.871887H0V7.96167L944.64 126.209Z" fill="white" />
    </svg>

    <div class="container xl:max-w-screen-xl my-4 md:m-0 px-4 flex flex-col justify-center gap-2 md:gap-4 lg:gap-8">
      <p class="text-white font-bold"><a href="{{ env('APP_URL') }}/service" class="hover:underline">Layanan</a> > <a
          href="{{ env('APP_URL') }}/seminar-talkshow" class="hover:underline">Seminar & Talkshow</a>
      </p>
      <div class="mt-5 md:mt-10 mb-10 md:mb-20">
        <section class="flex flex-col gap-6">
          <p class="text-white font-semibold text-center">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Quidem debitis minima nam</p>
        </section>
        @include('components.core.search-bar')
        <div class="grid sm:grid-cols-2 gap-4 lg:gap-x-8 md:grid-cols-3 xl:grid-cols-4">
          @for ($i = 0; $i < 8; $i++)
            @include('components.core.seminar-talkshow-card')
          @endfor
        </div>
      </div>
    </div>
  </section>
@endsection
