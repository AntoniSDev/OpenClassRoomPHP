<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mes cours PHP</title>
</head>

<body>


<?php

//tableau numéroté
//Exemple tableau simple, le 1er élément est à la position 0 -> cassoulet dans notre exemple

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');






echo $recipes[1]; // Cela affichera : Couscous



//tableau associatif
// Une bien meilleure façon de stocker une recette !
$recipe2 = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

//afficher un element en utilisant le 'nom' associé : 
echo $recipe2['title'];


//Les tableaux numérotés permettent de stocker une série d'éléments du même type, comme des prénoms. Chaque élément du tableau contiendra alors un prénom.
//Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments. Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…



//Foreach
// Déclaration du tableau des recettes
$recipes3 = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes3 as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}

//array_key_exists pour vérifier si une clé existe dans le tableau.

//in_array pour vérifier si une valeur existe dans le tableau.

//array_search pour récupérer la clé d'une valeur dans le tableau.

// <?php array_key_exists('cle', $array); ?>

<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}
?>



</body>

</html>