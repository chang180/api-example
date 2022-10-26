<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信用卡交易轉匯 API 範例程式</title>
</head>

<body>
    <h1>信用卡交易轉匯 API 範例</h1>
    <form action="refund_credit_api.php" method="post">
        <fieldset>
            <legend>參數輸入</legend>
            <table border="1">
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="https://ccore.newebpay.com/API/Refund" size="60" required><span style="color:red;">※必填</span></td>
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
                    <td>串接程式版本:</td>
                    <td><input name="Version" value="1.0" maxlength="5"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>受款方金融機構帳號:</td>
                    <td><input type="number" name="AccNo" max="9999999999999999" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>受款方金融機構總行代號:</td>
                    <td><input type="number" name="BankNo" max="999" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>受款方金融機構總行代號:</td>
                    <td><input type="number" name="SubBankCode" max="9999" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>受款方帳戶名稱:</td>
                    <td><input name="AccName" maxlength="30" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>轉匯金額:</td>
                    <td><input type="number" name="RefundAmt" max="9999999999"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>時間戳記:</td>
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="30" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店自訂單號:</td>
                    <td><input name="MerOrderNo" maxlength="30" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>轉匯類別:</td>
                    <td><input name="APIType" maxlength="1" value="2" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>受款方身分證字號</td>
                    <td><input name="Id" maxlength="10"><span style="color:blue;">※轉匯必填，身分證字號與統一編號二擇一</span></td>
                </tr>
                <tr>
                    <td>受款方統一編號</td>
                    <td><input name="UBN" maxlength="8"><span style="color:blue;">※轉匯必填，身分證字號與統一編號二擇一</span></td>
                </tr>
                <tr>
                    <td>轉匯結果通知(選填)</td>
                    <td><input name="NotifyURL" maxlength="100"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>