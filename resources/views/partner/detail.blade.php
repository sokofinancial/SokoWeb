@extends("layouts.app")

@section("content")
    <form class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex flex-col md:p-6 xl:p-8 dark:bg-gray-800" method="POST" action="{{route('partner.detail.edit', ['slug'=> $partner->slug])}}" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="w-full flex justify-center">
            <img id="partner-image" src="{{asset('storage/'. $partner->image)}}" class="h-44 rounded-lg" alt="">
        </div>
        <h3 class=" mt-5 flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{$partner->name}}</h3>
        <div class="w-full flex flex-col gap-4">
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Partner</label>
                <input name="image" type="file" id="image" class="  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Partner</label>
                <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$partner->name}}" value="{{$partner->name}}" required />
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex w-full gap-4">
                <div class="">
                    <label for="join_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Join at</label>
                    <input name="join_at" type="datetime-local" id="join_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$partner->join_at}}" value="{{$partner->join_at}}" required />
                    @error('join_at')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="flex w-full justify-end">
            <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    <script>
        const image = document.getElementById("image");
        const partnerImage = document.getElementById("partner-image");

        image.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                partnerImage.src = this.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
@endsection
