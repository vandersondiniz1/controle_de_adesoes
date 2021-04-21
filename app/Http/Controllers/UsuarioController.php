<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class UsuarioController extends Controller
{
       
    public function pesquisa(Request $request)
    {
        $usuario = DB::table('cadastro_usuario');
      
        if( $request->input('search'))
        {
            $usuario = $usuario->where('nome', 'LIKE', "%" . $request->search . "%")
                                ->orWhere('cpf', 'LIKE', "%" . $request->search . "%");
        }
        
        $usuario = $usuario->paginate(5);
        return view('usuarios.pesquisa', compact('usuario'));
    } 
      
    public function edit($id){
        $usuario = usuario::find($id);
        #return view('usuarios.edita');
        return view('usuarios.edita')->with('usuario', $usuario);
        #return view('usuarios.edita', ['usuario'=>$usuario]);
    }

    public function update(Request $request, $id){
        $usuario = usuario::find($id);

        $usuario->update([
            'nome' => $request->nome,
            'supervisor' => $request->supervisor,
            'campanha' => $request->campanha,
            'permissao' => $request->permissao,
            'skill' => $request->skill	
        ]);
        return view('usuarios.detalhes')->with('u', $usuario);
    }
}