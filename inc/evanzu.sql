-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 14, 2021 at 09:04 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `evanzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ev_commentmeta`
--

CREATE TABLE `ev_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ev_comments`
--

CREATE TABLE `ev_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_comments`
--

INSERT INTO `ev_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un comentarista de WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-05-12 11:28:43', '2021-05-12 16:28:43', 'Hola, esto es un comentario.\nPara empezar a moderar, editar y borrar comentarios, por favor, visite la pantalla de comentarios en el escritorio.\nLos avatares de los comentaristas provienen de <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ev_links`
--

CREATE TABLE `ev_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ev_options`
--

CREATE TABLE `ev_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_options`
--

INSERT INTO `ev_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost:8888/wordpress', 'yes'),
(2, 'home', 'http://localhost:8888/wordpress', 'yes'),
(3, 'blogname', 'Evanzu', 'yes'),
(4, 'blogdescription', 'Otro sitio de WordPress', 'yes'),
(5, 'users_can_register', '1', 'yes'),
(6, 'admin_email', 'rolando@evanzu.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'j F, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:95:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:39:\"index.php?&page_id=24&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '-5', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:70:\"/Applications/MAMP/htdocs/wordpress/wp-content/themes/evanzu/style.css\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'evanzu', 'yes'),
(41, 'stylesheet', 'evanzu', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '22', 'yes'),
(82, 'page_on_front', '24', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1636388922', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'initial_db_version', '49752', 'yes'),
(99, 'ev_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(100, 'fresh_site', '0', 'yes'),
(101, 'WPLANG', 'es_PE', 'yes'),
(102, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(108, 'cron', 'a:8:{i:1621020524;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1621052924;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1621052983;a:1:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1621096123;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1621096157;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1621096160;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1621528123;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(109, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'recovery_keys', 'a:1:{s:22:\"2JaEJyUJyvxrPZTPiyOG4Q\";a:2:{s:10:\"hashed_key\";s:34:\"$P$BpcFIhS5XxxLx80rxd4L6njiMN5Atn/\";s:10:\"created_at\";i:1621008007;}}', 'yes'),
(121, 'theme_mods_twentytwentyone', 'a:3:{s:18:\"custom_css_post_id\";i:-1;s:18:\"nav_menu_locations\";a:2:{s:7:\"primary\";i:2;s:6:\"footer\";i:3;}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1620849261;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-1\";a:0:{}}}}', 'yes'),
(130, '_site_transient_timeout_browser_a510f07700847945031e793207ee1b90', '1621441760', 'no'),
(131, '_site_transient_browser_a510f07700847945031e793207ee1b90', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"90.0.4430.212\";s:8:\"platform\";s:9:\"Macintosh\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(132, '_site_transient_timeout_php_check_9dfe9c1407d8720f2aa82fbeb25ecdd3', '1621441760', 'no'),
(133, '_site_transient_php_check_9dfe9c1407d8720f2aa82fbeb25ecdd3', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(134, 'can_compress_scripts', '1', 'no'),
(148, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:18:\"rolando@evanzu.com\";s:7:\"version\";s:5:\"5.7.2\";s:9:\"timestamp\";i:1620914027;}', 'no'),
(150, 'https_detection_errors', 'a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:21:\"HTTPS request failed.\";}}', 'yes'),
(153, 'finished_updating_comment_type', '1', 'yes'),
(159, 'current_theme', 'Evanzu', 'yes'),
(160, 'theme_mods_evanzu', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1620849170;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(161, 'theme_switched', '', 'yes'),
(162, 'recovery_mode_email_last_sent', '1621008007', 'yes'),
(177, 'theme_switched_via_customizer', '', 'yes'),
(178, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:0:{}}', 'yes'),
(179, 'customize_stashed_theme_mods', 'a:0:{}', 'no'),
(180, 'my_theme_facebook_url', '#', 'yes'),
(181, 'my_theme_twitter_url', '#', 'yes'),
(182, 'my_theme_googleplus_url', '#', 'yes'),
(189, 'theme_mods_rolf', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1620849246;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(205, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:6:\"locale\";s:5:\"es_PE\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.7.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.7.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.7.2-new-bundled.zip\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.7.2\";s:7:\"version\";s:5:\"5.7.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1621010096;s:15:\"version_checked\";s:5:\"5.7.2\";s:12:\"translations\";a:0:{}}', 'no'),
(213, '_transient_health-check-site-status-result', '{\"good\":13,\"recommended\":6,\"critical\":1}', 'yes'),
(219, 'recently_activated', 'a:0:{}', 'yes'),
(242, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1621010098;s:7:\"checked\";a:2:{s:6:\"evanzu\";s:30:\"Número de versión (rolf 1.0)\";s:15:\"twentytwentyone\";s:3:\"1.1\";}s:8:\"response\";a:1:{s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.3\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.3.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(243, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1621010099;s:7:\"checked\";a:1:{s:19:\"akismet/akismet.php\";s:5:\"4.1.8\";}s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.9\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.9.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.7.2\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:0:{}}', 'no'),
(244, '_site_transient_timeout_theme_roots', '1621014285', 'no'),
(245, '_site_transient_theme_roots', 'a:2:{s:6:\"evanzu\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";}', 'no'),
(247, 'evanzu', 'a:2:{s:12:\"banner-image\";s:72:\"http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg\";s:17:\"galleri-image-one\";s:72:\"http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg\";}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ev_postmeta`
--

CREATE TABLE `ev_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_postmeta`
--

INSERT INTO `ev_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_customize_draft_post_name', 'create-your-website-with-blocks'),
(4, 5, '_customize_changeset_uuid', 'c9e50c9d-902e-43d3-b7fe-e2c5cfe26e05'),
(5, 6, '_customize_draft_post_name', 'acerca'),
(6, 6, '_customize_changeset_uuid', 'c9e50c9d-902e-43d3-b7fe-e2c5cfe26e05'),
(7, 7, '_customize_draft_post_name', 'contacto'),
(8, 7, '_customize_changeset_uuid', 'c9e50c9d-902e-43d3-b7fe-e2c5cfe26e05'),
(9, 8, '_customize_draft_post_name', 'blog'),
(10, 8, '_customize_changeset_uuid', 'c9e50c9d-902e-43d3-b7fe-e2c5cfe26e05'),
(11, 9, '_edit_lock', '1620837962:1'),
(12, 10, '_customize_draft_post_name', 'create-your-website-with-blocks'),
(13, 10, '_customize_changeset_uuid', '9ee406b0-3a7a-4609-9e04-4b5b5b0d5f07'),
(14, 11, '_customize_draft_post_name', 'acerca'),
(15, 11, '_customize_changeset_uuid', '9ee406b0-3a7a-4609-9e04-4b5b5b0d5f07'),
(16, 12, '_customize_draft_post_name', 'contacto'),
(17, 12, '_customize_changeset_uuid', '9ee406b0-3a7a-4609-9e04-4b5b5b0d5f07'),
(18, 13, '_customize_draft_post_name', 'blog'),
(19, 13, '_customize_changeset_uuid', '9ee406b0-3a7a-4609-9e04-4b5b5b0d5f07'),
(20, 14, '_customize_restore_dismissed', '1'),
(21, 9, '_customize_restore_dismissed', '1'),
(22, 15, '_edit_lock', '1620841559:1'),
(23, 2, '_edit_lock', '1620841625:1'),
(24, 16, '_customize_draft_post_name', 'create-your-website-with-blocks'),
(25, 16, '_customize_changeset_uuid', 'fbf39e9f-1a00-46ee-ac1e-14e82c78e5ec'),
(26, 17, '_customize_draft_post_name', 'acerca'),
(27, 17, '_customize_changeset_uuid', 'fbf39e9f-1a00-46ee-ac1e-14e82c78e5ec'),
(28, 18, '_customize_draft_post_name', 'contacto'),
(29, 18, '_customize_changeset_uuid', 'fbf39e9f-1a00-46ee-ac1e-14e82c78e5ec'),
(30, 19, '_customize_draft_post_name', 'blog'),
(31, 19, '_customize_changeset_uuid', 'fbf39e9f-1a00-46ee-ac1e-14e82c78e5ec'),
(32, 15, '_customize_restore_dismissed', '1'),
(34, 21, '_customize_changeset_uuid', '8ae37f61-f048-40d5-a74b-b9e70bd8551f'),
(36, 22, '_customize_changeset_uuid', '8ae37f61-f048-40d5-a74b-b9e70bd8551f'),
(38, 23, '_customize_changeset_uuid', '8ae37f61-f048-40d5-a74b-b9e70bd8551f'),
(40, 24, '_customize_changeset_uuid', '8ae37f61-f048-40d5-a74b-b9e70bd8551f'),
(41, 30, '_menu_item_type', 'custom'),
(42, 30, '_menu_item_menu_item_parent', '0'),
(43, 30, '_menu_item_object_id', '30'),
(44, 30, '_menu_item_object', 'custom'),
(45, 30, '_menu_item_target', ''),
(46, 30, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(47, 30, '_menu_item_xfn', ''),
(48, 30, '_menu_item_url', 'http://localhost:8888/wordpress/'),
(57, 32, '_menu_item_type', 'post_type'),
(58, 32, '_menu_item_menu_item_parent', '0'),
(59, 32, '_menu_item_object_id', '24'),
(60, 32, '_menu_item_object', 'page'),
(61, 32, '_menu_item_target', ''),
(62, 32, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(63, 32, '_menu_item_xfn', ''),
(64, 32, '_menu_item_url', ''),
(73, 34, '_menu_item_type', 'custom'),
(74, 34, '_menu_item_menu_item_parent', '0'),
(75, 34, '_menu_item_object_id', '34'),
(76, 34, '_menu_item_object', 'custom'),
(77, 34, '_menu_item_target', ''),
(78, 34, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(79, 34, '_menu_item_xfn', ''),
(80, 34, '_menu_item_url', 'https://www.facebook.com/wordpress'),
(81, 35, '_menu_item_type', 'custom'),
(82, 35, '_menu_item_menu_item_parent', '0'),
(83, 35, '_menu_item_object_id', '35'),
(84, 35, '_menu_item_object', 'custom'),
(85, 35, '_menu_item_target', ''),
(86, 35, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(87, 35, '_menu_item_xfn', ''),
(88, 35, '_menu_item_url', 'https://twitter.com/wordpress'),
(89, 36, '_menu_item_type', 'custom'),
(90, 36, '_menu_item_menu_item_parent', '0'),
(91, 36, '_menu_item_object_id', '36'),
(92, 36, '_menu_item_object', 'custom'),
(93, 36, '_menu_item_target', ''),
(94, 36, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(95, 36, '_menu_item_xfn', ''),
(96, 36, '_menu_item_url', 'https://www.instagram.com/explore/tags/wordcamp/'),
(97, 37, '_menu_item_type', 'custom'),
(98, 37, '_menu_item_menu_item_parent', '0'),
(99, 37, '_menu_item_object_id', '37'),
(100, 37, '_menu_item_object', 'custom'),
(101, 37, '_menu_item_target', ''),
(102, 37, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(103, 37, '_menu_item_xfn', ''),
(104, 37, '_menu_item_url', 'mailto:wordpress@example.com'),
(105, 25, '_wp_trash_meta_status', 'publish'),
(106, 25, '_wp_trash_meta_time', '1620844526'),
(107, 20, '_customize_restore_dismissed', '1'),
(108, 38, '_wp_trash_meta_status', 'publish'),
(109, 38, '_wp_trash_meta_time', '1620844722'),
(110, 39, '_wp_trash_meta_status', 'publish'),
(111, 39, '_wp_trash_meta_time', '1620844852'),
(112, 40, '_wp_trash_meta_status', 'publish'),
(113, 40, '_wp_trash_meta_time', '1620844866'),
(114, 23, '_edit_lock', '1620844833:1'),
(115, 41, '_wp_trash_meta_status', 'publish'),
(116, 41, '_wp_trash_meta_time', '1620848675'),
(118, 43, '_edit_lock', '1620922906:1'),
(119, 44, '_edit_lock', '1621013395:1'),
(120, 44, '_wp_page_template', 'home.php'),
(121, 42, '_customize_restore_dismissed', '1'),
(122, 46, '_edit_lock', '1620923251:1'),
(123, 46, '_wp_trash_meta_status', 'publish'),
(124, 46, '_wp_trash_meta_time', '1620923269'),
(125, 47, '_edit_lock', '1620923327:1'),
(126, 47, '_wp_trash_meta_status', 'publish'),
(127, 47, '_wp_trash_meta_time', '1620923334'),
(128, 48, '_edit_lock', '1620923688:1'),
(129, 2, '_wp_trash_meta_status', 'publish'),
(130, 2, '_wp_trash_meta_time', '1620923855'),
(131, 2, '_wp_desired_post_slug', 'pagina-de-ejemplo'),
(132, 51, '_edit_lock', '1620923784:1'),
(133, 53, '_edit_lock', '1620924055:1'),
(134, 55, '_edit_lock', '1620923943:1'),
(135, 57, '_edit_lock', '1620924011:1'),
(136, 59, '_menu_item_type', 'post_type'),
(137, 59, '_menu_item_menu_item_parent', '0'),
(138, 59, '_menu_item_object_id', '57'),
(139, 59, '_menu_item_object', 'page'),
(140, 59, '_menu_item_target', ''),
(141, 59, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(142, 59, '_menu_item_xfn', ''),
(143, 59, '_menu_item_url', ''),
(145, 60, '_menu_item_type', 'post_type'),
(146, 60, '_menu_item_menu_item_parent', '0'),
(147, 60, '_menu_item_object_id', '55'),
(148, 60, '_menu_item_object', 'page'),
(149, 60, '_menu_item_target', ''),
(150, 60, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(151, 60, '_menu_item_xfn', ''),
(152, 60, '_menu_item_url', ''),
(154, 61, '_menu_item_type', 'post_type'),
(155, 61, '_menu_item_menu_item_parent', '0'),
(156, 61, '_menu_item_object_id', '53'),
(157, 61, '_menu_item_object', 'page'),
(158, 61, '_menu_item_target', ''),
(159, 61, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(160, 61, '_menu_item_xfn', ''),
(161, 61, '_menu_item_url', ''),
(163, 62, '_menu_item_type', 'post_type'),
(164, 62, '_menu_item_menu_item_parent', '0'),
(165, 62, '_menu_item_object_id', '51'),
(166, 62, '_menu_item_object', 'page'),
(167, 62, '_menu_item_target', ''),
(168, 62, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(169, 62, '_menu_item_xfn', ''),
(170, 62, '_menu_item_url', ''),
(172, 63, '_menu_item_type', 'post_type'),
(173, 63, '_menu_item_menu_item_parent', '0'),
(174, 63, '_menu_item_object_id', '48'),
(175, 63, '_menu_item_object', 'page'),
(176, 63, '_menu_item_target', ''),
(177, 63, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(178, 63, '_menu_item_xfn', ''),
(179, 63, '_menu_item_url', ''),
(181, 30, '_wp_old_date', '2021-05-12'),
(182, 32, '_wp_old_date', '2021-05-12'),
(183, 65, '_edit_lock', '1621013768:1'),
(184, 65, '_customize_restore_dismissed', '1'),
(185, 66, '_wp_attached_file', '2021/05/Evanzu-02.jpg'),
(186, 66, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1204;s:6:\"height\";i:1203;s:4:\"file\";s:21:\"2021/05/Evanzu-02.jpg\";s:5:\"sizes\";a:4:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"Evanzu-02-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:23:\"Evanzu-02-1024x1024.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"Evanzu-02-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:21:\"Evanzu-02-768x767.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:767;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(187, 67, '_edit_lock', '1621015936:1'),
(188, 67, '_customize_restore_dismissed', '1'),
(189, 68, '_wp_trash_meta_status', 'publish'),
(190, 68, '_wp_trash_meta_time', '1621015964'),
(191, 69, '_wp_trash_meta_status', 'publish'),
(192, 69, '_wp_trash_meta_time', '1621016945');

-- --------------------------------------------------------

--
-- Table structure for table `ev_posts`
--

CREATE TABLE `ev_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_posts`
--

INSERT INTO `ev_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2021-05-12 11:28:43', '2021-05-12 16:28:43', '<!-- wp:paragraph -->\n<p>Bienvenido a WordPress. Esta es tu primera entrada. Edítala o bórrala, ¡luego empieza a escribir!</p>\n<!-- /wp:paragraph -->', '¡Hola mundo!', '', 'publish', 'open', 'open', '', 'hola-mundo', '', '', '2021-05-12 11:28:43', '2021-05-12 16:28:43', '', 0, 'http://localhost:8888/wordpress/?p=1', 0, 'post', '', 1),
(2, 1, '2021-05-12 11:28:43', '2021-05-12 16:28:43', '<!-- wp:paragraph -->\n<p>Esta es una página de ejemplo. Es diferente a una entrada del blog porque permanecerá en un solo lugar y aparecerá en la navegación de tu sitio (en la mayoría de los temas). La mayoría de las personas comienzan con una página «Acerca de» que les presenta a los visitantes potenciales del sitio. Podrías decir algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>¡Bienvenido! Soy camarero de día, aspirante a actor de noche y esta es mi web. Vivo en Mairena del Alcor, tengo un perro que se llama Firulais y me gusta el rebujito. (Y las tardes largas con café).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…o algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La empresa «Mariscos Recio» fue fundada por Antonio Recio Mata. Empezó siendo una pequeña empresa que suministraba marisco a hoteles y restaurantes, pero poco a poco se ha ido transformando en un gran imperio. Mariscos Recio, el mar al mejor precio.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como nuevo usuario de WordPress, deberías ir a <a href=\"http://localhost:8888/wordpress/wp-admin/\">tu escritorio</a> para borrar esta página y crear nuevas páginas para tu contenido. ¡Pásalo bien!</p>\n<!-- /wp:paragraph -->', 'Página de ejemplo', '', 'trash', 'closed', 'open', '', 'pagina-de-ejemplo__trashed', '', '', '2021-05-13 11:37:35', '2021-05-13 16:37:35', '', 0, 'http://localhost:8888/wordpress/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-05-12 11:28:43', '2021-05-12 16:28:43', '<!-- wp:heading --><h2>Quiénes somos</h2><!-- /wp:heading --><!-- wp:paragraph --><p>La dirección de nuestra web es: http://localhost:8888/wordpress.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Qué datos personales recogemos y por qué los recogemos</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comentarios</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Cuando los visitantes dejan comentarios en la web, recopilamos los datos que se muestran en el formulario de comentarios, así como la dirección IP del visitante y la cadena de agentes de usuario del navegador para ayudar a la detección de spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Una cadena anónima creada a partir de tu dirección de correo electrónico (también llamada hash) puede ser proporcionada al servicio de Gravatar para ver si la estás usando. La política de privacidad del servicio Gravatar está disponible aquí: https://automattic.com/privacy/. Después de la aprobación de tu comentario, la imagen de tu perfil es visible para el público en el contexto de su comentario.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Multimedia</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si subes imágenes a la web deberías evitar subir imágenes con datos de ubicación (GPS EXIF) incluidos. Los visitantes de la web pueden descargar y extraer cualquier dato de localización de las imágenes de la web.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Formularios de contacto</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Si dejas un comentario en nuestro sitio puedes elegir guardar tu nombre, dirección de correo electrónico y web en cookies. Esto es para tu comodidad, para que no tengas que volver a rellenar tus datos cuando dejes otro comentario. Estas cookies tendrán una duración de un año.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si tienes una cuenta y te conectas a este sitio, instalaremos una cookie temporal para determinar si tu navegador acepta cookies. Esta cookie no contiene datos personales y se elimina al cerrar el navegador.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Cuando inicias sesión, también instalaremos varias cookies para guardar tu información de inicio de sesión y tus opciones de visualización de pantalla. Las cookies de inicio de sesión duran dos días, y las cookies de opciones de pantalla duran un año. Si seleccionas &quot;Recordarme&quot;, tu inicio de sesión perdurará durante dos semanas. Si sales de tu cuenta, las cookies de inicio de sesión se eliminarán.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si editas o publicas un artículo se guardará una cookie adicional en tu navegador. Esta cookie no incluye datos personales y simplemente indica el ID del artículo que acabas de editar. Caduca después de 1 día.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contenido incrustado de otros sitios web</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Los artículos de este sitio pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras web se comporta exactamente de la misma manera que si el visitante hubiera visitado la otra web.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Estas web pueden recopilar datos sobre ti, utilizar cookies, incrustar un seguimiento adicional de terceros, y supervisar tu interacción con ese contenido incrustado, incluido el seguimiento de tu interacción con el contenido incrustado si tienes una cuenta y estás conectado a esa web.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Con quién compartimos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si solicitas un restablecimiento de contraseña, tu dirección IP será incluida en el correo electrónico de restablecimiento.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cuánto tiempo conservamos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si dejas un comentario, el comentario y sus metadatos se conservan indefinidamente. Esto es para que podamos reconocer y aprobar comentarios sucesivos automáticamente en lugar de mantenerlos en una cola de moderación.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>De los usuarios que se registran en nuestra web (si los hay), también almacenamos la información personal que proporcionan en su perfil de usuario. Todos los usuarios pueden ver, editar o eliminar su información personal en cualquier momento (excepto que no pueden cambiar su nombre de usuario). Los administradores de la web también pueden ver y editar esa información.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Qué derechos tienes sobre tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Si tienes una cuenta o has dejado comentarios en esta web, puedes solicitar recibir un archivo de exportación de los datos personales que tenemos sobre ti, incluyendo cualquier dato que nos hayas proporcionado. También puedes solicitar que eliminemos cualquier dato personal que tengamos sobre ti. Esto no incluye ningún dato que estemos obligados a conservar con fines administrativos, legales o de seguridad.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Dónde enviamos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Los comentarios de los visitantes pueden ser revisados por un servicio de detección automática de spam.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Tu información de contacto</h2><!-- /wp:heading --><!-- wp:heading --><h2>Información adicional</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cómo protegemos tus datos</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Qué procedimientos tenemos para brechas de datos</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>De quiénes otros recibimos datos</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Qué decisión automática y/o análisis hacemos con los datos de los usuarios</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Requerimientos regulatorios de revelación de información del sector</h3><!-- /wp:heading -->', 'Política de Privacidad', '', 'draft', 'closed', 'open', '', 'politica-privacidad', '', '', '2021-05-12 11:28:43', '2021-05-12 16:28:43', '', 0, 'http://localhost:8888/wordpress/?page_id=3', 0, 'page', '', 0),
(4, 1, '2021-05-12 11:29:20', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-05-12 11:29:20', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=4', 0, 'post', '', 0),
(5, 1, '2021-05-12 11:46:02', '0000-00-00 00:00:00', '\n					<!-- wp:heading {\"align\":\"wide\",\"fontSize\":\"gigantic\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"}}} -->\n					<h2 class=\"alignwide has-text-align-wide has-gigantic-font-size\" style=\"line-height:1.1\">Create your website with blocks</h2>\n					<!-- /wp:heading -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-columns-overlap\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\"} -->\n					<figure class=\"wp-block-image alignfull size-large\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/roses-tremieres-hollyhocks-1884.jpg\" alt=\"&#8220;Roses Tremieres&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\",\"className\":\"is-style-twentytwentyone-image-frame\"} -->\n					<figure class=\"wp-block-image alignfull size-large is-style-twentytwentyone-image-frame\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/in-the-bois-de-boulogne.jpg\" alt=\"&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"sizeSlug\":\"large\",\"className\":\"alignfull size-full is-style-twentytwentyone-border\"} -->\n					<figure class=\"wp-block-image size-large alignfull size-full is-style-twentytwentyone-border\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg\" alt=\"&#8220;Young Woman in Mauve&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":50} -->\n					<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"top\",\"align\":\"wide\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Add block patterns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Frame your images</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Select the &quot;Frame&quot; block style to activate it.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Overlap columns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Choose the &quot;Overlap&quot; block style to try it out.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:cover {\"overlayColor\":\"green\",\"contentPosition\":\"center center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-border\"} -->\n					<div class=\"wp-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border\"><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:paragraph {\"fontSize\":\"huge\"} -->\n					<p class=\"has-huge-font-size\">Need help?</p>\n					<!-- /wp:paragraph -->\n\n					<!-- wp:spacer {\"height\":75} -->\n					<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns -->\n					<div class=\"wp-block-columns\"><!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/article/twenty-twenty-one/\">Read the Theme Documentation</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/theme/twentytwentyone/\">Check out the Support Forums</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer --></div></div>\n					<!-- /wp:cover -->', 'Create your website with blocks', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:43:50', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=5', 0, 'page', '', 0),
(6, 1, '2021-05-12 11:46:02', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Puedes ser un artista que quiere presentarse a sí mismo y a su trabajo o eres un negocio con una misión que describir.</p>\n<!-- /wp:paragraph -->', 'Acerca', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:43:50', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=6', 0, 'page', '', 0),
(7, 1, '2021-05-12 11:46:02', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Esta es una página con información de contacto básica, como dirección y número de teléfono. Incluso puedes probar un plugin para añadir un formulario de contacto.</p>\n<!-- /wp:paragraph -->', 'Contacto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:43:50', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=7', 0, 'page', '', 0),
(8, 1, '2021-05-12 11:46:02', '0000-00-00 00:00:00', '', 'Blog', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:43:50', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=8', 0, 'page', '', 0),
(9, 1, '2021-05-12 11:46:02', '0000-00-00 00:00:00', '{\n    \"nav_menus_created_posts\": {\n        \"starter_content\": true,\n        \"value\": [\n            5,\n            6,\n            7,\n            8\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Primary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"custom\",\n            \"title\": \"Inicio\",\n            \"url\": \"http://localhost:8888/wordpress/\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -1,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-2]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 6,\n            \"position\": 1,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Acerca\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-3]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 8,\n            \"position\": 2,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Blog\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-4]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 7,\n            \"position\": 3,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Contacto\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"twentytwentyone::nav_menu_locations[primary]\": {\n        \"value\": 0,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:02\"\n    },\n    \"nav_menu[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Secondary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Facebook\",\n            \"url\": \"https://www.facebook.com/wordpress\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-6]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Twitter\",\n            \"url\": \"https://twitter.com/wordpress\",\n            \"position\": 1,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-7]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Instagram\",\n            \"url\": \"https://www.instagram.com/explore/tags/wordcamp/\",\n            \"position\": 2,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"nav_menu_item[-8]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Correo Electr\\u00f3nico\",\n            \"url\": \"mailto:wordpress@example.com\",\n            \"position\": 3,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"twentytwentyone::nav_menu_locations[footer]\": {\n        \"value\": -1,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:02\"\n    },\n    \"show_on_front\": {\n        \"starter_content\": true,\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"page_on_front\": {\n        \"starter_content\": true,\n        \"value\": 5,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    },\n    \"page_for_posts\": {\n        \"starter_content\": true,\n        \"value\": 8,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:43:50\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', 'c9e50c9d-902e-43d3-b7fe-e2c5cfe26e05', '', '', '2021-05-12 11:46:02', '2021-05-12 16:46:02', '', 0, 'http://localhost:8888/wordpress/?p=9', 0, 'customize_changeset', '', 0),
(10, 1, '2021-05-12 11:46:06', '0000-00-00 00:00:00', '\n					<!-- wp:heading {\"align\":\"wide\",\"fontSize\":\"gigantic\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"}}} -->\n					<h2 class=\"alignwide has-text-align-wide has-gigantic-font-size\" style=\"line-height:1.1\">Create your website with blocks</h2>\n					<!-- /wp:heading -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-columns-overlap\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\"} -->\n					<figure class=\"wp-block-image alignfull size-large\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/roses-tremieres-hollyhocks-1884.jpg\" alt=\"&#8220;Roses Tremieres&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\",\"className\":\"is-style-twentytwentyone-image-frame\"} -->\n					<figure class=\"wp-block-image alignfull size-large is-style-twentytwentyone-image-frame\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/in-the-bois-de-boulogne.jpg\" alt=\"&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"sizeSlug\":\"large\",\"className\":\"alignfull size-full is-style-twentytwentyone-border\"} -->\n					<figure class=\"wp-block-image size-large alignfull size-full is-style-twentytwentyone-border\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg\" alt=\"&#8220;Young Woman in Mauve&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":50} -->\n					<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"top\",\"align\":\"wide\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Add block patterns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Frame your images</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Select the &quot;Frame&quot; block style to activate it.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Overlap columns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Choose the &quot;Overlap&quot; block style to try it out.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:cover {\"overlayColor\":\"green\",\"contentPosition\":\"center center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-border\"} -->\n					<div class=\"wp-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border\"><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:paragraph {\"fontSize\":\"huge\"} -->\n					<p class=\"has-huge-font-size\">Need help?</p>\n					<!-- /wp:paragraph -->\n\n					<!-- wp:spacer {\"height\":75} -->\n					<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns -->\n					<div class=\"wp-block-columns\"><!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/article/twenty-twenty-one/\">Read the Theme Documentation</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/theme/twentytwentyone/\">Check out the Support Forums</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer --></div></div>\n					<!-- /wp:cover -->', 'Create your website with blocks', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=10', 0, 'page', '', 0),
(11, 1, '2021-05-12 11:46:06', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Puedes ser un artista que quiere presentarse a sí mismo y a su trabajo o eres un negocio con una misión que describir.</p>\n<!-- /wp:paragraph -->', 'Acerca', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=11', 0, 'page', '', 0),
(12, 1, '2021-05-12 11:46:06', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Esta es una página con información de contacto básica, como dirección y número de teléfono. Incluso puedes probar un plugin para añadir un formulario de contacto.</p>\n<!-- /wp:paragraph -->', 'Contacto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=12', 0, 'page', '', 0),
(13, 1, '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 'Blog', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=13', 0, 'page', '', 0),
(14, 1, '2021-05-12 11:46:06', '0000-00-00 00:00:00', '{\n    \"nav_menus_created_posts\": {\n        \"starter_content\": true,\n        \"value\": [\n            10,\n            11,\n            12,\n            13\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Primary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"custom\",\n            \"title\": \"Inicio\",\n            \"url\": \"http://localhost:8888/wordpress/\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -1,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-2]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 11,\n            \"position\": 1,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Acerca\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-3]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 13,\n            \"position\": 2,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Blog\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-4]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 12,\n            \"position\": 3,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Contacto\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"twentytwentyone::nav_menu_locations[primary]\": {\n        \"starter_content\": true,\n        \"value\": -1,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Secondary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Facebook\",\n            \"url\": \"https://www.facebook.com/wordpress\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-6]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Twitter\",\n            \"url\": \"https://twitter.com/wordpress\",\n            \"position\": 1,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-7]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Instagram\",\n            \"url\": \"https://www.instagram.com/explore/tags/wordcamp/\",\n            \"position\": 2,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"nav_menu_item[-8]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Correo Electr\\u00f3nico\",\n            \"url\": \"mailto:wordpress@example.com\",\n            \"position\": 3,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"twentytwentyone::nav_menu_locations[footer]\": {\n        \"starter_content\": true,\n        \"value\": -5,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"show_on_front\": {\n        \"starter_content\": true,\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"page_on_front\": {\n        \"starter_content\": true,\n        \"value\": 10,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    },\n    \"page_for_posts\": {\n        \"starter_content\": true,\n        \"value\": 13,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 16:46:06\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '9ee406b0-3a7a-4609-9e04-4b5b5b0d5f07', '', '', '2021-05-12 11:46:06', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=14', 0, 'customize_changeset', '', 0),
(15, 1, '2021-05-12 12:45:59', '0000-00-00 00:00:00', '{\n    \"blogdescription\": {\n        \"value\": \"\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 17:45:59\"\n    },\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 17:45:59\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '08e68fe1-33d3-474a-b5fb-03ccc344fd78', '', '', '2021-05-12 12:45:59', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=15', 0, 'customize_changeset', '', 0),
(16, 1, '2021-05-12 13:10:25', '0000-00-00 00:00:00', '\n					<!-- wp:heading {\"align\":\"wide\",\"fontSize\":\"gigantic\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"}}} -->\n					<h2 class=\"alignwide has-text-align-wide has-gigantic-font-size\" style=\"line-height:1.1\">Create your website with blocks</h2>\n					<!-- /wp:heading -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-columns-overlap\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\"} -->\n					<figure class=\"wp-block-image alignfull size-large\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/roses-tremieres-hollyhocks-1884.jpg\" alt=\"&#8220;Roses Tremieres&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\",\"className\":\"is-style-twentytwentyone-image-frame\"} -->\n					<figure class=\"wp-block-image alignfull size-large is-style-twentytwentyone-image-frame\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/in-the-bois-de-boulogne.jpg\" alt=\"&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"sizeSlug\":\"large\",\"className\":\"alignfull size-full is-style-twentytwentyone-border\"} -->\n					<figure class=\"wp-block-image size-large alignfull size-full is-style-twentytwentyone-border\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg\" alt=\"&#8220;Young Woman in Mauve&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":50} -->\n					<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"top\",\"align\":\"wide\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Add block patterns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Frame your images</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Select the &quot;Frame&quot; block style to activate it.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Overlap columns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Choose the &quot;Overlap&quot; block style to try it out.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:cover {\"overlayColor\":\"green\",\"contentPosition\":\"center center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-border\"} -->\n					<div class=\"wp-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border\"><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:paragraph {\"fontSize\":\"huge\"} -->\n					<p class=\"has-huge-font-size\">Need help?</p>\n					<!-- /wp:paragraph -->\n\n					<!-- wp:spacer {\"height\":75} -->\n					<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns -->\n					<div class=\"wp-block-columns\"><!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/article/twenty-twenty-one/\">Read the Theme Documentation</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/theme/twentytwentyone/\">Check out the Support Forums</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer --></div></div>\n					<!-- /wp:cover -->', 'Create your website with blocks', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=16', 0, 'page', '', 0),
(17, 1, '2021-05-12 13:10:25', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Puedes ser un artista que quiere presentarse a sí mismo y a su trabajo o eres un negocio con una misión que describir.</p>\n<!-- /wp:paragraph -->', 'Acerca', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=17', 0, 'page', '', 0),
(18, 1, '2021-05-12 13:10:25', '0000-00-00 00:00:00', '<!-- wp:paragraph -->\n<p>Esta es una página con información de contacto básica, como dirección y número de teléfono. Incluso puedes probar un plugin para añadir un formulario de contacto.</p>\n<!-- /wp:paragraph -->', 'Contacto', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=18', 0, 'page', '', 0),
(19, 1, '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 'Blog', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=19', 0, 'page', '', 0),
(20, 1, '2021-05-12 13:10:25', '0000-00-00 00:00:00', '{\n    \"nav_menus_created_posts\": {\n        \"starter_content\": true,\n        \"value\": [\n            16,\n            17,\n            18,\n            19\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Primary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-1]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"custom\",\n            \"title\": \"Inicio\",\n            \"url\": \"http://localhost:8888/wordpress/\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -1,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-2]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 17,\n            \"position\": 1,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Acerca\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-3]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 19,\n            \"position\": 2,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Blog\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-4]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"type\": \"post_type\",\n            \"object\": \"page\",\n            \"object_id\": 18,\n            \"position\": 3,\n            \"nav_menu_term_id\": -1,\n            \"title\": \"Contacto\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"twentytwentyone::nav_menu_locations[primary]\": {\n        \"starter_content\": true,\n        \"value\": -1,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"name\": \"Secondary menu\"\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-5]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Facebook\",\n            \"url\": \"https://www.facebook.com/wordpress\",\n            \"position\": 0,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-6]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Twitter\",\n            \"url\": \"https://twitter.com/wordpress\",\n            \"position\": 1,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-7]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Instagram\",\n            \"url\": \"https://www.instagram.com/explore/tags/wordcamp/\",\n            \"position\": 2,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"nav_menu_item[-8]\": {\n        \"starter_content\": true,\n        \"value\": {\n            \"title\": \"Correo Electr\\u00f3nico\",\n            \"url\": \"mailto:wordpress@example.com\",\n            \"position\": 3,\n            \"nav_menu_term_id\": -5,\n            \"object_id\": 0\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"twentytwentyone::nav_menu_locations[footer]\": {\n        \"starter_content\": true,\n        \"value\": -5,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"show_on_front\": {\n        \"starter_content\": true,\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"page_on_front\": {\n        \"starter_content\": true,\n        \"value\": 16,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"page_for_posts\": {\n        \"starter_content\": true,\n        \"value\": 19,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    },\n    \"old_sidebars_widgets_data\": {\n        \"value\": {\n            \"wp_inactive_widgets\": [\n                \"search-2\",\n                \"recent-posts-2\",\n                \"recent-comments-2\",\n                \"archives-2\",\n                \"categories-2\",\n                \"meta-2\"\n            ]\n        },\n        \"type\": \"global_variable\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:10:25\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', 'fbf39e9f-1a00-46ee-ac1e-14e82c78e5ec', '', '', '2021-05-12 13:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=20', 0, 'customize_changeset', '', 0);
INSERT INTO `ev_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(21, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '\n					<!-- wp:heading {\"align\":\"wide\",\"fontSize\":\"gigantic\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"}}} -->\n					<h2 class=\"alignwide has-text-align-wide has-gigantic-font-size\" style=\"line-height:1.1\">Create your website with blocks</h2>\n					<!-- /wp:heading -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-columns-overlap\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\"} -->\n					<figure class=\"wp-block-image alignfull size-large\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/roses-tremieres-hollyhocks-1884.jpg\" alt=\"&#8220;Roses Tremieres&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\",\"className\":\"is-style-twentytwentyone-image-frame\"} -->\n					<figure class=\"wp-block-image alignfull size-large is-style-twentytwentyone-image-frame\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/in-the-bois-de-boulogne.jpg\" alt=\"&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"sizeSlug\":\"large\",\"className\":\"alignfull size-full is-style-twentytwentyone-border\"} -->\n					<figure class=\"wp-block-image size-large alignfull size-full is-style-twentytwentyone-border\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg\" alt=\"&#8220;Young Woman in Mauve&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":50} -->\n					<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"top\",\"align\":\"wide\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Add block patterns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Frame your images</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Select the &quot;Frame&quot; block style to activate it.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Overlap columns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Choose the &quot;Overlap&quot; block style to try it out.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:cover {\"overlayColor\":\"green\",\"contentPosition\":\"center center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-border\"} -->\n					<div class=\"wp-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border\"><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:paragraph {\"fontSize\":\"huge\"} -->\n					<p class=\"has-huge-font-size\">Need help?</p>\n					<!-- /wp:paragraph -->\n\n					<!-- wp:spacer {\"height\":75} -->\n					<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns -->\n					<div class=\"wp-block-columns\"><!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/article/twenty-twenty-one/\">Read the Theme Documentation</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/theme/twentytwentyone/\">Check out the Support Forums</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer --></div></div>\n					<!-- /wp:cover -->', 'Create your website with blocks', '', 'publish', 'closed', 'closed', '', 'create-your-website-with-blocks', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 0, 'http://localhost:8888/wordpress/?page_id=21', 0, 'page', '', 0),
(22, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '<!-- wp:paragraph -->\n<p>Puedes ser un artista que quiere presentarse a sí mismo y a su trabajo o eres un negocio con una misión que describir.</p>\n<!-- /wp:paragraph -->', 'Acerca', '', 'publish', 'closed', 'closed', '', 'acerca', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 0, 'http://localhost:8888/wordpress/?page_id=22', 0, 'page', '', 0),
(23, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '<!-- wp:paragraph -->\n<p>Esta es una página con información de contacto básica, como dirección y número de teléfono. Incluso puedes probar un plugin para añadir un formulario de contacto.</p>\n<!-- /wp:paragraph -->', 'Contacto', '', 'publish', 'closed', 'closed', '', 'contacto', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 0, 'http://localhost:8888/wordpress/?page_id=23', 0, 'page', '', 0),
(24, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 'Blog', '', 'publish', 'closed', 'closed', '', 'blog', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 0, 'http://localhost:8888/wordpress/?page_id=24', 0, 'page', '', 0),
(25, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '{\n    \"nav_menus_created_posts\": {\n        \"starter_content\": true,\n        \"value\": [\n            21,\n            22,\n            23,\n            24\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"nav_menu[-1]\": {\n        \"value\": {\n            \"name\": \"Primary menu\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-1]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 0,\n            \"type\": \"custom\",\n            \"title\": \"Inicio\",\n            \"url\": \"http://localhost:8888/wordpress/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\",\n            \"nav_menu_term_id\": -1,\n            \"_invalid\": false,\n            \"type_label\": \"Enlace personalizado\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-2]\": {\n        \"value\": {\n            \"object_id\": 22,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 1,\n            \"type\": \"post_type\",\n            \"title\": \"Acerca\",\n            \"url\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"Acerca\",\n            \"nav_menu_term_id\": -1,\n            \"_invalid\": false,\n            \"type_label\": \"P\\u00e1gina\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-3]\": {\n        \"value\": {\n            \"object_id\": 24,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"post_type\",\n            \"title\": \"Blog\",\n            \"url\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"Blog\",\n            \"nav_menu_term_id\": -1,\n            \"_invalid\": false,\n            \"type_label\": \"P\\u00e1gina\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-4]\": {\n        \"value\": {\n            \"object_id\": 23,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 3,\n            \"type\": \"post_type\",\n            \"title\": \"Contacto\",\n            \"url\": \"\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"Contacto\",\n            \"nav_menu_term_id\": -1,\n            \"_invalid\": false,\n            \"type_label\": \"P\\u00e1gina\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"twentytwentyone::nav_menu_locations[primary]\": {\n        \"starter_content\": true,\n        \"value\": -1,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"nav_menu[-5]\": {\n        \"value\": {\n            \"name\": \"Secondary menu\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-5]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 0,\n            \"type\": \"custom\",\n            \"title\": \"Facebook\",\n            \"url\": \"https://www.facebook.com/wordpress\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\",\n            \"nav_menu_term_id\": -5,\n            \"_invalid\": false,\n            \"type_label\": \"Enlace personalizado\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-6]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 1,\n            \"type\": \"custom\",\n            \"title\": \"Twitter\",\n            \"url\": \"https://twitter.com/wordpress\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\",\n            \"nav_menu_term_id\": -5,\n            \"_invalid\": false,\n            \"type_label\": \"Enlace personalizado\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-7]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"custom\",\n            \"title\": \"Instagram\",\n            \"url\": \"https://www.instagram.com/explore/tags/wordcamp/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\",\n            \"nav_menu_term_id\": -5,\n            \"_invalid\": false,\n            \"type_label\": \"Enlace personalizado\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"nav_menu_item[-8]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"\",\n            \"menu_item_parent\": 0,\n            \"position\": 3,\n            \"type\": \"custom\",\n            \"title\": \"Correo Electr\\u00f3nico\",\n            \"url\": \"mailto:wordpress@example.com\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"\",\n            \"nav_menu_term_id\": -5,\n            \"_invalid\": false,\n            \"type_label\": \"Enlace personalizado\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:25\"\n    },\n    \"twentytwentyone::nav_menu_locations[footer]\": {\n        \"starter_content\": true,\n        \"value\": -5,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"show_on_front\": {\n        \"starter_content\": true,\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"page_on_front\": {\n        \"starter_content\": true,\n        \"value\": 21,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"page_for_posts\": {\n        \"starter_content\": true,\n        \"value\": 24,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    },\n    \"old_sidebars_widgets_data\": {\n        \"value\": {\n            \"wp_inactive_widgets\": [\n                \"search-2\",\n                \"recent-posts-2\",\n                \"recent-comments-2\",\n                \"archives-2\",\n                \"categories-2\",\n                \"meta-2\"\n            ]\n        },\n        \"type\": \"global_variable\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:35:14\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '8ae37f61-f048-40d5-a74b-b9e70bd8551f', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 0, 'http://localhost:8888/wordpress/?p=25', 0, 'customize_changeset', '', 0),
(26, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '\n					<!-- wp:heading {\"align\":\"wide\",\"fontSize\":\"gigantic\",\"style\":{\"typography\":{\"lineHeight\":\"1.1\"}}} -->\n					<h2 class=\"alignwide has-text-align-wide has-gigantic-font-size\" style=\"line-height:1.1\">Create your website with blocks</h2>\n					<!-- /wp:heading -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-columns-overlap\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-center is-style-twentytwentyone-columns-overlap\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\"} -->\n					<figure class=\"wp-block-image alignfull size-large\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/roses-tremieres-hollyhocks-1884.jpg\" alt=\"&#8220;Roses Tremieres&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"align\":\"full\",\"sizeSlug\":\"large\",\"className\":\"is-style-twentytwentyone-image-frame\"} -->\n					<figure class=\"wp-block-image alignfull size-large is-style-twentytwentyone-image-frame\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/in-the-bois-de-boulogne.jpg\" alt=\"&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"center\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:image {\"sizeSlug\":\"large\",\"className\":\"alignfull size-full is-style-twentytwentyone-border\"} -->\n					<figure class=\"wp-block-image size-large alignfull size-full is-style-twentytwentyone-border\"><img src=\"http://localhost:8888/wordpress/wp-content/themes/twentytwentyone/assets/images/young-woman-in-mauve.jpg\" alt=\"&#8220;Young Woman in Mauve&#8221; by Berthe Morisot\"/></figure>\n					<!-- /wp:image --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":50} -->\n					<div style=\"height:50px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns {\"verticalAlignment\":\"top\",\"align\":\"wide\"} -->\n					<div class=\"wp-block-columns alignwide are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Add block patterns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Frame your images</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One includes stylish borders for your content. With an Image block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Select the &quot;Frame&quot; block style to activate it.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n					<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:heading {\"level\":3} -->\n					<h3>Overlap columns</h3>\n					<!-- /wp:heading -->\n\n					<!-- wp:paragraph -->\n					<p>Twenty Twenty-One also includes an overlap style for column blocks. With a Columns block selected, open the &quot;Styles&quot; panel within the Editor sidebar. Choose the &quot;Overlap&quot; block style to try it out.</p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer -->\n					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:cover {\"overlayColor\":\"green\",\"contentPosition\":\"center center\",\"align\":\"wide\",\"className\":\"is-style-twentytwentyone-border\"} -->\n					<div class=\"wp-block-cover alignwide has-green-background-color has-background-dim is-style-twentytwentyone-border\"><div class=\"wp-block-cover__inner-container\"><!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:paragraph {\"fontSize\":\"huge\"} -->\n					<p class=\"has-huge-font-size\">Need help?</p>\n					<!-- /wp:paragraph -->\n\n					<!-- wp:spacer {\"height\":75} -->\n					<div style=\"height:75px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer -->\n\n					<!-- wp:columns -->\n					<div class=\"wp-block-columns\"><!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/article/twenty-twenty-one/\">Read the Theme Documentation</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column -->\n\n					<!-- wp:column -->\n					<div class=\"wp-block-column\"><!-- wp:paragraph -->\n					<p><a href=\"https://wordpress.org/support/theme/twentytwentyone/\">Check out the Support Forums</a></p>\n					<!-- /wp:paragraph --></div>\n					<!-- /wp:column --></div>\n					<!-- /wp:columns -->\n\n					<!-- wp:spacer {\"height\":20} -->\n					<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n					<!-- /wp:spacer --></div></div>\n					<!-- /wp:cover -->', 'Create your website with blocks', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 21, 'http://localhost:8888/wordpress/?p=26', 0, 'revision', '', 0),
(27, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '<!-- wp:paragraph -->\n<p>Puedes ser un artista que quiere presentarse a sí mismo y a su trabajo o eres un negocio con una misión que describir.</p>\n<!-- /wp:paragraph -->', 'Acerca', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 22, 'http://localhost:8888/wordpress/?p=27', 0, 'revision', '', 0),
(28, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '<!-- wp:paragraph -->\n<p>Esta es una página con información de contacto básica, como dirección y número de teléfono. Incluso puedes probar un plugin para añadir un formulario de contacto.</p>\n<!-- /wp:paragraph -->', 'Contacto', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 23, 'http://localhost:8888/wordpress/?p=28', 0, 'revision', '', 0),
(29, 1, '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 'Blog', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2021-05-12 13:35:25', '2021-05-12 18:35:25', '', 24, 'http://localhost:8888/wordpress/?p=29', 0, 'revision', '', 0),
(30, 1, '2021-05-13 11:44:44', '2021-05-12 18:35:25', '', 'Inicio', '', 'publish', 'closed', 'closed', '', 'inicio', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/2021/05/12/inicio/', 1, 'nav_menu_item', '', 0),
(32, 1, '2021-05-13 11:44:44', '2021-05-12 18:35:26', ' ', '', '', 'publish', 'closed', 'closed', '', '32', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/2021/05/12/32/', 2, 'nav_menu_item', '', 0),
(34, 1, '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 'Facebook', '', 'publish', 'closed', 'closed', '', 'facebook', '', '', '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 0, 'http://localhost:8888/wordpress/2021/05/12/facebook/', 0, 'nav_menu_item', '', 0),
(35, 1, '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 'Twitter', '', 'publish', 'closed', 'closed', '', 'twitter', '', '', '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 0, 'http://localhost:8888/wordpress/2021/05/12/twitter/', 1, 'nav_menu_item', '', 0),
(36, 1, '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 'Instagram', '', 'publish', 'closed', 'closed', '', 'instagram', '', '', '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 0, 'http://localhost:8888/wordpress/2021/05/12/instagram/', 2, 'nav_menu_item', '', 0),
(37, 1, '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 'Correo Electrónico', '', 'publish', 'closed', 'closed', '', 'correo-electronico', '', '', '2021-05-12 13:35:26', '2021-05-12 18:35:26', '', 0, 'http://localhost:8888/wordpress/2021/05/12/correo-electronico/', 3, 'nav_menu_item', '', 0),
(38, 1, '2021-05-12 13:38:42', '2021-05-12 18:38:42', '{\n    \"show_on_front\": {\n        \"value\": \"posts\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:38:42\"\n    },\n    \"page_for_posts\": {\n        \"value\": \"21\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:38:42\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '092b8384-dd7b-40d0-b9a7-83229641f44a', '', '', '2021-05-12 13:38:42', '2021-05-12 18:38:42', '', 0, 'http://localhost:8888/wordpress/2021/05/12/092b8384-dd7b-40d0-b9a7-83229641f44a/', 0, 'customize_changeset', '', 0),
(39, 1, '2021-05-12 13:40:52', '2021-05-12 18:40:52', '{\n    \"old_sidebars_widgets_data\": {\n        \"value\": {\n            \"wp_inactive_widgets\": [\n                \"search-2\",\n                \"recent-posts-2\",\n                \"recent-comments-2\",\n                \"archives-2\",\n                \"categories-2\",\n                \"meta-2\"\n            ]\n        },\n        \"type\": \"global_variable\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:40:52\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '306feecd-9e56-44f4-93af-692e87202b72', '', '', '2021-05-12 13:40:52', '2021-05-12 18:40:52', '', 0, 'http://localhost:8888/wordpress/2021/05/12/306feecd-9e56-44f4-93af-692e87202b72/', 0, 'customize_changeset', '', 0),
(40, 1, '2021-05-12 13:41:06', '2021-05-12 18:41:06', '{\n    \"old_sidebars_widgets_data\": {\n        \"value\": {\n            \"wp_inactive_widgets\": [\n                \"search-2\",\n                \"recent-posts-2\",\n                \"recent-comments-2\",\n                \"archives-2\",\n                \"categories-2\",\n                \"meta-2\"\n            ]\n        },\n        \"type\": \"global_variable\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:41:06\"\n    },\n    \"twentytwentyone::nav_menu_locations[primary]\": {\n        \"value\": 2,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:41:06\"\n    },\n    \"twentytwentyone::nav_menu_locations[footer]\": {\n        \"value\": 3,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 18:41:06\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'c4239b71-8a6d-4267-8407-d14b29b14a6d', '', '', '2021-05-12 13:41:06', '2021-05-12 18:41:06', '', 0, 'http://localhost:8888/wordpress/2021/05/12/c4239b71-8a6d-4267-8407-d14b29b14a6d/', 0, 'customize_changeset', '', 0),
(41, 1, '2021-05-12 14:44:35', '2021-05-12 19:44:35', '{\n    \"old_sidebars_widgets_data\": {\n        \"value\": {\n            \"wp_inactive_widgets\": [\n                \"search-2\",\n                \"recent-posts-2\",\n                \"recent-comments-2\",\n                \"archives-2\",\n                \"categories-2\",\n                \"meta-2\"\n            ]\n        },\n        \"type\": \"global_variable\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-12 19:44:35\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '936bfe90-6f42-4e5d-8689-acf94cfbbcd4', '', '', '2021-05-12 14:44:35', '2021-05-12 19:44:35', '', 0, 'http://localhost:8888/wordpress/2021/05/12/936bfe90-6f42-4e5d-8689-acf94cfbbcd4/', 0, 'customize_changeset', '', 0),
(42, 1, '2021-05-13 11:06:27', '0000-00-00 00:00:00', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:06:27\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '100b4541-ce05-4219-9f61-c292dd043d84', '', '', '2021-05-13 11:06:27', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=42', 0, 'customize_changeset', '', 0),
(43, 1, '2021-05-13 11:23:32', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-05-13 11:23:32', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?page_id=43', 0, 'page', '', 0),
(44, 1, '2021-05-13 11:24:39', '2021-05-13 16:24:39', '', 'Inicio', '', 'publish', 'closed', 'closed', '', 'inicio', '', '', '2021-05-13 11:24:39', '2021-05-13 16:24:39', '', 0, 'http://localhost:8888/wordpress/?page_id=44', 0, 'page', '', 0),
(45, 1, '2021-05-13 11:24:39', '2021-05-13 16:24:39', '', 'Inicio', '', 'inherit', 'closed', 'closed', '', '44-revision-v1', '', '', '2021-05-13 11:24:39', '2021-05-13 16:24:39', '', 44, 'http://localhost:8888/wordpress/?p=45', 0, 'revision', '', 0),
(46, 1, '2021-05-13 11:27:49', '2021-05-13 16:27:49', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:27:27\"\n    },\n    \"page_on_front\": {\n        \"value\": \"44\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:27:27\"\n    },\n    \"page_for_posts\": {\n        \"value\": \"24\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:27:49\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ef257de7-448a-4936-b786-548653fdd136', '', '', '2021-05-13 11:27:49', '2021-05-13 16:27:49', '', 0, 'http://localhost:8888/wordpress/?p=46', 0, 'customize_changeset', '', 0),
(47, 1, '2021-05-13 11:28:54', '2021-05-13 16:28:54', '{\n    \"show_on_front\": {\n        \"value\": \"posts\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:28:47\"\n    },\n    \"page_on_front\": {\n        \"value\": \"24\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:28:47\"\n    },\n    \"page_for_posts\": {\n        \"value\": \"22\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-13 16:28:47\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e36f83db-0660-49fd-b928-995902dd8b74', '', '', '2021-05-13 11:28:54', '2021-05-13 16:28:54', '', 0, 'http://localhost:8888/wordpress/?p=47', 0, 'customize_changeset', '', 0),
(48, 1, '2021-05-13 11:37:20', '2021-05-13 16:37:20', '', 'Marketing Digital', '', 'publish', 'closed', 'closed', '', 'marketing-digital', '', '', '2021-05-13 11:37:20', '2021-05-13 16:37:20', '', 0, 'http://localhost:8888/wordpress/?page_id=48', 0, 'page', '', 0),
(49, 1, '2021-05-13 11:37:20', '2021-05-13 16:37:20', '', 'Marketing Digital', '', 'inherit', 'closed', 'closed', '', '48-revision-v1', '', '', '2021-05-13 11:37:20', '2021-05-13 16:37:20', '', 48, 'http://localhost:8888/wordpress/?p=49', 0, 'revision', '', 0),
(50, 1, '2021-05-13 11:37:35', '2021-05-13 16:37:35', '<!-- wp:paragraph -->\n<p>Esta es una página de ejemplo. Es diferente a una entrada del blog porque permanecerá en un solo lugar y aparecerá en la navegación de tu sitio (en la mayoría de los temas). La mayoría de las personas comienzan con una página «Acerca de» que les presenta a los visitantes potenciales del sitio. Podrías decir algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>¡Bienvenido! Soy camarero de día, aspirante a actor de noche y esta es mi web. Vivo en Mairena del Alcor, tengo un perro que se llama Firulais y me gusta el rebujito. (Y las tardes largas con café).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…o algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La empresa «Mariscos Recio» fue fundada por Antonio Recio Mata. Empezó siendo una pequeña empresa que suministraba marisco a hoteles y restaurantes, pero poco a poco se ha ido transformando en un gran imperio. Mariscos Recio, el mar al mejor precio.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como nuevo usuario de WordPress, deberías ir a <a href=\"http://localhost:8888/wordpress/wp-admin/\">tu escritorio</a> para borrar esta página y crear nuevas páginas para tu contenido. ¡Pásalo bien!</p>\n<!-- /wp:paragraph -->', 'Página de ejemplo', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2021-05-13 11:37:35', '2021-05-13 16:37:35', '', 2, 'http://localhost:8888/wordpress/?p=50', 0, 'revision', '', 0),
(51, 1, '2021-05-13 11:38:44', '2021-05-13 16:38:44', '', 'Branding & Diseño', '', 'publish', 'closed', 'closed', '', 'branding-diseno', '', '', '2021-05-13 11:38:44', '2021-05-13 16:38:44', '', 0, 'http://localhost:8888/wordpress/?page_id=51', 0, 'page', '', 0),
(52, 1, '2021-05-13 11:38:44', '2021-05-13 16:38:44', '', 'Branding & Diseño', '', 'inherit', 'closed', 'closed', '', '51-revision-v1', '', '', '2021-05-13 11:38:44', '2021-05-13 16:38:44', '', 51, 'http://localhost:8888/wordpress/?p=52', 0, 'revision', '', 0),
(53, 1, '2021-05-13 11:40:05', '2021-05-13 16:40:05', '', 'Producción Audiovisual', '', 'publish', 'closed', 'closed', '', 'produccion-audiovisual', '', '', '2021-05-13 11:40:05', '2021-05-13 16:40:05', '', 0, 'http://localhost:8888/wordpress/?page_id=53', 0, 'page', '', 0),
(54, 1, '2021-05-13 11:40:05', '2021-05-13 16:40:05', '', 'Producción Audiovisual', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2021-05-13 11:40:05', '2021-05-13 16:40:05', '', 53, 'http://localhost:8888/wordpress/?p=54', 0, 'revision', '', 0),
(55, 1, '2021-05-13 11:41:20', '2021-05-13 16:41:20', '', 'BTL & Comunicación', '', 'publish', 'closed', 'closed', '', 'btl-comunicacion', '', '', '2021-05-13 11:41:20', '2021-05-13 16:41:20', '', 0, 'http://localhost:8888/wordpress/?page_id=55', 0, 'page', '', 0),
(56, 1, '2021-05-13 11:41:20', '2021-05-13 16:41:20', '', 'BTL & Comunicación', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2021-05-13 11:41:20', '2021-05-13 16:41:20', '', 55, 'http://localhost:8888/wordpress/?p=56', 0, 'revision', '', 0),
(57, 1, '2021-05-13 11:42:33', '2021-05-13 16:42:33', '', 'Desarrollo & Software', '', 'publish', 'closed', 'closed', '', 'desarrollo-software', '', '', '2021-05-13 11:42:33', '2021-05-13 16:42:33', '', 0, 'http://localhost:8888/wordpress/?page_id=57', 0, 'page', '', 0),
(58, 1, '2021-05-13 11:42:33', '2021-05-13 16:42:33', '', 'Desarrollo & Software', '', 'inherit', 'closed', 'closed', '', '57-revision-v1', '', '', '2021-05-13 11:42:33', '2021-05-13 16:42:33', '', 57, 'http://localhost:8888/wordpress/?p=58', 0, 'revision', '', 0),
(59, 1, '2021-05-13 11:44:44', '2021-05-13 16:44:44', ' ', '', '', 'publish', 'closed', 'closed', '', '59', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/?p=59', 3, 'nav_menu_item', '', 0),
(60, 1, '2021-05-13 11:44:44', '2021-05-13 16:44:44', ' ', '', '', 'publish', 'closed', 'closed', '', '60', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/?p=60', 4, 'nav_menu_item', '', 0),
(61, 1, '2021-05-13 11:44:44', '2021-05-13 16:44:44', ' ', '', '', 'publish', 'closed', 'closed', '', '61', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/?p=61', 5, 'nav_menu_item', '', 0),
(62, 1, '2021-05-13 11:44:44', '2021-05-13 16:44:44', ' ', '', '', 'publish', 'closed', 'closed', '', '62', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/?p=62', 6, 'nav_menu_item', '', 0),
(63, 1, '2021-05-13 11:44:44', '2021-05-13 16:44:44', ' ', '', '', 'publish', 'closed', 'closed', '', '63', '', '', '2021-05-13 11:44:44', '2021-05-13 16:44:44', '', 0, 'http://localhost:8888/wordpress/?p=63', 7, 'nav_menu_item', '', 0),
(64, 1, '2021-05-14 12:16:01', '2021-05-14 17:16:01', '', 'Inicio', '', 'inherit', 'closed', 'closed', '', '44-autosave-v1', '', '', '2021-05-14 12:16:01', '2021-05-14 17:16:01', '', 44, 'http://localhost:8888/wordpress/?p=64', 0, 'revision', '', 0),
(65, 1, '2021-05-14 12:36:08', '0000-00-00 00:00:00', '{\n    \"evanzu::nav_menu_locations[menu-principal]\": {\n        \"value\": 2,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-14 17:36:08\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '0c416169-1461-4d0e-a1b3-801674062f73', '', '', '2021-05-14 12:36:08', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=65', 0, 'customize_changeset', '', 0),
(66, 1, '2021-05-14 13:08:23', '2021-05-14 18:08:23', '', 'Evanzu-02', '', 'inherit', 'open', 'closed', '', 'evanzu-02', '', '', '2021-05-14 13:08:23', '2021-05-14 18:08:23', '', 0, 'http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg', 0, 'attachment', 'image/jpeg', 0),
(67, 1, '2021-05-14 13:08:44', '0000-00-00 00:00:00', '{\n    \"evanzu[banner-image]\": {\n        \"value\": \"http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-14 18:08:44\"\n    }\n}', '', '', 'auto-draft', 'closed', 'closed', '', '3f051212-9f80-4bff-bbd7-305a820d09e1', '', '', '2021-05-14 13:08:44', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/wordpress/?p=67', 0, 'customize_changeset', '', 0),
(68, 1, '2021-05-14 13:12:44', '2021-05-14 18:12:44', '{\n    \"evanzu[banner-image]\": {\n        \"value\": \"http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-14 18:12:44\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'f64002cc-adce-4d8b-a3da-e18603dcd0a9', '', '', '2021-05-14 13:12:44', '2021-05-14 18:12:44', '', 0, 'http://localhost:8888/wordpress/2021/05/14/f64002cc-adce-4d8b-a3da-e18603dcd0a9/', 0, 'customize_changeset', '', 0),
(69, 1, '2021-05-14 13:29:05', '2021-05-14 18:29:05', '{\n    \"evanzu[galleri-image-one]\": {\n        \"value\": \"http://localhost:8888/wordpress/wp-content/uploads/2021/05/Evanzu-02.jpg\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-05-14 18:29:05\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'b1cc74a6-2d6c-4d3a-8ed5-072eb7324611', '', '', '2021-05-14 13:29:05', '2021-05-14 18:29:05', '', 0, 'http://localhost:8888/wordpress/2021/05/14/b1cc74a6-2d6c-4d3a-8ed5-072eb7324611/', 0, 'customize_changeset', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ev_termmeta`
--

CREATE TABLE `ev_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ev_terms`
--

CREATE TABLE `ev_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_terms`
--

INSERT INTO `ev_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Sin categoría', 'sin-categoria', 0),
(2, 'Primary menu', 'primary-menu', 0),
(3, 'Secondary menu', 'secondary-menu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ev_term_relationships`
--

CREATE TABLE `ev_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_term_relationships`
--

INSERT INTO `ev_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(30, 2, 0),
(32, 2, 0),
(34, 3, 0),
(35, 3, 0),
(36, 3, 0),
(37, 3, 0),
(59, 2, 0),
(60, 2, 0),
(61, 2, 0),
(62, 2, 0),
(63, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ev_term_taxonomy`
--

CREATE TABLE `ev_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_term_taxonomy`
--

INSERT INTO `ev_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 7),
(3, 3, 'nav_menu', '', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ev_usermeta`
--

CREATE TABLE `ev_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_usermeta`
--

INSERT INTO `ev_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Rolando'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'ev_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'ev_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"53f9b9b9643f83e1cc513a442d69a1c874dc4b4128253e029972d6ebbf63fd80\";a:4:{s:10:\"expiration\";i:1621185285;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:121:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36\";s:5:\"login\";i:1621012485;}}'),
(17, 1, 'ev_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'nav_menu_recently_edited', '2'),
(19, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(20, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(21, 1, 'ev_user-settings', 'libraryContent=upload'),
(22, 1, 'ev_user-settings-time', '1621017160');

-- --------------------------------------------------------

--
-- Table structure for table `ev_users`
--

CREATE TABLE `ev_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ev_users`
--

INSERT INTO `ev_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'Rolando', '$P$BSoeOpeunbUQM/OgMv11k.IHDgKEVl/', 'rolando', 'rolando@evanzu.com', 'http://localhost:8888/wordpress', '2021-05-12 16:28:43', '', 0, 'Rolando');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ev_commentmeta`
--
ALTER TABLE `ev_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `ev_comments`
--
ALTER TABLE `ev_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `ev_links`
--
ALTER TABLE `ev_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `ev_options`
--
ALTER TABLE `ev_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `ev_postmeta`
--
ALTER TABLE `ev_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `ev_posts`
--
ALTER TABLE `ev_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `ev_termmeta`
--
ALTER TABLE `ev_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `ev_terms`
--
ALTER TABLE `ev_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `ev_term_relationships`
--
ALTER TABLE `ev_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `ev_term_taxonomy`
--
ALTER TABLE `ev_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `ev_usermeta`
--
ALTER TABLE `ev_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `ev_users`
--
ALTER TABLE `ev_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ev_commentmeta`
--
ALTER TABLE `ev_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ev_comments`
--
ALTER TABLE `ev_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ev_links`
--
ALTER TABLE `ev_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ev_options`
--
ALTER TABLE `ev_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `ev_postmeta`
--
ALTER TABLE `ev_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `ev_posts`
--
ALTER TABLE `ev_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `ev_termmeta`
--
ALTER TABLE `ev_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ev_terms`
--
ALTER TABLE `ev_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ev_term_taxonomy`
--
ALTER TABLE `ev_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ev_usermeta`
--
ALTER TABLE `ev_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ev_users`
--
ALTER TABLE `ev_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
