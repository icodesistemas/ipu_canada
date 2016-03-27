<?php
    class MArticulo extends SpryModel{

        public function getData($field = "", $where = ""){
            // TODO: Implement getData() method.

            return $this->DB()->getArray('select * from prueba');
        }

        public function setDelete($where)
        {
            // TODO: Implement setDelete() method.
        }

        public function setInsert($table, $data)
        {
            // TODO: Implement setInsert() method.
        }
    }
