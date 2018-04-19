<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Funciones matemáticas y casting</title>
    </head>
    <body>
        <?php
            $num1 = rand();
            $num2 = rand(10, 50); //Número aleatorio entre 10 y 50
            $num3 = pow(5, 3); //pow($base, $exp)
            $num4 = 5.75;
            $num5 = 5.7556454;
            
            echo "El número 1 es ".$num1;
            echo "<br />";
            echo "El número 2 es ".$num2;
            echo "<br />";
            echo "El número 3 es ".$num3;
            echo "<br />";
            echo "El número 4 es ". round($num4);
            echo "<br />";
            echo "El número 4 es ". round($num5, 2); //Para redondear el número a dos decimales
            echo "<br /><br />";
            
            //PHP tiene un casting(conversión de tipos) implícito, lo que ahorra mucho trabajo.
            //Ejemplo:
            
            $num = "5";
            //$num += 2; //Lo asume como entero
            //$num += 5.75; //Lo asume como decimal
            
            $resultado = (int)$num1; //Conversión explícita
            
            echo "Valor de la variable 'num': ".$num;
        ?>
    </body>
</html>
