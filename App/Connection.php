<?php

namespace App;

class Connection{
    public static function getDb(){
        try{
            $conn = new \PDO(
                "mysql:host=localhost:3360;dbname=mvc;",
                "root",
                ""
            );
            return $conn;

        } catch(PDOException $e){
            

        }
    }
}