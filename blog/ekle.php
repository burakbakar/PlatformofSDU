<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>


<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #FFF;
	background-repeat: repeat;
}
.footer-caner4{background-color:#292c2f;box-shadow:0 1px 1px 0 rgba(0,0,0,0.12);box-sizing:border-box;width:100%;font:bold 16px sans-serif;text-align:left;padding:50px 60px;margin-top:80px;overflow:hidden}
.footer-caner4 .footer-left{float:left}
.footer-caner4 .footer-links{color:#fff;margin:0 0 10px;padding:0}
.footer-caner4 .footer-links a{display:inline-block;line-height:1.8;text-decoration:none;color:inherit}
.footer-caner4 .footer-canerhh4{color:#8f9296;font-size:14px;font-weight:400;margin:0}
.footer-caner4 .footer-right{float:right}
.footer-caner4 form{position:relative}
.footer-caner4 form input{display:block;border-radius:3px;box-sizing:border-box;background-color:#1f2022;box-shadow:0 1px 0 0 rgba(255,255,255,0.1);border:none;font:inherit;font-size:14px;font-weight:400;color:#d1d2d2;width:500px;padding:18px 50px 18px 18px}
.footer-caner4 form input:focus{outline:none}
.footer-caner4 form input::-webkit-input-placeholder{color:#5c666b}
.footer-caner4 form input::-moz-placeholder{opacity:1;color:#5c666b}
.footer-caner4 form input:-ms-input-placeholder{color:#5c666b}
.footer-caner4 form i{width:18px;height:18px;position:absolute;top:16px;right:18px;color:#d1d2d2;font-size:18px}
@media (max-width: 1000px) {
.footer-caner4 form input{width:300px}
}
@media (max-width: 800px) {
.footer-caner4{padding:30px;text-align:center;font:bold 14px sans-serif}
.footer-caner4 .footer-canerhh4{margin-top:10px;font-size:12px}
.footer-caner4 .footer-left,.footer-caner4 .footer-right{float:none;max-width:300px;margin:0 auto}
.footer-caner4 .footer-left{margin-bottom:20px}
.footer-caner4 form input{width:100%}
}
body,td,th {
	font-weight: bold;
}

#form1 center table tr td {
	color: #2A0000;
}
.a{
	width:200px;
	height:10px;
	
	}
	.img{
	margin-left:-120px;
	
	}
</style>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<div class="container">
<div class="col-md-6">
<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>İtiraf Başlık</td>
			<td><input type="text" name="itirafBaslik" class="form-control" ></td>
		</tr>

		<tr>
			<td>İtiraf İçerik</td>
			<td><textarea name="itirafİcerik" class="form-control" ></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
		</tr>

	</table>

</form>



<!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

<?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
	
	
	$itirafBaslik = $_POST['itirafBaslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
	$itirafİcerik = $_POST['itirafİcerik'];

	if ($itirafBaslik<>"" && $itirafİcerik<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
		
		if ($baglanti->query("INSERT INTO itiraflar (itirafBaslik,itirafİcerik) VALUES ('$itirafBaslik','$itirafİcerik')")) // Veri ekleme sorgumuzu yazıyoruz.
		{
			echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
		}
		else
		{
			echo "Hata oluştu";
		}

	}

}

?>
</div>
<!-- ############################################################## -->

<!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->

<div class="col-md-7">
<table class="table">
	
	<tr>
		<th>No</th>
		<th>İtiraf Başlık</th>
		<th>İtiraf İçerik</th>
		<th></th>
		<th></th>
	</tr>

<!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->
<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<?php 

$sorgu = $baglanti->query("SELECT * FROM itiraflar"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) { 

$id = $sonuc['itirafid']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$itirafBaslik = $sonuc['itirafBaslik'];
$itirafİcerik = $sonuc['itirafİcerik'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
?>
	
	<tr>
		<td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
		<td><?php echo $itirafBaslik; ?></td>
		<td><?php echo $itirafİcerik; ?></td>
		<td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
		<td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
	</tr>

<?php } // Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. ?>

</table>
</div>
</div>
</body>
</html>