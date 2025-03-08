<style>
    textarea{
        width: 300px;
        height: 100px;
    }
</style>
<h2 class="cent">新增最新消息資料</h2>
<form action="./api/insert.php" method="post" enctype="multipart/form-data">
    <table class="cent">
        <tr>
            <td>
            最新消息資料:
            </td>
            <td>
<textarea name="text" id=""></textarea>
            </td>
        </tr>
    </table>
    <div class="cent">
        
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>