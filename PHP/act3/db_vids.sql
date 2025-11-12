-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 07:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vids`
--
CREATE DATABASE IF NOT EXISTS `db_vids` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_vids`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

DROP TABLE IF EXISTS `tbl_videos`;
CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date_uploaded` text NOT NULL,
  `url` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`id`, `title`, `description`, `date_uploaded`, `url`, `thumbnail`) VALUES
(1, 'roll', 'lol do u play bedwars\r\njoin my discord- https://discord.gg/narpy', 'Jun 10, 2019', 'https://www.youtube.com/watch?v=gGn6ahUYkmY', 'https://img.youtube.com/vi/gGn6ahUYkmY/sddefault.jpg'),
(2, 'spin', 'spinny boye\r\nthis video is created by me.\r\n\r\njoin my discord!- https://discord.gg/narpy\r\n\r\nmusic used ► https://soundcloud.com/mitsukiyo_5/chocolate-lemon-free-download', 'Apr 18, 2019', 'https://www.youtube.com/watch?v=oBloyiprdEM', 'https://img.youtube.com/vi/oBloyiprdEM/maxresdefault.jpg'),
(3, 'Cat Bites Itself', '<no-description>', 'Mar 2, 2021', 'https://www.youtube.com/watch?v=bTB9PZEc27c', 'https://img.youtube.com/vi/bTB9PZEc27c/maxresdefault.jpg'),
(4, 'watchmen ligma meme: the movie', 'Rorschach fell for the oldest trick in the book\r\n\r\nInstagram: @luigi.kun', 'Aug 27, 2019', 'https://www.youtube.com/watch?v=maAIWplFWUw', 'https://img.youtube.com/vi/maAIWplFWUw/maxresdefault.jpg'),
(5, 'Cat Tries to Meow While Shaking Head - 1035268', 'For licensing/usage please contact: licensing(at)jukinmedia.com', 'Apr 25, 2019', 'https://www.youtube.com/watch?v=5qwYs6RbZs4', 'https://img.youtube.com/vi/5qwYs6RbZs4/sddefault.jpg'),
(6, 'When you try to fight but your arms are too short', 'Jukin Media Verified (Original) * For licensing / permission to use: Contact - licensing(at)jukinmediadotcom\\n\r\nSubmit your videos here: http://bit.ly/2iFnUya', 'Apr 26, 2017', 'https://www.youtube.com/watch?v=n_wgWLuFvwk', 'https://img.youtube.com/vi/n_wgWLuFvwk/sddefault.jpg'),
(7, 'Rick Astley - Never Gonna Give You Up (Pianoforte) (Official Audio)', 'The official audio for Never Gonna Give You Up (Pianoforte). \r\nFrom the new album The Best Of Me. Buy/Listen: https://RickAstley.lnk.to/BestID \r\nLimited edition formats available on Rick\'s store: https://RickAstley.lnk.to/storeID \r\n\r\nTour dates: Tour http://www.rickastley.co.uk/ \r\n\r\nFollow Rick:\r\nFacebook: https://www.facebook.com/RickAstley/\r\nTwitter: https://twitter.com/rickastley\r\nInstagram: https://www.instagram.com/officialric...', 'Oct 22, 2019', 'https://www.youtube.com/watch?v=GHMjD0Lp5DY', 'https://img.youtube.com/vi/GHMjD0Lp5DY/maxresdefault.jpg'),
(8, 'Rondo & Poss', 'Stronk.', 'Feb 24, 2021', 'https://www.youtube.com/watch?v=lAH-LGyhg-A', 'https://img.youtube.com/vi/lAH-LGyhg-A/maxresdefault.jpg'),
(9, 'My Only Lola Bunny', 'Support my Patreon: https://www.patreon.com/JamesLeeAnima...\r\n\r\nFollow my Twitter:    https://twitter.com/JamesLee03\r\nFollow my Instagram:  https://www.instagram.com/jamesleeani... \r\n\r\nEmail: mail@jameslee.art', 'Mar 30, 2021', 'https://www.youtube.com/watch?v=A7PJQa1RfM0', 'https://img.youtube.com/vi/A7PJQa1RfM0/maxresdefault.jpg'),
(10, 'ORIGINAL VIDEO: Kitty sits on hedgehog!', 'My 8 month old ragdoll learns quickly that hedgehogs are prickly!\r\n\r\nLucy is a 15 month old African pygmy hedgehog and my ragdoll is Lily.\r\n\r\nAnd thanks to tastefullyoffensive.com for featuring this video! :)', 'Sep 27, 2013', 'https://www.youtube.com/watch?v=zP5KaKrcQF4', 'https://img.youtube.com/vi/zP5KaKrcQF4/maxresdefault.jpg'),
(11, 'Cat Feasts On Catnip As Owner Tries To Stop Them - 1169329', 'To license this content click here and use “RM1” code at checkout\r\nhttps://www.jukinmedia.com/licensing/...', 'Jan 12, 2021', 'https://www.youtube.com/watch?v=P0OB9p0zqx0', 'https://img.youtube.com/vi/P0OB9p0zqx0/sddefault.jpg'),
(12, 'If Fantasy Characters Made Movies About Our World', 'How do you come up with this stuff?', 'Mar 17, 2021', 'https://www.youtube.com/watch?v=waQBlmLDbzc', 'https://img.youtube.com/vi/waQBlmLDbzc/maxresdefault.jpg'),
(13, 'How This Chair Conquered the World', 'If you want to support documentaries like this make sure to subscribe!', 'Apr 28, 2020', 'https://www.youtube.com/watch?v=JwApFGwMIMQ', 'https://img.youtube.com/vi/JwApFGwMIMQ/maxresdefault.jpg'),
(14, 'Whose tail is this?', 'Maras is as stupid as he is cute, I placed him in a box, and even though he was comfortable, he couldn\'t help but notice an impostor of a tail attached to his body!  Notice how he bites and licks at the same time.  He\'s very talented.', 'Oct 16, 2015', 'https://www.youtube.com/watch?v=FHtyYbFR_d8', 'https://img.youtube.com/vi/FHtyYbFR_d8/maxresdefault.jpg'),
(15, 'Paul Rugg Relaxes By Petting His Dog, Lucky', 'The original video. There. I said it.', 'Oct 3, 2017', 'https://www.youtube.com/watch?v=AdMgVkp4OXI', 'https://img.youtube.com/vi/AdMgVkp4OXI/hqdefault.jpg'),
(16, 'Home From College!', 'Lucky The Chihuahua welcomes home a college student!', 'May 24, 2018', 'https://www.youtube.com/watch?v=a_h1uv8fy7w', 'https://img.youtube.com/vi/a_h1uv8fy7w/maxresdefault.jpg'),
(17, 'Take Him To Detroit', 'Short clip from Kentucky Fried Movie, Fistful of Yen', 'May 26, 2013', 'https://www.youtube.com/watch?v=ynY2begPzoM', 'https://img.youtube.com/vi/ynY2begPzoM/sddefault.jpg'),
(18, 'Lucky Therapy', 'Lucky The Chihuahua Spends His First Day As A Therapy Dog', 'Jul 14, 2018', 'https://www.youtube.com/watch?v=ototMJ5JJyU', 'https://img.youtube.com/vi/ototMJ5JJyU/maxresdefault.jpg'),
(19, 'Keanu Reeves Plays With Puppies While Answering Fan Questions', 'Keanu Reeves (John Wick, The Matrix) gives us the scoop on his favorite sandwich, his new Toy Story 4 character, and what that picture of him riding a horse in Brooklyn was all about. ', 'May 17, 2019', 'https://www.youtube.com/watch?v=rOqUiXhECos', 'https://img.youtube.com/vi/rOqUiXhECos/maxresdefault.jpg'),
(20, 'I Am Gabe Newell Full', 'Bored, it\'s 12:41 AM, i\'m tired, I can\'t sleep. THE END\r\n\r\nAll credit goes to Mega64', 'Sep 26, 2010', 'https://www.youtube.com/watch?v=3IT2Cc_5WxE', 'https://img.youtube.com/vi/3IT2Cc_5WxE/hqdefault.jpg'),
(21, 'Sir! What Are Your Orders?', 'Hold.', 'Feb 1, 2021', 'https://www.youtube.com/watch?v=XaKgRe6GuUQ', 'https://img.youtube.com/vi/XaKgRe6GuUQ/maxresdefault.jpg'),
(22, 'もぺもぺ', '//!--- This movie is NOT for children. ---!//\r\n', 'Oct 9, 2017', 'https://www.youtube.com/watch?v=nC-bVtpIMd4', 'https://img.youtube.com/vi/nC-bVtpIMd4/maxresdefault.jpg'),
(23, 'Guy dresses up as dog\'s favorite toy ORIGINAL', 'Jolene meets her favorite toy come to life.', 'Oct 28, 2016', 'https://www.youtube.com/watch?v=l7op92W7voE', 'https://img.youtube.com/vi/l7op92W7voE/maxresdefault.jpg'),
(24, 'Playing an RPG for the first time', 'Adventure awaits!', 'Nov 21, 2020', 'https://www.youtube.com/watch?v=SY3y6zNTiLs', 'https://img.youtube.com/vi/SY3y6zNTiLs/maxresdefault.jpg'),
(25, 'Hearing Enemy Music in an RPG', 'What was that?', 'Dec 29, 2020', 'https://www.youtube.com/watch?v=A9fq3GLlP5M', 'https://img.youtube.com/vi/A9fq3GLlP5M/maxresdefault.jpg'),
(26, 'Playing an RPG for the second time', 'Adventure awaits again.', 'Jan 13, 2021', 'https://www.youtube.com/watch?v=J8k2DwKnL2o', 'https://img.youtube.com/vi/J8k2DwKnL2o/maxresdefault.jpg'),
(27, 'Tailing Missions from the NPC\'s Perspective', 'You think someone is following us?', 'Dec 1, 2020', 'https://www.youtube.com/watch?v=iP468OEln4U', 'https://img.youtube.com/vi/iP468OEln4U/maxresdefault.jpg'),
(28, 'The Giant', 'Beware when crossing The Valley.', 'Sep 15, 2020', 'https://www.youtube.com/watch?v=t-XOlgAZTlM', 'https://img.youtube.com/vi/t-XOlgAZTlM/maxresdefault.jpg'),
(29, 'when u wake up for work but remember u got the day off', 'sorry everyone who got the notification for this vid while they were sleeping but didnt have the day off', 'Oct 12, 2020', 'https://www.youtube.com/watch?v=YRTR8YTeuuk', 'https://img.youtube.com/vi/YRTR8YTeuuk/maxresdefault.jpg'),
(30, 'CHOCOLATE', 'CHOOOOOOOOOCOOOOOOLAAAAAAAAAAAAATE!!!!!!!!!!!!', 'Sep 13, 2020', 'https://www.youtube.com/watch?v=ISOly6S0OlE', 'https://img.youtube.com/vi/ISOly6S0OlE/maxresdefault.jpg'),
(31, 'にゃんごすたー / 打首獄門同好会　布団の中から出たくない(20180304 今治ABC祭)', 'コサックダンスをしながら「りんごのひとりごと」の歌とともに登場^^', 'Mar 5, 2018', 'https://www.youtube.com/watch?v=ouoBPgMqaYE', 'https://img.youtube.com/vi/ouoBPgMqaYE/maxresdefault.jpg'),
(32, 'Dragonforce - through the fire and flames on flute', 'please youtube don´t clear this video.. omg you don´t know how hard can be this fu%%&&g song... i know the copyright and that shit..', 'Jan 4, 2011', 'https://www.youtube.com/watch?v=tyTz_-EQOXE', 'https://img.youtube.com/vi/tyTz_-EQOXE/hqdefault.jpg'),
(33, 'Dog of Song', 'Soothe yourself to the sound of dog warbling.', 'Dec 3, 2017', 'https://www.youtube.com/watch?v=CNEuzhr7zQU', 'https://img.youtube.com/vi/CNEuzhr7zQU/maxresdefault.jpg'),
(34, 'how is prangent formed', 'A glimpse into the wonderful world of Yahoo! Answers. Song is Curley Shirley by Otto Sieben.', 'Oct 21, 2016', 'https://www.youtube.com/watch?v=EShUeudtaFg', 'https://img.youtube.com/vi/EShUeudtaFg/hqdefault.jpg'),
(35, 'Nyangostar Drum Performance \"Anpanman March”', 'Events held in Yamato Takada City, Nara Prefecture, Japan in November 2017\r\nNyangostar Drum Performance \"Anpanman March”', 'Mar 2, 2019', 'https://www.youtube.com/watch?v=R4bVhSYm8do', 'https://img.youtube.com/vi/R4bVhSYm8do/maxresdefault.jpg'),
(36, 'Dorime Doge (Original)', 'Atonement is required. Now with closed caption (English translation).', 'Dec 18, 2019', 'https://www.youtube.com/watch?v=kLaaJ_aeoyM', 'https://img.youtube.com/vi/kLaaJ_aeoyM/sddefault.jpg'),
(37, 'PERRY THE PLATYPUS ???', 'dr doofenshmirtz do be goofenshmirtzing', 'Feb 12, 2021', 'https://www.youtube.com/watch?v=XZRrf1Y-Ggo', 'https://img.youtube.com/vi/XZRrf1Y-Ggo/sddefault.jpg'),
(38, 'Dog of Wisdom', 'Dogs. \r\n\r\nCute. \r\n\r\nWhat are they good for? \r\n\r\nAbsolutely petting', 'Jul 24, 2015', 'https://www.youtube.com/watch?v=D-UmfqFjpl0', 'https://img.youtube.com/vi/D-UmfqFjpl0/sddefault.jpg'),
(39, 'What It Takes to Break a RAM with ESD (ft. Linus Tech Tips)', 'Watch my Colab with Linus: https://youtu.be/nXkgbmr3dRA\r\nWe handle computer parts without ESD protection most of the times. But what does it take to break one with ESD through human body? Let’s check it out!', 'Dec 23, 2020', 'https://www.youtube.com/watch?v=4SjOv_szzVM', 'https://img.youtube.com/vi/4SjOv_szzVM/maxresdefault.jpg'),
(40, 'god is dead OwO', 'fwedwick nietzsche\r\n\r\nmusic: rannar sillard - choir ambience', 'Apr 13, 2019', 'https://www.youtube.com/watch?v=dGDH3meSPyk', 'https://img.youtube.com/vi/dGDH3meSPyk/hqdefault.jpg'),
(41, 'Vib Ribbon \"How to play\" 1080p HD', 'The PAL version of Vib Ribbon for PS1. This is an incredibly addictive rhythm game that will test your reaction time and how well you can keep a beat and see the obstacles coming at you.', 'Jun 9, 2013', 'https://www.youtube.com/watch?v=cFXz_xKQa40', 'https://img.youtube.com/vi/cFXz_xKQa40/maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
