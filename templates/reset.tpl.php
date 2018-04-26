<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bücher zurücksetzen?</title>
    <link rel="icon" href="../php.png">
    <?php require_once 'index.tpl.php' ?>
</head>

<body>
<div class=".container-fluid">
    <?php require_once 'navi.tpl.php' ?>
    <?php
    if(isset($_POST['reset']) && $_POST['reset'] === 'ja')
        redirect('index.php?action=liste');
    ?>
    <?php if (isset($_POST['reset'])): ?>
        <h4>Falsche Eingabe!</h4>
        <form action="index.php?action=reset" method="post">
            <input type="text" name="reset" id="reset" placeholder="'ja' eingeben" required><br>
            <input type="submit" value="absenden">
        </form>
    <?php else: ?>
        <h4>Bücherliste wirklich zurücksetzen?</h4>
        <form action="index.php?action=reset" method="post">
            <input type="text" name="reset" id="reset" placeholder="'ja' eingeben" required><br>
            <input type="submit" value="absenden">
        </form>
    <?php endif; ?>
</div>
</body>