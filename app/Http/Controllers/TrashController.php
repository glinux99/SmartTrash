<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Trash;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trashes = Trash::all();

        return view('dashboard.trashes', ['trashes' => $trashes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trashes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['title'] = "Création d'une poubelle et de son propriétaire";
        $trash = new Trash;
        $request['champs'] = count($trash->getFillable());
        $data = $request->all();
        $request['actions'] = json_encode($data);
        Activity::create(['title' => $request['title'], 'actions' => $request['actions'], 'user_id' => $request['user_id']]);
        $trash = Trash::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function show(Trash $trash)
    {
        return view('dashboard.trash', ['trash' => $trash]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function edit(Trash $trash)
    {
        return view('dashboard.trash', ['trash' => $trash]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trash)
    {
        $trash = Trash::find($trash);
        $request['user_id'] = Auth::user()->id;
        $request['title'] = "Mis 0 jour d'une poubelle " . $trash->ip;

        $request['champs'] = count($trash->getFillable());
        $data = $request->all();
        $request['actions'] = json_encode($data);
        Activity::create(['title' => $request['title'], 'actions' => $request['actions'], 'user_id' => $request['user_id']]);

        $trash->update($request->all());
        return redirect()->route('trashes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trash  $trash
     * @return \Illuminate\Http\Response
     */
    public function destroy($trash)
    {
        Trash::find($trash)->delete();

        return redirect()->route('trashes.index')->with('success', 'Trash deleted successfully!');
    }
}
