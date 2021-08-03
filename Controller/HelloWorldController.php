<?php
namespace FacturaScripts\Plugins\HelloWorldPluginAaronCruces\Controller;

class HelloWorldController extends \FacturaScripts\Core\Base\Controller
{
    public function getPageData() {
        $pageData = parent::getPageData();
        $pageData["title"] = "HelloWorldController";
        $pageData["menu"] = "admin";
        $pageData["icon"] = "fas fa-page";
        return $pageData;
    }
    
    public function privateCore(&$response, $user, $permissions) {
        parent::privateCore($response, $user, $permissions);
        /// tu código aquí
        #echo "hola mundo";
    }
}