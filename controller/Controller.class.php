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




            }
        }

    }
}