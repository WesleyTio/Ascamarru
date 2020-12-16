<?php

namespace Database\Seeders;

use App\Models\Tip;
use Illuminate\Database\Seeder;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dados =[
            'title' =>"Dica 1",
            'description' =>"aqui está a sua dica!!!!!!!!!",

        ];


            Tip::create($dados);
            echo "dica criada criado \n";
        
    }
}
