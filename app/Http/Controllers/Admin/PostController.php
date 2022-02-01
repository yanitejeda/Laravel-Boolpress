<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view("admin.posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        $tags = Tag::all();

        return view("admin.posts.create",
        ["categories"=> $categories,
         "tags"=>$tags
        ]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* dd($request->all()); */
        $request->validate([
            "title" => "required|min:3",
            "content" => "required",
        ]);

        $data = $request->all();
/* 

       /*  $post = Post::create([
            ...$data,
            "author_id" => Auth::user()->id
        ]); */
        
        
        $post = new Post($data);
        $post->author_id = Auth::id();

        if($request->file('coverImg')){

            $post->coverImg = Storage::put('posts',$data['coverImg']);
        }

        $post->save();
     /* return redirect()->with('completed','salvato correttamente');
       */  return redirect()->route("admin.posts.show", $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("admin.posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //$post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        
        return view('admin.posts.edit',[
            'post'=>$post,
            'categories'=>$categories,
            'tags'=>$tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /*  dump($request->all());
        return; */
        $post = Post::findOrFail($id);
        $data = $request->all();
        $oldCoverImg = $post->coverImg;
        $post->fill($data);

        Validator::make($data, [
            "title" => "unique:posts",
            "content" => "unique:posts",
        ])->validate();

        //ricevo il file img dall'utente
        if($request->file('coverImg')){
            //se ho già a database un'immagine prima di salvare quella nuova cancello la precedente
            if($oldCoverImg){
                Storage::delete($oldCoverImg);
            }
         //  $post->coverImg = Storage::put('posts',$data['coverImg']);
           $post->coverImg = $request->file('coverImg')->store('posts');
        } 
        
        //salvo tutto
       // $post->update($data);

       $post->save();
        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route("admin.posts.index")->with("msg", "Post rimosso correttamente");
    }
}
