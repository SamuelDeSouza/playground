<?php

namespace samueldesouza\playground\Http\Controllers\Admin;

use samueldesouza\playground\Models\Admin\Navgroup;
use Illuminate\Http\Request;
use DB;

class NavgroupController extends Controller
{
    
    public function __construct()
    {
        $this->_model = Navgroup::class;                                                  // Declaração do Model da página
        $this->pageConf = new \stdClass;                                                  //Inicia objeto com dados da pag.
        $this->pageConf->pageData = $this->getPageData();                                 //Pena de forma automatica dados da pagina da tabela configurada no Model
        $this->pageConf->pageFather = "null";                                             //Pega link da pag. pai ('informar null caso nao tenha pag. pai')
        $this->pageConf->pageChildren = $this->getPageChildren();                         //Pega o submenu de cadastro
        // $pageConf->getSearch = $this->getPageChildren();                               //Pega o submenu de cadastro
    }
    
    /**
     * Funçao de correçao de nome de funções
     */
    public function get_status($line)
    {
        if($line->status == 0) return 'Inativo';
        if($line->status == 1) return 'Ative';
    }
    public function get_created_at($line)
    {
        return date('d/m/Y', strtotime($line->created_at));
    }

    public function getRadioCorrect($register)
    {
        $register[0]->opcao1 = ($register[0]->submenu == 1) ? true : false;
        $register[0]->opcao2 = ($register[0]->submenu == 0) ? true : false;
        return $register;
    }

    public function checkDataBeforeLoad($register)
    {
        //função para teste
        $register = $this->getRadioCorrect($register);
        return $register;
    }


    //Method para Pegar dados da chave estrangeira
    public function getDataForeignKey()
    {
        $this->thisData = new \stdClass;
        $this->thisData->categorias = DB::table('vpr_nav_group')->get();
        return $this->thisData;
    }

}
