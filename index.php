<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mes cours PHP</title>
    </head>
    <body>

        
    <?php 

 
        //Ecrire une variable PHP  ->  $nomDeLaVariable = saValeur;
            $userAge = 41;

        //Valeur de type String, utilisée pour contenir du texte : $nomDeLaVariable = "ValeurTypeString"; ou avec des guillemet simples ''
            $fullname = "Antoni Salomon";
            $email = 'antoni.salomon1337@gmail.com';

        //Insérer des " ' dans sa string il faut utiliser un \ avant
            $variable1 = "Mon \"nom\" est Antoni";
            $variable2 = 'Je m\'appelle Antoni';

        //Valeur de type int (nombre entier)
            $Age = 17;

        //Valeur de type float (nombre décimal)
            $price = 57.3;

        //Valeur de type bool (booléen true or false)
            $isAuthor = true;
            $isAdministrator = false;

        //Variable de type null
            $noValue = NULL;
        
        //Echo ( ou print ) pour afficher la valeur d'une variable :  echo $nomdelaVariable
            echo $price,"<br>";
          
        //Concaténer = assembler plusieurs valeurs différentes             
            echo 'Bonjour ' . $fullname . ' et bienvenue sur le site ! vous avez ' . $userAge . ' ans et votre billet a couté ' . $price . ' €';

        //$result prend la valeur 150 -> (15 + 5) * 5
            $number = 10;
            $result = ($number + 5) * $number; 

        //Modulo 
            $numberA = 10 % 5; // $numberA prend la valeur 0 car la division tombe juste
            $numberA = 10 % 3; // $numberA prend la valeur 1 car il reste 1

    ?>




    

    </body>

</html>