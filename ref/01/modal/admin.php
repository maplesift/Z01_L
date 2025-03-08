<h2 class="cent">新增管理這帳號</h2>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
<table class="cent" >
    <tr>
        <td>
            帳號:
        </td>
        <td>
            <input type="text" name="acc">
        </td>
    </tr>
    <tr>
        <td>
            密碼:
        </td>
        <td>
            <input type="password" name="pw">
        </td>
    </tr>
    <tr>
        <td>
            確認密碼:
        </td>
        <td>
            <input type="password" name="pw2">
        </td>
    </tr>
</table>
<div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>

</form>