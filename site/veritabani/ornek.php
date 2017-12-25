<?php
/* Örnek vt dosyası 
Aşağıda örnek kullanımlar gösterilmiştir
*/
class ornek extends veritabani
{
	public function tumunuGetir() //tum verileri getirme (select)
	{
		return $this->tumVeriyiGetir('SELECT * FROM ornek ORDER BY created DESC');
	}

	public function getir($id) //tek veriyi getirme (select)
	{
		return $this->veriGetir('SELECT * FROM ornek WHERE id=?', [$id]);
	}

	public function ekle($a, $b, $c, $d) //veri ekleme (insert)
	{
		return $this->sorgu('INSERT INTO ornek (a, b, c, d) VALUES (?, ?, ?, ?)', [$a, $b, $c, $d]);
	}

	public function guncelle($a, $b, $c, $d, $id) //veri guncelleme (update)
	{
		return $this->sorgu(
			'UPDATE ornek SET (a = ?, b = ?, c = ?, d = ?) WHERE id=?', 
			[$a, $b, $c, $d, $id]
		);
	}

	public function sil($id) //veri silme(delete)
	{
		return $this->sorgu('DELETE FROM ornek WHERE id=?', [$id]);
	}
}