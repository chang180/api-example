<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>參數轉換</title>
</head>

<body>
    <?php
    //商店資訊
    $mid = $_POST['UID_'];
    $hash_key = $_POST['key'];
    $hash_iv = $_POST['iv'];
    $url = $_POST['url'];
    $total_count=count($_POST['Amt']); //總筆數
    $total_amount=array_sum($_POST['Amt']); //總金額
    $data=[];

    //授權詳細資料(Detail)
    foreach($_POST['MerchantOrderNo'] as $key => $value){
        $data[$key]=array(
            'MerchantOrderNo' => $value,
            'Amt' => $_POST['Amt'][$key],
            'ProdDesc' => $_POST['ProdDesc'][$key],
            'PayerEmail' => $_POST['PayerEmail'][$key],
            'Type' => 2,
            'TokenTerm' => $_POST['TokenTerm'][$key],
            'TokenValue' => $_POST['TokenValue'][$key],
        );
    }

    //組成EncryptData_參數
    $encrypt_data = array(
        'NotifyURL' => $_POST['NotifyURL'],
        'TimeStamp' => $_POST['TimeStamp'],
        'TotalCount' => $total_count,
        'TotalAmt' => $total_amount,
        'BatchNo' => $_POST['BatchNo'],
        'Detail' => $data,
    );
    $data1 = json_encode($encrypt_data);
    
    $str = gzencode($data1); // 進行 gz 壓縮

    //設定加密模式
    $edata1 = bin2hex(openssl_encrypt($str, "AES-256-CBC", $hash_key, OPENSSL_RAW_DATA, $hash_iv));
    //壓碼
    $hashs = "HashKey=" . $hash_key . "&" . $edata1 . "&HashIV=" . $hash_iv;
    $hash = strtoupper(hash("sha256", $hashs));

    ?>
    <fieldset>
        <legend>程式範例：</legend>
        <pre>
    //商店資訊
    $mid = $_POST['UID_'];
    $hash_key = $_POST['key'];
    $hash_iv = $_POST['iv'];
    $url = $_POST['url'];
    $total_count=count($_POST['Amt']); //總筆數
    $total_amount=array_sum($_POST['Amt']); //總金額
    $data=[];

    //授權詳細資料(Detail)
    foreach($_POST['MerchantOrderNo'] as $key => $value){
        $data[$key]=array(
            'MerchantOrderNo' => $value,
            'Amt' => $_POST['Amt'][$key],
            'ProdDesc' => $_POST['ProdDesc'][$key],
            'PayerEmail' => $_POST['PayerEmail'][$key],
            'Type' => 2,
            'TokenTerm' => $_POST['TokenTerm'][$key],
            'TokenValue' => $_POST['TokenValue'][$key],
        );
    }

    //組成EncryptData_參數
    $encrypt_data = array(
        'NotifyURL' => $_POST['NotifyURL'],
        'TimeStamp' => $_POST['TimeStamp'],
        'TotalCount' => $total_count,
        'TotalAmt' => $total_amount,
        'BatchNo' => $_POST['BatchNo'],
        'Detail' => $data,
    );
    $data1 = json_encode($encrypt_data);
    
    $str = gzencode($data1); // 進行 gz 壓縮

    //設定加密模式
    $edata1 = bin2hex(openssl_encrypt($str, "AES-256-CBC", $hash_key, OPENSSL_RAW_DATA, $hash_iv));
    //壓碼
    $hashs = "HashKey=" . $hash_key . "&" . $edata1 . "&HashIV=" . $hash_iv;
    $hash = strtoupper(hash("sha256", $hashs));
    </pre>
    </fieldset>

    <form action="creditcard_batch.php" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="<?=$url;?>" size="60" required></td>
                </tr>
                <tr>
                    <td>商店代號: </td>
                    <td><input name="UID_" value="<?= $mid; ?>" readonly></td>
                </tr>
                <tr>
                    <td>key: </td>
                    <td><input name="key" value="<?= $hash_key; ?>" readonly></td>
                </tr>
                <tr>
                    <td>iv: </td>
                    <td><input name="iv" value="<?= $hash_iv; ?>" readonly></td>
                </tr>
                <tr>
                    <td>串接程式版本:</td>
                    <td><input name="Version_" value="<?= $_POST['Version']; ?>"></td>
                </tr>
                <tr>
                    <td>格式:</td>
                    <td><input name="RespondType_" value="<?= $_POST['RespondType_']; ?>"></td>
                </tr>
                <tr>
                    <td>雜湊資料:</td>
                    <td><input name="HashData_" value="<?= $hash; ?>"></td>
                </tr>
                <tr>
                    <td>壓縮類型:</td>
                    <td><input name="Encoding_" value="<?= $_POST['Encoding_']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">壓縮加密資料 :</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="EncryptData_" cols="100" rows="10"><?= $edata1; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2"><input type=submit value="交易測試"></td>

                </tr>
            </table>
        </fieldset>
    </form>
    <a href="creditcard_batch_example.php">回本頁</a>

</body>

</html>