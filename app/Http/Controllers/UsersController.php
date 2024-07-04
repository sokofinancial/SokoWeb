<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('users.home', compact('users'), [
            'title' => 'User'
        ])->with('i');
    }

    public function detail($id)
    {
        $users = User::where("id", $id)->first();

        return view("users.detail", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "alamat" => "required",
            "role" => "required",
            "gender" => "required",
            "avatar" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $User = new User();
        $User->name = $request->name;
        $User->password = bcrypt('password');
        $User->email = $request->email;
        $User->gender = $request->gender;
        $User->phone = $request->phone;
        $User->address = $request->alamat;
        $User->role = $request->role;
        $User->avatar = $request->file("avatar")->store("users");
        $User->save();


        return redirect()->route("users.index")->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        // dd($request, $id);
        $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "alamat" => "required",
            "role" => "required",
            "gender" => "required",
            "avatar" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        // dd($request, $id);
        if ($request->hasFile('avatar') && $request->avatar != '') {
            $User = User::where("id", $id)->first();
            $file_path_img = public_path() . '\storage\\' . $User->avatar;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }

            $output = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'address' => $request->alamat,
                    'role' => $request->role,
                    'avatar' => $request->file("avatar")->store("users")
                ]);
        } else {
            $output = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'address' => $request->alamat,
                    'role' => $request->role,
                    'avatar' => $request->file("avatar")->store("users")
                ]);
        }
        return redirect()->route("users.index")->with('message', 'Data Berhasil DiPerbarui');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $id)
    {
        // dd($id);
        $User = User::where("id", $id)->first();
        if ($User->avatar != null) {
            $file_path_img = public_path() . '\storage\\' . $User->avatar;
            if ($file_path_img != null) {
                unlink($file_path_img);
            }
        }
        $User->delete();

        return redirect()->route("users.index")->with('message', 'Data Berhasil Dihapus');
    }
}
