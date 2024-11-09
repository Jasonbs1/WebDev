-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2024 pada 17.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `book_description` text NOT NULL,
  `book_publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_author`, `book_genre`, `book_description`, `book_publish_date`) VALUES
(1, 'Laboriosam beatae eum aut.', 'Davin Quigley MD', 'voluptatem', 'Expedita suscipit corrupti omnis est maxime est. Quia vitae fugiat maiores quod ut voluptas sunt qui. Optio quae dolorem aut non quisquam molestias. A est sint perspiciatis iusto iste id dolorem nobis.', '2008-08-26'),
(2, 'Quis et dolorem ullam dicta id.', 'Leland D\'Amore', 'sit', 'Delectus enim eius alias magni eligendi quibusdam. Cupiditate repudiandae sed ut qui rerum placeat porro. Excepturi sed unde commodi ut consequatur. Deserunt ut saepe delectus voluptas iusto.', '2015-12-24'),
(3, 'Deserunt quaerat impedit eaque molestiae.', 'Juanita Hegmann', 'ut', 'Officia eum suscipit ex officiis. Sed in alias error pariatur quidem. Culpa perferendis expedita dolor saepe et perferendis.', '1972-02-08'),
(4, 'Est molestiae est repudiandae eius.', 'Abdiel Koss', 'nesciunt', 'Perferendis itaque qui fugiat iure fugit aut. Recusandae deserunt sit cum ratione sit omnis numquam. Non exercitationem minus cum quo. Incidunt et omnis quis rem laudantium praesentium.', '1985-05-10'),
(5, 'Ipsam assumenda autem voluptatem beatae qui et.', 'Buddy Russel DVM', 'et', 'Nemo doloremque blanditiis debitis eius commodi est. Non culpa ducimus aut corrupti. Quibusdam qui qui error eos. Veniam molestiae id consequuntur repellendus. Unde dolorum velit aut.', '1975-04-18'),
(6, 'Et magni quasi voluptatem esse velit et.', 'Dana Conroy', 'repellat', 'Aut quas quo quis doloribus soluta cupiditate incidunt. Quibusdam provident amet quam modi qui. Iste optio ut excepturi aspernatur autem quaerat eligendi eos.', '1992-09-24'),
(7, 'Aut quibusdam aut laudantium est.', 'Elouise D\'Amore', 'aperiam', 'Tempora possimus voluptas assumenda et ex distinctio. In delectus iure velit. Sequi culpa sequi et quia eaque doloremque vel doloremque. Doloremque quis dolore libero et quia et autem.', '2015-04-05'),
(8, 'Inventore voluptas molestiae ut saepe culpa facere voluptatibus et.', 'Dr. Llewellyn Beier', 'ab', 'Qui maxime est debitis nesciunt aliquam sapiente eos. Aut odio et atque sunt soluta fugit nam. Voluptate voluptas commodi laborum laborum a veritatis vitae.', '2009-07-01'),
(9, 'In id porro soluta vitae animi ut expedita dolores.', 'Mrs. Gail Zulauf', 'quas', 'Voluptate rem voluptatum incidunt sit et maxime repellendus. Ipsa tenetur et quis quasi autem rerum. Recusandae voluptatibus saepe ut esse consectetur incidunt. Sequi repellendus et tenetur. Quo harum enim corrupti.', '2006-05-04'),
(10, 'Magni ut aliquam aliquam officia dignissimos totam accusantium.', 'Ward Kuhlman', 'occaecati', 'Rerum dolorem vero accusantium soluta et aliquam omnis. Quod quia asperiores occaecati perspiciatis ut ut. Tempora neque dolores laborum suscipit voluptate rerum harum. Esse in esse iste provident iste.', '1976-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_d_s`
--

CREATE TABLE `c_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cd_title` varchar(255) NOT NULL,
  `cd_author` varchar(255) NOT NULL,
  `cd_genre` varchar(255) NOT NULL,
  `cd_description` text NOT NULL,
  `cd_publish_date` date NOT NULL,
  `cd_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `c_d_s`
--

INSERT INTO `c_d_s` (`id`, `cd_title`, `cd_author`, `cd_genre`, `cd_description`, `cd_publish_date`, `cd_price`) VALUES
(1, 'Et accusamus veritatis est sed minima exercitationem.', 'Mr. Bernard Kessler', 'est', 'Quia magnam veritatis facilis laboriosam. Maxime laudantium aperiam est sequi. Ut quo ea voluptas minima aut fuga.', '1999-11-10', 23),
(2, 'Facere aut omnis temporibus earum nihil consequatur.', 'Mr. Fredy Runte PhD', 'aut', 'Asperiores magnam ut est error nesciunt quam et. Harum veritatis ut tenetur dolor. Laborum eum nisi vero ut soluta natus.', '1983-11-01', 36),
(3, 'Possimus voluptas reprehenderit est qui qui.', 'Kian Borer', 'quibusdam', 'Hic velit eum dolores earum qui reiciendis. Sequi voluptatem perferendis quia ducimus velit voluptatem. Nam eaque reiciendis natus enim ea et. Aliquam quia dignissimos maiores fugit quae eius quas.', '1973-07-11', 29),
(4, 'Aut et dolorum perferendis aperiam dolor possimus tenetur.', 'Aurelie Gerlach', 'aperiam', 'Aut laborum eaque soluta culpa deserunt ratione minima dolor. Molestias praesentium ipsum nam non minima ducimus. Animi voluptatem fugit maxime et molestias et aperiam.', '2021-06-14', 26),
(5, 'Mollitia sint at quos ut maxime.', 'Prof. Marcellus Huel', 'laudantium', 'Sint voluptate aut veritatis maxime. Illo tempore velit est. Quibusdam molestiae voluptatem cupiditate fuga et. Repellat aliquam ad saepe dolores veritatis quaerat.', '1986-08-08', 34),
(6, 'Inventore et pariatur voluptatem facere aut laborum ad facere.', 'Ford Waters I', 'minus', 'Itaque sed perspiciatis eum. Nulla repellat voluptatum voluptate nam possimus est omnis. Nam sint non repellat culpa ut.', '1970-08-30', 47),
(7, 'Sed rem id magnam officia blanditiis at sapiente.', 'Logan Kovacek', 'in', 'Error est explicabo non qui. Quisquam quaerat odio fugiat molestiae placeat ducimus beatae in.', '1971-04-23', 33),
(8, 'Ex rerum consequatur nesciunt et repudiandae cupiditate fuga.', 'Eliza Ondricka', 'quam', 'Est nihil voluptates nobis illo velit animi. Delectus omnis voluptatum voluptatem assumenda asperiores necessitatibus. Ea delectus sed nihil veniam aperiam esse. Praesentium praesentium aut corrupti nisi laborum aspernatur mollitia.', '1993-12-13', 13),
(9, 'Quaerat voluptatum quo consequatur consequuntur ab.', 'Ocie Howe IV', 'sed', 'Ipsum aut alias fugiat pariatur. Accusamus nemo quae et totam et eum ipsa. Sunt reprehenderit ex laudantium. Similique autem odit excepturi itaque omnis quam iste. Ipsam ut et ad et est non.', '2022-05-23', 7),
(10, 'Commodi et aperiam reiciendis vitae autem quia.', 'Estell Lemke', 'ipsam', 'Et suscipit eum repellat. Cum ipsum assumenda ullam. Ullam doloribus qui aut expedita voluptatem.', '2012-04-17', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `final_year_projects`
--

CREATE TABLE `final_year_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fyp_title` varchar(255) NOT NULL,
  `fyp_author` varchar(255) NOT NULL,
  `fyp_genre` varchar(255) NOT NULL,
  `fyp_description` text NOT NULL,
  `fyp_publish_date` date NOT NULL,
  `fyp_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `final_year_projects`
--

INSERT INTO `final_year_projects` (`id`, `fyp_title`, `fyp_author`, `fyp_genre`, `fyp_description`, `fyp_publish_date`, `fyp_price`) VALUES
(1, 'Est eveniet aut voluptatum voluptate vel.', 'Raoul Marvin MD', 'quis', 'Aut quo sequi eaque cupiditate numquam. Dicta vitae vel doloremque saepe labore et.', '1974-03-28', 415),
(2, 'Ducimus ea eius ut ut necessitatibus quasi sed.', 'Carlie Wintheiser', 'harum', 'Ad voluptatem at nemo qui libero autem. Quidem deleniti magnam distinctio quo dicta cum incidunt. Ut praesentium suscipit ut sit. Qui cupiditate quibusdam eveniet rerum libero.', '1970-10-14', 144),
(3, 'Vel quis quae et aut cum eligendi assumenda.', 'Miss Emmanuelle Lebsack Sr.', 'laborum', 'Eveniet voluptas vel sapiente ea sed odio aut rem. Ut beatae modi maxime veritatis sint. Explicabo cum sed et quos. Totam voluptas nesciunt et autem ullam nisi.', '1991-06-05', 455),
(4, 'Unde quisquam repellendus et facere cupiditate.', 'Kassandra Farrell', 'beatae', 'Atque minus qui dicta rem. Nam fugit laudantium at repudiandae. Dolorum voluptatem vel et quisquam. Facilis dicta incidunt aut nostrum necessitatibus magnam laborum.', '1990-04-10', 165),
(5, 'Excepturi vitae quo optio laudantium voluptas itaque quo.', 'Shanon Muller Sr.', 'omnis', 'Fuga quisquam tenetur earum voluptatum praesentium rerum temporibus. Beatae blanditiis consequatur qui nobis deserunt cum. Itaque perspiciatis aut omnis laudantium debitis aspernatur minus. Ad saepe ipsum amet vitae quia.', '1988-04-02', 469),
(6, 'Molestiae reprehenderit voluptatem rerum ad.', 'Doug White', 'officiis', 'Expedita quaerat expedita in labore ut ipsum nisi occaecati. Quisquam molestias tempora quae velit adipisci. Qui voluptatem dolore eligendi molestias non et rerum eos.', '1987-03-13', 271),
(7, 'Aut quam consequuntur molestiae eius.', 'Ole Welch', 'est', 'Odit eligendi et unde commodi. Autem ipsa nesciunt enim dignissimos illo numquam. Mollitia repudiandae modi repudiandae aut.', '1977-02-06', 325),
(8, 'Exercitationem sed ipsam qui aut dolor accusamus et.', 'Prof. Dedric Langosh IV', 'consequatur', 'Quidem excepturi est qui aliquid. Eaque provident quis perspiciatis cupiditate nulla occaecati suscipit. Fugiat facilis dolor minus modi.', '1982-01-22', 484),
(9, 'Occaecati ipsum id vel sed molestiae.', 'Reymundo Streich', 'odit', 'Quod libero esse provident in qui doloribus est. Vitae eveniet quisquam dolorem. Doloremque fuga aliquam non fuga aliquid quia.', '2012-11-12', 356),
(10, 'Ab ea laudantium ut eos hic ut repellendus voluptatum.', 'Felicia Johnston', 'voluptas', 'Quibusdam atque accusamus ducimus culpa reiciendis. Est debitis et molestiae. Optio consequatur eaque ut magni. Est vel quia numquam harum quo cupiditate.', '2020-08-02', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_title` varchar(255) NOT NULL,
  `journal_author` varchar(255) NOT NULL,
  `journal_genre` varchar(255) NOT NULL,
  `journal_description` text NOT NULL,
  `journal_publish_date` date NOT NULL,
  `journal_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `journals`
--

INSERT INTO `journals` (`id`, `journal_title`, `journal_author`, `journal_genre`, `journal_description`, `journal_publish_date`, `journal_price`) VALUES
(1, 'Cupiditate est doloribus quae quia quas sequi suscipit.', 'Prof. Maxine Schneider II', 'possimus', 'Beatae sit et odio. Ea expedita labore quam amet. Distinctio impedit commodi et cum est non molestias. Architecto quae dolor esse blanditiis. Consequatur pariatur voluptatem blanditiis cumque ut.', '2011-06-22', 70),
(2, 'Deserunt labore cumque minus dolores deleniti.', 'Aiden Yundt', 'veniam', 'Et pariatur nisi ut minima id nisi blanditiis. Esse id iusto est qui voluptatem.', '1988-11-19', 146),
(3, 'Sequi dolores voluptate alias dolorem sunt voluptatem.', 'Darrel Hansen', 'sed', 'Impedit rem ut aut et libero. Modi quisquam harum et architecto veritatis hic. Eum rerum expedita aliquid nisi unde possimus. Ab culpa sed accusantium sequi nam quam accusantium magni.', '2003-11-20', 189),
(4, 'Temporibus eaque tempore libero delectus rerum.', 'Edgardo Dach', 'sit', 'Quisquam id enim cum et incidunt eveniet. Dolorem inventore adipisci rem eveniet pariatur velit nihil. Sunt aut possimus ab commodi placeat quae et.', '1979-05-12', 117),
(5, 'Exercitationem quia eos hic.', 'Henderson Thiel II', 'accusantium', 'Laudantium qui assumenda molestias sit quam. Recusandae cumque officia nobis repudiandae ea expedita.', '1970-07-21', 98),
(6, 'Provident est cupiditate est recusandae non ab.', 'Estefania Kshlerin', 'ut', 'Omnis cum deserunt nulla sint iure. Exercitationem laborum aliquam laborum. Molestiae aut repellat harum sapiente dolores. Debitis quia consequuntur repudiandae.', '1981-04-20', 94),
(7, 'Quaerat mollitia voluptatum error amet eos et.', 'Giuseppe Graham DVM', 'delectus', 'Atque aut a atque est. Praesentium atque culpa dolorum fuga aut molestiae. Molestiae porro nam facilis aut itaque ratione quibusdam. Deserunt ut cum et qui dolorem voluptatem quos.', '1988-07-15', 52),
(8, 'Porro rerum sed harum ut omnis.', 'Diamond Macejkovic', 'quos', 'Sunt itaque reiciendis nemo iste. Non enim dolores eius delectus veniam quia accusantium. Est odit doloribus vitae enim deserunt. Tempora ea sed sunt nisi.', '2018-11-22', 137),
(9, 'Quia libero molestiae nulla magni dicta.', 'Jamaal Cummerata', 'voluptatum', 'Totam consequuntur qui tenetur at. Odio omnis est alias ad culpa dolor error autem. Aspernatur ad nesciunt minima tempora harum. Voluptatum recusandae ex deserunt id non. Asperiores qui voluptatem eos vel commodi voluptate incidunt.', '2024-04-20', 120),
(10, 'Ea molestias aut rem eaque nam voluptas.', 'Dr. Solon Nitzsche', 'pariatur', 'Harum quis rerum beatae. Voluptas et quia voluptatibus impedit ipsam est. Vel amet repellat aut at quod placeat velit. Vitae error ab et omnis explicabo. Optio nemo reprehenderit qui vel voluptatibus iste est.', '2012-02-23', 191);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_31_004758_create_products_table', 1),
(5, '2024_10_31_005353_create_books_table', 1),
(6, '2024_10_31_005858_create_journals_table', 1),
(7, '2024_11_09_142637_create_c_d_s_table', 2),
(8, '2024_11_09_142802_create_news_papers_table', 2),
(9, '2024_11_09_142848_create_final_year_projects_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_papers`
--

CREATE TABLE `news_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `np_title` varchar(255) NOT NULL,
  `np_author` varchar(255) NOT NULL,
  `np_genre` varchar(255) NOT NULL,
  `np_description` text NOT NULL,
  `np_publish_date` date NOT NULL,
  `np_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_papers`
--

INSERT INTO `news_papers` (`id`, `np_title`, `np_author`, `np_genre`, `np_description`, `np_publish_date`, `np_price`) VALUES
(1, 'Qui non culpa est non.', 'Dr. Hardy Lueilwitz III', 'non', 'Excepturi iusto deleniti repudiandae magnam. Consequuntur iste officia possimus esse at voluptas quo unde. Rerum corporis repellat omnis optio. Facilis assumenda fugit tempore odit et ut.', '2013-07-05', 4),
(2, 'Et aut veniam molestiae necessitatibus.', 'Josiah Hickle', 'exercitationem', 'Ut dicta possimus voluptatem consequatur. Vel ut ea deleniti aut. Quis voluptate est fugit nobis.', '2008-07-21', 3),
(3, 'Optio corrupti id id nihil soluta mollitia.', 'Judah Thiel PhD', 'dolorum', 'Esse alias quos sapiente minima numquam. Tempore consequatur magni iste est tempora dolorem eos. Reprehenderit nulla et et vero atque pariatur aut. Itaque non quisquam officia dolorum.', '1976-01-12', 1),
(4, 'Labore dolorem id mollitia.', 'Ms. Pascale Metz Jr.', 'quisquam', 'Fugit id impedit aut. Quis qui animi rem magnam. Ipsum pariatur doloremque porro in rerum odio qui.', '2010-03-25', 5),
(5, 'Ullam facilis nostrum cum ipsam.', 'Petra Lind DDS', 'nobis', 'Explicabo quasi reprehenderit laudantium reiciendis. Quo voluptatem qui consequatur aut minima qui dicta. Aut quibusdam earum fuga nobis illum. Dignissimos et neque atque beatae.', '1979-09-27', 1),
(6, 'Fuga tempore rerum occaecati adipisci.', 'Dr. Brady Corkery', 'et', 'Ex ab nobis et sed et voluptate. Omnis totam facere repudiandae fugit voluptatem. Ut quo eaque in et quaerat nihil optio. Ut est asperiores est atque accusantium ea deleniti.', '1988-10-14', 3),
(7, 'Sequi adipisci expedita beatae sed labore optio sint.', 'Dr. Zechariah Bednar', 'voluptatem', 'Non id accusantium reprehenderit. Labore et consectetur a esse doloremque voluptatem doloremque dolor. In doloribus similique ut amet et et sint voluptatem. Itaque sit aut reiciendis adipisci quo. Modi ut molestias aut totam ab ipsam assumenda.', '1983-12-26', 4),
(8, 'Dolores architecto incidunt quaerat.', 'Leonardo Kris I', 'omnis', 'Error assumenda dolor sit vero. Iure voluptatum voluptas modi ab velit labore nam. Eaque nihil quia ea et sed quisquam. Ullam rerum illum neque sint inventore totam non quia.', '1999-05-19', 2),
(9, 'Nostrum perspiciatis ut maxime alias eos facilis.', 'Cayla Kuhlman', 'ex', 'Eveniet rerum qui corporis quis deserunt ducimus veniam voluptatum. Fuga perspiciatis enim corporis iste aut quo nemo. Accusantium veniam at fuga nulla vero autem qui. Quo aliquam omnis voluptatum rerum eius repudiandae.', '2002-04-09', 3),
(10, 'Ut doloremque aliquam facilis fuga culpa.', 'Nels Larson', 'cupiditate', 'Accusantium dolor deleniti aut asperiores. Aperiam occaecati labore qui suscipit. Similique necessitatibus ducimus ut porro.', '2009-09-23', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NVBbrFYGMHkGMus3dfcJ6Kaqlrydn26gRkYFPHZK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWtab0luRXk2ckNNRUR0b3NTR01mQjZ1QTVSbHBBSlZzYUxiV2RoSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRhbG9nP2NhdGVnb3J5PWZ5cCZzb3J0PWRlc2MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1731168058);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-11-09 07:21:50', '$2y$12$PjxuVfsBa6h2395YtuExeefxLtRjrWWkWOAFr//av1udexcdtRtzi', 'a12T5TvxFo', '2024-11-09 07:21:50', '2024-11-09 07:21:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `c_d_s`
--
ALTER TABLE `c_d_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `final_year_projects`
--
ALTER TABLE `final_year_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news_papers`
--
ALTER TABLE `news_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `c_d_s`
--
ALTER TABLE `c_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `final_year_projects`
--
ALTER TABLE `final_year_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `news_papers`
--
ALTER TABLE `news_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
