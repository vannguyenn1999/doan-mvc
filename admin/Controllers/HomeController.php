<?php



class HomeController extends BaseController
{
    protected $homeModel;

    public function __construct()
    {

        $this->model("HomeModel");
        $this->homeModel = new HomeModel();
    }
    public function index($a=0, $b=0)
    {
        $sum = $this->homeModel->showoHome($a ,$b);
        $this->view('','index',["number" => $sum]);
    }

    public function show($a=0, $b=0)
    {
       $sum = $this->homeModel->showoHome($a ,$b);
        $this->view('','index',["number" => $sum]);
       
    }
}
