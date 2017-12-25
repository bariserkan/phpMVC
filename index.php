<?php 
//Özel ayarlar
	define('ROOT_DIR', __DIR__); // Kök dizin 
	define('AYAR_DIR', 'ayar'); //Ayar klasör adı
//Ayarlar
	require_once(AYAR_DIR."/ayar.php");
	require_once(AYAR_DIR."/sistem.php");
	require_once(AYAR_DIR."/db.php");
//Sistem dizininden ana dosyalar çekilir
	require_once(SISTEM_DIR.'/fonksiyon.php');
	require_once(SISTEM_DIR.'/sistem.php');
	require_once(SISTEM_DIR.'/veritabani.php');
	require_once(SISTEM_DIR.'/tasarim.php');
	require_once(SISTEM_DIR.'/kontrol.php');
//Sistemin başlatılması
	$sistem = new sistem; //Ana sistem 
	$sistem->baslat(); //Sistem başlat
?>
