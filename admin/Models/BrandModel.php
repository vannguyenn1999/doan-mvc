<?php

class BrandModel extends BaseModel
{
    const TABLE_NAME =  'kieu';
    public function getTable()
    {
        return $this->_SelectAll(self::TABLE_NAME);
    }
}
