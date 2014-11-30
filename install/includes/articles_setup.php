<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------*
| Filename: includes/articles_setup.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (isset($_POST['uninstall'])) {
	$result = dbquery("DROP TABLE IF EXISTS ".$db_prefix."articles");
	$result = dbquery("DROP TABLE IF EXISTS ".$db_prefix."article_cats");
} else {
	$result = dbquery("DROP TABLE IF EXISTS ".$db_prefix."articles");
	$result = dbquery("DROP TABLE IF EXISTS ".$db_prefix."article_cats");
	if (!db_exists($db_prefix."articles")) {
		$result = dbquery("CREATE TABLE ".$db_prefix."articles (
			article_id MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
			article_cat MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT '0',
			article_subject VARCHAR(200) NOT NULL DEFAULT '',
			article_snippet TEXT NOT NULL,
			article_article TEXT NOT NULL,
			article_draft TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
			article_breaks CHAR(1) NOT NULL DEFAULT '',
			article_name MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT '1',
			article_datestamp INT(10) UNSIGNED NOT NULL DEFAULT '0',
			article_reads MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT '0',
			article_allow_comments TINYINT(1) UNSIGNED NOT NULL DEFAULT '1',
			article_allow_ratings TINYINT(1) UNSIGNED NOT NULL DEFAULT '1',
			PRIMARY KEY (article_id),
			KEY article_cat (article_cat),
			KEY article_datestamp (article_datestamp),
			KEY article_reads (article_reads)
			) ENGINE=MyISAM DEFAULT CHARSET=UTF8 COLLATE=utf8_unicode_ci");
		if (!$result) {
			$fail = TRUE;
		}
	} else {
		$fail = TRUE;
	}
	if (!db_exists($db_prefix."article_cats")) {
		$result = dbquery("CREATE TABLE ".$db_prefix."article_cats (
				article_cat_id MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
				article_cat_name VARCHAR(100) NOT NULL DEFAULT '',
				article_cat_description VARCHAR(200) NOT NULL DEFAULT '',
				article_cat_sorting VARCHAR(50) NOT NULL DEFAULT 'article_subject ASC',
				article_cat_access TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
				article_cat_language VARCHAR(50) NOT NULL DEFAULT '".$_POST['localeset']."',
				PRIMARY KEY (article_cat_id),
				KEY article_cat_access (article_cat_access)
				) ENGINE=MyISAM DEFAULT CHARSET=UTF8 COLLATE=utf8_unicode_ci");
		if (!$result) {
			$fail = TRUE;
		}
	} else {
		$fail = TRUE;
	}
}


?>