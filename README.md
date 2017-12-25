# phpMVC
PHP ile yazılmış basit MVC yapısı

Model -> site/veritabani<br>
View -> site/tasarim<br>
Controller -> site/kontrol<br>

<h3>Kullanılış</h3>
Sayfa oluşturmak için(Controller) site/kontrol klasörü altına "Sayfa Adı"Kontrol.php dosyası oluşturulur.(..siteurl/sayfaAdi)
İçine sayfa adı içeren sınıf yapısı aşağıdaki gibi oluşturulur.
<code> class anasayfaKontrol extends kontrol
//Anasayfa index bolumu
	public function indexBolum() //index ana bölümdür
	{<br>
		$veri['title'] = 'Ana Sayfa';
		$vt = $this->veritabani('SQLite');	
		$veri['vt'] = $vt->tumunuGetir();
		return $this->tasarla('anasayfa', $veri);
	}
}</code>


Bölüm oluşturmak için "Sayfa Adı"Kontrol.php dosyası içine ilgili bolüm adı içeren fonksiyon oluşturulur.(..siteurl/sayfaAdi/bolumAdi)
