<?php
$searchStr = 'This is a test string. asas asdas dads . asd.asd a.sd asd.as. das$
$toReplace = "test/e\0";
$replaceWith = $_GET['replacewith'];

echo preg_replace('/'.$toReplace.'/', $replaceWith, $searchStr);
?>
