<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
if ($_SERVER("REQUEST_METHOD") === "POST"){
    $nama = $_POST['nama_mobil'];
    $brand = $_POST['brand_mobil'];
    $warna = $_POST['warna_mobil'];
    $tipe = $_POST['tipe_mobil'];
    $harga = $_POST['harga_mobil'];
    mysqli_query($connection, "UPDATE showroom_mobil SET nama_mobil='$nama', brand_mobil='$brand', warna_mobil='$warna', tipe_mobil='$tipe', harga_mobil='$harga' WHERE id ='$id'");


    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL
    $query = mysqli_query($connection, "UPDATE showroom_mobil SET nama_mobil='$nama', brand_mobil='$brand', warna_mobil='$warna', tipe_mobil='$tipe', harga_mobil='$harga' WHERE id ='$id'");
        // Buatkan kondisi jika eksekusi query berhasil
    if($query){
        return true;
    }else{
        echo "Error Updating";
    }
}
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connection)
?>