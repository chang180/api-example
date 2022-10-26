<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信用卡幕後授權 API 範例程式</title>
</head>

<body>
    <h1>信用卡幕後授權 API 範例</h1>
    <ul>
        <li>
            <a href="#" class="payment">信用卡支付</a>
            <div class="payment-content" hidden>
                <!-- 信用卡支付 -->
                <form action="creditcard_api.php" method="post">
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
                                <td>回傳格式:</td>
                                <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>版本號:</td>
                                <td><input name="Version" value="1.1" maxlength="3"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>TimeStamp:</td>
                                <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>3D交易:</td>
                                <td><input name="P3D" value="0" maxlength="1" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>支付通知網址:</td>
                                <td><input name="NotifyURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
                            </tr>
                            <tr>
                                <td>支付完成返回商店網址:</td>
                                <td><input name="ReturnURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
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
                                <td>商品描述 :</td>
                                <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>付款人電子信箱:</td>
                                <td><input name="PayerEmail" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>信用卡分期付款啟用:(選填)</td>
                                <td><input name="Inst" type="number" value="" max="99"></td>
                            </tr>
                            <tr>
                                <td>美國運通卡啟用(選填):</td>
                                <td><input name="CardAE" type="number" value="" max="9"></td>
                            </tr>
                            <tr>
                                <td>信用卡卡號:</td>
                                <td><input name="CardNo" minlength="15" maxlength="16" value="4000221111111111" required><span style="color:red;">※信用卡支付必填項目</span></td>
                            </tr>
                            <tr>
                                <td>信用卡到期日(yymm):</td>
                                <td><input name="Exp" type="number" value="2712" max="9999" required><span style="color:red;">※信用卡支付必填項目</span></td>
                            </tr>
                            <tr>
                                <td>信用卡檢查碼:</td>
                                <td><input name="CVC" type="number" value="123" max="9999" required><span style="color:red;">※信用卡支付必填項目</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
        </li>
    </ul>
    <ul>
        <li>
            <a href="#" class="payment">國民旅遊卡</a>
            <div class="payment-content" hidden>
                <!-- 國民旅遊卡 -->
                <form action="creditcard_api.php" method="post">
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
                                <td>回傳格式:</td>
                                <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>版本號:</td>
                                <td><input name="Version" value="1.1" maxlength="3"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>TimeStamp:</td>
                                <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>3D交易:</td>
                                <td><input name="P3D" value="0" maxlength="1" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>支付通知網址:</td>
                                <td><input name="NotifyURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
                            </tr>
                            <tr>
                                <td>支付完成返回商店網址:</td>
                                <td><input name="ReturnURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
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
                                <td>商品描述 :</td>
                                <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>付款人電子信箱:</td>
                                <td><input name="PayerEmail" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>信用卡分期付款啟用:(選填)</td>
                                <td><input name="Inst" type="number" value="" max="99"></td>
                            </tr>
                            <tr>
                                <td>美國運通卡啟用(選填):</td>
                                <td><input name="CardAE" type="number" value="" max="9"></td>
                            </tr>
                            <tr>
                                <td>國民旅遊卡啟用:</td>
                                <td><input name="NTCB" type="number" value="1" max="9"><span style="color:red;">※國民旅遊卡必填項目</span></td>
                            </tr>
                            <tr>
                                <td>旅遊地區代號:</td>
                                <td><input name="NTCBArea" type="number" value="001" max="999"><span style="color:red;">※國民旅遊卡必填項目</span></td>
                            </tr>
                            <tr>
                                <td>國民旅遊卡起始日期:</td>
                                <td><input name="NTCBStart" type="date" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                            </tr>
                            <tr>
                                <td>國民旅遊卡結束日期:</td>
                                <td><input name="NTCBEnd" type="date" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                            </tr>
                            <tr>
                                <td>信用卡卡號:</td>
                                <td><input name="CardNo" minlength="15" maxlength="16" value="4000221111111111" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>信用卡到期日(yymm):</td>
                                <td><input name="Exp" type="number" value="2712" max="9999" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>信用卡檢查碼:</td>
                                <td><input name="CVC" type="number" value="123" max="9999" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
        </li>
    </ul>
    <ul>
        <li>
            <a href="#" class="payment">APPLEPAY</a>
            <div class="payment-content" hidden>
                <!-- APPLEPAY -->
                <form action="creditcard_api.php" method="post">
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
                                <td>回傳格式:</td>
                                <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>版本號:</td>
                                <td><input name="Version" value="1.1" maxlength="3"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>TimeStamp:</td>
                                <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>3D交易:</td>
                                <td><input name="P3D" value="0" maxlength="1" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>支付通知網址:</td>
                                <td><input name="NotifyURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
                            </tr>
                            <tr>
                                <td>支付完成返回商店網址:</td>
                                <td><input name="ReturnURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
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
                                <td>商品描述 :</td>
                                <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>付款人電子信箱:</td>
                                <td><input name="PayerEmail" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>Apple Pay payment token:</td>
                                <td><textarea name="APPLEPAY" cols="30" rows="10"></textarea><span style="color:red;">※ApplePay必填項目</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
        </li>
    </ul>
    <ul>
        <li>
            <a href="#" class="payment">Google Pay</a>
            <div class="payment-content" hidden>
                <!-- Google Pay -->
                <form action="creditcard_api.php" method="post">
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
                                <td>回傳格式:</td>
                                <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>版本號:</td>
                                <td><input name="Version" value="1.1" maxlength="3"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>TimeStamp:</td>
                                <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>3D交易:</td>
                                <td><input name="P3D" value="0" maxlength="1" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>支付通知網址:</td>
                                <td><input name="NotifyURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
                            </tr>
                            <tr>
                                <td>支付完成返回商店網址:</td>
                                <td><input name="ReturnURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
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
                                <td>商品描述 :</td>
                                <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>付款人電子信箱:</td>
                                <td><input name="PayerEmail" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>Google Pay payment token:</td>
                                <td><textarea name="ANDROIDPAY" cols="30" rows="10"></textarea><span style="color:red;">※Google Pay必填項目</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
        </li>
    </ul>
    <ul>
        <li>
            <a href="#" class="payment">Samsung Pay</a>
            <div class="payment-content" hidden>
                <!-- Samsung Pay -->
                <form action="creditcard_api.php" method="post">
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
                                <td>回傳格式:</td>
                                <td><input name="Pos_" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>版本號:</td>
                                <td><input name="Version" value="1.1" maxlength="3"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>TimeStamp:</td>
                                <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>3D交易:</td>
                                <td><input name="P3D" value="0" maxlength="1" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>支付通知網址:</td>
                                <td><input name="NotifyURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
                            </tr>
                            <tr>
                                <td>支付完成返回商店網址:</td>
                                <td><input name="ReturnURL" maxlength="50"><span style="color:blue;">※P3D為1時必填</td>
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
                                <td>商品描述 :</td>
                                <td><input name="ProdDesc" value="商品一批" maxlength="50"><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>付款人電子信箱:</td>
                                <td><input name="PayerEmail" type="email" value="" maxlength="50" required><span style="color:red;">※必填</span></td>
                            </tr>
                            <tr>
                                <td>Samsung Pay payment token:</td>
                                <td><textarea name="SAMSUNGPAY" cols="30" rows="10"></textarea><span style="color:red;">※Samsung Pay必填項目</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
        </li>
    </ul>
    
</body>

<script>
    document.addEventListener('click', function(e) {
        if (e.target.className == 'payment') {
            e.target.nextElementSibling.hidden = !e.target.nextElementSibling.hidden;
        }
    });

</script>

</html>