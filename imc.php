<div>
    <p>O seu IMC esta na faixa de:
        <b>
            <?php
            $altura = 1.64;
            $peso = 90;
            $IMC = $peso / ($altura * $altura);
            $faixa = "";
            if ($IMC < 18.5) {
                echo "Magreza";
            } else if ($IMC >= 18.5 && $IMC <= 25) {
                $faixa = "Normal";
            } else if ($IMC >= 25 && $IMC < 30) {
                $faixa = "Sobrepeso";
            } else {
                $faixa = 'Obesidade';
            }
            echo $faixa;
            ?>
    </p></b>
</div>