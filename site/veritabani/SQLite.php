<?php
//SQLite ornek 
class SQLite extends veritabani
{
	public function tumunuGetir() //tum verileri getirme (select)
	{
		return $this->tumVeriyiGetir('SELECT * FROM ornek');
	}

	public function getir($id) //tek veriyi getirme (select)
	{
		return $this->veriGetir('SELECT * FROM ornek WHERE id=?', [$id]);
	}

	public function ekle($icerik) //veri ekleme (insert)
	{
		return $this->sorgu(
			'INSERT INTO ornek (icerik) VALUES (?)', 
			[$icerik]
		);
	}

	public function guncelle($icerik, $id) //veri guncelleme (update)
	{
		return $this->sorgu(
			'UPDATE ornek SET (icerik = ?) WHERE id=?', 
			[$icerik]
		);
	}

	public function sil($id) //veri silme(delete)
	{
		return $this->sorgu('DELETE FROM ornek WHERE id=?', [$id]);
	}
}