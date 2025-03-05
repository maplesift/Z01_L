<?php
include_once "api/db.php";
$pdo = new PDO("mysql:host=localhost;dbname=db003", "root", "");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM news WHERE id = :id";
    echo "$sql";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $page = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($page) {
        echo "<h1>{$page['id']}</h1>";
        echo "<p>{$page['text']}</p>";
    } else {
        echo "找不到此頁面";
    }
} else {
    echo "請選擇頁面";
}
?>