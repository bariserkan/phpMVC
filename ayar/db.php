<?php
// Veritabanı ayarı
	define('VT_TUR', '3'); //1=> MySQL, 2=> MSSQL, 3=> SQLite (MSSQL denenmemiştir)
	define('VT_HOST', 'ornek.db3'); //Veritabanı host, SQLite ise dosya adı (Örnek: vt.db, veritabanlari/vt.sqlite)
	define('VT_KUL', 'root'); //Veritabanı kullanıcı adı, SQLite ise boş bırakılabilir
	define('VT_SIF', ''); //Veritabanı şifre, SQLite ise boş bırakılabilir
	define('VT_AD', 'mvcblog'); //Veritabanı adı, SQLite ise boş bırakılabilir
	define('VT_CHARSET', 'utf8'); //Veritabanı charset, SQLite ise boş bırakılabilir

	//Örnek DSN=> 'mysql:host=localhost;dbname=mvcblog;charset=utf8'
	define('VT_DSN', ''); //DSN dolu ise ona göre işlem yapılır.