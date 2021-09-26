-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 06:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Admin Asc', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Ateng', 'ateng@gmail.com', 'ateng', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Mimin', 'mimin@gmail.com', 'mimin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinks_id` char(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `drinks_name` varchar(300) NOT NULL,
  `drinks_img` varchar(400) NOT NULL DEFAULT 'default.jpg',
  `drinks_desc` text NOT NULL,
  `drinks_price` double NOT NULL,
  `drinks_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinks_id`, `id_kategori`, `drinks_name`, `drinks_img`, `drinks_desc`, `drinks_price`, `drinks_date`) VALUES
('5c89bb5298', '5c88c1f55a', 'Mixed fruit ice dessert', '5c89bb5298366.jpg', 'Material:\r\n\r\n200 gr of young coconut meat\r\n200 gr tapai cassava, cut into pieces\r\n200 gr of black grass jelly, diced\r\n200 gr kolang kaling boiled, thinly sliced\r\nenough shaved ice\r\n400 cc of red syrup\r\n200 cc of sweetened condensed milk\r\n\r\nHow to make Jakarta mixed ice:\r\n\r\nPrepare a glass for mixed ice\r\nAdd 2 tablespoons of young coconut meat, 2 tbsp tapai cassava, 2 tbsp black cloves, and 2 tbsp kolang kaling\r\nAdd enough shaved ice, then pour the red syrup\r\nFinally, pour 2-3 tablespoons of sweetened condensed milk\r\nIce mix is ??ready to be enjoyed', 12000, '2019-04-15 07:11:00'),
('5c89c6943f', '5c88c1f55a', 'Teler Ice', '5c89c6943fbe6.jpg', 'Es Teler has a variety of fillings, such as young coconut, avocado, kolang kaling, coconut juice. Doused with sweetened condensed milk and coconut milk. This combination produces a sweet, savory taste that makes people addicted to making this ice called \"jazzed\".\r\n\r\nINGREDIENTS\r\n1 Avocado\r\n\r\n100 gr Coconut Meat\r\n\r\n50 gr jackfruit\r\n\r\n3 tablespoons Sweetened Condensed Milk\r\n\r\nShaved ice\r\n\r\nINSTRUCTIONS\r\nSplit the avocado into two parts, then scrape the fruit flesh, set aside.\r\n\r\nCut the jackfruit lengthwise, set aside.\r\n\r\nDredge coconut meat, set aside.\r\n\r\nPrepare a glass, add coconut water, shaved ice, avocado, jackfruit and coconut. Then, add sweetened condensed milk, serve', 11000, '2019-04-15 10:43:16'),
('5c89c718e5', '5c88c1f55a', 'Cold Lemon Tea', '5c89c718e5.jpg', 'You can try this healthy drink recipe during the day or as a very fresh food companion. Very well presented when entertaining family and relatives when offering home. Of course you have seen a lot of lemon tea drinks in the packaging. However, it will be even more special if you make it yourself from fresh and natural ingredients. Check out the recipe below:\r\n\r\nIngredients:\r\n\r\n1 bag of SariWangi Teabag\r\n2 tsp of sugar\r\n2 pieces of Lemon Orange\r\n50 ml of hot water\r\n150 ml of cold water\r\n6 Ice Cubes\r\nHow to make:\r\n\r\nBrewed SariWangi Teabag in 50 ml of hot water.\r\nAdd sugar, then stir until evenly distributed.\r\nSqueeze the lemon. Then, pour lemon juice into the tea.\r\nAdd ice cubes and add 150 ml of cold water.\r\nStir until the lemon juice mixes with the tea.\r\nAdd lemon slices as decoration. SariWangi Ice Lemon Tea is ready to be served.\r\nBlack tea is a calorie-free drink containing caffeine and theaflavin. The content is claimed to prevent the risk of dangerous diseases. By adding lemon juice to the tea, the nutritional content in tea drinks will certainly be more complete.\r\n\r\nLemon is a fruit that is rich in vitamin C. A cup of lemon juice provides daily vitamin C needed by the body. In addition, ascorbic acid in lemon vitamin C acts as an active compound that protects the body from free radicals. So even with black tea containing theaflavin, an active compound of polyphenols, which can also fight free radicals.\r\n\r\nFor women who want to have beautiful, healthy skin, lemon is a fruit that can maintain skin health. Eating or applying lemon to the skin regularly can help fight skin damage due to UV light and pollution. In addition, vitamin C also plays an important role in the formation of collagen.\r\n\r\nSome people are reluctant to drink lemon juice because it tastes sour. Well, this healthy drink recipe for SariWangi Ice Lemon Tea can be a new way to consume lemon juice. Good luck trying this recipe at home.', 11000, '2019-04-15 07:11:27'),
('5c89c80316', '5c88c1f55a', 'Coconut ice', '5c89c80316eba.jpg', '\r\nMaterial:\r\n\r\nYoung coconut meat\r\nMelon\r\nBasil seeds\r\nLychee syrup\r\nLime\r\n\r\nWays of making:\r\n\r\nCut melons according to taste\r\nAdd the young coconut meat, basil seeds and melon to the container\r\nAdd lychee syrup mixed with water\r\nAlso add lime juice\r\nServe with ice cubes to add freshness', 13000, '2019-04-15 07:09:51'),
('5cac5cdcb0', '5c88c1f55a', 'Black Coffe', '5cac5cdcb0.jpg', 'Tips for making delicious black coffee\r\n\r\nAfter providing the desired ground coffee, then we will try making delicious black coffee with the following recipe.\r\n\r\nProvide milled black coffee. And a clean, odor-free glass or mug that can sustain temperature or heat for longer.\r\n\r\nThen choose mineral water to boil. As much as possible avoid distilled water or tap water, because often it can cause coffee flavor to break.\r\n\r\nThe more mineral content in the water, the better.\r\n\r\nThen boil the water until it reaches 90 or 96 degrees Celsius. This is the most ideal temperature for brewing coffee. The temperature opened 96 degrees Celsius is the most perfect temperature. Preferably, preferably from 91 degrees centigrade, usually this boiling air will not be able to extract the coffee properly.\r\n\r\nThen put the coffee in a glass with it inserted, 1 gram of coffee is brewed with 15 ml of air. The calculation applies to multiples. Or 1:20. 7.5 grams of 150 ml of air coffee. However, some people also use 1:14 or 1:30. Choose according to taste.\r\n\r\nThen brew the coffee for about 2 to 4 minutes. This is the ideal length of time before drinking coffee. Sipping too fast, or too long will cause the taste of coffee to change. Make sure you make the delicious black coffee recipe to know the taste of true coffee.', 20000, '2019-04-15 07:09:17'),
('5cac5da195', '5c88c1f55a', 'Coffe Latte', '5cac5da1957a3.jpg', 'The presentation, this coffee latte adds a sprinkling of chocolate powder which is drawn something like a leaf image or other image according to taste. Certainly it will attract the attention of connoisseurs to drink coffee, really dech. Many people want to make this drink at home so that it is cheaper and relaxed to enjoy at home with family. For those who want to try serving coffee lattes, you can follow the following recipes for how to make cafe drinks and cheap Coffe Lattes below:\r\n\r\nThe ingredients make Coffe latte\r\nInstant coffee or espresso according to taste\r\n170 ml liquid milk\r\n120 ml thick cream\r\nSugar 2 ½ tablespoons of sugar\r\nChocolate 1 cup, smooth comb\r\nChocolate powder topping according to taste\r\nIce Small blocks according to taste\r\n\r\nHow to Make Delicious Coffe Latte\r\nHeat the milk then put the coffee in it, stir evenly until it dissolves and let it cool again\r\nMeanwhile, prepare a blender and put the thick cream in it along with sugar and ice cubes, puree until well blended.\r\nAdd the cooled milk and coffee mixture to the blender together with the fine brown bar comb. Puree again until evenly mixed\r\nPrepare a cup that is usually used for coffee, and pour the coffee latte in a blender into the cup with additional chocolate sprinkles. You can also decorate the look of the coffee latte by making a picture on it.\r\nServe and enjoy\r\n\r\nThe recipe for making a Coffe Latte is easy and cheap, does it cost? Are you sure you don\'t want the cold weather? Yuk Enjoy according to our taste. If you want to add it can, just according to the tastes of your friends', 22000, '2019-04-15 07:07:28'),
('5cb008032e', '5c88c1f55a', 'Green Tea', '5cb008032e787.jpg', 'It is known that green tea contains the highest levels of catechins, namely antioxidants that can destroy bacteria and viruses and prevent infection in the body.\r\n\r\nGreen tea regulates sugar levels in the body and prevents diabetes. Green tea lowers bad cholesterol in the blood.\r\n\r\nGreen tea kills cancer cells in the body and inhibits the growth of cancer cells. Green tea regulates blood pressure. Amino acids contained in green tea reduce the possibility of depression.\r\n\r\nAlthough green tea comes from the same tea plant as black tea, green tea leaves are less processed, so the color remains green and prevents the waste of many nutrients contained in it.\r\n\r\nBlack tea leaves have undergone fermentation, thus removing many nutritious nutrients.\r\nThings to consider when brewing the perfect green tea.\r\n\r\nGreen tea leaf type:\r\n\r\nThe bigger the green tea leaves, the longer it will take to brew.\r\nIt is better to use green tea leaves that are not wrapped in a tea bag, because the tea bag inhibits the release of nutrients into the water.\r\n\r\nStorage:\r\n\r\nUse a clean and airtight container (so the nutrients remain intact) to store green tea leaves in a place that does not get sunlight. Buy a little green tea leaves to keep it fresh.\r\n\r\nBrewing:\r\n\r\nGreen tea is served without sugar and milk. Too long brewing green tea leaves will cause a bitter taste. Temperature that is too hot when brewing green tea leaves will cause loss of nutrients.\r\n\r\nHowever, if the water is lukewarm, the catechins will not dissolve in steeping water. The water temperature for brewing green tea leaves is around 160 ° F (71,11 ° C). One teaspoon of green tea leaves is enough to brew a cup of green tea.\r\n\r\nHow to brew green tea:\r\n\r\nBring a cup of water to a boil and then let cool for one minute.\r\nAdd one teaspoon of green tea leaves and leave for 2-3 minutes.\r\nStrain and enjoy a cup of green tea.\r\nHoney can also be added.\r\n\r\nDrinking your green tea at the right time is as important as making it.\r\n\r\nHere are some instructions:\r\n\r\nNever drink green tea in the morning when the stomach is empty even though for the purpose of losing weight. Caffeine can cause the body to lack fluids (dehydration).\r\nGreen tea should not be taken when eating because it will reduce absorption of nutrients.\r\nDon\'t drink green tea mixed with milk, because the benefits of green tea will decrease and calcium absorption will decrease.\r\nThe best time to drink green tea is 11.00 or 16.00 to give maximum benefits to the body.', 20000, '2019-04-15 07:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` char(10) NOT NULL,
  `id_kategori` char(10) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `food_img` varchar(400) NOT NULL DEFAULT 'default.jpg',
  `food_desc` text NOT NULL,
  `food_price` int(9) NOT NULL,
  `food_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `id_kategori`, `food_name`, `food_img`, `food_desc`, `food_price`, `food_date`) VALUES
('5c88c25d14', '5c88c1eb82', 'Honey Roasted Duck', '5c88c25d14.jpg', 'Ingredients :\r\n\r\n10 pieces of duck (pieces can be adjusted to taste)\r\n1 tsp vetsin\r\n2 tablespoons salt\r\n1 lt of water (adjust)\r\n4 tablespoons sweet soy sauce\r\n1 teaspoon of beef flavoring (I use Royco)\r\n3 lbr bay leaf\r\n2 lbr orange leaves\r\nGround spices:\r\n8 red onion cloves\r\n6 garlic cloves\r\n1 segment of ginger\r\n1/2 tbsp coriander\r\n2 tablespoons brown sugar\r\nTopping spices:\r\n4 tablespoons sweet soy sauce\r\n2 tablespoons of honey\r\nStep\r\n90 minutes\r\nClean the duck. Smear the lime to taste. Let stand 15 minutes. Wash again.\r\n\r\n  \r\nSaute fine spices until fragrant, add water, salt, vetsin, flavored beef, sweet soy sauce, bay leaves and orange leaves.\r\n\r\n  \r\nAdd boiled duck for 1-2 hours while stirring occasionally. Or you can use a pressure pan. If you use a pressure cooker, cook for 20-25 minutes after the pan sizzles.\r\n\r\n  \r\nThe process of burning a duck: lift the duck. Smear with remaining marinade and topping spices.\r\n\r\n  \r\nBurn duck (I use granite fuel stone). Flip the duck. Then spread the top of the duck with the topping again.\r\n\r\n  \r\nOnce cooked, lift the duck and spread again with topical spices.\r\n\r\nReady to be served with chili according to taste', 50000, '2019-04-15 10:42:39'),
('5c89a64a60', '5c88c1eb82', 'Balinese Betutu Chicken', '5c89a64a6041f.jpg', 'Ingredients :\r\n\r\n4 servings\r\n1 chicken / stud, for 4 pieces, wash it, set it aside\r\n1 tbsp lemon\r\n1 tsp salt\r\n3 tablespoons of cooking oil\r\n500 ml of water\r\nPuree / finely chopped\r\n10 red onion slices, thinly sliced\r\n6 cloves of garlic, thinly sliced\r\n15 curly red chilies, thinly sliced\r\n5 cm roasted turmeric\r\n2 cm kencur\r\n4 cm ginger, grated\r\n5 cm galangal, grated\r\n1 1/2 tsp shrimp paste\r\n1 tsp coriander\r\n2 tsp salt\r\n1 tsp pepper\r\n4 lemongrass sticks, take the white part, thinly sliced\r\n1 tbsp of sugar\r\n5 orange leaves\r\nStep\r\n90 minutes\r\nSmear the chicken with lime and salt, let stand for 15 minutes, set aside.\r\n\r\n  \r\nHeat cooking oil, saute the spices that have been mashed and finely chopped until fragrant and cooked, remove.\r\n\r\n  \r\nSmear the chicken with sauteed spices until it is completely flattened, chicken skewers with a fork.\r\n\r\n  \r\nAdd the chicken that has been given spices in the pressure cooker, pour 500ml of water, then cook until the water shrinks, cook about 90 minutes or until the chicken is tender and cooked.\r\n\r\n  \r\nWait until the pressure pot stops hissing. Then lift it up.\r\n\r\n  \r\nBetutu chicken is ready to be served with jukut urap and sambal matah.\r\n\r\n  \r\nNote: if the high pot is not steamed, wrapped in banana leaves, it is not necessary to add water and use a little salt, then taste correction.\r\n\r\nHappy Cooking All ...', 75000, '2019-04-15 10:41:18'),
('5c89a6d888', '5c88c1eb82', 'Balinese Sate Lilit', '5c89a6d888c9a.jpg', 'Sate Lilit is a typical Balinese satay menu. This satay is commonly used for sacred traditional events, satay lilit is different from satay in general, this satay is not pierced but the meat is wrapped around lemongrass or bamboo and then burned.\r\n\r\nINGREDIENTS\r\n400 gr Mackerel fish milled\r\n\r\n100 gr ground chicken\r\n\r\n25 gr starch\r\n\r\n50 gr Wheat flour\r\n\r\n1 egg yolk\r\n\r\n1 segment of turmeric\r\n\r\n1 Ginger segment\r\n\r\n4 garlic fruit\r\n\r\n6 shallots\r\n\r\n1 Kencur section\r\n\r\n4 red chili fruit\r\n\r\n1 segment of Lengkuas\r\n\r\nSalt to taste\r\n\r\nAdequate brown sugar\r\n\r\nLemongrass.\r\n\r\nINSTRUCTIONS\r\nPuree turmeric, ginger, garlic, onion, kencur, chili, galangal, salt, brown sugar until smooth.\r\n\r\nSaute the spices until cooked.\r\n\r\nMix mackerel & ground chicken, add starch, flour, egg yolks, sauteed herbs and lemongrass.\r\n\r\nForm the satay and wrap the lemongrass stew and serve.', 15000, '2019-04-15 10:39:33'),
('5c89a7b712', '5c88c1eb82', 'Balinese Mixed Rice', '5c89a7b7120c4.jpg', 'Indonesia is indeed rich in delicious cuisine. Each region has a unique cuisine that other regions do not have, for example mixed rice. As the name implies, nasi campur is rice served with a variety of side dishes which number more than three types. There are many variants of mixed rice available in Indonesia such as Tegal\'s typical rice warteg, Yogyakarta\'s traditional gudeg rice, and Balinese mixed rice which is very popular in foreign countries. Like other traditional culinary, nasi campur Bali has a Balinese side dish that is different from other regional cuisines. For those of you who really like to eat mixed rice Bali, there are five side dishes that are always present and never absent, namely:\r\n\r\n \r\n1. Jukut Urap\r\nIn any mixed rice in Indonesia there are always vegetables in it, not least in mixed Balinese rice. Jakut urap is a food made from vegetables such as long beans, bean sprouts, cabbage leaves, spinach, long beans, and grated coconut with fried onion spices, garlic, citrus leaves, salt, shrimp paste, and chili so that it feels spicy . All ingredients are stirred together so that the taste becomes more delicious.\r\n\r\n \r\n\r\n2. Sate Lilit\r\nSate lilit is a Balinese satay made from finely chopped fish meat and seasoned with spices such as garlic, onion, orange leaves, galangal, coriander, turmeric, chili, and thick coconut milk to create a savory flavor. There is something unique about this Balinese satay, which is a stick that uses lemongrass sticks so the aroma is very fragrant when burned. Besides using fish meat, satay lilit can also be made from chicken and pork.\r\n\r\n3. Sambal Matah\r\nSambal cannot be released from Indonesian society. When eating rice, chili sauce seems to be the right partner. Sambal matah is a sambal which is different from other Indonesian chili because it is not crushed or mashed. You can simply slice with finely made ingredients such as onion, garlic, cayenne pepper, lemongrass sticks, and kaffir lime leaves. After all the ingredients are finely sliced, mix with lime juice, cooking oil, salt, and grilled shrimp paste.\r\n\r\n \r\n\r\n4. Shredded Chicken\r\nAlthough betutu chicken is the most famous Balinese chicken culinary, shredded chicken is the culinary that most often appears on Balinese mixed rice dishes. Shredded chicken made from boiled chicken breast and then shredded and given various spices such as lemongrass, bay leaves, orange leaves, red onion, garlic, cayenne pepper, shrimp paste, kencur, turmeric, and coconut milk. The taste is definitely savory spicy typical of Bali.\r\n\r\n \r\n\r\n5. Teri Kacang\r\nFinally, there are anchovy nuts that add rich texture to mixed rice. Teri kacang is made from peanuts and anchovies that are already fried first and then given spicy seasoning. The crispy and crispy anchovy texture can replace crackers which are often used as additional side dishes for Indonesian dishes.', 12000, '2019-04-15 10:37:45'),
('5c89a88716', '5c88c1eb82', 'Kerapu Fish Pepes', '5c89a887164d1.jpg', 'ingridients :\r\n\r\n1 grouper;\r\n\r\n1 teaspoon of salt;\r\n\r\n1 teaspoon of chicken flavoring;\r\n\r\n1 teaspoon lime powder (dissolve with water);\r\n\r\nGround spices;\r\n\r\n30 grams of yellow chicken spices;\r\n\r\n8 grams of ginger, puree;\r\n\r\n10 grams of lemongrass, puree;\r\n\r\n5 grams of salt;\r\n\r\n2.5 gram msg;\r\n\r\n4 grams of sugar;\r\n\r\n15 grams of basil leaves;\r\n\r\n25 grams of leeks, cut roughly;\r\n\r\n7.5 grams of red cayenne pepper;\r\n\r\n1.5 grams of bay leaves;\r\n\r\nHow to make;\r\n\r\n1. First, coat the grouper which has been cut and cleaned with powder lime (powder lime) which has been dissolved with the water, then sprinkle with salt and chicken flavoring powder. Set aside a moment;\r\n\r\n2. Mix into all ingredients of fine spices in one container, then coat all parts of the fish with fine spices, coat until evenly distributed;\r\n\r\n3. Add chopped leeks, cayenne pepper, bay leaves and basil leaves. Wrap with banana leaves;\r\n\r\n4. Steamed fish for at least 3 hours so that the ripe is more perfect;\r\n\r\n5. Serve while warm.', 10000, '2019-04-15 10:38:48'),
('5c89ab1a04', '5c88c1f55a', 'Candy Pop Cupcake', '5c89ab1a04.jpg', 'The main ingredient :\r\n\r\nBlue Band Cake and Cookie 90 gr\r\n\r\nversatile wheat flour 165 gr\r\n\r\nsugar 200 gr\r\n\r\nbaking powder 1 1/2 tsp\r\n\r\n1/4 tsp salt\r\n\r\n2 eggs chicken eggs\r\n\r\nmilk, mix with 1 tsp 125 ml vinegar\r\n\r\ncolorful brown rice (colorful mesis) 4 tbsp\r\n\r\n\r\nDecoration Material:\r\nReady to use butter cream to taste\r\nAdequate colorful sprinkle\r\n\r\n\r\n Presentation Steps:\r\n1. Beat Blue Band Cake & Cookies and sugar until smooth. Add the eggs, beat well.\r\n\r\n2. Add flour, baking powder, and salt, milk, stir. Add brown rice, mix well.\r\n\r\n3. Pour the mixture into a 12-hole cupcake pan covered with paper cup.\r\n\r\n4. Bake in a hot oven at 170 ° C until cooked. Lift. Cool it down.\r\n\r\n5. DECORATION: After cold, decorate with butter cream and sprinkle with sprinkle.', 10000, '2019-04-15 06:56:36'),
('5cac55a59e', '5c88c1eb82', ' Fried Rice With Eggs', '5cac55a59e3d9.jpg', 'For those of you who want to know how to make simple and tasty fried rice for 1 portion or how to make special fried rice with eggs, see the following article.\r\n\r\n1. How to make home-cooked fried rice\r\nMaterial :\r\n\r\nRice 600 gr\r\nChicken 125 g. Finely chopped\r\nEggs 1 item. Shake it\r\nRed onion 5 cloves\r\ngarlic 3 cloves\r\nRed chili 3 pieces\r\nLeaves 1 stalk. Fine slice\r\nSweet soy sauce 2 tbsp\r\nSalt 1 tsp\r\nPepper tsp\r\nOil\r\nHow to make\r\n\r\nAdd the onion, garlic, and red chili into the mortar then puree.\r\nFry the eggs into scrambles and set aside.\r\nSpices that have been mashed are then sauteed with enough oil. Stir-fry until fragrant.\r\nAdd the minced chicken, eggs and leeks to the spices. Saute again until evenly distributed.\r\nAdd soy sauce, salt and pepper. Mix well.\r\nThen enter the rice and stir until smooth.\r\nFried rice has been prepared and served on a serving plate.\r\nIt has already been explained that fried rice has many kinds. It\'s not just a way to make home-cooked fried rice that you can practice. You can also try how to make Java fried rice, as in the recipe below.\r\n2. How to make Java fried rice\r\nMaterial :\r\n\r\nWhite rice 600 g\r\n2 eggs chicken eggs. Shake loose\r\nChicken 125 g. Finely chopped\r\nCabbage 3 pieces. Fine slice\r\nSalt tbsp\r\nSugar tbsp\r\nPepper tsp\r\nKetchup 2 tbsp\r\nRed onion 5 cloves\r\nGarlic 4 cloves\r\nCayenne 5 pieces\r\nRed chili 5 pieces\r\nEbi roasted tbsp\r\n\r\nHow to make :\r\n\r\nAdd the onion, garlic, cayenne pepper, red chili, ebi, and pepper into the mortar and puree until smooth.\r\nSaute the mashed spices on a skillet using oil or butter to smell fragrant.\r\nAdd the beaten egg to the pan containing sautéed spices. Set aside the spices so that they are not mixed with the fry fried in the same pan.\r\nAdd the minced chicken into it. Saute until smooth.\r\nAdd the rice in and mix until the spices mix perfectly with the rice.\r\nAdd sugar, salt, soy sauce and stir until smooth.\r\nServe cooked fried rice on a serving plate\r\nYou can add lettuce, cucumber and crackers as a complement.\r\nIn closing, for those of you who want to try different sensations. You can try white fried rice. This fried rice does not use red chili and also soy sauce and the color of the rice remains white. No need to doubt, the taste can be said to be as delicious as other fried rice variations. Immediately, you try to make white fried rice below.\r\n\r\n3. How to make white fried rice\r\nMaterial :\r\n\r\nRice 600 g\r\nChicken eggs 1 grain. Shake it\r\n125g chicken meat. Finely chopped\r\n1 chicken sausage\r\nGarlic 3 cloves. Fine slice\r\nLeaves 1 stalk. Fine slice\r\nFish sauce, tbsp\r\nSalt tsp\r\nPepper tsp\r\nFlavored tsp\r\nHow to make :\r\n\r\nSaute garlic until fragrant. Add the eggs and scrambled.\r\nAdd the finely chopped chicken and sausage.\r\nAdd the chives. Saute again.\r\nAdd the rice and stir until smooth.\r\nAdd fish sauce, salt, pepper, and flavoring. Mix well until the aroma is delicious or fragrant.\r\nMove the white fried rice on the plate only. You can sprinkle fried shallots in addition.\r\nIt\'s easy not to practice how to make fried rice above? May be useful.', 15000, '2019-04-15 14:07:09'),
('5cac56cfc5', '5c88c1eb82', 'Beef Steak and Mix Vegetable', '5cac56cfc5b7b.jpg', 'Ingredients :\r\n\r\n250 grams of beef (slices into 2 thin and wide portions to taste, not too thin)\r\n4 onion cloves (white (puree)\r\nPepper powder (to taste)\r\nSalt to taste)\r\nSugar (to taste)\r\nBeef broth powder (to taste)\r\nSweet soy sauce (to taste)\r\nRight amount of oil)\r\n1 lime (take the water to bind the meat)\r\nEnough water)\r\n\r\nSupplementary material :\r\n\r\nSmooth salt (to taste)\r\nPepper powder (to taste)\r\nBeans (cut to taste, boiled or sauteed)\r\nSweet corn kernels (to taste, boiled or sauteed)\r\nPotatoes (sliced ??to taste, fried)\r\nCarrots (sliced ??to taste, boiled or sauteed)\r\nOnions (thinly sliced, sauteed or grilled)\r\nTomato sauce\r\nChili sauce\r\n\r\nHow to make :\r\n\r\nSmear the beef with lime juice and leave it for about 5 minutes.\r\nPrepare a place to bake meat or a pan (choose a pan with a flat surface)\r\nSmear the beef with fine spices, salt, pepper powder, meat powder broth, sweet soy sauce and a little sugar.\r\nGrease the meat with oil according to taste then bake it on a flat pan.\r\nTurn the meat back and forth evenly.\r\nIf you want to taste this home-style steak more delicious, occasionally add more spices to the meat. Let the spices soak well in the meat, add a little water and let the spices thicken.\r\nWhen done, remove the steak and serve it on a serving plate.\r\nOn a serving plate, neatly arrange sweet corn, french fries, beans, carrots and onions.\r\nPlace tomato sauce and chili sauce in a special container.\r\nImmediately serve this home-style meat steak while it\'s still hot.\r\n\r\nLadies, that\'s a delicious home-style beef steak recipe without being complicated. How, it\'s very easy right? Good luck trying this recipe and don\'t forget to present it to your loved ones. If you like moyones, you can add mayonnaise as a supplement for steek.', 120000, '2019-04-15 09:34:01'),
('5cac586aa2', '5c88c1f55a', 'Green Tea Gelato', '5cac586aa2ada.jpg', 'Green Tea Ice cream or green tea ice cream has a distinctive aroma / taste of green / matcha tea. Very soft on the tongue with a refreshing sensation. Perfect to be enjoyed as a dessert.\r\n\r\nDifficulty level: easy\r\nCooking time: 30 minutes + freeze\r\nFor: ± 500 ml\r\n\r\nIngredients :\r\n6 tablespoons of sugar\r\n3 tablespoons of powdered green tea\r\n2 egg yolks\r\n1 tbsp cornstarch, dissolve in a little water\r\n200 ml of liquid milk\r\n175 ml of thick cream\r\n\r\nHow to make :\r\n1. Add 3 tablespoons of sugar in a bowl. Sift the powdered green tea, put it in a bowl of sugar, stir until well blended, set aside.\r\n\r\n2. Beat the egg yolks with the remaining sugar in a separate container, until the color is pale. Add the cornstarch solution, stir, set aside.\r\n\r\n3. Put the liquid milk and sweetened condensed milk in a pan, spread over medium heat. Stir slowly until it\'s almost boiling, lift the pan from the heat.\r\n\r\n4. Slowly add the green tea mixture, stir. Then add the egg yolk mixture, mix well, spread again on low heat. Stir until thickened, lift.\r\n\r\n5. Place the pan in a container of ice water to cool, stir until cool. Transfer to container, freeze in freezer for 8 hours.\r\n\r\n6. Remove the ice from the freezer, shake it with a mixer until it\'s soft, put it back in the freezer until it\'s frozen. Do this process 3-4 times', 12000, '2019-04-15 14:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `status` enum('paid','confirmed','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_users`, `date`, `due_date`, `status`) VALUES
(1, 3, '2019-03-22 08:01:43', '2019-03-23 08:01:43', 'confirmed'),
(2, 1, '2019-03-22 08:09:09', '2019-03-23 08:09:09', 'confirmed'),
(5, 3, '2019-03-22 08:20:37', '2019-03-23 08:20:37', 'confirmed'),
(7, 1, '2019-04-09 10:24:03', '2019-04-10 10:24:03', 'confirmed'),
(8, 4, '2019-04-10 14:30:10', '2019-04-11 14:30:10', 'confirmed'),
(10, 4, '2019-04-10 14:51:42', '2019-04-11 14:51:42', 'unpaid'),
(11, 3, '2019-04-10 15:01:21', '2019-04-11 15:01:21', 'unpaid'),
(15, 3, '2019-04-10 15:03:05', '2019-04-11 15:03:05', 'unpaid'),
(16, 5, '2019-04-10 15:06:25', '2019-04-11 15:06:25', 'confirmed'),
(17, 1, '2019-04-10 15:25:12', '2019-04-11 15:25:12', 'confirmed'),
(18, 1, '2019-04-12 15:02:56', '2019-04-13 15:02:56', 'unpaid'),
(19, 1, '2019-04-12 15:17:00', '2019-04-13 15:17:00', 'unpaid'),
(20, 1, '2019-04-12 15:22:58', '2019-04-13 15:22:58', 'unpaid'),
(21, 1, '2019-04-12 15:24:51', '2019-04-13 15:24:51', 'unpaid'),
(22, 1, '2019-04-12 15:26:30', '2019-04-13 15:26:30', 'unpaid'),
(23, 1, '2019-04-12 15:32:28', '2019-04-13 15:32:28', 'unpaid'),
(25, 1, '2019-04-12 15:35:32', '2019-04-13 15:35:32', 'confirmed'),
(26, 10, '2019-04-15 07:53:35', '2019-04-16 07:53:35', 'confirmed'),
(27, 1, '2019-04-15 15:03:02', '2019-04-16 15:03:02', 'confirmed'),
(28, 1, '2019-04-22 10:19:42', '2019-04-23 10:19:42', 'confirmed'),
(29, 1, '2019-08-14 07:54:05', '2019-08-15 07:54:05', 'confirmed'),
(30, 1, '2019-09-10 09:30:37', '2019-09-11 09:30:37', 'confirmed'),
(31, 1, '2019-09-10 09:30:37', '2019-09-11 09:30:37', 'unpaid'),
(32, 15, '2019-10-11 16:49:33', '2019-10-12 16:49:33', 'confirmed'),
(33, 15, '2019-10-17 16:55:47', '2019-10-18 16:55:47', 'unpaid'),
(34, 15, '2019-10-30 21:14:37', '2019-10-31 21:14:37', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` char(10) NOT NULL,
  `kategori_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_name`) VALUES
('5c88c1eb82', 'Main Course'),
('5c88c1f55a', 'Dessert'),
('5d8b4956e5', 'Appetizer');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `mail_title` char(50) NOT NULL,
  `username` char(15) NOT NULL,
  `email` char(30) NOT NULL,
  `mail_desc` text NOT NULL,
  `mail_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_title`, `username`, `email`, `mail_desc`, `mail_date`) VALUES
(1, 'Hello', 'Cahyadi', 'cahyadikriss@gmail.com', ' Hello Asciente Resto i from Indonesia, Nice to meet you', '2019-04-15'),
(2, 'This web are nice', 'King', 'king@gmail.com', 'wowww this web is soo beautifulll nice work, Amazing', '2019-04-15'),
(3, 'So Good', 'Choo', 'choo@gmail.com', '\r\nordering food is very easy on this web, this is very helpful for people who are lazy to queue up and leave the house because of traffic jams on the road', '2019-04-15'),
(4, 'Amazing resto', 'Nana', 'nana@gmail.com', 'the first time I visited this website, wow it was really cool and beautiful I\'ve visited the Asciente Resto several times, the scenery there is beautiful and amazing', '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `menu_id` char(10) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `menu_id`, `menu_name`, `qty`, `price`, `options`) VALUES
(1, 1, '5c89ab1a04', 'Candy Pop Cupcake', 1, 10000, ''),
(2, 2, '5c89ab1a04', 'Candy Pop Cupcake', 1, 10000, ''),
(3, 2, '5c89c80316', 'Es Kelapa Muda', 1, 10000, ''),
(4, 5, '5c89a88716', 'Pepes Ikan Kerapu', 1, 10000, ''),
(5, 7, '5c89ab1a04', 'Candy Pop Cupcake', 1, 10000, ''),
(6, 7, '5c89c718e5', 'Cold Lemon Tea', 1, 10000, ''),
(7, 8, '5c88c25d14', 'Bebek Bakar Madu', 1, 50000, ''),
(8, 8, '5cac5cdcb0', 'Black Coffe', 1, 10000, ''),
(9, 10, '5cac56cfc5', 'Beef Steak with Mix Vegetable', 1, 120000, ''),
(10, 10, '5c89c718e5', 'Cold Lemon Tea', 1, 10000, ''),
(11, 10, '5cac586aa2', 'Green Tea Gelato', 1, 12000, ''),
(12, 11, '5cac586aa2', 'Green Tea Gelato', 3, 12000, ''),
(13, 11, '5c89ab1a04', 'Candy Pop Cupcake', 1, 10000, ''),
(14, 15, '5c89a7b712', 'Nasi Campur Khas Bali', 1, 12000, ''),
(15, 15, '5cac55a59e', 'Nasi Goreng Telur Mata Sapi', 1, 15000, ''),
(16, 16, '5cac55a59e', 'Nasi Goreng Telur Mata Sapi', 2, 15000, ''),
(17, 16, '5cac5da195', 'Coffe Latte', 1, 10000, ''),
(18, 16, '5cac586aa2', 'Green Tea Gelato', 1, 12000, ''),
(19, 17, '5c89a64a60', 'Ayam Betutu Bali', 1, 75000, ''),
(20, 17, '5c89c80316', 'Coconut ice', 1, 10000, ''),
(21, 18, '5c89a7b712', 'Nasi Campur Khas Bali', 1, 12000, ''),
(22, 19, '5c89a6d888', 'Sate Lilit Bali', 1, 15000, ''),
(23, 19, '5cb008032e', 'Green Tea', 1, 10000, ''),
(24, 20, '5cac586aa2', 'Green Tea Gelato', 1, 12000, ''),
(25, 21, '5cac56cfc5', 'Beef Steak with Mix Vegetable', 1, 120000, ''),
(26, 22, '5c88c25d14', 'Bebek Bakar Madu', 1, 50000, ''),
(27, 23, '5cac5cdcb0', 'Black Coffe', 1, 10000, ''),
(28, 25, '5c89c6943f', 'Es Teler', 1, 10000, ''),
(29, 26, '5cac56cfc5', 'Beef Steak with Mix Vegetable', 1, 120000, ''),
(30, 26, '5cac5da195', 'Coffe Latte', 1, 22000, ''),
(31, 27, '5cac5da195', 'Coffe Latte', 3, 22000, ''),
(32, 28, '5cac55a59e', ' Fried Rice With Eggs', 1, 15000, ''),
(33, 28, '5cac5cdcb0', 'Black Coffe', 1, 20000, ''),
(34, 29, '5cac56cfc5', 'Beef Steak and Mix Vegetable', 2, 120000, ''),
(35, 29, '5c88c25d14', 'Honey Roasted Duck', 1, 50000, ''),
(36, 30, '5cac56cfc5', 'Beef Steak and Mix Vegetable', 1, 120000, ''),
(37, 32, '5cac55a59e', ' Fried Rice With Eggs', 1, 15000, ''),
(38, 33, '5cac56cfc5', 'Beef Steak and Mix Vegetable', 1, 120000, ''),
(39, 34, '5cac56cfc5', 'Beef Steak and Mix Vegetable', 1, 120000, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` char(30) NOT NULL,
  `telp_users` char(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `groups` tinyint(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `telp_users`, `username`, `password`, `groups`) VALUES
(1, 'king@gmail.com', '0812334566122', 'king', 'king', 2),
(2, 'admin@gmail.com', '089606620616', 'admin', '1234', 1),
(3, 'nana@gmail.com', '0895364426299', 'Nana', '1234', 2),
(4, 'cahyadikriss@gmail.com', '0895368816922', 'Cahyadi', '1234', 2),
(5, 'koala111@gmail.com', '0812321456789', 'Koala', 'koala1234', 2),
(10, 'choo@gmail.com', '0895368827762', 'Choo', 'choo', 2),
(12, 'rimu11@gmail.com', '0895554326799', 'rimuru', 'rimu123', 2),
(13, 'lala111@gmail.com', '085776894322', 'Lala', 'lala123', 2),
(14, 'archipe@gmail.com', '0855522256667', 'Archipe', 'arc111', 2),
(15, 'humanit@gmail.com', '0895368816922', 'humanit', 'humanit123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinks_id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drinks`
--
ALTER TABLE `drinks`
  ADD CONSTRAINT `drinks_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
