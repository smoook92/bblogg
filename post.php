<?php

require_once "templates/generation.php";

if(!isset ($_GET['id'])){
    die("Не указан идентификатор статьи.");
}

$id = intval($_GET['id']);

$query = "SELECT * FROM articles WHERE id = $id";
$result = $mysqli->query($query);

if(!$result) {
    die("Ошибка запроса: " . $mysqli->error);
}

$article = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <h1 class="mt-5"><?php echo $article['title']; ?></h1>
        <p><?php echo $article['text']; ?></p>
        <a href="index.php" class="btn btn-primary">Вернуться на главную</a>
    </div>

</body>
</html>