<?php

namespace vk2\paineladmin\Http\Controllers\Admin;

use Illuminate\Http\Request;
use vk2\paineladmin\Models\Admin\Usuariopassword;
use Illuminate\Http\Request as Requestform;

class UsuariopasswordController extends Controller
{
    public function __construct()
    {
        $this->_model = Usuariopassword::class;                                                  // Declaração do Model da página
        $this->pageConf = new \stdClass;                                                  //Inicia objeto com dados da pag.
        $this->pageConf->pageData = $this->getPageData();                                 //Pena de forma automatica dados da pagina da tabela configurada no Model
        $this->pageConf->pageFather = "null";                                             //Pega link da pag. pai ('informar null caso nao tenha pag. pai')
        $this->pageConf->pageChildren = $this->getPageChildren();                         //Pega o submenu de cadastro
        // $pageConf->getSearch = $this->getPageChildren();                               //Pega o submenu de cadastro
    }

    function checkBeforeUpdate($request)
    {
        // dd($inputs);
        $inputs = array_except($request, ['confirmpassword']);
        $inputs['password'] = bcrypt($inputs['password']);
        return $inputs;
    }


}
