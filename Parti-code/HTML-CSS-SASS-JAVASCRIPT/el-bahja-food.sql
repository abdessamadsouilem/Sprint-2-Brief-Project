 Base de données : `el-bahja-food`
--

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

CREATE TABLE `food` (
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `image` varbinary(10000) DEFAULT NULL,
  `Num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`Name`, `Price`, `image`, `Num`) VALUES
('Couscous Marocaine', 12, 0x494d472d36303633326530653463653334352e39363839363431362e6a7067, '1'),
('tagine', 20, 0x494d472d36303633326530313164633264322e39303035333531382e6a7067, '2'),
('Tagine de Viande', 10, 0x494d472d36303537373030613734656530332e34313536313939332e6a7067, '3'),
('Bastila', 21, 0x494d472d36303539303462653835323365392e37383735303333362e6a7067, '4'),
('tagine de poulet', 20, 0x494d472d36303561366531313866316262332e38343838353839352e6a7067, '5'),
('dessert', 67, 0x494d472d36303561366536366561653061312e35313931393835382e6a7067, '6');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `logindate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `Role`, `logindate`) VALUES
(1, 'abdessamadsouilem1@gmail.com', 'ABDESSAMAD SOUILEM', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-02-27'),
(10, 'hicham@gmail.com', 'Hicham Sosso', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-02-02'),
(11, 'fouad@gmail.com', 'Fouad', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-04-03'),
(12, 'oumaima1saber@gmail.com', 'ouma', 'e10adc3949ba59abbe56e057f20f883e', 0, '2021-04-03');

-- --------------------------------------------------------

--
-- Structure de la table `week`
--

CREATE TABLE `week` (
  `jour` varchar(50) NOT NULL,
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `week`
--

INSERT INTO `week` (`jour`, `entré`, `platprincipal`, `Dessert`) VALUES
('dimanche', 'walo', 'walo', 'walo'),
('jeudi', NULL, NULL, NULL),
('lundi', 'walo', 'tajine de viande', ' jus'),
('mardi', NULL, NULL, NULL),
('mercredi', NULL, NULL, NULL),
('samedi', NULL, NULL, NULL),
('vendredi', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Num`),
  ADD UNIQUE KEY `Name` (`Name`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Index pour la table `week`
--
ALTER TABLE `week`
  ADD UNIQUE KEY `jour` (`jour`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;