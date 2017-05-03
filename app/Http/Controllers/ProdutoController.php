<?php

namespace estoque2\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    
    public function lista(){
                    //guery builder
        $produtos = DB::table('produtos')->get();
        
        return view('listagem')->with('produtos', $produtos);
    }
    
}
