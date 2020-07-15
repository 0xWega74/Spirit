@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data">
          {{-- enctype="multipart/form-data" --}}

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                      <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Resume</h1>

                <div class="form-group">
                  <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="">
                </div>
                <div class="form-group">
                  <label for="place">Place</label>
                  <input name="place" type="text" class="form-control" id="place" value="">
                </div>
                <div class="form-group">
                  <label for="desc">Description</label>
                  <input name="desc" type="text" class="form-control" id="desc" value="">
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="status" value="Experience">
                  <label class="form-check-label" for="status">
                    Experience
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="price_status" value="Education">
                  <label class="form-check-label" for="status">           
                    Education
                  </label>
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
              </form>
        </div>
    </div>
</div>
@endsection
