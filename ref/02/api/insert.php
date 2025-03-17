<?php include_once "db.php";
// dd($_POST);
$table=$_POST['table'];
$db=ucfirst($table);
unset($_POST['table']);

// dd($_POST);
if(!empty($_FILES['img'])){
    // dd($_FILES);
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

if(isset($_POST['pw2'])){
    unset($_POST['pw2']);
}
$$db->save($_POST);



to("../admin.php?do=$table");


// Array
// (
//     [img] => Array
//         (
//             [name] => 01B01.jpg
//             [full_path] => 01B01.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp\tmp\phpFEF8.tmp
//             [error] => 0
//             [size] => 50349
//         )

// )