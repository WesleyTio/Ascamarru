<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::all();
        return view('Admin.tip', compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.tipCreate");
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
        $tip = new Tip();
        $tip->title = $request->tip_title;
        $tip->description = $request->tip_desc;
        // salva se for adcionado uma imagem
        if(isset($request->tip_image)){
            $tip->image =  $request->tip_image;
        }
        $tip->save();

        return redirect()->action([TipController::class, 'index']);
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

        $tip = Tip::find($id);
        return view('Admin.tipEdit',compact('tip'));

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
        $tip = Tip::find($id);
        $tip->title = $request->tip_title;
        $tip->description = $request->tip_desc;
        // salva se for adcionado uma imagem
        if(isset($request->tip_image) && strcmp($tip->image, $request->tip_image)){
            $tip->image =  $request->tip_image;
        }
        $tip->save();
        return redirect()->action([TipController::class, 'index']);


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
        $tip = Tip::destroy($id);

        return redirect()->action([TipController::class, 'index']);
    }
}
