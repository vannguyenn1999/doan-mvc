<?php

    class Database {
        
        private $connect;

        const HOST_NAME = 'localhost';

        const USERNAME = 'root';

        const PASSWORD = '';

        const DB_NAME = 'php0722_apple123';

       

        protected function connection(){
            $this->connect =  mysqli_connect(self::HOST_NAME, self::USERNAME, self::PASSWORD, self::DB_NAME);

            mysqli_set_charset($this->connect, "utf8");
            if(mysqli_connect_errno() === 0){
                return  $this->connect;
            }
            return false;
        } 

        protected function close_connection(){
            $this->connect = null;
        }
    }