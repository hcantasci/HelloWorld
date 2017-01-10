<?php
$eposta= $_POST['inputEmail'];
$sifre= $_POST['inputSifre'];

$baglan=mysqli_connect("localhost","root","","ybs"); 

$veriekle="INSERT INTO uye(eposta,sifre) VALUES ('$eposta','$sifre')";

$sonuc=mysqli_query($baglan,$veriekle);

if ($sonuc==0){
     echo "Eklenemedi, kontrol ediniz";
}else{
     header("Location:uyepanel.php");
    
}
?>