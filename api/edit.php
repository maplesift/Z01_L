<?php  include_once "db.php";

dd($_POST);

$table=$_POST['table'];
$db=ucfirst($table);

if(isset($_POST['id'])){
    foreach ($_POST['id'] as $idx=>$id) {
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);
        }else{
            $row=$$db->find($id);

            switch ($table) {
                case 'admin':
                    $row['acc']=$_POST['acc'][$idx];
                    $row['pw']=$_POST['pw'][$idx];
                    break;
                
                default:
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    if(isset($_POST['text'])){
                        $row['text']=$_POST['text'][$idx];
                    }
                    break;
            }
            $$db->save($row);
        }
    }
}

to("../admin.php?do=$table");


// Array
// (
//     [acc] => Array
//         (
//             [0] => admin
//             [1] => 1
//             [2] => 2
//         )

//     [pw] => Array
//         (
//             [0] => 1234
//             [1] => 1
//             [2] => 2
//         )

//     [del] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

//     [id] => Array
//         (
//             [0] => 1
//             [1] => 2
//             [2] => 3
//         )

//     [table] => admin
// )