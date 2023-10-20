<?php
class koneksi{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "native";
    protected $koneksi;
    public function __coustruct(){
        try{
            $this->koneksi = new PDO ("mysql:host=this->$host->host; dbname=$this->db", $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
        }
        catch (PDOException $e){
            echo $e->getMessege();
        }
        return $this->koneksi;
    }
}
?>