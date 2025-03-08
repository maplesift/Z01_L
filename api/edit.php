<?php include_once "db.php";
// dd($_POST);
$table=$_POST['table'];
$db=ucfirst($table);
if(isset($_POST['id'])){
    foreach ($_POST['id'] as $idx => $id) {
        // 刪除
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);
        }else{
            // 修改
            $row=$$db->find($id);
            switch ($table) {
                case 'admin':
                    $row['acc']=$_POST['acc'][$idx];
                    $row['pw']=$_POST['pw'][$idx];
                    break;
                
                
                default:
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']) )?1:0;
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
//             [1] => 1122
//             [2] => 2222
//             [3] => 33
//         )

//     [pw] => Array
//         (
//             [0] => 1234
//             [1] => 11
//             [2] => 22
//             [3] => 33
//         )

//     [id] => Array
//         (
//             [0] => 1
//             [1] => 2
//             [2] => 3
//             [3] => 4
//         )

//     [del] => Array
//         (
//             [0] => 4
//         )

//     [table] => admin
// )