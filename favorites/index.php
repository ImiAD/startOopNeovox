<?php
require_once 'classes/Favorites.php';
$fav   = new Favorites;
$links = $fav->getFavorites('getLinksItems');
$arts  = $fav->getFavorites('getArticlesItems');
$apps  = $fav->getFavorites('getAppsItems');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>
        header {
            border-bottom: 1px solid black;
            text-align: center;
        }
        div.a {
            float: left;
            text-align: left;
            width: 33%;
        }
    </style>
    <title>Наши рекомендации</title>
</head>
<body>
    <header>
        <h1>Мы рекомендуем</h1>
    </header>
    <div class="a">
        <h2>Полезные сайты</h2>
        <ul>
            <?php
            foreach ($links as $link) {
                foreach ($link as $items) {
                    foreach ($items as $item){
                        echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
                    }
                }
            }
            ?>
        </ul>
    </div>
    <div class="a">
        <h2>Полезные приложения</h2>
        <ul>
            <?php
            foreach ($apps as $app) {
                foreach ($app as $items) {
                    foreach ($items as $item){
                        echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
                    }
                }
            }
            ?>
        </ul>
    </div>
    <div class="a">
        <h2>Полезные статьи</h2>
        <ul>
            <?php
            foreach ($arts as $art) {
                foreach ($art as $items) {
                    foreach ($items as $item){
                        echo "<li><a href='{$item[1]}'>{$item[0]}</a></li>";
                    }
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>