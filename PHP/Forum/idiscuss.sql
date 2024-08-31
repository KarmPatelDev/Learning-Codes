-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(128) NOT NULL,
  `category_description` varchar(512) NOT NULL,
  `category_doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_doc`) VALUES
(1, 'Python', 'Python is a simple, general purpose, high level, and object-oriented programming language.Python is an interpreted scripting language also. Guido Van Rossum is known as the founder of Python programming.', '2023-03-29 15:10:40'),
(2, 'Java', 'Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language. Java was developed by Sun Microsystems in the year 1995. James Gosling is known as the father of Java.', '2023-03-29 15:12:55'),
(3, 'Django', 'Django is a web application framework written in Python programming language. It is based on MVT (Model View Template) design pattern. The Django is very demanding due to its rapid development feature.', '2023-03-29 16:52:24'),
(4, 'JavaScript', 'JavaScript is a light-weight object-oriented programming language which is used by several websites for scripting the webpages. It is an interpreted, full-fledged programming language that enables dynamic interactivity on websites.', '2023-03-29 16:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_thread_id` int(8) NOT NULL,
  `comment_content` varchar(1024) NOT NULL,
  `comment_user_id` int(8) NOT NULL,
  `comment_doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_thread_id`, `comment_content`, `comment_user_id`, `comment_doc`) VALUES
(1, 1, 'Then one new folder created webapp in same mysite directory is created.\r\n\r\nAfter changing settings.py and urls.py of mysite and also changing urls.py and views.py of webapp.\r\n\r\nwhen I run ', 2, '2023-03-31 19:51:16'),
(2, 1, 'Performing system checks...\r\n\r\n    Unhandled exception in thread started by &lt;function wrapper at 0x24a7398&gt;\r\n    Traceback (most recent call last):\r\n    File \"/usr/lib/python2.7/site-packages/django/utils/autoreload.py\", line           \r\n    226, in wrapper\r\n    fn(*args, **kwargs)\r\n    File \"/usr/lib/python2.7/site-       \r\n    packages/django/core/management/commands/runserver.py\", line 121, in    \r\n    inner_run\r\n    self.check(display_num_errors=True)\r\n    File \"/usr/lib/python2.7/site-packages/django/core/management/base.py\",   \r\n    line 374, in check\r\n    include_deployment_checks=include_deployment_checks,\r\n    File \"/usr/lib/python2.7/site-packages/django/core/management/base.py\",    \r\n    line 361, in _run_checks\r\n    return checks.run_checks(**kwargs)\r\n    File \"/usr/lib/python2.7/site-packages/django/core/checks/registry.py\",   \r\n    line 81, in run_checks\r\n    new_errors = check(app_configs=app_configs)\r\n    File \"/usr/lib/python2.7/site-packages/django/core/checks/urls.py\", line \r\n    14, ', 2, '2023-03-31 19:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(8) NOT NULL,
  `contact_name` varchar(56) NOT NULL,
  `contact_email` varchar(56) NOT NULL,
  `contact_subject` varchar(256) NOT NULL,
  `contact_message` varchar(1024) NOT NULL,
  `contact_doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_doc`) VALUES
(1, 'Karm Patel', 'xyz@gmail.com', 'I have to join you company', 'I am a qualified computer engineer. and it is very helpful for me.', '2023-03-31 22:30:25'),
(2, 'Karm Patel', 'xyz@gmail.com', 'I have to join you company', 'I am a qualified &lt;computer engineer&gt;', '2023-03-31 22:31:24'),
(3, '&lt;&gt;', '&lt;&gt;', '&lt;&gt;', '&lt;&gt;', '2023-03-31 22:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_category_id` int(8) NOT NULL,
  `thread_name` varchar(256) NOT NULL,
  `thread_description` varchar(512) NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `thread_doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_category_id`, `thread_name`, `thread_description`, `thread_user_id`, `thread_doc`) VALUES
(1, 3, 'Python Django not running', 'Firstly I installed Django using pip in my \"CentOS\" operating system. After that I performed these steps using terminal.\r\ndjango-admin startproject mysite\r\na folder mysite is created with :\r\nmanage.py and another subfolder mysite\r\nThen simply I just used these commands :\r\npython manage.py runserver\r\nand the server was running as clicked on the url : http://localhost:portnumber/\r\nBut after that when I made another app to run it is not running, my step are as follows :', 2, '2023-03-31 19:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(56) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_doc` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_doc`) VALUES
(1, 'xyz@gmail.com', '$2y$10$WGVmz2ZCqa1cpBxEYYBZJeE37ie7/ifEnTQx3/NbMBA90u/kMF0Uy', '2023-03-30 23:00:42'),
(2, 'xyz2@gmail.com', '$2y$10$xnnAvMnJT0uuh7tyKhDeBeKr9/r6NPxW2/gdRkN2N8xlfC02yCfcu', '2023-03-30 23:08:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`),
  ADD UNIQUE KEY `thread_name` (`thread_name`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_name_2` (`thread_name`,`thread_description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
