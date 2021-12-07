@extends ('body.master_layout')

@section('content')

<!-- Hero Box -->
<section class="relative min-h-screen flex items-center">
  <div class="container mx-auto text-center cursor-default">
    <h2 class="text-4xl sm:text-8xl">Learn to <span class="text-pink-500 hover:text-pink-600  transition">Code</span></h2>
    <h3 class="text-2xl sm:text-4xl">with Meoin Daryabeigy</h3>
  </div>

  <div class="absolute bottom-0 left-0 right-0 p-20">
    <div class="text-center">
      <p class="hover:text-gray-300 transition cursor-default">Scroll to learn more</p>
    </div>
  </div>
</section>

<!-- Introduction -->
<section class="p-20">
  <div class="max-w-screen-md mx-auto">
    <h3 class="text-4xl font-bold mb-6">Introduction</h3>
    <h4 class="text-xl mb-3 text-gray-200">Short description</h4>
    <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vero in rerum nisi nobis totam enim culpa illo quas id soluta sed repudiandae velit earum consequuntur repellat nesciunt ex, sunt, harum impedit commodi aliquid voluptatibus illum. Quidem nihil velit nobis atque expedita temporibus consequatur aut, fugit ipsam, ducimus tempora culpa?</p>
    <a href="{{ route('about') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more</a>
  </div>
</section>

<!-- what can you learn -->
<section class="py-20">
  <div class="max-w-screen-md mx-auto">
    <h3 class="text-4xl font-bold mb-6">What can you learn?</h3>
    <div class="flex flex-wrap -mx-2">

      <!-- 1 -->
      <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded">
          <h3 class="text-xl font-bold mb-3">Game Development</h3>
          <p class="text-gray-200 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat! Atque ullam vel repudiandae tenetur, voluptate numquam omnis tempore totam?</p>
          <a href="{{ url('https://youtube.com') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
        </div>
      </div>
      <!-- 2 -->
      <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded">
          <h3 class="text-xl font-bold mb-3">Art Development</h3>
          <p class="text-gray-200 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat! Atque ullam vel repudiandae tenetur, voluptate numquam omnis tempore totam?</p>
          <a href="{{ url('https://youtube.com') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
        </div>
      </div>

      <!-- 3 -->
      <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded">
          <h3 class="text-xl font-bold mb-3">Web Development</h3>
          <p class="text-gray-200 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat! Atque ullam vel repudiandae tenetur, voluptate numquam omnis tempore totam?</p>
          <a href="{{ url('https://youtube.com') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
        </div>
      </div>

      <!-- 4 -->
      <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded">
          <h3 class="text-xl font-bold mb-3">3D Development</h3>
          <p class="text-gray-200 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, placeat! Atque ullam vel repudiandae tenetur, voluptate numquam omnis tempore totam?</p>
          <a href="{{ url('https://youtube.com') }}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn now!</a>
        </div>
      </div>
    </div>
  </div>




  </div>
</section>

<!--  -->
<section class="py-20">
  <div class="max-w-screen-md mx-auto">
    <h3 class="text-4xl font-bold mb-6">Where to learn?</h3>
    <h3 class="text-4xl font-bold mb-6">Learn to code on Youtube With one of my channels!</h3>
    <div class="-mx-2 sm:flex gap-x-4">
      <a href="{{ route('about') }}" target="_blank" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Web Dev.</a>
      <a href="{{ route('about') }}" target="_blank" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Game Dev.</a>

    </div>

  </div>
</section>
@endsection