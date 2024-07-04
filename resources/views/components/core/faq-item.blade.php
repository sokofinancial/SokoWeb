<div
  class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50 rounded-full">
  <button type="button" id="question{{ $number }}" data-state="closed"
    class="flex items-center justify-between w-full px-4 py-2 sm:py-3 sm:px-6">
    <span class="text-sm md:text-base flex font-semibold text-black text-left">{{ $question }}</span>
    <svg id="arrow{{ $number }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke="currentColor" class="w-6 h-6 text-gray-400">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
  </button>
</div>
<div id="answer{{ $number }}" class="hidden px-4 pb-4 sm:px-6 sm:pb-6">
  <p class="text-sm md:text-base text-white">{{ $answer }}</p>
</div>
