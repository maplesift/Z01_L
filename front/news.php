<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">

    <div style="height:32px; display:block; margin:10px;">
        <h2>更多最新消息顯示區</h2>
        <hr>
    </div>
    <!--正中央-->
    <ul class="ssaa" style="list-style-type:decimal; margin-top:20px;">
        <?php
                $total=$News->count();
                $div=5;
                $now=$_GET['p']??1;
                $pages=ceil($total/$div);
                // echo $pages;
                $start=($now-1)*$div;
                $news = $News->all(" limit $start,$div ");
                foreach ($news as $new) :
        ?>
        <li style="margin-top:20px;">
            <?=mb_substr($new['text'],0,15); ?>
            <span class="all" style="display: none;">
                <?=$new['text']; ?>
            </span>
        </li>

        <?php endforeach; ?>
    </ul>
    <div id="alt">

</div>
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
    <script>
    $(".ssaa li").hover(
        function() {
            $("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>")
            $("#alt").show()
        },
        function() {
            $("#alt").hide()
        }
    )
    </script>


</div>