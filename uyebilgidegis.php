<?php
$yenieposta=$_POST['inputEmail']; 
$yenisifre=$_POST['inputSifre'];

$baglan=mysqli_connect("localhost","root","","ybs"); 

$uyeguncelle=mysqli_query($baglan, "UPDATE uye SET eposta='$yenieposta', sifre='$yenisifre'  WHERE 1 LIMIT 1");

$sonuc=mysqli_query($baglan,$uyeguncelle);

if ($uyeguncelle==0){
    echo "hata oluştu";
}else{
    echo "Bilgileriniz Güncellendi";
}

?> 
