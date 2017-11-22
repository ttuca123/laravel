<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

use App\ContasPagar;


class ContasPagarController extends Controller
{   

    public function listar(){
        
        $tipo = 'AGUA';
        $contas_pagar = ContasPagar::all();

        //$contas_pagar = ContasPagar::where('descricao', 'LIKE', '%AGUA%')->get();
        //$contas_pagar =  DB ::select("select * from contas_pagar where descricao LIKE '%".$tipo."%'");
        /*$contas_pagar =  DB ::select("select * from contas_pagar");
        $html='';
        foreach($contas_pagar as $value){
            $html .='Descrição: '.$value->descricao." - ";
            $html .= $value->valor."</br>";

        }
       */
        //return $html;

        return view('listar')->with('contas_pagar', $contas_pagar);
    }



    public function cadastro(){

        return view('cadastro');
    }


    function validar($descricao, $valor){

        $validator = Validator::make([
            'descricao' => $descricao,
            'valor' => $valor
        ], 
        [ 'descricao' => 'required|min:6',
        'valor' => 'required|numeric' ],
        [
            'required' => ':attribute é obrigatório',
            'numeric' => ':attribute deve ser um valor numérico'
        ]

        );
        
        if($validator->fails()){
            return false;
        }else{

            return true;
        }

    }

    public function salvar(){
          
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        
        if(validar($descricao, $valor)===false){
            return redirect()->action('ContasPagarController@cadastro')->withErrors($validator)->withInput();

        }       

        $contasPagar = new ContasPagar();
        $contasPagar->descricao = $descricao;
        $contasPagar->valor = $valor;

        $contasPagar->save();
        
        /*$descricao = Request::input('descricao');
            $valor = Request::input('valor');
                
            DB::insert('INSERT INTO contas_pagar (descricao, valor) VALUES (?, ?)',
            array($descricao, $valor));
        */
            return redirect()->action('ContasPagarController@listar')->withInput();
    }
    
            
    public function editar($id){
        
        $contas_pagar = ContasPagar::where('id', $id)->first();

            if(empty($contas_pagar)){
               
                return 'Conta a PAGAR NÃO EXISTE';

            }else{

                return view('editar')->with('contas_pagar', $contas_pagar);

            }                
        }

        public function update($id){
        
            $descricao = Request::input('descricao');

            $valor = Request::input('valor');

            $contasPagar = ContasPagar::where('id', $id)->first();

            $contasPagar->descricao = $descricao;

            $contasPagar->valor = $valor;

            $contasPagar->update();

            return redirect()->action('ContasPagarController@listar')->withInput();
        }

        public function apagar($id){    
        

            $contasPagar = ContasPagar::where('id', $id)->first();

            $contasPagar->delete();

            return redirect()->action('ContasPagarController@listar')->withInput();
        }
                
}
