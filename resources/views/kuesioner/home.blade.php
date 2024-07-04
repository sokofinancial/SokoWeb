@extends("layouts.kuesioner")
    @section("content")
    <div class="flex justify-center">
        <form class="max-w-screen-md w-full flex flex-col px-3 md:px-0 " method="post" action="{{route("kuesioner.post")}}">
            @csrf
            <div class="justify-center flex w-full">
                <img src="{{asset('images/logo.png')}}" class="w-48 mt-2" alt="soko logo">
            </div>
            <div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="johndoe@gmail.com">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Sri Mulyani">
                </div>
                <div class="mb-4 flex flex-row w-full gap-4">
                    <div class="flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                            Usia
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="age" name="age" type="number" placeholder="18">
                    </div>
                    <div class="flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="occupation">
                            Pekerjaan
                        </label>
                        <input required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="occupation" name="occupation" type="text" placeholder="Mahasiswa">
                    </div>
                </div>
                <div class="mb-4 flex flex-row w-full gap-4">
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
                </div>
            </div>
            <p class="text-lg my-5">Dalam merencanakan strategi investasi, hal mendasar yang perlu diketahui adalah tolerasi risiko Anda. Pilihlah jawaban yang paling menggambarkan diri Anda, tidak ada jawaban "benar" atau "salah". </p>
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
                @endforeach
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
