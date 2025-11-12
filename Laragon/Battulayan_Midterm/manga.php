<?php
include_once "List.php";
$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 0;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $manga['title'] ?> - Chapters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php" class="back">⬅ Back to Manga List</a>
    <div class="manga-container">
        <img src="<?= $manga['cover'] ?>" alt="<?= $manga['title'] ?>">
        <div class="manga-details">
            <h1><?= $manga['title'] ?></h1>
            <div class="genre"><?= $manga['genre'] ?></div>
            <p><?= $manga['description'] ?></p>
        <div class="chapter-list">
                <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
                <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>">Chapter <?= $i ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
</html>