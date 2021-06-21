<?php
class personas_model1{
    private $db;
    private $personas;
    //variables DTO
    private $id;
    private $nombre;
    private $edad;
    
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
        $this->id=array();
        $this->nombre=array();
        $this->edad=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
    
    //Modelo DTO 
    


    
    

}
?>

