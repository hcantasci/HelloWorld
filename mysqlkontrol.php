<?php
$baglan=mysqli_connect("localhost","root","","ybs");
if($baglan){
    echo "baglanti kuruldu";
}else{
    echo "baglanti basarisiz oldu";
}
?>