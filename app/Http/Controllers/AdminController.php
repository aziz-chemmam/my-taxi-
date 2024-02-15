<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user = User::all();
        return view('/admin.users',compact('user'));
    }

    public function logout()
    {
       return view('/auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin.admin');
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
    public function show(admin $admin)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
