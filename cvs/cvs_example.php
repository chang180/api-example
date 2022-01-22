<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超商代碼繳費-幕後取號串接 API 範例程式</title>
</head>

<body>
    <h1>超商代碼繳費-幕後取號串接 API 範例</h1>
    <form action="cvs_api.php" method="post">
        <fieldset>
            <legend>參數輸入</legend>
            <table border="1">
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="https://ccore.newebpay.com/API/gateway/cvs" size="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店代號:</td>
                    <td><input name="MerchantID_" maxlength="15" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>key:</td>
                    <td><input name="key" size="32" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>iv:</td>
                    <td><input name="iv" minlength="16" maxlength="16" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>回傳格式:</td>
                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>串接版本:</td>
                    <td><input name="Version" value="1.0" maxlength="3" readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>時間戳記:</td>
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>支付完成回傳網址(選填):</td>
                    <td><input name="NotifyURL" placeholder="您的網址/notify_url.php" maxlength="50"><span style="color:red;"></span></td>
                </tr>
                <tr>
                    <td>繳費截止日期(選填):</td>
                    <td><input name="ExpireDate" type="date" value="" style="width:170px;"></td>
                </tr>
                <tr>
                    <td>繳費截止時間(選填):</td>
                    <td><input name="ExpireTime" type="time" value="" style="width:170px;"></td>
                </tr>
                <tr>
                    <td>商店訂單編號:</td>
                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>訂單金額:</td>
                    <td><input type="number" name="Amt" value="88" min="30" max="20000" style="width:170px;"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商品描述 :</td>
                    <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>付款人電子信箱:</td>
                    <td><input name="Email" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>允許繳費超商(選填):</td>
                    <td><input name="AllowStore" type="text" value="" maxlength="50"></span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <a href="../">回上一頁</a>
</body>

</html>