<?php
require("mysqlkontrol.php");
$eposta=$_POST["inputEmail"];
$sifre=$_POST["inputSifre"];
$sorgula=mysqli_query($baglan, " SELECT * from uye WHERE eposta='".$eposta."' AND sifre='".$sifre."'");
if(mysqli_num_rows($sorgula)>0){
    while($row=mysqli_fetch_assoc($sorgula)){
        header("Location:uyepanel.php");
    }
}else{
    echo " Sorgu gerçekleşmedi";
}
?>