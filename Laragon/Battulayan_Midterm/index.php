<?php
$title = "Manga/Manhwa site";
$site_name = "Genshin Impact";
$selected_genre = $_GET['genre'] ?? "all";
$search = $_GET['search'] ?? '';
include_once "List.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<header>
    <a href="index.php" class="logo"><?= $site_name ?></a>

    <nav class="navbar">
        <a href="index.php?genre=all" class="active"<?= ($selected_genre=='all')?'active':''; ?>>Home</a>
        <a href="index.php?genre=fantasy" class="active"<?= ($selected_genre=='Fantasy')?'active':''; ?>>Fantasy</a>
        <a href="index.php?genre=action" class="active"<?= ($selected_genre=='Action')?'active':''; ?>>Action</a>
        <a href="index.php?genre=romance" class="active"<?= ($selected_genre=='Romance')?'active':''; ?>>Romance</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
    <form class="search-form" id="search-form" action="index.php" method="GET">
        <input type="text" name="search" placeholder="Search manga..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</header>

<section class="home">
    <h2 class="section-title"><?= ucfirst($selected_genre) == "All" ? "Manga List" : $selected_genre . " Manga"; ?></h2>

    <div class="manga-grid">
        <?php foreach($manga_list as $id => $manga): 
            $matches_genre = ($selected_genre == "all" || $manga['genre'] == $selected_genre);
            $matches_search = ($search == '' || stripos($manga['title'], $search) !== false || stripos($manga['description'], $search) !== false);
            if($matches_genre && $matches_search):
        ?>
        <div class="manga-card">
            <img src="<?= $manga['cover'] ?>" alt="<?= $manga['title'] ?>">
            <h3><?= $manga['title'] ?></h3>
            <p><?= $manga['description'] ?></p>
            <a href="manga.php?manga=<?= $id ?>" class="btn">Read</a>
        </div>
        <?php endif; endforeach; ?>
    </div>
</section>
<script src="main.js"></script>
</body>
</html>