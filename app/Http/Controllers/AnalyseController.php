<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Trash;
use App\Models\User;
use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poubelleCount = Trash::count();
        $users = User::all();
        $trashActive = Trash::count();
        $trashPleine = Trash::count();
        $trashOk = Trash::count();
        return view('dashboard.analyses', ['poubelleCount' => $poubelleCount, 'users' => $users, 'trashActive' => $trashActive, 'trashPleine' => $trashPleine, 'trashOk' => $trashOk]);
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
    public function show(Analyse $analyse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Analyse $analyse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Analyse $analyse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analyse $analyse)
    {
        //
    }
}
