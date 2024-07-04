@extends("layouts.kuesioner")
    @section("content")
    <div class="flex justify-center">
        <form class="max-w-screen-md w-full flex flex-col px-3 md:px-0 " method="post" action="{{route("kuesioner.post2")}}">
            @csrf
            <div class="justify-center flex w-full">
                <img src="{{asset('images/logo.png')}}" class="w-48 mt-2" alt="soko logo">
            </div>
            <div>
                <div class="mb-4 mt-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Masukkan Email Anda">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Masukkan Nama Anda">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                        Jenis Kelamin
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="gender_male" name="gender" value="male">
                            <label class="text-gray-700" for="gender_male">
                                Pria
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="gender_female" name="gender" value="female">
                            <label class="text-gray-700" for="gender_female">
                                Wanita
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Domisili
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" name="address" type="text" placeholder="Masukkan Domisili Anda">
                </div>
                <div class="mb-4 mb-5">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                        Status Saat Ini
                    </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status" id="status">
                        <option value="">Pilih Status</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="bekerja">Bekerja</option>
                    </select>
                </div> <br>
                <center class="block my-5">
                    <p class="text-lg">Dalam merencanakan strategi investasi, hal mendasar yang perlu diketahui adalah toleransi risiko Anda. 
                        Pilihlah jawaban yang paling menggambarkan diri Anda, tidak ada jawaban "benar" atau "salah".</p>  
                </center>
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question1">
                        1. Secara umum, bagaimana sahabat Anda menggambarkan Anda sebagai seseorang pengambil risiko?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="risk_a" name="question1" value="4">
                            <label class="text-gray-700" for="risk_a">
                                Penjudi sejati
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="risk_b" name="question1" value="3">
                            <label class="text-gray-700" for="risk_b">
                                Bersedia mengambil risiko setelah menganalisis dengan memadai
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="risk_c" name="question1" value="2">
                            <label class="text-gray-700" for="risk_c">
                                Berhati-hati
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="risk_d" name="question1" value="1">
                            <label class="text-gray-700" for="risk_d">
                                Menghindari risiko sepenuhnya
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question2">
                        2. Anda sedang mengikuti pertunjukan permainan di TV dan Anda dapat memilih salah satu dari pilihan berikut. Manakah yang Anda pilih?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="game_a" name="question2" value="1">
                            <label class="text-gray-700" for="game_a">
                                Uang tunai Rp1.000.000,00
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="game_b" name="question2" value="2">
                            <label class="text-gray-700" for="game_b">
                                Peluang 50% untuk memenangkan Rp5.000.000,00
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="game_c" name="question2" value="3">
                            <label class="text-gray-700" for="game_c">
                                Peluang 25% untuk memenangkan Rp10.000.000,00
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="game_d" name="question2" value="4">
                            <label class="text-gray-700" for="game_d">
                                Peluang 5% untuk memenangkan Rp100.000.000,00
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question3">
                        3. Anda baru saja berhasil mengumpulkan uang untuk liburan yang diidamkan. Tiga minggu sebelum pergi, Anda kehilangan pekerjaan, yang akan Anda lakukan adalah:
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="vacation_a" name="question3" value="1">
                            <label class="text-gray-700" for="vacation_a">
                                Membatalkan liburan
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="vacation_b" name="question3" value="2">
                            <label class="text-gray-700" for="vacation_b">
                                Merencanakan liburan yang jauh lebih sederhana
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="vacation_c" name="question3" value="3">
                            <label class="text-gray-700" for="vacation_c">
                                Tetap liburan sesuai dengan rencana awal karena Anda membutuhkan waktu untuk mencari kerja yang baru
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="vacation_d" name="question3" value="4">
                            <label class="text-gray-700" for="vacation_d">
                                Memperpanjang liburan karena ini mungkin kesempatan terakhir untuk merasakan liburan mewah
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question4">
                        4. Jika Anda tiba-tiba menerima Rp20.000.000,- untuk diinvestasikan, apa yang akan Anda lakukan?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="investment_a" name="question4" value="1">
                            <label class="text-gray-700" for="investment_a">
                                Menyimpan dana tersebut di rekening bank, pasar instrumen jangka pendek (pasar uang), atau deposito berjangka
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="investment_b" name="question4" value="2">
                            <label class="text-gray-700" for="investment_b">
                                Menginvestasikan dalam bentuk obligasi berkualitas tinggi atau reksa dana obligasi yang aman
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="investment_c" name="question4" value="3">
                            <label class="text-gray-700" for="investment_c">
                                Menginvestasikan di saham atau reksa dana saham
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question5">
                        5. Menurut pengalaman, seberapa nyaman Anda berinvestasi di saham atau reksa dana saham?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="comfort_a" name="question5" value="1">
                            <label class="text-gray-700" for="comfort_a">
                                Tidak nyaman sama sekali
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="comfort_b" name="question5" value="2">
                            <label class="text-gray-700" for="comfort_b">
                                Agak nyaman
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="comfort_c" name="question5" value="3">
                            <label class="text-gray-700" for="comfort_c">
                                Sangat nyaman
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question6">
                        6. Ketika Anda memikirkan kata "risiko", manakah dari kata-kata berikut yang pertama kali muncul di pikiran Anda?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="a" name="question6" value="1">
                            <label class="text-gray-700" for="a">
                                Kerugian
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="b" name="question6" value="2">
                            <label class="text-gray-700" for="b">
                                Ketidakpastian
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="c" name="question6" value="3">
                            <label class="text-gray-700" for="c">
                                Peluang
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="d" name="question6" value="4">
                            <label class="text-gray-700" for="d">
                                Tantangan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question7">
                        7. Beberapa ahli memprediksi harga aset seperti emas, permata, barang koleksi, dan real estat (aset fisik) akan meningkat nilainya; harga obligasi mungkin turun, tetapi para ahli cenderung setuju bahwa obligasi pemerintah relatif aman. Sebagian besar aset investasi Anda saat ini adalah obligasi pemerintah yang berbunga tinggi. Apa yang akan Anda lakukan?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="asset_a" name="question7" value="1">
                            <label class="text-gray-700" for="asset_a">
                                Menyimpan obligasi
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="asset_b" name="question7" value="2">
                            <label class="text-gray-700" for="asset_b">
                                Menjual obligasi, lalu menyimpan setengah dari hasil penjualan di rekening pasar uang, dan setengahnya lagi di aset fisik
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="asset_c" name="question7" value="3">
                            <label class="text-gray-700" for="asset_c">
                                Menjual obligasi lalu menyimpan seluruh hasil penjualan di aset fisik
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="asset_d" name="question7" value="4">
                            <label class="text-gray-700" for="asset_d">
                                Menjual obligasi, lalu menyimpan seluruh uang di aset fisik, dan meminjam dana tambahan untuk membeli lebih banyak aset fisik
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question8">
                        8. Berdasarkan opsi probabilitas mendapatkan keuntungan dan kerugian dari empat pilihan investasi di bawah ini, mana yang Anda pilih?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="option_a" name="question8" value="1">
                            <label class="text-gray-700" for="option_a">
                                Keuntungan Rp2.000.000,00 dalam skenario terbaik; keuntungan/kerugian Rp0 dalam skenario terburuk
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="option_b" name="question8" value="2">
                            <label class="text-gray-700" for="option_b">
                                Keuntungan Rp8.000.000,00 dalam skenario terbaik; kerugian Rp2.000.000,00 dalam skenario terburuk
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="option_c" name="question8" value="3">
                            <label class="text-gray-700" for="option_c">
                                Keuntungan Rp26.000.000,00 dalam skenario terbaik; kerugian Rp8.000.000,00 dalam skenario terburuk
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="option_d" name="question8" value="4">
                            <label class="text-gray-700" for="option_d">
                                Keuntungan Rp48.000.000,00 dalam skenario terbaik; kerugian Rp24.000.000,00 dalam skenario terburuk
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question9">
                        9. Selain dari apa yang Anda miliki, Anda telah diberi Rp1.000.000,00. Sekarang Anda diminta untuk memilih di antara:
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_9a" name="question9" value="1">
                            <label class="text-gray-700" for="decision_9a">
                                Keuntungan pasti sebesar Rp500.000,00
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_9b" name="question9" value="3">
                            <label class="text-gray-700" for="decision_9b">
                                Peluang 50% untuk keuntungan Rp1.000.000,00 dan peluang 50% untuk tidak mendapatkan apa-apa
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question10">
                        10. Selain dari apa yang Anda miliki, Anda telah diberi Rp2.000.000,00. Sekarang Anda diminta untuk memilih di antara:
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_10a" name="question10" value="1">
                            <label class="text-gray-700" for="decision_10a">
                                Kerugian pasti sebesar Rp500.000,00
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_10b" name="question10" value="3">
                            <label class="text-gray-700" for="decision_10b">
                                Peluang 50% untuk kehilangan Rp1.000.000,00 dan peluang 50% untuk tidak mengalami kerugian
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question11">
                        11. Anggaplah seorang kerabat memberikan warisan sebesar Rp100.000.000,00 dengan syarat di dalam wasiatnya bahwa Anda harus menginvestasikan SELURUH uang dalam SATU pilihan berikut ini. Mana yang akan Anda pilih?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_11a" name="question11" value="1">
                            <label class="text-gray-700" for="decision_11a">
                                Rekening tabungan atau reksa dana pasar uang
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_11b" name="question11" value="2">
                            <label class="text-gray-700" for="decision_11b">
                                Reksa dana campuran, yang alokasinya terdapat saham dan obligasi
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_11c" name="question11" value="3">
                            <label class="text-gray-700" for="decision_11c">
                                Portofolio dari 15 saham
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_11d" name="question11" value="4">
                            <label class="text-gray-700" for="decision_11d">
                                Komoditas seperti emas, perak, dan minyak
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question12">
                        12. Jika Anda harus menginvestasikan Rp20.000.000,00, manakah pilihan investasi berikut ini yang paling menarik bagi Anda?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="preference_a" name="question12" value="1">
                            <label class="text-gray-700" for="preference_a">
                                60% dalam investasi berisiko rendah, 30% dalam investasi berisiko sedang, 10% dalam investasi berisiko tinggi
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="preference_b" name="question12" value="2">
                            <label class="text-gray-700" for="preference_b">
                                30% dalam investasi berisiko rendah, 40% dalam investasi berisiko sedang, 30% dalam investasi berisiko tinggi
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="preference_c" name="question12" value="3">
                            <label class="text-gray-700" for="preference_c">
                                10% dalam investasi berisiko rendah, 40% dalam investasi berisiko sedang, 50% dalam investasi berisiko tinggi
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-base font-bold mb-2" for="question13">
                        13. Sahabat dan tetangga tepercaya Anda, seorang ahli geologi berpengalaman, mengumpulkan sekelompok investor untuk mendanai proyek eksplorasi penambangan emas. Proyek ini bisa mengembalikan investasi sebanyak 50 hingga 100 kali lipat jika berhasil. Namun, jika tambangnya tidak berhasil, seluruh investasi akan hangus. Sahabat Anda memperkirakan peluang kesuksesan hanya sebesar 20%. Jika Anda memiliki uang, berapa banyak yang akan Anda investasikan?
                    </label>
                    <div class="flex flex-col space-y-2 ml-4">
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_13a" name="question13" value="1">
                            <label class="text-gray-700" for="decision_13a">
                                Tidak ada
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_13b" name="question13" value="2">
                            <label class="text-gray-700" for="decision_13b">
                                Gaji selama satu bulan
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_13c" name="question13" value="3">
                            <label class="text-gray-700" for="decision_13c">
                                Gaji selama tiga bulan
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input required class="mr-2 leading-tight" type="radio" id="decision_13d" name="question13" value="4">
                            <label class="text-gray-700" for="decision_13d">
                                Gaji selama enam bulan
                            </label>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="mb-4 flex flex-row w-full gap-4">
                    <div class="flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Domisili
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" name="address" placeholder="Yogyakarta">
                    </div>
                    <div class="flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                            Gender
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="gender" id="gender">
                            <option value="male">Laki-Laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                </div> --}}
            </div>
            {{-- <p class="text-lg my-5">Dalam merencanakan strategi investasi, hal mendasar yang perlu diketahui adalah tolerasi risiko Anda. Pilihlah jawaban yang paling menggambarkan diri Anda, tidak ada jawaban "benar" atau "salah". </p>
            <div class="my-2 flex flex-col gap-y-6">
                @foreach($question as $key => $quest)
                    <div>
                        <div>
                            <h1 class="text-lg">{{($key+1). '. '. $quest->question}}</h1>
                        </div>
                        <div>
                            <div class="flex flex-col gap-2 my-2 ms-4">
                                @foreach($quest->answers as $key => $ans)
                                    <div class="flex align-middle items-center gap-2">
                                        <input required type="radio" id="{{'quest'.$quest->id.'jawaban'. $key}}" name="{{'quest'.$quest->id}}" value="{{$ans->id}}">
                                        <label for="{{'quest'.$quest->id.'jawaban'. $key}}">{{$ans->answer}}</label>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                @endforeach --}}
            <div class="flex w-full justify-end">
                <button type="submit" class=" w-32 inline-flex items-end rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    Submit
                </button>
            </div>
            </div>
            <footer class="my-7 flex justify-center">
                <p>© 2024 Soko Financial</p>
            </footer>
        </form>
    </div>
    @endsection
