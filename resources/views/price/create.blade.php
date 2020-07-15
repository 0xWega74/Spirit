@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('price.store') }}" method="POST" >
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
                  <input class="form-check-input" type="radio" name="price_status" id="price_status" value="Basic">
                  <label class="form-check-label" for="price_status">
                    Basic
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_status" id="price_status" value="Standard">
                  <label class="form-check-label" for="price_status">
                    Standard
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_status" id="price_status" value="Premium">
                  <label class="form-check-label" for="price_status">
                    Premium
                  </label>
                </div>


                <hr>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_icon" id="price_icon" value="fas fa-baby">
                  <label class="form-check-label" for="price_icon">
                    Baby
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_icon" id="price_icon" value="fas fa-child">
                  <label class="form-check-label" for="price_icon">
                    Child
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="price_icon" id="price_icon" value="fas fa-user-tie">
                  <label class="form-check-label" for="price_icon">
                    User Tie
                  </label>
                </div>

                <hr>



                <div class="form-group">
                  <label for="price">Price</label>
                  <input name="price" type="text" class="form-control" id="price" placeholder="price" value="">
                </div>
                <div class="form-group">
                  <label for="services">Services</label>
                  <textarea name="services" class="form-control" id="content" rows="3"></textarea>
                </div>

              
                <button class="btn btn-primary" type="submit">Save</button>
              </form>
        </div>
    </div>
</div>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor 4
  // instance, using default configuration.
  CKEDITOR.replace( 'content' );
</script>


@endsection
