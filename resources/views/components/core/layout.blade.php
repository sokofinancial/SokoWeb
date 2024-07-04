<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">

  @vite('resources/css/app.css')

  <title>Home | Soko Financial</title>
</head>

<body class="font-poppins">
  @include('components.core.navbar')

  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

  <main class="flex flex-col items-center mt-20">
    {{-- {{$slot}} --}}
    @yield('content')
  </main>

  @include('components.core.footer')

  @vite('resources/js/app.js')

  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>

</html>
