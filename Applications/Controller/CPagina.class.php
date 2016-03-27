<?php
    /**
     * se encarga de la administracion de que sera las diferentes paginas del front end
     */
    class CPagina extends SpryController{

        public function action(){
            if( isset($_REQUEST["action"])){
                switch($_REQUEST["action"]){
                    case 'guardar':
                        $this->setGuarEditar('guardar');
                        break;
                    case 'actualizar':
                        $this->setGuarEditar('actualizar');
                        break;
                }
            }

        }
        private function setGuarEditar($action){
            $url = $this->Component()->Functions->getCrearUrl($_POST["titulo"]);
            if(isset($_POST['pagina-activa'])){
                $status = 'A';
            }else{
                $status = 'I';
            }
            $data = array(
                'pagina_es' => addslashes(strip_tags($_POST['seccion'])),
                'url_es' => $url,
                'descripcion_es' => addslashes(strip_tags($_POST['descrip'])),
                'titulo_es' => addslashes(strip_tags($_POST['titulo'])),
                'abrir' => addslashes(strip_tags($_POST['open-URL'])),
                'status' => $status
            );
            if($action == 'actualizar'){
                $data = array_merge($data, array('pk_pagina' =>intval($_POST["pk"]) ));
                if($this->Model()->setUpdate('tb_paginas', $data)){
                    Spry::setMessageApplication("Datos de la pagina actualizados con exito");
                }
            }else{
                $this->Model()->setInsert('tb_paginas',$data);
                Spry::setMessageApplication("Pagina actualizados con exito");
            }

        }
        public function getListadoPaginas(){
            $campos = 'pk_pagina,pagina_es, titulo_es, url_es, descripcion_es,status';
            return $this->Model()->getData($campos);

        }
        public function getDatosPagina($pk){
            $campos = 'pk_pagina,pagina_es, titulo_es, url_es, descripcion_es,status, abrir';
            $where = 'pk_pagina = '.intval($pk);
            $rs = $this->Model()->getData($campos,$where);
            return $rs[0];
        }
        public function setDelete($pk){
            $where = 'pk_pagina = ?';
            $data = array(intval($pk));

            if($this->Model()->setDelete('tb_paginas', $where, $data)){

                Spry::setMessageApplication("Pagina eliminada");
            }else{

                Spry::setMessageApplication("SSSSSSSSSSSSsa");
            }
        }
    }