<?php
            $nilai1 = $_POST['PROD'];
            $nilai2 = $_POST['MTK'];
            $nilai3 = $_POST['BINDO'];
            $nilai4 = $_POST['BING'];
            $nilai5 = $_POST['OR'];
            $nilai6 = $_POST['PAI'];
            $nilai7 = $_POST['SJR'];

            echo '<b>HASIL NILAI</b>'.'<br>'.'<br>';

            echo "Nilai Produktif = " . $nilai1 . '<br>';
            echo "Nilai Matematika = " . $nilai2 . '<br>';
            echo "Nilai Bahasa Indonesia = " . $nilai3 . '<br>';
            echo "Nilai Bahasa Inggris = " . $nilai4 . '<br>';
            echo "Nilai Olaharaga = " . $nilai5 . '<br>';
            echo "Nilai Agama =  " . $nilai6 . '<br>';
            echo "NIlai Sejarah = " . $nilai7 . '<br>';
            ?>
<?php
$server = mysqli_connect("localhost","root","","db_pplgx");

if($server){
    echo "KONEKSI BERHASIL".'<br>';
}else{
    echo "TIDAK BERHASIL".'<br>';
}




$sql = "INSERT INTO `nilai` (`prod` , `mtk` , `bin` , `bing` , `olg` , `agama` , `sjr`)
value ('$nilai1' , '$nilai2' , '$nilai3' , '$nilai4' , '$nilai5' , '$nilai6' , '$nilai7')";

if(mysqli_query($server, $sql)) {
    echo "BERHASIL DIHUBUNGKAN KE DATABASE";
}else{
    echo "GAGAL MENYIMPAN";
}
?>
