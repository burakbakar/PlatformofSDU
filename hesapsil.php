<?php 


if ($_GET) 
{

include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

if ($baglanti->query("DELETE FROM uyeler WHERE uyeid =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:login.html"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>