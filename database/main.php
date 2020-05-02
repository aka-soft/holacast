<?php

//Requirements
require_once "./config.php";
require_once "./IMain.php";

//Main Database class
class database implements IDatabase{

    //Database connection
    public function connect(){
        return new mysqli(db_hostname,db_username,db_password,db_name);
    }
    
}

?>