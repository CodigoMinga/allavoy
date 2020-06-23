<?php

namespace App\Http\Controllers;

use App\Friendshop;
use Illuminate\Http\Request;

class FriendshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Friendshop  $friendshop
     * @return \Illuminate\Http\Response
     */
    public function show(Friendshop $friendshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Friendshop  $friendshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Friendshop $friendshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Friendshop  $friendshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friendshop $friendshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Friendshop  $friendshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendshop $friendshop)
    {
        //
    }

    public function add()
    {
        return view('friendshops.add',);
    }
    public function addProcess(Request $request)
    {
        Friendshop::create($request->all());

        return redirect()->route('index')->with('Local creado exitosamente');
    }
    public function list()
    {
        return view('friendshops.list', [
            'friendshops' => Friendshop::latest()->paginate()

        ]);
    }
    public function details($friendshop_id)
    {
        return view('friendshops.details', [
            'friendshop' => Friendshop::find($friendshop_id)
        ]);
    }
}
