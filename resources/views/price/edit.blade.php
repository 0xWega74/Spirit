@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">              
          

        <form action="{{ route('price.update', ['id' => $prices->id]) }}" method="POST" >
          {{-- enctype="multipart/form-data" --}}

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                      <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Plans</h1>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_status" id="price_status" value=" {{ $prices->price_status }}" checked>
                  <label class="form-check-label" for="price_status">
                    {{ $prices->price_status }}
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_icon" id="price_icon" value=" {{ $prices->price_icon }}" checked>
                  <label class="form-check-label" for="price_icon">
                    {{ $prices->price_icon }}
                  </label>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="price" value="{{ $prices->price }}">
                </div>
                <div class="form-group">
                  <label for="services">Services</label>
                <textarea name="services" class="form-control" id="services" rows="3">{{ $prices->services }}</textarea>
                </div>

              
                <button class="btn btn-primary" type="submit">Save</button>
              </form>
        </div>
    </div>
</div>
@endsection
