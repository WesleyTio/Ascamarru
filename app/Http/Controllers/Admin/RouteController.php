<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $routes = route::all();
        return view("Admin.route", compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.routeCreate');
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
        $route = new route();
        $route->name = $request->route_name;
        $route->mon = $request->route_mon == 1 ? true : false;
        $route->tue = $request->route_tue == 1 ? true : false;
        $route->wed = $request->route_wed == 1 ? true : false;
        $route->thu = $request->route_thu == 1 ? true : false;
        $route->fri = $request->route_fri == 1 ? true : false;
        $route->sat = $request->route_sat == 1 ? true : false;

        $route->period = $request->route_period;
        $route->save();

        return redirect()->action([RouteController::class, 'index']);
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
        $route = route::find($id);
        return view('Admin.routeEdit', compact('route'));
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
        $route = route::find($id);
        $route->name = $request->route_name;
        $route->mon = $request->route_mon == 1 ? true : false;
        $route->tue = $request->route_tue == 1 ? true : false;
        $route->wed = $request->route_wed == 1 ? true : false;
        $route->thu = $request->route_thu == 1 ? true : false;
        $route->fri = $request->route_fri == 1 ? true : false;
        $route->sat = $request->route_sat == 1 ? true : false;

        $route->period = $request->route_period;
        $route->save();

        return redirect()->action([RouteController::class, 'index']);
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
        $route = route::destroy($id);

        return redirect()->action([RouteController::class, 'index']);

    }
}
