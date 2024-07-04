@extends("layouts.kuesioner")

@section("content")
    <div class="flex justify-center">
        <div class="max-w-screen-sm w-full flex flex-col px-3 md:px-0 ">
            <div class="justify-center flex w-full">
                <img src="{{asset('images/logo.png')}}" class="w-48 mt-2" alt="soko logo">
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex justify-between text-xl">
                    <p>Nama :</p>
                    <p>{{$respondent2->name}}</p>
                </div>
                <div class="flex justify-between text-xl">
                    <p>Email :</p>
                    <p>{{$respondent2->email}}</p>
                </div>

                <div class="flex justify-between text-xl">
                   <p>Hasil :</p>
                    <p>{{$category}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
