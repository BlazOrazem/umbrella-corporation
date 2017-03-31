-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 31. mar 2017 ob 11.55
-- Različica strežnika: 10.1.16-MariaDB
-- Različica PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `umbrella`
--

-- --------------------------------------------------------

--
-- Struktura tabele `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Odloži podatke za tabelo `page`
--

INSERT INTO `page` (`id`, `title`, `menu`, `content`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Umbrella Corporation', 'Home', '<p>A giant, multinational pharmaceutical corporation that produces many daily use goods as a cover for its primary focus; the production of biological weapons. The source of some of the most deadly viruses found in the Resident Evil series, Umbrella Corporation and its backers are among the franchise''s core antagonistic forces.</p>', NULL, 1, '2017-03-26 10:00:00', '2017-03-26 10:00:00'),
(2, 'About the company', 'About', '<h2>Overview</h2><p>The <i>Umbrella Corporation</i> was formed in 1968 by Lord Ozwell Spencer, Dr. James Marcus, and Edward Ashford. Spencer had planned on creating a massive pharmaceutical corporation using money from himself and Ashford. Dr. Marcus would provide the expertise based on his and Ashford''s research on the "progenitor virus." The Progenitor Virus was the first virus created by the company officially. The virus was very unstable and required years and years of tests to be harnessed.</p><p>During Umbrella''s early years Spencer used his massive mansion as a cover for their earliest secret lab. The lab is located in the Arklay Mountains of <a data-ref-id="3035-73" href="/raccoon-city/3035-73/">Racoon City</a>, a Midwestern suburb. Meanwhile Dr. Marcus set up his own training facility outside Racoon City for new recruits to the company. Edward Ashford mysteriously died the same year that the company was founded, his son, Alexander, took the reigns of his father''s portion of the company.</p><p>Meanwhile for the next 30 odd years, the company served as a front for minor pharmaceuticals like aspirin and cold medicine and quickly became one of the biggest companies in the world. During these years Dr. Marcus finally figured out how to create the <a data-ref-id="3015-42" href="/t-virus/3015-42/">T-Virus</a>, by combining the progenitor virus with leech DNA. Using the two together on a recently dead host would reanimate the host with basic motor skills. The seemingly dead cells would use the virus to replace basic needs to regain energy. The virus seemed like a massive success which the company had never seen. The only problem was that only one per one million would turn into a "tyrant", the ultimate bio weapon. The rest would turn into zombies with very little power. Marcus''s success was beginning to worry Spencer that he would try to overthrow his position in the company. So he began to plot against him.</p><p>Dr. Marcus''s two top scientists, Albert Wesker and William Birkin, worked with him on the virus to administer and test on live subjects. They were his most trusted students at his training facility. Lord Spencer ordered that the two of them exterminate Marcus because he was getting too powerful. After they murdered Dr. Marcus, William Birkin became the primary scientist working on bio-weapon research and Albert Wesker infiltrated the Racoon City Police Department to watch their investigations. The city of Racoon itself is nearly entirely owned by Umbrella, they have many employees and government officials under their belt. Wesker eventually becomes the leader of the Special Tactics and Rescue Squad or STARS for short. All the while being a spy for Umbrella.</p><p>Edward Ashford''s son, Alexander completed his research facility on Rockfort Island some time in the early 80''s and began work on an Antarctic research facility. He has a twin son and daughter who aid in his research. Alfred, was very committed to his sister Alexia, who is a child genius. Both twins have hated their father ever since they found out that he made them as clones of their great great grandmother Veronica. Alexia was in her teens when she developed the T-Veronica Virus. This virus was created by combining the progenitor virus with Queen Ant DNA. The virus was quite similar to Marcus''s T-Virus. According to theory, it should make a suitable subject an ultra strong bio-weapon. She used this virus on her father Alexander and his inefficient body is changed into a large monster by it''s effects. After her fathers death, Alexia realized that the virus requires a fifteen year cycle for correct incubation. She decides that no one but her is worthy of the virus''s effects. She has her loyal brother Alfred put her into cryostasis at the Antarctic base for the period of incubation. Alfred uses the assets of the family and company to aid his sisters transformation and run a genocidal testing facility on Rockfort Island.</p><p>In 1998, back in Racoon City, Dr Marcus, presumed dead is kept alive by his leech based T-Virus. He secretly caused an outbreak at Lord Spencer''s mansion lab in the Arklay Mountains outside of Racoon CIty. The forest outside the mansion as well as his own training facility is affected by this outbreak. The Racoon police unit S.T.A.R.S. led by spy Albert Wesker are sent in to investigate deaths in the forest. The police unit finds the mansion and learn that they were being used by Wesker as human combat data against the monsters that roamed the corridors. Wesker destroys the the mansion facility along with one of the first Tyrant monsters ever created. The Tyrant is a humanoid creature that stands nearly 10 feet tall and possesses extreme strength. This monster is the hallmark of success for the T Virus.</p><p>Only a few of the S.T.A.R.S. team escape including, Rebecca Chambers, Chris Redfield, Jill Valentine, Brad Vickers, and Barry Burton.</p><p>Within two months, the entire city of Racoon is covered with zombies and engineered creatures from Umbrella''s lab. William Birkin along with his wife stay in their secret underground lab in the city to finish work on the latest strand of the T Virus. This one is known as the G-Virus. This new virus gives powerful strength instantly and mutates whenever the user is hurt. Essentially those that are hurt while infected with this virus will become stronger and stronger. When Umbrella''s main office sends a recovery team to retrieve the G-Virus, Birkin is resistant to give up the virus and is shot. Just before he dies he injects the virus into himself and becomes his own creation. Leon Kennedy, a rookie cop, and Claire Redfield, witness Birkin''s transformation first hand and destroy what is thought to be the only G virus sample.</p><p>Racoon City is then destroyed with a nuclear weapon to hide what had occured. It is thought that Lord Spencer was behind the influence to sterilize the city to save the company. However it seems the sterilization could not stop the public from finding out and the company''s assets falling to nearly zero. Effectively, the outbreak ended what the company was.</p><p>It is rumored that Wesker is attempting to re-stimulate the company using the various samples he has acquired over time. Lord Spencer''s whereabouts are unknown at this time.</p>', NULL, 1, '2017-03-26 10:00:00', '2017-03-31 10:43:14'),
(3, 'Contact us', 'Contact', '<p><strong>Want to get in touch with us?</strong></p>\n<p>Fill out the form below to send us a message and we will get back to you soon!</p>', 'contact_cover.jpg', 1, '2017-03-26 10:00:00', '2017-03-26 10:00:00');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
