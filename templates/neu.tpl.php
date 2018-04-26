<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eintrag anlegen</title>
    <link rel="icon" href="../php.png">
    <?php require_once 'index.tpl.php' ?>
</head>

<body>
<div class=".container-fluid">
    <?php require_once 'navi.tpl.php' ?>
    <?php if (isset($_POST['titel']) && isset($_POST['preis']) ): ?>
        Der Eintrag wurde gespeichert:<br>
        <b>Titel: </b> <?= $_POST['titel']?><br>
        <b>Preis: </b> <?= $_POST['preis']?>  €

    <?php else: ?>
    <form action="index.php?action=neu" method="post">
        <input type="text" name="titel" id="titel" placeholder="Titel" required><br>
        <input type="number" name="preis" id="preis" placeholder="Preis" maxlength="4" min="0" step="0.01" required><br>
        <input type="submit" value="speichern">
    </form>
    <?php endif; ?>
</div>
</body>
</html>
