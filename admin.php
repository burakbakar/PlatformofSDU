<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
</style>
</head>

<body background="background-website-E280AB403608205E280AC-E280ABE280AC.jpg">
<form id="form1" name="form1" method="post" action="">
 <center> <table width="1000" height="100" border="0">
    <tr>
      <td><blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <p><img src="banner.png" width="461" height="77" /></p>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote></td>
    </tr>
  </table>
   <table width="1000" height="50" border="1">
     <tr>
       <td width="113"><a href="son.html">ANA SAYFA</a></td>
       <td width="83"><a href="profil.html">PROFİL</a></td>
       <td width="233"><a href="hakkında.html">ÜNİVERSİTEMİZ HAKKINDA</a></td>
       <td width="100"><a href="iletisim.html">İLETİŞİM</td>
       <td width="130"><a href="itirafet.html">İTİRAF EKLE</td>
       <td width="216"><input name="ara" type="text" id="ara" value="Ara" />
        <input type="submit" name="button17" id="button17" value="Arama" /></td>
       <td width="95"><a href="login.html"> ÇIKIŞ</td>
     </tr>
   </table>
   <p><span id="sprytextfield1"> <span class="textfieldRequiredMsg"></span></span></p>
   <div align="center">GELEN İTİRAFLAR
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
<center>
<table border="10" width="1000" height="100">
<tr>

<td>
<?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?>
</td>
<td><?php echo $itirafBaslik; ?></td>
<td><?php echo $itirafİcerik; ?></td>
<td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
<td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
<td><a href="vtekleme.php" class="btn btn-danger">Onayla</a></td>


<td><a href="" class="btn btn-danger">

  



</tr>
</table>
</center>
	


<?php } // Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz. ?>
    
     <p>GELEN YORUMLAR</p>
     
     <p>UYARI/ENGELLEME</p>
     <table width="1000" border="1">
       <tr>
         <td><label for="textfield"></label>
           Kullanıcı Adı:
             <input type="text" name="textfield" id="textfield" />
             <input type="submit" name="button13" id="button10" value="Uyar" />
             <input type="submit" name="button14" id="button18" value="Engelle" /></td>
       </tr>
     </table>
   </div>
  <p>&nbsp;</p></center>
 
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
<footer class="footer-caner4">
<div class="footer-left">
<p class="footer-links">
<a href="son.html">ANA SAYFA</a>
·
<a href="profil.html">PROFİL</a></td>
·
<a href="hakkında.html">ÜNİVERSİTEMİZ HAKKINDA</a>
·
<a href="iletisim.html">İLETİŞİM</td>
·

</p>
<p class="footer-canerhh4">© 2019 Tüm Hakları Saklıdır.</p>
</div>
<div class="footer-right">
<form method="get" action="#">
<input placeholder="Sitede arayın.." name="search" />
<i class="fa fa-search"></i>
</form>
</div>
</footer>
</body>
</html>
