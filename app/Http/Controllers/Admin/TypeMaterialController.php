<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\typeMaterial;
use Illuminate\Http\Request;

class TypeMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = typeMaterial::all();
        return view("Admin.typeMaterial", compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.typeMaterialCreate");
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
        $type = new typeMaterial();
        $type->name = $request->type_name;
        $type->color = $request->type_color;
        // salva se for adcionado uma imagem
        if(isset($request->type_image)){
            $type->image =  $request->type_image;
        }
        $type->save();

        return redirect()->action([TypeMaterialController::class, 'index']);

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
        $type = typeMaterial::find($id);
        return view('Admin.typeMaterialEdit',compact('type'));
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
        $type = typeMaterial::find($id);
        $type->name = $request->type_name;
        $type->color = $request->type_color;
        // salva se for adcionado uma imagem
        if(isset($request->type_image)&& (strcmp($type->image, $request->type_image))){
            $type->image =  $request->type_image;
        }
        $type->save();

        return redirect()->action([TypeMaterialController::class, 'index']);
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
        typeMaterial::destroy($id);
        return redirect()->action([TypeMaterialController::class, 'index']);
    }
}
