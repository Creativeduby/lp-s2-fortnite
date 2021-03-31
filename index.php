<?php

$Directory = new RecursiveDirectoryIterator("Creativeduby/lp-s2-fortnite");
$Iterator = new RecursiveIteratorIterator($Directory);
$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

?>
