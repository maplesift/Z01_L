<?php include_once "db.php";
// dd($_POST);
// 編輯
if(isset($_POST['id'])){
    foreach ($_POST['id'] as $idx=>$id) {
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Menu->del($id);
        }else{
            $row=$Menu->find($id);
            $row['text']=$_POST['text'][$idx];
            $row['link']=$_POST['link'][$idx];
            $Menu->save($row);
        }
    }
}
// 新增
if(isset($_POST['text2'])){
    foreach ($_POST['text2'] as $idx=>$text) {
        if($text!=''){
            $row=[];
            $row['text']=$text;
            $row['link']=$_POST['link2'][$idx];
            $row['main_id']=$_POST['main_id'];
            $Menu->save($row);
        }
    }
}

to("../admin.php?do=menu");

// Array
// (
//     [text2] => Array
//         (
//             [0] => 123
//             [1] => 33
//             [2] => 33
//         )

//     [link2] => Array
//         (
//             [0] => 123
//             [1] => 33
//             [2] => 
//         )

// )