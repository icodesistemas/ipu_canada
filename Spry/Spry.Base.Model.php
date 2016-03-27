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
        abstract public function setDelete($where); // este para realizar la implementacion de delete

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

        public function setCreateSelect($field){
            //foreach($field)
        }
    }