-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 04:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covictory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'krupa', 'thanki', 'krupa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'vishrutiba', 'jadeja', 'vishrutiba@gmail.com', 'c0aac9ba8a15f362165c4d875ab1ba37');

-- --------------------------------------------------------

--
-- Table structure for table `oreder`
--

CREATE TABLE `oreder` (
  `o_id` int(11) NOT NULL,
  `product_nm` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `dt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oreder`
--

INSERT INTO `oreder` (`o_id`, `product_nm`, `price`, `dt`) VALUES
(1, 'Richfeel Anti Acne Calendula Face Wash - 100g', 130, '22-05-15'),
(2, 'Paracetamol50mg Tablet', 0, '22-05-15'),
(3, 'Latex Hand Gloves - Pack of 1(100 Pieces)', 348, '22-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_img2` varchar(100) NOT NULL,
  `p_img3` varchar(100) NOT NULL,
  `p_desc` varchar(1000) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `p_type` varchar(10) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_img`, `p_img2`, `p_img3`, `p_desc`, `price`, `quantity`, `p_type`, `type`) VALUES
(2, 'Elastic Adhesive Bandage 10cm x 4mt,1 iece', 'bandage.png', 'bandage1.png', 'bandage2.png', 'A Flexible and Comfortable Cotton Fabric Bandage that leave no traces of Adhesive on the Skin after Removal\r\n\r\nBreathable Material : Premium and Breathable material made it lighter and more Comfortable for long day use\r\n\r\nPorus Adhesion : Excellent Adhesion with Porous Structure, Permeable to Air & Moisture, Prevents Skin Maceration\r\n\r\n100% Latex free , Adhesive used is from Natural Rubber\r\n\r\nMy Armor Adhesive Bandage has Premium finish for long lasting use and comes with Fast Edges\r\n', 55, 100, 'Surgical', 2),
(3, 'Nitroglysrin-Bottle of 30 Tablets ', 'nitroglysrin1.png', 'nitroglysrin2.png', 'nitroglysrin3.png', '\r\n    Composition: Each uncoated tablet contains Diluted Nitroglycerin IP equivalent to Nitroglycerin 2.6 mg (in a controlled release form)\r\n    This product will have minimum 6 months’ expiry at the time of order dispatch.\r\n    Dosage: One tablet twice daily or as directed by the Physician.\r\n    Color: Erythrosine\r\n    Storage Instructions: Store at a temperature not exceeding 30⁰C, protected from light and moisture.These tablets should be swallowed whole and not chewed. .Keep out of reach of children.\r\n    Manufactured/Marketed by: Modi Mundipharma Pvt. Ltd.\r\n    Schedule H Prescription Drug-Warning: Not to be sold by retail without the prescription of a Registered Medical Practitioner\r\n', 218.45, 200, 'medicine', 1),
(4, 'Paracetamol50mg Tablet', 'paracitamol.png', 'paracitamol2.png', 'paracitamol3.png', 'Calpol 500mg Tablet helps relieve pain and fever by blocking the release of certain chemical messengers responsible for fever and pain. It is used to treat headaches, migraine, nerve pain, toothache, sore throat, period (menstrual) pains, arthritis, muscle aches, and the common cold.', 0, 200, 'Medicine', 1),
(5, 'Lifebuoy Alcohol Based Hand Sanitizer 500ml', 'sanetizer.png', 'sanetizer2.png', 'sanetizer3.jpg', '\r\n    Lifebuoy Antibacterial Hand Sanitizer also comes in a convenient easy to carry pack that helps protect you when out of home\r\n    Packaging may vary in the form of cap, pump, nozzle etc\r\n    Lifebuoy Antibacterial Hand Sanitizer has Glycerine, it leaves your skin feeling moisturised\r\n    Apply enough Hand sanitiser gel on your palm. Spread and rub over the back of your hands thoroughly and fingertips until completely dry before touching other surfaces\r\n    Lifebuoy Antibacterial Hand Sanitizer kills 99.9% bacteria and virus without water\r\n    Lifebuoy Antibacterial Hand Sanitizer has over 60% alcohol content and gives you instant germ protection\r\n', 166, 200, 'higenic', 3),
(6, 'PICKNGRAB 10 ml 10 piece Plastic Syringe', 'injection.png', 'injection2.png', 'injection3.png', '\r\n    REUSABLE FOR PRINTER INK REFILL PURPOSE ONLY\r\n    NEW CONDITION\r\n    BEST QUALITY\r\n    PRINTER INK REFILL PURPOSE', 109, 20, 'surgical', 2),
(7, 'Richfeel Anti Acne Calendula Face Wash - 100g', 'calendula.png', 'calendula2.png', 'calendula3.png', '\r\n    SOOTHING CALENDULA EXTRACTS : Packed with a rich flavonoid content, this highly regarded herb is well known for its anti-fungal, anti-inflammatory, antibacterial and wound healing.\r\n    GENTLE & CALMING DEEP CLEANSE: Gently wash away impurities, dust and dirt with this mild, deep cleansing foaming formula that will leave skin smooth and squeaky clean, without drying it.\r\n    VISIBILY RADIANT AND CLEAR SKIN : Provides an instant fresh and bright look to your face. Continued use will help improve the quality of your skin, leaving it visibly clearer, smoother and radiant.\r\n    PHYSICIAN FORMULATED : Formulated by India’s Leading Beauty Physicians, with clinical legacy of over 30 years.\r\n    NATURAL FORMULA : 100% Vegetarian formula Cruelty Free\r\n', 130, 50, 'higenic', 3),
(8, 'Latex Hand Gloves - Pack of 1(100 Pieces)', 'hand-glove.png', 'hand-glove2.png', 'hand-glove3.png', '\r\nQuantity : One box of 100 latex Gloves\r\nMaterial : Natural Latex\r\nType : Unisex, Disposable, Premium Quality\r\n    Colour : White\r\n', 348, 70, 'surgical', 2),
(9, 'Benadryl - Bottle of 150ml cough Syrup ', 'benadrayl.png', 'benadrayl2.png', 'benadrayl3.png', ' Composition: Each 5 ml contains: Diphenhydramine Hydrochloride IP 14.08mg, Ammonium Chloride IP 138mg, Sodium Citrate IP 57.03mg Ethanol (95%) IP 0.2625 ml (Expressed as Esthanol IP) 5.0% v/v     \r\nDosage: Not to used for children below 2 years of age without medical advice, Children 2 to 5 years - 1/2 Teaspoonfuls (2.5ml): 6-12 years – 1 Teaspoonful (5.0ml): Over 12 years & Adults – 2 Teaspoonfuls (10ml), Does to be taken every 4 hours. Not to exceed 12 Teaspoonfuls in 24 hours. Consult Physician on case coughing persists for more than 4 days or if you have any medical condition or pregnancy or are breast feeding or taking other medication.', 109.65, 100, 'medicine', 1),
(10, 'Cipla Cofsils- Sore,Itchy Throat  (10 x 10 Strips) ', 'cofsils.png', 'cofsils2.png', 'cofsils3.png', ' It\'s unique triple relief formula is Anti Viral, Anti Bacterial and gives soothing effect for quick relief from sore throat, scratchy throat & itchy throat.\r\nBenefits : Quick relief from sore throat.\r\nDosage : One lozenge every 3 hrs and let it dissolve slowly in the mouth. If symptoms continue consult your Doctor.\r\nCofsils Lozenges are available in many exciting flavours like Orange, Lemon Honey, Ginger Lemon', 270, 200, 'medicine', 1),
(11, 'Head Cover Cap, Disposable and Latex-Free, Package of 100 ', 'head-cover.png', 'head-cover2.png', 'head-cover3.png', ' SPUNBONDED POLYPROPYLENE: These O.R. caps are made from spun bonded polypropylene fabric. They are latex-free, making them ideal for anyone with latex allergies.\r\nCOMFORTABLE: Made from SPP fabric, these caps are breathable, yet are still able to offer complete hair coverage. Breathability allows the caps to stay cooler than non-breathable fabrics or materials. They are lint-free.\r\nSECURE, FULL PROTECTION: Each cap has an elastic band to keep the cap securely in place without sliding. These caps offer full hair protection, significantly reduces the risk of contamination- both the wearer\'s head and the environment being worked in. ', 12.5, 200, 'higenic', 3),
(12, 'Dettol Antibacterial Soap Bar Sensitive ', 'detol.jpg', 'detol2.png', 'detol3.jpg', 'Dettol\'s sensitive bar soap helps to protect against bacteria and is enriched with moisturisers to keep you clean and your skin soft. Dermatologically tested & suitable for the whole family, this bar soap is formulated to be kind and gentle on even the most sensitive skin. Depend on Dettol to leave you feeling clean and refreshed all day.', 16.15, 300, 'higenic', 3),
(13, 'Methotrexate 7.5mg Tablet', 'Methotrexate.jpg', 'Methotrexate2.jpg', 'Methotrexate3.png', 'Imutrex Tablet is used in the treatment of life-threatening conditions like rheumatoid arthritis, psoriasis, and few cancers. It should be used under the supervision of a qualified professional.', 130, 70, 'medicine', 1),
(14, 'Oximeter', 'oximeter.png', 'oximeter2.png', 'oximeter3.png', ' ACCURATE & RELIABLE RESULTS: Accurately determines Saturation of Human Hemoglobin (SpO2), Pulse Rate (PR) and Pulse Strength. Designed for families, clinics, and oxygen bars for monitoring oxygen & pulse readings\r\nQUICK & EASY RESULTS: Using this device is as simple as pressing a button. It displays results in less than 3 seconds and uses patented digital technology to show results in four different directions with a simple press of button\r\nBRIGHT OLED DISPLAY: It has colored multi-directional OLED display which shows clear and bright results every time. The display is easy to read in dark, inside room or outdoor in bright sunlight\r\nPACKED WITH ACCESSORIES: Travel-ready packing includes all essential things needed for using it on the go. Packaging includes 2XAAA batteries, pulse oximeter, & a lanyard for carrying it as wrist strap or wearing around the neck ', 1099, 899, 'surgical', 2),
(15, 'Walnut Medical BP Machine', 'bp.png', 'bp2.png', 'bp3.png', 'POWER SOURCE - Our BP Measuring Machine works best with Duracell AA batteries (not included), also works with standard USB charger (power cord included). Device also features auto switch-off to conserve battery.MOVEMENT ARTEFACT REJECTION - Our Digital BP Monitor Machine has Intelligence to detect and reject errors induced by sudden movements to give maximum accuracy ', 999, 78, 'surgical', 2),
(16, 'Digital Diabetes Glucose Blood Sugar Testing Monitor', 'dia.png', 'dia2.png', 'dia3.png', '\r\n    EASY TO USE, NO CODING! It takes just 5 sec and a small 0.5µl droplet to get your reading. The blood sugar monitor and lancing device both come with ejection Button to release used strips and lancets.\r\n    ADJUSTABLE LANCET: Lancing Device with its five (5) depth settings! Choose what’s comfortable for you.\r\n    Measuring Time: 5 sec\r\n    Minimum Blood Sample: 0.5 mg/dl\r\n', 699, 687, 'surgical', 2),
(17, 'Cinthol Lime Bath Soap', 'cyn.png', 'cyn2.png', 'cyn3.png', '\r\n    Contains: 9 units of Cinthol Lime Bath Soap (100g each)\r\n    HIGH QUALITY: High TFM (Grade 1 soap) that keeps your skin healthy and glowing\r\n    LIME FRESHNESS: Intense cooling lime that revitalizes your senses for a fantastic bathing experience\r\n    LASTING DEO FRAGRANCE: Long-lasting refreshing fragrance that keeps you fresh and confident all day\r\n    SUITABLE FOR: All skin types and all age groups; Ideal for both Men & Women\r\n    Also available in 4 other variants: Original, Health+, Deo and Cool\r\n', 320, 89, 'higenic', 3),
(18, 'Declofenac tablet', 'dec.png', 'dec2.png', 'dec3.png', 'Diclofenac Sodium 50mg Tablet is a pain-relieving medicine. It is used to treat pain, swelling, stiffness, and joint pain in conditions like rheumatoid arthritis, osteoarthritis, and acute musculoskeletal injuries. It is commonly used in back pain, shoulder pain, neck pain, sprains, and spasms.\r\n', 528, 890, 'medicine', 1),
(19, 'Aloderma Pure Aloe Vera Gel Made with Aloe Vera', 'alo.png', 'alo2.png', 'alo3.png', ' REPAIR AND SOOTHE: The leaves of an Aloe Vera plant are packed with nutrients, active amino acids, vitamins, minerals, and enzymes making it perfect for everyday use. Pure Aloe Vera Gel delivers the benefits of Aloe Vera in its natural state to moisturize, nourish, repair, soothe, and improve overall skin elasticity while infusing with natural nutrients. Pure Aloe Vera Gel is a natural first step in skin care.\r\nHAND HARVESTED: At Aloderma, our skincare is rooted in the earth. We control all aspects on our organic farms from when Aloe goes in the ground to when it is harvested to ensure we grow the happiest and most biologically active plants possible. Our Aloe is processed and turned into final products within hours of leaving the fields to ensure that we capture the highest levels of the 230 natural nutrients found in Aloe Vera. ', 29.99, 807, 'higenic', 3),
(20, 'Soft Surgical Tape 2” x 10 Yards, Cloth Medical Tape', 'tap.png', 'tap2.png', 'tap3.png', 'BREATHABLE CLOTH TAPE - JJ Care\'s Soft Surgical Tape is a general-purpose adhesive tape mostly used in wound dressing and overall wound care. This bandage tape is made of a highly breathable material that protects skin integrity especially during prolonged wound care. Despite excellent adhesion, the tape still lets the skin breathe without causing irritation. EASY ON THE SKIN - The Medical Surgical Tape is made latex-free and safe on sensitive skin. It is important to choose the right type of adhesive tape so as not to cause further tissue damage to healing wounds or any allergic reaction. As an excellent wound care product, this soft white tape offers smooth and painless removal, high skin tolerance and no residue.', 18.89, 569, 'surgical', 2),
(21, 'THUJA HOMEOPATHIC CREAM Ointment For Polypi, Tubercles and Warts', 'thuja.png', 'thuja2.png', 'thuja3.png', '\r\n    excellent homeopathic remedy for Polypi, Tubercles and Warts.\r\n    Contains Thuja Occidentalis MT - 10% v/w\r\n    Quality product (GMP & ISO 9001 certified company)\r\nSBL Thuja Ointment is indicated to treat skin related problems, polyps, tubercles, corns, brown spots, eruptions and warts.\r\n\r\nKey Ingredients:\r\n\r\n    Thuja Occidentalis MT in ointment base (White Petrolatum, Paraffin and Lanoin)', 5.8, 457, 'medicine', 1),
(22, 'Ambrodil Syrup 100 ml', 'amp.png', 'amp2.png', 'amp3.png', 'Ambroxol is an expectorant (relieves congestion) and mucolytic agent (dilutes viscous cough/mucus) that loosens the mucus to make the breathing easier. Ambrodil S Syrup 100 ml is used to treat cough associated with respiratory disorders like asthma and chronic obstructive pulmonary diseases (COPD).', 203.12, 444, 'medicine', 1),
(26, 'Dr Trust USA Nutrition Migrelief ', 'drusa.png', 'drusa2.png', 'drusa3.png', 'Dr Trust Migraine supplement 720 has added ingredients that improve the endogenous circadian system (sleep/wake cycle) by mimicking the natural endogenous melatonin. It can treat sleep-related disorders and improves sleep quality and sudden awakenings in between sleep. \r\nClinically researched ingredients including Melatonin and Suntheanine (L-Theanine), Co-enzyme Q10, Magnesium Riboflavin all are added in a perfect proportion for enhanced efficacy and results. Melatonin and L-theanine promote mental relaxation and improve mood by increasing brain serotonin levels.', 899, 59, 'medicine', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'krupa', 'thanki', 'thanki@gmail.com', 'b216c0e0692e43aae256132cbad85a00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oreder`
--
ALTER TABLE `oreder`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oreder`
--
ALTER TABLE `oreder`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
