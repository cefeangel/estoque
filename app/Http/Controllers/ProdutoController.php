<?php

namespace estoque2\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    
    public function lista(){
                    //query builder
        $produtos = DB::table('produtos')->get();
        
        return view('listagem')->with('produtos', $produtos);
    }
    
    public function mostra(){
        //query builder
        $produto = DB::table('produtos')
                ->where('id','=','3')
                ->get();
        return view('detalhe')->with('p', $produto[0]);
    }
    
}
