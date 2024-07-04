@extends("layouts.app")

@section("content")
    <form class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex flex-col md:p-6 xl:p-8 dark:bg-gray-800" method="POST" action="{{route('testimoni.detail.edit', ['id'=> $testimoni->id])}}" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="w-full flex justify-center">
            <img id="testimoni-image" src="{{asset('storage/'.$testimoni->image)}}" class="h-44 rounded-lg" alt="">
        </div>
        <h3 class=" mt-5 flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{$testimoni->name}}</h3>
        <div class="w-full flex flex-col gap-4">
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Webinar</label>
                <input name="image" type="file" id="image" class="  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama pemberi testimoni</label>
                <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$testimoni->name}}" value="{{$testimoni->name}}" required />
            </div>
            <div>
                <label for="testimoni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi testimoni</label>
                <input name="testimoni" type="text" id="testimoni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$testimoni->testimoni}}" value="{{$testimoni->testimoni}}" required />
            </div>
            <div>
                <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                <input name="kelas" type="text" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$testimoni->kelas}}" value="{{$testimoni->kelas}}" required />
            </div>
            <div class="flex w-full justify-end">
                <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    <script>
        const image = document.getElementById("image");
        const testimoniImage = document.getElementById("testimoni-image");

        image.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                testimoniImage.src = this.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
@endsection
