<h2 class="ct">更換標題區圖片</h2>
<hr>
<form action="./api/upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>

    </table>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
<input type="hidden" name="table" value="<?=$_GET['table'];?>">
<input type="submit" value="更新">
<input type="reset" value="重置">
</form>