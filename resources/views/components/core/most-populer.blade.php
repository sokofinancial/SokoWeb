@for ($i = 0; $i < 5; $i++)
  <div class="flex gap-4 mb-2">
    <img src="{{ asset('images/money.svg') }}" alt="Money Icon">
    <div class="flex flex-col">
      <span class="text-white text-sm font-bold"><a
          href="{{ url('/blog/' . 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-asperiores-enim') }}"
          class="hover:underline">Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Asperiores, enim.</a></span>
      <span class="text-white text-xs">04/06/2023</span>
    </div>
  </div>
@endfor
