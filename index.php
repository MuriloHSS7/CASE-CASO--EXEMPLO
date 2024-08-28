<!DOCTYPE html>
<html>
    <header>
        <title>Exemplo de case(caso)</title>
    </header>
    <body>
        <?php
            $color = "green";
                switch ($color){
                    case "blue": 
                        echo "My favorite color is blue";
                    break;
                    /*----------DIVISÃO----------*/
                    case "red":
                        echo"My favorite color is red";
                    break;        
                    /*----------DIVISÃO----------*/
                    case"pink":
                        echo"My favorite color is pink";
                    break;        
                    /*----------DIVISÃO----------*/
                    case"green":
                        echo"My favorite color is green";
                    break;
                    default:
                        echo "none favorite color";
                }
         ?>
         <br>
         <br>
         <!--DIVISÃO-->
         <?php
            $dia = 4;
            switch($dia){
                case 6:
                    echo"Hoje é sábado";
                break;
                case 2:
                    echo"Hoje é Domingo";
                break;
                default:
                    echo"Logo vem o fim de semana";
            }
         ?>
    </body>
</html>