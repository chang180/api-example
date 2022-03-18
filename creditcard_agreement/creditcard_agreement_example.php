<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>約定信用卡付款授權 API 範例</title>
</head>

<body>
    <div class="container">
        <h1>約定信用卡付款授權 API 範例</h1>
        <ul>
            <li>
                <a href="#" class="payment">幕前模式</a>
                <div class="payment-content" hidden>
                    <!-- 幕前模式 -->
                    <form action="creditcard_agreement_api.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/MPG/mpg_gateway" size="60" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店代號:</td>
                                    <td><input name="MerchantID" maxlength="15" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="2.0" maxlength="5"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>3D 交易 :</td>
                                    <td><input name="P3D" value="0" maxlength="5"><span style="color:blue;">※若為 3D 交易，需傳送 NotifyURL 及 ReturnURL。</span></td>
                                </tr>
                                <tr>
                                    <td>語系(選填):</td>
                                    <td><input name="LangType" maxlength="5"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式</td>
                                    <td><input name="RespondType" value="JSON" maxlength="6" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>訂單金額:</td>
                                    <td><input type="number" name="Amt" value="88" max="9999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>支付完成返回商店網址:(選填)</td>
                                    <td><input name="ReturnURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>支付通知網址:(選填)</td>
                                    <td><input name="NotifyURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>返回商店網址:(選填)</td>
                                    <td><input name="ClientBackURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>商品資訊:</td>
                                    <td><input name="ItemDesc" value="商品一批" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱:</td>
                                    <td><input name="Email" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱是否開放修改(選填):</td>
                                    <td><input name="EmailModify" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款授權交易:</td>
                                    <td><input name="CREDITAGREEMENT" type="number" value="1" max="9" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡分期付款啟用:</td>
                                    <td><input name="Inst" type="number" max="99"><span style="color:blue;">※信用卡分期付款啟用之必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>約定事項:</td>
                                    <td><input name="OrderComment" maxlength="300" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之付款人綁定資料:</td>
                                    <td><input name="TokenTerm" maxlength="20" required><span style="color:red;">※必填，限英、數字，「.」、「_」、「@」、「-」格式</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之有效日期(選填，格式為yymm):</td>
                                    <td><input name="TokenLife" maxlength="4"></td>
                                </tr>
                                <tr>
                                    <td>是否為美國運通卡(選填):</td>
                                    <td><input name="CardAE" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>約定Google Pay付款授權交易(選填):</td>
                                    <td><input name="ANDROIDPAYAGREEMENT" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>約定Samsung Pay付款授權交易(選填):</td>
                                    <td><input name="SAMSUNGPAYAGREEMENT" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </li>
            <li>
                <a href="#" class="payment">幕後模式</a>
                <div class="payment-content" hidden>
                    <!-- 幕後模式 -->
                    <form action="creditcard_agreement.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/API/CreditCard" size="60" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="1.6" maxlength="5"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>3D 交易 :</td>
                                    <td><input name="P3D" value="0" maxlength="5"><span style="color:blue;">※若為 3D 交易，需傳送 NotifyURL 及 ReturnURL。</span></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>訂單金額:</td>
                                    <td><input type="number" name="Amt" value="88" max="9999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>支付完成返回商店網址:(選填)</td>
                                    <td><input name="ReturnURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>支付通知網址:(選填)</td>
                                    <td><input name="NotifyURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>支付取消返回商店網址:(選填)</td>
                                    <td><input name="ClientBackURL" maxlength="50"></td>
                                </tr>
                                <tr>
                                    <td>商品描述:</td>
                                    <td><input name="ProdDesc" value="商品一批" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱:</td>
                                    <td><input name="PayerEmail" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡分期付款啟用:</td>
                                    <td><input name="Inst" type="number" max="9"><span style="color:blue;">※.此欄位值=0 或無值時，即代表不開啟分期。</span></td>
                                </tr>
                                <tr>
                                    <td>是否為美國運通卡(選填):</td>
                                    <td><input name="CardAE" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>信用卡卡號:</td>
                                    <td><input name="CardNo" type="number" max="9999999999999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡有效年月(格式為yymm):</td>
                                    <td><input name="Exp" type="number" max="9999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡背面三碼或美國運通卡正面四碼:</td>
                                    <td><input name="CVC" type="number" max="9999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>APPLEPAY 支付型態(選填):</td>
                                    <td><input name="APPLEPAYTYPE" type="number" max="99"></td>
                                </tr>
                                <tr>
                                    <td>Apple Pay payment token:</td>
                                    <td><textarea name="APPLEGPAY" cols="30" rows="10"></textarea><span style="color:blue;">※Apple Pay必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>Google Pay payment token:</td>
                                    <td><textarea name="ANDROIDPAY" cols="30" rows="10"></textarea><span style="color:blue;">※Google Pay必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>Samsung Pay payment token:</td>
                                    <td><textarea name="SAMSUNGPAY" cols="30" rows="10"></textarea><span style="color:blue;">※Samsung Pay必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>Token 類別:</td>
                                    <td><input name="TokenSwitch" value="get" maxlength="10" required><span style="color:red;">※必填，請固定帶”get”</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之付款人綁定資料:</td>
                                    <td><input name="TokenTerm" maxlength="20" required><span style="color:red;">※必填，限英、數字，「.」、「_」、「@」、「-」格式</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之有效日期(選填，格式為yymm):</td>
                                    <td><input name="TokenLife" type="number" max="9999"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" value="交易測試"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </li>
            <li>
                <a href="#" class="payment">已約定信用卡付款(幕後模式)</a>
                <div class="payment-content" hidden>
                    <!-- 已約定信用卡付款(幕後模式) -->
                    <form action="creditcard_agreement.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/API/CreditCard" size="60" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="1.6" maxlength="5"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>訂單金額:</td>
                                    <td><input type="number" name="Amt" value="88" max="9999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商品描述:</td>
                                    <td><input name="ProdDesc" value="商品一批" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱:</td>
                                    <td><input name="PayerEmail" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡分期付款啟用:</td>
                                    <td><input name="Inst" type="number" max="9"><span style="color:blue;">※.此欄位值=0 或無值時，即代表不開啟分期。</span></td>
                                </tr>
                                <tr>
                                    <td>是否為美國運通卡(選填):</td>
                                    <td><input name="CardAE" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款授權 Token:</td>
                                    <td><textarea name="TokenValue" cols="30" rows="10" maxlength="300"></textarea><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>Token 類別:</td>
                                    <td><input name="TokenSwitch" value="on" maxlength="10" required><span style="color:red;">※必填，請固定帶”on”</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之付款人綁定資料:</td>
                                    <td><input name="TokenTerm" maxlength="20" required><span style="color:red;">※必填，限英、數字，「.」、「_」、「@」、「-」格式</span></td>
                                </tr>
                                <tr>
                                    <td>約定信用卡付款之有效日期(選填，格式為yymm):</td>
                                    <td><input name="TokenLife" type="number" max="9999"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" value="交易測試"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </li>
        </ul>
    </div>

</body>
<script>
    document.addEventListener('click', function(e) {
        if (e.target.className == 'payment') {
            e.target.nextElementSibling.hidden = !e.target.nextElementSibling.hidden;
        }
    });
</script>

</html>