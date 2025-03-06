<div>
    <form action="./api/edit_total.php" method="post">
        <h2 class="cent">進站總人數管理</h2>
        <hr>
        <table class="cent" style="width: 80%;">
            <tr class="yel">
                <td>
                    進站總人數:
                    <input type="text" name="total" value="<?=$Total->find(1)['total'];?>">
                </td>

            </tr>
        </table>
        <div class="cent">
            <input type="hidden" name="table" value="<?=$do;?>">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
        </div>
    </form>
</div>