<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partners = partner::all();
        return view("Admin.partner", compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.partnerCreate");
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
        $partner = new partner();
        $partner->name = $request->partner_name;
        // salva se for adcionado uma imagem
        if(isset($request->partner_image)){
            $partner->image =  $request->partner_image;
        }
        $partner->save();

        return redirect()->action([PartnerController::class, 'index']);
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
        $partner = partner::find($id);
        return view('Admin.partnerEdit',compact('partner'));
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
        $partner = partner::find($id);
        $partner->name = $request->partner_name;
        // salva se for adcionado uma imagem
        if(isset($request->partner_image)&& (strcmp($partner->image, $request->partner_image))){
            $partner->image =  $request->partner_image;
        }
        $partner->save();

        return redirect()->action([PartnerController::class, 'index']);
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
        partner::destroy($id);
        return redirect()->action([PartnerController::class, 'index']);


    }
}
