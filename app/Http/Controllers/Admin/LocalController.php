<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\local;
use App\Models\route;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locals = local::all();

        return view("Admin.local", compact('locals'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $routes = route::all(['id','name']);
        return view('Admin.localCreate', compact('routes'));
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
        $local = new local();
        $local->name = $request->local_name;
        $local->address = $request->local_address;
        $local->neighborhood = $request->local_neigh;
        $request->local_latitude != 0 ? $local->latitude = $request->local_latitude : null;
        $request->local_longitude != 0 ? $local->longitude = $request->local_longitude : null;
        $local->fk_routes = $request->route_id;

        $local->save();

        return redirect()->action([LocalController::class, 'index']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $routes = route::all(['id','name']);
        $local = local::find($id);
        return view('Admin.localEdit', compact('local','routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $local = local::find($id);
        $local->name = $request->local_name;
        $local->address = $request->local_address;
        $local->neighborhood = $request->local_neigh;
        $request->local_latitude != 0 ? $local->latitude = $request->local_latitude : null;
        $request->local_longitude != 0 ? $local->longitude = $request->local_longitude : null;
        $local->fk_routes = $request->route_id;

        $local->save();

        return redirect()->action([LocalController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $local = local::destroy($id);

        return redirect()->action([LocalController::class, 'index']);
    }
}
