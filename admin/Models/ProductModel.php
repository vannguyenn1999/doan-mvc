<?php

class ProductModel extends BaseModel {
    const  TABLE_NAME = 'products';

    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }
    public function addProduct($data){
        return $this->_Insert(self::TABLE_NAME , $data);
    }
}