<?php 

if ($_GET) 
{

include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

if ($baglanti->query("DELETE FROM yorum WHERE yorumid =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:son.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}

}

?>