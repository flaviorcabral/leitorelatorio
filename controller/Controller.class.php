<?php

class Controller{

    function manipulador(){

        $erro = false;

        if(isset($_REQUEST['upload'])){

            $tmp_name = $_FILES['relatorio']['tmp_name'];
            $nome = $_FILES['relatorio']['name'];
            $diretorio = "../arquivos/";
            $tipo = $_FILES['relatorio']['type'];

            if(!$erro){
                move_uploaded_file($tmp_name ,$diretorio.$nome);
                $linhas = file($diretorio.$nome);

                $caixa = trim(substr($linhas[0],0,9));
                $data = trim(substr($linhas[0],26,8));
                $hora = trim(substr($linhas[0],34,4));

                $tamanho = count($linhas)-2;

                for($i=1;$i <= $tamanho;$i++){
                    $codigo = trim(substr($linhas[$i],0,12));
                    $razao = trim(substr($linhas[$i],12,22));
                    $cnpj = trim(substr($linhas[$i],52,14));
                    $numero = trim(substr($linhas[$i],111,17));
                    $valor = intval($numero);

                    echo $caixa."<br>";
                    echo $data."<br>";
                    echo $hora."<br>";
                    echo $codigo."<br>";
                    echo $razao."<br>";
                    echo $cnpj."<br>";
                    echo $valor."<br><br>";
                }


            }
        }

    }
}