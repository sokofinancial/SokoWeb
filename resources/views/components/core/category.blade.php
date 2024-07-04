@for ($i = 0; $i < 4; $i++)
  <div class="flex gap-4 mb-2">
    <img src="{{ asset('images/money.svg') }}" alt="Money Icon">
    <div class="flex flex-col">
      <span class="text-white text-sm font-bold"><a href="#" class="hover:underline">Lorem.</a></span>
    </div>
  </div>
@endfor
