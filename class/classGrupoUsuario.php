<?php 

Class ClassGrupoUsuario{

    private $cod;
    private $sigla;
    private $desc;

    public function setCod($cod){
        $this->cod = $cod;

    }
    public function getCod(){
        return $this->cod;

    }
    public function setSigla($sigla){
        $this->sigla = $sigla;

    }
    public function getSigla(){
        return $this->sigla;
    }
    public function setDesc($desc){
        $this->desc = $desc;
    }
    public function getDesc(){
        return $this->desc;
    }

}


?>