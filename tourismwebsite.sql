-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 08:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `pname`, `uname`, `massage`) VALUES
(13, 'Ash1', 'LalbaghFort', 'go to hell'),
(21, 'Ash1', 'JAFLONG', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `divi` tinytext NOT NULL,
  `des` longtext NOT NULL,
  `hname1` tinytext NOT NULL,
  `hadd1` longtext NOT NULL,
  `hname2` tinytext NOT NULL,
  `hadd2` longtext NOT NULL,
  `rname1` tinytext NOT NULL,
  `radd1` longtext NOT NULL,
  `rname2` tinytext NOT NULL,
  `radd2` longtext NOT NULL,
  `photo1` longtext NOT NULL,
  `photo2` longtext NOT NULL,
  `photo3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `divi`, `des`, `hname1`, `hadd1`, `hname2`, `hadd2`, `rname1`, `radd1`, `rname2`, `radd2`, `photo1`, `photo2`, `photo3`) VALUES
(2, 'Ahsan Manzil', 'Dhaka', 'In Mughal era, there was a garden house of Sheikh Enayet Ullah, the landlord of Jamalpur Porgona (district), in this place. Sheikh Enayet Ullah was a very charming person. He acquired a very big area in Kumortuli (Kumartuli) and included it in his garden house. Here he built a beautiful palace and named it \"Rongmohol\" (Rangmahal). He used to enjoy here keeping beautiful girls collected from the country and abroad, dressing them with gorgeous dresses and expensive ornaments. There is a saying that, the foujdar of Dhaka (representative of mughal emperor) was attracted to one of the beautiful girls. He invited Sheikh Enayet Ullah to a party one night and killed him in a conspiracy when he was returning home. That girl also committed suicide in anger and sorrow. There was a grave of Sheikh Enayet Ullah in the north-east corner of the palace yard which was ruined in the beginning of the 20th century.', 'GRACE 21 (SMART HOTEL)', 'Plot # 1 & 3, Road # 21, Nikunja-2, 1229 Dhaka, Bangladesh', 'Sky City Hotel Dhaka', '47 Shiddeshwari Circular Road Malibag Mor, 1217 Dhaka, Bangladesh', 'Seasonal Tastes Restaurant', '1 Rd 45, Dhaka 1212', 'Pit Stop Dhaka', 'Dhaka 1212', 'Ahsan Manzil1.jpg', 'Ahsan Manzil2.jpg', 'Ahsan Manzil3.jpg'),
(3, 'LalbaghFort', 'Dhaka', 'The Mughal prince Muhammad Azam, third son of Aurangzeb started the work of the fort in 1678 during his vice-royalty in Bengal. He stayed in Bengal for 15 months. The fort remained incomplete when he was called away by his father Aurangzeb.\r\nShaista Khan was the new subahdar of Dhaka in that time, and he did not complete the fort. In 1684, the daughter of Shaista Khan named Iran Dukht Pari Bibi died there. After her death, he started to think the fort as unlucky, and left the structure incomplete.[2] Among the three major parts of Lalbagh Fort, one is the tomb of Pari Bibi.\r\nAfter Shaista Khan left Dhaka, it lost its popularity. The main cause was that the capital was moved from Dhaka to Murshidabad. After the end of the royal Mughal period, the fort became abandoned. In 1844, the area acquired its name as Lalbagh replacing Aurangabad, and the fort became Lalbagh Fort.\r\n', 'GRACE 21 (SMART HOTEL)', 'Plot # 1 & 3, Road # 21, Nikunja-2, 1229 Dhaka, Bangladesh', 'Sky City Hotel Dhaka', '47 Shiddeshwari Circular Road Malibag Mor, 1217 Dhaka, Bangladesh', 'Seasonal Tastes Restaurant', '1 Rd 45, Dhaka 1212', 'Pit Stop Dhaka', 'Dhaka 1212', 'Lalbagh Fort1.jpg', 'Lalbagh Fort2.jpg', 'Lalbagh Fort3.jpg'),
(4, 'Star_Mosque', 'Dhaka', 'Star Mosque was first built by Mirza Ghulam Pir, as a three-domed oblong edifice. But an over-enthusiastic and zealous merchant named Ali Jan Bepari completely remodeled and reconstructed it with extremely delicate and richly colored tiles of variegated patterns. Ali Jan has added the new verandah, that is mentioned in the introduction, on the east and spent lavishly on importing Japanese and English decorated China clay tiles to improve the inner and outer show of the mosque. It is now a five-domed structure. In 1987, two domes have been raised on an extension to the northern side without any respect to its antiquity, architectural style, and decoration.', 'GRACE 21 (SMART HOTEL)', 'Plot # 1 & 3, Road # 21, Nikunja-2, 1229 Dhaka, Bangladesh', 'Sky City Hotel Dhaka', '47 Shiddeshwari Circular Road Malibag Mor, 1217 Dhaka, Bangladesh', 'Seasonal Tastes Restaurant', '1 Rd 45, Dhaka 1212', 'Pit Stop Dhaka', 'Dhaka 1212', 'Star Mosque1.jpg', 'Star Mosque2.png', 'Star Mosque3.jpg'),
(5, 'TANGOAR HAOR', 'Sylhet', 'At the foot of the Meghalaya ranges in the middle of Tahirpur and Dharmapasha Upazilla under Sunamgonj district in north-east Sylhet is a vast swampland popularly known as Tangoar Haor that spans over an area of nearly 100 square kilometres. Cascading from the Meghalaya about 30 waterfalls flow into this large water body engendering a charm that is truly rare. In 2000, it was internationally recognised as a Ramseur site. After the Sundarbans, it is the second Ramseur site in Bangladesh. Prior to that, in 1999, the government of Bangladesh earmarked Tangoar Haor as an ecologically critical area.', 'Hotel Noorjahan Grand', 'Waves 1, Ritz Tower Dargah Gate, 3100 Sylhet, Bangladesh', 'Nirvana Inn', 'Mirzajangal Road, 3100 Sylhet, Bangladesh', 'Stacks O\'Snacks', 'East Zindabazar, Baruthkhana Rd, Sylhet 3100', 'Woondaal King Kabab', 'G.M. Baksh Tower, 22 Sir Iqbal Rd, Khulna 9100', 'TANGOAR HAOR1.png', 'TANGOAR HAOR2.jpg', 'TANGOAR HAOR3.jpg'),
(6, 'Sreemangal', 'Sylhet', 'Despite being an Upazilla – a small administrative unit – under Moulvibazar district in Sylhet, Sreemongol has long been credited as a top tourist attraction having earned its recognition as a town as early as the beginning of the19th century. Even though the first ever tea garden in Sylhet – Malnichara – was established near Sylhet city in 1854, large tea estates eventually found their niche in Sreemongol town and the surrounding hills and mountains. The only tea research institute in Bangladesh – BTRI – which is a popular tourist destination is also situated in this town. Easily accessible from Dhaka by road or train, Sreemongol has a lot to offer for tourists. Of the 138 tea gardens in Greater Sylhet, 38 are situated in Sreemongol, and this number would be no fewer than 60 when added to gardens in the surrounding areas.', 'Hotel Noorjahan Grand', 'Waves 1, Ritz Tower Dargah Gate, 3100 Sylhet, Bangladesh', 'Nirvana Inn', 'Mirzajangal Road, 3100 Sylhet, Bangladesh', 'Stacks O\'Snacks', 'East Zindabazar, Baruthkhana Rd, Sylhet 3100', 'Woondaal King Kabab', 'G.M. Baksh Tower, 22 Sir Iqbal Rd, Khulna 9100', 'Sreemangal1.jpeg', 'Sreemangal2.jpg', 'Sreemangal3.jpg'),
(7, 'JAFLONG', 'Sylhet', 'Despite the loss of its former splendour due to unrestricted mining and crushing of stones, Jaflong is still a ‘must-see’ destination for tourists visiting Sylhet. Flowing from the north Khasi mountains, the river Dauki enters Bangladesh under the name ‘Piyain’, along the bank of which lies the spectacular Jaflong. About 62 km north-east from Sylhet city, Jaflong is in the East Jaflong Union under Guainghat Upazilla. Visitors can hire boats to go to the Zero Point and see the beautiful hanging bridge over the Dauki. Just across the river on the western side are the villages Sangrampunji and Nakshiapunji, which are accessible through ferries or rented boats. Just beside Nakshiapunji is Jaflong Tea Garden which is a top tourist attraction.', 'Hotel Noorjahan Grand', 'Waves 1, Ritz Tower Dargah Gate, 3100 Sylhet, Bangladesh', 'Nirvana Inn', 'Mirzajangal Road, 3100 Sylhet, Bangladesh', 'Stacks O\'Snacks', 'East Zindabazar, Baruthkhana Rd, Sylhet 3100', 'Woondaal King Kabab', 'G.M. Baksh Tower, 22 Sir Iqbal Rd, Khulna 9100', 'JAFLONG1.jpg', 'JAFLONG2.jpg', 'JAFLONG3.jpg'),
(8, 'Sundarbans', 'Khulna', 'The Sundarbans (Bengali: সুন্দরবন, romanized: Shundorbôn, lit. \'Beautiful forest\', Bengali pronunciation: [ˈʃundorbɔn])[3][4] is a mangrove area in the delta formed by the confluence of Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal. It spans from the Hooghly River in India\'s state of West Bengal to the Baleswar River in Bangladesh. It comprises closed and open mangrove forests, agriculturally used land, mudflats and barren land, and is intersected by multiple tidal streams and channels. Four protected areas in the Sundarbans are enlisted as UNESCO World Heritage Sites, viz Sundarbans National Park, Sundarbans West, Sundarbans South and Sundarbans East Wildlife Sanctuaries\r\nThe Sundarbans mangrove forest covers an area of about 10,000 km2 (3,900 sq mi), of which forests in Bangladesh\'s Khulna Division extend over 6,017 km2 (2,323 sq mi) and in West Bengal, they extend over 4,260 km2 (1,640 sq mi) across the South 24 Parganas and North 24 Parganas districts.[6] The most abundant tree species are sundri (Heritiera fomes) and gewa (Excoecaria agallocha). The forests provide habitat to 453 faunal wildlife, including 290 bird, 120 fish, 42 mammal, 35 reptile and eight amphibian species.', 'Tiger Garden Int Hotel', '01 KDA Avenue, Shib Bari More Khulna Khulna 9100 01 KDA Avenue, Shib Bari More Khulna Khulna 9100, 9100 Khulna, Bangladesh', 'Hotel Castle Salam', 'Hotel Castle Salam G-8, K.D.A. Avenue, Khulna-9000, Bangladesh, 9000 Khulna, Bangladesh', 'CityLight Cafe & Restaurant', 'G.M. Baksh Tower, 22 Sir Iqbal Rd, Khulna 9100', 'Bistro C', 'Khulna', 'Sundarbans1.jpg', 'Sundarbans2.jpg', 'Sundarbans3.jpg'),
(9, 'Sat Gambuj Mosque', 'Khulna', 'A few kilometers to the north of Peelkhana, for long the end of Mughal Dhaka, was the Jafarbad or Katasur area, originally part of mouza Sarai Begumpur. Many of the mouzas (or revenue circles) were delineated during the reign of Shershah and later by Kartalab Khan. A small urban settlement on a route along the river, this was an alternative to reach Brahmaputra or Garh Jaripa without having to go through the hostile areas along the main stream of Sitalakhya and Brahmaputra on the east. This is evident from its geographic and strategic location, origin of the names of the locality, and the remnants around it.\r\nThe place where the seven-domed mosque is was known as Sarai Jafarbad or Katasur, under Sarai Begumpur. There was a small agricultural community in between Pilkhana and Jafarbad where the Sat Gambuj Mosque was built. The area became like a jungle due to disuse, dereliction, and desertion mainly during the British period. However, in last 55 years, it has become one of the most planned and most expensive residential enclaves of Dhaka. The Sat Masjid Road is the major peripheral road of the district to its west and is believed to have been built roughly along where the old Bank river Turag was.', 'Tiger Garden Int Hotel', '01 KDA Avenue, Shib Bari More Khulna Khulna 9100 01 KDA Avenue, Shib Bari More Khulna Khulna 9100, 9100 Khulna, Bangladesh', 'Hotel Castle Salam', 'Hotel Castle Salam G-8, K.D.A. Avenue, Khulna-9000, Bangladesh, 9000 Khulna, Bangladesh', 'CityLight Cafe & Restaurant', 'G.M. Baksh Tower, 22 Sir Iqbal Rd, Khulna 9100', 'Bistro C', 'Khulna', 'Sat Gambuj Mosque1.jpg', 'Sat Gambuj Mosque2.jpg', 'Sat Gambuj Mosque3.jpg'),
(10, 'cox bazar sea beach', 'Chittagong', 'Cox\'s Bazar Beach, located at Cox\'s Bazar, Bangladesh, is the longest natural sea beach in the world running 120 kilometres (75 mi).[1][2][3][4][5][6] It is the top tourist destination of Bangladesh.', 'Exotica Sampan', 'Marin Drive Point, 4700 Cox\'s Bazar, Bangladesh', 'Saint Martin Resort', 'Plot # 10, Block # A, Kolatoli Road, Cox\'s Bazar, 4700 Cox\'s Bazar, Bangladesh', 'Salt Bistro & Cafe', 'Gorakghata Municipality', 'Poushee Hotel & Restaurant', 'Hotel Sayeman Rd, Jhaotala 4700', 'cox bazar sea beach1.jpg', 'cox bazar sea beach2.jpg', 'cox bazar sea beach3.png'),
(12, 'St. Martin\'s Island', 'Chittagong', 'The island used to belong to Myanmar. After India and Myanmar got independence from Britain, the island got annexed into India. The first settlement started 250 years ago by Arabian sailors who named the island \'Jazeera\'. During British occupation the island was named after the then Deputy Commissioner of Chittagong Mr. Martin as St. Martin Island The local names of the island are \"Narikel jinjira\" which means \'Coconut Island\' in Bengali, and \"Daruchini Dwip\" which means \"Cinnamon island\" in Bengali. It is the only coral island in Bangladesh.', 'Exotica Sampan', 'Marin Drive Point, 4700 Cox\'s Bazar, Bangladesh', 'Saint Martin Resort', 'Plot # 10, Block # A, Kolatoli Road, Cox\'s Bazar, 4700 Cox\'s Bazar, Bangladesh', 'Salt Bistro & Cafe', 'Gorakghata Municipality', 'Poushee Hotel & Restaurant', 'Hotel Sayeman Rd, Jhaotala 4700', 'St. Martin\'s Island1.jpg', 'St. Martin\'s Island2.jpg', 'St. Martin\'s Island3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `usersname` tinytext NOT NULL,
  `usersemail` tinytext NOT NULL,
  `userpwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `usersname`, `usersemail`, `userpwd`) VALUES
(1, 'ash', 'ash@gmail.com', '12'),
(2, 'Ash1', 'ash1@gmail.com', '$2y$10$wzjGZTBk3wwy.rtIFV9qreCmgJh95Byp9hcBWcZ.jpKBnhkXdPzuC'),
(3, 'Ash2', 'ash1@gmail.com', '$2y$10$obdnNDODrrV6BiCMpuPDgOiMXa9Qvos5zQLQiWFbWszbVmegn2Ru.'),
(4, 'ash3', 'ash2@gmail.com', '$2y$10$EwFWdPXNVwCiufa7BTmcY.AQjcC64I5YgOGP24t8H.JueomfAZxnm'),
(5, 'ashik', 'ashik19aug@gmail.com', '$2y$10$3gOL13ToVRe.9G3oek8p/.eb09IuWi4GhmieMGtYJRxJAf5D.gND6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
