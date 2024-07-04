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

    <div class="my-10 md:my-20">
      <div class="container xl:max-w-screen-xl my-4 md:m-0 px-4 flex flex-col justify-center gap-2 md:gap-4 lg:gap-8">
        <div class="h-[16rem] md:h-[28rem] relative">
          <img src="{{ asset('images/photo-1.jpg') }}"
            class="absolute inset-0 z-10 w-full h-full object-contain rounded-3xl" alt="Photo">
          <img src="{{ asset('images/photo-1.jpg') }}" class="w-full h-full object-cover rounded-3xl blur-md"
            alt="Photo">
        </div>
        <div class="mt-6 md:mt-10 grid grid-cols-1 md:grid-cols-3 md:grid-flow-row-dense gap-x-6">
          <div class="md:col-span-2">
            <div class="flex flex-col gap-2">
              <a href="{{ env('APP_URL') }}/seminar-talkshow">
                <p class="px-2 w-fit border border-whitte rounded-full text-white">Webinar & Talkshow</p>
              </a>
              <span class="text-white text-2xl font-bold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dolorum.
              </span>
              <p class="text-justify md:text-left text-white text-sm md:text-base">Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Beatae
                necessitatibus
                eum exercitationem
                vitae
                fugiat nulla, est quasi tempore mollitia voluptatum harum? Facilis quam quo adipisci ex beatae
                distinctio
                pariatur magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ex nulla
                voluptas
                voluptatem illum, dicta molestias. Tempore nostrum laborum deserunt rem dicta hic, temporibus
                suscipit
                recusandae, necessitatibus, architecto ut debitis?</p>
            </div>
          </div>
          <div class="md:col-span-3">
            <div class="my-4">
              <span class="text-xl text-white font-semibold">
                Date and Time
              </span>
              <div class="flex pt-2">
                <svg class="mr-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="white"
                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                </svg>
                <p class="text-white text-sm md:text-base">Sabtu, 27 Januari 2024</p>
              </div>
              <div class="flex pt-2">
                <svg class="mr-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="white"
                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
                <p class="text-white text-sm md:text-base">10.00 WIB - Selesai</p>
              </div>
            </div>
            <div class="my-4">
              <span class="text-xl text-white font-semibold">
                Location
              </span>
              <div class="flex pt-2">
                <svg class="mr-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                  <path fill="white"
                    d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z" />
                </svg>
                <p class="text-white text-sm md:text-base">Zoom Meeting</p>
              </div>
            </div>
            <div class="my-4">
              <span class="text-xl text-white font-semibold">
                Narasumber
              </span>
              <div class="flex flex-col md:flex-row justify-center items-center text-center md:text-left md:gap-x-8">
                <img src="{{ asset('images/photo-3.jpeg') }}" class="w-16 h-w-16 object-cover rounded-full"
                  alt="Photo">
                <div class="flex flex-col justify-center">
                  <span class="md:text-lg text-white font-semibold">Debora Aprianita, SE, CFP, AWP</span>
                  <span class="text-sm md:text-base text-white font-semibold">Founder & CO</span>
                  <p class="text-white text-sm md:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                    enim temporibus sit
                    quo, ut itaque
                    officiis in cupiditate quasi voluptate eaque at beatae tempore distinctio vel saepe
                    quisquam.
                    Temporibus, impedit!</p>
                </div>
              </div>
            </div>
            <div class="my-4">
              <span class="text-xl text-white font-semibold">
                Benefit
              </span>
              <div class="flex pt-2">
                <svg class="mr-4 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="white"
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                </svg>
                <p class="text-white text-sm md:text-base">Gopay/OVO 4 orang total 200k</p>
              </div>
              <div class="flex pt-2">
                <svg class="mr-4 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="white"
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                </svg>
                <p class="text-white text-sm md:text-base">Gopay/OVO 4 orang total 200k</p>
              </div>
              <div class="flex pt-2">
                <svg class="mr-4 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="white"
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                </svg>
                <p class="text-white text-sm md:text-base">Gopay/OVO 4 orang total 200k</p>
              </div>
            </div>
          </div>
          <div class="my-4 md:my-0 self-center bg-transparent">
            <div class="flex flex-col justify-center items-center border border-white rounded-lg py-6">
              <span class="pb-2 text-white font-semibold text-xl">Free</span>
              @include('components.core.link', [
                  'class' => 'py-2',
                  'name' => 'Daftar Sekarang',
                  'url' => '#',
              ])
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
@endsection
