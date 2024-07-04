@props(['class' => ''])

<button type="submit"
  {{ $attributes->merge(['class' => 'py-2 px-6 bg-white hover:bg-slate-100 duration-300 rounded-lg font-semibold text-xs md:text-base md:px-8 text-black shadow-lg' . $class]) }}>
  {{ $name }}
</button>
