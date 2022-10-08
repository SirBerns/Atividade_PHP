<head>

<h1> Prova Avaliativa - A1 </h1>

<p> Insira 3 números, o primeiro número será subtraído do segundo número, e o resultado dessa operação, será subtraído pelo terceiro número.
    Valide os campos e se algum ficar em branco, o programa deverá dizer qual que está em branco.
</p>

</head>

<body>

<style>
    <?php
        require("./pages/estilo.css");
    ?>
    
 </style>

<p> <br> </p>

 <div class="inserir"> 
 <form action="./?p=prova_avaliativa"  method="post">
    <br>
        <label> &nbsp; Primeiro Número: </label>
        &nbsp;<input type="text" name="primeiroNum"> <br>
        <label>  &nbsp;  Segundo Número: </label>
        &nbsp;<input type="text" name="segundoNum"> <br>
        <label>  &nbsp; Terceiro Número: </label>
        &nbsp;<input type="text" name="terceiroNum"> <br>
        &nbsp; <input type="submit" value="Enviar"> <br> <br>
    </form>
 </div>


 <?php

    if(isset($_POST["primeiroNum"])){
        echo '<div class="resultado">';
        $primeiroNum = $_POST["primeiroNum"];
        $segundoNum = $_POST["segundoNum"];
        $terceiroNum = $_POST["terceiroNum"];
        $op = 0;

        if(null != $primeiroNum && null != $segundoNum && null != $terceiroNum ){
            $op = $primeiroNum - $segundoNum;
            $terceiroNum = $op - $terceiroNum;
            echo '&nbsp;'.'<span class="fonte">'."Resultado: ". $terceiroNum. '</span>'. '<br>';
            echo '&nbsp;'.'<span class="i">'. "Operação concluída com sucesso!". '</span>'."<hr>";
        } else {
            if(null == $primeiroNum && null != $segundoNum && null != $terceiroNum){
                echo '&nbsp;'.'<span class="erro">'. "O primeiro número está vazio!". '</span>';
            }
            else if (null == $segundoNum && null != $primeiroNum && null != $terceiroNum){
                echo '&nbsp;'.'<span class="erro">'. "O segundo número está vazio!". '</span>';
            }
            else if(null == $terceiroNum && null != $primeiroNum && null != $segundoNum){
                echo '&nbsp;'.'<span class="erro">'. "O terceiro número está vazio!". '</span>';
            }
            else if (null == $primeiroNum && null == $segundoNum){
                    echo '&nbsp;'.'<span class="erro">'. "O primeiro e segundo número está vazio!". '</span>';
            }
            else if (null == $primeiroNum && null == $terceiroNum){
                echo '&nbsp;'.'<span class="erro">'. "O primeiro e terceiro número está vazio!". '</span>';
            }  
            else if (null == $segundoNum && null == $terceiroNum){
            echo '&nbsp;'.'<span class="erro">'. "O terceiro e segundo número está vazio!". '</span>';
            }
            

        }
    }
 ?>

</div>

</body>