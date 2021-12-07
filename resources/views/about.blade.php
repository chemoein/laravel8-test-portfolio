@extends ('body.master_layout')

@section('content')

<section class="py-20 min-h-screen flex items-center">
  <div class="max-w-screen-lg mx-auto">
    <h2 class="text-6xl text-center mb-6">About</h2>
    <h3 class="text-4xl text-center mb-6 text-gray-200">Who is Moein daryabeigy?</h3>
    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui laborum fugit veniam ducimus! Enim placeat tempore numquam ea atque fugit ipsum minima, eligendi perferendis? Natus ab, porro perferendis aut veritatis quibusdam necessitatibus esse possimus itaque facilis tenetur, cumque eius commodi quas saepe ut enim odit nisi dolorum repellendus eveniet facere. Velit, nihil, vero quisquam consequatur commodi enim assumenda fugiat et autem id labore molestias hic? Porro amet rem minima esse dolor, illum nesciunt provident corrupti sapiente molestiae! Repellat voluptas eos aliquam, ad molestias at voluptates velit asperiores cupiditate atque iure. Nam ipsam reiciendis quod distinctio praesentium ut, aliquid quae doloremque.</p>
    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, cumque minima dignissimos laboriosam doloribus esse cum quos molestias laudantium dolorum officia sed expedita veritatis culpa?</p>
    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid enim porro similique! Excepturi, reiciendis. Sint blanditiis accusamus maxime excepturi enim repellendus molestiae nesciunt. Dolores mollitia rem odit commodi? Pariatur laborum id at esse distinctio nam rerum fugiat velit! Blanditiis cumque amet, quo obcaecati accusantium itaque iusto quis exercitationem reprehenderit fugiat.</p>

    <div class="text-center">
      <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center hover:bg-purple-500 transition py-2 px-4 rounded">Go Home</a>
    </div>
  </div>
</section>

@endsection