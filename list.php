<?php
$fileList = glob('uploads/*.json');
$num = 0;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список тестов</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="alert alert-success" role="alert">
    <?php
        foreach ($fileList as $key => $file) 
        {
            $num++;
            $fileTest = file_get_contents($file);
            $decodeFile = json_decode($fileTest, true);
                echo "<ul class=\"nav\"><li class=\"nav-item\"><a class=\"nav-link\" href=\"test.php?test=$key\">Тест №: $num</a></li></ul>";
        }
    ?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="admin.php">Загрузить тест</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="list.php">Список тестов</a>
        </li>
    </ul>
</div>
</body>
</html>