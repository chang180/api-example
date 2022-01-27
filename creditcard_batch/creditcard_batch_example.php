<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>批次約定信用卡付款授權 API 範例</title>
</head>

<body>
    <div class="container">
        <h1>批次約定信用卡付款授權 API 範例</h1>
        <form action="creditcard_batch_api.php" method="post">
            <fieldset>
                <legend>參數輸入</legend>
                <table border="1">
                    <tr>
                        <td>API網址：</td>
                        <td><input name="url" value="https://ccore.newebpay.com/API/CreditCardBatch/create" size="60" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>商店代號:</td>
                        <td><input name="UID_" maxlength="15" required><span style="color:red;">※必填</span></td>
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
                        <td>格式</td>
                        <td><input name="RespondType_" value="JSON" maxlength="15" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>壓縮類型 :</td>
                        <td><input name="Encoding_" value="gzip" maxlength="10" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>授權結果通知網址 :</td>
                        <td><input name="NotifyURL" maxlength="50" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>時間戳記 :</td>
                        <td><input name="TimeStamp" maxlength="50" value="<?= time(); ?>" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>批號 :</td>
                        <td><input name="BatchNo" max="999999999999999" value="<?= date("YmdHis"); ?>" required><span style="color:red;">※必填</span></td>
                    </tr>
                </table>
                <br>
                <fieldset>
                    <legend>批次訂單建立</legend>
                    <table id="order" border="1">
                        <tr>
                            <th>商店訂單編號<span style="color:red;">※必填</span></th>
                            <th>訂單金額<span style="color:red;">※必填</span></th>
                            <th>商品資訊<span style="color:red;">※必填</span></th>
                            <th>付款人電子信箱<span style="color:red;">※必填</span></th>
                            <th>約定信用卡付款之付款人綁定資料<span style="color:red;">※必填</span></th>
                            <th>約定信用卡付款授權Token<span style="color:red;">※必填</span></th>
                        </tr>
                        <tr>
                            <td><input name="MerchantOrderNo[]" value="example<?= time(); ?>" maxlength="30" required></td>
                            <td><input type="number" name="Amt[]" value="88" max="9999999999"></td>
                            <td><input name="ProdDesc[]" value="商品一批" maxlength="50"></td>
                            <td><input name="PayerEmail[]" type="email" maxlength="50" required></td>
                            <td><input name="TokenTerm[]" maxlength="20" required></td>
                            <td><textarea name="TokenValue[]" cols="30" rows="3" maxlength="300" required></textarea></td>
                        </tr>
                    </table>
                    <input id="add_order" type="button" value="增加批次訂單"></input>
                </fieldset>
                <input type="submit" value="參數轉換">
            </fieldset>
        </form>
    </div>
</body>
<script>
    document.getElementById("add_order").addEventListener("click", function() {
        document.getElementById("order").insertAdjacentHTML("beforeend",
            `
        <tr>
            <td><input name="MerchantOrderNo[]" maxlength="30" required></td>
            <td><input type="number" name="Amt[]" max="9999999999"></td>
            <td><input name="ProdDesc[]" maxlength="50"></td>
            <td><input name="PayerEmail[]" type="email" maxlength="50" required></td>
            <td><input name="TokenTerm[]" maxlength="20" required></td>
            <td><textarea name="TokenValue[]" cols="30" rows="3" maxlength="300" required></textarea></td>
        </tr>
        `)

    })
</script>

</html>