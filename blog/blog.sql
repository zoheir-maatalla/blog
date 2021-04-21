-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 02 mars 2021 à 17:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articles` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `articles`, `id_utilisateur`, `id_categorie`, `date`) VALUES
(2, 'BarÃ§a : Messi est trop seul, selon Koeman\r\nEn confÃ©rence de presse ce vendredi, l\'entraÃ®neur barcelonais Ronald Koeman a estimÃ© que son Ã©quipe ne devait pas se reposer uniquement sur le talent de Lionel Messi. Le coach du FC Barcelone attend donc plus d\'efficacitÃ© de la part de ses autres attaquants.\r\n\r\n\"Leo a inscrit 18 buts (en Liga, ndlr), les autres attaquants ont plus ou moins le mÃªme total tous ensemble. Il a besoin de l\'aide des autres. Toute l\'Ã©quipe doit prendre ses responsabilitÃ©s, pas seulement les anciens. C\'est toute l\'Ã©quipe qui doit tout donner\", a prÃ©venu le technicien nÃ©erlandais.\r\n\r\nDerriÃ¨re Messi, c\'est effectivement le dÃ©sert. Le deuxiÃ¨me meilleur buteur blaugrana en championnat est Antoine Griezmann avec... 6 buts. Suivent Ansu Fati (4 buts), blessÃ© depuis plusieurs mois, Francisco Trincao (3 buts) et Frenkie de Jong (3 buts). Ousmane DembÃ©lÃ© et Martin Braithwaite ont eux seulement inscrit 2 buts.', 2, 1, '2021-02-26 21:04:46'),
(3, 'LA FAILLE\r\n\r\nLorsque Ted Crawford dÃ©couvre que sa jeune Ã©pouse le trompe, il dÃ©cide de la tuer... mais en mettant au point le crime parfait. Alors que la police arrive sur les lieux du drame, l\'inspecteur Rob Nunally a deux surprises : la victime n\'est pas morte, et c\'est la femme avec laquelle il avait une liaison...\r\nAvec Crawford, qui a avouÃ© la tentative d\'homicide, Willy Beachum, un ambitieux procureur adjoint, sur le point d\'intÃ©grer un prestigieux cabinet d\'avocats, se voit confier cette derniÃ¨re affaire. Mais dans la partie qui s\'annonce, rien n\'est aussi Ã©vident qu\'il y paraÃ®t. Dans un redoutable jeu de manipulation, l\'affaire va tourner Ã  la confrontation de deux hommes qui ont chacun besoin de la dÃ©faite de l\'autre pour servir leur plan...\r\nEntre mensonges et ambition, entre faux-semblants et orgueil, l\'affrontement va aller bien au-delÃ  de ce que chacun avait prÃ©vu...', 2, 2, '2021-02-26 21:06:16'),
(4, 'Une nouvelle dÃ©couverte scientifique sur Mars. La Nasa rÃ©vÃ¨le ce jeudi soir, grÃ¢ce aux premiers rÃ©sultats de la sonde Maven, que les Ã©ruptions solaires pourraient avoir provoquÃ© la disparition d\'une grande partie de l\'atmosphÃ¨re, dans la jeunesse de la planÃ¨te rouge. \r\n\r\nIl reste plus d\'oxygÃ¨ne que l\'on croyait\r\nEtant donnÃ© la probabilitÃ© que ces Ã©ruptions devaient se produire plus frÃ©quemment dans l\'enfance du systÃ¨me solaire, ces chercheurs suggÃ¨rent que les taux d\'Ã©chappement dans l\'espace des particules formant l\'atmosphÃ¨re de Mars Ã©taient largement liÃ©s Ã  cette activitÃ© du soleil. Durant les explorations de Maven, les instruments ont dÃ©tectÃ© une importante variation de tempÃ©rature selon les altitudes, ainsi que des mÃ©langes stables de CO2, d\'argon et d\'oxyde nitreux. Ils ont aussi mesurÃ© des quantitÃ©s d\'oxygÃ¨ne plus grandes qu\'estimÃ©es prÃ©cÃ©demment. \r\n\r\n', 2, 3, '2021-02-26 21:07:45'),
(5, 'La prÃ©sence de glace confirmÃ©e en 2008\r\nEn 2003 sont lancÃ©s deux rovers jumeaux Ã  six roues, Spirit et Opportunity. Leur terrain d\'Ã©tude a Ã©tÃ© repÃ©rÃ© par l\'orbiteur 2001 Mars Odyssey lancÃ© deux ans plus tÃ´t. Ils dÃ©couvrent que l\'eau, Ã  l\'Ã©tat liquide, a bien existÃ© dans le passÃ©.  \r\nLa mÃªme annÃ©e, l\'Agence spatiale europÃ©enne (ESA) a mis en orbite la sonde Mars Express, qui larguera le robot Beagle. Ils rÃ©vÃ©leront un passÃ© volcanique rÃ©cent, la prÃ©sence d\'aurores polaires ou encore une cartographie du satellite naturel Phobos. \r\nL\'eau, cette fois Ã  l\'Ã©tat solide, est une autre dÃ©couverte de premiÃ¨re importance. Ce sera en 2008 avec la sonde Phoenix.', 2, 3, '2021-02-26 21:11:01'),
(6, 'ArrivÃ© lâ€™Ã©tÃ© dernier Ã  lâ€™Olympique de Marseille, Pablo Longoria entend placer des hommes Ã  lui dans les rouages du club.\r\nLâ€™Olympique de Marseille ne fait pas de sentiments. Câ€™est Ã©videmment particuliÃ¨rement vrai avec les supporters marseillais, avec qui les dirigeants des Ciel et Blanc font la guerre depuis plusieurs semaines. Mais le club se montre tout aussi dur avec ses salariÃ©s. Plusieurs services en ont fait les frais depuis lâ€™arrivÃ©e de Jacques-Henri Eyraud, Ã  lâ€™image du service communication, totalement remodelÃ© et au sujet duquel le prÃ©sident olympien a rÃ©cemment tenu des propos trÃ¨s durs.\r\n\r\nDÃ©barquÃ© au club lâ€™Ã©tÃ© dernier dans le rÃ´le de Â« Head of football Â», Pablo Longoria a, lui aussi, lancÃ© un grand mÃ©nage. Il concerne la cellule recrutement, en passe dâ€™Ãªtre totalement transformÃ©. Alors quâ€™Emmanuel ClÃ©ment et Georges Santos, sous contrat jusquâ€™en juin prochain, ne devraient pas Ãªtre conservÃ©s, Michel Flos, recruteur-superviseur depuis neuf ans, a Ã©tÃ© licenciÃ© pour faute grave et Ferhat Khirat, au club depuis 2014, a Ã©galement Ã©tÃ© reÃ§u par la direction des ressources humaines en vue dâ€™un licenciement.', 2, 1, '2021-02-26 21:11:49'),
(7, 'Leon\r\n\r\nIl s\'agit du sixiÃ¨me long mÃ©trage rÃ©alisÃ© par Luc Besson. LÃ©on retrace la vie d\'un tueur Ã  gages solitaire dont seul le prÃ©nom est indiquÃ© (son nom de famille n\'est pas prÃ©cisÃ©). Il vit Ã  New York et va hÃ©berger puis aider, aprÃ¨s un concours de circonstances, l\'une de ses voisines de palier. Cette derniÃ¨re s\'appelle Mathilda. Elle est Ã¢gÃ©e de douze ans et va devenir orpheline lorsque sa famille sera assassinÃ©e. En effet, son pÃ¨re vole de la cocaÃ¯ne Ã  des policiers vÃ©reux utilisant son domicile comme planque, ce qui dÃ©clenchera une vengeance sanglante de leur part. Pour venger son petit frÃ¨re, le seul membre de sa famille qu\'elle aimait sincÃ¨rement, Mathilda implore LÃ©on de lui apprendre son Â« mÃ©tier Â».\r\n\r\nJean Reno y interprÃ¨te le rÃ´le-titre du tueur, similaire Ã  celui de Victor qu\'il avait incarnÃ© dans Nikita, le prÃ©cÃ©dent film du rÃ©alisateur. Luc Besson considÃ¨re que LÃ©on est un Â« cousin amÃ©ricain de Victor Â», en Â« plus humain Â». Ce film marque Ã©galement la premiÃ¨re apparition Ã  l\'Ã©cran de Natalie Portman, alors Ã¢gÃ©e de douze ans, comme le personnage qu\'elle incarne, dans le rÃ´le de Mathilda. Gary Oldman et Danny Aiello endossent les deux autres rÃ´les importants du film.\r\n\r\nLe film reÃ§oit un trÃ¨s bon accueil du public, aussi bien aux Ã‰tats-Unis qu\'en France. LÃ©on est un succÃ¨s populaire puisqu\'il attire dans l\'Hexagone un total de prÃ¨s de 3 500 000 spectateurs lors de son exploitation en salle. Aux Ã‰tats-Unis, le film rapporte 19 250 000 $. Du cÃ´tÃ© des critiques professionnelles, l\'accueil est davantage mitigÃ© mais globalement positif. Par ailleurs, il a Ã©tÃ© nommÃ© Ã  sept reprises aux CÃ©sars mÃªme s\'il n\'en a remportÃ© aucun.\r\n\r\nIl existe une version longue du film, sortie en 1996, dans laquelle une Ã©ventuelle relation amoureuse entre LÃ©on et Mathilda, dÃ©jÃ  ambiguÃ« dans la version d\'origine, est davantage explicite via les paroles et les gestes des comÃ©diens.', 2, 2, '2021-02-26 21:14:40');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Sport'),
(2, 'Film'),
(3, 'Science');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(1024) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_article`, `id_utilisateur`, `date`) VALUES
(1, 'Eyraud dÃ©mission!!!', 6, 1, '2021-02-26 21:15:39'),
(2, 'Un 7eme ballon d\'or ?', 2, 1, '2021-02-26 21:16:05'),
(3, 'A quand une exploration de VÃ©nus ?', 5, 1, '2021-02-26 21:16:46'),
(4, 'On pourra peut-Ãªtre en importer ?  ', 4, 1, '2021-02-26 21:17:21'),
(5, 'Un classique !', 7, 1, '2021-02-26 21:17:37'),
(6, 'TrÃ¨s bon film...', 3, 1, '2021-02-26 21:17:56'),
(7, 'Pas de spÃ©culation svp.', 2, 3, '2021-02-26 21:21:38');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id`, `nom`) VALUES
(1, 'utilisateur'),
(42, 'moderateur'),
(1337, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_droits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `id_droits`) VALUES
(1, 'Firstblood', '$2y$10$lThwUp4wWP1aXwairHG6k.zGEQGDYCHA/cqJtR6RZ0BKfwqXcApD6', 'firstblood@jj.com', 1),
(2, 'admin', '$2y$10$xIiXHx.xnNaSOOZKmuQvvOu4ESKOs0rOMiUN7/7RoijWTqwC1CZnu', 'kkl@jk', 1337),
(3, 'Messi', '$2y$10$4qNcEO337OWVMfwk/futdeCJgKYUt0LS3NfYYtn3rfeRTV2yO7TVa', 'kkl@jk', 42);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
