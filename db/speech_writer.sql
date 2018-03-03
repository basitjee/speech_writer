-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 09:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `speech_writer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@hotmail.com', '7ZLfsaWYvAlUlI5A7a8odNYme+1jIv8xKcZtgkSIkPs=');

-- --------------------------------------------------------

--
-- Table structure for table `blurb`
--

CREATE TABLE IF NOT EXISTS `blurb` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `main_speech_id` int(255) NOT NULL,
  `sub_speech_id` int(255) NOT NULL,
  `blurb` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `blurb`
--

INSERT INTO `blurb` (`id`, `main_speech_id`, `sub_speech_id`, `blurb`) VALUES
(1, 1, 2, 'This speech is from you, the employer, to one of your employees leaving. It covers the usual topics: looking back over the time they''ve been with you, reflecting on the contributions they made, thanking them for their service and wishing them well.'),
(2, 1, 1, 'This speech is from you, the employer, to one of your employees leaving. It covers the usual topics: looking back over the time they''ve been with you, reflecting on the contributions they made, thanking them for their service and wishing them well.'),
(3, 1, 3, 'This is goodbye speech'),
(4, 1, 4, 'This is nice goodbye speech'),
(5, 1, 8, 'This is a very good blurb text for our speech'),
(6, 1, 9, 'A wickedly amusing speech winging in all the way from Wellington.'),
(7, 1, 10, 'Just practicing in my study how to use the speech builder.'),
(8, 1, 11, 'A wickedly amusing speech winging in all the way from Wellington.'),
(9, 1, 12, 'Practice makes perfect - how to say farewell.'),
(10, 1, 13, 'This is Susan from Wellington NZ Island Bay'),
(11, 2, 14, 'Welcome your special guests to your event. This speech opens your event and sets the scene. It introduces yourself and your guests to the audience, making everybody feel welcome!'),
(12, 1, 15, 'This is a some blurb text for our speech'),
(13, 1, 16, 'This is small blurb'),
(14, 1, 17, 'This is a large blurb text and there is a lot of blah blah blah blah blah blah blah blah blah blah and end'),
(15, 1, 3, 'its a test speech underdevelopment'),
(16, 1, 4, 'This is a delightful speech to be given to your favourite person');

-- --------------------------------------------------------

--
-- Table structure for table `main_speech`
--

CREATE TABLE IF NOT EXISTS `main_speech` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `speech_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `main_speech`
--

INSERT INTO `main_speech` (`id`, `speech_title`) VALUES
(1, 'Farewell'),
(2, 'Welcome');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_speeches`
--

CREATE TABLE IF NOT EXISTS `purchased_speeches` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sold_speech_id` varchar(255) NOT NULL,
  `speech` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purchased_speeches`
--

INSERT INTO `purchased_speeches` (`id`, `sold_speech_id`, `speech`) VALUES
(1, 'xQK36bC5', '<p> I like Icecream.</p><br/><p> My name is sub heading and I am an expert job</p><p> I like  <img src="images/help.png" title="actor" height="28" width="28">  amitabh</p>'),
(2, 'dfSLr2k1', '<p> This is my absolute favourite Vegetables.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `step_order` int(255) NOT NULL,
  `main_speech_id` int(255) NOT NULL,
  `sub_speech_id` int(255) NOT NULL,
  `step` longtext NOT NULL,
  `question` longtext NOT NULL,
  `choice_selection_box` varchar(5) NOT NULL,
  `1opening` varchar(500) NOT NULL,
  `2opening` varchar(500) NOT NULL,
  `3opening` varchar(500) NOT NULL,
  `4opening` varchar(500) NOT NULL,
  `5opening` varchar(500) NOT NULL,
  `6opening` varchar(500) NOT NULL,
  `editor_heading` longtext NOT NULL,
  `editor_sub_heading` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `step_order`, `main_speech_id`, `sub_speech_id`, `step`, `question`, `choice_selection_box`, `1opening`, `2opening`, `3opening`, `4opening`, `5opening`, `6opening`, `editor_heading`, `editor_sub_heading`) VALUES
(1, 4, 1, 2, '<input type="text" name="name" placeholder="Fred, Mary, Bob, Violet, Sam ..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is the first name of your employee?', 'no', '', '', '', '', '', '', '', ''),
(2, 5, 1, 2, '<div align="left" style="width: 500px;" >\r\n<input type="radio" name="gender" value="male" id="custom" required style="vertical-align: middle"> Male<br>\r\n<input type="radio" name="gender" value="female" id="custom" style="vertical-align: middle"> Female<br>\r\n</div>', 'Is {name} male or female ?', 'no', '', '', '', '', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(3, 6, 1, 2, '<input type="text" name="years" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'How many years have you employed {name}?', 'no', '', '', '', '', '', '', '', ''),
(4, 7, 1, 2, '', '', 'yes', 'Thanks everyone for coming along to say goodbye to {name}.', '{name}, it looks like everybody''s here! That''s a wonderful compliment. It takes someone very special to drag them from their work.', 'We''re gathered here to say fond farewell to {name}. Yes, the day we''ve been dreading has finally arrived.', '', '', '', 'Select one of these speech openings by clicking on it and then click NEXT to continue.', ''),
(5, 8, 1, 2, '', '', 'yes', '{name} it''s been {years} since you first came here. We had to double check the calendar to make sure. It doesn''t seem that long at all!', 'When I realized that you''ve actually been with us for {years} I was amazed. I am sure time shrinks, especially when you spend it with people whom you''ve come to rely on.', '{name} you''ve been part of the crew now for {years}. While we''re grateful for that, we''d like you to know no matter how many you''ve given us, they''ll never be enough.', '', '', '', 'Now choose ONE of these paragraphs and then click NEXT to continue', ''),
(6, 9, 1, 2, '<input type="text" name="company" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is the name of your company?', 'no', '', '', '', '', '', '', '', ''),
(7, 10, 1, 2, '', '', 'yes', 'Over that period we''ve learned that we can depend on you in so many ways. We''ve been lucky to have you with us. It''s true to say that {company} won''t be the same without you.', '{name} we''re so fortunate circumstances and the stars aligned to bring you here. It truly was {company}''s lucky day. And today, while not the unluckiest, it certainly is a day of change.', 'It''s difficult to say goodbye to someone whom you''ve come to respect someone who helps makes the workplace an interesting and stimulating place to be.', '', '', '', 'Choose one of these paragraphs by clicking on it and then click NEXT to continue', ''),
(8, 11, 1, 2, '', '', 'yes', 'Looking back there''s been laughter, team work, jokes, challenges and times when we attempted and achieved the impossible.', 'I know you''ll agree that we''ve witnessed some momentous changes in the industry requiring all of us to dig deep. It''s been an exciting and challenging ride.', 'Taking time to gain to an overview of someone''s contribution to the company is something we don''t do enough of. {name} I always knew you were one of the best and reviewing everything you helped us achieve nailed it.', '', '', '', 'Choose ONE of these options by clicking on it and then click NEXT to continue', ''),
(9, 12, 1, 2, '', '', 'yes', '{name} we can''t let this opportunity go by without mentioning the highlights, the significant contributions you''ve made.', '{name} we know you are modest and not one for blowing your own trumpet. Normally we''d honor that but today is an exception and we''re going to blow your trumpet for you!', 'Projects come and projects go. But some become special milestones because of what was achieved by the people who worked on them.', '', '', '', 'Select one of these options by clicking on it and then click NEXT to continue.', ''),
(10, 13, 1, 2, '<input type="text" name="example1" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required><br><br><br><input type="text" name="example2" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="example3" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'Did {name} work on any special and memorable projects, or have specific skills you''d like to mention? Put one in each box.', 'no', '', '', '', '', '', '', '', ''),
(11, 14, 1, 2, '', '', 'yes', 'In particular we''d like to thank you for your work in {example1}, {example2} and {example3}.', '{name} you go down in company history for your achievements on the {example1}, {example2} and {example3}.', 'Whenever we consider {example1}, {example2} or {example3} we will think of you.', '', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(12, 15, 1, 2, '<br><br><textarea name="personalization" col="50" rows="5"></textarea>', '', 'yes', 'When you''re finished please click NEXT to continue. If you don''t want to add more, that''s fine too. Skip the step by clicking NEXT.', '', '', '', '', '', 'Would you like to add some specific detail about {name}''s work contribution? Write it in the box. Eg. We''ll always remember how hard you worked to improve our customer satisfaction ratings. I think you mantra ''do unto others'' is permanently etched in our minds', ''),
(13, 16, 1, 2, '', '', 'yes', 'You set a high standard. One that''s hard to replicate and one that will endure.', 'We admired the way you always pushed yourself to find the best solution to whatever challenge was put in front you.', 'The company has benefited from the energy and creativity you brought to your work.', '', '', '', 'Choose one of these options to describe how the company felt about {name}''s work and then click NEXT to continue.', ''),
(14, 17, 1, 2, '', '', 'yes', 'We''ve acknowledged your work but we also want to thank you for being the person you are.', 'While we gratefully acknowledge your years of service and work, we don''t want to overlook the personal pleasure of sharing your company.', '{name} it wasn''t just your work ethic and its results we admired.', '', '', '', 'Now we''re going to talk about {name}''s personal qualities. Choose one of these openings to introduce the subject, and then click NEXT to continue.', ''),
(15, 18, 1, 2, '', '', 'yes', 'I have to say that coming to work knowing {name} would be here with a smile on {pronoun} face no matter what the situation has made many a tough day worthwhile.', 'Having you on the team, willing to lend a hand, listen, act, lead and speak your mind when you needed to, made life at {company} better for us all.', 'Selfishly we want to know what we are going to do when we need a dose of that truly unique combination of characteristics that make you special.', '', '', '', 'Please select one of these options by clicking on it, and then click NEXT to continue', ''),
(16, 19, 1, 2, '<input type="text" name="quality1" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="quality2" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="quality3" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'When you think about {name} what positive or admirable qualities come to mind? Put one in each box. Example: sense of humor, leadership, honesty...', 'no', '', '', '', '', '', '', '', ''),
(17, 20, 1, 2, '', '', 'yes', '{name} we''ve enjoyed and appreciated your {quality1}, {quality2} and {quality3}.', 'Since we heard the news we''ve been looking for someone with similar qualities. So far the hunt has failed. Replacing your {quality1}, {quality2}, and {quality3} will not be easy.', 'We''ve heard the talk in the office and know just how much your {quality1}, {quality2}, and {quality3} was valued.', '', '', '', 'Now choose one of these options talking about {name}''s personal qualities.', ''),
(18, 21, 1, 2, '<br><br><textarea name="personalization2" col="50" rows="5"></textarea>', 'Would you like to add some more about {name}''s positive qualities? Write a sentence or two illustrating them in action in the box. Eg. April Fool''s Day will never be the same without you! That prank you pulled... or Your kindness to new staff is legendary. You''ve always taken the time to guide people through those first few perplexing days.', 'yes', 'This is an optional step.', '', '', '', '', '', 'If you''d like to write more about {name}''s positive qualities, maybe add an example or two, please put it in the text box. When you''re finished click NEXT to continue.', ''),
(19, 22, 1, 2, '', '', 'yes', 'We''ll miss you! We''ve shared some good times together. In farewelling you we''re saying goodbye not just to a colleague, but also to a friend.', 'Although this is a farewell speech, we ask that you don''t take it literally. Our door is always open, especially to friends, for that is what you have become.', 'Goodbye seems such a final word. It''s hard to say especially when you know you''re going to miss the person leaving. Instead we''ll say, See you later! and look forward to catching up in the future.', '', '', '', 'Now you''re coming to the close of your speech. Choose one of these options to begin the final farewell, and then click on NEXT to continue.', ''),
(20, 23, 1, 2, '', '', 'yes', '{name} We understand leaving is not always easy and that it has to be done sometimes. We wish you lots of success as you go on your way. Keep in touch.', 'Sometimes people have got to look out for new aims and challenges. We respect that and know it''s true for you {name}. May all you reach them all. And lastly, don''t be a stranger!', 'Having to say goodbye to you {name} makes us realize just how much you''ve given us. Take it from us, your new employer will soon know how lucky they are to have you. We wish you every success.', 'On behalf of all of us, in the words of Garrison Keillor, Be well, do good work, and keep in touch.', 'And finally, I say this speaking for us all. We know you are going to get an awesome salary in your new job but there is no guarantee that you will get awesome colleagues like us too. Are you sure you still want to go? OK {name}, but promise us this, to keep in touch.', 'Lastly I have to let you know this is a moment I deeply regret. If I''d known that you would turn out to be such an extraordinary employee, I would have asked you to sign a 99 year contract so that you could never leave. {name} We wish you well.', 'This is the very last choice you have to make. Select one of these options to end your speech.', ''),
(31, 1, 1, 8, '<input type="text" name="name" placeholder="fashion designer, doctor, pilot, writer" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'Who are you ?', 'no', '', '', '', '', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(32, 2, 1, 8, '<div align="left" style="width: 500px;" ><input type="radio" name="colors" value="Red" id="custom" required style="vertical-align: middle"> Red<br><input type="radio" name="colors" value="White" id="custom"  style="vertical-align: middle"> White<br></div>', 'What is your favourite color', 'no', '', '', '', '', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(34, 1, 1, 11, '', '', 'yes', 'Hi', 'Hello', 'How are you?', 'Pleased to see you!', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(45, 1, 1, 9, '<div align="left" style="width: 500px;" ><input type="radio" name="please_choose" value="Male" id="custom" required style="vertical-align: middle"> Male<br><input type="radio" name="please_choose" value="Female" id="custom"  style="vertical-align: middle"> Female<br></div>', 'Are you male or female?', 'no', '', '', '', '', '', '', 'Click on one of these openings and then click NEXT to continue', ''),
(47, 3, 1, 8, '<div align="left" style="width: 500px;" ><input type="radio" name="name_choice" value="Tom" id="custom" required style="vertical-align: middle"> Tom<br><input type="radio" name="name_choice" value="Liza" id="custom"  style="vertical-align: middle"> Liza<br><input type="radio" name="name_choice" value="Micheal" id="custom"  style="vertical-align: middle"> Micheal<br><input type="radio" name="name_choice" value="Ted" id="custom"  style="vertical-align: middle"> Ted<br></div>', 'What is your name ?', 'no', '', '', '', '', '', '', '', ''),
(49, 4, 1, 8, '', '', 'yes', 'This is my first statement', 'This is my second statement', '', '', '', '', 'Please click on any of these 2 statements', ''),
(50, 5, 1, 8, '', '', 'yes', 'Hi', 'Hello', 'Welcome', '', '', '', 'Please click on any statement', ''),
(51, 1, 1, 10, '<input type="text" name="first_name" placeholder="Please put your first name here..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What is your first name ?', 'no', '', '', '', '', '', '', '', ''),
(52, 2, 1, 10, '<input type="text" name="mode" placeholder="Enter your mode..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', '{first_name} how are you ?', 'no', '', '', '', '', '', '', '', ''),
(53, 3, 1, 10, '', '', 'yes', '{first_name}, welcome on speech board', 'hello, are you {mode}', 'Welcome in this zone', '', '', '', 'Please select your desired statements', ''),
(54, 1, 1, 13, '<div align="left" style="width: 500px;" ><input type="radio" name="choose_color" value="Red" id="custom" required style="vertical-align: middle"> Red<br><input type="radio" name="choose_color" value="Green" id="custom"  style="vertical-align: middle"> Green<br><input type="radio" name="choose_color" value="Violet" id="custom"  style="vertical-align: middle"> Violet<br><input type="radio" name="choose_color" value="Yellow" id="custom"  style="vertical-align: middle"> Yellow<br></div>', 'What is your favourite color?', 'no', '', '', '', '', '', '', '', ''),
(55, 2, 1, 13, '<div align="left" style="width: 500px;" ><input type="radio" name="choose_your_city" value="Wellington" id="custom" required style="vertical-align: middle"> Wellington<br><input type="radio" name="choose_your_city" value="Lahore" id="custom"  style="vertical-align: middle"> Lahore<br><input type="radio" name="choose_your_city" value="Timbucktoo" id="custom"  style="vertical-align: middle"> Timbucktoo<br><input type="radio" name="choose_your_city" value="Paris" id="custom"  style="vertical-align: middle"> Paris<br></div>', 'Where do you Live?', 'no', '', '', '', '', '', '', '', ''),
(58, 6, 1, 8, '', '', 'yes', 'This is the first one to choose from.', 'This is the second one to choose from.', 'This is the third one to choose from.', '', '', '', 'Choose one of the following statements.', ''),
(59, 7, 1, 8, '<input type="text" name="first_name" placeholder="Mary, Fred, Bob, Thomas, Evan, Albert, Ethel" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is your first name?', 'no', '', '', '', '', '', '', '', ''),
(60, 8, 1, 8, '', '', 'yes', '{first_name} hello', 'Goodbye {first_name}', 'Playing with speech builder', '', '', '', 'Blah, blah {first_name}', ''),
(61, 9, 1, 8, '<div align="left" style="width: 500px;" ><input type="radio" name="gender" value="Male" id="custom" required style="vertical-align: middle"> Male<br><input type="radio" name="gender" value="Female" id="custom"  style="vertical-align: middle"> Female<br></div>', 'Is {first_name} male of female?', 'no', '', '', '', '', '', '', '', ''),
(95, 1, 1, 15, '', '', 'yes', 'Hi everybody!', 'Good morning! Good afternoon! Good evening!', 'Hello folks!', '', '', '', 'Select a greeting to open your speech by clicking it.', ''),
(96, 2, 1, 15, '<input type="text" name="name" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What is your name?', 'no', '', '', '', '', '', '', '', ''),
(97, 3, 1, 15, '<input type="text" name="title" placeholder="Head of sales, manageing director, principle, director, etc..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What is your title?', 'no', '', '', '', '', '', '', '', ''),
(98, 4, 1, 15, '<input type="text" name="guest_1" placeholder="Bob Smit, janes, wong, Sonia Jones..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="guest_2" placeholder="Sir Harlod Mick, Lady Penelope, Rosemarry Small..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="guest_3" placeholder="Mark Crick, Joe Hunt, Ptere Well..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What are the names of your special guests?n', 'no', '', '', '', '', '', '', '', ''),
(99, 5, 1, 15, '<input type="text" name="town" placeholder="Karach, Wellingtone, Lahore..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What town, geographical area or country are you in?', 'no', '', '', '', '', '', '', '', ''),
(100, 6, 1, 15, '', '', 'yes', 'My name is {name}, {title} and on behalf of us all it''s my honor to welcome our esteemed guest(s) {guest_1}, {guest_2}, and {guest_3}. We''re delighted to have you here.', 'For those of you who don''t know me, I''m {name} and {title}. Please join me in giving {guest_1}, {guest_2} and {guest_3} a warm {area} welcome. Let''s show them we''re thrilled to have them here!', 'I''m {name} and {title}, the lucky person who gets to welcome and introduce our distinguished guest(s): {guest_1}, {guest_2}, and {guest_3}. We''re honored to have you with us.', '', '', '', 'Click on the sentence you want from those below to introduce yourself and welcome your guests.', ''),
(101, 1, 2, 14, '', '', 'yes', 'Hi everybody!', 'Welcome! It''s a pleasure to see you all.', 'Hello friends!', '', '', '', 'Select a greeting to open your speech by clicking on it. [If you want to, you can change it in the speech editor.]', ''),
(103, 2, 2, 14, '<input type="text" name="name" placeholder="Mary, Zena, Harry, Martha, Ruth ..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is your name?', 'no', '', '', '', '', '', '', '', ''),
(104, 3, 2, 14, '<input type="text" name="title" placeholder="company spokesperson, event coordinator, director ..." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is your job title or role?', 'no', '', '', '', '', '', '', '', ''),
(105, 4, 2, 14, '<input type="text" name="guest_1" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required><br><br><br><input type="text" name="guest_2" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="guest_3" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What are the names of your special guests? [If you only have one special guest to introduce leave the remaining fields blank.]  ', 'no', '', '', '', '', '', '', '', ''),
(106, 5, 2, 14, '<input type="text" name="area" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'What town, geographical area or country are you in? ', 'no', '', '', '', '', '', '', '', ''),
(107, 6, 2, 14, '', '', 'yes', 'My name is {name}, {title} and on behalf of us all it''s my honor to welcome our esteemed guest(s) {guest_1}, {guest_2}, and {guest_3}. We''re delighted to have you here.', 'For those of you who don''t know me, I''m {name} and {title}. Please join me in giving {guest_1}, {guest_2} and {guest_3} a warm {area} welcome. Let''s show them we''re thrilled to have them here! ', 'I''m {name} and {title}, the lucky person who gets to welcome and introduce our distinguished guest(s): {guest_1}, {guest_2}, and {guest_3}. We''re honored to have you with us.', '', '', '', 'Click on the sentence you want from those below to introduce yourself and welcome your guests. Use the editing tools to change it to suit if needed. ', ''),
(108, 7, 2, 14, '', '', 'yes', 'Thank you to each and everyone of you for coming along. It''s great to see you all.', 'We''ve got special guests, we''ve got a very special audience, that''s you, and an extra special program. Thank you to everybody for making the effort to be here.', 'It''s wonderful to see such a mix of familiar as well as new faces. We''re so pleased you all made the decision to be with us today.', '', '', '', 'Now select a sentence to welcome everybody else attending this event.', ''),
(114, 8, 2, 14, '<input type="text" name="company_name" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'What is the name of your company or organization?', 'no', '', '', '', '', '', '', '', ''),
(116, 10, 2, 14, '<div align="left" style="width: 500px;" ><input type="radio" name="company_describe" value="excellence" id="custom" required style="vertical-align: middle"> excellence<br><input type="radio" name="company_describe" value="on-going development" id="custom"  style="vertical-align: middle"> on-going development<br><input type="radio" name="company_describe" value="innovative problem solving" id="custom"  style="vertical-align: middle"> innovative problem solving<br><input type="radio" name="company_describe" value="exemplary customer service" id="custom"  style="vertical-align: middle"> exemplary customer service<br><input type="radio" name="company_describe" value="creative collaborative partnerships" id="custom"  style="vertical-align: middle"> creative collaborative partnerships<br><input type="radio" name="company_describe" value="future-focused research" id="custom"  style="vertical-align: middle"> future-focused research<br><input type="radio" name="company_describe" value="I will enter my own words." id="custom"  style="vertical-align: middle"> I will enter my own words.<br></div>', 'Which word or phrase BEST describes {company_name}?', 'no', '', '', '', '', '', '', '', ''),
(117, 11, 2, 14, '<input type="text" name="tag" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'Does {company_name} have a motto or a tag line?', 'no', '', '', '', '', '', '', '', ''),
(118, 12, 2, 14, '<div align="left" style="width: 500px;" ><input type="radio" name="time" value="today" id="custom" required style="vertical-align: middle"> today<br><input type="radio" name="time" value="this morning" id="custom"  style="vertical-align: middle"> this morning<br><input type="radio" name="time" value="this afternoon" id="custom"  style="vertical-align: middle"> this afternoon<br><input type="radio" name="time" value="this evening" id="custom"  style="vertical-align: middle"> this evening<br><input type="radio" name="time" value="tonight" id="custom"  style="vertical-align: middle"> tonight<br><input type="radio" name="time" value="this weekend" id="custom"  style="vertical-align: middle"> this weekend<br><input type="radio" name="time" value="over the next few days" id="custom"  style="vertical-align: middle"> over the next few days<br></div>', 'Which word or phrase BEST describes the time and duration of the event?', 'no', '', '', '', '', '', '', '', ''),
(119, 13, 2, 14, '', '', 'yes', '{company_name} is committed to {company_describe}. This event is the embodiment of that. ', 'You all know {company_name}''s tag line: {tag}. In our time together {time} let''s commit to whole heartedly celebrating it!', 'We all know {company_name} and know they stand for {company_describe}. {time}''s event is no exception. ', '', '', '', 'Choose how you''d like to introduce and talk about {company_name}.', ''),
(120, 14, 2, 14, '', '', 'yes', 'This event has been marked off in our calendars for months and finally arrived. Let''s give those who''ve worked to make it happen a big round of applause. Now I know I speak for all of us when I say we''re eager to hear from our guest(s), {guest_1}, {guest_2}, and {guest_3}. Their knowledge and expertise is renowned. ', 'Hands up all of you who''ve been looking forward to this occasion. There! It''s official - that''s everybody! {guest_1}, {guest_2}, {guest_3} what better proof of interest and engagement is there? We''re ready to absorb everything you have to offer. Our eyes, ears and hearts are open.', 'Looking at all your eager faces I know I speak for everyone when I say this occasion is indeed special. The planning team have excelled themselves! Thank you! And another very big thank you to {guest_1}, {guest_2}, {guest_3} for accepting the invitation to join us. We are grateful for the opportunity to learn from your experience and knowledge.', '', '', '', 'Choose how you want to introduce the occasion.', ''),
(121, 15, 2, 14, '<input type="text" name="speaker_role" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'Enter the name, and the role, of the person speaking straight after you.', 'no', '', '', '', '', '', '', '', ''),
(124, 7, 1, 15, '', '', 'yes', 'Once upon a time there was a king [an owner of state] and lives very happily', 'There was a queen [wife of king] and she live good', 'I like pepsi [soft drink] and it should be chilled', '', '', '', 'This is a heading', ''),
(126, 8, 1, 15, '<input type="text" name="my_cat" placeholder="" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" >', 'This is a heading', 'no', '', '', '', '', '', '', '', ''),
(130, 9, 1, 15, '', '', 'yes', 'this is hast [difficult] color', 'This is light [easy] color', 'This is awesome [cool] color', '', '', '', 'This is a fine [good] heading', ''),
(138, 1, 1, 4, '<input type="text" name="name" placeholder="Please enter your name" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'This is a sub-heading', 'no', '', '', '', '', '', '', '', ''),
(139, 2, 1, 4, '<input type="text" name="job_title" placeholder="What is your job? Please enter it here." oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" ><br><br><br><input type="text" name="favourite_colour" placeholder="What is your favourite colour? Red? Blue? Yellow?" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required><br><br><br><input type="text" name="best_song" placeholder="What is the title of the best song ever written?" oninvalid="this.setCustomValidity(Please fill out this field to continue)" onchange="this.setCustomValidity('')" required>', 'Please tell us more', 'no', '', '', '', '', '', '', '', ''),
(141, 4, 1, 4, '<div align="left" style="width: 500px;" ><input type="radio" name="food" value="Fruit" id="custom" required style="vertical-align: middle"> Fruit<br><input type="radio" name="food" value="Vegetables" id="custom"  style="vertical-align: middle"> Vegetables<br><input type="radio" name="food" value="Icecream" id="custom"  style="vertical-align: middle"> Icecream<br><input type="radio" name="food" value="Bread" id="custom"  style="vertical-align: middle"> Bread<br></div>', 'Please choose your favourite food.', 'no', '', '', '', '', '', '', '', ''),
(142, 5, 1, 4, '', '', 'yes', 'I like {food}.', 'This is my absolute favourite {food}.', 'On a desert island I want to eat {food}.', '', '', '', 'I am doing this by myself.', ''),
(145, 6, 1, 4, '', '', 'yes', 'I am proud {name} and I works as a {job_title}', 'My name is {name} and I am an expert {job_title}', 'Hi, I am {name}', '', '', '', 'Click on any of them', ''),
(147, 7, 1, 4, '', '', 'yes', 'I like [car] toyota', 'I like [music] jazz', 'I like [actor] amitabh', '', '', '', 'Click on any choices', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_speech`
--

CREATE TABLE IF NOT EXISTS `sub_speech` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `main_speech_id` int(255) NOT NULL,
  `sub_speech_title` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sub_speech`
--

INSERT INTO `sub_speech` (`id`, `main_speech_id`, `sub_speech_title`) VALUES
(2, 1, 'Farewell from an employer to an employee'),
(4, 1, 'Test farewell speech');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(5, 'basitjee1@hotmail.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
