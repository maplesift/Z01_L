<?php
include_once "./api/db.php";
// $title=$Title->find(['sh'=>1]);
$menus=$Menu->all(['main_id'=>0]);
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">
        <a title="" href="index.php">
            <div class="ti" style="background:url(./upload/<?=$Title->find(['sh'=>1])['img'];?>); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>
                        <?php 
                        foreach ($menus as $menu) :
                        ?>
                    <div class="mainmu cent">
                        <a href="<?=$menu['link'];?>">
                        <?=$menu['text'];?>
                        </a>
                        <div class="mw">
                            <?php
                            $subs=$Menu->all(['main_id'=>$menu['id']]);
                            foreach ($subs as $sub) :
                            ?>
                            <div class="mainmu2 cent">
                                <a href="<?=$sub['link']?>">
                                <?=$sub['text']?>
                                </a>
                            </div>

                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                    <?=$Total->find(1)['total'];?> </span>
                </div>
            </div>
            <!-- include -->
            <?php
 				$do=$_GET['do']??'main';
 				$file="./front/$do.php";
 				include (file_exists($file))?$file:'./front/main.php';

 				?>
            <div id="alt">
            </div>

            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <?php
                // dd($_SESSION);
				if(isset($_SESSION['user'])): ?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('admin.php')">進入管理</button>

                <?php else : ?>
                <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo('?do=login')">管理登入</button>

                <?php 
				endif ;
				?>

                <div style="width:89%; height:480px;" class="dbor cent">
                    <span class="t botli">校園映象區</span>
                    <!-- up -->
                    <div class="cent" id=up onclick="pp(1)">
                        <img src="./icon/up.jpg" alt="">
                    </div>
                    <?php
                    $imgs=$Image->all(['sh'=>1]);
                    foreach ($imgs as $idx=>$img) : ?>
                    <div class="im" id=ssaa<?=$idx;?>>
                            <img src="./upload/<?=$img['img'];?>" style="width: 150px;">
                    </div>
                   <?php endforeach ;?>
                    <div class="cent" id=up onclick="pp(2)">
                        <img src="./icon/dn.jpg" alt="">
                    </div>


                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;">            <?=$Bottom->find(1)['text'];?></span>
        </div>
    </div>

</body>
<script>
var nowpage = 0,
    num = 0;

function pp(x) {
    var s, t;
    if (x == 1 && nowpage - 1 >= 0) {
        nowpage--;
    }
    if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
        nowpage++;
    }
    $(".im").hide()
    for (s = 0; s <= 2; s++) {
        t = s * 1 + nowpage * 1;
        $("#ssaa" + t).show()
    }
}
pp(1)
</script>

</html>