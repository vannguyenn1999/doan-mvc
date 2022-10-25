<?php

class AccountModel extends BaseModel{

    const TABLE_NAME = 'accounts';

    public function getTable(){
        return $this->_SelectAll(self::TABLE_NAME);
    }
}