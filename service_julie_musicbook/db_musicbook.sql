-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2014 at 10:13 PM
-- Server version: 5.5.33
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_musicbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `album_title` varchar(24) NOT NULL,
  `album_artist` varchar(24) NOT NULL,
  `album_year` date NOT NULL,
  `album_image` varchar(24) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_title`, `album_artist`, `album_year`, `album_image`) VALUES
(1, 'In The Lonely Hour', 'Sam Smith', '2014-05-10', 'lonelyhour.jpg'),
(2, 'True', 'Avicii', '2013-10-16', 'true.jpg'),
(3, 'Hozier', 'Hozier', '2014-04-06', 'hozier.jpg'),
(4, 'Night Visions', 'Imagine Dragons', '2013-02-03', 'nightvisions.jpg'),
(5, 'The Definition', 'Jon Bellion', '2014-06-02', 'defin.jpg'),
(6, 'Get Wet', 'Krewella', '2013-03-04', 'getwet.jpg'),
(7, '1989', 'Taylor Swift', '2014-11-02', '1989.png'),
(8, 'Tritonia', 'Tritonal', '2014-05-19', 'tritonia.jpg'),
(9, 'Kiss Land', 'The Weeknd', '2014-08-06', 'kissland.jpg'),
(10, 'X', 'Ed Sherran', '2014-09-01', 'x.jpg'),
(11, 'Crash my Party', 'Luke Bryan', '2014-02-11', 'crashmyparty.jpg'),
(12, 'Where it all began', 'danshay', '2014-11-03', 'danshay.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artist`
--

CREATE TABLE `tbl_artist` (
  `artist_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(24) NOT NULL,
  `artist_genre` int(6) NOT NULL,
  `artist_album` int(6) NOT NULL,
  `arist_bio` varchar(500) NOT NULL,
  `artist_image` varchar(24) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_artist`
--

INSERT INTO `tbl_artist` (`artist_id`, `artist_name`, `artist_genre`, `artist_album`, `arist_bio`, `artist_image`) VALUES
(1, 'Sam Smith', 1, 1, 'Although the first solo single from soul-inspired, London-born artist Sam Smith was issued in early 2013, it was his soaring vocal contribution to Disclosure''s October 2012 U.K. garage track "Latch" that brought him to most people''s attention. For most of his teens, Smith balanced study with music, soaking in the raw and passionate approach to performance exemplified by his favorite artists at that time such as Aretha Franklin, Stevie Wonder, and Chaka Khan. "Latch" hit the upper reaches of the ', 'samsmith.jpg'),
(2, 'Avicii', 7, 2, 'Cleverly using dance music blogs as the platform to launch his career, Tim Bergling, aka Avicii, has since become one of the most prominent producers on the burgeoning Swedish house scene. Born in Stockholm in 1989, Bergling only started making music at the age of 18, writing and remixing tracks in his bedroom and then leaking them onto various blogs. Influenced by Daft Punk and Steve Angello, his melodic house sound gained a huge following, and led to support from Tiësto, who invited him to per', 'avicii.jpg'),
(4, 'Hozier', 3, 3, 'A unique and intelligent singer, songwriter, and multi-instrumentalist who cites James Joyce''s Portrait of an Artist as a Young Man, Leonard Cohen, John Lee Hooker, and community choral singing among his influences, Hozier (his stage and performing name) was born Andrew Hozier-Byrne on March 17, 1990 (which just so happened to be St. Patrick''s Day) in Bray, County Wicklow, Ireland. The son of a local blues musician, he literally grew up with the blues being played all around him. He joined his f', 'hozier.jpg'),
(5, 'Imagine Dragons', 6, 4, 'Las Vegas-based indie rockers Imagine Dragons formed in Provo, Utah in 2009. Like their desert-born stadium rock contemporaries the Killers, Imagine Dragons blend engaging, synth-based dance-pop with emotionally charged, Brit-pop-inspired alt-rock. After releasing a pair of well-received EPs (Imagine Dragons and Hell and Silence), the group inked a deal with Interscope Records and headed into West Hollywood''s famed Westlake Recording Studios with producer Alex Da Kid (Eminem, Paramore) to record', 'imaginedragons.jpg'),
(6, 'Jon Bellion', 1, 5, 'Singer/songwriter Jon Bellion makes contemporary pop that mixes R&B, hip-hop, and indie rock influences. Born on Long Island, New York, Bellion grew up focusing on his love of basketball. However, in his junior year of high school, his long gestating love of music, spurred on by such influences as Timbaland, Pharrell Wiliams, J Dilla, and Eminem, came into bloom after he began writing songs on his brother''s keyboard. After high school, Bellion enrolled in the music program at Long Island''s Five ', 'jonbellion.jpg'),
(7, 'Krewella', 7, 6, 'Jahan Yousaf, Yasmine Yousaf, and Kris Trindl (aka Rain Man) formed the EDM trio Krewella in Chicago, Illinois. They got together in 2007 but didn''t release their first material until 2011, when they uploaded a handful of songs -- including the jagged, celebratory "Life of the Party" -- to their Soundcloud page. In 2012, they self-released their first two EPs: Play Hard (June), featuring the reggae-flavored "Killin It," and Play Harder (December). The former reached number ten on Billboard''s Top', 'krewella.jpg'),
(8, 'Taylor Swift', 1, 7, 'Taylor Swift became one of country''s brightest (and youngest) faces in 2006, when the 16-year-old released her first album. Although new to the American public, Swift had been performing since her preteen years in Wyomissing, Pennsylvania, where she first took the stage as part of a children''s theater troupe. Encouraged by the troupe''s manager to pursue music instead, Swift began performing karaoke songs at a local mall, with open-mike gigs following shortly thereafter. She sang "The Star-Spangl', 'taylorswift.png'),
(9, 'Tritonal', 7, 7, 'Watch a live performance by TRITONAL and you’ll understand the hype. The American production and DJ duo of Chad Cisneros and Dave Reed have firmly situated themselves as one of the most electrifying acts in the international EDM scene. Their zest for life and music is apparent to anyone who’s witnessed them in person or through their speakers and is just one reason why they resonate intensely with their loyal followers, “Tritonians.”', 'tritonal.jpg'),
(10, 'The Weeknd', 8, 9, 'Allegedly “shrouded in mystery” despite a social media presence (with accompanying photos) on Twitter, Tumblr, Facebook, Soundcloud, and YouTube, as well as major support from fellow Torontonian Drake, alternative R&B act the Weeknd -- a solo outlet for vocalist Abel Tesfaye -- surfaced in March 2011 with House of Balloons. A nine-track, 50-minute mixtape made available for free download on the Weeknd website, House of Balloons was based in morose ballads filled with drug references and sexual l', 'theweeknd.jpg'),
(11, 'Ed Sheeran', 1, 10, 'Flame-haired singer/songwriter, beatboxer, and guitarist Ed Sheeran''s eclectic blend of acoustic pop, folk, and hip-hop has been championed by everyone from the underground grime scene to American Oscar winners. Born in Halifax, West Yorkshire, England in 1991, Sheeran released his first EP, The Orange Room, while still at school, and his first two albums, his self-titled debut and Want Some, by the age of 16. After moving to London to gain more live experience, his performance of the self-penne', 'edsherran.jpg'),
(12, 'Luke Bryan', 2, 11, 'Singer and songwriter Luke Bryan comes by his country influences naturally: he grew up in Leesburg, Georgia, a small town 100 miles from the Alabama border where his father grew peanuts and sold fertilizer for a living. Bryan helped his family work the farm when he was young, but in his early teens he developed a passion for country music, picking up his influences from his parents'' record collection, listening to the likes of George Strait, Conway Twitty, Ronnie Milsap, Alan Jackson, and Merle ', 'lukebryan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_friends`
--

CREATE TABLE `tbl_friends` (
  `user_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `friend_id` smallint(6) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_friends`
--

INSERT INTO `tbl_friends` (`user_id`, `friend_id`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `genre_title` varchar(24) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_title`) VALUES
(1, 'Pop'),
(2, 'Country'),
(3, 'Indie'),
(4, 'Hip Hop'),
(5, 'Rap'),
(6, 'Rock'),
(7, 'House'),
(8, 'R&B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `image_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `image_image` varchar(40) NOT NULL,
  `image_name` varchar(40) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`image_id`, `image_image`, `image_name`) VALUES
(1, 'thedefinition.jpg', 'The Definition album cover'),
(2, 'nightvisions.jpg', 'Night Visions album cover'),
(3, 'inthelonleyhour.jpg', 'In the Lonely Hour album cover');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_a_a`
--

CREATE TABLE `tbl_link_a_a` (
  `link_a_a_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `artist_id` smallint(6) NOT NULL,
  `album_id` smallint(6) NOT NULL,
  PRIMARY KEY (`link_a_a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_link_a_a`
--

INSERT INTO `tbl_link_a_a` (`link_a_a_id`, `artist_id`, `album_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_a_s`
--

CREATE TABLE `tbl_link_a_s` (
  `link_a_s_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `artist_id` smallint(6) NOT NULL,
  `song_id` smallint(6) NOT NULL,
  PRIMARY KEY (`link_a_s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_link_a_s`
--

INSERT INTO `tbl_link_a_s` (`link_a_s_id`, `artist_id`, `song_id`) VALUES
(1, 5, 10),
(2, 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_f_u`
--

CREATE TABLE `tbl_link_f_u` (
  `link_f_u_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(6) NOT NULL,
  `friend_id` smallint(6) NOT NULL,
  PRIMARY KEY (`link_f_u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_link_f_u`
--

INSERT INTO `tbl_link_f_u` (`link_f_u_id`, `user_id`, `friend_id`) VALUES
(13, 1, 2),
(14, 2, 1),
(15, 1, 44),
(16, 44, 1),
(17, 1, 3),
(18, 3, 1),
(19, 1, 41),
(20, 41, 1),
(21, 1, 45),
(22, 45, 1),
(23, 1, 46),
(24, 46, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 43),
(28, 43, 1),
(29, 2, 45),
(30, 45, 2),
(31, 2, 2),
(32, 2, 2),
(33, 2, 44),
(34, 44, 2),
(35, 2, 3),
(36, 3, 2),
(37, 2, 41),
(38, 41, 2),
(39, 2, 46),
(40, 46, 2),
(41, 1, 116),
(42, 116, 1),
(43, 117, 41),
(44, 41, 117),
(45, 117, 3),
(46, 3, 117),
(47, 1, 117),
(48, 117, 1),
(49, 1, 118),
(50, 118, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_s_a`
--

CREATE TABLE `tbl_link_s_a` (
  `link_s_a_link` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `song_id` smallint(6) NOT NULL,
  `album_id` smallint(6) NOT NULL,
  PRIMARY KEY (`link_s_a_link`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_link_s_a`
--

INSERT INTO `tbl_link_s_a` (`link_s_a_link`, `song_id`, `album_id`) VALUES
(1, 7, 5),
(2, 6, 5),
(3, 1, 1),
(4, 10, 2),
(5, 2, 3),
(6, 23, 4),
(7, 22, 6),
(8, 11, 7),
(9, 15, 8),
(10, 14, 9),
(11, 6, 10),
(12, 5, 11),
(13, 27, 12),
(14, 2, 1),
(15, 3, 1),
(16, 6, 1),
(17, 9, 1),
(18, 5, 2),
(19, 14, 2),
(20, 18, 2),
(21, 23, 3),
(22, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_u_p`
--

CREATE TABLE `tbl_link_u_p` (
  `link_u_p_id` smallint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(8) NOT NULL,
  `playlist_id` smallint(8) NOT NULL,
  PRIMARY KEY (`link_u_p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_playlist`
--

CREATE TABLE `tbl_playlist` (
  `playlist_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `playlist_title` varchar(24) NOT NULL,
  `playlist_genre` smallint(6) NOT NULL,
  `playlist_song_id` int(6) NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_playlist`
--

INSERT INTO `tbl_playlist` (`playlist_id`, `playlist_title`, `playlist_genre`, `playlist_song_id`) VALUES
(1, 'Country', 1, 0),
(2, 'Hip hop', 7, 0),
(3, 'Driving Tunes', 1, 0),
(4, 'Gettin'' down', 8, 0),
(5, 'Coding my life away', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_songs`
--

CREATE TABLE `tbl_songs` (
  `song_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `song_title` varchar(24) NOT NULL,
  `song_artist` smallint(4) NOT NULL,
  `song_album` smallint(4) NOT NULL,
  `song_genre` smallint(4) NOT NULL,
  `song_mp3` varchar(24) NOT NULL,
  `song_image` varchar(24) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_songs`
--

INSERT INTO `tbl_songs` (`song_id`, `song_title`, `song_artist`, `song_album`, `song_genre`, `song_mp3`, `song_image`) VALUES
(1, 'Munny Right', 6, 5, 1, 'munnyright.mp3', '1'),
(2, 'Carry Your Throne', 6, 5, 1, 'carryyourthrone.mp3', '1'),
(3, 'Pre-Occupied', 6, 5, 1, 'pre-occupied,mp3', '1'),
(4, 'Human', 6, 5, 1, 'human.mp3', '1'),
(5, 'Run Wild', 6, 5, 1, 'runwild.mp3', '1'),
(6, 'A Haunted House', 6, 5, 1, 'ahauntedhouse.mp3', '1'),
(7, 'Jungle', 6, 5, 1, 'jungle.mp3', '1'),
(8, 'Simple and Sweet', 6, 5, 1, 'simpleandsweet.mp3', '1'),
(9, 'An Immigrant', 6, 5, 1, 'animmigrant.mp3', '1'),
(10, 'Ooh', 6, 5, 1, 'ooh.mp3', '1'),
(11, 'Luxury', 6, 5, 1, 'luxury.mp3', '1'),
(12, 'Radioactive', 5, 4, 3, 'radioactive.mp3', '2'),
(13, 'Tiptoe', 5, 4, 3, 'tiptoe.mp3', '2'),
(14, 'It''s Time', 5, 4, 3, 'it''stime.mp3', '2'),
(15, 'Demons', 5, 4, 3, 'demons.mp3', '2'),
(16, 'On Top of the World', 5, 4, 3, 'ontopoftheworld.mp3', '2'),
(17, 'Amsterdam', 5, 4, 3, 'amsterdam,mp3', '2'),
(18, 'Hear Me', 5, 4, 3, 'hearme.mp3', '2'),
(19, 'Every Night', 5, 4, 3, 'everynight.mp3', '2'),
(20, 'Bleeding Out', 5, 4, 3, 'bleedingout.mp3', '2'),
(21, 'Underdog', 5, 4, 3, 'underdog.mp3', '2'),
(22, 'Working Man', 5, 4, 3, 'workingman.mp3', '2'),
(23, 'Fallen', 5, 4, 3, 'fallen.mp3', '2'),
(24, 'Money on my Mind', 1, 1, 1, 'moneyonmymind.mp3', '3'),
(25, 'Good Thing', 1, 1, 1, 'goodthing.mp3', '3'),
(26, 'Stay with Me', 1, 1, 1, 'staywithme.mp3', '3'),
(27, 'Leave your Lover', 1, 1, 1, 'leaveyourlover.mp3', '3'),
(28, 'I''m Not the Only One', 1, 1, 1, 'i''mnottheonlyone.mp3', '3'),
(29, 'I''ve Told You Now', 1, 1, 1, 'i''vetoldyounow.mp3', '3'),
(30, 'Like I Can', 1, 1, 1, 'likeican.mp3', '3'),
(31, 'Life Support', 1, 1, 1, 'lifesupport.mp3', '3'),
(32, 'Not In That Way', 1, 1, 1, 'notinthatway.mp3', '3'),
(33, 'Lay Me Down', 1, 1, 1, 'laymedown.mp3', '3'),
(34, 'Restart', 1, 1, 1, 'restart.mp3', '3'),
(35, 'Latch', 1, 1, 1, 'latch.mp3', '3'),
(36, 'La La La', 1, 1, 1, 'lalala.mp3', '3'),
(37, 'Make it to Me', 1, 1, 1, 'makeittome.mp3', '3'),
(38, '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(24) NOT NULL,
  `user_lname` varchar(24) NOT NULL,
  `user_username` varchar(24) NOT NULL,
  `user_password` varchar(8) NOT NULL,
  `user_email` varchar(24) NOT NULL,
  `user_image` varchar(24) NOT NULL DEFAULT 'default_profile.jpg',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_username`, `user_password`, `user_email`, `user_image`) VALUES
(1, 'Julie', 'Service', 'jservice', 'password', 'julie.service@live.ca', 'jservice.jpg'),
(2, 'Brieanna', 'Mann', 'Bmann', 'password', 'brieanna.mann@live.ca', 'bmann.jpg'),
(3, 'Alicia', 'Snake', 'Asnake', 'password', 'asnake@live.ca', 'asnake.jpg'),
(41, 'Shane', 'Wade', 'Tmoney', 'password', 'test@live.ca', 'tmoney.jpg'),
(43, 'Andreas', 'Dimattia', 'Gucci-licious', 'password', 'a.d@live.ca', 'andreas.jpg'),
(44, 'Daniella', 'Stevens', 'Dabnellia', 'password', 'dab@live.ca', 'daniella.jpg'),
(45, 'Jade', 'Lockhart', 'JLock', 'password', 'jlo@gmail.com', 'jade.png'),
(46, 'Jessica', 'Ticehurst', 'Yessica', 'password', 'jess@live.ca', 'jess.png'),
(117, 'Problem', '99', 'AintOne', 'password', 'probz@live.ca', 'default_profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE `tbl_user_login` (
  `user_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `user_login_user_name` varchar(24) NOT NULL,
  `user_login_password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`user_id`, `user_login_user_name`, `user_login_password`) VALUES
(1, 'jservice', 'password'),
(2, 'bmann', 'password'),
(3, 'kcooper', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         