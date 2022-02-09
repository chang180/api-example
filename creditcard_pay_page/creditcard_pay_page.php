<?php
//串接網址
$api_url = $_POST['url'];

//POST參數
$post_str = [
    'MerchantID' => $_POST['MerchantID'],
    'TradeInfo' => $_POST['TradeInfo'],
    'TradeSha' => $_POST['TradeSha'],
    'Version' => $_POST['Version'],
];

// curl 結果
$result = curl_(http_build_query($post_str), $api_url);
$result = json_decode($result['web_info'], true);
$token = $result['Result']['PassToken'];
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
    <div>
        <fieldset>
            <legend>嵌入式支付頁</legend>
            <div id="content">
                <?php if (!empty($token)) {; ?>
                    <script src="https://ccore.newebpay.com/js/normal_embed_pay.js" data-PassToken="<?= $token; ?>"> </script>
                <?php }; ?>
                <button id="mpg_submit">送出</button>
            </div>
        </fieldset>
        <fieldset>
            <legend>程式範例：</legend>
            <pre>
//串接網址
$api_url = $_POST['url'];

//POST參數
$post_str = [
    'MerchantID' => $_POST['MerchantID'],
    'TradeInfo' => $_POST['TradeInfo'],
    'TradeSha' => $_POST['TradeSha'],
    'Version' => $_POST['Version'],
];

// curl 結果
$result = curl_(http_build_query($post_str), $api_url);
$result = json_decode($result['web_info'], true);
$token = $result['Result']['PassToken'];

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

&lt;script>
    document.getElementById('mpg_submit').addEventListener('click', function() {
        window.iframeSubmit()
    });
    
    window.iframeSubmit = function () {
                mpg_iframe.contentWindow.postMessage('iframeSubmit', domain);
            };

    window.addEventListener("message", function(e) {
        if (e.data.Status == "SUCCESS") {
            var TokenizedCard = e.data.Result.TokenizedCard; //取得 TokenizedCard
            //自行撰寫接收交易結果後續程式，將 TokenizedCard 送到後端做幕後授權的參數
            alert('交易成功')
        } else {
            //自行撰寫顯示錯誤訊息
            alert('交易失敗')
        }
    });
&lt;/script>
        </pre>
        </fieldset>
        <fieldset>
            <legend>API回應訊息:：</legend>
            <pre>
            <?php print_r($result); ?>
        </pre>
        </fieldset>
        <a href="creditcard_pay_page_example.php">回本頁</a>
</body>

</html>
<script>
    document.getElementById('mpg_submit').addEventListener('click', function() {
        window.iframeSubmit()
    });

    window.iframeSubmit = function() {
        mpg_iframe.contentWindow.postMessage('iframeSubmit', domain);
    };

    window.addEventListener("message", function(e) {
        if (e.data.Status == "SUCCESS") {
            var TokenizedCard = e.data.Result.TokenizedCard; //取得 TokenizedCard
            //自行撰寫接收交易結果後續程式，將 TokenizedCard 送到後端做幕後授權的參數
            alert('交易成功')
            document.getElementById('content').innerHTML = '交易完成'
        } else if(typeof e.data.Status != 'undefined') {
            //自行撰寫顯示錯誤訊息
            alert(e.data.Message)
        }
    });
</script>

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
