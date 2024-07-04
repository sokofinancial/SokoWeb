@extends("layouts.app")

@section("content")
    <form class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex flex-col md:p-6 xl:p-8 dark:bg-gray-800" method="POST" action="{{route('blog.update', $blogs->id)}}" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="w-full flex justify-center">
            <img id="webinar-image" src="" class="h-44 rounded-lg" alt="">
        </div>

        <h3 class=" mt-5 flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Create Blog</h3>
        <div class="w-full flex flex-col gap-4">
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Blog</label>
                <input name="image" type="file" id="image" class="  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('image')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Blog</label>
                <input name="title" type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Webinar 1" value="{{$blogs->title}}" required />
            </div>
            <div>
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                <input name="slug" type="text" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Webinar ini...." value="{{$blogs->slug}}" required />
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Webinar ini...." value="{{$blogs->description}}" required />
            </div>
            <div class="flex w-full gap-4">
                <div class="">
                    <label for="start_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start at</label>
                    <input name="start_at" type="datetime-local" id="start_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$blogs->start_at}}" required />
                </div>
                <div>
                    <label for="end_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End at</label>
                    <input name="end_at" type="datetime-local" id="end_at" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$blogs->end_at}}"  required />
                </div>
            </div>
            <div class="flex w-full justify-end">
                <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    <script>
        const image = document.getElementById("image");
        const webinarImage = document.getElementById("webinar-image");

        image.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                webinarImage.src = this.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
@endsection
