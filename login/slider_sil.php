<?php
$slider_id=$_GET["id"];
?>
<div class="content">
<?php
$silsql="Delete from slider where  slider_id='$slider_id'";
$sil=mysqli_query($baglan, $silsql);
if($sil){
			message("success","check"," Başarılı", "Silme işlemini başarılı bir şekilde gerçekleştirdiniz. Lütfen bekleyiniz yönlendiriliyorsunuz");
			header("Refresh:3; url = http://localhost/pharmacy_shopping/login/yonetici.php?do=slider_islemleri", true, 303);
		}else{
			message("warning","exclamation-triangle"," Başarısız", " Seçilen kullanıcı silinememiştir. Lütfen tekrar deneyiniz.  ");
		}
?>
</div>