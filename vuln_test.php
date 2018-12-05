<?php
    $searchStr = 'This is a test string.';
    $toReplace = "test";
    $replaceWith = "ls";
    echo preg_replace("/" . $toReplace . "/", $replaceWith, $searchStr);
?>
