<?php
// $parameter = $_POST['TradeInfo'];
$parameter = '02ff60f85f47397514b7eb4185ba43dec9019bfec76cf67c920aa8852e230350';

$key = '73NrCLjXqflCNLvu57ib1mzKrQPfOKrg'; //請輸入key
$iv = 'CvgDhDR3UH54p7ZP'; //請輸入iv

$trade_info=create_aes_decrypt($parameter,$key,$iv);
$data = json_decode($trade_info, true);

echo '交易回傳資訊:<br>';
echo '<pre>';
print_r($data);
echo '</pre>';

//交易資料經 AES 解密後取得 TradeInfo
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
