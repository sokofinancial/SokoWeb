<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::all();

        return view("testimoni.home", compact("testimonis"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("testimoni.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "testimoni" => "required",
            "kelas" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $testimoni = new Testimoni();
        $testimoni->name = $request->name;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->kelas = $request->kelas;
        $testimoni->image = $request->file("image")->store("testimoni");
        $testimoni->save();

        return redirect()->route("testimoni.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimoni = Testimoni::where("id", $id)->first();

        return view("testimoni.detail", compact("testimoni"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required",
            "testimoni" => "required",
            "kelas" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        $testimoni = Testimoni::find($id);
        $testimoni->name = $request->name;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->kelas = $request->kelas;
        $testimoni->image = $request->file("image")->store("testimoni");
        $testimoni->save();

        return redirect()->route("testimoni.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();

        return redirect()->route("testimoni.index");
    }
}
