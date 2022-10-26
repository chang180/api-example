<?php
//商店資訊
$mid = $_POST['MerchantID'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];

unset($_POST['key'], $_POST['iv'], $_POST['url']);
ksort($_POST);
$data1 = http_build_query($_POST);

$hashs = "HashKey=" . $key . "&" . $data1 . "&HashIV=" . $iv;

$hash = strtoupper(hash("sha256", $hashs));
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
$url = $_POST['url'];

//生成請求字串
unset($_POST['key'], $_POST['iv'], $_POST['url']);
ksort($_POST);
$data1 = http_build_query($_POST);

//壓碼
$hashs="HashKey=".$key."&".$data1."&HashIV=".$iv;
$hash=strtoupper(hash("sha256",$hashs));
    </pre>
    </fieldset>
    <form action="get_transaction_info.php" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="<?= $url; ?>" size="60" required></td>
                </tr>
                <tr>
                    <td>商店代號: </td>
                    <td><input name="MerchantID" value="<?= $mid; ?>" readonly></td>
                </tr>
                <tr>
                    <td>支付方式: </td>
                    <td><input name="PaymentType" value="<?= $_POST['PaymentType']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>時間戳記: </td>
                    <td><input name="TimeStamp" value="<?= $_POST['TimeStamp']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>串接程式版本 : </td>
                    <td><input name="Version" value="<?= $_POST['Version']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>交易日期: </td>
                    <td><input name="TransactionDate" type="date" value="<?= $_POST['TransactionDate']; ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">檢查碼 :</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="CheckValue" cols="100" rows="2" maxlength="255"><?= $hash; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2"><input type=submit value="交易測試"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <a href="get_transaction_info_example.php">回本頁</a>

</body>

</html>