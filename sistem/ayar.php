<?php
	# html En Üstünde Kullanılır #
	session_start();
	ob_start();
	//error_reporting(0);
	
    # Bağlantı Değişkenleri #
    
	$host="localhost";
	$kullanici="root";
	$sifre="";
	$veritabaniadi="pharmacy_shopping";
	
	# MYSQL Bağlantısı #
	
	$baglan= mysqli_connect($host,$kullanici,$sifre,$veritabaniadi) or die();
    	
	# Ayarlar Tablosundaki Verileri Çektim #
	
	$query = mysqli_query($baglan, "select * from ayarlar");
	
	# Veri tabanındaki ayarlar tablosunda verileri dizi şeklinde satır değişkenine aktardı. #
	$satir = mysqli_fetch_array($query);
		
	define ("TEMA_URL", $satir["site_url"]."/tema/".$satir["site_tema"]."/");
	define ("SİTE_URL", $satir["site_url"]."/");
?>