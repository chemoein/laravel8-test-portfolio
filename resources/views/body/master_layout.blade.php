<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
  <script defer src="{{ asset('js/app.js') }}"></script>
  <title>Document</title>
</head>

<body class="bg-gray-700 text-white">
  <header class=" bg-gray-700">
    <div class="container mx-auto flex justify-between p-4">
      <h1 class="text-xl font-black"><a href="#">Moein Daryabeigy</a></h1>
      <nav class="-mx-2">
        <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Home</a>
        <a href="{{ route('about') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">About</a>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <div class="container mx-auto p-4">
      <p>&copy; Moein Daryabeigy | Laravel & TailwindCss</p>
    </div>
  </footer>
</body>

</html>