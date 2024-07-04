{{-- @php
  use Illuminate\Support\Str;
  use Faker\Factory as Faker;
  use App\Helpers\CustomHelper;

  $faker = Faker::create();

  $data = [];

  for ($i = 0; $i < 8; $i++) {
      $title = $faker->sentence;
      $date = $faker->date('m/d/Y');
      $slug = Str::slug($title);
      $longText = $faker->paragraph;
      $excerpt = resolve(CustomHelper::class)->limitWords($longText, 15);
      $category = 'Inspirasi';
      $author = $faker->name;

      $data[] = [
          'title' => $title,
          'date' => $date,
          'slug' => $slug,
          'body' => $longText,
          'excerpt' => $excerpt,
          'category' => $category,
          'author' => $author,
      ];
  }
@endphp --}}

@foreach ($blogs as $item)
  <div class="mb-4 rounded-lg bg-white shadow-lg hover:bg-gray-100">
    <div class="relative">
      <img src="{{ asset('file/blog/' . $item->image) }}" class="w-full h-44 rounded-t-lg object-cover" alt="Photo">
      <div class="absolute inset-0 bg-black opacity-25"></div>
    </div>
    <div class="px-4 py-6">
      <h5 class="sm:text-sm font-bold mb-2"><a href="{{ url('/blog/' . $item['slug']) }}"
          class="hover:underline">{{ $item['title'] }}</a></h5>
      <p class="text-sm sm:text-xs text-gray-600 mb-4">{{ $item['excerpt'] }}</p>
      <div class="flex items-center justify-between mb-1">
        <p class="text-sm sm:text-xs text-gray-600"><a href="#" class="hover:underline">{{ $item['author'] }}</a>
        </p>
        <p class="text-sm sm:text-xs text-gray-600">{{ $item['date'] }}</p>
      </div>
      <div class="flex items-center justify-between">
        <p class="text-sm sm:text-xs text-gray-600">Kategori: <a href="#"
            class="hover:underline">{{ $item['category'] }}</a></p>
        <p class="text-sm sm:text-xs text-gray-600">2 min read</p>
      </div>
    </div>
  </div>
@endforeach
