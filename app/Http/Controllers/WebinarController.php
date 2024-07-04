<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinars = Webinar::all();

        return view('webinar.home', compact('webinars'), [
            'title' => 'Webinar'
        ])->with('i');
    }

    public function detail($slug)
    {
        $webinar = Webinar::where("slug", $slug)->first();

        return view("webinar.detail", compact("webinar"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("webinar.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "start_at" => "required",
            "end_at" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $webinar = new Webinar();
        $webinar->title = $request->title;
        $webinar->description = $request->description;
        $webinar->start_at = $request->start_at;
        $webinar->slug = Str::slug($request->title);
        $webinar->end_at = $request->end_at;
        $webinar->created_by = auth()->user()->id;
        $webinar->image = $request->file("image")->store("webinar");
        $webinar->save();

        return redirect()->route("webinar.index")->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Webinar $webinar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $slug)
    {
        // dd($request);
        $request->validate([
            "title" => "required",
            "description" => "required",
            "start_at" => "required",
            "end_at" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        if ($request->hasFile('image') && $request->image != '') {
            $webinar = Webinar::where("slug", $slug)->first();
            $file_path_img = public_path() . '\storage\\' . $webinar->image;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }

            $output = DB::table('webinars')
                ->where('slug', $slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'start_at' => $request->start_at,
                    'end_at' => $request->end_at,
                    'slug' => Str::slug($request->title),
                    'created_by' => auth()->user()->id,
                    'image' => $request->file("image")->store("webinar")
                ]);
        } else {
            $output = DB::table('webinars')
                ->where('slug', $slug)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'start_at' => $request->start_at,
                    'end_at' => $request->end_at,
                    'slug' => Str::slug($request->title),
                    'created_by' => auth()->user()->id,
                    'image' => $request->file("image")->store("webinar")
                ]);
        }

        return redirect()->route("webinar.index")->with('message', 'Data Berhasil DiPerbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webinar $webinar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $webinar = Webinar::where("slug", $slug)->first();

        if ($webinar->image != null) {
            $file_path_img = public_path() . '\storage\\' . $webinar->image;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }
        }
        $webinar->delete();

        return redirect()->route("webinar.index")->with('message', 'Data Berhasil Dihapus');
    }
}
