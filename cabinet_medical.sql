-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 juil. 2022 à 22:36
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cabinet_medical`
--

-- --------------------------------------------------------

--
-- Structure de la table `expertise`
--

CREATE TABLE `expertise` (
  `dossier_expertise` int(255) NOT NULL,
  `tribunal` varchar(255) NOT NULL,
  `type_cas` varchar(255) NOT NULL,
  `victime` varchar(255) NOT NULL,
  `cin_expertise` varchar(255) NOT NULL,
  `tel_expertise` varchar(255) NOT NULL,
  `avocat` varchar(255) NOT NULL,
  `juge` varchar(255) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `expertise`
--

INSERT INTO `expertise` (`dossier_expertise`, `tribunal`, `type_cas`, `victime`, `cin_expertise`, `tel_expertise`, `avocat`, `juge`, `date1`, `date2`, `date3`) VALUES
(5, 'premiere instance', 'pétrification', 'Ahbari Salwa', 'D922468', '', 'Alaoui Ahmed', 'Bennani Ayoub', '2020-04-10', '2020-05-05', '2020-05-21'),
(7, 'appel', 'délit', 'Kaltoumi Hanane', 'D927543', '0653425334', 'Salhi Tahir', 'Benmoussa Mehdi', '2020-09-16', '2020-10-03', '2020-10-20'),
(8, 'familliale', 'pétrification', 'Srioui mouad', 'D281653', '0678765645', 'Alami Sanae', 'Bennani Moustafa', '2020-04-10', '2019-12-19', '2020-08-21');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `dossier_patient` int(255) NOT NULL,
  `nom_patient` varchar(255) NOT NULL,
  `prenom_patient` varchar(255) NOT NULL,
  `cin_patient` varchar(255) NOT NULL,
  `adresse_patient` varchar(255) NOT NULL,
  `tel_patient` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `couverture_patient` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `infos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`dossier_patient`, `nom_patient`, `prenom_patient`, `cin_patient`, `adresse_patient`, `tel_patient`, `date_naissance`, `couverture_patient`, `date_inscription`, `infos`) VALUES
(5, 'Benbouziane', 'Ikram', 'D342365', 'Lot Ryad Meknès., N :23', '0650435623', '2002-11-29', 'CNSS', '2022-07-03', '2022/07/19 :\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Quod reprehenderit aliquam nemo vero consectetur nesciunt ratione suscipit facere corrupti esse qui inventore, pariatur assumenda at beatae aperiam eos animi optio?....................................    \r\n2022/07/23  :\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nobis assumenda molestias alias? '),
(9, 'Sefrioui', 'Najat', 'D324343', 'Lot bassatine Meknès., N :43', '0643564567', '2000-11-23', 'CNSS', '2022-07-23', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis autem hic ipsum rem provident, ducimus quisquam incidunt quibusdam eius inventore. Exercitationem consequuntur reiciendis fuga commodi tenetur consequatur fugiat dignissimos eaque!'),
(10, 'Haddouch', 'Iman', 'D324543', 'Lot laaraichi 4 et 5  El  bassatine Meknès., N :92', '0650449079', '2000-07-06', 'CNSS', '2022-07-25', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum rerum quas cum error harum beatae. Laborum ad minima id! Sunt doloribus non fugiat nemo impedit qui aliquam, perferendis aliquid exercitationem.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda earum voluptatum fugit debitis voluptates necessitatibus eum neque ex dicta nobis vel aperiam autem perferendis accusantium ut, laboriosam esse! Ipsa, fugiat.'),
(11, 'Moufidi', 'Issrae', 'D324564', 'Lot Manzah Meknès., N :45', '0653642678', '1990-12-17', 'CNSS', '2022-07-25', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis adipisci voluptas laudantium velit ut maxime totam quam hic quibusdam autem magni exercitationem quaerat molestias, iste vitae, ad voluptatibus, harum corporis?\r\nLorem ipsum dolor sit amet co\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Totam sed delectus, laborum maiores accusamus, earum ipsam quis sapiente nulla quia hic aliquam rem voluptatem optio iste doloribus quasi corporis dolorum?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Animi corrupti repellendus repellat dolorem aspernatur, enim saepe nemo obcaecati quis, repudiandae qui facere sint quae impedit eligendi est aliquam vero fuga?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Minima illo ipsa sit facilis amet veritatis aliquam porro, saepe maxime mollitia? Voluptatibus asperiores cumque repellendus molestiae blanditiis ratione repellat laborum perferendis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rem voluptatum optio, ipsum at nam dolore, debitis neque saepe esse repudiandae placeat, cum quibusdam consectetur quod ratione doloremque temporibus! Quasi?'),
(12, 'Laamarti', 'Sayf dine', 'D324554', 'Lot Nahda N :22', '0665467398', '2000-09-10', 'CNSS', '2022-07-25', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil consequatur dolores beatae officiis exercitationem quae corporis odio aperiam? Quod exercitationem eveniet cumque vitae. Debitis velit laudantium aperiam aliquid quasi culpa!'),
(13, 'lachhab', 'Nora', 'D645367', 'Lot Abdellah Meknes N :76', '0673647839', '1987-12-06', '', '2022-07-25', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod reprehenderit aliquam nemo vero consectetur nesciunt ratione suscipit facere corrupti esse qui inventore, pariatur assumenda at beatae aperiam eos animi optio?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nobis assumenda molestias alias? Reiciendis deserunt dolore qui quos fugit ad architecto dolorem adipisci labore, aut velit vel, est minima eum.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur earum, placeat quo commodi iste harum consectetur molestias facere deserunt autem temporibus, debitis iusto perferendis ut in cumque fuga esse non?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore laboriosam ipsum perferendis voluptates blanditiis minus aliquam, in unde voluptatibus excepturi ducimus expedita voluptate quibusdam a porro quis, distinctio aspernatur autem.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, mollitia possimus repudiandae sed debitis porro totam alias expedita at. Molestias suscipit adipisci unde saepe vero exercitationem aliquam omnis sunt doloremque!');

-- --------------------------------------------------------

--
-- Structure de la table `permis`
--

CREATE TABLE `permis` (
  `dossier_permis` int(255) NOT NULL,
  `nom_permis` varchar(255) NOT NULL,
  `prenom_permis` varchar(255) NOT NULL,
  `cin_permis` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `adresse_permis` varchar(255) NOT NULL,
  `tel_permis` varchar(255) NOT NULL,
  `categorie_permis` varchar(255) NOT NULL,
  `date2` date NOT NULL,
  `poids` float NOT NULL,
  `taille` float NOT NULL,
  `og_loin` float NOT NULL,
  `od_loin` float NOT NULL,
  `og_pres` float NOT NULL,
  `od_pres` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `permis`
--

INSERT INTO `permis` (`dossier_permis`, `nom_permis`, `prenom_permis`, `cin_permis`, `date1`, `adresse_permis`, `tel_permis`, `categorie_permis`, `date2`, `poids`, `taille`, `og_loin`, `od_loin`, `og_pres`, `od_pres`) VALUES
(1, 'BenAli', 'Ritaje', 'D234356', '2000-11-28', 'Lot laaraichi 4 et 5  El  bassatine Meknès., N :100', '0625362535', 'D', '2022-12-10', 68, 168, 8, 7, 10, 9),
(3, 'Lhilali', 'Saad', 'D765635', '1996-09-28', 'Lot Bousstane Meknès., N :24', '', 'C', '2022-12-10', 79, 183, 10, 10, 10, 10),
(5, 'Ismaili', 'Isslam', 'D922460', '1994-01-10', 'Lot bassatine Meknès., N :90', '0650998878', 'D(C)', '2021-12-17', 69, 169, 10, 10, 9, 9);

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `dossier_patient` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `date1`, `dossier_patient`) VALUES
(3, '2022-07-03', 5),
(9, '2022-07-08', 5),
(14, '2022-07-13', 5),
(18, '2022-07-22', 5),
(20, '2022-07-23', 5),
(21, '2022-07-25', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `password_users` varchar(255) NOT NULL,
  `fullName_users` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `email_users`, `password_users`, `fullName_users`) VALUES
(1, 'ikram.haddouch1@usmba.ac.ma', 'ikram123', 'Ikram Haddouch'),
(4, 'ibtissamhadouch@gmail.com', 'azer1234', 'ibtissam'),
(5, 'ikramhad@gmail.com', '12345', 'ikram');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id` int(255) NOT NULL,
  `date1` date NOT NULL,
  `dossier_patient` int(255) NOT NULL,
  `medicament` varchar(255) NOT NULL,
  `quantite` int(255) NOT NULL,
  `type1` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`id`, `date1`, `dossier_patient`, `medicament`, `quantite`, `type1`, `prix`) VALUES
(2, '2022-07-05', 5, ' Anafranil', 1, 'séance', 500),
(8, '2022-07-09', 5, 'Trevicta', 2, 'consultation', 250),
(9, '2022-07-12', 5, 'Trevicta', 2, 'consultation', 250),
(11, '2022-07-08', 5, 'Trevicta', 1, 'consultation', 250),
(24, '2022-07-21', 5, 'Trevicta', 2, 'consultation', 250),
(28, '2022-07-24', 5, 'Trevicta', 1, 'consultation', 250);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`dossier_expertise`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`dossier_patient`);

--
-- Index pour la table `permis`
--
ALTER TABLE `permis`
  ADD PRIMARY KEY (`dossier_permis`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dossier_patient_fk` (`dossier_patient`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dossier_patient_fk1` (`dossier_patient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `dossier_expertise` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `dossier_patient` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `permis`
--
ALTER TABLE `permis`
  MODIFY `dossier_permis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `dossier_patient_fk` FOREIGN KEY (`dossier_patient`) REFERENCES `patient` (`dossier_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `dossier_patient_fk1` FOREIGN KEY (`dossier_patient`) REFERENCES `patient` (`dossier_patient`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
