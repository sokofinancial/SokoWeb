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

    <div class="my-10 md:my-20">
      <div
        class="container xl:max-w-screen-xl my-4 md:m-0 px-4 flex flex-col md:flex-row justify-center gap-4 md:gap-8 lg:gap-16">
        <section class="flex flex-col sm:flex-row sm:flex-wrap justify-center items-center md:w-2/3">
          <div class="grid sm:grid-cols-2 gap-4 lg:gap-x-8">
            @include('components.core.blog-card')
          </div>
          <div class="flex justify-center items-center mt-8">
            @include('components.core.pagination')
          </div>
        </section>
        <section class="my-10 md:my-0 md:w-1/3">
          <div class="mb-6 md:mb-8">
            <span class="text-2xl font-extrabold block md:text-3xl text-center md:text-left text-white">Recent Post</span>
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
