<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>

<body>
    <!--PHP Dasar-->
    <h2>Belajar PHP Dasar</h2>
    <?php
    echo "Hello World";
    ?>
    <p>

    <!--Menggunakan Variable-->
    <h2>Menggunakan Variable</h2>
    <?php
    $nim = "312110056";
    $nama = 'Ahmad Syukron';
    echo "NIM : ". $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <p>
    

    <!--Predifine Variable-->
    <h2>Predifine Variable</h2>
    <?php
    echo 'Selamat Datang '. $_GET['nama'];
    ?>
    <p>
    

    <!--Form Input-->
    <h2>Form Input</h2>
    <form method="post">
        <label for="">Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
    <p>


    <!--operator-->
    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    <p>


    <!--Kondisi IF-->
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "Sunday"){
        echo "Minggu";
    }
    elseif ($nama_hari == "Monday"){
        echo "Senin";
    }
    else{
        echo "Selasa";
    }
    ?>
    <p>


    <!--Kondisi Switch-->
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari){
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }?>
    <p>

    
    <!--Perulangan for-->
    <h2>Perulangan For</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    for ($i=1; $i<=10; $i++){
        echo "Perulangan ke: ".$i.'<br/>';
    }
    
    echo "Perulangan Menurun dari 10 ke 1 <br/>";
    for ($i=10; $i>=1; $i--){
        echo "Perulangan ke: ".$i.'<br/>';
    }
    ?>
    <p>


    <!--Perulangan While-->
    <h2>Perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    $i=1;
    while ($i<=10){
        echo "Perulangan ke: ".$i.'<br/>';
        $i++;
    }
    ?>
    <p>


    <!--Perulangan dowhile-->
    <h2>Perulangan dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br/>";
    $i=1;
    do{
        echo "Perulangan ke: ".$i.'<br/>';
        $i++;
    }
    while($i<=10);
    ?>

</body>
</html>