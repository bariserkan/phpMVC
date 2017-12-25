<?php
//Hata - Bakım ve genel özelliklerin ekleneceği sayfa
class genel extends kontrol
{
	public function hataBolum()
	{
		$veri['title'] = '404 Hata';
		$veri['baslik'] = '404 Hata!';
		$veri['icerik'] = $_GET['url'].' sayfası bulunamadı';
		return $this->tasarla('hata', $veri);
	}

	public function bakimBolum()
	{
		$veri['title'] = 'Bakımda';
		$veri['baslik'] = 'Bakımda!';
		$veri['icerik'] = 'Bu Web Sitesi Bakım Dolayısıyla Kapalıdır!';
		return $this->tasarla('bakim', $veri);
	}
}
