<?php
//商店資訊
$mid = $_POST['MerchantID'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];
$fundtime = str_replace('-', '', $_POST['FundTime']);

$data1 = http_build_query([
    "FundTime" => $fundtime,
    "MerchantID" => $mid,
    "TimeStamp" => $_POST['TimeStamp']
]);

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
$fundtime = str_replace('-', '', $_POST['FundTime']);

//生成請求字串
$data1 = http_build_query([
    "FundTime" => $fundtime,
    "MerchantID" => $mid,
    "TimeStamp" => $_POST['TimeStamp']
]);

//壓碼
$hashs="HashKey=".$key."&".$data1."&HashIV=".$iv;
$hash=strtoupper(hash("sha256",$hashs));
    </pre>
    </fieldset>
    <form action="report_refund.php" method="post">
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
                    <td>撥款提領日期: </td>
                    <td><input name="FundTime" value="<?= $fundtime; ?>" readonly></td>
                </tr>
                <tr>
                    <td>時間戳記: </td>
                    <td><input name="TimeStamp" value="<?= $_POST['TimeStamp']; ?>" readonly></td>
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
    <a href="report_refund_example.php">回本頁</a>

</body>

</html>