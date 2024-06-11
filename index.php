<?php
include ('BBM.php');
if(isset($_POST['kirim'])) {
    $proses = new Beli();
    $proses->setHarga(15000, 16000, 17000, 18000);
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];
    echo $proses->cetakPembelian();
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method=POST>
    <label>Masukkan liter : </label>
    <input type="number" id="liter" name="liter"><br>


    <label>Pilih jenis :</label>
    <select id="jenis" name="jenis">
        <option value="SSuper">Shell Super</option>
        <option value="SVPower">Shell V-Power</option>
        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
        <option value="SVPowerNitro">Shell V-Power Nitro</option>
    </select> <br>
    <input type="submit" value="Beli" name="kirim">
    </form>
</center>

     
</body>
</html>