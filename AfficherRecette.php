<?php include('variable.php'); ?>
<?php include('functions.php'); ?>

<?php echo " <h1> Affichage des recettes </h1>";

foreach ($recipes as $recipe) {
    if ($recipe['is_enabled'] == true) {
        echo "<h2>" . $recipe['title'] . '</h2>';
        $recipe_email = $recipe['author'];
        foreach ($users as $user) {
            if ($recipe_email == $user['email']) {
                echo '<em>' . $user['full_name'] . '</em> (' . $user['age'] . ' ans)';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <?php include('header.php'); ?>
    <?php include('footer.php'); ?>
</body>

</html>