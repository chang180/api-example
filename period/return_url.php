<?php
$parameter = $_POST['Result']??$_POST['Period'];

$key = ''; //請輸入key
$iv = ''; //請輸入iv

$period_info=create_aes_decrypt($parameter,$key,$iv);
$data = json_decode($period_info, true);

echo '交易回傳資訊:<br>';
echo '<pre>';
print_r($data);
echo '</pre>';

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
