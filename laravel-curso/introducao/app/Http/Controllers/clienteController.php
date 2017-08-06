<?php


namespace App\Http\Controllers;

use Request;

	class ClienteController extends Controller{

		public function listar(){

			$data= date("Y-m-d");

			if($data > '2017-03-03'){

				$msg = "Inscrição realizada com sucesso!";
			}else{
				$msg = "Inscrição negada!";

			}

			return view("listar")->with("msg", $msg);
		}

		public function listar2(){
			$nomes = array(1 => "João",2 => "Maria", 3 =>"Pedro");
			return view("listar2")->with("nomes", $nomes);

		}

		
		public function editar(){
			
			if(Request::has('id')){

				$id = Request::route("id");


			}else{

				$id=0;
			}



			$url = Request::path();


			//$id = Request::input('id');

			$id = Request::route("id");

			return view("editar")->with('id', $id)->with("url", $url);

		}


		public function novo(){
			if(view()->exists('novo')){
				return view("novo");
			}else{

				return view("welcome");

			}
			
			return view("novo");
		}


	}


?>




