@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('skill.store') }}" method="POST">

            {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <ul>
                    <li>{{ $error }}</li>
                    </ul>
                @endforeach

                @endif
                <h1>Add Skill</h1>
                <div class="form-group">
                  <label for="skill">Skill</label>
                  <input name="skill" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="num">Number</label>
                    <input name="num" type="text" class="form-control">
                  </div>

                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
