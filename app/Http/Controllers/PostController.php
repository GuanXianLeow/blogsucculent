<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => 'required',
            'content' => 'required',
            'postpic' => ['required', 'image'],
        ]);

        $user = Auth::user();
        $profile = new Post();
        $imagePath = request('postpic')->store('uploads', 'public');

        $profile->user_id = $user->id;
        $profile->caption = request('caption');
        $profile->content = request('content');
        $profile->image = $imagePath;
        $saved = $profile->save();

        if ($saved) {
            return redirect('/profile');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($postID){
        $post = Post::where('id', $postID)->first();
        $user = Auth::user();
        
        return view('post.show', [
            'post' => $post,
            'user' => $user
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
          
       
        
        return view('post.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'caption',
            'description' => 'content',
        ]);
        $post->update($request->all());
        

        return redirect()->route('profile')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        
        if ($post != null) {
        $post->delete();

        return redirect ('/profile');
      
        }
    }

}

 


