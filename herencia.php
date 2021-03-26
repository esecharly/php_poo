<?php
    class clasePadre{
        public static function metodoPadre(){
            return "hola desde el padre";
        }

        public static function metodo1(){
            return "este es metodo padre";
        }
    }

    class claseHijo extends clasePadre{
        public static function metodoHijo(){
            return parent::metodo1();
        }

        public static function metodo1(){
            return "este es metodo hijo";
        }
    }

    //la herencia es obtener todas las propiedades de una clase a otra mediante la palabra reservada extends

    /* $obj = new claseHijo();
    echo $obj -> metodoPadre();
 */
    //instancia rapida

    echo claseHijo::metodoHijo(); //esto esta deprecado en php 8, tienes que declarar el metodo como estatico 
                                    //para poder mandarlo a llamar
?>