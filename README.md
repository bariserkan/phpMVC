# phpMVC
PHP ile yazılmış basit MVC yapısı

Model -> site/veritabani<br>
View -> site/tasarim<br>
Controller -> site/kontrol<br>

<h3>Kullanış</h3>
Sayfa oluşturmak için(Controller) site/kontrol klasörü altına "Sayfa Adı"Kontrol.php dosyası oluşturulur.(..siteurl/sayfaAdi)
İçine sayfa adı içeren sınıf yapısı aşağıdaki gibi oluşturulur.<br><br>
<code> class anasayfaKontrol extends kontrol { </code></br>
<code> }</code><br><br>
Bölüm oluşturmak için "Sayfa Adı"Kontrol.php dosyası içine ilgili bolüm adı içeren fonksiyon oluşturulur.(..siteurl/sayfaAdi/bolumAdi)<br><br>
<code> class yenisayfaKontrol extends kontrol{</code></br>
<code> 	public function indexBolum() //index ana bölümdür</code></br>
<code> 	{</code><br>
<code> 		$veri['title'] = 'Yeni Sayfa';</code><br>
<code> 		return $this->tasarla('anasayfa', $veri);</code><br>
<code> 	}</code><br>
<code> }</code><br><br>
