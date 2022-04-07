
INSERT INTO categories (id, name, created_at, updated_at) VALUES
(1, 'fruits', '2022-04-06 22:18:57', '2022-04-06 22:18:58'),
(2, 'légumes', '2022-04-06 22:19:10', '2022-04-06 22:19:10'),
(3, 'épices', '2022-04-06 22:19:21', '2022-04-06 22:19:21'),
(4, 'surgelés', '2022-04-06 22:21:16', '2022-04-06 22:21:17');



-- Listage des données de la table ecommerce.category_country : ~0 rows (environ)
/*!40000 ALTER TABLE category_country DISABLE KEYS */;
INSERT INTO category_country (id, category_id, country_id, created_at, updated_at) VALUES
(1, 3, 4, '2022-04-06 22:22:19', '2022-04-06 22:22:20'),
(2, 3, 1, '2022-04-06 22:23:34', '2022-04-06 22:23:35'),
(3, 3, 3, '2022-04-06 22:23:50', '2022-04-06 22:23:51'),
(4, 3, 6, '2022-04-06 22:24:04', '2022-04-06 22:24:06'),
(5, 3, 5, '2022-04-06 22:24:46', '2022-04-06 22:24:47'),
(6, 3, 2, '2022-04-06 22:25:00', '2022-04-06 22:25:01'),
(7, 1, 4, '2022-04-06 22:25:26', '2022-04-06 22:25:27'),
(8, 1, 1, '2022-04-06 22:25:42', '2022-04-06 22:25:44'),
(9, 1, 3, '2022-04-06 22:26:06', '2022-04-06 22:26:07'),
(10, 1, 6, '2022-04-06 22:26:22', '2022-04-06 22:26:23'),
(11, 1, 5, '2022-04-06 22:26:38', '2022-04-06 22:26:40'),
(12, 1, 2, '2022-04-06 22:26:55', '2022-04-06 22:26:56'),
(13, 2, 4, '2022-04-06 22:27:08', '2022-04-06 22:27:10'),
(14, 2, 1, '2022-04-06 22:27:34', '2022-04-06 22:27:36'),
(15, 2, 3, '2022-04-06 22:27:55', '2022-04-06 22:27:57'),
(16, 2, 6, '2022-04-06 22:28:14', '2022-04-06 22:28:16'),
(17, 2, 5, '2022-04-06 22:28:32', '2022-04-06 22:28:33'),
(18, 2, 2, '2022-04-06 22:28:47', '2022-04-06 22:28:48'),
(19, 4, 4, '2022-04-06 22:29:01', '2022-04-06 22:29:02'),
(20, 4, 1, '2022-04-06 22:29:15', '2022-04-06 22:29:16'),
(21, 4, 3, '2022-04-06 22:29:38', '2022-04-06 22:29:40'),
(22, 4, 6, '2022-04-06 22:29:55', '2022-04-06 22:29:56'),
(23, 4, 5, '2022-04-06 22:30:12', '2022-04-06 22:30:13'),
(24, 4, 2, '2022-04-06 22:30:38', '2022-04-06 22:30:39');
/*!40000 ALTER TABLE category_country ENABLE KEYS */;



-- Listage des données de la table ecommerce.countries : ~0 rows (environ)
/*!40000 ALTER TABLE countries DISABLE KEYS */;
INSERT INTO countries (id, name, created_at, updated_at) VALUES
(1, 'cameroun', '2022-04-06 22:16:15', '2022-04-06 22:16:17'),
(2, 'sénégal', '2022-04-06 22:17:02', '2022-04-06 22:17:03'),
(3, "côte d'ivoire", '2022-04-06 22:17:15', '2022-04-06 22:17:16'),
(4, 'bénin', '2022-04-06 22:17:24', '2022-04-06 22:17:25'),
(5, 'nigéria', '2022-04-06 22:17:39', '2022-04-06 22:17:40'),
(6, 'maroc', '2022-04-06 22:18:03', '2022-04-06 22:18:04');
/*!40000 ALTER TABLE countries ENABLE KEYS */;



-- Listage des données de la table ecommerce.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE failed_jobs DISABLE KEYS */;
/*!40000 ALTER TABLE failed_jobs ENABLE KEYS */;



-- Listage des données de la table ecommerce.migrations : ~9 rows (environ)
/*!40000 ALTER TABLE migrations DISABLE KEYS */;
INSERT INTO migrations (id, migration, batch) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2022_04_06_143223_create_countries_table', 1),
(15, '2022_04_06_143254_create_categories_table', 1),
(16, '2022_04_06_143311_create_subcategories_table', 1),
(17, '2022_04_06_143357_create_products_table', 1),
(18, '2022_04_06_194755_created_category_country_table', 1);
/*!40000 ALTER TABLE migrations ENABLE KEYS */;



-- Listage des données de la table ecommerce.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE password_resets DISABLE KEYS */;
/*!40000 ALTER TABLE password_resets ENABLE KEYS */;



-- Listage des données de la table ecommerce.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE personal_access_tokens DISABLE KEYS */;
/*!40000 ALTER TABLE personal_access_tokens ENABLE KEYS */;



-- Listage des données de la table ecommerce.products : ~0 rows (environ)
/*!40000 ALTER TABLE products DISABLE KEYS */;
/*!40000 ALTER TABLE products ENABLE KEYS */;



-- Listage des données de la table ecommerce.subcategories : ~0 rows (environ)
/*!40000 ALTER TABLE subcategories DISABLE KEYS */;
/*!40000 ALTER TABLE subcategories ENABLE KEYS */;



-- Listage des données de la table ecommerce.users : ~0 rows (environ)
/*!40000 ALTER TABLE users DISABLE KEYS */;
/*!40000 ALTER TABLE users ENABLE KEYS */;



/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;