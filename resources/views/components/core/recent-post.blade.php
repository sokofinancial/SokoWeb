<div class="grid grid-cols-2 gap-4">
  @for ($i = 0; $i < 5; $i++)
    <div class="mb-2 {{ $i == 0 ? 'col-span-2' : '' }}">
      <div class="mb-2 rounded-lg bg-white shadow-lg hover:bg-primary-100">
        <img src="{{ asset('images/photo-2.jpg') }}" class="w-full h-44 md:h-24 rounded-lg object-cover shadow-lg"
          alt="Photo">
      </div>
      <span class="text-white text-sm font-bold"><a
          href="{{ url('/blog/' . 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-asperiores-enim') }}"
          class="hover:underline">Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Asperiores, enim.</a></span>
    </div>
  @endfor
</div>
