@props(['class' => ''])

<div id="{{ $id }}" class="my-5 relative overflow-hidden flex hover:[animation-play-state:running]">
  {{-- for each div max is 6 img --}}
  <div id="logos-slide"
    {{ $attributes->merge([
        'class' =>
            'flex animate-[slide_12s_infinite_linear]
            hover:[animation-play-state:running] ' . $class,
    ]) }}>
    @foreach ($data as $d)
      <div class="w-32 h-24 md:w-40 md:h-32 mx-4 flex items-center justify-center">
        <img src="{{ asset('images/' . $d['url']) }}" class="object-center w-fit h-fit mx" alt="Photo">
      </div>
    @endforeach
  </div>
  <script>
    var copy = document.querySelector("#logos-slide").cloneNode(true);
    document.querySelector("#{{ $id }}").appendChild(copy);

    var trimmedClass = "{{ $class }}".trim();
    if (trimmedClass) {
      copy.classList.add("ml-[2px]", trimmedClass);
    } else {
      copy.classList.add("ml-[2px]", );
    }
  </script>
</div>
