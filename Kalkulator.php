<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Aplikasi Penilaian Mahasiswa</h2>
    <form method="POST" action="">
        <label>Masukkan Nilai Mata Kuliah 1:</label><br>
        <input type="number" name="nilai1" required><br><br>

        <label>Masukkan Nilai Mata Kuliah 2:</label><br>
        <input type="number" name="nilai2" required><br><br>

        <label>Masukkan Nilai Mata Kuliah 3:</label><br>
        <input type="number" name="nilai3" required><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil input dari form
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        // Menghitung nilai rata-rata
        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        // Menentukan status kelulusan
        if ($rata_rata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        // Menampilkan hasil
        echo "<h3>Hasil Penilaian:</h3>";
        echo "Nilai Rata-rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status Kelulusan: $status";
    }
    ?>
</body>
</html>