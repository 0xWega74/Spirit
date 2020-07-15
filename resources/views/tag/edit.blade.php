@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                    <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h3>Edit {{ $tag->tag_name }}</h3>
                <div class="form-group">
                <input name="tag_name" type="text" class="form-control" value="{{ $tag->tag_name }}">
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection
