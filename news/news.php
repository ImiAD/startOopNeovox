<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Итераторы</title>
</head>
<body>

    <?php
        require_once 'NewsDB.php';
        $news = new NewsDB();
        foreach ($news as $key => $value):
    ?>
    <p><?= "$key => $value" ?></p>
    <?php endforeach ?>
</body>
</html>