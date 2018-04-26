<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bücherliste</title>
    <link rel="icon" href="../php.png">
    <?php require_once 'index.tpl.php' ?>
</head>

<body>
<div class=".container-fluid">
<?php require_once 'navi.tpl.php' ?>
<?php foreach ($buecher as $buch): ?>
    <h3 class="titel"><?= bereinige($buch->getTitel() ) ?></h3>
    <p class="preis"><?= (float)$buch->getPreis() ?> €</p>
<?php endforeach; ?>
</div>
</body>