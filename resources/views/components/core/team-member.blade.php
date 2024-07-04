<div class="pt-[18px] pr-[18px] md:pt-6 md:pr-6 relative">
  <img src="{{ asset('images/round.svg') }}" alt="Round Image" class="absolute top-0 right-0 w-1/2 z-0">
  <div class="bg-slate-300 rounded-xl w-52 md:w-64 h-full shadow-xl relative z-10">
    <div class="p-3 flex flex-col items-center h-full w-full">
      <img class="h-full w-11/12 object-cover rounded-lg shadow-lg mb-3" src="{{ asset($image) }}"
        alt="{{ $name }}">
      <div class="flex flex-col justify-center h-1/4">
        <p class="text-sm md:text-base font-bold text-center">{{ $name }}</p>
        <p class="text-xs md:text-sm font-medium text-center">{{ $position }}</p>
      </div>
    </div>
  </div>
</div>
