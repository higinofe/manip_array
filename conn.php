<?php

$username = 'root';
$password = '';
try {
  $conn = new PDO('mysql:host=localhost;dbname=akna', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

class Conexao {
    public $conn;
    public function __construct() {
        $username = 'root';
         $password = '';
          try {
             $cone = new PDO('mysql:host=localhost;dbname=akna', $username, $password);
               $cone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           } catch(PDOException $e) {
               echo 'ERROR: ' . $e->getMessage();
           }
           $this->conn = $cone;
          return $cone;
    }
 }

