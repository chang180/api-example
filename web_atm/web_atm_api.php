<?php
//商店代號
$mid = $_POST['MerchantID_'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];
unset($_POST['key'], $_POST['iv'], $_POST['url']);
$data1 = http_build_query($_POST);

$edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

$hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;

$hash = strtoupper(hash("sha256", $hashs));

//組成POST資料
$post_str = [
    'MerchantID_' => $mid,
    'PostData_' => $edata1,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 參數轉換</title>
</head>

<body>
    <fieldset>
        <legend>程式範例：</legend>
        <pre>
//商店資訊
$mid = $_POST['MerchantID'];
$key = $_POST['key'];
$iv = $_POST['iv'];

//生成請求字串
unset($_POST['key'], $_POST['iv'],$_POST['url']);
$data1 = http_build_query($_POST);

//將請求字串加密
$edata1=bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

//壓碼
$hashs="HashKey=".$key."&".$edata1."&HashIV=".$iv;
$hash=strtoupper(hash("sha256",$hashs));

//組成POST資料
$post_str = [
    'MerchantID_' => $merchant_ID,
    'PostData_' => $encrypt_str
];
    </pre>
    </fieldset>
    <form action="web_atm.php" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="<?=$url;?>" size="60" required></td>
                </tr>
                <tr>
                    <td>商店代號: </td>
                    <td><input name="MerchantID_" value="<?= $mid; ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">加密資料:</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="PostData_" cols="100" rows="7"><?= $edata1; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2"><input type=submit value="交易測試"></td>

                </tr>
            </table>
        </fieldset>
    </form>
    <a href="credit_card_example.php">回本頁</a>

</body>

</html>