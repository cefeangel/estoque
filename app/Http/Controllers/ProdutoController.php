<?php

namespace estoque2\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    
    public function lista(){
                    //query builder
        $produtos = DB::table('produtos')->get();
        
        return view('produtos.listagem')->with('produtos', $produtos);
    }
    
    public function mostra(){
       
        
//        $id = Request::input('id');
        $id = Request::route('id');
        
        //query builder
        $produto = DB::table('produtos')
                ->where('id','=',$id)
                ->get();
          
        if(empty($produto[0])){
            return 'Esse produto não existe';
        }else{
            return view('produtos.detalhe')->with('p', $produto[0]);
        }
       
    }
    
    public function novo(){
        
        return view('produtos.formulario');
    }
    
}
