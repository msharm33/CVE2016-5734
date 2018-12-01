<?php
$searchStr = 'This is a test string.'
$toReplace = "test/e\0";
$replaceWith = $_GET['replacewith'];

echo preg_replace('/'.$toReplace.'/', $replaceWith, $searchStr);
?>
