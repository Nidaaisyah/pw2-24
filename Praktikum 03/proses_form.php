<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$radio = $_POST['radio'];
$prodi = $_POST['prodi'];
$kehlian= $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science</h1>
<h5> Nama Lengkap : <?php echo $nama ?> </h5>
<h5> NIM : <?php echo $nim ?> </h5>
<h5>Jenis Kelamin : <?php echo $radio ?> </h5>
<h5> Prodi : <?php echo $prodi ?> </h5>
<h5> Keahlian : <?php echo $kehlian ?> </h5>
<h5> Domisili : <?php echo $domisili ?> </h5>
<h5> email : <?php echo $email ?> </h5>