<?php

require_once "templates/generation.php";

$articles = getArticles($mysqli);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <h1 class="mt-5">Блог</h1>
        <div class="list-group">
            <?php foreach($articles as $article): ?>
                <a href="post.php?id=<?php echo $article['id']; ?>" class="list-group-item list-group-item-action">
                    <?php echo $article['title']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>