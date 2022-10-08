

<head>
   
    <h1 style="color: blue;"> Menu de Cadastro </h1>
    <p> Olá, aqui você irá inserir seus dados </p>
    <hr> <br>
    </head>
    <form action="./?p=atividade_avaliativa"  method="post">
        <label> Nome: </label>
        <input type="text" name="nome"> <br>
        <label> Sobrenome: </label>
        <input type="text" name="sobrenome"> <br>
        <label> Email: </label>
        <input type="text" name="email"> <br>
        <input type="submit" value="Enviar"> <br>
    </form>
    <style>

    <?php
        require("./pages/estilo.css");
    ?>

    </style>

<?php
        

    if(isset($_POST["nome"])){

        

        if(null != $_POST["sobrenome"] && null != $_POST["email"] && null != $_POST["nome"] ){
       
        echo "<br>"."Nome: ". $_POST["nome"]. "<br>";
        echo "Sobrenome: ".$_POST["sobrenome"]. "<br>";
        echo "Email: ".$_POST["email"]. "<br> <br>";
        echo '<span class="i">'. "Cadastro concluído com sucesso!". '</span>'."<hr>";
        } else {
            echo "<br>". "<hr>" .'<span class="fonteCadastro">'. "Preencha todos os campos!". '</span>';
        }
        
    } else{
        echo "Envie seu cadastro";
    }  

    ?>
