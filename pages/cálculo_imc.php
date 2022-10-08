<h1 style="color: blue;"> Cálculo IMC </h1>
<p> Olá, aqui você ira inserir seu sexo, peso e altura </p>
<body>
<style><?php
require_once("./pages/estilo.css");
?>
</style>
<div class = "box">
<form action="./?p=imc"  method="post">
    <fieldset> 
    
    <div class = "inputbox">
    <label> Sexo: </label>
    <input type="text" name="sexo"> <br><br>
    </div>
    <div class = "inputbox">

    <label> Peso: </label>
    <input type="text" name="peso"> <br><br>
    </div>
    <div class = "inputbox">

    <label> Altura:  </label>
    <input type="text" name="altura"><br><br>
    </div>
    <div class = "inputbox">

    <input type="submit" value="Enviar"> <br><br>
</div>


</form>
</body>

<?php
    
    require_once("./pages/functions.php");


     if(isset($_POST["sexo"])){

        $sexo = $_POST["sexo"];
        $peso = (float)$_POST["peso"];
        $altura = (float)$_POST["altura"];

        if($altura != 0 && $peso != 0){
        $imcHomem = round(homemIMC($peso, $altura));

        $imcMulher = round(mulherIMC($peso, $altura));
        };
        

        if($sexo == null){
            $peso = "10";
            $altura = "10";
            
            echo '<span class="fonteIMC">'."Preencha todos os campos e apenas números na altura e peso!".'</span>';
        }else if ($peso == null) {
            $peso = "10";
            $altura = "10";
            
            echo '<span class="fonteIMC">'."Preencha todos os campos e apenas números na altura e peso!".'</span>';

        }else if($altura == null){
            $peso = "10";
            $altura = "10";
           
            echo '<span class="fonteIMC">'."Preencha todos os campos e apenas números na altura e peso!".'</span>';

        
        }else{
            switch($sexo){
                case "masculino":
                    echo "O seu imc é: ". $imcHomem;
                    if ($imcHomem <= 18){
                    echo "<h4>"." Você está abaixo do peso ". "</h4>";
                    }
                    else if($imcHomem > 18 && $imcHomem <= 25){
                    echo "<h4>"." Você está no peso ideal". "</h4>";
                    }
                    else if($imcHomem > 25) {
                    echo "<h4>"." Você está acima do peso". "</h4>";
                    }
                break;
                case "feminino":
                    echo "O seu imc é: ". $imcMulher;
                    if ($imcMulher <= 18){
                    echo "<br> Você está abaixo do peso ";
                    }
                    else if($imcMulher > 18 && $imcMulher <= 24){
                    echo "<br> Você está no peso ideal";
                    }
                    else if($imcMulher > 24) {
                    echo "<br> Você está acima do peso";
                    }
                break;
                default:
                    echo "Escolha uma operação válida";
                break;
            }
            }
        }
       
    

?>
</fieldset>
 </div>