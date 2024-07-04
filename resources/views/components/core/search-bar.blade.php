<form class="my-6">
    <div class="flex border border-black rounded-lg bg-white focus-within:shadow-lg">
        <input class="py-2.5 appearance-none bg-white border-none w-full rounded-lg focus:ring-0" id="search"
            type="text" placeholder="Search">
        <button class="bg-white hover:text-white py-2 px-4 rounded-lg hover:border-transparent" type="button">
            <svg class="h-4 w-4" fill="313D44" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
                <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>
</form>

{{-- <div class="my-6 relative w-full text-gray-600 focus-within:shadow-lg">
    <input id="search-input" type="search" name="serch" placeholder="Cari Event"
        class="bg-white h-10 w-full rounded-lg text-base outline-none focus:ring-primary-100 focus:border-primary-100">
    <button id="search-button" type="submit" class="absolute right-0 top-0 mt-3 mr-4">
        <svg class="h-4 w-4" fill="313D44" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
        </svg>
    </button>
</div>

<script>
    const searchInput = document.getElementById('search-input');
    const searchButton = document.getElementById('search-button');

    searchInput.addEventListener('input', function() {
        if (searchInput.value.trim() !== '') {
            searchButton.style.display = 'none';
        } else {
            searchButton.style.display = 'block';
        }
    });
</script> --}}