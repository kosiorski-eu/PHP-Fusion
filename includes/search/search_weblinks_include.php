<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: search_weblinks_include.php
| Author: Robert Gaudyn (Wooya)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}
if (db_exists(DB_WEBLINKS)) {
$locale = fusion_get_locale('', LOCALE.LOCALESET."search/weblinks.php");
    $settings = fusion_get_settings();
    if ($_GET['stype'] == "weblinks" || $_GET['stype'] == "all") {
	$sort_by = array(
		'datestamp' => "weblink_datestamp",
		'subject' => "weblink_name",
		'author' => "weblink_datestamp",
		);
	$order_by = array(
		'0' => ' DESC',
		'1' => ' ASC',
		);
	$sortby = !empty($_POST['sort']) ? "ORDER BY ".$sort_by[$_POST['sort']].$order_by[$_POST['order']] : "";
	$limit = ($_GET['stype'] != "all" ? " LIMIT ".$_POST['rowstart'].",10" : "");

        if ($_POST['fields'] == 0) {
			$ssubject = search_querylike_safe("weblink_name", $swords_keys_for_query, $c_swords, $fields_count, 0);
            $fieldsvar = search_fieldsvar($ssubject);

        } elseif ($_POST['fields'] == 1) {
			$smessage = search_querylike_safe("weblink_description", $swords_keys_for_query, $c_swords, $fields_count, 0);
			$surllink = search_querylike_safe("weblink_url", $swords_keys_for_query, $c_swords, $fields_count, 1);
			$fieldsvar = search_fieldsvar($smessage, $surllink);

        } elseif ($_POST['fields'] == 2) {
        	$ssubject = search_querylike_safe("weblink_name", $swords_keys_for_query, $c_swords, $fields_count, 0);
        	$smessage = search_querylike_safe("weblink_description", $swords_keys_for_query, $c_swords, $fields_count, 1);
			$surllink = search_querylike_safe("weblink_url", $swords_keys_for_query, $c_swords, $fields_count, 2);
			$fieldsvar = search_fieldsvar($ssubject, $surllink, $smessage);

        } else{
			$fieldsvar = "";

        }
        if ($fieldsvar) {
            $datestamp = (time() - $_POST['datelimit']);
            $result = dbquery("SELECT tw.*,twc.*
            	FROM ".DB_WEBLINKS." tw
				INNER JOIN ".DB_WEBLINK_CATS." twc ON tw.weblink_cat=twc.weblink_cat_id
				".(multilang_table("WL") ? "WHERE twc.weblink_cat_language='".LANGUAGE."' AND " : "WHERE ").groupaccess('weblink_visibility')." AND ".$fieldsvar."
				".($_POST['datelimit'] != 0 ? " AND weblink_datestamp>=".$datestamp : ""), $swords_for_query);
            $rows = dbrows($result);
        } else {
            $rows = 0;
        }
        if ($rows != 0) {
            $items_count .= THEME_BULLET."&nbsp;<a href='".FUSION_SELF."?stype=weblinks&amp;stext=".$_POST['stext']."&amp;".$composevars."'>".$rows." ".($rows == 1 ? $locale['w401'] : $locale['w402'])." ".$locale['522']."</a><br />\n";
            $datestamp = (time() - $_POST['datelimit']);
            $result = dbquery("SELECT tw.*,twc.*
            	FROM ".DB_WEBLINKS." tw
				INNER JOIN ".DB_WEBLINK_CATS." twc ON tw.weblink_cat=twc.weblink_cat_id
				".(multilang_table("WL") ? "WHERE twc.weblink_cat_language='".LANGUAGE."' AND " : "WHERE ").groupaccess('weblink_visibility')." AND ".$fieldsvar."
				".($_POST['datelimit'] != 0 ? " AND weblink_datestamp>=".$datestamp : "")."
				".$sortby.$limit, $swords_for_query);
            while ($data = dbarray($result)) {
                $search_result = "";
                if ($data['weblink_datestamp'] + 604800 > time() + ($settings['timeoffset'] * 3600)) {
                    $new = " <span class='small'>".$locale['w403']."</span>";
                } else {
                    $new = "";
                }
                $text_all = $data['weblink_description'];
                $text_all = search_striphtmlbbcodes($text_all);
                $text_frag = search_textfrag($text_all);
                $subj_c = search_stringscount($data['weblink_name']) + search_stringscount($data['weblink_url']);
                $text_c = search_stringscount($data['weblink_description']);
                $search_result .= "<a href='".INFUSIONS."weblinks/weblinks.php?cat_id=".$data['weblink_cat']."&amp;weblink_id=".$data['weblink_id']."' target='_blank'>".$data['weblink_name']."</a>".$new."<br /><br />\n";
                if ($text_frag != "") {
                    $search_result .= "<div class='quote' style='width:auto;height:auto;overflow:auto'>".$text_frag."</div><br />";
                }
                $search_result .= "<span class='small'><font class='alt'>".$locale['w404']."</font> ".showdate("%d.%m.%y",
                                                                                                               $data['weblink_datestamp'])." | <span class='alt'>".$locale['w405']."</span> ".$data['weblink_count']."</span><br /><br />\n";
                search_globalarray($search_result);
            }
        } else {
            $items_count .= THEME_BULLET."&nbsp;0 ".$locale['w402']." ".$locale['522']."<br />\n";
        }
        $navigation_result = search_navigation($rows);
    }
}
