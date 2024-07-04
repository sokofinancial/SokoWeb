@extends("layouts.app")

@section("content")
    <form class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex flex-col md:p-6 xl:p-8 dark:bg-gray-800" method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="w-full flex justify-center">
            <img id="users-avatar" src="" class="h-44 rounded-lg" alt="">
        </div>

        <h3 class=" mt-5 flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Create users</h3>
        <div class="w-full flex flex-col gap-4">
            <div>
                <label for="avatar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Avatar users</label>
                <input name="avatar" type="file" id="avatar" class="  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('avatar')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name users</label>
                <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="users 1" required />
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="admin@gmail.com" required />
                @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Hanphone</label>
                <input name="phone" type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0822456" required />
                @error('phone')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input name="alamat" type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="yogyakarta" required />
                @error('alamat')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Gender</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
                @error('gender')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="Admin">Admin</option>
                    <option value="Intern">Intern</option>
                    <option value="Ceo">Ceo</option>
                </select>
                @error('role')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex w-full justify-end">
                <button type="submit" class="w-1/4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
    <script>
        const avatar = document.getElementById("avatar");
        const usersavatar = document.getElementById("users-avatar");

        avatar.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                usersavatar.src = this.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
@endsection
