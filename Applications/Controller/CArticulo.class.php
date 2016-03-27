<?php
   class CArticulo extends SpryController{
       public function index(){
           // TODO: Implement index() method.
       }
       public function action(){

       }
       public function Datos(){
           return $this->Model()->getData();
       }
   }