<?php
            $nama = $_POST['NS'];
            $nis = $_POST['NIS'];
            $alamat = $_POST['AL'];
            $tanggal = $_POST['TL'];
            $umur = $_POST['UM'];
            $sekolah = $_POST['SKLH'];
            $rombel = $_POST['RMBL'];

           
            









            
            echo '<b>BIODATA SISWA</b>'.'<br>'.'<br>';
            echo "Nama : ".$nama.'<br>';
            echo "Nis : ".$nis.'<br>';
            echo "Alamat : ".$alamat .'<br>';
            echo "Tanggal Lahir : ".$tanggal.'<br>';
            echo "Umur : ".$umur. '<br>';

            echo "Sekolah : ".$sekolah.'<br>'; 
            echo "Rombel : ".$rombel.'<br>'.'<br>';

        
            
         
?>

<?php
$server = mysqli_connect("localhost","root","","db_pplgx");

if($server){
    echo "KONEKSI BERHASIL".'<br>';
}else{
    echo "TIDAK BERHASIL".'<br>';
}




$sql = "INSERT INTO `profile_siswa` (`nama` , `nis` , `alamat` , `tanggal_lahir` , `umur` , `sekolah` , `rombel`)
value ('$nama' , '$nis' , '$alamat' , '$tanggal' , '$umur' , '$sekolah' , '$rombel')";

if(mysqli_query($server, $sql)) {
    echo "BERHASIL DIHUBUNGKAN KE DATABASE";
}else{
    echo "GAGAL MENYIMPAN";
}
?>