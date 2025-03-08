<style>
    textarea{
        width: 300px;
        height: 80px;
    }
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">最新消息資料內容</td>
                    <!-- <td width="23%">替代文字</td> -->
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $total=$News->count();
                $div=5;
                $now=$_GET['p']??1;
                $pages=ceil($total/$div);
                // echo $pages;
                $start=($now-1)*$div;
                $rows = $News->all(" limit $start,$div ");
                foreach ($rows as $row) :
                ?>
                    <tr class="">
                        <td width="45%">
                            <textarea name="text[]" value="">
                            <?= $row['text']; ?>
                            </textarea>
                        
                        </td>

                        <!-- <td width="23%"></td> -->

                        <td width="7%"><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : '' ?>></td>

                        <td width="7%"><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>

                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

                        <td>
                            <input type="button" value="更換圖片"
                                onclick="op('#cover','#cvr','./modal/update_title.php?id=<?= $row['id']; ?>&table=<?= $do; ?>')">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="cent">

            <?php
        if($now-1>0){
            echo "<a href='?do=news&p=".($now-1)."'> < </a>";
        }
        for ($i=1; $i <=$pages; $i++) { 
            $size=($now==$i)?'26px':'18px';
            echo "<a href='?do=news&p=$i' style='font-size: $size;'> $i</a>";
        }
        if($now+1<=$pages){
            echo "<a href='?do=news&p=".($now+1)."'> > </a>";
        }
        ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=<?= $do; ?>')"
                            value="新增最新消息資料">
                    </td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>