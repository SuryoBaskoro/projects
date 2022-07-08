<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.account', [
            'user' => User::find(auth()->id()),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profile.edit-profile', [
            'user' => User::find(auth()->id())
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'id' => '',
            'name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|min:11',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required'
        ]);
        $user = User::findOrFail($request->id);
        $user->update([
            // 'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        $user->alamat()->truncate();
        $user->alamat()->create([
            'alamat_u' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kode_pos' => $request->kode_pos
        ]);
        return redirect()->route('profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
