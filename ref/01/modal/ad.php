<h2 class="cent">新增動態文字廣告</h2>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
    <table class="cent">
        <tr>
            <td>
                動態文字廣告:
            </td>
            <td>
                <input type="text" name="text">
            </td>
        </tr>
    </table>
    <div class="cent">
        
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>