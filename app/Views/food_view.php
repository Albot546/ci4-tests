<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= esc($title);?></h1>
    
    <ul>
        <?php foreach ($items as $item) : ?>
        <li><?= $item; ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>