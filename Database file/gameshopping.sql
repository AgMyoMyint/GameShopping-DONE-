-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 10:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Xbox One Games'),
(2, 'PS4 Games'),
(3, 'Nidtendo Wii Games'),
(4, 'XBox 360 Games'),
(5, 'PS3 Games');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `transaction_id`, `qty`, `price`, `address`, `address2`, `city`, `state`, `zipcode`) VALUES
(1, 1, 1, '0', 1, '55.99', 'Mandalay', 'Mandalay', 'Mandalay', 'Myanmar', '0707'),
(2, 1, 7, '0', 1, '55.99', 'mandlay, mandlay, mandlay', 'mandlay', 'mandlay', 'mandlay', '12321');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `image`, `price`) VALUES
(1, 1, 'Uncharted 4', '<p>Uncharted 4: A Thief\'s End is an action-adventure game developed by Naughty Dog and published by Sony Computer Entertainment for PlayStation 4 in May 2016. Following Uncharted 3: Drake\'s Deception, it is the final Uncharted game to feature protagonist Nathan Drake (portrayed by Nolan North). Drake, retired from fortune hunting with his wife Elena, reunites with his estranged older brother Sam and longtime partner Sully to search for Captain Henry Avery\'s lost treasure.</p>\r\n\r\n<p>The game features larger and more open levels than previous Uncharted games; players have more freedom to explore and move in combat, progress through enemy encounters undetected using stealth, and can use vehicles. Sony revealed Uncharted 4 at the North America PlayStation 4 launch event in November 2013. Development was hampered by extensive script changes and reshoots following the departures of lead Uncharted writer and creative director Amy Hennig and director Justin Richmond in March 2014. Bruce Straley and Neil Druckmann, who had directed Naughty Dog\'s previous game, The Last of Us, became the directors.</p>\r\n\r\n<p>Reviewers found Uncharted 4 a worthy conclusion to Nathan Drake\'s arc, with praise directed for its narrative, emotional depth, visual quality, multiplayer mode, improved gameplay, and music. It was the best-reviewed game of 2016 and received numerous year-end accolades, including various Game of the Year awards from several gaming publications and award events. The game sold over 2.7 million copies in its first week of release, becoming the fastest-selling entry in the series and among the best-selling PlayStation 4 games, and it is considered to be one of the greatest video games of all time. A standalone expansion pack, The Lost Legacy, was released in 2017.</p>', 'Uncharted4.jpg', '55.99'),
(2, 2, 'Call of Duty: WWII', 'Call of Duty: WWII is a first-person shooter video game developed by Sledgehammer Games and published by Activision. It was released worldwide on November 3, 2017 for Microsoft Windows, PlayStation 4 and Xbox One. It is the fourteenth main installment in the Call of Duty series and the first title in the series to be set primarily during World War II since Call of Duty: World at War in 2008.\r\n\r\nThe game\'s campaign is set in the European theatre, and is centered around a squad in the 1st Infantry Division, following their battles on the Western Front, and set mainly in the historical events of Operation Overlord. The player controls Ronald \"Red\" Daniels, who has squadmates that can supply the player with extra ammunition, health, or grenades; none of these are automatically replenished in the campaign. The multiplayer mode features map locations not seen in the campaign. The mode also features the new Divisions system, replacing the create-a-class system that previous games in the series used. A social hub, Headquarters, was also implemented into the game, allowing for players to interact with each other.\r\n\r\nSledgehammer Games were interested in bringing the series back to World War II after developing their previous title, Call of Duty: Advanced Warfare (2014), which featured advanced movements and futuristic warfare technology. Studio head Michael Condrey stated that he was unsure if a World War II game would feel right after creating a futuristic title like Advanced Warfare, but the developers ultimately decided to create a game in this time period. They also chose to include \"atrocities\" and Nazi extermination camps apparent during this time period in the campaign mode in order to deliver an authentic war story.\r\n\r\nUpon release, the game received generally positive reviews from critics, with many appreciating the return to the franchise\'s World War II roots. Praise was given towards its story, the combat support of squad members and return of the health bar in single-player, visuals, Zombies mode, and multiplayer. However, it was criticized for the single-player\'s lack of innovation and similarity to past games set in the same era. The game was a commercial success, creating $500 million of revenue within just three days of it release. It became the highest-grossing console game of 2017 in North America, generating over $1 billion of revenue by the end of the year.', 'CallOfDutyWWII.jpg', '60.00'),
(3, 2, 'Assassin\'s Creed Origins', 'Assassin\'s Creed Origins is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is the tenth major installment in the Assassin\'s Creed series and the successor to 2015\'s Assassin\'s Creed Syndicate. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 27, 2017.\r\n\r\nThe game is set in Egypt near the end of the Ptolemaic period (49–47 BC) and recounts the secret fictional history of real-world events. The story explores the origins of the centuries-long conflict between the Brotherhood of Assassins, who fight for peace by promoting liberty, and The Order of the Ancients—forerunners to the Templar Order—who desire peace through the forced imposition of order.\r\n\r\nOrigins received positive reviews from critics, who praised the story, characters, voice acting, reworked gameplay-systems, immersive world of Egypt and the visuals, while criticizing some of the pacing and technical issues. The game has been lauded as either the best or one of the best installments in the series by multiple critics.', 'AssassinCreedOrigins.jpg', '49.60'),
(4, 1, 'Dying Light: The Following', 'Dying Light: The Following is an expansion pack for the open-world first-person survival horror video game Dying Light. The game was developed by Techland, published by Warner Bros. Interactive Entertainment, and released for Microsoft Windows, Linux, PlayStation 4, and Xbox One on February 9, 2016. The expansion adds characters, a story campaign, weapons, and gameplay mechanics. Dying Light: The Following – Enhanced Edition includes Dying Light, Dying Light: The Following, and downloadable content released for the original game.', 'DyingLightTheFollowing.jpg', '50.50'),
(5, 1, 'Fortnite', 'Fortnite is a co-op sandbox survival game developed by Epic Games and People Can Fly and published by Epic Games. The game was released as a paid-for early access title for Microsoft Windows, macOS, PlayStation 4 and Xbox One on July 25, 2017, with a full free-to-play release expected in 2018. The retail versions of the game were published by Gearbox Publishing, while online distribution of the PC versions is handled by Epic\'s launcher.\r\n\r\nFortnite is set in contemporary Earth, where the sudden appearance of a worldwide storm causes 98% of the world\'s population to disappear, and zombie-like creatures rise to attack the remainder. Considered by Epic as a cross between Minecraft and Left 4 Dead, Fortnite has up to four players cooperating on various missions on randomly-generated maps to collect resources, build fortifications around defensive objectives that are meant to help fight the storm and protect survivors, and construct weapons and traps to engage in combat with waves of these creatures that attempt to destroy the objectives. Players gain rewards through these missions to improve their hero characters, support teams, and arsenal of weapon and trap schematics to be able to take on more difficult missions. The game is supported through microtransactions to purchase in-game currency that can be used towards these upgrades.\r\n\r\nA standalone mode, Fortnite Battle Royale, based on the battle royale game genre but based on the core Fortnite gameplay, was released for the same platforms in September 2017.', 'Fortnite.jpg', '20.90');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `join_date`) VALUES
(1, 'Brad', 'Traverary', 'amm@gmail.com', 'brad', 'password', '2018-04-15 05:20:29'),
(7, 'Aung', 'Myint', 'amm@gmail.com', 'AungMyoMyint19', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-04-17 05:54:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
