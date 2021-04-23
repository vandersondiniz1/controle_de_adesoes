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
      
        if( $request->input('usuarios_search'))
        {
            $usuario = $usuario->where('nome', 'LIKE', "%" . $request->usuarios_search . "%")
                                ->orWhere('cpf', 'LIKE', "%" . $request->usuarios_search . "%");
        }
        
        $usuario = $usuario->paginate(5);
        return view('usuarios.pesquisa', compact('usuario'));
    } 

    public function pesquisa_varios(Request $request)
    {
        $usuario = DB::table('cadastro_usuario');

        #$input = $request->all();
      
        if( $request->input('usuarios_search_varios'))
        {
            $usuario = $usuario->where('nome', 'LIKE', "%" . $request->usuarios_search_varios . "%")
                               #->whereIn('nome', $request->search . "%");
                               ->orWhere('cpf', 'LIKE', "%" . $request->usuarios_search_varios . "%");
        }
        
        $usuario = $usuario->paginate(20);
        return view('usuarios.pesquisa_varios', compact('usuario'));
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