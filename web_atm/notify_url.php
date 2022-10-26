<?php
$log="log";
$file=fopen($log, 'w');
file_put_contents($log, $_POST);
fclose($file);
