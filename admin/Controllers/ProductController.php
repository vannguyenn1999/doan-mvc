<?php

class ProductController extends BaseController {

    protected $productModel;
    const  TABLE_NAME = 'products';

    public function __construct()
    {
        $this->model("ProductModel");
        $this->productModel = new ProductModel();
    }
    public function index(){
        $product = $this->productModel->getAll(self::TABLE_NAME);
        // var_dump($product);
        $this->view("Product",'main',$product);
    }
}