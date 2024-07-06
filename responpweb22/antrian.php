<?php
if (isset($_POST['Submit'])) {
    
    $nama = $_POST['nama'];
    $waktu = $_POST['waktu'];
    $notelp = $_POST['nohp'];
    $model = $_POST['model'];

    if (!empty($nama) && !empty($waktu) && !empty($notelp) && !empty($model)) {
        $file = 'data.txt';
    
        if (file_exists($file)) {
            $lines = file($file);
            $last_line = end($lines);
            $last_number = (int) explode(',', $last_line)[0];
            $nomor = $last_number + 1;
        } else {
            $nomor = 1;
        }
    
        $data = "$nomor, $nama, $notelp, $waktu, $model\n";
    
        $handle = fopen($file, 'a');
        if (fwrite($handle, $data)) {
            header("location: ./main/daftarantrian.php");
            exit();
        } else {
            echo "Data tidak berhasil disimpan";
        }
        fclose($handle);
    }
    exit(header("location: ./main/antrian.html"));
} else {
    echo "Error";
}
?>
