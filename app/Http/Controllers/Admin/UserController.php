<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\route;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Carrega todos os usuarios na lista, exeto o que está conectado
        $users = User::where('login','!=', Auth::user()->login)->get();
        return view('Admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.userCreate');

    }
    /**
     * Validate data user from dataBase.
     *
     * @return json for Jquery
     */
    public function validateUser(Request $request)
    {
        $type = $request->type;

        if($type === "1"){
            // busca por email cadastrado no banco de dados
            $retorno = User::where('email', $request->user_email)->first();
            if($retorno != true){
                $resposta["sucesso"] = true;
                $resposta["mensagem"] = "E-mail validado com sucesso ";
            }else{
                $resposta["sucesso"] = false;
                $resposta["mensagem"] = "E-mail já cadastrado, tente outro!";
            }

        }elseif ($type === "2") {
            $retorno = User::where('login', $request->user_login)->first();
            if($retorno != true){
                $resposta["sucesso"] = true;
                $resposta["mensagem"] = "Login validado com sucesso";
            }else{
                $resposta["sucesso"] = false;
                $resposta["mensagem"] = "Login já cadastrado, tente outro!";
            }
        }else{
            $resposta["sucesso"] = false;
            $resposta["mensagem"] = "não foi possível realizar verificação!!";

        }
        echo json_encode($resposta);
        return ;
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
        $user = new User();
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->login = $request->user_login;
        $user->password = bcrypt("123456");
        $user->type_user = $request->type == null? '0': '1';
        $user->save();

        return redirect()->action([UserController::class, 'index']);

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
        $user = User::find($id);
        return view('Admin.userEdit', compact('user'));
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
        //Função só será implemntada quando finalizar as validações por emails///
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////Função só será implemntada quando finalizar as validações por emails///
    }
}
