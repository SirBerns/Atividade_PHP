<h1 style="color: blue;"> Contador </h1>
<p> Olá, aqui você irá colocar um contador! </p>
<hr><br>
<style>
    <?php
        require("./pages/estilo.css");
    ?>
    </style>

<form action="./?p=jogo_adivinha"  method="post">
    <label> Número: </label>
    <input type="number" name="primeiroN"> <br>
    <input type="submit" value="Contador">  <br>
    </form>
<?php
 
    if(isset($_POST["primeiroN"])){ 
    $max = $_POST["primeiroN"];
    $i = 0;

    if($max == null){
        echo "Preencha o campo";}
        else{
    do {
        $i++;
        echo $i. "<br>";
    } while ($i < $max);
    }
}
?>

