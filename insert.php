<?php

include_once("config.php");

$peso = $_POST['p'];
$altura = $_POST['a'];
$imc = $peso/$altura ** 2;


            if ($imc <=20){
                $resultado = " A pessoa está abaixo do peso";
            }

            if ($imc >20 and $imc<=25) {
                $resultado = " A pessoa está com peso normal";
            }

            if($imc >25 and $imc <=30 ) {
                $resultado = " A pessoa está acima do peso";

            }

            if ($imc >30 ){
                $resultado = " A pessoa está com obesidade mórbida";
            }

        $sql = "INSERT INTO calculo(peso, altura, imc, resultado) VALUES(:peso, :altura, :imc, :resultado)";
        $query = $dbConn->prepare($sql);

        $query->bindparam(':peso', $peso);
        $query->bindparam(':altura', $altura);
        $query->bindparam(':imc',$imc);
        $query->bindparam(':resultado',$resultado);

        $query->execute();

        echo "<font color='green'>Enviado";
        echo "<br/><a href='index.php'>Voltar para resultado</a>";
?>