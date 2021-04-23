<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Adesao;
#use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class AdesaoController extends Controller
{
    public function lista(){
        
        #retorna id, adesao e cliente
        $adesoes = DB::select('SELECT t1.id, t1.adesao, t1.cliente
                                FROM registro_crm t1
                                INNER JOIN (
                                SELECT adesao, COUNT(*) AS "quantidade"
                                FROM registro_crm rc 
                                GROUP BY adesao
                                HAVING COUNT(*) > 1
                                LIMIT 20
                                ) t2 on t1.adesao = t2.adesao');
        return view('adesoes.listagem')->with('adesoes', $adesoes);
    }

    public function mostra(){
        $adesao = Request::route('adesoes');

        $resposta = DB::select('select * from registro_crm where adesao = ?',[$adesao]);

        if(empty($resposta)) {
            return "Essa adesão que você está procurando não existe";
            }            
        
            return view('adesoes.detalhes')->with('a', $resposta[0]);;
    }

    #utilizando eloquent orm
    public function mostraByNumeroAdesao($adesao){
        $adesao = Adesao::find($adesao);
       
        if(empty($adesao)) {
        return "Essa adesão não existe";
        }
        return view('adesao.detalhes')->with('a', $adesao);
    }
       
    public function pesquisa(Request $request)
    {
        $adesao = DB::table('registro_crm');
      
        if( $request->input('adesoes_search'))
        {
            $adesao = $adesao->where('adesao', 'LIKE', "%" . $request->adesoes_search . "%");
        }
        
        $adesao = $adesao->paginate(10);
        return view('adesoes.pesquisa', compact('adesao'));
        #return view('adesoes.pesquisa')->with('resposta', $pesquisa);
    } 
      
    public function remove($id){
        $adesao = Adesao::find($id);
        $adesao->delete();
        return view('adesoes.pesquisa');
        }

}