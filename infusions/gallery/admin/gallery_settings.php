<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: settings_gallery.php
| Author: Nick Jones (Digitanium)
| Co-Author: Robert Gaudyn (Wooya)
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
include LOCALE.LOCALESET."admin/settings.php";
if (isset($_POST['delete_watermarks'])) {
	define("SAFEMODE", @ini_get("safe_mode") ? TRUE : FALSE);
	$result = dbquery("SELECT album_id,photo_filename FROM ".DB_PHOTOS." ORDER BY album_id, photo_id");
	$rows = dbrows($result);
	if ($rows) {
		$parts = array();
		$watermark1 = "";
		$watermark2 = "";
		$photodir = "";
		while ($data = dbarray($result)) {
			$parts = explode(".", $data['photo_filename']);
			$watermark1 = $parts[0]."_w1.".$parts[1];
			$watermark2 = $parts[0]."_w2.".$parts[1];
			$photodir = PHOTOS.(!SAFEMODE ? "album_".$data['album_id']."/" : "");
			if (file_exists($photodir.$watermark1)) unlink($photodir.$watermark1);
			if (file_exists($photodir.$watermark2)) unlink($photodir.$watermark2);
			unset($parts);
		}
		redirect(FUSION_SELF.$aidlink."&amp;action=settings");
	} else {
		redirect(FUSION_SELF.$aidlink."&amp;action=settings");
	}
} else if (isset($_POST['savesettings'])) {
	$_POST['photo_watermark_save'] = isset($_POST['photo_watermark_save']) ? $_POST['photo_watermark_save'] : 0;
	$_POST['photo_watermark_image'] = isset($_POST['photo_watermark_image']) ? $_POST['photo_watermark_image'] : $settings_inf['photo_watermark_image'];
	$_POST['photo_watermark_text'] = isset($_POST['photo_watermark_text']) ? $_POST['photo_watermark_text'] : 0;
	$_POST['photo_watermark_text_color1'] = isset($_POST['photo_watermark_text_color1']) ? $_POST['photo_watermark_text_color1'] : $settings_inf['photo_watermark_text_color1'];
	$_POST['photo_watermark_text_color2'] = isset($_POST['photo_watermark_text_color2']) ? $_POST['photo_watermark_text_color2'] : $settings_inf['photo_watermark_text_color2'];
	$_POST['photo_watermark_text_color3'] = isset($_POST['photo_watermark_text_color3']) ? $_POST['photo_watermark_text_color3'] : $settings_inf['photo_watermark_text_color3'];
	$error = 0;
	if (!defined('FUSION_NULL')) {
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['thumb_w']) ? $_POST['thumb_w'] : "100")."' WHERE settings_name='thumb_w'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['thumb_h']) ? $_POST['thumb_h'] : "100")."' WHERE settings_name='thumb_h'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_w']) ? $_POST['photo_w'] : "400")."' WHERE settings_name='photo_w'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_h']) ? $_POST['photo_h'] : "300")."' WHERE settings_name='photo_h'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_max_w']) ? $_POST['photo_max_w'] : "1800")."' WHERE settings_name='photo_max_w'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_max_h']) ? $_POST['photo_max_h'] : "1600")."' WHERE settings_name='photo_max_h'");
		if (!$result) {
			$error = 1;
		}
		$photo_max_b = form_sanitizer($_POST['calc_b'], '512', 'calc_b')*form_sanitizer($_POST['calc_c'], '100000', 'calc_c');
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='$photo_max_b' WHERE settings_name='photo_max_b'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['thumbs_per_row']) ? $_POST['thumbs_per_row'] : "4")."' WHERE settings_name='thumbs_per_row'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['thumbs_per_page']) ? $_POST['thumbs_per_page'] : "4")."' WHERE settings_name='thumbs_per_page'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['admin_thumbs_per_row']) ? $_POST['admin_thumbs_per_row'] : "6")."' WHERE settings_name='admin_thumbs_per_row'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_watermark']) ? $_POST['photo_watermark'] : "0")."' WHERE settings_name='photo_watermark'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_watermark_save']) ? $_POST['photo_watermark_save'] : "0")."' WHERE settings_name='photo_watermark_save'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".stripinput($_POST['photo_watermark_image'])."' WHERE settings_name='photo_watermark_image'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(isnum($_POST['photo_watermark_text']) ? $_POST['photo_watermark_text'] : "0")."' WHERE settings_name='photo_watermark_text'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(preg_match("/^([0-9A-F]){6}$/i", $_POST['photo_watermark_text_color1']) ? $_POST['photo_watermark_text_color1'] : "FF6600")."' WHERE settings_name='photo_watermark_text_color1'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(preg_match("/^([0-9A-F]){6}$/i", $_POST['photo_watermark_text_color2']) ? $_POST['photo_watermark_text_color2'] : "FFFF00")."' WHERE settings_name='photo_watermark_text_color2'");
		if (!$result) {
			$error = 1;
		}
		$result = dbquery("UPDATE ".DB_SETTINGS_INF." SET settings_value='".(preg_match("/^([0-9A-F]){6}$/i", $_POST['photo_watermark_text_color3']) ? $_POST['photo_watermark_text_color3'] : "FFFFFF")."' WHERE settings_name='photo_watermark_text_color3'");
		if (!$result) {
			$error = 1;
		}
		if ($error) {
			addNotice('danger', $locale['901']);
		} else {
			addNotice('success', $locale['900']);
		}
		redirect(FUSION_SELF.$aidlink."&amp;action=settings");
	}
}
echo openform('settingsform', 'post', FUSION_REQUEST, array("class" => "m-t-20"));
echo "<div class='well'>".$locale['photo_description']."</div>";
$choice_opts = array('1' => $locale['518'], '0' => $locale['519']);
$calc_opts = array(1 => 'Bytes (bytes)', 1000 => 'KB (Kilobytes)', 1000000 => 'MB (Megabytes)');
$calc_c = calculate_byte($gll_settings['photo_max_b']);
$calc_b = $gll_settings['photo_max_b']/$calc_c;
echo "<div class='row'><div class='col-xs-12 col-sm-9'>\n";
openside('');
echo form_text('gallery_pagination', $locale['610'], $gll_settings['gallery_pagination'], array(
	'max_length' => 2,
	'inline' => 1,
	'width' => '100px'
));
echo "
<div class='row m-0'>\n
	<label class='label-control col-xs-12 col-sm-3 p-l-0' for='thumb_w'>".$locale['601']."</label>\n
	<div class='col-xs-12 col-sm-9 p-l-0'>\n
	".form_text('thumb_w', '', $gll_settings['thumb_w'], array(
		'class' => 'pull-left m-r-10',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<i class='entypo icancel pull-left m-r-10 m-l-0 m-t-10'></i>\n
	".form_text('thumb_h', '', $gll_settings['thumb_h'], array(
		'class' => 'pull-left',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<small class='m-l-10 mid-opacity text-uppercase pull-left m-t-10'>( ".$locale['604']." )</small>\n
	</div>\n
</div>\n
";
echo "
<div class='row m-0'>\n
	<label class='label-control col-xs-12 col-sm-3 p-l-0' for='photo_max_w'>".$locale['602']."</label>\n
	<div class='col-xs-12 col-sm-9 p-l-0'>\n
	".form_text('photo_w', '', $gll_settings['photo_w'], array(
		'class' => 'pull-left m-r-10',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<i class='entypo icancel pull-left m-r-10 m-l-0 m-t-10'></i>\n
	".form_text('photo_h', '', $gll_settings['photo_h'], array(
		'class' => 'pull-left',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<small class='m-l-10 mid-opacity text-uppercase pull-left m-t-10'>( ".$locale['604']." )</small>\n
	</div>\n
</div>\n";
echo "
<div class='row m-0'>\n
	<label class='label-control col-xs-12 col-sm-3 p-l-0' for='photo_w'>".$locale['603']."</label>\n
	<div class='col-xs-12 col-sm-9 p-l-0'>\n
	".form_text('photo_max_w', '', $gll_settings['photo_max_w'], array(
		'class' => 'pull-left m-r-10',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<i class='entypo icancel pull-left m-r-10 m-l-0 m-t-10'></i>\n
	".form_text('photo_max_h', '', $gll_settings['photo_max_h'], array(
		'class' => 'pull-left',
		'max_length' => 4,
		'number' => 1,
		'width' => '150px'
	))."
	<small class='m-l-10 mid-opacity text-uppercase pull-left m-t-10'>( ".$locale['604']." )</small>\n
	</div>\n
</div>\n";
echo "
<div class='row m-0'>\n
	<label class='col-xs-12 col-sm-3 p-l-0' for='calc_b'>".$locale['605']."</label>\n
	<div class='col-xs-12 col-sm-9 p-l-0'>\n
	".form_text('calc_b', '', $calc_b, array(
		'required' => 1,
		'number' => 1,
		'error_text' => $locale['error_rate'],
		'width' => '150px',
		'max_length' => 4,
		'class' => 'pull-left m-r-10'
	))."
	".form_select('calc_c', '', $calc_c, array('options' => $calc_opts, 'class' => 'pull-left', 'width' => '180px'))."
	</div>\n
</div>\n
";
closeside();
openside('');
echo form_colorpicker('photo_watermark_text_color1', $locale['614'], $gll_settings['photo_watermark_text_color1'], array(
	'inline' => 1,
	'deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0
));
echo form_colorpicker('photo_watermark_text_color2', $locale['615'], $gll_settings['photo_watermark_text_color2'], array(
	'inline' => 1,
	'deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0
));
echo form_colorpicker('photo_watermark_text_color3', $locale['616'], $gll_settings['photo_watermark_text_color3'], array(
	'inline' => 1,
	'deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0
));
closeside();
echo "</div><div class='col-xs-12 col-sm-3'>\n";
openside("");
echo form_button('delete_watermarks', $locale['619'], $locale['619'], array(
	'deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0,
	'class' => 'btn-default',
));
closeside();
openside('');
echo form_text('photo_watermark_image', $locale['612'], $gll_settings['photo_watermark_image'], array('deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0));
echo form_select('photo_watermark_text', $locale['613'], $gll_settings['photo_watermark_text'], array(
	'options' => $choice_opts,
	'deactivate' => !$gll_settings['photo_watermark'] ? 1 : 0,
	'width' => '100%'
));
echo form_select('photo_watermark', $locale['611'], $gll_settings['photo_watermark'], array(
	'options' => $choice_opts,
	'width' => '100%'
));
echo form_select('photo_watermark_save', $locale['617'], $gll_settings['photo_watermark_save'], array(
	'options' => $choice_opts,
	'width' => '100%'
));
echo form_button('savesettings', $locale['750'], $locale['750'], array('class' => 'btn-success m-b-10'));
closeside();
echo "</div></div>
";
echo form_button('savesettings', $locale['750'], $locale['750'], array('class' => 'btn-success'));
echo closeform();
add_to_jquery("
        $('#photo_watermark').bind('change', function(){
        var vals = $(this).select2().val();
        if (vals == 1) {
            $('#photo_watermark_save').select2('enable');
            $('#delete_watermarks').removeAttr('disabled');
            $('#photo_watermark_image').removeAttr('disabled');
            $('#photo_watermark_text').select2('enable');
            $('#photo_watermark_text_color1').colorpicker('enable');
            $('#photo_watermark_text_color2').colorpicker('enable');
            $('#photo_watermark_text_color3').colorpicker('enable');
        } else {
            $('#photo_watermark_save').select2('disable');
            $('#delete_watermarks').attr('disabled', 'disabled');
            $('#photo_watermark_image').attr('disabled', 'disabled');
            $('#photo_watermark_text').select2('disable');
            $('#photo_watermark_text_color1').colorpicker('disable');
            $('#photo_watermark_text_color2').colorpicker('disable');
            $('#photo_watermark_text_color3').colorpicker('disable');
        }
        });
    ");
function calculate_byte($download_max_b) {
	$calc_opts = array(1 => 'Bytes (bytes)', 1000 => 'KB (Kilobytes)', 1000000 => 'MB (Megabytes)');
	foreach ($calc_opts as $byte => $val) {
		if ($download_max_b/$byte <= 999) {
			return $byte;
		}
	}
	return 1000000;
}

function color_mapper($field, $value) {
	global $gll_settings;
	$cvalue[] = "00";
	$cvalue[] = "33";
	$cvalue[] = "66";
	$cvalue[] = "99";
	$cvalue[] = "CC";
	$cvalue[] = "FF";
	$select = "";
	$select = "<select name='".$field."' class='textbox' onchange=\"document.getElementById('preview_".$field."').style.background = '#' + this.options[this.selectedIndex].value;\" ".(!$gll_settings['photo_watermark'] ? "disabled='disabled'" : "").">\n";
	for ($ca = 0; $ca < count($cvalue); $ca++) {
		for ($cb = 0; $cb < count($cvalue); $cb++) {
			for ($cc = 0; $cc < count($cvalue); $cc++) {
				$hcolor = $cvalue[$ca].$cvalue[$cb].$cvalue[$cc];
				$select .= "<option value='".$hcolor."'".($value == $hcolor ? " selected='selected' " : " ")."style='background-color:#".$hcolor.";'>#".$hcolor."</option>\n";
			}
		}
	}
	$select .= "</select>\n";
	return $select;
}