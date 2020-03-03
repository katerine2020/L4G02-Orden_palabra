<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Palabras</title>
    </head>
    <body>
    <?php

        $primer = ["baseball" , "base,hol,ball,rar"];
        $explod = explode(",", $primer[1]);
        $x="No_encontrada";
        for($i=0;$i<count($explod);$i++){
            echo " ".$explod[$i]." ";
            for ($b=0;$b<count($explod);$b++){
                if ($explod[$i].$explod[$b]==$primer[0]){
                    $x=$primer[0];
                }
            }
        }
        echo "<h3>".$x."</h3>";
        ?>
    </body>
</html>