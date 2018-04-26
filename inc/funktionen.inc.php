<?php
function bereinige($benutzerEingabe, $encoding = 'UTF-8') {
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url) {
    header('Location: ' . $url);
    exit;
}

function resetBuecher() {
    # Setzt die Bücher zurück:
    $buecher = [];
    $buecher[] = new Buch(
        [
            'titel' => 'Der Graf von Monte Christo',
            'preis' => 9.95,
        ]
    );

    $buecher[] = new Buch(
        [
            'titel' => 'Per Anhalter durch die Galaxis',
            'preis' => 7.95,
        ]
    );

    $file = fopen('files/buecher.txt', 'w');
    fwrite($file, serialize($buecher) );
    fclose($file);
}

function findeBuecher() {
    # Lädt alle Bücher aus der Textdatei:
    $file = fopen('files/buecher.txt', 'r');
    $buecher = unserialize(fread($file, filesize('files/buecher.txt') ) );
    fclose($file);

    return $buecher;
}

function findeBuch($id) {
    # Gibt nur das Buch mit $id zurück:
    $buecher = findeBuecher();

    $buch = null;
    if (isset($buecher[$id]) ) {
        $buch = $buecher[$id];
    }

    return $buch;
}

function speichereBuch(Buch $buch) {
    # Fügt ein neues Buch hinzu und speichet es in der Textdatei:
    $buecher = findeBuecher();
    $buecher[] = $buch;

    $file = fopen('files/buecher.txt', 'w');
    fwrite($file, serialize($buecher) );
    fclose($file);
}
