<?php include_once "db.php";
$row=$Total->find(1);
$row['total']=$_POST['total'];
$Total->save($row);

to("../admin.php?do=total");