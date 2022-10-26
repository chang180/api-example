<?php
//商店資訊
$mid = $_POST['MerchantID_'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$pos = $_POST['Pos_'];
$url = $_POST['url'];
unset($_POST['key'], $_POST['iv'], $_POST['Pos'], $_POST['url']);
$data1 = http_build_query($_POST);

$edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

$hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;

$hash = strtoupper(hash("sha256", $hashs));

//組成POST資料
$post_str = [
    'MerchantID_' => $mid,
    'PostData_' => $edata1,
    'Pos_' => $pos
];

// curl 結果
$result = curl_(http_build_query($post_str), $url);
$result = json_decode($result['web_info'], true);
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
//商店資訊
$mid = $_POST['MerchantID_'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$pos = $_POST['Pos_'];
$url = $_POST['url'];
unset($_POST['key'], $_POST['iv'], $_POST['Pos'], $_POST['url']);
$data1 = http_build_query($_POST);

$edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

$hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;

$hash = strtoupper(hash("sha256", $hashs));

//組成POST資料
$post_str = [
    'MerchantID_' => $mid,
    'PostData_' => $edata1,
    'Pos_' => $pos
];

// curl 結果
$result = curl_(http_build_query($post_str), $url);
$result = json_decode($result['web_info'], true);

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
        </pre>
    </fieldset>
    <fieldset>
        <legend>API回應訊息:：</legend>
        <pre>
            <?php print_r($result); ?>
        </pre>
    </fieldset>
    <a href="creditcard_agreement_example.php">回本頁</a>
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
