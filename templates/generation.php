<?php
require_once "mysqlConnect.php";

function getArticles($mysqli){
    $query = "SELECT * FROM articles";

    $result = $mysqli->query($query);

    if(!$result) {
        die('Ошибка запроса: ' . $mysqli->error);
    }

    $articles = $result->fetch_all(MYSQLI_ASSOC);

    return $articles;
}

?>