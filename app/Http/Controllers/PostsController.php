<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());
        //dump($request->title);

         $keyword = $request->keyword;

        //  if($keyword == null){
        //      $posts = Post::all();
        //  }else{
        //      $posts = Post::where('title', 'like', '%' . $keyword . '%')->get();
        //  }

        $query = Post::query();

        //タイトル検索
        if ($request->keyword) {
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        // $posts = $query->get();
        $posts = $query->paginate(5);

        // dd($posts);
        // dump($posts);
        // die;
        // var_dump($posts);

        //return view('posts.index', ['posts' => $posts, ]);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $post = new Post();

        return view('posts.create', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        \Session::flash('flash_message', '記事を更新しました。');
        return redirect()->route('posts.index');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required|max:15',
            'content' => 'required',
        ]);

        $post = Post::create($request->all());
        $post->save();
        \Session::flash('flash_message', '記事を追加しました。');
        return redirect()->route('posts.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        \Session::flash('flash_message', '記事を削除しました。');
        return redirect()->route('posts.index');
    }
}
