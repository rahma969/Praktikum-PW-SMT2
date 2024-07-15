<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nama_siswa = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $mata_kuliah = isset($_POST['matkul']) ? htmlspecialchars($_POST['matkul']) : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : 0;
    
    
    $Nilai_Akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    
    
    if ($Nilai_Akhir > 100) {
        $predikat = "Super Memuaskan";
    }
    elseif($Nilai_Akhir > 85) {
        $predikat = "Sangat Memuaskan";
    } elseif ($Nilai_Akhir >= 70) {
        $predikat = "Memuaskan";
    } elseif ($Nilai_Akhir >= 56) {
        $predikat = "Cukup";
    } elseif ($Nilai_Akhir >= 36) {
        $predikat = "Kurang";
    } else {
        $predikat = "Sangat Kurang";
    }
    
    
    $pernyataan = ($Nilai_Akhir >= 55) ? "Lulus" : "Tidak Lulus";
?>
    <h3>Keterangan Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Pernyataan</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nama_siswa; ?></td>
                <td><?php echo $mata_kuliah; ?></td>
                <td><?php echo $nilai_uts; ?></td>
                <td><?php echo $nilai_uas; ?></td>
                <td><?php echo $nilai_tugas; ?></td>
                <td><?php echo $Nilai_Akhir; ?></td>
                <td><?php echo $pernyataan; ?></td>
                <td><?php echo $predikat; ?></td>
            </tr>
        </tbody>
    </table>
<?php 
} 
?>
