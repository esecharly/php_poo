<?php
    class miClase{
        //atributos
        public $resultado = 0;

        //metodos
        public function miMetodo($v1,$v2){

            $this -> resultado = $v1 + $v2;

            return $this -> resultado;
        }
    }

    //termina clase

    //instanciamos objeto

    $miObjeto = new miClase ();

    echo $miObjeto -> miMetodo(5, 10);
?>