<?php

class ProductController extends BaseController {

    protected $productModel;
    

    public function __construct()
    {
        $this->model("ProductModel");
        $this->productModel = new ProductModel();
    }
    public function index(){
        $product = $this->productModel->getTable();
        // var_dump($product);
        $this->view("Product",'main',$product);
    }

    public function add(){
        $data = [
            'title' => 'test',
            'price' => 10000,
            'avatar' => 1999,
            'content' => 'thu them moi'
        ];
        $this->productModel->addProduct($data);
        $this->view('Product','create');
    }

    
}