<?php

    /**
     * Manera todo lo que es el objeto paginas
     */
    class MPagina extends SpryModel{
        private $Tabla;

        public function getData($table,$field, $where = null){
            if(!empty($where)){
                $sql = "select {$field} from {$table} where {$where}";
            }else{
                $sql = "select {$field} from {$table} ";
            }

            try{
                $rs = $this->DB()->getArray($sql);
                return $rs;
            }catch(PDOException $e){
                Spry::setMessageApplication($e->getMessage());
                return null;
            }
        }
    }