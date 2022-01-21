<?php

namespace vk2\paineladmin\Http\Controllers\Admin;

use vk2\paineladmin\Models\Admin\Ajustes;
use Illuminate\Http\Request;

class AjustesController extends Controller
{
    
    public function __construct()
    {
        $this->_model = Ajustes::class;    // Declaração do Model da página
        
        $pageConf = new \stdClass; //Inicia objeto com dados da pag.
        
        $pageConf->pageData = $this->getPageData();                                 //Pena de forma automatica dados da pagina da tabela nav_group_menude
        $pageConf->pageFather = "null";                                             //Pega link da pag. pai ('informar null caso nao tenha pag. pai')
        $pageConf->pageChildren = $this->getPageChildren();                         //Pega o submenu de cadastro
        $pageConf->listStyle = $this->getListStyle();                               //pega Configuraçoes de stilo de listagem
        $pageConf->listItems = $this->getItemsforList($pageConf->listStyle);        //Campos liberados para listagem
        $pageConf->search = "Grupos de Menus";                                      //Habilita campos de busca
    
        $this->pageConf = $pageConf;
    }

    
    public function getItemsforList($listStyle)
    {
        //Definição de objeto padrao que irá conter os itens a serem carregados em cada listagem 
        $itemsOpen = new \stdClass;
        
        if($listStyle == 1)
        {}
        else if($listStyle == 2)
        {}
        else if($listStyle == 3)
        {}
        
        return $itemsOpen;
    }
}
