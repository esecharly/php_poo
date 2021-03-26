<?php
    class metodos{
        public function mandarColor($valor){
            if ($valor == 1) {
                return "rojo";
            }elseif ($valor == 2) {
                return "negro";
            }elseif ($valor == 3) {
                return "azul";
            }
        }

        public function darDeAltaColor($tipoColor){
            /* $obj = new metodos();
            return $obj -> mandarColor(1); */

            return self::mandarColor($tipoColor);
        }
    }

    $obj = new metodos();
    echo $obj -> darDeAltaColor(2);
?>