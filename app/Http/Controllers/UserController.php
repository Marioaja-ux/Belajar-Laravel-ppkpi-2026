<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $title = "Manajamen User";
        return view('user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah User baru";
        return view('user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // be dan dari fe
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create($validate);
        toast('User berhasil ditambahkan', 'success');
        return redirect()->to('user')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Ubah Data User";
        $edit = User::findOrFail($id);
        return view('user.edit', compact('title', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        if ($request->filled('password')) {
           $user->password = $validate['password'];
        }

        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->save();
        toast('User berhasil diubah', 'success');
        return redirect()->route('user.index')->with('success', 'User berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }
}
