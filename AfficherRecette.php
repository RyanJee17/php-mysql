<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : Prendre une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ]
];

echo " <h1> Affichage des recettes </h1>";

foreach ($recipes as $recipe) {
    if ($recipe['is_enabled'] == true) {
        echo "<h2>" . $recipe['title'] . ' </h2>' . $recipe['recipe'] . ' <br> <em>' . $recipe['author'] . '</em><br>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <ul>

    </ul>
</body>

</html>