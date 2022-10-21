<?php



class HomeController extends BaseController
{
    protected $homeModel;

    public function __construct()
    {

        $this->model("HomeModel");
        $this->homeModel = new HomeModel();
    }
    public function index()
    {
        $this->view('','index');
    }

    public function show($a=0, $b=0)
    {
     
       
    }
}
