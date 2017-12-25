<?php
//Site bilgi ayarları
//Düzenlenebilir
	define('SITE_ADI', 'Ornek SITE'); //Site URL	
	define('URL', 'http://localhost/siteMVC'); //Site URL
	define('HATA', '0'); // Hata Sayfaları: 1 Aktif - 0 Deaktif
	define('BAKIM', '0'); // Bakım Sayfası: 1 Aktif - 0 Deaktif
	define('HATA_RAPORLAMA', '1'); // Sayfalardaki hataları raporlama: 1 Açık - 0 Kapalı
//Düzenlenmesi önerilmez
	define('ANASAYFA', 'anasayfa'); // Ana sayfanın olduğu dizin kontrol dosyası Örn:(anasayfa => anasayfaKontrol)
	define('SYOL', 'site'); //Site ana klasor
	define('SURL', URL."/".SYOL); //Site ana dizin URL