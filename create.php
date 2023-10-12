<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        hl>Ajouter une recette</hl>
        <form action="<?php echo ('recipes/post_create.php'); ?>" method="POST">
            <div class="mb-3">
                <label for="title" class="form-laber">Titre de la recette</label>
                <input type=" text" class="form-control" id="title" name="title" aria-describedby="title">
                <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
            </div>
            <div class="mb-3">
                <label for="recipe" class="form-laber"> Description de la recette</label>
                <textarea class=" form-control" placeholder="Seulement du contenu vous appartenant ou libre de droits"></textarea>
            </div> <button type=" submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>

    <?php include_once('footer.php'); ?>
</body>
</html>