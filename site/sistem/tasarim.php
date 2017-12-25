<?php

class tasarim
{
//Tasarım klasörü içinden ilgili sayfanın çağrılması ve verilerin aktarılması 
    public static function tasarla($tasarim, array $veriler = [])
    {
        if (file_exists($dosya = TDIR."/{$tasarim}.php")) //
        {            
            //Dizi halinde gönderilen verilerin extract fonksiyonu ile değişken haline döndürülmesi
            extract($veriler); 

            ob_start(); 

            require $dosya; //Sayfanın tasarım dosyasını çağırma

            echo ob_get_clean(); //Çıktı tamponun içeriğini döndürüp silme
        } 
        else //sayfanın tasarım dosyası yoksa hata
        {
            hata($tasarim,"E4");
        }
    }
}
