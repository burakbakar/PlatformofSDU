<?php
$gelen = $_POST["arama"];
if($gelen == null){
header("location:son.php");
}

$cek = $db->query("select * from itiraflar where itirafBaslik like '%$gelen%' ",PDO::FETCH_ASSOC);
?>