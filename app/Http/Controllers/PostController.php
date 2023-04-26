<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Traits\uploadFileTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use uploadFileTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index' , compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $this->uploadPostImage($request , 'posts'),
            'date_written' => '2023-03-28 11:50:00',
            'user_id' => Auth::user()->id,
            'category_id' => 1

        ]);

        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $blog
     * @return Factory|View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $imagePath = Storage::url($post->image);
        return view('blog.post' , compact(['post' , 'imagePath']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $blog
     * @return Factory|View
     */
    public function edit(Post $post)
    {
        return view('blog.edit' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $blog
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $this->uploadPostImage($request , 'posts'),
        ]);
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $blog
     * @return RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
