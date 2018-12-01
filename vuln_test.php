<?php
$searchStr = 'This is a test string.';
$toReplace = "/".$_GET['toreplace']."/";
$replaceWith = $_GET['replacewith'];

echo preg_replace($toReplace, $replaceWith, $searchStr);
?>
