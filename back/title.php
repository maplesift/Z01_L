<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form action="./api/edit.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows=$Title->all();
                foreach ($rows as $row):
                ?>

                <tr class="">
                    <!-- 圖片 -->
                    <td width="45%">
                        <img src="./upload/<?=$row['img'];?>" alt="" style="width: 300px;">
                    </td>
                    <!-- 文字 -->
                    <td width="23%">
                        <input type="text" name="text[]" value="<?=$row['text'];?>">
                    </td>
                    <!-- 顯示 -->
                    <td width="7%">
                        <input type="radio" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <!-- 刪除 -->
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <!-- 更換圖片 -->
                    <td>
                        <input type="button" value="更換圖片"
                            onclick="op('#cover','#cvr','./modal/upload_<?=$do;?>.php?table=<?=$do;?>&id=<?=$row['id'];?>')">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php endforeach;?>

                <!-- <?=$row[''];?> -->
                <input type="hidden" name="table" value="<?=$_GET['do'];?>">
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</div>