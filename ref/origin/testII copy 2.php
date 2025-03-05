<?php
include_once "api/db.php";
$pdo = new PDO("mysql:host=localhost;dbname=db003", "root", "");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM news WHERE id = :id";
    // echo "$sql";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $pages = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($pages) {
        echo "<h1>{$pages['id']}</h1>";
        // foreach ($pages as $page) {
        //     echo "<a href='?id={$page['id']}'>{$page['id']}</a>";
        // }
        // echo "<a href='{$main['href']}'>";
        echo "<p>{$pages['text']}</p>";
    } else {
        echo "找不到此頁面";
    }
} else {
    echo "請選擇頁面";
            foreach ($pages as $page) {
            echo "<a href='?id={$page['id']}'>{$page['id']}</a>";
        }
}
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database;charset=utf8", "root", "");

// 取得所有頁面的 id 和標題
$sql = "SELECT id, title FROM pages";
$stmt = $pdo->query($sql);
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇頁面</title>
</head>

<body>

    <h1>選擇一個頁面：</h1>
    <ul>
        <?php foreach ($pages as $page): ?>
        <li>
            <a href="index.php?id=<?= $page['id'] ?>">
                <?= htmlspecialchars($page['title']) ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <?php
    // 讀取選取的頁面內容
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM pages WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $page = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($page) {
            echo "<h1>{$page['title']}</h1>";
            echo "<p>{$page['content']}</p>";
        } else {
            echo "<p>找不到此頁面。</p>";
        }
    }
    ?>

</body>

</html>