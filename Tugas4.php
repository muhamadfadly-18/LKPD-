<?php
$waktu;
$jam;
$menit;
$detik;
// untuk mendefinisikan bahwa variable ini type data nya string
$total = "";

if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu']; 

    if ($waktu >= 3600) {
    
        $jam = floor($waktu / 3600);
        $waktu -= ($jam * 3600);
        $total .= $jam . " jam ";
    }
    else{
        echo "0 jam";
    }
    if ($waktu >= 60) {
        $menit = floor($waktu / 60); 
        $waktu -= ($menit * 60);
        $total .= $menit . " menit ";
    }
    else{
        echo "0 menit";
    }
    $detik = $waktu;
    $total .= $detik . " detik ";
    echo $total;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
</head>
<body>
    <form action="" method="post">
        <h1>Waktu</h1>
        <div class="display: flex;">
         <!-- FOR dan ID harus sama karena agar terhubung -->
            <label for="waktu">Masukkan Waktu awal (detik) : </label>
            <input type="number" id="waktu" name="waktu">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>


