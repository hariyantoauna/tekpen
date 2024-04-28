<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UserActive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title_post = "User";
        if (request('active')) {
            $active = User::firstWhere('id', request('active'));
            $title_post = 'Penulis: ' . $active->name;
        }



        $data = [
            'title' => 'User',
            'users' => User::latest()->filter(request(['search', 'active']))->paginate(10),
        ];
        return view('dashboard.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data = [
            'title' => 'Edit User',
            'user' => $user

        ];

        return view('dashboard.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $cek = $request->validate([

            'cek' => 'required',

        ]);
        $data = $request->validate([


            'password' => 'required|string|min:8|confirmed',
        ]);

        $data['password'] = Hash::make($request->password);


        User::where('id', $user->id)->update($data);
        Alert::success('Hore!', 'User berhasil diperbahurui');
        return  redirect('/dashboard/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function setup(User $user)
    {
        $data = [
            'title' => 'Setup User',
            'user' => $user,
            'actives' => UserActive::all(),

        ];

        return view('dashboard.user.setup', $data);
    }
    public function set(Request $request, User $user)
    {
        $data['user_active'] = $request->active;
        User::where('id', $user->id)->update($data);
        Alert::success('Hore!', 'User berhasil diperbahurui');
        return  redirect('/dashboard/users');
    }
}
