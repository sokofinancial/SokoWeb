<div class="bg-primary-100 rounded-xl w-5/12 lg:w-56 relative">
  <img src="{{ asset('images/ellipse-1.svg') }}" alt="Ellipse Image"
    class="absolute right-0 top-1/2 transform -translate-y-1/2 h-3/4">
  <img src="{{ asset('images/ellipse-2.svg') }}" alt="Ellipse Image"
    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-11/12">

  <div class="p-3 flex flex-col items-center justify-between h-full gap-12 md:gap-20 relative z-10">
    <div class="flex flex-col items-center h-full w-full">
      <div class="w-2/3 h-2/3 flex justify-center">
        <img class="h-full w-fit" src="{{ asset($image) }}" alt="{{ $alt }}">
      </div>
      <span class="text-white font-bold text-center text-sm sm:text-base md:text-lg">{{ $title }}</span>
    </div>
    <a href="{{ $link }}">
      <button
        class="py-1 px-2 bg-white hover:bg-slate-100 duration-300 rounded-full text-[8px] sm:text-[10px] md:text-sm md:py-2 md:px-3 font-medium">Daftar
        Sekarang</button>
    </a>
  </div>
</div>
