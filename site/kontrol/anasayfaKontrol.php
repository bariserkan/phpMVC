<?php
//Anasayfa index
class anasayfaKontrol extends kontrol
{
//Anasayfa index bolumu
	public function indexBolum()
	{
		$veri['title'] = 'Ana Sayfa';
		$vt = $this->veritabani('SQLite');	
		$veri['vt'] = $vt->tumunuGetir();
		return $this->tasarla('anasayfa', $veri);
	}
}
