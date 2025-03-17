<?php  include_once "db.php";

$row=$Total->find(1);
$row['total']=$_POST['text'];
$Total->save($row);
to("../admin.php?do=total");