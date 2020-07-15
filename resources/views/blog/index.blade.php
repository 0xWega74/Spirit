@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <h1>Blogs</h1>
    @if(count($blogs) > 0)
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($blogs as $blog)
          <tr>
            <th scope="row">{{ $blog->title }}</th>
            {{-- <th scope="row">{{ $gallery_item->title }}</th> --}}
              <td>
                  <a href="{{ route('blog.edit', ['id' => $blog->id]) }}">
                      Edit
                  </a>
              </td>
              <td>
                  <a href="{{ route('blog.delete', ['id' => $blog->id]) }}">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach

      </tbody>
    </table>
    @else
    <h2 class="row justify-content-center">You have no blogs</h2>
    @endif
   </div>
 </div>
</div>
@endsection
