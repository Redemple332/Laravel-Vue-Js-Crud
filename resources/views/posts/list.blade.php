<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<header class="text-gray-600 body-font">
  <div
    class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
  >
    <a
      class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
    >
      <img src="../assets/img/logo.png" alt="" class="w-8" />
      <span class="ml-3 text-xl">Tailwind-Elements</span>
    </a>
    <nav
      class="md:ml-auto flex flex-wrap items-center text-base justify-center"
    >
      <a class="mr-5 hover:text-gray-900">First Link</a>
      <a class="mr-5 hover:text-gray-900">Second Link</a>
      <a class="mr-5 hover:text-gray-900">Third Link</a>
      <a class="mr-5 hover:text-gray-900">Fourth Link</a>
    </nav>
  </div>
</header>
<div
  class="container w-full p-20 m-4 mx-auto my-16 text-center bg-white border-2 border-gray-300 border-dashed h-96 rounded-xl"
>
  <body> 
    <table data-toggle="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Content</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
              <tr>
              <td>{{ $post->title }}</td>
              <td>{{ $post->content }}</td>
                @auth 
                  <td>
                    <a href="{{ route('posts.edit', $post->id) }}">Update</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="delete">
                      @csrf
                      <button type="submit">Delete</button>
                    </form >
                  </td>
                @endauth
              </tr>
          @endforeach
      </tbody>
    </table>
  </body>
</div>


</html>