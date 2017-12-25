<?php

class veritabani
{
	public $db;

	public function veritabani() //veritabanı bağlantısı kurulur
	{
		try
		{
			if(empty(VT_DSN))
			{
				if(VT_TUR == 1) //MySQL
					$dsn = "mysql:host=".VT_HOST.";dbname=".VT_AD.";charset=".VT_CHARSET;
				else if(VT_TUR == 2) //MSSQL
					$dsn = "sqlsrv:Server=".VT_HOST.";Database=".VT_AD.";charset=".VT_CHARSET;
				else if(VT_TUR == 3) //SQLite
				{
					if(file_exists(VT_HOST))
						$dsn = "sqlite:".VT_HOST;
					else
						hata(VT_HOST, "E9");
				}
				else
					hata(VT_TUR, "E8");
			}
			else
				$dsn = VT_DSN;
			$this->db = new PDO($dsn, VT_KUL, VT_SIF);
		}
		catch(PDOException $e)
		{
			hata($e->getMessage(),"E7");
		}

	}

	public function veriGetir($sorgu, array $deger = []) //tek satır veri getir
	{
		$vt = $this->db->prepare($sorgu);
		$vt->execute($deger);
		return $vt->fetch();
	}

	public function tumVeriyiGetir($sorgu, array $deger = []) //çoklu veri getir
	{
		$vt = $this->db->prepare($sorgu);
		$vt->execute($deger);
		return $vt->fetchAll();
	}

	public function sorgu($sorgu, array $deger = []) //istenilen sorgunun çalıştırılması
	{
		$vt = $this->db->prepare($sorgu);
		return $vt->execute($deger);
	}
}
