<?php

class denemeKontrol extends kontrol
{
	public function indexBolum()
	{
		$veri['title'] = 'Deneme Sayfa';
		return $this->tasarla('deneme', $veri);
	}		
}
