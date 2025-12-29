<?php
//curl 函式
function curl_($curl_str, $curl_url, $original_hostname = null)
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
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    
    // 如果提供了原始主機名稱，設定 Host header 以確保虛擬主機正確路由
    if ($original_hostname) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Host: ' . $original_hostname
        ]);
    }
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

//串接網址
$api_url = $_POST['url'];

//POST參數
$post_str = [
    'MerchantID' => $_POST['MerchantID'],
    'PaymentType' => $_POST['PaymentType'],
    'TimeStamp' => $_POST['TimeStamp'],
    'Version' => $_POST['Version'],
    'TransactionDate' => $_POST['TransactionDate'],
    'CheckValue' => $_POST['CheckValue'],
];

// 解析 URL 取得主機名稱，處理 Docker 容器內的情況
$parsed_url = parse_url($api_url);
$hostname = isset($parsed_url['host']) ? $parsed_url['host'] : '';
$actual_url = $api_url; // 實際使用的 URL

if ($hostname) {
    $resolved_ip = gethostbyname($hostname);
    
    // 如果解析到 127.0.0.1，且可能是在 Docker 容器內執行
    if ($resolved_ip === '127.0.0.1' || $resolved_ip === '::1') {
        // 檢查是否在 Docker 容器內
        $is_docker = file_exists('/.dockerenv') || 
                     (file_exists('/proc/self/cgroup') && strpos(file_get_contents('/proc/self/cgroup'), 'docker') !== false);
        
        if ($is_docker) {
            // 在 Docker 容器內，使用 host.docker.internal 訪問主機
            $parsed_url['host'] = 'host.docker.internal';
            // 重建 URL
            $scheme = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
            $user = isset($parsed_url['user']) ? $parsed_url['user'] : '';
            $pass = isset($parsed_url['pass']) ? ':' . $parsed_url['pass'] : '';
            $user_pass = ($user || $pass) ? $user . $pass . '@' : '';
            $host = $parsed_url['host'];
            $port = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
            $path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
            $query = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
            $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';
            $actual_url = $scheme . $user_pass . $host . $port . $path . $query . $fragment;
        }
    }
}

// curl 結果
// 如果 URL 被修改了（例如改用 host.docker.internal），傳遞原始主機名稱以設定 Host header
$original_hostname_for_header = ($actual_url !== $api_url && $hostname) ? $hostname : null;
$curl_result = curl_(http_build_query($post_str), $actual_url, $original_hostname_for_header);

// 解析 JSON 回應
$result = json_decode($curl_result['web_info'], true);
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
    'MerchantID' => $_POST['MerchantID'],
    'PaymentType' => $_POST['PaymentType'],
    'TimeStamp' => $_POST['TimeStamp'],
    'Version' => $_POST['Version'],
    'TransactionDate' => $_POST['TransactionDate'],
    'CheckValue' => $_POST['CheckValue'],
];

// curl 結果
$result = curl_(http_build_query($post_str), $api_url);
$result = json_decode($result['web_info'], true);

//curl 函式
function curl_($curl_str, $curl_url)
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
        <legend>API回應訊息：</legend>
        <pre>
            <?php print_r($result); ?>
        </pre>
    </fieldset>
    <a href="get_transaction_info_example.php">回本頁</a>
</body>

</html>
