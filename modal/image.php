<h2 class="cent">新增校園映像圖片</h2>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <!-- <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text" id=""></td>
        </tr> -->
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>