<?php
    class miClase{
        //declaramos atributos
        public $atributo1 = "hola mundo";


        //declaramos metodos

        public function miMetodo(){
            //como podemos mandar a llamar aributos
            //utilizando la pseudo variable this

            return $this -> atributo1;
        }
    }
?>