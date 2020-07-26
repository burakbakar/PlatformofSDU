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