

@extends('layouts.app')

@section('content')

<div class="container">

<div class="col-md-9">
<div class="card-body">


        <img src="/storage/{{ $post->image }}" class="w-50">
        </div>
        <div class="col-4">
       
            
            <h2> {{$post->caption}}</h2>
            <p> {{$post->content}}</p>

            <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            
            
           

            <br>  <br>

            <form action="{{ route ('post.destroy',['post' => $post->id] ) }}" method="post">
            @csrf
            @method ('Delete')

            <button type="submit" class="btn btn-primary">Delete</button>
             
 

        </div>
    </div>   
</div>
@endsection
