<?php

class post extends veritabani
{
	public function tumunuGetir() //tum verileri getirme (select)
	{
		return $this->tumVeriyiGetir('SELECT * FROM post ORDER BY created DESC');
	}

	public function getir($id) //tek veriyi getirme (select)
	{
		return $this->veriGetir('SELECT * FROM post WHERE id=?', [$id]);
	}

	public function ekle($title, $body, $tags, $created) //veri ekleme (insert)
	{
		return $this->sorgu(
			'INSERT INTO post (title, body, tags, created) VALUES (?, ?, ?, ?)', 
			[$title, $body, $tags, $created]
		);
	}

	public function guncelle($title, $body, $tags, $created, $id) //veri guncelleme (update)
	{
		return $this->sorgu(
			'UPDATE post SET (title = ?, body = ?, tags = ?, created = ?) WHERE id=?', 
			[$title, $body, $tags, $created, $id]
		);
	}

	public function sil($id) //veri silme(delete)
	{
		return $this->sorgu('DELETE FROM post WHERE id=?', [$id]);
	}
}