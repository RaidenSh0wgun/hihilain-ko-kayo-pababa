<?php
$manga_list = [
    1 => ["title" => "The Fragrant Flower Blooms with Dignity", "chapters" => 5],
    2 => ["title" => "The Eminence in Shadow", "chapters" => 5],
    3 => ["title" => "Myst, Might, Mayhem", "chapters" => 5],
    4 => ["title" => "I Thought She Was a Yandere", "chapters" => 5],
    5 => ["title" => "Banished From My Family", "chapters" => 5],
    6 => ["title" => "Mairimashita! Iruma-kun: Kalego Gaiden", "chapters" => 5],
    7 => ["title" => "Ichi the Witch", "chapters" => 5],
    8 => ["title" => "Catastrophic Necromancer", "chapters" => 5],
    9 => ["title" => "Guide to be King of the Dead", "chapters" => 5],
    10 => ["title" => "Magic Emperor", "chapters" => 5],
];

$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 1;
$chapter = isset($_GET['chapter']) ? (int)$_GET['chapter'] : 1;

if (!isset($manga_list[$manga_id])) {
    echo "<h1>Manga not found</h1>";
    exit;
}

$manga = $manga_list[$manga_id];

function getMangaPages($manga_id, $chapter_id) {
    $pages = [];
    if ($manga_id == 4 && $chapter_id == 1) {
        $pages[] = "https://mangacherri.com/mangas/52/2032/0-IjfWnTtDPoEIq-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2032/1-HvJ4ldMmCwxfa-m.jpg";
    } 
    elseif ($manga_id == 4 && $chapter_id == 2) {
        $pages[] = "https://mangacherri.com/mangas/52/2033/0-d-zEHByfBAN-h-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2033/1-0oA86-l_Uoutd-m.jpg";
    } 
    elseif ($manga_id == 4 && $chapter_id == 3) {
        $pages[] = "https://mangacherri.com/mangas/52/2034/0-DrNpqi3bD2Noq-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2034/1-N7BacfYPnZVaH-m.jpg";
    }
    elseif ($manga_id == 4 && $chapter_id == 4) {
        $pages[] = "https://mangacherri.com/mangas/52/2035/0-O0MZuOpTMm8mQ-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2035/1-Q3Q6-YcpGsHxw-m.jpg";
    }
    elseif ($manga_id == 4 && $chapter_id == 5) {
        $pages[] = "https://mangacherri.com/mangas/52/2036/0-zgYsL8eojgukP-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/1-i4liNdFReM8sr-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/2-Lnjur8Ly6iqWN-m.jpg";
        $pages[] = "https://mangacherri.com/mangas/52/2036/3-J6Q-1sWws_-eh-m.jpg";
    }
    return $pages;
}

$pages = getMangaPages($manga_id, $chapter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?= $manga['title'] ?> - Chapter <?= $chapter ?></title>
<link rel="stylesheet" href="styles.css">
<style>
body { background: #111; color: #fff; font-family: Arial, sans-serif; text-align: center; margin: 0; padding: 0; }
a.back { display: inline-block; margin: 20px; padding: 10px 15px; background: gray; color: white; border-radius: 6px; text-decoration: none; }
a.back:hover { background: #444; }
.reader-container { max-width: 600px; margin: auto; display: flex; flex-direction: column; align-items: center; gap: 20px; }
.reader-container img { max-width: 100%; height: auto; border-radius: 8px; }
.controls { display: flex; justify-content: space-between; width: 100%; margin: 10px 0; }
button, select { padding: 10px 20px; font-size: 1.4rem; border-radius: 5px; border: none; cursor: pointer; background: #E50914; color: white; }
button:hover, select:hover { background: darkred; }
</style>
</head>
<body>

<a href="index.php" class="back">⬅ Back to Menu</a>
<h1><?= $manga['title'] ?> - Chapter <?= $chapter ?></h1>

<div class="reader-container">
    <?php foreach ($pages as $page): ?>
        <img src="<?= $page ?>" alt="Manga page">
    <?php endforeach; ?>
</div>

<div class="controls">
    <?php if ($chapter > 1): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter-1 ?>"><button>Prev Chapter</button></a>
    <?php else: ?>
        <button disabled>Prev Chapter</button>
    <?php endif; ?>

    <select onchange="location = this.value;">
        <?php for($i=1; $i <= $manga['chapters']; $i++): ?>
            <option value="panel.php?manga=<?= $manga_id ?>&chapter=<?= $i ?>" <?= $i==$chapter?'selected':'' ?>>Chapter <?= $i ?></option>
        <?php endfor; ?>
    </select>

    <?php if ($chapter < $manga['chapters']): ?>
        <a href="panel.php?manga=<?= $manga_id ?>&chapter=<?= $chapter+1 ?>"><button>Next Chapter</button></a>
    <?php else: ?>
        <button disabled>Next Chapter</button>
    <?php endif; ?>
</div>

</body>
</html>
