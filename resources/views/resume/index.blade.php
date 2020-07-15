@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Resume</h1>
     @if(count($resume) > 0)
     <table class="table">
       <thead>
         <tr>
           <th scope="col">Title</th>
           <th scope="col">status</th>
           <th scope="col">Edit</th>
           <th scope="col">Delete</th>
         </tr>
       </thead>
       <tbody>
           @foreach ($resume as $resume_item)
           <tr>
             <th scope="row">{{ $resume_item->title }}</th>
             <th scope="row">{{ $resume_item->status }}</th>
               <td>
                   <a href="{{ route('resume.edit', ['id' => $resume_item->id]) }}">
                       Edit
                   </a>
               </td>
               <td>
                 
                   <a href="{{ route('resume.delete', ['id' => $resume_item->id]) }}">
                       Delete
                   </a>
               </td>
           </tr>
           @endforeach
 
       </tbody>
     </table>
     @else
     <h2 class="row justify-content-center">You have no Resume</h2>
     @endif
    </div>
  </div>
 </div>
@endsection
