<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$manga_id = isset($_GET['manga']) ? (int)$_GET['manga'] : 1;
$chapter_id = isset($_GET['chapter']) ? (int)$_GET['chapter'] : 1;

// Loop chapters (1-3)
if($chapter_id > 3) $chapter_id = 1;
if($chapter_id < 1) $chapter_id = 3;

$mangas = [
    1 => [
        'title' => 'How could a hero\'s name AAAAH?!',
        'cover' => 'https://www.mgeko.cc/media/manga_covers/v8YLZ3.png',
        'description' => '어떻게 용사 이름이 아아아아 • How Did the Warrior Name Became Aaaah?!',
        'full_description' => 'A so-called hero who smashes every box and jar in sight, and rummages through other people\'s drawers, ends up choosing an ordinary villager as a companion! But can such a ridiculous hero really defeat the Demon King and save the world?',
        'status' => 'Ongoing',
        'author' => '--',
        'genre' => ['Adventure', 'Comedy', 'Fantasy', 'Long strip', 'manwha'],
        'chapters' => 3
    ],
    2 => [
        'title' => 'Growth-Type Superhero',
        'cover' => 'https://i2.wp.com/kingofshojo.com/wp-content/uploads/2024/10/2024-10-29-07-14-56-1730229296874.jpg',
        'description' => '성장형 슈퍼히어로 • Growth-Type Superhero',
        'full_description' => 'In a world thrown into chaos, humanity’s only hope lies in the “Sacred Relics,” powerful weapons forged from the very essence of their wielder’s soul. These relics are the key to fighting off the terrifying monsters that have begun to emerge from another dimension, threatening life as we know it.

Asahi Hinata, the son of a legendary hero, is full of dreams and determination as he prepares to attend the prestigious National Valkyrie Academy, a school dedicated to training the next generation of warriors who wield Sacred Relics. But his excitement is short-lived when his Sacred Relic turns out to be a hero suit straight out of a cheap children’s TV show—flashy, clunky, and utterly unimpressive.

Mocked and underestimated by his peers, Hinata struggles to fit in at the academy, where strength and prestige mean everything. Despite the ridicule, he refuses to give up, choosing instead to face each day with quiet determination and unwavering resilience.

One fateful day, in the face of danger and overwhelming odds, Hinata’s true potential is unlocked. The seemingly useless hero suit awakens a hidden power unlike anything seen before—one that could change not only his fate but the future of humanity itself.

This is the story of a young man who rises above expectations, proving that even the humblest beginnings can lead to greatness.',
        'status' => 'Ongoing',
        'author' => '--',
        'genre' => ['Action', 'Adventure', 'Drama', 'Fantasy', 'martial arts'],
        'chapters' => 3
    ],
    3 => [
        'title' => 'Transmigrating Into The Cyber Game After Being On Top For Killing Boss',
        'cover' => 'https://cdnxyz.xyz/web/cover/89163/thumbnail.png',
        'description' => '穿进赛博游戏后干掉BOSS成功上位 • Chuan Jin Sai Bo Youxi Hou Gandiao BOSS Chenggong Shangwei',
        'full_description' => 'Transmigrating Into the Cyber Game After Being on Top for Killing BOSS summary is updating. Come visit MangaNato.com sometime to read the latest chapter of Transmigrating Into the Cyber Game After Being on Top for Killing BOSS. If you have any question about this manga, Please don\'t hesitate to contact us or translate team. Hope you enjoy it.',
        'status' => 'Ongoing',
        'author' => 'An Bai',
        'genre' => ['Action', 'Drama', 'Fantasy'],
        'chapters' => 3
    ],
    4 => [
        'title' => 'High School Queen',
        'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyFKFw7djoKHlakwBal6LyxKuMejBWV48G5g&usqp=CAU',
        'description' => 'T여고생왕후 • High School Queen',
        'full_description' => 'Read manhwa High school queen / Kim Cheong-ha, a legendary swordswoman and the Queen of Joseon, meets a tragic end in a palace conspiracy. Reborn as Park Da-jin, a high school student tormented by bullies, she channels her royal spirit into a fierce counterattack. With centuries of wisdom and unmatched skill, she\'s ready to deliver justice.',
        'status' => 'Ongoing',
        'author' => '--',
        'genre' => ['Action', 'School', 'Historical'],
        'chapters' => 3
    ],
    5 => [
        'title' => 'Dungeon House',
        'cover' => 'https://preview.redd.it/does-anyone-know-why-dungeon-house-was-dropped-v0-ma683wetdxca1.jpg?width=640&crop=smart&auto=webp&s=48748be8eaec49a29f5156db9fcd97eeb3a66dce',
        'description' => '',
        'full_description' => '--',
        'status' => 'Ongoing',
        'author' => '--',
        'genre' => ['Action', 'Adventure', 'Fantasy', 'Magic', 'Martial Arts', 'Manwha'],
        'chapters' => 3
    ],
    6 => [
        'title' => 'Genius of the unique lineage',
        'cover' => 'https://preview.redd.it/genius-of-the-unique-lineage-is-it-worth-reading-v0-dn0om0zxghqc1.jpeg?width=640&crop=smart&auto=webp&s=c68844626b0844d6cb607a0860868846a44db722', 
        'description' => '',
        'full_description' => 'Genius of the Unique Lineage manhwa, I want to be someone who kills invaders__I want to kill invaders and live a happy daily life in a special world.Can\'t I just ask for that?Why? Why can\'t I do that?People say chasing two different rabbits will make you miss both, but just don\'t miss them.',
        'status' => 'Ongoing',
        'author' => '--',
        'genre' => ['Manwha', 'Fantasy', 'Adventure', 'Action'],
        'chapters' => 3
    ]
];

function getMangaPages($manga_id, $chapter_id,) {
    $pages = [];

    if($manga_id == 1) {
        if($chapter_id == 1) {
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/1.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/2.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/3.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/4.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/5.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/6.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/7.jpg"; 
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/8.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/9.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/10.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/11.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/12.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-1/13.jpg";
            

        } elseif($chapter_id == 2) {
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/1.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/2.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/3.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/4.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/5.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/6.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/7.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/8.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/9.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/10.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/11.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-2/12.jpg";
            

        } elseif($chapter_id == 3) {
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/2.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/3.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/4.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/5.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/6.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/7.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/8.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/9.jpg";
            $pages[] = "https://imgsrv4.com/mg1/fastcdn/cdn_mangaraw/bum6-how-could-a-heros-name-be-aaaah/chapter-3/10.jpg";      
    }
    
    elseif($manga_id == 2) {
        if($chapter_id == 1) {
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/001.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/002.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/003.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/004.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/005.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/006.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/007.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/008.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/009.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/010.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/011.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/012.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/013.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/014.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/015.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/016.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/017.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/018.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/019.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/020.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/021.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/022.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/c36fd71789576cf44888792997bae68c/023.webp";
            

        } elseif($chapter_id == 2) {
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/001.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/002.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/003.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/004.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/005.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/006.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/007.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/008.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/009.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/010.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/011.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/012.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/013.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/014.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/015.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/016.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/017.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/018.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/019.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/020.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/ab87fd76c91a42fc27239c10d8c76eb0/021.webp";
        
        } elseif($chapter_id == 3) {
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/001.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/002.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/003.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/004.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/005.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/006.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/007.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/008.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/009.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/010.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/011.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/012.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/013.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/014.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/015.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/016.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/017.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/018.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/019.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/020.webp";
            $pages[] = "https://img.manhuaus.com/image2024/manga_6721135a71651/e6070e7a9b040c83769961b7258dbf69/021.webp";
        
    }

    elseif($manga_id == 3) {
       if($chapter_id == 1) 
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
            $pages[] = "";
        
        } elseif($chapter_id == 2) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPLAkU5YhKaAlA8qkMQtjS7cVAsJJiC6-PNomRMHASwkxk2D6iUfnnWAWvzEVWGbTOPAz3MOcDoKaRMfgiWXNDib7fxgJR01vNEespkYXgjleI=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOhhs4PhCj4wmJV0Z2e_-kWGXPQyyeYVXpNe-FrDL8wVaDkNiCH0Lu1lp1VrGMf-amnfR2HywRo0hYc_bqpPRNzYgHxR8pEeYuHCUJ_txdWGdA=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMXfge0J12tpb5WDEcme-YLtqSpzZhKVxcLoS24iGSCZ6OHJ7KxFxyGte1LB1k23XtKiDLSiUPRiudGpboHWfp3okuDkOqgYQ8Yp23Eh2v3JRE=w700";
        } elseif($chapter_id == 3) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM-ec3bP7VP4by-pXCd4ag_U2aohgiYdM8O25N0VH032KaVvW5bdtNgWkwi2mVnvTh3hEMipidOY7YMQuz6UzfgmfBxxkwCslewSj3kQ0ecoqQ=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNFpMxkLRYPyitxuWnN8gFC-70yozbOMwUaPQYD_NOeTl2QIHIkT_hYSWEG-BBIJb49eKquOOumJp-FEAt1aQkC7gMxaBQP4jZPHEiSJjuPs0g=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOv3YpSDm7KpDGCS9hpEN2hnBnt9GDl97Foutqh5WQ7FSKbgX4qcHjpgtQpAeXWXJTSzZzRGiHjK_3tGDy5FNjCLGMMslxYQimx9xYcfpJMa98=w700";
        }
    }
    
    elseif($manga_id == 4) {
        if($chapter_id == 1) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNDt8ctHmwbjuxzbEcAcq9lq6LyU6vmnRo2rQEwpcJyqlw0z5p1ObUxAIsluBOOaNNukg5MUHbpc7YeZcRbQuDXQ4bQf7YZdtdk2yUYGPSm_g=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNps-UZJPtB_yqtbJS7Zot3hFQe9nWfhp5vafM-pg0xXSYO32DmhPSt9vHWtmBOLrWkNhUjyF-tjwMO9mXMDdLJbyOaERhmHEmLKPn3EgoOYQ=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOdEgPK9si5TnRasgYX1TBEIyPRu6cas4-KI10_3W9mjVk6J6nVBmFidqF9aZu8Lmk8g_0wQ-L4luH6aU_y_NSuI25grfFXWgOMqLjEjeXqZw=w700";
        } elseif($chapter_id == 2) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPMX4fXh8RinTW-XuU9OJJ7VnQEbe2jHmgdnqTGgxqHDA3Nd1cFuSM-PIKELVAyLOw_tKX9jC1Fxl_OlXKJrb36bg6bYV2H2MvPy1Lk7f12KKE=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNxb0-Ep52rIzp54CIr9llTPXH_pqOtgsDEH9ZHX5rjTsQUQBPDn0Iofja4GtNy3P-2VOwIImBH4SRMtjMEOobQEW9TCPcawfvfmc2x3mGb2QY=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNrFejGKMWYxoLAJ5ChKyo3974YV4-sySKpA4IsaPZXIt4X8EoM5Z3gYoR6SVgmKpqAf0TIMZbonYtantmNsTo7V2Gap0TsDyqFspXcSZU8_fY=w700";
        } elseif($chapter_id == 3) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMBD2vGfeXBtxqY6y_xmyq_omVkdM-VYCQGLW-TTHw0hPzEacWXLXk8HFV3ogcoYedhMHVbJj1d00m8B1effBMwc4kWHZs1L-xUfYHweKqTitM=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBO05W81hrucb9pt8Pl45HigeEGPdyVG0ztOKNiIgsmNkGLkygTsgWiETRZrbq2v2jKzoYGUy33Xb5Yut-h7uhycwULFnTQ6Tz41SZfc3R8DCwg=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPWvM4Ec1wjq7_J3dAoLVWweTxp5xuTdjfTfY_qohFNr1MDqq0UMuoOOWzZpfVk_QH29k7nFeWv4bOnJ5SkY2whB1mqkaHICMxsWr6TyeaOb74=w700";
        }
    }
    
    elseif($manga_id == 5) {
        if($chapter_id == 1) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPdrlGITsQpngiqMlP1ER-yDu2amgWy95mFRebDYs8qSoQVNyxQOS1ip5BxRepRe6UETDWh3Ed_k0gpotak4SmIGGHjKWbnEpQQ0Ogigj8MlVI=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPKlsjtwinDE74Ye14jejGLCw2zgrlKPa79Dq_L4DLObkZ-dXpR2WeI30DmV9shJ4_rNNNNukVDTzSrSwt1B8MyXx989XPmznUgFq-7wLv1Thk=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMytZsEREGvse2FUJrpE9n11dL0gVcSO3VwinjN7fWBmnb1czswuC9S32lVktYssGy1Ic6s6kojMlOAyWOgAxi1aiDsNroMzfqfX9i-3Ng4MsA=w700";
        } elseif($chapter_id == 2) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMmcABpm4MV78UgmuH9TlZByp7NUeNYPvh_gHxNMkwn1NCtquKwCAqu9dDFFiNH0Ngl4koNBR230eGh1H6iHKOzvZumynD8BdDLHugAxJ1cHw=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNsxYKdbyYOMGb7uJM1VulTVNLM4QS229Yq94I3VaJblw9_4NCyvzCAERyejJ1YGWVBX4WBpalddREB8BCpEr8aI4YR7iXDvFTo8TBgL2FZdg=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBNS4f9o0uWFPbHgAVbXbr7GUgPdRBeoVQOuj07YbpLo2O7QYGWgaI5C0MmxXpQU0DCSIPN3NFMl8X-AeGHvaR9bVmgI3JcqzSOkG6wCKrfTzA=w700";
        } elseif($chapter_id == 3) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP5Z77ypXNEAYCzWoq5m08cuKNbsmSjHWHFTDVk51KeIuPnrVbQV9ojDOsUaqMwpvNLCuOHnN211h5ymMfdLH0pth76BXKLtvPUCnLr3F8YXjI=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP-Ykdpe7ZtbjUNKuLtMO1PNfNoYHQ0G1XrWhAupfzDnCwmkG6DN3WOHAqTP8dexFSe_D7DZsqd_qa1XNP1FIzK5s9wFo4WAGsTnRiYh43F6ak=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBN86I5O0g5Vrp2RcUQhEpoqALsidKtTE3RD3fAim4HetC7u-sMuUIXAX7p8ITSpfhq8RSWC3MZYzMlt0ka5YhvZTwrcG6661gKUjjwaZTIF12c=w700";
        }
    }
    
    elseif($manga_id == 6) {
        if($chapter_id == 1) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPWZtZkziqIGnxy6DHz3G2uZ3ntrycvq-s51O5px1Mn0cFPebNpQIDT5UJnOUURjHyL83DUMwAYzGQ_j4qvOItjzxbpQhGDhR6YyJvr1dcvUQ=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMpRdBaK_zt_VzDdGdfjudDEVdaxP2jVd8jhzR_kp-mzLAzamDLC5bE63kzLLrgcyrk3ooPxVb42EKlCXhcmVvK3yLehHhdnGUBuvdTK9hCSA=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBOJNxonkWSwiuN9CGrACMEYAV-maY7dtgDFX3VJVWkEpBZsDU0bu0sToUg7XSABB42aFpERitYJMunrnK8PCCpk32UMVVTqePHxWrhWLMlO6w=w700";
        } elseif($chapter_id == 2) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBM09Ox662ZC33NX2EgZLF_U6FnJjw1bufPXLWnMtMHtBL8PXXdffSpvsVgbQLH_4ZErpxe2ixEGtB2al5S3Q-idfp_c5epGiuO0e9kTLEM2sw=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMBPyn3oN9zKph8BMwQUj3QzISTBvqn3ZdOfnxqY5eMedqqyxbPJNNMKPV3dnCH17WXtI8c4IIAr5t03jgRJ_7PkX_xDU-29DXttid3XYJXRQ=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBP753FgpVFV0kFp2RqJo9wdKQ1KJfATSRYJmhz735LjVhXx5mqvT1xKUOJEORoH1h7APQ08KXd-JuDrT0ch5zFXPlK9DL2clpKUE5CoxcyNQg=w700";
        } elseif($chapter_id == 3) {
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPQBwUq7fLmxtd1sQjUbV6swAzMhQP098QKq20LwQ9nfGOSRIeTtuYlT_ujnX8pob8wOijstvJGx-C3rXd3bS9g7jg7YeofyV_bIs4tMJa-2qU=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBMkuX5qeEswER0qoVd-RaeaNTLHeE-jYLkBgR4mGWqyFcJG5dPskLtjbHr1bFuPqPCDwlJiwmLxJo4anmUpF5W23BbWrJBCGUkejWyTTvWyWC0=w700";
            $pages[] = "https://2.bp.blogspot.com/drive-storage/AJQWtBPih5t5MA6aUSJ49zOUcoo1OQYdqREdwiZ9cM-7FQ2okveZXySwrQACP2tbWU_FHEjisNnfuYzwsu2Mny-0SW72Wwz_xYFhzjCPwZP7U4njrrE=w700";
        }
    }
}

return $pages;
}

$current_manga = isset($mangas[$manga_id]) ? $mangas[$manga_id] : $mangas[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        if($page == 'manga') echo $current_manga['title'] . ' - ';
        if($page == 'chapter') echo $current_manga['title'] . ' Chapter ' . $chapter_id . ' - ';
        ?>Aelango | Manga website
    </title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #a3c4e2;
            background: url('https://i.pinimg.com/736x/4b/15/6e/4b156e8e3f7a5e992c74a369b53d25c1.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(10px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2 20px;
        }

        .navbar {
            background: #0c1a2b;
            box-shadow: 0 2px 10px rgba(12, 26, 43, 1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo h1 {
            color: #264653	;
            font-size: 2.1rem;
        }

        .logo h1 a {
            text-decoration: none;
            color: inherit;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #3c5c78;
            font-weight: 500;
            transition: color 0.5s;
        }

        .nav-menu a:hover {
            color: #264653	;
        }

        .chapter-nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .back-btn {
            color: #264653;
            text-decoration: none;
            font-weight: 500;
        }

        .chapter-title {
            font-weight: bold;
            color: #264653;
        }

        .hero {
            background: url('') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(10px);
            color: white;
            text-align: center;
            padding: 150px 0 100px;
            margin-top: 0px;
        }

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .manga-grid {
            padding: 100px 0    ;
        }

        .manga-grid h2 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: #a3c4e2;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 45px;
        }

        .manga-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(60, 92, 120, 1), 0 1px 3px rgba(163, 196, 226, 1);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .manga-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(38, 70, 83, 1);
        }

        .manga-card a {
            text-decoration: none;
            color: inherit;
        }

        .manga-cover {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .manga-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .manga-card:hover .manga-cover img {
            transform: scale(1.05);
        }

        .manga-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .status.completed {
            background: #28a745;
            color: white;
        }

        .status.ongoing {
            background: #ffc107;
            color: #1f2f4a;
        }

        .manga-info {
            padding: 25px;
        }

        .manga-info h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #1f2f4a;
        }

        .manga-info p {
            color: #6fa8dc;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .chapter-count {
            color: #6fa8dc;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .manga-detail {
            padding: 100px 0 50px;
        }

        .manga-header {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .manga-cover-large img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .manga-info-detailed h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #3c5c78;
        }

        .manga-meta {
            margin-bottom: 25px;
        }

        .manga-meta p {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .genre-tag {
            display: inline-block;
            background: #1f2f4a;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.9rem;
            margin-right: 8px;
            margin-bottom: 5px;
        }

        .manga-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #a3c4e2;
        }

        .chapter-list h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #1f2f4a;
        }

        .chapters {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .chapter-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px 	rgba(111, 168, 220, 1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .chapter-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(111, 168, 220, 1);
        }

        .chapter-item a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 25px;
            text-decoration: none;
            color: inherit;
        }

        .chapter-info h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #3c5c78;
        }

        .chapter-date {
            color: #6fa8dc;
            font-size: 0.9rem;
        }

        .chapter-arrow {
            font-size: 1.5rem;
            color: #1f2f4a;
        }

        .reader-container {
            padding-top: 90px;
            max-width: 800px;
            margin: 0 auto;
        }

        .reader-controls {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #6fa8dc;
            margin-bottom: 30px;
        }

        .chapter-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .nav-btn {
            padding: 10px 20px;
            background: #264653;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-btn:hover {
            background: #6fa8dc;
        }

        #chapterSelect {
            padding: 8px 15px;
            border: 2px solid #1f2f4a;
            border-radius: 5px;
            font-size: 1rem;
        }

        .reader-content {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .manga-page {
            text-align: center;
        }

        .manga-page img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(38, 70, 83, 1)
        }

        .page-number {
            text-align: center;
            color: #a3c4e2;
            font-size: 0.9rem;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .bottom-controls {
            margin-top: 30px;
            margin-bottom: 50px;
        }

        footer {
            background: linear-gradient(135deg, #0c1a2b, #1f2f4a);
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .hero-content h2 {
                font-size: 2rem;
            }
            
            .grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .manga-header {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .chapter-navigation {
                flex-direction: column;
                gap: 15px;
            }
            
            .nav-btn {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }
            
            .hero {
                padding: 120px 0 60px;
            }
            
            .hero-content h2 {
                font-size: 1.8rem;
            }
            
            .manga-info-detailed h1 {
                font-size: 2rem;
            }
            
            .reader-container {
                padding-top: 80px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <h1><a href="?page=home">🕮 𝒜𝑒𝓁𝒶𝓃𝑔𝑜 </a></h1>
                </div>
                
                <?php if($page == 'chapter'): ?>
                <div class="chapter-nav">
                    <a href="?page=manga&manga=<?php echo $manga_id; ?>" class="back-btn">← Back to Manga</a>
                    <span class="chapter-title"><?php echo $current_manga['title']; ?> - Chapter <?php echo $chapter_id; ?></span>
                </div>
                <?php else: ?>
                <ul class="nav-menu">
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=home#Manga List">Manga List</a></li>
                    <li><a href="?page=home#Completed manga">Completed</a></li>
                    <li><a href="?page=home#genres">Genres</a></li>
                </ul>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main>
        <?php if($page == 'home'): ?>
            <section class="hero">
                <div class="hero-content">
                    <h2>𝒜𝑒𝓁𝒶𝓃𝑔𝑜'𝓈 𝑀𝒶𝓃𝑔𝒶</h2>
                    <p>𝘿𝙞𝙨𝙘𝙤𝙫𝙚𝙧 𝙮𝙤𝙪𝙧 𝙛𝙖𝙫𝙤𝙧𝙞𝙩𝙚 𝙧𝙚𝙖𝙙𝙚𝙧 𝙝𝙚𝙧𝙚!</p>
                </div>
            </section>

            <section class="manga-grid" id="popular">
                <div class="container">
                    <h2>𝙈𝙖𝙣𝙜𝙖 𝙇𝙞𝙨𝙩</h2>
                    <div class="grid">
                        <?php foreach($mangas as $id => $manga): ?>
                        <div class="manga-card">
                            <a href="?page=manga&manga=<?php echo $id; ?>">
                                <div class="manga-cover">
                                    <img src="<?php echo $manga['cover']; ?>" alt="<?php echo $manga['title']; ?>">
                                    <div class="manga-overlay">
                                        <span class="status <?php echo strtolower($manga['status']); ?>">
                                            <?php echo $manga['status']; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="manga-info">
                                    <h3><?php echo $manga['title']; ?></h3>
                                    <p><?php echo $manga['description']; ?></p>
                                    <span class="chapter-count"><?php echo $manga['chapters']; ?> Chapters</span>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

        <?php elseif($page == 'manga'): ?>
            <div class="manga-detail">
                <div class="container">
                    <div class="manga-header">
                        <div class="manga-cover-large">
                            <img src="<?php echo $current_manga['cover']; ?>" alt="<?php echo $current_manga['title']; ?>">
                        </div>
                        <div class="manga-info-detailed">
                            <h1><?php echo $current_manga['title']; ?></h1>
                            <div class="manga-meta">
                                <p><strong>Author:</strong> <?php echo $current_manga['author']; ?></p>
                                <p><strong>Status:</strong> <span class="status <?php echo strtolower($current_manga['status']); ?>"><?php echo $current_manga['status']; ?></span></p>
                                <p><strong>Genres:</strong> 
                                    <?php foreach($current_manga['genre'] as $genre): ?>
                                        <span class="genre-tag"><?php echo $genre; ?></span>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                            <div class="manga-description">
                                <p><?php echo $current_manga['full_description']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="chapter-list">
                        <h2>Chapters</h2>
                        <div class="chapters">
                            <?php for($i = 1; $i <= $current_manga['chapters']; $i++): ?>
                            <div class="chapter-item">
                                <a href="?page=chapter&manga=<?php echo $manga_id; ?>&chapter=<?php echo $i; ?>">
                                    <div class="chapter-info">
                                        <h3>Chapter <?php echo $i; ?></h3>
                                        <span class="chapter-date"><?php echo date('M d, Y', strtotime('-' . (3-$i) . ' days')); ?></span>
                                    </div>
                                    <div class="chapter-arrow">→</div>
                                </a>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php elseif($page == 'chapter'): ?>
            <?php 
            $pages = getMangaPages($manga_id, $chapter_id);
            $prev_chapter = $chapter_id > 1 ? $chapter_id - 1 : 3;
            $next_chapter = $chapter_id < 3 ? $chapter_id + 1 : 1;
            ?>
            
            <div class="reader-container">
                <div class="reader-controls">
                    <div class="chapter-navigation">
                        <a href="?page=chapter&manga=<?php echo $manga_id; ?>&chapter=<?php echo $prev_chapter; ?>" class="nav-btn prev-btn">
                            ← Previous Chapter
                        </a>
                        <select id="chapterSelect" onchange="changeChapter(this.value)">
                            <?php for($i = 1; $i <= 3; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo $i == $chapter_id ? 'selected' : ''; ?>>
                                Chapter <?php echo $i; ?>
                            </option>
                            <?php endfor; ?>
                        </select>
                        <a href="?page=chapter&manga=<?php echo $manga_id; ?>&chapter=<?php echo $next_chapter; ?>" class="nav-btn next-btn">
                            Next Chapter →
                        </a>
                    </div>
                </div>

                <div class="reader-content" id="readerContent">
                    <?php foreach($pages as $index => $page_url): ?>
                    <div class="manga-page">
                        <img src="<?php echo $page_url; ?>" alt="Page <?php echo $index + 1; ?>">
                        
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="reader-controls bottom-controls">
                    <div class="chapter-navigation">
                        <a href="?page=chapter&manga=<?php echo $manga_id; ?>&chapter=<?php echo $prev_chapter; ?>" class="nav-btn prev-btn">
                            ← Previous Chapter
                        </a>
                        <a href="?page=manga&manga=<?php echo $manga_id; ?>" class="nav-btn">Back to Manga</a>
                        <a href="?page=chapter&manga=<?php echo $manga_id; ?>&chapter=<?php echo $next_chapter; ?>" class="nav-btn next-btn">
                            Next Chapter →
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <div class="container">
            <p>© 2025 Aelango all rights reserved.</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth', 
                        block: 'start'
                    });
                }
            });
        });