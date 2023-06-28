<?php
    namespace App;
    class crub extends connect{
        public $_DATA;
        function __construct(){
            parent::__construct();
            $this->_DATA =(file_get_contents('php://input')=="") ? ["Mensaje"=>"Envien datos"] : json_decode(file_get_contents('php://input',true));
        }
        public function getAll(){
            $res = $this->con->prepare("SELECT * FROM campers");
            $res->execute();
            echo json_encode($res->fetchAll(\PDO::FETCH_ASSOC));
        }
        public function postAll(){
            $res =$this->con->prepare("INSERT INTO campers(idCamper, nombreCamper, apellidoCamper, fechaNac) VALUES(:idCamper,:nombreCamper,:apellidoCamper,:fechaNac)");
            $res->bindParam(':idCamper', $this->_DATA->idCamper);
            $res->bindParam(':nombreCamper', $this->_DATA->nombreCamper);
            $res->bindParam(':apellidoCamper', $this->_DATA->apellidoCamper);
            $res->bindParam(':fechaNac', $this->_DATA->fechaNac);
            $res->execute();
            print_r($res->rowCount());
        }
        public function putAll(){
            $res = $this->con->prepare("UPDATE campers SET nombreCamper = :nombreCamper, apellidoCamper = :apellidoCamper, fechaNac = :fechaNac WHERE  idCamper = :idCamper");
            $res->bindParam(':idCamper', $this->_DATA->idCamper);
            $res->bindParam(':nombreCamper', $this->_DATA->nombreCamper);
            $res->bindParam(':apellidoCamper', $this->_DATA->apellidoCamper);
            $res->bindParam(':fechaNac', $this->_DATA->fechaNac);
            $res->execute();
            print_r($res->rowCount());
        }
    }
?>