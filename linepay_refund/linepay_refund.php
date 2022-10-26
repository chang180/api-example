<?php
//串接網址
$api_url = $_POST['url'];
$key = $_POST['key'];
$iv = $_POST['iv'];

//POST參數
$post_str = [
    'MerchantID' => $_POST['MerchantID'],
    'TradeInfo' => $_POST['TradeInfo'],
    'TradeSha' => $_POST['TradeSha'],
    'Version' => $_POST['Version']
];

// curl 結果
$result = curl_(http_build_query($post_str), $api_url);
$result = json_decode($result['web_info'], true);

// 解碼
$parameter = $result['TradeInfo'];

$encrypt = create_aes_decrypt($parameter, $key, $iv);
$data = json_decode($encrypt, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 回傳結果</title>
</head>

<body>
    <fieldset>
        <legend>程式範例：</legend>
        <pre>
//串接網址
$api_url = $_POST['url'];

//POST參數
$post_str = [
    'MerchantID_' => $_POST['MerchantID_'],
    'PostData_' => $_POST['PostData_'],
    'Pos_' => $_POST['Pos_']
];

// curl 結果
$result = curl_(http_build_query($post_str), $api_url);
$result = json_decode($result['web_info'], true);

// 解碼
$parameter = $result['EncryptData'];

$encrypt = create_aes_decrypt($parameter, $key, $iv);
$data = json_decode($encrypt, true);

//curl 函式
function curl_($curl_str = '', $curl_url)
{
    //curl init
    $ch = curl_init();
    //curl set option
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_str);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    //execute
    $result = curl_exec($ch);
    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_errno($ch);
    //close
    curl_close($ch);

    $return_array = [
        'url' => $curl_url,
        'send_parameter' => $curl_str,
        'http_status' => $retcode,
        'curl_error_no' => $curl_error,
        'web_info' => $result
    ];

    return $return_array;
}

// 解密程式
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
        </pre>
    </fieldset>
    <fieldset>
        <legend>API回應訊息:：</legend>
        <h4>curl回傳值：</h4>
        <pre>
            <?php print_r($result); ?>
        </pre>
        <h4>解碼：</h4>
        <pre>
            <?php print_r($data); ?>
        </pre>
    </fieldset>
    <a href="linepay_refund_example.php">回本頁</a>
</body>

</html>

<?php

//curl 函式
function curl_($curl_str = '', $curl_url)
{
    //curl init
    $ch = curl_init();
    //curl set option
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_str);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    //execute
    $result = curl_exec($ch);
    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_errno($ch);
    //close
    curl_close($ch);

    $return_array = [
        'url' => $curl_url,
        'send_parameter' => $curl_str,
        'http_status' => $retcode,
        'curl_error_no' => $curl_error,
        'web_info' => $result
    ];

    return $return_array;
}

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
