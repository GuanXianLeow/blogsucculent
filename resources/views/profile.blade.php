@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                    <br><br>
                        @if (empty($profile->image))

                        <img class="Rounded Corners" width="150" src="{{ url('/images/profile.png') }}">
                        @else

                        <img class="Rounded Corners" width="150" src="/storage/{{ $profile->image }}"> 
                        @endif
                        <br>
                        <br>
                    </div>
                    <div class="col-md-9">

                    <h3>{{ $user->name }}</h3>
                    
                    @if (empty($profile->description))

                    <div class="pt-3"><a href="/profile/edit">Add a description to your profile!</a></div>

                    @else

                    <div class="pt-3">{{ $profile->description }}</div>
                    <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>

                    @endif
                     <br> 
                    </div>
                    <div class="container" >
                    
                            @foreach($posts as $post)
                                <div class="col-mb-9">
                                    <a href="/post/{{$post->id}}">
                                        <img src="/storage/{{$post->image}}" class="w-100">
                                        <h2> {{$post->caption}}</h2>
                                     <p> {{$post->content}}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    
                </div>
                </div>
            </div>
        
             
             
        </div>
    </div>
</div>

             <img class="s1" src="{{ url('/images/s1.png') }}" alt="s1">
             <img class="s3" src="{{ url('/images/s3.png') }}" alt="s3">
             <img class="s2" src="{{ url('/images/s2.png') }}" alt="s2">
            <!-- <img class="big-rose" src="{{ url('/images/big-rose.png') }}" alt="big-rose">
             /!-->
        <script src="{{ mix('js/app.js') }}"></script>
        <script type="text/javascript"  src="{{ asset('js/profile.js') }}"></script>
@endsection



