<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>信用卡-定期定額 API 範例</title>
</head>

<body>
    <div class="container">
        <h1>信用卡-定期定額 API 範例</h1>
        <ul>
            <li>
                <a href="#" class="period">建立委託單</a>
                <div class="period-content" hidden>
                    <!-- 建立委託單 -->
                    <form action="period_api.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/MPG/period" size="60" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="1.1" maxlength="5" readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>語系(選填):</td>
                                    <td><input name="LangType" maxlength="5"></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="30" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerOrderNo" value="example<?= time(); ?>" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>產品名稱:</td>
                                    <td><textarea name="ProdDesc" cols="50" rows="5" maxlength="100" required></textarea><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>備註說明(選填):</td>
                                    <td><textarea name="PeriodMemo" cols="50" rows="5" maxlength="255"></textarea></td>
                                </tr>
                                <tr>
                                    <td>委託金額:</td>
                                    <td><input type="number" name="PeriodAmt" value="888" max="999999" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>週期類別:</td>
                                    <td><input name="PeriodType" value="M" maxlength="1" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>交易週期授權時間:</td>
                                    <td><input name="PeriodPoint" value="01" maxlength="4" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>檢查卡號模式:</td>
                                    <td><input name="PeriodStartType" type="number" value="1" max="9" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>授權期數:</td>
                                    <td><input name="PeriodTimes" type="number" value="10" max="99" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>第 1 期發動日:</td>
                                    <td><input name="PeriodFirstdate" type="date"><span style="color:blue;">※本欄位只有PeriodType=D及PeriodStartType=3時有效(兩條件須同時滿足)</span></td>
                                </tr>
                                <tr>
                                    <td>完成交易返回商店網址:(選填)</td>
                                    <td><input name="ReturnURL" maxlength="100"></td>
                                </tr>
                                <tr>
                                    <td>每期授權結果通知:(選填)</td>
                                    <td><input name="NotifyURL" maxlength="100"></td>
                                </tr>
                                <tr>
                                    <td>取消交易返回商店網址:(選填)</td>
                                    <td><input name="BackURL" maxlength="100"></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱:</td>
                                    <td><input name="PayerEmail" maxlength="50" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>付款人電子信箱是否開放修改(選填):</td>
                                    <td><input name="EmailModify" type="number" max="9"></td>
                                </tr>
                                <tr>
                                    <td>是否開啟付款人資訊(選填):</td>
                                    <td><input name="PaymentInfo" maxlength="1"></td>
                                </tr>
                                <tr>
                                    <td>是否開啟收件人資訊(選填):</td>
                                    <td><input name="OrderInfo" maxlength="1"></td>
                                </tr>
                                <tr>
                                    <td>銀聯卡啟用(選填):</td>
                                    <td><input name="UNIONPAY" type="number" max="9"></td>
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
                <a href="#" class="period">修改已建立委託單狀態</a>
                <div class="period-content" hidden>
                    <!-- 修改已建立委託單狀態 -->
                    <form action="period_modify_api.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/MPG/period/AlterStatus" size="60" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="1.0" maxlength="5" readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="30" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerOrderNo" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>委託單號:</td>
                                    <td><input name="PeriodNo" maxlength="20" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>委託狀態:</td>
                                    <td><input name="AlterType" maxlength="20" required><span style="color:red;">※必填</span></td>
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
                <a href="#" class="period">修改已建立委託單內容</a>
                <div class="period-content" hidden>
                    <!-- 修改已建立委託單內容 -->
                    <form action="period_modify_api.php" method="post">
                        <fieldset>
                            <legend>參數輸入</legend>
                            <table border="1">
                                <tr>
                                    <td>API網址：</td>
                                    <td><input name="url" value="https://ccore.newebpay.com/MPG/period/AlterAmt" size="60" required><span style="color:red;">※必填</span></td>
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
                                    <td><input name="Version" value="1.1" maxlength="5" readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>時間戮記:</td>
                                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="30" required readonly><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>回傳格式:</td>
                                    <td><input name="RespondType" value="JSON" maxlength="5" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>商店訂單編號:</td>
                                    <td><input name="MerOrderNo" maxlength="30" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>委託單號:</td>
                                    <td><input name="PeriodNo" maxlength="20" required><span style="color:red;">※必填</span></td>
                                </tr>
                                <tr>
                                    <td>委託金額(選填):</td>
                                    <td><input name="AlterAmt" type="number" max="999999"></td>
                                </tr>
                                <tr>
                                    <td>週期類別(選填):</td>
                                    <td><input name="PeriodType" maxlength="1"></td>
                                </tr>
                                <tr>
                                    <td>交易週期授權時間(選填):</td>
                                    <td><input name="PeriodPoint" maxlength="4"></td>
                                </tr>
                                <tr>
                                    <td>授權期數(選填):</td>
                                    <td><input name="PeriodTimes" type="number" max="99"></td>
                                </tr>
                                <tr>
                                    <td>信用卡到期日(選填，mmyy):</td>
                                    <td><input name="Extday" type="number" max="9999"></td>
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
    <a href="../">回上一頁</a>
</body>
<script>
    document.addEventListener('click', function(e) {
        if (e.target.className == 'period') {
            e.target.nextElementSibling.hidden = !e.target.nextElementSibling.hidden;
        }
    });
</script>

</html>