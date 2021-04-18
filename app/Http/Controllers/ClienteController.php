<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Cliente;
#use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class ClienteController extends Controller
{
       
    public function pesquisa(Request $request)
    {
        $cliente = DB::table('cadastro_cliente');
      
        if( $request->input('search'))
        {
            $cliente = $cliente->where('nome', 'LIKE', "%" . $request->search . "%")
                                ->orWhere('cpf', 'LIKE', "%" . $request->search . "%");
        }
        
        $cliente = $cliente->paginate(20);
        return view('clientes.pesquisa', compact('cliente'));
    } 
      
    public function remove($id){
        $cliente = cliente::find($id);
        $cliente->delete();
        return view('clientes.pesquisa');
        }

}