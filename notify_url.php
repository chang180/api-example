<?php
// put $_POST into file log
$log="log";
$file=fopen($log, 'w');
file_put_contents($log, $_POST);
fclose($file);

