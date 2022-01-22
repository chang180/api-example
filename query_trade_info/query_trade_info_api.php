<?php
//商店資訊
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];

//產生CheckValue
$check_value = ['Amt'=>$_POST['Amt'], 'MerchantID'=>$_POST['MerchantID'], 'MerchantOrderNo'=>$_POST['MerchantOrderNo']];
$data1 = http_build_query($check_value);

//壓碼
$hashs = "IV=" . $iv . "&" . $data1 . "&Key=" . $key;
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
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];

//產生CheckValue
$check_value = ['Amt'=>$_POST['Amt'], 'MerchantID'=>$_POST['MerchantID'], 'MerchantOrderNo'=>$_POST['MerchantOrderNo']];
$data1 = http_build_query($check_value);

//壓碼
$hashs = "IV=" . $iv . "&" . $data1 . "&Key=" . $key;
$hash = strtoupper(hash("sha256", $hashs));

    </pre>
    </fieldset>
    <form action="query_trade_info.php" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="<?=$url;?>" size="60" required></td>
                </tr>
                <tr>
                    <td>商店代號: </td>
                    <td><input name="MerchantID" value="<?= $_POST['MerchantID']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>串接程式版本: </td>
                    <td><input name="Version" value="<?= $_POST['Version']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>回傳格式: </td>
                    <td><input name="RespondType" value="<?= $_POST['RespondType']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>時間戮記: </td>
                    <td><input name="TimeStamp" value="<?= $_POST['TimeStamp']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>商店訂單編號: </td>
                    <td><input name="MerchantOrderNo" value="<?= $_POST['MerchantOrderNo']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>訂單金額: </td>
                    <td><input name="Amt" value="<?= $_POST['Amt']; ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">檢查碼:</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="CheckValue" cols="100" rows="3"><?= $hash; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2"><input type=submit value="交易測試"></td>

                </tr>
            </table>
        </fieldset>
    </form>
    <a href="query_trade_info_example.php">回本頁</a>

</body>

</html>