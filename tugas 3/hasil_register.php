<?php
// Periksa apakah tombol Submit telah ditekan
if(isset($_POST['submit'])) {
    // Ambil nilai-nilai dari formulir
    $nim = "0203311";
    $nama_lengkap = "Ahmad Budiman";
    $jenis_kelamin = "Laki-Laki";
    $program_studi = "SI";
    $skills = array("HTML", "CSS", "Javascript", "Python");
    $skor_skill = 90;
    $kategori_skill = "Baik";
    $email = "budiman@gmail.com";

    // Proses lebih lanjut dengan nilai-nilai yang telah diambil
    // Misalnya, simpan ke dalam database, dll.

    // Untuk contoh sederhana, kita hanya akan menampilkan kembali nilai-nilai yang telah dimasukkan
    echo "<h2>Detail Registrasi:</h2>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Nama Lengkap: $nama_lengkap</p>";
    echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    echo "<p>Program Studi: $program_studi</p>";
    echo "<p>Skills: " . implode(", ", $skills) . "</p>";
    echo "<p>Skor Skill: $skor_skill</p>";
    echo "<p>Kategori Skill: $kategori_skill</p>";
    echo "<p>Email: $email</p>";
}
?>

