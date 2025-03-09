<?php

$total=$data->count();
$div=5;
$now=$_GET['p']??1;
$pages=ceil($total/$div);
$start=($now-1)*$div;

$table->all(" limit $start,$div ");
?>
<?php  $table->all(); ?>

<?php 
foreach ($rows as $row) :
?>
<?php 
endforeach ;
?>


<?=$row[''];?>

<?php
if($now-1>0){
    echo "<a href='?do=table&p=".($now-1)."'> < </a>";
}
for ($i=1; $i<=$pages; $i++) { 
    $size=($now==$i)?'26px':'18px';
    echo "<a href='?do=table&p=$i'> $i </a>";
}

if($now+1<=$pages){
    echo "<a href='?do=table&p=".($now+1)."'> > </a>";
}
?>
