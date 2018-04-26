<?php
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;
$template = $action;
$naviLeiste = "";

switch ($action) {
    case 'zeige':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $buch = findeBuch($id);
        break;

    case 'neu':
        if (isset($_POST['titel']) && isset($_POST['preis']) ) {
            $buch = new Buch(
                [
                    'titel' => $_POST['titel'],
                    'preis' => $_POST['preis'],
                ]
            );
            speichereBuch($buch);
        }
        break;

    case 'reset':
        if (isset($_POST['reset']) ) {
            if ($_POST['reset'] === 'ja') resetBuecher();
        }
        break;

    default:
        $buecher = findeBuecher();
        $template = 'liste';
        echo "echo";
}
require_once 'templates/' . $template . '.tpl.php';