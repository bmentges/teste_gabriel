<div class="titulo">Desafio Erros</div>

<?php

//   PROBLEMA:
// 
//   interface Template {
//       function metodo1();
//       public function metodo2($parametro);
//   }
// 
//   abstract class ClasseAbstrata extends Template {
//       public function metodo3() {
//           echo "Estou funcionando";
//       }
//   }
// 
//   class Classe implements ClasseAbstrata {
//       function __construct($parametro) {
// 
//       }
//   }
//
//   $exemplo = Classe();
//   $exemplo.metodo3();
// 
//   ---------------------------------------------
// 
//   SOLUÇÃO:

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }

    public function metodo1() {

    }
}

class Classe extends ClasseAbstrata {
    function __construct() {

    }

    public function metodo2($parametro) {

    }
}

$exemplo = new Classe();
$exemplo->metodo3();