<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
/*
Plugin name: WP Translate
Plugin URI: http://www.google.com
Description: A plugin have a check and translate language
Author: Supphachok Phetkaew
Author URI: http://www.google.com
*/
$team1 = $_POST['$team1'];

function wp_translate_page(){
global $wptranslate_options;
ob_start();?>

<div class="wrap">

<form action="#" method="POST">
<p>
<h1>Translate Team Football Version 1.0</h1>
</p>

<?php
$x = $_POST["team1"];

$check = $_POST["team1"];
$arr = array(
	"France" => "ฝรั่งเศส",
	"English" => "อังกฤษ",
	"Czech Republic" => "สาธารณรัฐเช็ก",
	"Iceland" => "ไอซ์แลนด์",
	"Northern Ireland" => "ไอซ์แลนด์เหนือ",
	"Austria" => "ออสเตรีย",
	"Portugal" => "โปรตุเกส",
	"Spain" => "สเปน",
	"Switzerland" => "สวิตเซอร์แลนด์",
	"Italy" => "อิตาลี่",
	"Belgium" => "เบลเยี่ยม",
	"Wales" => "เวลส์",
	"Romania" => "โรมาเนีย",
	"Albania" => "แอลเบเนีย",
	"Germany" => "เยอร์มนี",
	"Poland" => "โปแลนด์",
	"Russia" => "รัสเซีย",
	"Slovakia" => "สโลวาเกีย",
	"Croatia" => "โครเอเชีย",
	"Turkey" => "ตุรกี"

);
$i = 1;
foreach( $arr as $check ) {
	
		echo "Euro 2016 [$i] : ".$check."<br/>";
		$i++;
	
	}
?>

</form>

<?php

echo ob_get_clean();
}


//admin tab

function wp_translate_tab(){

add_options_page('wp_translate_tab','WP Translate','manage_options','wptranslate','wp_translate_page');

}
add_action('admin_menu','wp_translate_tab');
//register settings

function wp_translate_setting(){

register_setting('wptranslategroup','wptranslatesettings');

}
add_action('admin_init','wp_translate_setting');
?>