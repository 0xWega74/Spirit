@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
          {{-- enctype="multipart/form-data" --}}

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                      <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Profile</h1>

                <div class="form-group">
                  <label for="user_photo">Profile Picture</label>
                  <input name="user_photo" type="file" class="form-control-file" id="user_photo">
                </div>

                <div class="form-group">
                  <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="">
                </div>
                <div class="form-group">
                  <label for="location">Location</label>
                  <input name="location" type="text" class="form-control" id="location" placeholder="Location" value="">
                </div>
                <div class="form-group">
                  <label for="desc">Descrtion</label>
                  <input name="desc" type="text" class="form-control" id="desc" placeholder="Descrtion" value="">
                </div>
                <div class="form-group">
                  <label for="job_year">Job Year</label>
                  <input name="job_year" type="text" class="form-control" id="title" placeholder="Job Year" value="">
                </div>
                <div class="form-group">
                  <label for="proj">Projects</label>
                  <input name="proj" type="number" class="form-control" id="proj" placeholder="Projects" value="42">
                </div>
                <div style="display:inline-block" class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="avaliable" value="Avaliable" checked>
                  <label class="form-check-label" for="status">
                    Avaliable
                  </label>
                </div>
                <div style="display:inline-block" class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="not_avaliable" value="Not Avaliable">
                  <label class="form-check-label" for="status">
                    Not Avaliable
                  </label>
                </div>
                <hr>
                <div class="form-group">
                  <label for="cv">Upload CV</label>
                  <input name="cv" type="file" class="form-control-file" id="cv">
                </div>

                <button class="btn btn-primary" type="submit">Save</button>
              </form>
        </div>
    </div>
</div>
@endsection
