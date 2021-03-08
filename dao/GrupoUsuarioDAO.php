<?php 

include_once "../dao/DAO.php";
include_once "../class/classGrupoUsuario.php";


    Class ClassGrupoUsuarioDAO extends Dao{


        public function insertGrupoUsuario(GrupoUsuario $GrupoUsuario){

            $sql = "INSERT INTO `crm_gru`(`CRM_GRU_ID`, `CRM_GRU_COD`, `CRM_GRU_DESC`, `CRM_GRU_SIGLA`, `CRM_GRU_IDEMP`, `CRM_GRU_COMPLEMENTO`, `CRM_GRU_BLOQ`, `CRM_GRU_EXCLUIDO`) VALUES (null, :cod, :descr, :sigla, ``, ``, ``, ``)";
            $insert = $this->con->prepare($sql);
            $insert->bindValue('cod',$GrupoUsuario->getCod());
            $insert->bindValue('descr',$GrupoUsuario->getDesc());
            $insert->bindValue('sigla',$GrupoUsuario->getSigla());
           // $insert->bindValue('cod',$GrupoUsuario->);
           // $insert->bindValue('cod',$GrupoUsuario->);
           // $insert->bindValue('cod',$GrupoUsuario->);
           // $insert->bindValue('cod',$GrupoUsuario->);
           $insert->execute();
        }
        
    }



?>