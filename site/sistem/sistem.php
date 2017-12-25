<?php
	class sistem
	{
		public $sayfa, $bolum, $parametre;

		public function sistem()
		{
			if(HATA_RAPORLAMA == 0)
				error_reporting(0);

			if(isset($_GET['url']) && !empty($_GET['url'])) //Bakım yoksa ve bir sayfa çağrıldıysa
				$url = trim($_GET['url'], '/');
			else //Anasayfada ise
				$url = ANASAYFA;
			$url = explode('/', $url); //url sayfa/bolum/parametre... olarak ayrılır					
			
			if(BAKIM == 1)
			{				
				if(isset($_GET['url']) && $_GET['url'] != "")
					yonlendir("");
				$this->sayfa = 'genel';
				$this->bolum = 'bakimBolum';
			}
			else
			{
				$this->sayfa = isset($url[0]) ? $url[0].'Kontrol' : ANASAYFA.'Kontrol'; //sayfa url[0] degiskene atandı		
				$this->bolum = isset($url[1]) ? $url[1].'Bolum' : 'indexBolum';	 //bolum url[1] degiskene atandı
				
				// sayfa ve bolum kaldırıldı url dizisi sadece parametre gostericek
				array_shift($url);
				array_shift($url); 
			}
			$this->parametre = $url; //url dizisi parametre degiskenine atandı			
		}		
		
		public function baslat()
		{
			//gidilen sayfanın kontrolcusu kontrol dizininde varmı		
			if (file_exists($dosya = KDIR."/{$this->sayfa}.php"))
			{
				require_once $dosya; //sayfa varsa çağırıyoruz
				if (class_exists($this->sayfa)) //kontrolcu icinde sayfanın sınıfı varmı
				{
					$sayfa = new $this->sayfa; //sayfanın kontrolcusunu cagırarak sayfa degiskenine atadık 
					if (method_exists($sayfa, $this->bolum))  //sınıfın icinde belirtilen bolum varmı
					{
						// call_user_func ile belirtilen class icindeki fonksiyona dogrudan ulasıyoruz
						call_user_func_array([$sayfa, $this->bolum], $this->parametre);
					} 
					else //bolum yoksa hata
					{
						hata($this->bolum,"E3"); // hata("ilgili hata kontrolcusu,bolumu,sınıfı", "hata kodu");
					}
				} 
				else // sınıf yoksa hata
				{
					hata($this->sayfa,"E2");
				}
			}
			else if($this->sayfa == ANASAYFA."Kontrol")
			{
				$this->baslangic();
			}
			else // kontrolcusu yoksa hata
			{			
				hata($this->sayfa,"E1");
			}
		}

		function baslangic()
		{
			$TDIR = explode("/",TDIR);
			$tasarimYol = $TDIR[count($TDIR)-1];
			echo('<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Hoş Geldiniz</title>
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="'.SURL."/".$tasarimYol.'/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css">
  </head>

  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container"> 
          <main role="main" class="inner cover">
            <h1 class="cover-heading">Hoşgeldiniz!</h1>
            <p class="lead">Kullanıma başlamadan önce ilk olarak <b><u>ayar/ayar.php</u></b> dosyasını düzenlemelisiniz.
            <br>
            İkinci olarak <b><u>site/kontrol/anasayfaKontrol.php</b></u> dosyası oluşturarak anasayfanızı oluşturabilirsiniz.
			<br>
			Test sayfasına gitmek için  <a href="./test"> <b>buraya</b></a> tıklayabilirsiniz.<br>
            Kullanışla ilgili detaylı bilgi almak için github sayfasına bakabilirsiniz.</p>
            <p class="lead">
              <a href="https://github.com/bariserkan/phpMVC" target="_blank" class="btn btn-lg btn-secondary"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
            </p>
          </main>
          <footer class="mastfoot">
            <div class="inner">
              <p>Yazılım: <a href="http://www.bariserkan.com/">Barış Erkan</a></p>
            </div>
          </footer>
        </div>

      </div>

    </div>
  </body>
</html>');
		}
	}
?>