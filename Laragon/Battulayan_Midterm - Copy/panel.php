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
    if ($manga_id == 1 && $chapter_id == 1) {
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/01.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/02.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/03.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/04.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/05.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/06.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/07.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/08.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/09.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/10.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/11.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/12.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/13.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/14.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/15.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/16.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/17.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/18.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/19.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/20.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/21.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/22.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/23.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/24.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/25.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/26.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/27.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/28.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/29.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/30.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/31.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/32.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/33.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/34.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/35.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/36.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/37.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/38.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/39.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/40.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/41.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/42.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/43.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/44.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/45.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/46.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/47.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/48.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/49.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/50.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/51.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/52.png";
        $pages[] = "https://eu2.contabostorage.com/2352a0b47a16442aa2bd93b0a47735ea:manga/fragrant/Chapter%201/53.png";
    }
    elseif ($manga_id == 1 && $chapter_id == 2) {
        $pages[] = "";
        $pages[] = "";
    }
    elseif ($manga_id == 2 && $chapter_id == 1) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-1/36.jpg";
    }
    elseif ($manga_id == 2 && $chapter_id == 2) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-2/37.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 3) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-3/37.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 4) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-1-chapter-4/36.jpg";
    } 
    elseif ($manga_id == 2 && $chapter_id == 5) {
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/2.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/3.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/4.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/5.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/6.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/7.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/8.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/9.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/10.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/11.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/12.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/13.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/14.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/15.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/16.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/17.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/18.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/19.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/20.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/21.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/22.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/23.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/24.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/25.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/26.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/27.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/28.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/29.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/30.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/31.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/32.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/33.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/34.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/35.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/36.jpg";
        $pages[] = "https://cdn.readkakegurui.com/file/mangaifenzi22/the-eminence-in-shadow/vol-2-chapter-5/37.jpg";
    }
    elseif ($manga_id == 3 && $chapter_id == 1) {
        $pages[] = "";
        $pages[] = "";
    }elseif ($manga_id == 3 && $chapter_id == 2) {
        $pages[] = "";
        $pages[] = "";
    }
    elseif ($manga_id == 3 && $chapter_id == 3) {
        $pages[] = "";
        $pages[] = "";
    }
    elseif ($manga_id == 3 && $chapter_id == 4) {
        $pages[] = "";
        $pages[] = "";
    }
    elseif ($manga_id == 3 && $chapter_id == 5) {
        $pages[] = "";
        $pages[] = "";
    } 
    elseif ($manga_id == 4 && $chapter_id == 1) {
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
<style>
body { 
    background: #111; 
    color: white; 
    font-family: Arial, sans-serif; 
    text-align: center; 
    margin: 0; 
    padding: 0; 
}
a.back { 
    display: inline-block; 
    margin: 20px; 
    padding: 10px 15px;
    color: black; 
    background-color: #E50914;
    border-radius: 6px; 
    text-decoration: none; 
}
a.back:hover { 
    background: darkred; 
}
.reader-container { 
    max-width: 600px; 
    margin: auto; 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    gap: 20px; 
}
.reader-container img { 
    max-width: 100%; 
    height: auto; 
    border-radius: 8px; 
}
.controls { 
    display: flex; 
    justify-content: space-between; 
    width: 100%; 
    margin: 10px 0; 
}
button, select { 
    padding: 10px 20px; 
    font-size: 1.4rem; 
    border-radius: 5px; 
    border: none; 
    cursor: pointer; 
    background: #E50914; 
    color: white; 
}
button:hover, select:hover { 
    background: darkred; 
}
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