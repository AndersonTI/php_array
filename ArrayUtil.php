<?php declare(strict_types=1); //Não faz o cast automatico
class ArrayUtils{

    //não preciso instanciar para usar
    //& referencia, modifica direto na intergra e não copia, igual o sort
    public static function remover(string $elemento, array &$array){

        //vai buscar o elemento x no array x, e compara o conteudo e o tipo
        $posicao = array_search($elemento, $array,true);
        if(is_int($posicao)){
            var_dump($posicao);
            unset($array[$posicao]);
        }else{
            echo "O Elemento do array não foi encontrado";
        }
       
    }
}