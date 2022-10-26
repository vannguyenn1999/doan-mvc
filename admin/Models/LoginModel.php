<?php

class LoginModel extends BaseModel {
    public $username_admin;
    public $password_admin;

    public function Login(){
        $sql = "SELECT username_admin, password_admin FROM admin_system WHERE username_admin = :username_admin AND password_admin =:password_admin";
        $obj_select = $this->connect->prepare($sql);
        $arr_select =[
            ':username_admin' => $this->username_admin,
            ':password_admin' => $this->password_admin,
        ];
        $obj_select->execute($arr_select);

        $result = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $result;

    }
}