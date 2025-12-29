<?php
//參數
$parameter = '611bfb0edb4ef66413d5058e0ec5e6f97025938c86f1828244b028c144c6f509fe092ba82cc89b0071bf4e5bf3ecd79eacec8fa7c2453ca43217a29c82b51fbb77bf6896a30d8d4bec52c010c3bb5e8c44d6455079f1697d331fbf144b909a249261b4f0804549f1d0b61951467cac210a4cc384bb409ac0e8bb1651044c602d0a05ed788c56f2233cc43107ba39ebc136d8db9b440a52ca8d47fb194749d87e3e0b8d374300c453c2427b1b783dee8321adc32ce9f1344dd03e0298740d0ff020efd3322c9829cd64bc0edb7fa7b550ca77bc8ac838d7e0bd5d23a43603b8c350577831c6a7b72e3c0d833ac7492370272ea0a5ed76f3fbe2f15a59daf49b99e0750d176685e6a2a7e44c234e57515a8b0ea6785363250bc22b1db2896d612212a8a994fc4fb8622d1f9c11ae08fe4e75f4cbd7c8317e1ef82128441b099672d90bf556abdc6c7dc89ff94e56a67e76ca9d8b3fc33fbedd041aa54018921a5afc6fdc7e4d3289c9a8ff8bcecbda58335f888473a2217cfb1a72fe836d5a3830c3877e9f742622b6acf79920e411725e9e73bd5fc96be7c726522279f8fa0ee49cfc1769f6c0a24d50beede16cf23e7eb15da8654063427d1557dfed88cf700f22430c158d622f3b73d89f36906d0ca890b4496617634467035e79abe95d01eb92f0660ccf79cc697814a70c935f793c9dc61ed94ece9be939de9d6261196116';


$key = 'LNc1Vs6VEv2HJoilYUVg4qsGA7ZW1fan'; //請輸入key
$iv = 'C7yiNd9sBES4SxpP'; //請輸入iv

$trade_info=create_aes_decrypt($parameter,$key,$iv);
// $data = json_decode($trade_info, true);
$data = parse_str($trade_info, $data_arr);

echo '交易回傳資訊:<br>';
echo '<pre>';
print_r($data_arr);
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
