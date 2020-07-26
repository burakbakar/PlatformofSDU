
<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
        <style type="text/css">
        body {
	background-image: url(background-website-E280AB403608205E280AC-E280ABE280AC.jpg);
}
        </style>
        <title>signup</title>
    </head>
    <body>
        <form class="form-signup">
            <div class="container">
                <h2>Kayıt</h2>
                <label for="name">Ad</label>
                    <br>
                    <input id="name" type="text" name="uyeadi" placeholder="İsim" required autofocus>
                    <br>
                <label for="surname">Soyad</label>
                    <br>
                    <input id="surname" type="text" name="uyesoyadi" placeholder="Soyad" required>
                    <br>
                <label for="mail">E-posta</label>
                    <br>
                    <input id="email" type="text" name="uyeemail" placeholder="E posta" required>
                    <br>
                <label for="username">Kullanıcı Adı</label>
                    <br>
                    <input id="uname" type="text" name="uyekullaniciadi" placeholder="Kullanıcı Adı" required>
                    <br>
                <label>Şifre</label>
                    <br>
                    <input type="text" name="uyesifre" placeholder="Şifre" required>
                    <br>
               
                    <button onclick="location.href='#'" type="button" id="kbtn">Kaydol</button>
            </div>
        </form>
<?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
	
	
	$uyeadi = $_POST['uyeadi']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
	$uyesoyadi = $_POST['uyesoyadi'];
	$uyeemail=$_POST['uyeemail'];
	$uyekullaniciadi=$_POST['uyekullaniciadi'];
	$uyesifre=$_POST['uyesifre'];
	if ($uyeadi<>"" && $uyeemail<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
		
		if ($baglanti->query("INSERT INTO uyeler (uyeadi,uyesoyadi,uyeemail,uyekullaniciadi,uyesifre) VALUES ('$uyeadi','$uyesoyadi','$uyeemail','$uyekullaniciadi','$uyesifre')")) // Veri ekleme sorgumuzu yazıyoruz.
		{
			echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
			
			header("Refresh: 7; url=login.html");
		}
		else
		{
			echo "Hata oluştu";
		}

	}

}

?>
    </body>
</html>
