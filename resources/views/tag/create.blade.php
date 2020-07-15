@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('tag.store') }}" method="POST">

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                    <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Create Tag</h1>
                <div class="form-group">
                  <label for="tag_name">Add Tag</label>
                  <input name="tag_name" type="text" class="form-control" placeholder="Enter Tag Name">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
