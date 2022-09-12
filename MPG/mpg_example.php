<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPG API 範例</title>
</head>

<body>
    <div class="container">
        <h1>MPG API 範例</h1>
        <ul>
            <li>
                <a href="###" class="payment">信用卡一次付清</a>
                <div class="payment-content" hidden>
                    <!-- 信用卡一次付清 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>付款人綁定資料</td>
                                    <td><input type="text" name="TokenTerm"><span style="color:blue;">※記憶卡號必填</span></td>
                                </tr>
                                <tr>
                                    <td>指定付款人信用卡快速結帳必填欄位</td>
                                    <td><input type="number" name="TokenTermDemand" max="3" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td>信用卡㇐次付清啟用:</td>
                                    <td><input name="CREDIT" type="number" value="1" max="9" required><span style="color:red;">※一次付清必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">信用卡紅利折抵</a>
                <div class="payment-content" hidden>
                    <!-- 信用卡紅利折抵 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>付款人綁定資料</td>
                                    <td><input type="text" name="TokenTerm"><span style="color:blue;">※記憶卡號必填</span></td>
                                </tr>
                                <tr>
                                    <td>指定付款人信用卡快速結帳必填欄位</td>
                                    <td><input type="number" name="TokenTermDemand" max="3" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td>信用卡紅利啟用:</td>
                                    <td><input name="CreditRed" type="number" value="1" max="9" required><span style="color:red;">※信用卡紅利折抵必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">信用卡分期付款</a>
                <div class="payment-content" hidden>
                    <!-- 信用卡分期付款 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>付款人綁定資料</td>
                                    <td><input type="text" name="TokenTerm"><span style="color:blue;">※記憶卡號必填</span></td>
                                </tr>
                                <tr>
                                    <td>指定付款人信用卡快速結帳必填欄位</td>
                                    <td><input type="number" name="TokenTermDemand" max="3" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td>信用卡分期付款啟用:</td>
                                    <td><input name="InstFlag" type="number" value="1" max="9" required><span style="color:red;">※信用卡分期付款必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">銀聯卡交易</a>
                <div class="payment-content" hidden>
                    <!-- 銀聯卡交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>銀聯卡啟用:</td>
                                    <td><input name="UNIONPAY" type="number" value="1" max="9" required><span style="color:red;">※銀聯卡必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">Google Pay交易</a>
                <div class="payment-content" hidden>
                    <!-- Google Pay交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>Google Pay啟用:</td>
                                    <td><input name="ANDROIDPAY" type="number" value="1" max="9" required><span style="color:red;">※Google Pay必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">Samsung Pay交易</a>
                <div class="payment-content" hidden>
                    <!-- Samsung Pay交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>Samsung Pay啟用:</td>
                                    <td><input name="SAMSUNGPAY" type="number" value="1" max="9" required><span style="color:red;">※Samsung Pay必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">國民旅遊卡</a>
                <div class="payment-content" hidden>
                    <!-- 國民旅遊卡 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>Amt:</td>
                                    <td><input type="number" name="Amt" value="88" max="9999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡一次付清啟用:</td>
                                    <td><input name="CREDIT" type="number" value="1" max="9" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>國民旅遊卡交易註記:</td>
                                    <td><input name="NTCB" type="number" value="1" max="9" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>旅遊地區代號:</td>
                                    <td><input name="NTCBLocate" maxlength="3" value="001" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>國民旅遊卡起始日期</td>
                                    <td><input name="NTCBStartDate" type="date" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>國民旅遊卡結束日期:</td>
                                    <td><input name="NTCBEndDate" type="date" required><span style="color:red;">※國民旅遊卡必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">WebATM交易</a>
                <div class="payment-content" hidden>
                    <!-- WebATM交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>WEBATM 啟用:</td>
                                    <td><input name="WEBATM" type="number" value="1" max="9" required><span style="color:red;">※WebATM必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">超商代碼繳費</a>
                <div class="payment-content" hidden>
                    <!-- 超商代碼繳費 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>超商代碼繳費啟用:</td>
                                    <td><input name="CVS" type="number" value="1" max="9" required><span style="color:red;">※超商代碼繳費必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">超商條碼繳費交易</a>
                <div class="payment-content" hidden>
                    <!-- 超商條碼繳費交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>超商條碼繳費啟用:</td>
                                    <td><input name="BARCODE" type="number" value="1" max="9" required><span style="color:red;">※超商條碼繳費交易必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">跨境支付(Alipay/Wechat)</a>
                <div class="payment-content" hidden>
                    <!-- 跨境支付(Alipay/Wechat) -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>簡單付微信支付:</td>
                                    <td><input name="EZPWECHAT" type="number" value="1" max="9" required><span style="color:red;">※跨境支付必填項目</span></td>
                                </tr>
                                <tr>
                                    <td>簡單付支付寶:</td>
                                    <td><input name="EZPALIPAY" type="number" value="1" max="9" required><span style="color:red;">※跨境支付必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">簡單付電子錢包</a>
                <div class="payment-content" hidden>
                    <!-- 簡單付電子錢包 -->
                    <form action="mpg_api.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/MPG/mpg_gateway" required><span style="color:red;">※必填</span></td>
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>簡單付電子錢包:</td>
                                    <td><input name="EZPAY" type="number" value="1" max="9" required><span style="color:red;">※簡單付電子錢包必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">LINE Pay 交易</a>
                <div class="payment-content" hidden>
                    <!-- LINE Pay 交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>LINE Pay:</td>
                                    <td><input name="LINEPAY" type="number" value="1" max="9" required><span style="color:red;">※LINE Pay 交易必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">玉山Wallet 交易</a>
                <div class="payment-content" hidden>
                    <!-- 玉山Wallet 交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>玉山 Wallet:</td>
                                    <td><input name="ESUNWALLET" type="number" value="1" max="9" required><span style="color:red;">※玉山 Wallet 交易必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">台灣Pay 支付交易</a>
                <div class="payment-content" hidden>
                    <!-- 台灣Pay 支付交易 -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>台灣 Pay:</td>
                                    <td><input name="TAIWANPAY" type="number" value="1" max="9" required><span style="color:red;">※台灣Pay 支付交易必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">超商取貨付款交易流程（含B2C大宗寄倉物流）</a>
                <div class="payment-content" hidden>
                    <!-- 超商取貨付款交易流程（含B2C大宗寄倉物流） -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerchantOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>訂單金額</td>
                                    <td><input type="number" name="Amt" value="88" max="9999999999"><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>信用卡一次付清啟用</td>
                                    <td><input type="number" name="CREDIT" value="1" max="9"><span style="color:red;">※取貨不付款至少需啟用一種支付方式</span></td>
                                </tr>
                                <tr>
                                    <td>付款人綁定資料</td>
                                    <td><input type="text" name="TokenTerm"><span style="color:blue;">※記憶卡號必填</span></td>
                                </tr>
                                <tr>
                                    <td>指定付款人信用卡快速結帳必填欄位</td>
                                    <td><input type="number" name="TokenTermDemand" max="3" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td>物流啟用:</td>
                                    <td><input type="number" name="CVSCOM" value="3" max="9"><span style="color:red;">※物流啟用必填</span></td>
                                </tr>
                                <tr>
                                    <td>物流型態:</td>
                                    <td><input name="LgsType" value="C2C" maxlength="3" required><span style="color:red;">※B2C大宗寄倉物流必填項目</span></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
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
                <a href="###" class="payment">不指定支付方式(依設定)</a>
                <div class="payment-content" hidden>
                    <!-- 不指定支付方式(依設定) -->
                    <form action="mpg_api.php" method="post">
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
                                    <td>加密模式(選填):</td>
                                    <td><input name="EncryptType" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
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
                                    <td>付款人綁定資料</td>
                                    <td><input type="text" name="TokenTerm"><span style="color:blue;">※記憶卡號必填</span></td>
                                </tr>
                                <tr>
                                    <td>指定付款人信用卡快速結帳必填欄位</td>
                                    <td><input type="number" name="TokenTermDemand" max="3" maxlength="30"></td>
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
                                    <td>商店取號網址:(選填)</td>
                                    <td><input name="CustomerURL" maxlength="50"></td>
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
                                    <td>藍新金流會員:</td>
                                    <td><input name="LoginType" type="number" value="0" max="9" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
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
            e.target.nextElementSibling.hidden = !e.target.nextElementSibling.hidden
        }
    });
</script>

</html>