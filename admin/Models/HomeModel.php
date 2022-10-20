<?php

class HomeModel extends BaseModel {
    public function homemodel(){
        return "đây là home model";
    }

    public function  showoHome ($a, $b){
        return $a + $b;
    }
}