@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <h1>Gallery</h1>
    @if(count($gallery) > 0)
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Photo</th>
          <th scope="col">Name</th>
          <th scope="col">Tag</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($gallery as $gallery_item)
          <tr>
            <th scope="row">
              <img src="{{ $gallery_item->photo }}" alt="{{ $gallery_item->title }}" height="100px" >
            </th>
            {{-- <img src="{{$gallery_item->photo}}" /> --}}
            <th scope="row">{{ $gallery_item->title }}</th>
            <td scope="row">{{ $gallery_item->tag_name }}</td>
              <td>
                  <a href="{{ route('gallery.edit', ['id' => $gallery_item->id]) }}">
                      Edit
                  </a>
              </td>
              <td>
                
                  <a href="{{ route('gallery.delete', ['id' => $gallery_item->id]) }}">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach

      </tbody>
    </table>
    @else
    <h2 class="row justify-content-center">You have no galleries</h2>
    @endif
   </div>
 </div>
</div>
@endsection
