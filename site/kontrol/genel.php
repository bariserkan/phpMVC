<?php
//Hata - Bakım ve genel özelliklerin ekleneceği sayfa
class genel extends kontrol
{
	public function hataBolum()
	{
		$veri['title'] = '404 Hata';
		return $this->tasarla('hata', $veri);
	}

	public function bakimBolum()
	{
		$veri['title'] = 'Bakımda';
		return $this->tasarla('bakim', $veri);
	}
}
