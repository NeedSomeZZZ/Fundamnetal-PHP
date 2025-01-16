<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //define value
    define("gajiAwl",5000000);
    define("bonus",500000);
    define("pajak",0.12);

    //kode pengerjaan
    function inputidentitas($nama, $prykDone){
         $sblmPPN = 0;
         $stlhPPN = 0;
         $ppn = 0;
         $sblmPPN = bonus * $prykDone;
         $sblmPPN = $sblmPPN + gajiAwl;
         $ppn = $sblmPPN * pajak;
         $stlhPPN = $sblmPPN - ($sblmPPN * pajak);

         echo "Nama karyawan :". $nama ."<br/>";
         echo "Jumlah proyek yang telah selesai :". $prykDone ."<br/>";
         echo "Pendapatan ". $nama ."keseluruhan adalah : Rp". number_format($stlhPPN)."<br/>";
         echo "Dipotong oleh PPN : Rp". number_format($ppn);
         echo "<br/>";
         echo "<br/>";
    }
    //hasil akhir
    inputidentitas("Sam",9)

    //Assignment done with gouidance from Filbert and Friends.

    ?>
</body>
</html>