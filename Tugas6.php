<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];

    // Validasi jumlah inputan
    if (count($nilai) != 10) {
        echo "Harap input 10 nilai ujian.";
        exit;
    }

    // Mencari nilai tertinggi
    $nilai_tertinggi = max($nilai);

    // Menghitung jumlah siswa yang mendapat nilai tertinggi
    $jumlah_siswa_tertinggi = count(array_filter($nilai, function($n) use ($nilai_tertinggi) {
        return $n == $nilai_tertinggi;
    }));

    // Menampilkan hasil
    echo "Nilai tertinggi: " . $nilai_tertinggi . "<br>";
    echo "Jumlah siswa yang mendapat nilai tertinggi: " . $jumlah_siswa_tertinggi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Nilai Ujian Siswa</title>
</head>
<body>
    <h1>Input Nilai Ujian Siswa</h1>
    <form method="post" action="">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label for="nilai<?php echo $i; ?>">Nilai Siswa <?php echo $i; ?>:</label>
            <input type="number" id="nilai<?php echo $i; ?>" name="nilai[]" min="0" required><br>
        <?php endfor; ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
