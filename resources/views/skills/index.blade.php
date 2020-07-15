@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <h1>Tags</h1>
    @if(count($skills) > 0)
    <table class="table">
      <thead>
        <tr>
          {{-- <th scope="col">ID</th> --}}
          <th scope="col">Name</th>
          <th scope="col">Number</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($skills as $skill)
          <tr>
            {{-- <th scope="row">{{ $tag->id }}</th> --}}
            {{-- <img src="{{$gallery_item->photo}}" /> --}}
            <th scope="row">{{ $skill->skill }}</th>
            <th scope="row">{{ $skill->num }}</th>
              <td>
                  <a href="{{ route('skill.edit', ['id' => $skill->id]) }}">
                      Edit
                  </a>
              </td>
              <td>
                
                  <a href="{{ route('skill.delete', ['id' => $skill->id]) }}">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach

      </tbody>
    </table>
    @else
    <h2 class="row justify-content-center">You have no Skills</h2>
    @endif
   </div>
 </div>
</div>
@endsection
