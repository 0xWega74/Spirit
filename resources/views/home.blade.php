@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h4>Messages</h4>
                       @if(count($message) > 0)
                       <table class="table">
                         <thead>
                           <tr>
                             {{-- <th scope="col">ID</th> --}}
                             <th scope="col">Name</th>
                             <th scope="col">Email</th>
                             <th scope="col">Message</th>
                           </tr>
                         </thead>
                         <tbody>
                             @foreach ($message as $item)
                             <tr>
                               {{-- <th scope="row">{{ $tag->id }}</th> --}}
                               {{-- <img src="{{$gallery_item->photo}}" /> --}}
                               <th scope="row">{{ $item->name }}</th>
                                 <td>
                                    {{ $item->email }}
                                 </td>
                                 <td>
                                    {{ $item->message }}
                                 </td>
                             </tr>
                             @endforeach
                   
                         </tbody>
                       </table>
                       @else
                       <h6 class="text-center row justify-content-center">You have no Messages</h6>
                       @endif
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
