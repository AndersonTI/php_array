<?php

class calculadora
{
    //especificando o tipo de retorno (? = null)
    public function caculaMedia(array $notas)
    {

        //Sizeof retorna o tamanho do array
        $tamanhoArray = sizeof($notas);
        //Verifica se o array está vazio
        if ($tamanhoArray > 0) {

            $soma = 0;

            for ($i = 0; $i < $tamanhoArray; $i++) {
                $soma = $soma + $notas[$i];
            }

            $mediaNotas = $soma / $tamanhoArray;

            echo "Media do array $mediaNotas";
        } else {
            echo "Array esta vazio";
        }
    }
}
