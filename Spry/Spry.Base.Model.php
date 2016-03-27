<?php
/**
 * Created by PhpStorm.
 * User: abejarano
 * Date: 24-Mar-16
 * Time: 8:51 PM
 */

    Abstract Class SpryModel {
        /*
         * @Librerias registradas
         */
        protected $Librery;
        private $message;
        // ******* metodos que todo model debera tener
        abstract public function getData($field, $where); // este sera para retornar datos al controlador

        // ************************************
        function __construct($librery) {
            $this->librery = $librery;
        }
        public function DB(){
            return $this->librery;
        }
        public function setInsert($table, $data){
            try{
                return $this->DB()->qqInsert($table, $data);

            }catch(PDOException $e){
                Spry::setMessageApplication($e->getMessage());
                return 0;
            }

        }
        public function setSQLInsert($sql, $data){
            try{
                return $this->DB()->exec($sql, $data);

            }catch(PDOException $e){
                Spry::setMessageApplication($e->getMessage());
                return 0;
            }
        }

        public function setDelete($table, $where, $data = ""){
            try{
                $sql = "delete from {$table} where {$where}";
                if(empty($data)){
                    $this->DB()->exec($sql);
                }else{
                    $this->DB()->exec($sql, $data);
                }

                return true;
            }catch(PDOException $e){
                Spry::setMessageApplication($e->getMessage());
                return false;
            }
        }
    }