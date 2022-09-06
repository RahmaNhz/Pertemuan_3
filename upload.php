<?php

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
	echo "nama anda: ".$_POST['namaku']." <br> NIM: ".$_POST['nim'];
    echo "<br>Upload Anda berhasil!";
    echo "<br>Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
	 echo "<br> foto diri : <br> <img src='".$dirUpload.$namaFile."' alt='' width='200' >";
} else {
    echo "Upload Gagal!";
}

?>