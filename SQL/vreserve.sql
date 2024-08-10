-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 12:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vreserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Donation_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Wildlife_ID` text NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Donation_ID`, `User_ID`, `Wildlife_ID`, `Amount`, `Status`) VALUES
(1, 3, '5', 2000, 'Cancelled'),
(2, 3, '14', 4000, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Fullname` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Email_Address` text NOT NULL,
  `Password` text NOT NULL,
  `User_Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Password`, `User_Type`) VALUES
(1, 'Natalie Njeri Kinyua', '+254712345678', 'natalie@gmail.com', '0efb2b2f9b090c30ea3cd6130b75db93', 'Administrator'),
(2, 'Janus Doe', '0756778999', 'jane@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Wildlife Expert'),
(3, 'Mike Josephs', '0702127898', 'mike@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `wildlife`
--

CREATE TABLE `wildlife` (
  `wildlife_id` int(11) NOT NULL,
  `common_name` varchar(255) NOT NULL,
  `scientific_name` varchar(255) NOT NULL,
  `kingdom` varchar(255) DEFAULT NULL,
  `phylum` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `order_name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `genus` varchar(255) DEFAULT NULL,
  `species` varchar(255) DEFAULT NULL,
  `subspecies` varchar(255) DEFAULT NULL,
  `conservation_status` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `habitat` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `locale_description` text DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `habitat_type` varchar(255) DEFAULT NULL,
  `observation_date` datetime DEFAULT NULL,
  `number_observed` int(11) DEFAULT NULL,
  `behavior` text DEFAULT NULL,
  `environmental_conditions` text DEFAULT NULL,
  `observation_method` varchar(255) DEFAULT NULL,
  `observer_name` varchar(255) DEFAULT NULL,
  `observer_affiliation` varchar(255) DEFAULT NULL,
  `observer_contact_info` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `length` decimal(5,2) DEFAULT NULL,
  `health_status` text DEFAULT NULL,
  `breeding_season` varchar(255) DEFAULT NULL,
  `mating_behaviors` text DEFAULT NULL,
  `nesting_sites` text DEFAULT NULL,
  `number_of_offspring` int(11) DEFAULT NULL,
  `offspring_survival_rate` decimal(5,2) DEFAULT NULL,
  `primary_diet` varchar(255) DEFAULT NULL,
  `specific_food_items` text DEFAULT NULL,
  `feeding_times` text DEFAULT NULL,
  `natural_predators` text DEFAULT NULL,
  `human_threats` text DEFAULT NULL,
  `other_threats` text DEFAULT NULL,
  `protected_areas` text DEFAULT NULL,
  `conservation_programs` text DEFAULT NULL,
  `reintroduction_programs` text DEFAULT NULL,
  `multimedia_type` varchar(255) DEFAULT NULL,
  `multimedia_file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wildlife`
--

INSERT INTO `wildlife` (`wildlife_id`, `common_name`, `scientific_name`, `kingdom`, `phylum`, `class`, `order_name`, `family`, `genus`, `species`, `subspecies`, `conservation_status`, `description`, `habitat`, `region`, `country`, `locale_description`, `latitude`, `longitude`, `habitat_type`, `observation_date`, `number_observed`, `behavior`, `environmental_conditions`, `observation_method`, `observer_name`, `observer_affiliation`, `observer_contact_info`, `age`, `sex`, `weight`, `length`, `health_status`, `breeding_season`, `mating_behaviors`, `nesting_sites`, `number_of_offspring`, `offspring_survival_rate`, `primary_diet`, `specific_food_items`, `feeding_times`, `natural_predators`, `human_threats`, `other_threats`, `protected_areas`, `conservation_programs`, `reintroduction_programs`, `multimedia_type`, `multimedia_file_path`) VALUES
(1, 'African Elephant', 'Loxodonta africana', 'Animalia', 'Chordata', 'Mammalia', 'Proboscidea', 'Elephantidae', 'Loxodonta', 'africana', NULL, 'Vulnerable', 'Large herbivorous mammals', 'Savannahs, forests', 'East Africa', 'Kenya', 'Amboseli National Park', -2.645000, 37.253000, 'Savannah', '2024-05-12 08:00:00', 12, 'Foraging', 'Sunny', 'Direct sighting', 'Jane Doe', 'Wildlife Conservation Society', 'jane.doe@gmail.com', 'Adult', 'Female', 999.99, 3.50, 'Healthy', 'Year-round', 'Courtship displays', 'Near water bodies', 1, 0.85, 'Herbivore', 'Grasses, leaves', 'Morning, evening', 'Lions', 'Poaching, habitat loss', 'Climate change', 'National Parks', 'Anti-poaching units', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1486174070967-b0f1610f76de?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8QWZyaWNhbiUyMEVsZXBoYW50fGVufDB8fDB8fHww'),
(2, 'African Lion', 'Panthera leo', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Panthera', 'leo', NULL, 'Vulnerable', 'Large predatory cats', 'Savannahs, grasslands', 'East Africa', 'Kenya', 'Maasai Mara', -1.406000, 35.101000, 'Savannah', '2024-05-13 06:30:00', 8, 'Resting', 'Cool', 'Direct sighting', 'John Smith', 'African Wildlife Foundation', 'john.smith@gmail.com', 'Adult', 'Male', 190.00, 1.20, 'Healthy', 'Dry season', 'Roaring, scent marking', 'Tall grass', 3, 0.75, 'Carnivore', 'Zebra, wildebeest', 'Night', 'Hyenas', 'Conflict with humans', 'Disease', 'Conservancies', 'Lion monitoring programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1707760191006-4df4f55dde00?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8QWZyaWNhbiUyMExpb258ZW58MHx8MHx8fDA%3D'),
(3, 'Reticulated Giraffe', 'Giraffa reticulata', 'Animalia', 'Chordata', 'Mammalia', 'Artiodactyla', 'Giraffidae', 'Giraffa', 'reticulata', NULL, 'Endangered', 'Tall herbivorous mammals', 'Savannahs, woodlands', 'East Africa', 'Kenya', 'Samburu National Reserve', 0.533000, 37.425000, 'Savannah', '2024-05-14 09:00:00', 5, 'Browsing', 'Clear', 'Direct sighting', 'Alice Brown', 'Save the Giraffes', 'alice.brown@gmail.com', 'Adult', 'Male', 999.99, 5.50, 'Healthy', 'Year-round', 'Necking fights', 'Acacia trees', 1, 0.90, 'Herbivore', 'Leaves, twigs', 'Morning', 'Lions', 'Habitat fragmentation', 'Drought', 'National Reserves', 'Giraffe translocation projects', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1535082186814-5c60484a6fd4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8UmV0aWN1bGF0ZWQlMjBHaXJhZmZlfGVufDB8fDB8fHww'),
(4, 'Cheetah', 'Acinonyx jubatus', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Acinonyx', 'jubatus', NULL, 'Vulnerable', 'Fastest land animals', 'Open plains, savannahs', 'East Africa', 'Kenya', 'Tsavo East National Park', -2.764000, 38.204000, 'Savannah', '2024-05-15 07:00:00', 3, 'Hunting', 'Warm', 'Direct sighting', 'Bob Green', 'Cheetah Conservation Fund', 'bob.green@gmail.com', 'Adult', 'Female', 70.00, 1.10, 'Healthy', 'Dry season', 'Chasing', 'Open grassland', 2, 0.80, 'Carnivore', 'Gazelles, impalas', 'Daytime', 'Hyenas', 'Poaching, habitat loss', 'Genetic bottleneck', 'Wildlife Corridors', 'Breeding programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1516822487734-69ff4b9bf49d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Q2hlZXRhaHxlbnwwfHwwfHx8MA%3D%3D'),
(5, 'African Buffalo', 'Syncerus caffer', 'Animalia', 'Chordata', 'Mammalia', 'Artiodactyla', 'Bovidae', 'Syncerus', 'caffer', NULL, 'Least Concern', 'Large bovines', 'Savannahs, woodlands', 'East Africa', 'Kenya', 'Lake Nakuru National Park', -0.369000, 36.086000, 'Savannah', '2024-05-16 10:00:00', 20, 'Grazing', 'Cloudy', 'Direct sighting', 'Charlie Davis', 'Buffalo Conservation Group', 'charlie.davis@gmail.com', 'Adult', 'Male', 900.00, 1.70, 'Healthy', 'Wet season', 'Herd movements', 'Near water bodies', 1, 0.88, 'Herbivore', 'Grass', 'Morning, evening', 'Lions', 'Disease, habitat loss', 'Drought', 'National Parks', 'Disease control programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1615736611594-a929948632ce?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8QWZyaWNhbiUyMEJ1ZmZhbG98ZW58MHx8MHx8fDA%3D'),
(6, 'Black Rhinoceros', 'Diceros bicornis', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyla', 'Rhinocerotidae', 'Diceros', 'bicornis', NULL, 'Critically Endangered', 'Large herbivorous mammals', 'Savannahs, grasslands', 'East Africa', 'Kenya', 'Ol Pejeta Conservancy', 0.025000, 37.601000, 'Savannah', '2024-05-17 11:00:00', 2, 'Foraging', 'Hot', 'Direct sighting', 'Dana White', 'Rhino Protection Unit', 'dana.white@gmail.com', 'Adult', 'Female', 999.99, 1.60, 'Injured', 'Dry season', 'Territorial displays', 'Dense bush', 1, 0.70, 'Herbivore', 'Leaves, twigs', 'Morning, evening', 'Humans', 'Poaching', 'Climate change', 'Private Conservancies', 'Anti-poaching patrols', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1717652453979-125ec922c68b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QmxhY2slMjBSaGlub2Nlcm9zfGVufDB8fDB8fHww'),
(7, 'Grevy\'s Zebra', 'Equus grevyi', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyla', 'Equidae', 'Equus', 'grevyi', NULL, 'Endangered', 'Large equids with narrow stripes', 'Savannahs, scrublands', 'East Africa', 'Kenya', 'Samburu National Reserve', 0.533000, 37.425000, 'Savannah', '2024-05-18 08:00:00', 7, 'Grazing', 'Cool', 'Direct sighting', 'Eve Jackson', 'Zebra Conservation Trust', 'eve.jackson@gmail.com', 'Adult', 'Male', 400.00, 1.40, 'Healthy', 'Wet season', 'Courtship displays', 'Open plains', 1, 0.85, 'Herbivore', 'Grass', 'Morning, evening', 'Lions', 'Habitat loss, competition with livestock', 'Drought', 'Protected Areas', 'Zebra monitoring programs', 'N/A', 'Photo', 'https://plus.unsplash.com/premium_photo-1664302675980-74391b8023b5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8WmVicmF8ZW58MHx8MHx8fDA%3D'),
(8, 'African Leopard', 'Panthera pardus', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Panthera', 'pardus', NULL, 'Near Threatened', 'Solitary predatory cats', 'Forests, savannahs', 'East Africa', 'Kenya', 'Aberdare National Park', -0.421000, 36.717000, 'Forest', '2024-05-19 19:00:00', 1, 'Stalking', 'Cool', 'Camera trap', 'Frank Lee', 'Big Cat Initiative', 'frank.lee@gmail.com', 'Adult', 'Male', 80.00, 1.00, 'Healthy', 'Year-round', 'Vocalizations', 'Thick vegetation', 2, 0.80, 'Carnivore', 'Deer, monkeys', 'Night', 'Lions', 'Conflict with humans', 'Habitat fragmentation', 'National Parks', 'Habitat restoration', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1535684798837-210eef7063a5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QWZyaWNhbiUyMExlb3BhcmR8ZW58MHx8MHx8fDA%3D'),
(9, 'Olive Baboon', 'Papio anubis', 'Animalia', 'Chordata', 'Mammalia', 'Primates', 'Cercopithecidae', 'Papio', 'anubis', NULL, 'Least Concern', 'Social primates', 'Savannahs, forests', 'East Africa', 'Kenya', 'Mount Kenya National Park', -0.152000, 37.308000, 'Forest', '2024-05-20 14:00:00', 15, 'Grooming', 'Warm', 'Direct sighting', 'Grace Kim', 'Primate Research Institute', 'grace.kim@gmail.com', 'Adult', 'Female', 30.00, 0.70, 'Healthy', 'Year-round', 'Mating displays', 'Tree canopies', 1, 0.90, 'Omnivore', 'Fruits, insects', 'Daytime', 'Leopards', 'Habitat loss', 'Disease', 'Protected Areas', 'Primate conservation programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1557447928-9a1ca5819ed6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8T2xpdmUlMjBCYWJvb258ZW58MHx8MHx8fDA%3D'),
(10, 'African Wild Dog', 'Lycaon pictus', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Canidae', 'Lycaon', 'pictus', NULL, 'Endangered', 'Highly social pack hunters', 'Savannahs, grasslands', 'East Africa', 'Kenya', 'Laikipia Plateau', 0.127000, 37.057000, 'Grassland', '2024-05-21 17:00:00', 10, 'Hunting', 'Clear', 'Radio collar tracking', 'Harry Brown', 'Wild Dog Research Center', 'harry.brown@gmail.com', 'Adult', 'Male', 25.00, 0.75, 'Healthy', 'Dry season', 'Cooperative hunting', 'Open plains', 6, 0.70, 'Carnivore', 'Antelopes', 'Morning, evening', 'Lions', 'Disease, habitat loss', 'Climate change', 'Wildlife Corridors', 'Vaccination programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1661611736056-2ecd6ba75c44?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fEFmcmljYW4lMjBXaWxkJTIwRG9nfGVufDB8fDB8fHww'),
(11, 'Marabou Stork', 'Leptoptilos crumenifer', 'Animalia', 'Chordata', 'Aves', 'Ciconiiformes', 'Ciconiidae', 'Leptoptilos', 'crumenifer', NULL, 'Least Concern', 'Large wading birds', 'Wetlands, grasslands', 'East Africa', 'Kenya', 'Lake Naivasha', -0.716000, 36.432000, 'Wetland', '2024-05-22 12:00:00', 20, 'Scavenging', 'Sunny', 'Direct sighting', 'Ian Wright', 'BirdLife International', 'ian.wright@gmail.com', 'Adult', 'Female', 6.00, 1.50, 'Healthy', 'Wet season', 'Courtship dances', 'Tall trees', 1, 0.90, 'Omnivore', 'Fish, carrion', 'Daytime', 'None', 'Pollution', 'Habitat degradation', 'Wetland Reserves', 'Bird monitoring programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1689534155902-e74529339adc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8TWFyYWJvdSUyMFN0b3JrfGVufDB8fDB8fHww'),
(12, 'White Rhinoceros', 'Ceratotherium simum', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyla', 'Rhinocerotidae', 'Ceratotherium', 'simum', NULL, 'Near Threatened', 'Large herbivorous mammals', 'Grasslands, savannahs', 'East Africa', 'Kenya', 'Lake Nakuru National Park', -0.369000, 36.086000, 'Grassland', '2024-05-23 09:00:00', 3, 'Grazing', 'Cloudy', 'Direct sighting', 'Julia West', 'Rhino Care Organization', 'julia.west@gmail.com', 'Adult', 'Male', 999.99, 1.80, 'Healthy', 'Wet season', 'Territorial displays', 'Short grass plains', 1, 0.90, 'Herbivore', 'Grass', 'Morning, evening', 'Humans', 'Poaching', 'Drought', 'Protected Areas', 'Anti-poaching patrols', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1670384628127-178e46e32401?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8V2hpdGUlMjBSaGlub2Nlcm9zfGVufDB8fDB8fHww'),
(13, 'Greater Flamingo', 'Phoenicopterus roseus', 'Animalia', 'Chordata', 'Aves', 'Phoenicopteriformes', 'Phoenicopteridae', 'Phoenicopterus', 'roseus', NULL, 'Least Concern', 'Large wading birds', 'Lakes, lagoons', 'East Africa', 'Kenya', 'Lake Nakuru', -0.369000, 36.086000, 'Lake', '2024-05-24 11:30:00', 500, 'Feeding', 'Sunny', 'Direct sighting', 'Kevin Lee', 'Flamingo Conservation Network', 'kevin.lee@gmail.com', 'Adult', 'Female', 2.50, 1.10, 'Healthy', 'Wet season', 'Group displays', 'Shallow water', 1, 0.95, 'Omnivore', 'Algae, crustaceans', 'Daytime', 'None', 'Pollution', 'Habitat loss', 'Protected Areas', 'Water quality monitoring', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1636021004410-40428dd1f4e3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8R3JlYXRlciUyMEZsYW1pbmdvfGVufDB8fDB8fHww'),
(14, 'African Fish Eagle', 'Haliaeetus vocifer', 'Animalia', 'Chordata', 'Aves', 'Accipitriformes', 'Accipitridae', 'Haliaeetus', 'vocifer', NULL, 'Least Concern', 'Large raptors', 'Lakes, rivers', 'East Africa', 'Kenya', 'Lake Victoria', -0.767000, 33.068000, 'Lake', '2024-05-25 08:00:00', 2, 'Fishing', 'Clear', 'Direct sighting', 'Linda Gray', 'Raptor Conservation Society', 'linda.gray@gmail.com', 'Adult', 'Male', 4.00, 0.75, 'Healthy', 'Year-round', 'Vocalizations', 'Tall trees', 1, 0.85, 'Carnivore', 'Fish', 'Morning', 'None', 'Pollution', 'Habitat degradation', 'Protected Areas', 'Raptor monitoring programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1671215736333-26756359ed6e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8QWZyaWNhbiUyMEZpc2glMjBFYWdsZXxlbnwwfHwwfHx8MA%3D%3D'),
(15, 'Banded Mongoose', 'Mungos mungo', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Herpestidae', 'Mungos', 'mungo', NULL, 'Least Concern', 'Small social carnivores', 'Savannahs, grasslands', 'East Africa', 'Kenya', 'Masai Mara', -1.406000, 35.101000, 'Savannah', '2024-05-26 07:30:00', 12, 'Foraging', 'Cool', 'Direct sighting', 'Oliver King', 'Mongoose Research Group', 'oliver.king@gmail.com', 'Adult', 'Female', 1.50, 0.40, 'Healthy', 'Year-round', 'Group activities', 'Burrows', 1, 0.80, 'Carnivore', 'Insects, small vertebrates', 'Morning, evening', 'Birds of prey', 'Habitat loss', 'Disease', 'National Parks', 'Mongoose monitoring programs', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1553028429-58f931c6b716?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fEJhbmRlZCUyME1vbmdvb3NlfGVufDB8fDB8fHww'),
(16, 'Wildebeest', 'Connochaetes taurinus', 'Animalia', 'Chordata', 'Mammalia', 'Artiodactyla', 'Bovidae', 'Connochaetes', 'taurinus', NULL, 'Least Concern', 'Large herbivores', 'Savannahs, grasslands', 'East Africa', 'Kenya', 'Serengeti-Mara ecosystem', -1.377000, 34.685000, 'Savannah', '2024-05-27 10:00:00', 1000, 'Migrating', 'Warm', 'Direct sighting', 'Paul Martin', 'Migration Research Project', 'paul.martin@gmail.com', 'Adult', 'Male', 250.00, 1.50, 'Healthy', 'Wet season', 'Mass movement', 'Open plains', 1, 0.90, 'Herbivore', 'Grass', 'Morning, evening', 'Lions', 'Human-wildlife conflict', 'Climate change', 'Protected Areas', 'Migration tracking', 'N/A', 'Photo', 'https://images.unsplash.com/photo-1517118828960-de5ea37d8ae6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8V2lsZGViZWVzdHxlbnwwfHwwfHx8MA%3D%3D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`Donation_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`) USING HASH;

--
-- Indexes for table `wildlife`
--
ALTER TABLE `wildlife`
  ADD PRIMARY KEY (`wildlife_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `Donation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wildlife`
--
ALTER TABLE `wildlife`
  MODIFY `wildlife_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
