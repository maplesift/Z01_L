<style>
    .table{
        width: 70%;
    }
</style>
<h2 class="cent">管理者帳號管理</h2>
<hr>
<form action="./api/edit.php" method="post" enctype="multipart/form-data">

    <table class="table cent">
        <tr>
            <td>帳號</td>
            <td>密碼</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows=$Admin->all();
        foreach ($rows as $row) :
        ?>
        <tr>
            <td><input type="text" name="acc[]" value="<?=$row['acc'];?>"></td>
            <td><input type="password" name="pw[]" value="<?=$row['pw'];?>"></td>
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
                            value="新增管理者帳號">
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