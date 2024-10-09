<?php
function listHTML($arg, $elements) {
    if (empty($arg) && empty($elements)) {
        return null;
    }

    $html = "<h3>$arg</h3><ul>";
    foreach ($elements as $element) {
        $html .= "<li>$element</li>";
    }
    $html .= "</ul>";

    return $html;
}
echo listHTML("Capitale", ["Paris", "Berlin", "Moscou"]);
?>
