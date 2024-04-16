<?php
$chemin_courant = './';
$element =glob($chemin_courant . '*', GLOB_MARK);

foreach ($element as $element){
    echo basename($element) . "<br>";
}
?>
