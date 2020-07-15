@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-8">
     <h1>Plans</h1>
    @if(count($prices) > 0)
    <table class="table">
      <thead>
        <tr>
          {{-- <th scope="col">ID</th> --}}
          <th scope="col">Status</th>
          <th scope="col">Price</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($prices as $price)
          <tr>

            <th scope="row">{{ $price->price_status }}</th>
            <th scope="row">{{ $price->price }}</th>
              <td>
                  <a href="{{ route('price.edit', ['id' => $price->id]) }}">
                      Edit
                  </a>
              </td>
              <td>
                
                  <a href="{{ route('price.delete', ['id' => $price->id]) }}">
                      Delete
                  </a>
              </td>
          </tr>
          @endforeach

      </tbody>
    </table>
    @else
    <h2 class="row justify-content-center">You have no plans</h2>
    @endif
   </div>
 </div>
</div>
@endsection
