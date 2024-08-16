<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator | VATRA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>Nama     : Ghaida Putri Yunisa</p>
    <p>Kelas    : 4C - Informatika</p><hr>
    <div class="form mb-2">
        <h2>Aplikasi Meghitung BMI</h2>
    </div>

    <form class="form" method="GET">
        <div class="form-group">
            <label class="level" for="berat">Berat (kg):</label>
            <input class="input" type="text" name="berat" id="berat" placeholder="berat anda..">
        </div><br>
        <div class="form-group">
            <label class="level" for="tinggi">Tinggi (cm): </label>
            <input class="input" type="text" name="tinggi" id="tinggi" placeholder="tinggi anda..">
        </div><br>

        <div class="form-group">
            <input class="button b1" type="submit" name="hitung" value="Hitung">
            <input class="button" type="submit" name="clear" value="Clear">
        </div>
    </form>

    <div class="form mt-2 <?php if(isset($_GET['clear'])) { echo 'hide'; }  ?>">
        <?php
        if (isset($_GET['hitung'])) { 
            $berat = $_GET['berat']; 
            $tinggi = $_GET['tinggi'];
           if(empty($berat) && empty($tinggi)) {
                echo '<span class="error-text">Jangan biarkan kosong! </span>';
            }else {

            function hitungBMI($berat,$tinggi) {
                $hitungBMI = ($berat /(($tinggi * $tinggi)/10000));
                return $hitungBMI;
                }

        $hitungBMI = hitungBMI($berat, $tinggi);
        if ($hitungBMI <= 18.6) {
            $hasil = "Under Weight";
            } else if ($hitungBMI > 18.6 AND $hitungBMI<=24.9 ) {
                $hasil = "Normal Weight";
            } else if ($hitungBMI > 25 AND $hitungBMI<=30) {
                $hasil = "Over Weight";
            } else if ($hitungBMI > 31 AND $hitungBMI<=40) {
                $hasil = "OBESE";
            } else {
                $hasil = "Masukkan data sesuai dengan instruksi!";
            }
            echo "</br>Berat anda : " . $berat . "</br> Tinggi anda : " .$tinggi;
            echo "</br></br>Hasil Perhitungan BMI anda : " . $hitungBMI . "</br> Anda dinyatakan : " .$hasil ;
        }
    }

        ?>
    </div>
</body>
</html>