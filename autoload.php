<?php
/**
 * Função spl_autoload_registre
 * Que recebe uma função sem retorno que recebe como paramentro um $namespaceClasses
 * $caminho é defido a pasta do projeto
 * $diretorio_classes vai trocar \\ pelo tipo de separador da pasta do S.O, de onde se encontra a classe
 * include_onde getcwd faz o c:\pasta\etc usando o separador da pasta \ classe.php
 */

spl_autoload_register(
    function(string $namespaceClasses):void{
        $caminho = "/src";
        $diretorio_classe = str_replace("\\",DIRECTORY_SEPARATOR,$namespaceClasses);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);