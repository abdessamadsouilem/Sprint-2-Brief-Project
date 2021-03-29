

--
-- Base de données : `el-bahja-food`
--
----

--
-- Structure de la table `dimanche`
--

CREATE TABLE `dimanche` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dimanche`
--

INSERT INTO `dimanche` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

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


-- --------------------------------------------------------

--
-- Structure de la table `jeudi`
--

CREATE TABLE `jeudi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `jeudi`
--

INSERT INTO `jeudi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

-- --------------------------------------------------------

--
-- Structure de la table `lundi`
--

CREATE TABLE `lundi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lundi`
--

INSERT INTO `lundi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

-- --------------------------------------------------------

--
-- Structure de la table `mardi`
--

CREATE TABLE `mardi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mardi`
--

INSERT INTO `mardi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

-- --------------------------------------------------------

--
-- Structure de la table `mercredi`
--

CREATE TABLE `mercredi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mercredi`
--

INSERT INTO `mercredi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

-- --------------------------------------------------------

--
-- Structure de la table `samedi`
--

CREATE TABLE `samedi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `samedi`
--

INSERT INTO `samedi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `Role`) VALUES
(1, 'abdessamadsouilem1@gmail.com', 'ABDESSAMAD SOUILEM', 'e10adc3949ba59abbe56e057f20f883e', 1),


-- --------------------------------------------------------

--
-- Structure de la table `vendredi`
--

CREATE TABLE `vendredi` (
  `entré` varchar(50) DEFAULT NULL,
  `platprincipal` varchar(50) DEFAULT NULL,
  `Dessert` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vendredi`
--

INSERT INTO `vendredi` (`entré`, `platprincipal`, `Dessert`) VALUES
('walo', 'walo', 'walo');

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;


