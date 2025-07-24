<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->guard('web')->user()->role != 'admin') {
            return redirect()->route('dashboard');
        }
        $usersCount = User::where('role', 'user')->count();
        $productsCount = Product::count();
        $adminsCount = User::where('role', 'admin')->count();
        return view('admin.dashboard')->with([
            'usersCount' => $usersCount,
            'productsCount' => $productsCount,
            'adminsCount' => $adminsCount,
            'title' => 'Dashboard Admin',
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
