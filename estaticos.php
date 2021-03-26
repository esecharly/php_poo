<?php
    class miClase{
        public $mensaje = 'hola';

        public function hola(){
            return "hola;"
        }

        public static function metodo(){
            return $this->$mensaje;
        }
    }

    echo miClase::metodo();
?>