<?php

$navi = $_GET['action'];
$eins = "";
$zwei = "";
$drei = "";
$vier = "";

switch ($navi) {
    case "liste":
        $eins = "active";
        break;

    case "zeige":
        $zwei = "active";
        break;

    case "neu":
        $drei = "active";
        break;

    case "reset":
        $vier = "active";
        break;
}

?>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="#">Toller PHP Buchworkshop</a>

<ul id="navi" class="navbar-nav">
    <li class="nav-item <?=$eins;?>"><a class="nav-link" href="index.php?action=liste">Startseite</a></li>
    <li class="nav-item <?=$zwei;?>"><a class="nav-link" href="index.php?action=zeige&id=1">Einzelnes Buch</a></li>
    <li class="nav-item <?=$drei;?>"><a class="nav-link" href="index.php?action=neu">Buch anlegen</a></li>
    <li class="nav-item <?=$vier;?>"><a class="nav-link" href="index.php?action=reset">Bücher zurücksetzen</a></li>
</ul>

</nav>