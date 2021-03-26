<?php
    //un metodo privado solo puede ser accedido y manejado en la clase que fue creado
    class clase1{
        private static function saludar(){
            return "saludando";
        }

        public static function mandaSaludo(){
            return self::saludar();
        }
    }

    echo clase1::mandaSaludo();
?>