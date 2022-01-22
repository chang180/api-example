<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 參數轉換</title>
</head>

<body>
    <?php
    //商店資訊
    $mid = $_POST['MerchantID'];
    $key = $_POST['key'];
    $iv = $_POST['iv'];
    $url = $_POST['url'];
    unset($_POST['key'], $_POST['iv'], $_POST['url']);
    $data1 = http_build_query($_POST);

    //設定加密模式
    $edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

    //壓碼
    $hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
    $hash = strtoupper(hash("sha256", $hashs));

    ?>
    <fieldset>
        <legend>程式範例：</legend>
        <pre>
//商店資訊
$mid = $_POST['MerchantID'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];
unset($_POST['key'], $_POST['iv'], $_POST['url']);
$data1 = http_build_query($_POST);

//設定加密模式
$edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

//壓碼
$hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
$hash = strtoupper(hash("sha256", $hashs));
    </pre>
    </fieldset>

    <form action="period_modify.php" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="<?=$url;?>" size="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店代號: </td>
                    <td><input name="MerchantID_" value="<?= $mid; ?>" readonly></td>
                </tr>
                <tr>
                    <td>key: </td>
                    <td><input name="key" value="<?= $key; ?>" readonly></td>
                </tr>
                <tr>
                    <td>iv: </td>
                    <td><input name="iv" value="<?= $iv; ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">加密後參數:</td>

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
    <a href="period_example.php">回本頁</a>

</body>

</html>