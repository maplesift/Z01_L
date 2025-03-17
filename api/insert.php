<?php include_once "db.php";
$table=$_POST['table'];
$db=ucfirst($table);
unset($_POST['table']);
// dd($_POST);
// dd($_FILES);
if(!empty($_FILES['img'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/{$_FILES['img']['name']}");
    $_POST['img']=$_FILES['img']['name'];
}
if(isset($_POST['pw2'])){
    unset($_POST['pw2']);
}
$$db->save($_POST);
to("../admin.php?do=$table");