<?php
	date_default_timezone_set("Asia/Jakarta");	
	error_reporting(1);
	
    $db_host = "";
	$db_user = "";
    $db_name = "";
    $db_pass = "";

    //$conn = new mysqli($host,$db_user,$db_pass,$db_name);
	$koneksi = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

	//ALAMAT SITE
	$site = "http://localhost/ehadir/";

	function rupiah($angka){
		$hasil_rupiah = "" . number_format($angka,2,',','.');
		return $hasil_rupiah;
	}

	function ubahwaktu($date){
		$date=date("d/m/Y H:i",strtotime($date)); 
		return $date;
	}

	function ubahjam($date){
		$date=date("H:i",strtotime($date)); 
		return $date;
	}

	function ubahtanggal($date){
		$date=date("d/m/Y",strtotime($date)); 
		return $date;
	}


	function ubahsqltanggal($date){
		$date=date("Y-m-d",strtotime($date)); 
		return $date;
	}

	

?>