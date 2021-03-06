<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Veritabanı İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<?php 

$sorgu = $baglanti->query("SELECT * FROM itiraflar WHERE itirafid =".(int)$_GET['id']); //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
<div class="col-md-6">

<form action="" method="post">
	
	<table class="table">
		
		<tr>
			<td>Başlık</td>
			<td><input type="text" name="itirafBaslik" class="form-control" value="<?php echo $sonuc['itirafBaslik']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>"></td>
		</tr>

		<tr>
			<td>İçerik</td>
			<td><textarea name="itirafİcerik" class="form-control"><?php echo $sonuc['itirafİcerik']; ?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
		</tr>

	</table>

</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
	
	$itirafBaslik = $_POST['itirafBaslik']; // Post edilen değerleri değişkenlere aktarıyoruz
	$itirafİcerik = $_POST['itirafİcerik'];

	if ($itirafBaslik<>"" && $itirafİcerik<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
		
		if ($baglanti->query("UPDATE itiraflar SET itirafBaslik = '$itirafBaslik', itirafİcerik = '$itirafİcerik' WHERE itirafid =".$_GET['id'])) // Veri güncelleme sorgumuzu yazıyoruz.
		{
			header("location:son.php"); // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
		}
		else
		{
			echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
		}

	}

}

?>

</body>
</html>