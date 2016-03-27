<?php

    /**
     * Manera todo lo que es el objeto paginas
     */
    class MPagina extends SpryModel{
        private $Tabla;

        public function getData($field, $where = null){
            if(!empty($where)){
                $sql = "select {$field} from tb_paginas where {$where}";
            }else{
                $sql = "select {$field} from tb_paginas ";
            }

            try{
                $rs = $this->DB()->getArray($sql);
                return $rs;
            }catch(PDOException $e){
                Spry::setMessageApplication($e->getMessage());
                return null;
            }
        }

        public function setDelete($where){
            // TODO: Implement setDelete() method.
        }

        public function setUpdate(){

        }
    }