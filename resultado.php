<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo da Área</title>
    </head>
    <body>
        <h1>Cálculo da Área</h1>
        <?php
       if ($_REQUEST["figura"] == "q"){
           $base = $_REQUEST["base"];
           $altura = $_REQUEST["altura"];
           $area = $base * $altura;
           $tipo = "quadrado";
           if($base != $altura)
           $tipo = "retangulo";
           echo "A área do $tipo é $area";
       }
      
        elseif ($_REQUEST["figura"] == "t") {
        
           $base = $_REQUEST["base"];
           $altura = $_REQUEST["altura"];
           $area = ($base * $altura)/2;
           echo "A área do triangulo é $area";
       
       }
       else{
           $raio = $_REQUEST["raio"];
           $area = pi() * pow($raio, 2);
           echo "A área da circunferencia é $area";
                   
          }

        ?>
    </body>
</html>
