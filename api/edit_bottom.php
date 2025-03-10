<?php  include_once "db.php";

$row=$Bottom->find(1);
$row['text']=$_POST['text'];
$Bottom->save($row);
to("../admin.php?do=bottom");