<?php  include_once "db.php";

$chk=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if($chk){
    to("../admin.php");
    $_SESSION['user']=1;
}else{
    echo "<script>
    alert('帳號或密碼錯誤')
    location.href='index.php?do=login'
    </script>";
}