<?php
$parameter = $_POST['Period']??$_POST['Result'];

$key = ''; //請輸入key
$iv = ''; //請輸入iv

$period_info=create_aes_decrypt($parameter,$key,$iv);
$data = json_decode($period_info, true);

$log="log";
$file=fopen($log, 'w');
file_put_contents($log, $data);
fclose($file);

//交易資料經 AES 解密後取得
function create_aes_decrypt($parameter = "", $key = "", $iv = "")
{
    return strippadding(openssl_decrypt(
        hex2bin($parameter),
        'AES-256-CBC',
        $key,
        OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,
        $iv
    ));
}

function strippadding($string)
{
    $slast = ord(substr($string, -1));
    $slastc = chr($slast);
    if (preg_match("/$slastc{" . $slast . "}/", $string)) {
        $string = substr($string, 0, strlen($string) - $slast);
        return $string;
    } else {
        return false;
    }
}
