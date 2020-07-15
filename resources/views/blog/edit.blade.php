@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('blog.update', ['id'=>$blogs->id]) }}" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                    <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Edit {{$blogs->title}}</h1>
                <div class="form-group">
                  <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="title" value="{{ $blogs->title }}">
                </div>
                <div class="form-group">
                  <label for="tag_name">Tag</label>
                  <select name="tag_name" class="form-control">
                    <option disabled>Select Tag</option>                        
                    @foreach ($tags as $tag )
                  <option selected>{{ $tag->tag_name }}</option>                        
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="content">Example textarea</label>
                <textarea name="content" class="form-control" id="content" rows="3">{{ $blogs->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="photo">Example file input</label>
                    <input name="photo" type="file" class="form-control-file" id="photo">
                  </div>

                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
