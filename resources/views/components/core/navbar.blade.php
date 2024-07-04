<nav class="bg-transparent absolute top-0 left-0 w-full flex justify-center items-center z-[9999]">
  <div class="container xl:max-w-screen-xl">
    <div class="flex items-center justify-between relative">
      <div class="px-4 h-20">
        <a href="/" class="h-full flex items-center">
          <img src="{{ asset('images/logo.png') }}" class="h-10 sm:h-12" alt="Soko Financial Logo" />
        </a>
      </div>

      <div class="flex items-center px-4 md:hidden">
        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 group">
          <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
      </div>

      <div
        class="px-4 hidden absolute shadow-lg rounded-b-lg top-full w-full md:rounded-none md:shadow-none md:static md:block md:w-auto"
        id="navbar-menu">
        <ul
          class="flex-col rounded-b-lg bg-white md:bg-transparent md:flex-row flex md:space-x-4 lg:space-x-12 md:mt-0 text-base md:text-lg md:font-medium">
          <li>
            <a href="/kuesioner2"
              class="text-main-text font-bold hover:bg-[#f5f4f1] border-b border-[#f5f4f1] px-6
                    md:hover:bg-transparent md:border-0 block py-2 hover:text-primary-100 md:p-0 duration-300">Kuisioner</a>
          </li>
          <li>
            <a href="/about"
              class="text-main-text font-bold hover:bg-[#f5f4f1] border-b border-[#f5f4f1] px-6
                    md:hover:bg-transparent md:border-0 block py-2 hover:text-primary-100 md:p-0 duration-300">Tentang</a>
          </li>
          <li>
            <a href="/service"
              class="text-main-text font-bold hover:bg-[#f5f4f1] border-b border-[#f5f4f1] px-6
                    md:hover:bg-transparent md:border-0 block py-2 hover:text-primary-100 md:p-0 duration-300">Layanan</a>
          </li>
          <li>
            <a href="/contact"
              class="text-main-text font-bold hover:bg-[#f5f4f1] border-b border-[#f5f4f1] px-6
                    md:hover:bg-transparent md:border-0 block py-2 hover:text-primary-100 md:p-0 duration-300">
              Kontak</a>
          </li>
          <li>
            <a href="/blog"
              class="text-main-text font-bold hover:bg-[#f5f4f1] border-[#f5f4f1] px-6
                        md:hover:bg-transparent md:border-0 block py-2 hover:text-primary-100 md:p-0 duration-300 hover:rounded-b-lg">
              Blog</a>
          </li>

          {{-- <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="font-bold text-main-text hover:bg-[#f5f4f1] border-b border-[#f5f4f1] px-6 md:hover:bg-transparent md:border-0 py-2 md:hover:text-primary-100 md:p-0 duration-300 flex items-center justify-between w-full md:w-auto">Produk
              Kami
              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>
            <div id="dropdownNavbar"
              class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-72">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="/kelas-keuangan-siswa-mahasiswa"
                    class="font-bold hover:bg-[#f5f4f1] text-gray-700 block px-4 py-2">Kelas
                    Keuangan Siswa/Mahasiswa</a>
                </li>
                <li>
                  <a href="/kelas-keuangan-umum"
                    class="font-bold hover:bg-[#f5f4f1] text-gray-700 block px-4 py-2">Kelas
                    Keungan Umum</a>
                </li>
                <li>
                  <a href="/konsultasi-keuangan"
                    class="font-bold hover:bg-[#f5f4f1] text-gray-700 block px-4 py-2">Konsultasi
                    Keuangan</a>
                </li>
                <li>
                  <a href="/webinar" class="font-bold hover:bg-[#f5f4f1] text-gray-700 block px-4 py-2">Webinar</a>
                </li>
              </ul>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</nav>
