@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-4">
               <form action=" {{ route('post.update',$post->id) }}" enctype="multipart/form-data" method="post">
                   @csrf
                   @method('PUT')
                   

                   <div class="form-group row">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="caption" id="caption" 
                        value="{{ $post->caption }}">
                    </div>

                   <div class="form-group row">
                       <label for="description">Description</label>
                       <input class="form-control" type="text" name="description" id="description"
                           value="{{ $post->description }}">
                   </div>

                

                   <div class="form-group row">
                       <button type="submit" class="btn btn-primary">Edit</button>
                   </div>
               </form>
           </div>
           <div class="col-4"></div>
       </div>
   </div>
@endsection




