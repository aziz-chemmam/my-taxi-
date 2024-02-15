<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if (Auth::check()) {
            $role = auth()->user()->role;
            if ($role === 'ADMIN') {
                return view('/admin.admin');
            } elseif ($role === 'passenger') {
                $routes = collect();
                return view('/passenger.home', ['routes' => $routes]);
            } elseif ($role === 'driver') {
                return view('/drivers.trajet');
            }
        }
    }
 }

