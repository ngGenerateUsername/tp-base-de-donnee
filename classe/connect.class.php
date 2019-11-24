<?php
 
class BdConnect{
    private $host = 'localhost';
    private $bdname='dsi2x_g1_2019';
    private $user = 'root' ;
    private $pass ='' ;
    public $pdo = null;

  public function connectdb(){
        try {
            $this->pdo = new PDO  ('mysql:host='.$this->host.';dbname='.$this->bdname,$this->user,$this->pass);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      return $this->pdo;
  }
}


?>