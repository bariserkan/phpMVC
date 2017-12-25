<?php
//Anasayfa index
class testKontrol extends kontrol
{
//Anasayfa index bolumu
	public function indexBolum()
	{
		$veri['title'] = 'Test Sayfa';
		return $this->tasarla('test', $veri);
	}
}
