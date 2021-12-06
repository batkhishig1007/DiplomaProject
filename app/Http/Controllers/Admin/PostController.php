<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
use App\User;
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
        $category = Category::all();
        $user = User::all();
        $data = Post::with('category')->orderBy('id', 'desc')->paginate(25);
        return view('admin.posts.index',compact('data', 'category', 'user'))->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $category = Category::all();
        return view('admin.posts.create', compact('category', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // return back()->with('success', 'Data Your files has been successfully added');

        $input = $request->all();
   
        if ($image= $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }
        
        // return response()->json(['success' => 1]);
        $input['user_id'] = Auth::user()->id;
        Post::create($input);
     
        return redirect()->route('posts.index')
                        ->with('success','Пост амжилттай үүслээ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts = Post::where('id', $post->id)->with('category', 'user')->get();
        $post = count($posts) >0 ? $posts[0] : $post;
        $category = Category::all();
        return view('admin.posts.show',compact('post', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $user = User::all();
        $category = Category::all();
        return view('admin.posts.edit',compact('post', 'category', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postimage);
            $input['image'] = $postimage;
        }

        // return response()->json(['success' => 1]);
        
        $post->update($input);
    
        return redirect()->route('posts.index')
                        ->with('success','Пост амжилттай өөрчлөгдлөө');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // if (!is_null($post->image)) {
        //     Img::deleteImg($post->image);
        // }
        $post->delete();
        
        // $post = Post::find($id);
        // if (!is_null($post->image)) {
        //     Img::deleteImg($post->image);
        // }
        // $post->delete();
        
        return redirect()->route('posts.index')
                        ->with('success','Пост амжилттай устлаа');
    }
}