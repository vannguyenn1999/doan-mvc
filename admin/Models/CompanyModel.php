<?php

class CompanyModel extends BaseModel{

    const TABLE_NAME = 'nhan_hieu';
    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }
}