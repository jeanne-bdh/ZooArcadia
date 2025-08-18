-- MySQL dump 10.13  Distrib 9.3.0, for macos15.4 (arm64)
--
-- Host: 127.0.0.1    Database: zooarcadiaV2
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `habitat_id` int(11) NOT NULL,
  `animal_name` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `breed_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6AAB231FAFFE2D26` (`habitat_id`),
  KEY `IDX_6AAB231FA8B4A30F` (`breed_id`),
  CONSTRAINT `FK_6AAB231FA8B4A30F` FOREIGN KEY (`breed_id`) REFERENCES `breed` (`id`),
  CONSTRAINT `FK_6AAB231FAFFE2D26` FOREIGN KEY (`habitat_id`) REFERENCES `habitat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,3,'Gaby','<div>Les crocodiles vivent principalement dans les rivières, lacs et zones humides tropicales. Ils affectionnent les berges boueuses où ils peuvent se cacher pour surprendre leurs proies.<br>Carnivore opportuniste. Les jeunes mangent surtout insectes, poissons et amphibiens. Les adultes s’attaquent à de plus grosses proies comme des antilopes, des buffles, voire des zèbres venant s’abreuver.<br>Gaby, notre mâle adulte se porte bien. Ses bilans vétérinaires montrent un poids stable et des dents en bon état. Il bénéficie d’un bassin chauffé en hiver et d’un espace terrestre pour se prélasser. Ses repas sont variés : poissons, volailles entières et parfois viande rouge, afin de reproduire son régime naturel.</div>','crocodile-689c485ca2b26386761596.jpg',1341492,'2025-08-13 08:10:04',7),(2,2,'Alicia','<div>Capybara — Le géant paisible des marais<br>Plus grand rongeur du monde, le capybara vit en Amérique du Sud dans les zones humides. Sociable et calme, il se déplace en groupes et adore passer du temps dans l’eau pour se rafraîchir et échapper aux prédateurs. Herbivore, il broute herbes et plantes aquatiques, souvent au lever ou au coucher du soleil. Sa nature tranquille en fait l’un des animaux préférés des visiteurs du zoo.<br>L’examen du capybara <em>Alicia</em> révèle un bon état général. Poids stable à 52 kg, pelage dense et brillant, dentition correcte. L’animal présente une légère usure des incisives, compatible avec son âge, sans gêne apparente à la mastication. Aucun signe de parasitose externe. Hydratation normale et comportement social actif observé avec le reste du groupe.</div>','capybara-689c487ecf2bf712320158.jpg',1889193,'2025-08-13 08:10:38',1),(3,1,'Praline','<div>Le rhinocéros est un animal imposant et majestueux, généralement solitaire ou vivant en petits groupes familiaux. Il passe la majorité de son temps à brouter de l’herbe, des feuilles et des branches. Adapté aux savanes et aux forêts, il aime les points d’eau pour se baigner et se rafraîchir, ce qui lui permet de réguler sa température corporelle et de protéger sa peau des parasites.<br><br>Le rhinocéros dispose d’un enclos spacieux reproduisant son milieu naturel, avec zones d’ombre, points d’eau et végétation variée pour se nourrir et se cacher. Des enrichissements réguliers sont proposés pour stimuler son comportement naturel et maintenir sa santé mentale.<br><br>L’animal présente un poids et une taille conformes aux standards de son espèce.<br>Sa peau est en bon état, hydratée et sans lésions importantes.<br>Ses sabots sont régulièrement entretenus pour éviter toute douleur ou infection.<br>Son alimentation est équilibrée pour prévenir l’obésité et les carences nutritionnelles.<br>Aucun signe de stress chronique ou de maladie infectieuse détecté lors des dernières consultations.</div><div><br></div>','rhinoceros-689c49a9ca2e4346381459.jpg',1983913,'2025-08-13 08:15:37',17),(4,2,'Kitkat','<div>Le gorille est un primate imposant, au corps robuste et aux bras puissants. Il vit en groupes familiaux appelés « troupes », dirigés par un mâle dominant surnommé « dos argenté » en raison de la coloration argentée de son dos adulte. Très social, le gorille communique par des gestes, des mimiques et des vocalisations. Les journées sont rythmées par la recherche de nourriture, le repos et le toilettage mutuel. Il construit des nids pour dormir, généralement au sol, mais parfois dans les arbres pour les jeunes ou les femelles.<br><br>Dans notre zoo, le gorille bénéficie d’un enclos spacieux, aménagé avec des structures d’escalade, des zones végétalisées et des cachettes pour se reposer, recréant au mieux son environnement naturel.<br><br>Nos gorilles font l’objet d’un suivi régulier par notre équipe vétérinaire. Ils sont en excellente santé grâce à une alimentation adaptée, équilibrée et enrichie en vitamines. Les bilans de santé incluent des examens dentaires, sanguins et des contrôles de mobilité. Les vétérinaires veillent également à la prévention des maladies courantes chez les primates et à la détection précoce de tout signe de stress ou de malaise.</div>','gorille-689c4fdd0ee83972078704.jpg',2045063,'2025-08-13 08:42:05',2),(5,2,'Bigmac','<div>L’iguane est un reptile fascinant, facilement reconnaissable à sa peau écailleuse verte ou grise, sa longue queue et sa crête dorsale distinctive. Ses doigts puissants et ses griffes acérées lui permettent de grimper avec agilité dans les arbres, tandis que sa langue lui sert à détecter son environnement. L’iguane est herbivore et se nourrit principalement de feuilles, de fruits et de fleurs.<br><br>Dans la nature, l’iguane vit principalement dans les forêts tropicales d’Amérique centrale et du Sud, ainsi que dans les zones proches des cours d’eau où il peut se prélasser au soleil pour réguler sa température. Ce reptile est diurne et apprécie les espaces lumineux et chauds pour rester actif et en bonne santé.<br><br>Au Zoo Arcadia, notre iguane évolue dans un terrarium aménagé pour reproduire son milieu naturel, avec des plantes, des branches pour grimper et des zones chauffées pour se réchauffer. Son état de santé est suivi quotidiennement par nos équipes vétérinaires, et il bénéficie d’une alimentation équilibrée et adaptée à ses besoins spécifiques, lui permettant de rester vif et actif.</div>','iguane-689c503874329144046286.jpg',1041550,'2025-08-13 08:43:36',3),(6,2,'Turbo','<div>Le paresseux est un mammifère emblématique des forêts tropicales d’Amérique centrale et du Sud. Reconnaissable à sa démarche lente, son pelage long et souvent recouvert d’algues vertes qui lui offre un camouflage naturel, il possède de longues griffes incurvées qui lui permettent de se suspendre aux branches avec une aisance étonnante. Le paresseux se nourrit principalement de feuilles, de jeunes pousses et de fruits, et passe la majeure partie de sa vie dans les arbres, ne descendant que rarement au sol.<br><br>Au Zoo Arcadia, notre paresseux évolue dans un enclos arboré qui reproduit fidèlement son habitat naturel, avec de nombreuses branches et un microclimat adapté pour sa température et son humidité idéales. Nos vétérinaires assurent un suivi régulier de sa santé, et il bénéficie d’une alimentation équilibrée et adaptée à ses besoins spécifiques, garantissant un bien-être optimal et une activité conforme à son rythme naturel.</div>','paresseux-689c5059be37e214331910.jpg',978561,'2025-08-13 08:44:09',4),(7,2,'Milou','<div>Le tigre est le plus grand des félins, célèbre pour son pelage rayé orange et noir unique à chaque individu. Puissant et agile, il possède des griffes rétractiles et une mâchoire robuste, ce qui en fait un chasseur exceptionnel. Il se nourrit principalement de grands mammifères, mais dans un cadre zoologique, son alimentation est adaptée pour répondre à tous ses besoins nutritionnels.<br><br>Originaire des forêts tropicales, des mangroves et des prairies d’Asie, le tigre a besoin d’un territoire spacieux et varié. Au Zoo Arcadia, il évolue dans un enclos conçu pour reproduire son habitat naturel, avec des zones ombragées, des points d’eau et des structures favorisant l’exercice et l’exploration.<br><br>Notre tigre bénéficie d’un suivi vétérinaire régulier afin de garantir sa santé optimale, avec des contrôles alimentaires, des soins préventifs et un enrichissement quotidien pour stimuler son comportement naturel et son bien-être général.</div>','tigre-689c506ddfe8f264144818.jpg',1951912,'2025-08-13 08:44:29',5),(8,2,'Rio','<div>Le toucan est un oiseau tropical facilement reconnaissable grâce à son grand bec coloré et léger, qui peut représenter jusqu’à un tiers de la longueur de son corps. Son plumage noir et blanc, associé à des touches vives de couleur sur le bec, en fait un oiseau fascinant et emblématique des forêts d’Amérique centrale et du Sud. Omnivore, le toucan se nourrit principalement de fruits, mais il peut également consommer des insectes et de petits animaux.<br><br>Dans son habitat naturel, le toucan vit dans les forêts tropicales humides, où il niche dans les cavités des arbres et se déplace souvent en petits groupes. Au Zoo Arcadia, il évolue dans un espace aménagé pour reproduire ces conditions, avec des perchoirs, des végétaux et des zones d’ombre, permettant à l’oiseau de voler et d’explorer librement.<br><br>Notre toucan bénéficie d’un suivi vétérinaire régulier afin d’assurer sa santé optimale, avec une alimentation adaptée, des contrôles préventifs et des enrichissements pour stimuler son comportement naturel et son bien-être général.</div>','toucan-689c5098dc666760781248.jpg',1751344,'2025-08-13 08:45:12',6),(9,3,'Sacha','<div>La grenouille est un amphibien au corps souple et aux pattes arrière puissantes, parfaitement adaptées au saut et à la nage. Sa peau, souvent humide et colorée, peut varier selon les espèces et lui permet de se camoufler dans son environnement naturel. Omnivore, elle se nourrit principalement d’insectes, de vers et d’autres petits invertébrés.<br><br></div><div>Dans son milieu naturel, la grenouille vit près des étangs, des rivières ou des zones humides, où elle peut facilement accéder à l’eau pour se reproduire et réguler sa température corporelle. Au Zoo Arcadia, elle évolue dans un terrarium spécialement conçu pour reproduire ces conditions, avec des plantes, de l’eau propre et des zones d’ombre et de lumière pour favoriser son comportement naturel.<br><br></div><div>Notre équipe vétérinaire assure le suivi régulier de sa santé grâce à une alimentation équilibrée, à des contrôles préventifs et à un environnement enrichi, garantissant le bien-être et la vitalité de chaque grenouille.</div>','grenouille-689c51aa178cc727022234.jpg',1641908,'2025-08-13 08:49:46',8),(10,3,'Arnold','<div>Le héron est un oiseau élégant et majestueux, facilement reconnaissable à son long cou sinueux et à ses pattes fines et allongées. Sa silhouette élancée et son plumage souvent gris-bleu ou blanc lui permettent de se fondre dans les zones humides où il vit. Les hérons se nourrissent principalement de poissons, de grenouilles et d’insectes aquatiques, utilisant leur bec pointu comme une véritable lance pour attraper leurs proies avec précision.<br><br>Dans la nature, le héron fréquente les rivières, les lacs, les marais et les zones côtières, où il construit son nid dans les arbres ou sur les berges protégées. Très patient, il peut rester immobile de longues minutes avant de fondre sur sa proie.<br><br>Au Zoo Arcadia, notre héron bénéficie d’un enclos recréant son milieu naturel, avec des bassins peu profonds et des espaces végétalisés pour lui permettre de se déplacer librement et de pratiquer ses comportements naturels. Son état de santé est suivi quotidiennement par notre équipe vétérinaire : notre héron est en pleine forme, actif et parfaitement adapté à son environnement au sein du parc.</div>','heron-689c51c2bdf47301043770.jpg',1810780,'2025-08-13 08:50:10',9),(11,3,'Eléna','<div>La loutre est un mammifère semi-aquatique au corps fuselé et à la fourrure dense et imperméable, qui lui permet de rester au chaud et au sec même lorsqu’elle nage. Elle est connue pour son agilité dans l’eau, sa curiosité et son comportement joueur, et se nourrit principalement de poissons, de crustacés et de petits invertébrés aquatiques.<br><br></div><div>Dans son milieu naturel, la loutre vit le long des rivières, des lacs et des zones humides, où elle trouve refuge parmi la végétation et les berges. Au Zoo Arcadia, elle évolue dans un enclos aquatique spécialement aménagé, avec des bassins profonds, des zones de repos et des cachettes, afin de reproduire au mieux son habitat naturel et de favoriser ses comportements naturels.<br><br></div><div>Notre équipe vétérinaire surveille attentivement sa santé grâce à une alimentation adaptée, des bilans réguliers et un environnement enrichi, garantissant le bien-être et la vitalité de chaque loutre présente dans notre zoo.</div>','loutre-689c51d57a934721565075.jpg',971078,'2025-08-13 08:50:29',10),(12,3,'Vortex','<div>Le serpent est un reptile au corps allongé et souple, dépourvu de membres, qui se déplace par ondulations et peut présenter une grande variété de couleurs et de motifs selon les espèces. Il se nourrit principalement de petits animaux tels que rongeurs, oiseaux ou amphibiens, et certains serpents utilisent la constriction ou le venin pour capturer leurs proies.<br><br></div><div>Dans la nature, les serpents vivent dans des habitats très variés, allant des forêts tropicales aux déserts arides, en passant par les zones humides. Au Zoo Arcadia, nos serpents évoluent dans des terrariums spécialement aménagés avec un contrôle précis de la température, de l’humidité et des cachettes, afin de reproduire leur habitat naturel et de favoriser leurs comportements instinctifs.<br><br></div><div>L’état de santé de nos serpents est suivi de près par notre équipe vétérinaire, avec une alimentation adaptée à chaque espèce et des contrôles réguliers. Cela garantit leur bien-être et leur longévité tout en permettant aux visiteurs d’observer ces reptiles fascinants en toute sécurité.</div>','serpent-689c51f0c19a0485776076.jpg',779749,'2025-08-13 08:50:56',11),(13,3,'Fred','<div>La tortue des marais est une petite tortue semi-aquatique reconnaissable à sa carapace lisse et arrondie, généralement brun-olive avec des motifs subtils. Ses pattes légèrement palmées lui permettent de nager efficacement, tandis que son bec pointu est adapté pour attraper des insectes, petits crustacés et végétation aquatique.<br><br></div><div>Elle vit naturellement dans les zones humides comme les marais, étangs et rivières calmes, où elle trouve à la fois refuge et nourriture. Au Zoo Arcadia, son enclos recrée fidèlement cet habitat, avec de l’eau peu profonde, des zones sèches pour le repos et du végétal pour se cacher et se nourrir.<br><br></div><div>Nos tortues des marais sont en excellente santé grâce à une alimentation équilibrée, un suivi vétérinaire régulier et un environnement enrichi qui stimule leurs comportements naturels, comme la nage, le bain de soleil et la recherche de nourriture. Les visiteurs peuvent ainsi observer ces fascinantes créatures dans des conditions proches de leur milieu naturel.</div>','tortue-689c5208a56b9602859580.jpg',1961597,'2025-08-13 08:51:20',12),(14,1,'Marcel','<div>Le babouin est un primate imposant et sociable, reconnaissable à son visage allongé et à sa queue courte. Ses membres puissants et ses mains habiles lui permettent de grimper aux arbres et de se déplacer avec agilité sur le sol. Omnivore, il se nourrit de fruits, de graines, de racines et occasionnellement d’insectes ou de petits animaux, ce qui lui confère une grande adaptabilité alimentaire.<br><br></div><div>Dans la nature, les babouins vivent principalement dans les savanes, forêts ouvertes et zones rocheuses d’Afrique. Ils vivent en groupes sociaux complexes, appelés troupes, qui favorisent la protection et les interactions sociales. Au Zoo Arcadia, nos babouins disposent d’un enclos spacieux avec des structures d’escalade, des plateformes et des zones de repos, recréant un environnement proche de leur habitat naturel.<br><br></div><div>Nos babouins sont suivis régulièrement par notre équipe vétérinaire afin d’assurer leur santé et leur bien-être. Ils bénéficient d’une alimentation équilibrée et d’activités enrichissantes pour stimuler leur curiosité naturelle et leur comportement social, offrant ainsi aux visiteurs une observation fascinante de ces animaux intelligents et dynamiques.</div>','babouin-689c523460949694321605.jpg',1953798,'2025-08-13 08:52:04',13),(15,1,'Mina','<div>L’éléphant est le plus grand mammifère terrestre, facilement reconnaissable à sa trompe puissante, ses grandes oreilles et ses défenses impressionnantes. Sa peau épaisse, grise et légèrement rugueuse, le protège du soleil et des insectes, tandis que ses pattes massives supportent son poids considérable. Ce géant doux est un animal social, vivant en troupeaux dirigés par des femelles matriarches.<br><br></div><div>Dans la nature, l’éléphant fréquente les savanes, forêts et zones humides d’Afrique et d’Asie, où il se nourrit de feuilles, d’herbes et d’écorces. Au Zoo Arcadia, son habitat est conçu pour reproduire ces environnements, avec de vastes espaces pour marcher, des points d’eau pour se baigner et se rafraîchir, ainsi que des enrichissements pour stimuler son intelligence et son comportement naturel.<br><br></div><div>Nos éléphants sont en excellente santé grâce à un suivi vétérinaire régulier, une alimentation adaptée et des activités quotidiennes qui favorisent leur bien-être physique et mental. Les visiteurs peuvent ainsi observer ces majestueux animaux dans un cadre sûr et respectueux de leurs besoins naturels.</div>','elephant-689c524749207858197670.jpg',1887863,'2025-08-13 08:52:23',14),(16,1,'Britney','<div>La girafe est le plus grand animal terrestre, immédiatement reconnaissable grâce à son long cou élancé et ses taches uniques qui couvrent tout son corps. Ses longues pattes fines mais puissantes lui permettent de parcourir de grandes distances et de se défendre si nécessaire. Dotée d’une langue préhensile, la girafe peut attraper les feuilles les plus hautes dans les arbres, son aliment principal.<br><br></div><div>À l’état sauvage, la girafe vit dans les savanes et forêts ouvertes d’Afrique, où elle se nourrit essentiellement de feuilles d’acacia et d’autres végétaux. Au Zoo Arcadia, son enclos est aménagé pour reproduire ces conditions naturelles, avec de grands arbres, des zones ouvertes pour se déplacer librement et des structures pour stimuler son comportement naturel de recherche de nourriture.<br><br></div><div>Nos girafes sont suivies régulièrement par nos vétérinaires et bénéficient d’une alimentation équilibrée et d’activités d’enrichissement quotidien pour assurer leur bien-être physique et mental. Elles sont en parfaite santé et peuvent être observées de près par les visiteurs dans un cadre sûr et respectueux de leurs besoins.</div>','girafe-689c5259ef142350622230.jpg',2048116,'2025-08-13 08:52:41',15),(17,1,'Claude','<div>Le lion est un grand félin impressionnant, facilement reconnaissable grâce à la crinière majestueuse des mâles. Son corps puissant, ses pattes robustes et ses griffes rétractiles en font un chasseur redoutable. Les lions vivent en groupe, appelés « troupes », ce qui leur permet de chasser et de protéger leur territoire efficacement.<br><br></div><div>À l’état sauvage, le lion habite principalement les savanes et les prairies d’Afrique, où il se nourrit de grands herbivores tels que zèbres, gnous et antilopes. Dans notre zoo, l’enclos des lions a été conçu pour reproduire leur habitat naturel avec de grands espaces ouverts, des zones d’ombre et des structures permettant de stimuler leur comportement naturel.<br><br></div><div>Nos lions sont suivis quotidiennement par notre équipe vétérinaire et bénéficient d’une alimentation équilibrée ainsi que d’activités d’enrichissement pour préserver leur bien-être physique et mental. Ils sont en excellente santé et offrent aux visiteurs l’opportunité d’observer de près ces majestueux félins.</div>','lion-689c526c7e146121988309.jpg',1932370,'2025-08-13 08:53:00',16),(18,1,'Ray','<div>Le zèbre est un mammifère herbivore reconnu pour son pelage rayé noir et blanc unique, qui lui sert de camouflage et d’identification individuelle. Sociable et vivant en troupeaux, le zèbre se déplace rapidement pour échapper aux prédateurs et parcourt de longues distances à la recherche de nourriture composée principalement d’herbes.<br><br></div><div>Dans la nature, les zèbres vivent principalement dans les savanes et prairies d’Afrique, où ils cohabitent avec d’autres herbivores et prédateurs. Au Zoo Arcadia, nos zèbres évoluent dans des enclos spacieux et aménagés avec des zones d’ombre, de l’herbe fraîche et des points d’eau pour recréer au mieux leur habitat naturel et leur permettre de se déplacer librement.<br><br></div><div>L’état de santé de nos zèbres est soigneusement surveillé par notre équipe vétérinaire. Ils bénéficient d’une alimentation équilibrée et de soins réguliers afin de garantir leur bien-être physique et mental, tout en offrant aux visiteurs l’occasion d’observer de près ces animaux emblématiques des plaines africaines.</div>','zebre-689c527caa5d4360710996.jpg',1709396,'2025-08-13 08:53:16',18);
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breed`
--

DROP TABLE IF EXISTS `breed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breed_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breed`
--

LOCK TABLES `breed` WRITE;
/*!40000 ALTER TABLE `breed` DISABLE KEYS */;
INSERT INTO `breed` VALUES (1,'Capybara'),(2,'Gorille'),(3,'Iguane'),(4,'Paresseux'),(5,'Tigre'),(6,'Toucan'),(7,'Crocodile'),(8,'Grenouille'),(9,'Héron'),(10,'Loutre'),(11,'Serpent'),(12,'Tortue'),(13,'Babouin'),(14,'Eléphant'),(15,'Girafe'),(16,'Lion'),(17,'Rhinocéros'),(18,'Zèbre');
/*!40000 ALTER TABLE `breed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consultation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) NOT NULL,
  `date_consultation` date NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_964685A68E962C16` (`animal_id`),
  CONSTRAINT `FK_964685A68E962C16` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultation`
--

LOCK TABLES `consultation` WRITE;
/*!40000 ALTER TABLE `consultation` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_contact` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'TestTitre','test message','emailtest@email.com','2025-08-14'),(2,'TestTitre','Bonjour, j\'ai besoin de savoir qqchs','jbouchend@gmail.com','2025-08-14'),(3,'Test','test3','jbouchend@gmail.com','2025-08-14'),(4,'tr','OkBonjour je suis la pour vous contracter','jbouchend@gmail.com','2025-08-14'),(5,'Te','Hello, ceci est un message de test, pour vous contacter','jbouchend@gmail.com','2025-08-14'),(6,'Boubou','Bonjour, le formulaire d\'avis ne focntionne pas','test@test.com','2025-08-14'),(7,'Demande de renseignement','Bonjour, J\'aimerais savoir si on peut donner à manger aux animaux svp','alice.reglisse@example.com','2025-08-14'),(8,'Testr','Lesher tlerkjtuierpthjdhfer tnjfe 2025','jbouchend@gmail.com','2025-08-14'),(9,'Testencore','Les crocodiles vivent principalement dans les rivières, lacs et zones humides tropicales. Ils affectionnent les berges boueuses où ils peuvent se cacher pour surprendre leurs proies.<br>Carnivore opportuniste. Les jeunes mangent surtout insectes, poissons et amphibiens. Les adultes s’attaquent à de plus grosses proies comme des antilopes, des buffles, voire des zèbres venant s’abreuver.<br>Gaby, notre mâle adulte se porte bien. Ses bilans vétérinaires montrent un poids stable et des dents en bon état. Il bénéficie d’un bassin chauffé en hiver et d’un espace terrestre pour se prélasser. Ses repas sont variés : poissons, volailles entières et parfois viande rouge, afin de reproduire son régime naturel.','jbouchend@gmail.com','2025-08-14'),(10,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(11,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(12,'TestTitre','Entrypoint app [big] 1.36 MiB (2.64 MiB) = runtime.js 13 KiB vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js.js 613 KiB app.css 761 KiB app.js 1.78 KiB 1 auxiliary asset','jbouchend@gmail.com','2025-08-14'),(13,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(14,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(15,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(16,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(17,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(18,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(19,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(20,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(21,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(22,'TestTitre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(23,'Testre','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(24,'Boubou','Bonjour, un renseignement par téléphone serait possible svp, cordialement,','jbouchend@gmail.com','2025-08-14'),(25,'Probleme de poussette','Bonjour, serait-il possible de louer ou de nous preter une poussette sur place svp','poussete@email.com','2025-08-16'),(26,'Demande de renseignement','Entrypoint app [big] 1.36 MiB (2.64 MiB) = runtime.js 13.9 KiB vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js.js 613 KiB app.css 764 KiB app.js 1.78 KiB 1 auxiliary asset\r\nEntrypoint animalFood [big] 379 KiB = runtime.js 13.9 KiB vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_fun-0cb7b1.js 359 KiB animalFood.js 5.77 KiB\r\nEntrypoint _tmp_copy 13.9 KiB (55.7 MiB) = runtime.js 21 auxiliary assets','test@gmail.com','2025-08-17'),(27,'Test45','Test de message contact numero  quinze milles 200 pour le required','alice.reglisse@example.com','2025-08-17');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_food` date NOT NULL,
  `time` time NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D43829F78AD350AB` (`food_type_id`),
  KEY `IDX_D43829F78E962C16` (`animal_id`),
  KEY `IDX_D43829F7A76ED395` (`user_id`),
  CONSTRAINT `FK_D43829F78AD350AB` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`id`),
  CONSTRAINT `FK_D43829F78E962C16` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`),
  CONSTRAINT `FK_D43829F7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` VALUES (1,1,2,4,'2025-08-16','11:38:00',500),(2,3,9,4,'2025-08-16','09:00:00',10),(3,8,16,4,'2025-08-02','13:21:00',-1),(4,1,18,4,'2025-08-15','11:11:00',200),(5,9,1,4,'2025-08-11','13:58:00',300),(6,8,15,4,'2025-08-17','17:39:00',500),(7,10,6,4,'2025-08-15','09:09:00',50),(8,4,11,4,'2025-08-17','11:25:00',100),(9,8,6,4,'2025-08-02','14:25:00',200),(10,3,4,4,'2025-08-07','16:05:00',200),(11,3,8,4,'2025-08-17','12:34:00',100),(12,4,10,4,'2025-08-17','10:45:00',200);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_type`
--

DROP TABLE IF EXISTS `food_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `food_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_type`
--

LOCK TABLES `food_type` WRITE;
/*!40000 ALTER TABLE `food_type` DISABLE KEYS */;
INSERT INTO `food_type` VALUES (1,'Fruits'),(2,'Herbes'),(3,'Insectes'),(4,'Poissons'),(5,'Souris'),(6,'Oiseaux'),(7,'Crustacés'),(8,'Feuilles'),(9,'Viande'),(10,'Ecorces'),(11,'Plantes aquatiques'),(12,'Fleurs'),(13,'Oeufs');
/*!40000 ALTER TABLE `food_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitat`
--

DROP TABLE IF EXISTS `habitat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habitat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `habitat_name` varchar(255) NOT NULL,
  `habitat_description` longtext NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitat`
--

LOCK TABLES `habitat` WRITE;
/*!40000 ALTER TABLE `habitat` DISABLE KEYS */;
INSERT INTO `habitat` VALUES (1,'SAVANE','<div>La savane est un vaste paysage ouvert, caractérisé par des prairies herbeuses parsemées d\'arbres et de buissons épars.<br>Elle est l\'un des habitats les plus riches en biodiversité animale, et elle abrite certaines des espèces les plus emblématiques de la planète : herbivores, prédateurs, carnivores, oiseaux, insectes ou encore reptiles.<br>La savane est donc un écosystème dynamique où la compétition pour la survie est rude. La coexistence entre ces animaux forme un équilibre écologique complexe et fascinant.</div>','savane-home-689a421f74548498359978.jpg',1123003,'2025-08-11 19:18:55'),(2,'JUNGLE','<div>La jungle abrite une biodiversité extraordinaire : singes bondissants, oiseaux aux couleurs flamboyantes, félins discrets, serpents silencieux et grenouilles minuscules mais venimeuses. Chaque recoin semble cacher un secret, une forme de vie rare ou une scène de survie.<br>Mais la jungle n’est pas qu’un décor luxuriant : elle est un poumon pour la planète, un réservoir de vie et de mystère. Elle inspire autant le respect que l’émerveillement, tant elle semble vivante, presque consciente de sa propre force.</div>','jungle-home-689a422b39b91296047088.jpg',958549,'2025-08-11 19:19:07'),(3,'MARAIS','<div>Le marais est un paysage unique, où l’eau et la terre s’entrelacent dans un équilibre fragile mais fascinant.<br>Formé par l’accumulation d’eau douce ou salée dans des zones peu profondes, ce milieu humide accueille une biodiversité exceptionnelle.<br>Le marais joue aussi un rôle essentiel dans l’équilibre naturel. Il filtre les eaux, absorbe le surplus des crues et sert de refuge à de nombreuses espèces animales et végétales, parfois rares ou menacées.<br>Qu’il soit sauvage ou façonné par la main de l’homme, comme les marais salants ou les zones agricoles irriguées, le marais invite à la contemplation. Il est un havre de paix, un espace de transition entre l’eau et la terre, entre le visible et l’invisible.</div>','marais-home-689a446709f24026564631.jpg',1970680,'2025-08-11 19:28:39');
/*!40000 ALTER TABLE `habitat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opening_hours`
--

DROP TABLE IF EXISTS `opening_hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opening_hours`
--

LOCK TABLES `opening_hours` WRITE;
/*!40000 ALTER TABLE `opening_hours` DISABLE KEYS */;
/*!40000 ALTER TABLE `opening_hours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `review` longtext NOT NULL,
  `date_publication` date NOT NULL,
  `status_validation` tinyint(1) NOT NULL,
  `rate` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `service_description` longtext NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `icon_name` varchar(255) DEFAULT NULL,
  `icon_size` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Restauration','<div>Profitez d’une pause gourmande dans notre espace de restauration conçu pour toute la famille.<br>Nos offres comprennent :<br>- Restaurants familiaux<br>- Snacks et boissons<br>- Options végétariennes et véganes<br>- Menus pour enfants<br>- Terrasses en plein air</div>','sandwich-689ae98dc1be0268615983.jpg',1958551,'2025-08-17 20:52:52','icon-restaurant-68a241247cf91394779528.svg',3848),(2,'Visite guidée des habitats (gratuit)','<div>Plongez au cœur de la nature !<br>Conçues pour enrichir votre expérience, nos visites guidées vous offrent une perspective unique et informative sur les animaux et leur habitat.</div>','visite-guidee-689a14d808c2b954376399.jpg',1358352,'2025-08-17 20:53:11','icon-binoculars-68a241377126f872502872.svg',3745),(4,'Visite du zoo en petit train','<div>Transformez votre visite en une aventure relaxante et amusante !<br>Idéal pour les familles, les groupes d’amis, et ceux qui souhaitent découvrir le zoo sans effort.</div>','petit-train-689ae9bcd8415650621828.jpg',2011619,'2025-08-17 20:53:19','icon-train-68a2413f9a3ba365853371.svg',5329);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

LOCK TABLES `state` WRITE;
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'Très mauvais'),(2,'Mauvais'),(3,'Affaibli'),(4,'Stable'),(5,'Convalescent'),(6,'Correct'),(7,'Bon'),(8,'Très bon'),(9,'Excellent');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@zooarcadia.com','$2y$13$9l6D/Pg.2vHzgD5ldjb4uuqIM4etfbeWIC3rYtqtMY1vmfsjphIay','Fougerre','José','[\"ROLE_ADMIN\"]'),(3,'jade.robert@example.com','$2y$13$i4r3whB9/EI9KE/d9tJYw.q4fTiELnPzbxqN9OARdE4SvaOez.rwm','Robert','Jade','[\"ROLE_VETERINARY\"]'),(4,'alice.dupont@example.com','$2y$13$4whvjooSjCe5t0a7MC.5Q.ugg3Cu2wnetOeOt2O3GQQh/iefKlYyK','Dupont','Alice','[\"ROLE_EMPLOYEE\"]');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veterinary_report`
--

DROP TABLE IF EXISTS `veterinary_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veterinary_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_type_id` int(11) NOT NULL,
  `date_passage` date NOT NULL,
  `observation` longtext NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_53C7E56B8E962C16` (`animal_id`),
  KEY `IDX_53C7E56B5D83CC1` (`state_id`),
  KEY `IDX_53C7E56BA76ED395` (`user_id`),
  KEY `IDX_53C7E56B8AD350AB` (`food_type_id`),
  CONSTRAINT `FK_53C7E56B5D83CC1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`),
  CONSTRAINT `FK_53C7E56B8AD350AB` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`id`),
  CONSTRAINT `FK_53C7E56B8E962C16` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`),
  CONSTRAINT `FK_53C7E56BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veterinary_report`
--

LOCK TABLES `veterinary_report` WRITE;
/*!40000 ALTER TABLE `veterinary_report` DISABLE KEYS */;
INSERT INTO `veterinary_report` VALUES (1,2,8,3,1,'2025-08-17','RAS',500);
/*!40000 ALTER TABLE `veterinary_report` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-18 18:21:36
