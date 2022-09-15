<?php 
namespace App\Controller;

class DashboardController extends AbstractController{

    public function index(){
        $user = $this->session()->get("user");
        return $this->renderView("dashboard/index",
        compact("user"),"Mon compte");
    }

}
