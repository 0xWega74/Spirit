@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
          {{-- enctype="multipart/form-data" --}}

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                      <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Website Setting</h1>
                <div class="form-group">
                  <label for="blog_name">Name</label>
                <input name="blog_name" type="text" class="form-control" id="title" placeholder="Name" value="">
                </div>
                <div class="form-group">
                  <label for="phone_number">Phone</label>
                  <input name="phone_number" type="text" class="form-control" id="title" placeholder="Phone" value="">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input name="email" type="text" class="form-control" id="title" placeholder="Email" value="">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input name="address" type="text" class="form-control" id="title" placeholder="Address" value="">
                </div>
                <div class="form-group">
                  <label for="logo">Upload Logo</label>
                  <input name="logo" type="file" class="form-control-file" id="photo">
                </div>
                <div class="form-group">
                  <label for="home_photo">Upload Home Photo</label>
                  <input name="home_photo" type="file" class="form-control-file" id="photo">
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
              </form>
        </div>
    </div>
</div>
@endsection
