<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();

        return view('partner.home', compact('partners'), [
            'title' => 'Partner'
        ])->with('i');
    }

    public function detail($slug)
    {
        $partner = Partner::where("slug", $slug)->first();

        return view("partner.detail", compact("partner"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("partner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "join_at" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->join_at = $request->join_at;
        $partner->slug = Str::slug($request->name);
        $partner->image = $request->file("image")->store("partner");
        $partner->save();

        return redirect()->route("partner.index")->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $slug)
    {
        $request->validate([
            "name" => "required",
            "join_at" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        if ($request->hasFile('image') && $request->image != '') {
            $partner = Partner::where("slug", $slug)->first();
            $file_path_img = public_path() . '\storage\\' . $partner->image;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }

            $output = DB::table('partner')
                ->where('slug', $slug)
                ->update([
                    'name' => $request->name,
                    'join_at' => $request->join_at,
                    'slug' => Str::slug($request->name),
                    'image' => $request->file("image")->store("partner")
                ]);
        } else {
            $output = DB::table('partner')
                ->where('slug', $slug)
                ->update([
                    'name' => $request->name,
                    'join_at' => $request->join_at,
                    'slug' => Str::slug($request->name),
                    'image' => $request->file("image")->store("partner")
                ]);
        }

        return redirect()->route("partner.index")->with('message', 'Data Berhasil DiPerbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $partner = Partner::where("slug", $slug)->first();

        if ($partner->image != null) {
            $file_path_img = public_path() . '\storage\\' . $partner->image;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }
        }

        $partner->delete();

        return redirect()->route("partner.index")->with('message', 'Data Berhasil Dihapus');
    }
}
