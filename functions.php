<?php

function load_page(){
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{
        $page = "home";
    } 

    switch($page){
         case "home":
            require_once("./pages/aula_home.php");
        break;
        case "atividade_avaliativa":
            require_once("./pages/insert.php");
        break; 
        case "imc":
            require_once("./pages/cálculo_imc.php");
        break;
        case "jogo_adivinha":
            require_once("./pages/jogo_adivinha.php");
        break;
        case "prova_avaliativa":
            require_once("./pages/prova_avaliativa.php");
        break;
        default:
        require_once("./pages/aula_error404.php");
        break;
    }
}

function load_title(){
    isset($_GET["p"])? $titulo = $_GET["p"]: $titulo = "home";

    switch($titulo){
        case "home":
            echo "Página Home";
        break;
        case "sobreNos":
            echo "Página Sobre Nós";
        break;
        case "contato":
            echo "Página de Contato";
        break;
        case "calcular":
            echo "Página Calcular";
        break;
        case "atividade_avaliativa":
            echo "Página Atv Avaliativa";
        break;
        case "imc":
            echo "Página IMC";
        break;
        case "jogo_adivinha":
            echo "Página Jogo Adivinha";
        break;
        case "prova_avaliativa":
            echo "Prova";
        break;
        default:
            echo "Página de ERRO";
        break;
        }
}

?>