<style>
.table {
    width: 90%;
}
</style>
<h2 class="cent">動態文字廣告管理</h2>
<hr>
<form action="./api/edit.php" method="post" enctype="multipart/form-data">

    <table class="table cent">
        <tr class="yel">
            <td style="width: 65%;">動態文字廣告</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows=$Ad->all();
        foreach ($rows as $row) :
        ?>
        <tr>
            <td style="width: 65%;">
                <input type="text" name="text[]" value="<?=$row['text'];?>" style="width: 95%;">
            </td>

            <td>
                <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : '' ?>>
            </td>
            </td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
        <?php endforeach;?>
    </table>


    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px">
                    <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                        value="新增動態文字廣告">
                </td>
                <td class="cent">
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
</form>