<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // public function index()
    // {
    //     // $blogs = Blog::all();

    //     return view('blog.index', [
    //         'title' => 'blog'
    //     ])->with('i');
    // }

    public function index()
    {
        $blogs = Blog::all();

        return view("blog.index", compact("blogs"));
    }

    public function indexUser()
    {
        $blogs = Blog::all();

        return view("core.blogs", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.createBlog");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required",
            "description" => "required",
            "start_at" => "required",
            "end_at" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $imagePath = $image->move(public_path('file/blog'), $imageName);

        $imagePath = basename($imagePath);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->start_at = $request->start_at;
        $blog->end_at = $request->end_at;
        $blog->image = $imagePath;
        $blog->save();

        return redirect()->route("blog.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Testimoni::where("id", $id)->first();

        return view("blog.detailBlog", compact("blogs"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::where("id", $id)->first();

        return view("blog.updateBlog", compact("blogs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required",
            "slug" => "required",
            "description" => "required",
            "start_at" => "required",
            "end_at" => "required",
            "image" => "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
    
        // Temukan data blog berdasarkan ID
        $blog = Blog::findOrFail($id);
    
        // Kelola unggahan gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $imagePath = $image->move(public_path('file/blog'), $imageName);
            $imagePath = basename($imagePath);
    
            // Hapus gambar lama jika ada
            if ($blog->image) {
                $oldImagePath = public_path('file/blog/' . $blog->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Perbarui path gambar di database
            $blog->image = $imagePath;
        }
    
        // Perbarui entri database
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->start_at = $request->start_at;
        $blog->end_at = $request->end_at;
        $blog->save();
    
        // Redirect ke halaman index
        return redirect()->route("blog.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Blog::find($id);
        $testimoni->delete();

        return redirect()->route("blog.index");
    }
}
