<?php 
//Kolay kullanım için fonksiyon dosyası
	function yonlendir($uzanti)
	{
		header("Location: ".URL."/{$uzanti}");
		exit;
	}
	
	function url_yonlendir($url)
	{
		header("Location: {$url}");
		exit;
	}
	
	function sureli_yonlendir($uzanti, $sure)
	{
		header("Refresh: {$sure}; url=".URL."/{$uzanti}");
	}
	
	function sureli_url_yonlendir($url, $sure)
	{
		header("Refresh: {$sure}; url={$url}");
	}

	function bakim_kontrol() //Bakım varsa bu fonksiyon çalıştırılır site sayfalarına erişim engellenir
	{
		$sistem = new sistem;
		$sistem->sayfa = "genel";
		$sistem->bolum = "bakimBolum";		
		$sistem->baslat();
	}

	function hata($hata, $kod)
	{
		if(HATA == 1) // hata sayfaları aktifse 404 vb.
		{			
			$sistem = new sistem;
			$sistem->sayfa = "genel";
			$sistem->bolum = "hataBolum";
			$sistem->baslat();
		}
		else
		{
			$hata = iconv("ISO-8859-9","UTF-8",$hata);	
			if($kod == "E1")	  // sistem/sistem.php
				$mesaj = "Kontrol dosyası bulunamadı! (".$hata.".php)";
			else if($kod == "E2") // sistem/sistem.php
				$mesaj = "Sınıf bulunamadı! (".$hata.")";
			else if($kod == "E3") // sistem/sistem.php
				$mesaj = "Bolum bulunamadı! (".$hata.")";
			else if($kod == "E4") // sistem/tasarim.php
				$mesaj = "Tasarım dosyası bulunamadı! (".$hata.")";
			else if($kod == "E5") // sistem/kontrol.php
				$mesaj = "Veritabanı dosyası bulunamadı! (".$hata.".php)";
			else if($kod == "E6") // sistem/kontrol.php
				$mesaj = "Veritabanı dosyasında sınıf tanımlı değil! (".$hata.")";
			else if($kod == "E7") // sistem/veritabani.php
				$mesaj = "Veritabanı bağlantı hatası! (".$hata.")"; 
			else if($kod == "E8") // sistem/veritabani.php
				$mesaj = "Veritabanı tür sorunu! (Yanlış değer: ".$hata.")"; 
			else if($kod == "E9") // sistem/veritabani.php
				$mesaj = "Veritabanı dosyası bulunamadı!  (".$hata.")"; 
			else
				$mesaj = $hata;
			//Tasarım klasörü yolu belirleme
			$TDIR = explode("/",TDIR);
			$tasarimYol = $TDIR[count($TDIR)-1];
			
			echo('<html><head><title>HATA ('.$kod.')</title></head>			

			<link rel="stylesheet" href="'.SURL.'/'.$tasarimYol.'/css/bootstrap.min.css"></head>
			<body>
				<div class="alert alert-danger" role="alert">
					<center><h3><b>HATA '.$kod.":</b> ".$mesaj.'</h3></center>
				</div>
			</body>
			</html>');	
			exit;
		}
	}
	

