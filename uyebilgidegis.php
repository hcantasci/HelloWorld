<?php
$yeniisim=$_POST['inputEmail']; // Yeni ismi formdan aldık
$yenisoyisim=$_POST['inputSifre'];

$baglan=mysqli_connect("localhost","root","","ybs"); 

$uyeguncelle=mysqli_query($baglan, "UPDATE uye SET eposta='$yeniisim', sifre='$yenisoyisim'  WHERE 1 LIMIT 1");

$sonuc=mysqli_query($baglan,$uyeguncelle);

if ($uyeguncelle==0){
    echo "hata oluştu";
}else{
    echo "Bilgileriniz Güncellendi";
}

?> 