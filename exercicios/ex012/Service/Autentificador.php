<?php
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autentificador{

    public function tentarLogin(Autenticavel $autenticavel, string $senha):void{
        if($autenticavel->podeAutentiar($senha)){
            echo "Ok. Usúario logado no sistema";
        } else {
            echo "ops. Senha incorreta";
        }
    }

}
?>