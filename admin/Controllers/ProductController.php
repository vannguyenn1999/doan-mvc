<?php

class ProductController extends BaseController
{

    protected $productModel;


    public function __construct()
    {
        $this->model("ProductModel");
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        $product = $this->productModel->getTable();
        $this->view("",'index');
        $this->main_content = $product;
        $this->view("Product", 'main', $this->main_content);
    }

    public function AddProduct()
    {
        $data = [
            'title' => 'test',
            'price' => 10000,
            'avatar' => 1999,
            'content' => 'thu them moi'
        ];
        $this->productModel->addProduct($data);
        $this->view('Product', 'create');
    }
}
