# phpMVC
PHP ile yazılmış basit MVC yapısı

Model -> site/veritabani<br>
View -> site/tasarim<br>
Controller -> site/kontrol<br>

<h2>Düzenlenicek Dosyalar</h2>
<h3>*ayar/ayar.php</h3>
Site adı, site url, hata sayfası, bakım sayfası ve hata raporlama gibi özelliklerin belirleneceği dosya<br>
<h3>*ayar/db.php</h3>
Veri tabanı özelliklerinin belirleneceği dosya <br><br>
<h2>Kullanış (dizin/site/)</h2>
Sayfa oluşturmak için(Controller) site/kontrol klasörü altına "Sayfa Adı"Kontrol.php dosyası oluşturulur.(..siteurl/sayfaAdi)
İçine sayfa adı içeren sınıf yapısı aşağıdaki gibi oluşturulur.<br><br>
<code> class yenisayfaKontrol extends kontrol { </code></br>
<code> }</code><br><br>
Bölüm oluşturmak için "Sayfa Adı"Kontrol.php dosyası içine ilgili bolüm adı içeren fonksiyon oluşturulur.(..siteurl/sayfaAdi/bolumAdi)<br><br>
<code> class yenisayfaKontrol extends kontrol{</code></br>
<code> 	public function indexBolum() //index ana bölümdür</code></br>
<code> 	{</code><br>
<code> 		$veri['title'] = 'Yeni Sayfa';</code><br>
<code> 		return $this->tasarla('yenisayfa', $veri); //Çağrılacak tasarım dosyası ve tasarım dosyasından çeilecek veriler</code><br>
<code> 	}</code><br>
<code> }</code><br><br>
