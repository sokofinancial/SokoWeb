<div
  class="w-5/12 md:w-56 lg:w-64 h-72 md:h-80 pt-[15px] pr-[15px] sm:pt-5 sm:pr-5 md:pt-[18px] md:pr-[18px] lg:pt-5 lg:pr-5 relative">
  <img src="{{ asset('images/round.svg') }}" alt="Round Image" class="absolute top-0 right-0 w-1/2 z-0">
  <div class="bg-white rounded-xl w-full h-full relative">
    <img src="{{ asset('images/ellipse-1.svg') }}" alt="Ellipse Image"
      class="absolute right-0 top-1/2 transform -translate-y-1/2 h-3/4">
    <img src="{{ asset('images/ellipse-2.svg') }}" alt="Ellipse Image"
      class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-11/12">

    <div class="px-3 py-6 flex flex-col items-center justify-between h-full relative z-10">
      <div class="flex flex-col items-center h-full w-full">
        <div class="w-2/3 h-1/2 sm:w-1/2 sm:h-1/2 flex justify-center">
          <img class="object-contain" src="{{ asset($image) }}" alt="{{ $alt }}">
        </div>
        <span class="font-extrabold text-center sm:text-lg md:text-xl mt-2">{{ $title }}</span>
      </div>
      <a href="{{ $link }}">
        <button
          class="py-2 px-5 bg-white hover:bg-slate-100 duration-300 rounded-full font-semibold text-xs lg:text-base md:py-2 md:px-3 text-black shadow-lg">{{ $buttonText }}</button>
      </a>
    </div>
  </div>
</div>
