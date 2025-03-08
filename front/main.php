<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        <?php  
        $ads=$Ad->all(['sh'=>1]);
        foreach ($ads as $ad) {
            echo $ad['text'];
            echo str_repeat("&nbsp;",6);
        }
        
        ?>
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->

    <div style="width:100%; padding:2px; height:290px;">
        <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">

            </div>
        </div>
    </div>
    <div
        style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
        <span class="t botli">最新消息區 
            <span>
                <a href="?do=news" style="float: right;">
                    more
                </a>

            </span>
        </span>
        <ul class="ssaa" style="list-style-type:decimal;">
            <?php
            
            $news=$News->all(" limit 0,5 ");
            foreach ($news as $new) :
            ?>
            <li>
                <?=mb_substr($new['text'],0,15); ?>
                <span class="all" style="display: none;">
                <?=$new['text']; ?>
                </span>
            </li>
            <?php endforeach ?>
        </ul>
        <div id="alt">

        </div>
        <script>
        $(".ssaa li").hover(
            function() {
                $("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#alt").show()
            },            function() {
                $("#alt").hide()
            }
        )
        // $(".ssaa li").mouseout(
        //     function() {
        //         $("#alt").hide()
        //     }
        // )

        var lin = new Array();
                <?php
                $rows=$Mvim->all(['sh'=>1]);
                foreach ($rows as $row) {
                    echo "lin.push('./upload/{$row['img']}');";
                    // echo "lin.push('./upload/{$mv['img']}');";
                }
                ?>
        var now = 0;
        if (lin.length > 1) {
            setInterval("ww()", 3000);
            // now = 1;
        }

        function ww() {
            $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
                now = 0;
        }
        ww()
        </script>

    </div>
</div>