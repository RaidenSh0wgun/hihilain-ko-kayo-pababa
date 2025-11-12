<?php
$manga_list = [
    1 => [
        "title" => "The Fragrant Flower Blooms with Dignity",
        "genre" => "romance",
        "cover" => "https://www.fragrantmangafree.com/wp-content/uploads/2025/05/9798888771419-719x1024.jpg",
        "description" => "When Rintaro meets Kaoruko, an unlikely duo grows closer. But their schools are rivals...",
        "chapters" => 5
    ],
    2 => [
        "title" => "The Eminence in Shadow",
        "genre" => "action",
        "cover" => "https://www.manga-news.com/public/images/vols/.Eminence_in_Shadow_4_doki_medium.jpg",
        "description" => "Cid Kagenou dreams of being a mastermind in the shadows, but in another world his schemes become real.",
        "chapters" => 5
    ],
    3 => [
        "title" => "Myst, Might, Mayhem",
        "genre" => "action",
        "cover" => "https://manhuaus.com/wp-content/uploads/2024/03/Myst-Might-Mayhem-193x278.webp",
        "description" => "Jeong, the Slaughtering Scythe Demon, feels joy in killing others. He happens to look just like Mok Gyeongwoon...",
        "chapters" => 5
    ],
    4 => [
        "title" => "I Thought She Was a Yandere",
        "genre" => "romance",
        "cover" => "https://mangadex.org/covers/fd057701-8338-4118-8a0a-748ca9f8e7fc/57a38e77-8b33-4799-80a8-0002c17f112e.jpg.512.jpg",
        "description" => "A man who no longer can turn a blind eye saves a girl who's being bullied by the other classmate, but little did he know.",
        "chapters" => 5
    ],
    5 => [
        "title" => "Banished From My Family",
        "genre" => "romance",
        "cover" => "https://mangadex.org/covers/d76dc781-0512-4626-9872-cd01835cfa5e/6ea89983-04b4-4e66-99fc-62db8177ea93.jpg",
        "description" => "A boy named Atsumu was branded as useless by his famous sisters and banished from his entertainment-industry family. However, hidden within him was an extraordinarily talented behind-the-scenes support skill that neither he nor his family had noticed! After transferring schools, Atsumu is now determined to live a normal life, but as he crosses paths with talented entertainers—VTubers, idols, and models—his natural ability starts to shine, making him their indispensable support. They can't help but adore him, turning his simple wish for normality into a showbiz underdog success story!",
        "chapters" => 5
    ],
    6 => [
        "title" => "Mairimashita! Iruma-kun: Kalego Gaiden",
        "genre" => "action",
        "cover" => "https://cdnxyz.xyz/web/cover/75596/thumbnail.png",
        "description" => "Mairimashita! Iruma-kun: Kalego Gaiden summary is updating. Come visit vymanga.net sometime to read the latest chapter of Mairimashita! Iruma-kun: Kalego Gaiden.",
        "chapters" => 5
    ],
    7 => [
        "title" => "Ichi the Witch",
        "genre" => "fantasy",
        "cover" => "https://cdnxyz.xyz/web/cover/98364/thumbnail.png",
        "description" => "From the Author of “Welcome to Demon School Iruma-kun” and Artist of “Act-Age” --- In a world where only women can be witches, one unsuspecting boy acquires their power. In this world, witches must hunt down their magic! Deep in the forest, the terrifying king of magic and the strongest witch are locked in deadly combat. But suddenly, a young boy joins the fray. His name is Ichi and he is just a hunter. But he has the power to flip the magic world upside down in this magic hunting fantasy epic",
        "chapters" => 5
    ],
    8 => [
        "title" => "Catastrophic Necromancer",
        "genre" => "fantasy",
        "cover" => "https://cdnxyz.xyz/web/cover/85641/thumbnail.png",
        "description" => "The game has emerged into reality, the rules of the world have been turned upside down and humanity has entered the era of becoming players with the world set as a game stage. The only way to become a player is by leveling up to become stronger! The only way to rise to the top of the world! On the day of world fusion Lin Moyue chose to take on the sole hidden class, Necromancer. From then on, Lin Moyue would not die until his summoned creatures died out. I sit on the throne of bones as the G** of the dead and walk between life and death.",
        "chapters" => 5
    ],
    9 => [
        "title" => "Guide to be King of the Dead",
        "genre" => "fantasy",
        "cover" => "https://cdnxyz.xyz/web/cover/87560/thumbnail.png",
        "description" => "When she opened her eyes, she was in the underworld.Suddenly, she became a possible successor for the position of Lord of the Dead!Ji-hwa, who was once an ordinary job seeker, now embarks on her journey to become the King of the Dead.",
        "chapters" => 5
    ],
    10 => [
        "title" => "Magic Emperor",
        "genre" => "action",
        "cover" => "https://cdnxyz.xyz/web/cover/55971/thumbnail.png",
        "description" => "Because he had the heritage of the ancient Demonic Emperor, Demonic Emperor Zhuo Yifan met the misfortune of being betrayed and killed by his trusted disciple. After being reborn, his cultivation went back to zero and he was trapped by a heart demon, given no choice but to become the housekeeper of the Luo Family's lone eldest miss. From being a Magic Emperor to being an insignificant housekeeper, how would he get along with his heart demon eldest miss and what power would he gain in order to lead himself and the declining family to rise back to the peak of the continent! [Side note: 魔 can mean magic and demon, while 管家 can mean butler and housekeeper.",
        "chapters" => 5
    ]
]; 
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