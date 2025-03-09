<?php include_once "db.php";
// dd($_POST);
$table=$_POST['table'];
$db=ucfirst($table);
unset($_POST['table']);

if(isset($_POST['pw2'])){
    unset($_POST['pw2']);
}
$$db->save($_POST);



to("../admin.php?do=$table");


// Array
// (
//     [acc] => 1
//     [pw] => 1
//     [pw2] => 11
//     [table] => admin
// )