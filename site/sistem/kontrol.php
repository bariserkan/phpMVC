<?php

class kontrol
{
	public function tasarla($dosya, array $parametre = [])
	{
		return tasarim::tasarla($dosya, $parametre); //Tasarim sınıfındaki tasarla fonksiyonunu çağırıyoruz 
	}
	
/*Kontrolcu dosya üzerinden veritabanı işlemleri için kullanılır
Veritabanı klasoru altında oluşturulan ilgili sınıfı barındıran dosya çağrılarak kullanılır */
	public function veritabani($veritabani) 
	{
		if (file_exists($dosya = VDIR."/{$veritabani}.php")) //Veritabanı klasörü içinde ilgili dosya varmı
		{
			require_once $dosya; //varsa dosya çağrılır

			if (class_exists($veritabani)) //İlgili dosya içinde veritabanı sınıf varmı
			{
				return new $veritabani; // varsa sınıf çağrılır
			} 
			else //sınıf yoksa hata
			{
				hata($veritabani,"E6");
			}
		} 
		else //dosya yoksa hata
		{
			hata($veritabani,"E5");
		}
	}
}
