<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信用卡-請退款 API 範例程式</title>
</head>

<body>
    <h1>信用卡-請退款 API 範例</h1>
    <form action="creditcard_close_api.php" method="post">
        <fieldset>
            <legend>參數輸入</legend>
            <table border="1">
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="https://ccore.newebpay.com/API/CreditCard/Close" size="60" required><span style="color:red;">※必填</span></td>
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
                    <td>串接程式版本:</td>
                    <td><input name="Version" value="1.0" maxlength="3"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>授權金額:</td>
                    <td><input type="number" name="Amt" max="9999999999"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>時間戳記:</td>
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店訂單編號:</td>
                    <td><input name="MerchantOrderNo" maxlength="30"><span style="color:red;">※與藍新金流交易序號二擇一填入</span></td>
                </tr>
                <tr>
                    <td>藍新金流交易序號:</td>
                    <td><input name="TradeNo" maxlength="17"><span style="color:red;">※與商店訂單編號二擇一填入</span></td>
                </tr>
                <tr>
                    <td>單號類別</td>
                    <td><input type="number" name="IndexType" max="9"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>請款或退款</td>
                    <td><input type="number" name="CloseType" max="9"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>取消請款或退款(選填)</td>
                    <td><input type="number" name="Cancel" max="9"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>