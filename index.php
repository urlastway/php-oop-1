<?php 

require_once __DIR__ . '/muvies.php';


$muvies = [
    new Muvies('Spiderman', 2002, 'Azione', 120),
    new Muvies('Hunger Games', 2012, 'Azione', 126),
    new Muvies('transformers', 2004, 'Azione', 167),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php foreach($muvies as $muvie) { ?>
            <div class="container" style="padding: 20px">
                <h1><?= $muvie->title; ?><h1>
                <p style="font-weight: 300; font-size: 22px"><?= $muvie->year; ?><p>
                <p style="font-weight: 300; font-size: 22px"><?= $muvie->gener; ?><p>
                <p style="font-weight: 300; font-size: 22px"><?= $muvie->duration; ?><p>
            </div>           
        <?php } ?>
    </main>
</body>
</html>