<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cálculo da Área</title>
    </head>
    <body>
        
        <input type="hidden" name="figura" value= <?php echo $_REQUEST["figura"];?> />
        <?php
            if ($_REQUEST["figura"] == "c"){
        ?>
        Raio:
        <input type="text" name="raio" value="" />
        <br>
        <?php
        }
        else{
            ?>
            Base:
            <input type="text name="base" value="" />
            <br>
            Altura:
            <input type="text" name="altura" value="" />
            <br>
         <?php
        }
        ?>
        <input type = "submit" value = "Calcular" />
        
     </body>
</html>
