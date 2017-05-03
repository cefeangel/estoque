<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder
{
    
    public function run(){
        //Query Build
        DB::table('produtos')->insert(
            [
                'nome'=>'Geladeira',
                'valor'=>1779.00,
                'descricao'=>'Geladeira Electrolux',
                'quantidade'=>'1',
            ]   
        );
        
        DB::table('produtos')->insert(            
            [
                'nome'=>'Smart TV',
                'valor'=>1999.20,
                'descricao'=>'TV Philips',
                'quantidade'=>'3',
            ]     
        );
        
        DB::table('produtos')->insert(            
            [
                'nome'=>'Xbox S',
                'valor'=>1700.10,
                'descricao'=>'Xbox S',
                'quantidade'=>'5',
            ]
                
        );
    }
}
