<div>
    <form action="./api/edit_bottom.php" method="post">
        <h2 class="cent">頁尾版權資料管理</h2>
        <hr>
        <table class="cent" style="width: 80%;">
            <tr class="yel">
                <td>
                    頁尾版權資料:
                    <input type="text" name="text" value="<?=$Bottom->find(1)['text'];?>">
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