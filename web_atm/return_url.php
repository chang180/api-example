<?php
$data=json_decode($_POST['Result'],true);
echo '交易回傳資訊:<br>';
echo '<pre>';
echo '$_POST:<br>';
print_r($_POST);
echo '解碼Result:<br>';
echo 'json_decode($_POST["Result"],true):<br>';
print_r($data);
echo '</pre>';