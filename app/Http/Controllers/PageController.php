<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $blogs = Blog::when($request->filled('gsearch'), function ($query) use ($request) {
            $query->where('name', 'LIKE', '%' . $request->gsearch . '%')->orWhere('slug', 'LIKE', '%' . $request->gsearch . '%')->orWhere('image', 'LIKE', '%' . $request->gsearch . '%')->orWhere('title', 'LIKE', '%' . $request->gsearch . '%')->orWhere('', 'LIKE', '%' . $request->gsearch . '%')->orWhere('', 'LIKE', '%' . $request->gsearch . '%')->orWhere('', 'LIKE', '%' . $request->gsearch . '%')->orWhere('', 'LIKE', '%' . $request->gsearch . '%')->orWhere('', 'LIKE', '%' . $request->gsearch . '%');
        })->get();
        return view('index', ['blogs' => $blogs]);
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post()
    {
        return view('post-details');
    }

    public function dash()
    {
        return view('DashBoard.dashboard');
    }

    public function category()
    {
        return view('DashBoard.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->Category_name,
            'image' => $request->Category_image,
        ]);
    }
    public function post_index()
    {

        $posts = Post::latest()->get();
        return view('DashBoard.post.index', compact('posts'));
    }

    public function post_create()
    {
        return view('DashBoard.post.create');
    }

    public function post_store(Request $request)
    {
    //     public function about_store(Request $request)
    // {
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image')->store('about', 'public');
    //         // dd($image);
    //     }
    //     About::create([
    //         'image' => $image,
    //         'description' => $request->description,
    //     ]);
    //     return redirect()->route('about_index');
    // }

        Post::create([
            'title' => $request->title,
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('post_index');
    }

    public function post_edit(Post $post)
    {
        return view('DashBoard.post.edit', compact('post'));
    }

    public function post_update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'heading' => $request->heading,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('post_index');
    }

    public function post_delete() {}

    public function about_index()
    {

        $abouts = About::latest()->get();
        return view('DashBoard.about.index', compact('abouts'));
    }
    public function post_about()
    {
        return view('Dashboard.about.about');
    }

    public function about_store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('about', 'public');
            // dd($image);
        }
        About::create([
            'image' => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('about_index');
    }

    public function aboutEdit($id)
    {
        $about = About::findorfail($id);
        return view('DashBoard.about.edit', compact('about'));
    }

    public function about_update(Request $request, About $about)
    {
        $about->update([
            'image' => $request->image,
            'description' => $request->description,
        ]);
        return redirect()->route('about_index');
    }
    public function about_delete(About $about)
    {

        $about->delete();
        return redirect()->route('about_index');
    }
}
